<?php

namespace App\Http\Requests\Tetapan;

use Illuminate\Foundation\Http\FormRequest;

class ModuleRoutes extends FormRequest
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

			'RoleRoutesId' => !empty($this->ModuleRoutesId) ? 'required|unique:ModuleRoutes,RoleRoutesId,' . $this->ModuleRoutesId . ',RoleRoutesId' : 'required|unique:ModuleRoutes,RoleRoutesId',
			'ModulesId' => !empty($this->ModuleRoutesId) ? 'required|unique:ModuleRoutes,ModulesId,' . $this->ModuleRoutesId . ',ModulesId' : 'required|unique:ModuleRoutes,ModulesId',
			'RoutesId' => !empty($this->ModuleRoutesId) ? 'required|unique:ModuleRoutes,RoutesId,' . $this->ModuleRoutesId . ',RoutesId' : 'required|unique:ModuleRoutes,RoutesId',
			'created_at' => !empty($this->ModuleRoutesId) ? 'required|unique:ModuleRoutes,created_at,' . $this->ModuleRoutesId . ',created_at' : 'required|unique:ModuleRoutes,created_at',
			'updated_at' => !empty($this->ModuleRoutesId) ? 'required|unique:ModuleRoutes,updated_at,' . $this->ModuleRoutesId . ',updated_at' : 'required|unique:ModuleRoutes,updated_at',
        ];
    }
}
