<?php

namespace App\Repositories;

use App\Models\City;
use App\Models\State;
use App\User;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CentralRepository
 * @package App\Repositories
 * @version October 14, 2017, 2:33 pm -05
 *
*/
class CentralRepository //extends BaseRepository
{


    public $gender = ['M' => 'Masculino', 'F' => 'Femenino', 'LGBTI' => 'LGBTI', 'NA' => 'No Especificó'];

    public $statusBool = ['0' => 'Activo', '1' => 'Inactivo'];

    
    public $documentType = ['CC' => 'Cédula', 'CE' => 'Cédula Extranjería', 'TI' => 'Tarjeta de Identidad'];

    public $stateQuestion = ['1' => 'Esperando respuesta', '2' => 'Finalizada', '3' => 'Pregunta bloqueada'];

   
    public function uniqueId()
    {
        return str_replace( '.', 'xs', uniqid(rand(), true) );
    }

    
    public function stateSortCustom()
    {
        $states = State::all();

        $rate = [ 12, 1, 27, 4, 3, 13 ];

        $newState = collect();
        foreach ($rate as $value) {
            $newState->push($states->pull($value));
        }

        $newState = $newState->merge( $states->shuffle() );

        return $newState;
    }  

    public function user_id()
    {
        return User::pluck('name', 'id');
    }

    public function state_id()
    {
        return State::pluck('name', 'id');
    }

    public function getCities($state)
    {
        $cities = City::where('state_id', $state)->get();

        return $cities;
    }


    public function city_id()
    {
        $array = [];
            foreach ( City::with('state')->whereIn('id', [502, 492, 495, 498, 501, 504, 509, 514, 515, 511])->orderBy('name')->get() as $key => $value )
            {
                $array[$value->id] = $value->name.", ".$value->state->name;
            }
        return $array;
    }
   



}
