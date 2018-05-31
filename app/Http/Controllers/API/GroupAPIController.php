<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateGroupAPIRequest;
use App\Http\Requests\API\UpdateGroupAPIRequest;
use App\Models\Group;
use App\Repositories\GroupRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class GroupController
 * @package App\Http\Controllers\API
 */

class GroupAPIController extends AppBaseController
{
    /** @var  GroupRepository */
    private $groupRepository;

    public function __construct(GroupRepository $groupRepo)
    {
        $this->middleware(['auth:api','roles:root']);
        $this->groupRepository = $groupRepo;
    }

    /**
     * Display a listing of the Group.
     * GET|HEAD /groups
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->groupRepository->pushCriteria(new RequestCriteria($request));
        $this->groupRepository->pushCriteria(new LimitOffsetCriteria($request));
        $groups = $this->groupRepository->allRelations();

        return $this->sendResponse($groups->toArray(), 'Groups retrieved successfully');
    }

    /**
     * Store a newly created Group in storage.
     * POST /groups
     *
     * @param CreateGroupAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateGroupAPIRequest $request)
    {
        $input = $request->all();

        $groups = $this->groupRepository->create($input);

        return $this->sendResponse($groups->toArray(), 'Group saved successfully');
    }

    /**
     * Display the specified Group.
     * GET|HEAD /groups/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Group $group */
        $group = $this->groupRepository->findWithoutFail($id);

        if (empty($group)) {
            return $this->sendError('Group not found');
        }

        return $this->sendResponse($group->toArray(), 'Group retrieved successfully');
    }

    /**
     * Update the specified Group in storage.
     * PUT/PATCH /groups/{id}
     *
     * @param  int $id
     * @param UpdateGroupAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateGroupAPIRequest $request)
    {
        $input = $request->all();

        /** @var Group $group */
        $group = $this->groupRepository->findWithoutFail($id);

        if (empty($group)) {
            return $this->sendError('Group not found');
        }

        $group = $this->groupRepository->update($input, $id);

        return $this->sendResponse($group->toArray(), 'Group updated successfully');
    }

    /**
     * Remove the specified Group from storage.
     * DELETE /groups/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Group $group */
        $group = $this->groupRepository->findWithoutFail($id);

        if (empty($group)) {
            return $this->sendError('Group not found');
        }

        $group->delete();

        return $this->sendResponse($id, 'Group deleted successfully');
    }
}
