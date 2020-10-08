<?php

namespace App\Http\Requests\Tetapan;

use Illuminate\Foundation\Http\FormRequest;

class RefStatusRalat extends FormRequest
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

			'RefStatusRalatId' => !empty($this->RefStatusRalatId) ? 'required|unique:RefStatusRalat,RefStatusRalatId,' . $this->RefStatusRalatId . ',RefStatusRalatId' : 'required|unique:RefStatusRalat,RefStatusRalatId',
			'Penerangan' => !empty($this->RefStatusRalatId) ? 'required|unique:RefStatusRalat,Penerangan,' . $this->RefStatusRalatId . ',Penerangan' : 'required|unique:RefStatusRalat,Penerangan',
        ];
    }
}
