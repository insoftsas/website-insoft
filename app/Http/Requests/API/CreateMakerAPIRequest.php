<?php

namespace App\Http\Requests\API;

use App\Models\Maker;
use InfyOm\Generator\Request\APIRequest;

class CreateMakerAPIRequest extends APIRequest
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
            'new_group'         => '',
            'group_name'        => 'required_if:new_group,1',
            'group_description' => 'required_if:new_group,1',
            'join_group_code'   => '',
            'first_name'        => 'required|string',
            'last_name'         => 'required|string',
            'doc_type'          => 'required|string',
            'genere'            => 'required|string',
            'bird_date'         => 'required|date',
            'city_id'           => 'required|numeric|exists:cities,id',
            'email'             => 'required|email|unique:makers,email',
            'phone'             => 'required',
            'level'             => 'required|string',
            'semester'          => 'required_if:level,Estudiante',
            'area'              => 'required|string',
            'career'            => 'required|string',
            'skills'            => 'required|string',
            'bio'               => '',
            'file_document'     => 'mimes:jpeg,bmp,png,pdf',
            'file_certificate'  => 'mimes:jpeg,bmp,png,pdf',
            'terms'             => 'required',
        ];

        switch (request()->doc_type) {
          case 'CC':
            $rules['document'] = ['required', "regex:/^[1-9][0-9]{4,9}$/"];
            break;

          case 'CE':
            $rules['document'] = ['required', "regex:/^([a-zA-Z]{1,5})?[1-9][0-9]{3,7}$/"];
            break;
          case 'TI':
            $rules['document'] = ['required', "regex:/^[1-9][0-9]{4,11}$/"];
            break;

          case 'SSN':
            $rules['document'] = ['required', "regex:/^([0-9]{3}\\-[0-9]{2}\\-[0-9]{4}|[0-9]{9})$/"];
            break;

          case 'PPN':
            $rules['document'] = ['required', "regex:/^[a-zA-z0-9]{4,12}$/"];
            break;
          
          default:
            $rules['document'] = ['required', "regex:/^[1-9][0-9]{4,9}$/"]; //por defecto el de cédula
            break;
        }

        return $rules;
    }
}
