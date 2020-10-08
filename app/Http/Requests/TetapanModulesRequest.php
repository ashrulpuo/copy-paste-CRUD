<?php

namespace App\Http\Requests\Tetapan;

use Illuminate\Foundation\Http\FormRequest;

class Modules extends FormRequest
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

			'ModulesId' => !empty($this->ModulesId) ? 'required|unique:Modules,ModulesId,' . $this->ModulesId . ',ModulesId' : 'required|unique:Modules,ModulesId',
			'Module' => !empty($this->ModulesId) ? 'required|unique:Modules,Module,' . $this->ModulesId . ',Module' : 'required|unique:Modules,Module',
			'Keterangan' => !empty($this->ModulesId) ? 'required|unique:Modules,Keterangan,' . $this->ModulesId . ',Keterangan' : 'required|unique:Modules,Keterangan',
			'Parent' => !empty($this->ModulesId) ? 'required|unique:Modules,Parent,' . $this->ModulesId . ',Parent' : 'required|unique:Modules,Parent',
			'Default' => !empty($this->ModulesId) ? 'required|unique:Modules,Default,' . $this->ModulesId . ',Default' : 'required|unique:Modules,Default',
			'created_at' => !empty($this->ModulesId) ? 'required|unique:Modules,created_at,' . $this->ModulesId . ',created_at' : 'required|unique:Modules,created_at',
			'updated_at' => !empty($this->ModulesId) ? 'required|unique:Modules,updated_at,' . $this->ModulesId . ',updated_at' : 'required|unique:Modules,updated_at',
        ];
    }
}
