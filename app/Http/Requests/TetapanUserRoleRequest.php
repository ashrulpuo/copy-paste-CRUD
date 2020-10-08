<?php

namespace App\Http\Requests\Tetapan;

use Illuminate\Foundation\Http\FormRequest;

class UserRole extends FormRequest
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

			'UserRoleId' => !empty($this->UserRoleId) ? 'required|unique:UserRole,UserRoleId,' . $this->UserRoleId . ',UserRoleId' : 'required|unique:UserRole,UserRoleId',
			'RoleId' => !empty($this->UserRoleId) ? 'required|unique:UserRole,RoleId,' . $this->UserRoleId . ',RoleId' : 'required|unique:UserRole,RoleId',
			'PenggunaId' => !empty($this->UserRoleId) ? 'required|unique:UserRole,PenggunaId,' . $this->UserRoleId . ',PenggunaId' : 'required|unique:UserRole,PenggunaId',
        ];
    }
}
