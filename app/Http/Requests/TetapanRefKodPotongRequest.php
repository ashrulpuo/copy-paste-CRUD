<?php

namespace App\Http\Requests\Tetapan;

use Illuminate\Foundation\Http\FormRequest;

class RefKodPotong extends FormRequest
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

			'RefKodPotongId' => !empty($this->RefKodPotongId) ? 'required|unique:RefKodPotong,RefKodPotongId,' . $this->RefKodPotongId . ',RefKodPotongId' : 'required|unique:RefKodPotong,RefKodPotongId',
			'KodPotong' => !empty($this->RefKodPotongId) ? 'required|unique:RefKodPotong,KodPotong,' . $this->RefKodPotongId . ',KodPotong' : 'required|unique:RefKodPotong,KodPotong',
			'Penerangan' => !empty($this->RefKodPotongId) ? 'required|unique:RefKodPotong,Penerangan,' . $this->RefKodPotongId . ',Penerangan' : 'required|unique:RefKodPotong,Penerangan',
        ];
    }
}
