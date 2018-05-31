<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateEnterpriseAPIRequest;
use App\Http\Requests\API\UpdateEnterpriseAPIRequest;
use App\Models\Group;
use App\Models\Maker;
use App\Models\Enterprise;
use App\Repositories\EnterpriseRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class EnterpriseController
 * @package App\Http\Controllers\API
 */

class EnterpriseAPIController extends AppBaseController
{
    /** @var  EnterpriseRepository */
    private $enterpriseRepository;

    public function __construct(EnterpriseRepository $enterpriseRepo)
    {
        $this->middleware(['auth:api','roles:root'])->except('store');
        $this->enterpriseRepository = $enterpriseRepo;
    }

    /**
     * Display a listing of the Enterprise.
     * GET|HEAD /enterprises
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->enterpriseRepository->pushCriteria(new RequestCriteria($request));
        $this->enterpriseRepository->pushCriteria(new LimitOffsetCriteria($request));
        $enterprises = $this->enterpriseRepository->all();

        return $this->sendResponse($enterprises->toArray(), 'Enterprises retrieved successfully');
    }

    /**
     * Store a newly created Enterprise in storage.
     * POST /enterprises
     *
     * @param CreateEnterpriseAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateEnterpriseAPIRequest $request)
    {
        $input = $request->all();

        if (Maker::where('email',$input['email'])->count() != 0)
        {
            return $this->sendError('Ya existe un maker registrado con este correo.');
        }else if(Enterprise::where('email',$input['email'])->count() != 0){
            return $this->sendError('Ya existe una empresa registrada con este correo.');
        }
        
        $enterprises = $this->enterpriseRepository->create($input);

        return $this->sendResponse($enterprises->toArray(), 'Enterprise saved successfully');
    }

    /**
     * Display the specified Enterprise.
     * GET|HEAD /enterprises/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Enterprise $enterprise */
        $enterprise = $this->enterpriseRepository->findWithoutFail($id);

        if (empty($enterprise)) {
            return $this->sendError('Enterprise not found');
        }

        return $this->sendResponse($enterprise->toArray(), 'Enterprise retrieved successfully');
    }

    /**
     * Update the specified Enterprise in storage.
     * PUT/PATCH /enterprises/{id}
     *
     * @param  int $id
     * @param UpdateEnterpriseAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEnterpriseAPIRequest $request)
    {
        $input = $request->all();

        /** @var Enterprise $enterprise */
        $enterprise = $this->enterpriseRepository->findWithoutFail($id);

        if (empty($enterprise)) {
            return $this->sendError('Enterprise not found');
        }

        $enterprise = $this->enterpriseRepository->update($input, $id);

        return $this->sendResponse($enterprise->toArray(), 'Enterprise updated successfully');
    }

    /**
     * Remove the specified Enterprise from storage.
     * DELETE /enterprises/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Enterprise $enterprise */
        $enterprise = $this->enterpriseRepository->findWithoutFail($id);

        if (empty($enterprise)) {
            return $this->sendError('Enterprise not found');
        }

        $enterprise->delete();

        return $this->sendResponse($id, 'Enterprise deleted successfully');
    }
}
