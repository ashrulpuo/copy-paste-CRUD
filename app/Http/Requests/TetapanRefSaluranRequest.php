<?php

namespace App\Http\Requests\Tetapan;

use Illuminate\Foundation\Http\FormRequest;

class RefSaluran extends FormRequest
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

			'RefSaluranId' => !empty($this->RefSaluranId) ? 'required|unique:RefSaluran,RefSaluranId,' . $this->RefSaluranId . ',RefSaluranId' : 'required|unique:RefSaluran,RefSaluranId',
			'saluran' => !empty($this->RefSaluranId) ? 'required|unique:RefSaluran,saluran,' . $this->RefSaluranId . ',saluran' : 'required|unique:RefSaluran,saluran',
			'Penerangan' => !empty($this->RefSaluranId) ? 'required|unique:RefSaluran,Penerangan,' . $this->RefSaluranId . ',Penerangan' : 'required|unique:RefSaluran,Penerangan',
        ];
    }
}
