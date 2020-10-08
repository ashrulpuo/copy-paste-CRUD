<?php

namespace App\Http\Requests\Tetapan;

use Illuminate\Foundation\Http\FormRequest;

class RefKodUnit extends FormRequest
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

			'RefKodUnitId' => !empty($this->RefKodUnitId) ? 'required|unique:RefKodUnit,RefKodUnitId,' . $this->RefKodUnitId . ',RefKodUnitId' : 'required|unique:RefKodUnit,RefKodUnitId',
			'KodUnit' => !empty($this->RefKodUnitId) ? 'required|unique:RefKodUnit,KodUnit,' . $this->RefKodUnitId . ',KodUnit' : 'required|unique:RefKodUnit,KodUnit',
			'Penerangan' => !empty($this->RefKodUnitId) ? 'required|unique:RefKodUnit,Penerangan,' . $this->RefKodUnitId . ',Penerangan' : 'required|unique:RefKodUnit,Penerangan',
        ];
    }
}
