<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateMakerAPIRequest;
use App\Http\Requests\API\UpdateMakerAPIRequest;
use App\Models\Maker;
use App\Repositories\MakerRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class MakerController
 * @package App\Http\Controllers\API
 */

class MakerAPIController extends AppBaseController
{
    /** @var  MakerRepository */
    private $makerRepository;

    public function __construct(MakerRepository $makerRepo)
    {
        $this->makerRepository = $makerRepo;
    }

    /**
     * Display a listing of the Maker.
     * GET|HEAD /makers
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->makerRepository->pushCriteria(new RequestCriteria($request));
        $this->makerRepository->pushCriteria(new LimitOffsetCriteria($request));
        $makers = $this->makerRepository->all();

        return $this->sendResponse($makers->toArray(), 'Makers retrieved successfully');
    }

    /**
     * Store a newly created Maker in storage.
     * POST /makers
     *
     * @param CreateMakerAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateMakerAPIRequest $request)
    {
        $input = $request->all();

        $makers = $this->makerRepository->create($input);

        return $this->sendResponse($makers->toArray(), 'Maker saved successfully');
    }

    /**
     * Display the specified Maker.
     * GET|HEAD /makers/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Maker $maker */
        $maker = $this->makerRepository->findWithoutFail($id);

        if (empty($maker)) {
            return $this->sendError('Maker not found');
        }

        return $this->sendResponse($maker->toArray(), 'Maker retrieved successfully');
    }

    /**
     * Update the specified Maker in storage.
     * PUT/PATCH /makers/{id}
     *
     * @param  int $id
     * @param UpdateMakerAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMakerAPIRequest $request)
    {
        $input = $request->all();

        /** @var Maker $maker */
        $maker = $this->makerRepository->findWithoutFail($id);

        if (empty($maker)) {
            return $this->sendError('Maker not found');
        }

        $maker = $this->makerRepository->update($input, $id);

        return $this->sendResponse($maker->toArray(), 'Maker updated successfully');
    }

    /**
     * Remove the specified Maker from storage.
     * DELETE /makers/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Maker $maker */
        $maker = $this->makerRepository->findWithoutFail($id);

        if (empty($maker)) {
            return $this->sendError('Maker not found');
        }

        $maker->delete();

        return $this->sendResponse($id, 'Maker deleted successfully');
    }
}
