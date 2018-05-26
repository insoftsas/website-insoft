<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\API\GetCitiesAPIRequest;
use App\Repositories\CentralRepository;
use Illuminate\Http\Request;
use Response;

/**
 * Class EnterpriseController
 * @package App\Http\Controllers\API
 */

class CentralAPIController extends AppBaseController
{
    /** @var  EnterpriseRepository */
    private $centralRepository;

    public function __construct(CentralRepository $centralRepo)
    {
        $this->centralRepository = $centralRepo;
    }

    public function states()
    {
        $states = $this->centralRepository->stateSortCustom();

        return $this->sendResponse($states->toArray(), 'States send success');
    }

    public function getCities(GetCitiesAPIRequest $request)
    {
        $cities = $this->centralRepository->getCities($request->state);

        return $this->sendResponse($cities->toArray(), 'Cities send success');
    }

    
}
