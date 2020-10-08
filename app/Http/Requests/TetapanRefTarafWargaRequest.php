<?php

namespace App\Http\Requests\Tetapan;

use Illuminate\Foundation\Http\FormRequest;

class RefTarafWarga extends FormRequest
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

			'RefTarafWargaId' => !empty($this->RefTarafWargaId) ? 'required|unique:RefTarafWarga,RefTarafWargaId,' . $this->RefTarafWargaId . ',RefTarafWargaId' : 'required|unique:RefTarafWarga,RefTarafWargaId',
			'KodTarafWarga' => !empty($this->RefTarafWargaId) ? 'required|unique:RefTarafWarga,KodTarafWarga,' . $this->RefTarafWargaId . ',KodTarafWarga' : 'required|unique:RefTarafWarga,KodTarafWarga',
			'Penerangan' => !empty($this->RefTarafWargaId) ? 'required|unique:RefTarafWarga,Penerangan,' . $this->RefTarafWargaId . ',Penerangan' : 'required|unique:RefTarafWarga,Penerangan',
        ];
    }
}
