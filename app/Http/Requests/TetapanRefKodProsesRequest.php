<?php

namespace App\Http\Requests\Tetapan;

use Illuminate\Foundation\Http\FormRequest;

class RefKodProses extends FormRequest
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

			'RefKodProsesId' => !empty($this->RefKodProsesId) ? 'required|unique:RefKodProses,RefKodProsesId,' . $this->RefKodProsesId . ',RefKodProsesId' : 'required|unique:RefKodProses,RefKodProsesId',
			'KodProses' => !empty($this->RefKodProsesId) ? 'required|unique:RefKodProses,KodProses,' . $this->RefKodProsesId . ',KodProses' : 'required|unique:RefKodProses,KodProses',
			'Penerangan' => !empty($this->RefKodProsesId) ? 'required|unique:RefKodProses,Penerangan,' . $this->RefKodProsesId . ',Penerangan' : 'required|unique:RefKodProses,Penerangan',
        ];
    }
}
