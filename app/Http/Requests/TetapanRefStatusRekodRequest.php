<?php

namespace App\Http\Requests\Tetapan;

use Illuminate\Foundation\Http\FormRequest;

class RefStatusRekod extends FormRequest
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

			'RefStatusRekodId' => !empty($this->RefStatusRekodId) ? 'required|unique:RefStatusRekod,RefStatusRekodId,' . $this->RefStatusRekodId . ',RefStatusRekodId' : 'required|unique:RefStatusRekod,RefStatusRekodId',
			'KodStatusRekod' => !empty($this->RefStatusRekodId) ? 'required|unique:RefStatusRekod,KodStatusRekod,' . $this->RefStatusRekodId . ',KodStatusRekod' : 'required|unique:RefStatusRekod,KodStatusRekod',
			'Penerangan' => !empty($this->RefStatusRekodId) ? 'required|unique:RefStatusRekod,Penerangan,' . $this->RefStatusRekodId . ',Penerangan' : 'required|unique:RefStatusRekod,Penerangan',
        ];
    }
}
