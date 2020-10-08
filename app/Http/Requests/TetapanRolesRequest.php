<?php

namespace App\Http\Requests\Tetapan;

use Illuminate\Foundation\Http\FormRequest;

class Roles extends FormRequest
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

			'RoleId' => !empty($this->RolesId) ? 'required|unique:Roles,RoleId,' . $this->RolesId . ',RoleId' : 'required|unique:Roles,RoleId',
			'Role' => !empty($this->RolesId) ? 'required|unique:Roles,Role,' . $this->RolesId . ',Role' : 'required|unique:Roles,Role',
			'Keterangan' => !empty($this->RolesId) ? 'required|unique:Roles,Keterangan,' . $this->RolesId . ',Keterangan' : 'required|unique:Roles,Keterangan',
			'Default' => !empty($this->RolesId) ? 'required|unique:Roles,Default,' . $this->RolesId . ',Default' : 'required|unique:Roles,Default',
			'Pentadbir' => !empty($this->RolesId) ? 'required|unique:Roles,Pentadbir,' . $this->RolesId . ',Pentadbir' : 'required|unique:Roles,Pentadbir',
			'deleted_at' => !empty($this->RolesId) ? 'required|unique:Roles,deleted_at,' . $this->RolesId . ',deleted_at' : 'required|unique:Roles,deleted_at',
			'created_at' => !empty($this->RolesId) ? 'required|unique:Roles,created_at,' . $this->RolesId . ',created_at' : 'required|unique:Roles,created_at',
			'updated_at' => !empty($this->RolesId) ? 'required|unique:Roles,updated_at,' . $this->RolesId . ',updated_at' : 'required|unique:Roles,updated_at',
        ];
    }
}
