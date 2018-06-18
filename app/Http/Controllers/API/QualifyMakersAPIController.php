<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateQualifyMakersAPIRequest;
use App\Http\Requests\API\UpdateQualifyMakersAPIRequest;
use App\Models\QualifyMakers;
use App\Repositories\QualifyMakersRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class QualifyController
 * @package App\Http\Controllers\API
 */

class QualifyMakersAPIController extends AppBaseController
{
    /** @var  QualifyRepository */
    private $qualifyMakersRepository;

    public function __construct(QualifyMakersRepository $qualifyRepo)
    {
        $this->qualifyMakersRepository = $qualifyRepo;
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
        $this->qualifyMakersRepository->pushCriteria(new RequestCriteria($request));
        $this->qualifyMakersRepository->pushCriteria(new LimitOffsetCriteria($request));
        $qualifies = $this->qualifyMakersRepository->all();

        return $this->sendResponse($qualifies->toArray(), 'Qualifies Makers retrieved successfully');
    }

    /**
     * Store a newly created Qualify in storage.
     * POST /qualifies
     *
     * @param CreateQualifyMakersAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateQualifyMakersAPIRequest $request)
    {
        $input = $request->all();

        $qualifies = $this->qualifyMakersRepository->create($input);

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
        $qualify = $this->qualifyMakersRepository->findWithoutFail($id);

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
     * @param UpdateQualifyMakersAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateQualifyMakersAPIRequest $request)
    {
        $input = $request->all();

        /** @var Qualify $qualify */
        $qualify = $this->qualifyMakersRepository->findWithoutFail($id);

        if (empty($qualify)) {
            return $this->sendError('Qualify not found');
        }

        $qualify = $this->qualifyMakersRepository->update($input, $id);

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
        $qualify = $this->qualifyMakersRepository->findWithoutFail($id);

        if (empty($qualify)) {
            return $this->sendError('Qualify not found');
        }

        $qualify->delete();

        return $this->sendResponse($id, 'Qualify deleted successfully');
    }
}
