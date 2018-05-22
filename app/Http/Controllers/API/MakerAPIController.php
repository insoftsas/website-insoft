<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\API\CreateMakerAPIRequest;
use App\Http\Requests\API\UpdateMakerAPIRequest;
use App\Models\Group;
use App\Models\Maker;
use App\Repositories\MakerRepository;
use Carbon\Carbon;
use Illuminate\Http\Request;
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
        $this->middleware('auth:api')->except('store');
        $this->middleware('roles:root')->except('store');
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
        $input = $request->only(['first_name', 'last_name', 'doc_type', 'document', 'genere', 'bird_date', 'city_id', 'email', 'phone', 'level', 'semester', 'area', 'career', 'skills', 'bio', 'file_document', 'file_certificate']);


        if ($request->new_group == 1) 
        {
            $group = Group::where('name', $request->group_name)->first();
            if (!empty($group)) {
                return $this->sendError('Su grupo ya se encuentra registrado en nuestro sistema');
            }

            $code_new = mb_strtoupper(substr(uniqid(), -6));

            while (!empty(Group::where('code', $code_new)->first())) {
                $code_new = mb_strtoupper(substr(uniqid(), -6));
            }
        } else {
      
            if (!empty($request->group_code)) {
                $group = Group::where('code', $request->group_code)->first();
                if (empty($group)) {
                    return $this->sendError('Codigo de grupo no encontrado');
                } else {
                    $input['group_id'] = $group->id;
                }
                //falta validacion de cantidad de participantes en cada grupo
            }

        }

        $bird_date = Carbon::createFromFormat('Y-m-d', $request->bird_date);
        $age = $bird_date->diffInYears(Carbon::today());
        if ($age<16 || $age>30)
        {
            return $this->sendError('La edad permitida para el evento es de 16-30 años de edad');
        }

        $maker = $this->makerRepository->create($input);

        if ($request->new_group == 1) 
        {

            $groupCreated = Group::create([
                'name' => $request->group_name,
                'code' => $code_new,
                'leader_id' => $maker->id,
                'description' => $request->description,
            ]);
            if (!empty($group)) {
                return $this->sendError('Su grupo ya se encuentra registrado en nuestro sistema');
            }
        }


        return $this->sendResponse([], 'Maker Registrado correctamente');
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
