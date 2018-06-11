<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateQualifyAPIRequest;
use App\Http\Requests\API\UpdateQualifyAPIRequest;
use App\Models\Qualify;
use App\Repositories\QualifyRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class QualifyController
 * @package App\Http\Controllers\API
 */

class QualifyAPIController extends AppBaseController
{
    /** @var  QualifyRepository */
    private $qualifyRepository;

    public function __construct(QualifyRepository $qualifyRepo)
    {
        $this->qualifyRepository = $qualifyRepo;
        $this->middleware('roles:root')->except(['store']);
    }

    /**
     * Display a listing of the Qualify.
     * GET|HEAD /qualifies
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->qualifyRepository->pushCriteria(new RequestCriteria($request));
        $this->qualifyRepository->pushCriteria(new LimitOffsetCriteria($request));
        $qualifies = $this->qualifyRepository->all();

        return $this->sendResponse($qualifies->toArray(), 'Qualifies retrieved successfully');
    }

    /**
     * Store a newly created Qualify in storage.
     * POST /qualifies
     *
     * @param CreateQualifyAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateQualifyAPIRequest $request)
    {
        $input = $request->all();

        $qualifies = $this->qualifyRepository->create($input);

        return $this->sendResponse($qualifies->toArray(), 'Qualify saved successfully');
    }

    /**
     * Display the specified Qualify.
     * GET|HEAD /qualifies/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Qualify $qualify */
        $qualify = $this->qualifyRepository->findWithoutFail($id);

        if (empty($qualify)) {
            return $this->sendError('Qualify not found');
        }

        return $this->sendResponse($qualify->toArray(), 'Qualify retrieved successfully');
    }

    /**
     * Update the specified Qualify in storage.
     * PUT/PATCH /qualifies/{id}
     *
     * @param  int $id
     * @param UpdateQualifyAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateQualifyAPIRequest $request)
    {
        $input = $request->all();

        /** @var Qualify $qualify */
        $qualify = $this->qualifyRepository->findWithoutFail($id);

        if (empty($qualify)) {
            return $this->sendError('Qualify not found');
        }

        $qualify = $this->qualifyRepository->update($input, $id);

        return $this->sendResponse($qualify->toArray(), 'Qualify updated successfully');
    }

    /**
     * Remove the specified Qualify from storage.
     * DELETE /qualifies/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Qualify $qualify */
        $qualify = $this->qualifyRepository->findWithoutFail($id);

        if (empty($qualify)) {
            return $this->sendError('Qualify not found');
        }

        $qualify->delete();

        return $this->sendResponse($id, 'Qualify deleted successfully');
    }
}
