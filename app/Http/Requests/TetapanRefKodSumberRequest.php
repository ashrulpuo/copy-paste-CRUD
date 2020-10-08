<?php

namespace App\Http\Requests\Tetapan;

use Illuminate\Foundation\Http\FormRequest;

class RefKodSumber extends FormRequest
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

			'RefKodSumberId' => !empty($this->RefKodSumberId) ? 'required|unique:RefKodSumber,RefKodSumberId,' . $this->RefKodSumberId . ',RefKodSumberId' : 'required|unique:RefKodSumber,RefKodSumberId',
			'KodSumber' => !empty($this->RefKodSumberId) ? 'required|unique:RefKodSumber,KodSumber,' . $this->RefKodSumberId . ',KodSumber' : 'required|unique:RefKodSumber,KodSumber',
			'Penerangan' => !empty($this->RefKodSumberId) ? 'required|unique:RefKodSumber,Penerangan,' . $this->RefKodSumberId . ',Penerangan' : 'required|unique:RefKodSumber,Penerangan',
        ];
    }
}
