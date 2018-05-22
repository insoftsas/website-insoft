<?php

namespace App\Http\Requests\API;

use App\Models\Enterprise;
use InfyOm\Generator\Request\APIRequest;

class CreateEnterpriseAPIRequest extends APIRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'razon_social_propietario' => 'required|string',
            'nit'                      => ['required',
            "unique:enterprises,nit", "regex:/^[1-9][0-9]{6,8}(\\-[0-9])?$/"],
            'representante_legal'      => 'required|string',
            'actividad_comercial'      => 'required|string',
            'sector_productivo'        => 'required|string',
            'city_id'                  => 'required|numeric|exists:cities,id',
            'neigboard'                => 'required|string',
            'address'                  => 'required|string',
            'phone'                    => 'required|string',
            'email'                    => 'required|email|unique:enterprises,email',
            'file_rut'                 => 'mimes:jpeg,bmp,png,pdf'
        ];


        return $rules;
    }
}
