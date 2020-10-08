<?php

namespace App\Http\Requests\Tetapan;

use Illuminate\Foundation\Http\FormRequest;

class RoleModule extends FormRequest
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
        //check request for unique value
        return [

			'RoleModule' => !empty($this->RoleModuleId) ? 'required|unique:RoleModule,RoleModule,' . $this->RoleModuleId . ',RoleModule' : 'required|unique:RoleModule,RoleModule',
			'RoleId' => !empty($this->RoleModuleId) ? 'required|unique:RoleModule,RoleId,' . $this->RoleModuleId . ',RoleId' : 'required|unique:RoleModule,RoleId',
			'ModulesId' => !empty($this->RoleModuleId) ? 'required|unique:RoleModule,ModulesId,' . $this->RoleModuleId . ',ModulesId' : 'required|unique:RoleModule,ModulesId',
        ];
    }
}
