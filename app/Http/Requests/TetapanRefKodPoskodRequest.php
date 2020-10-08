<?php

namespace App\Http\Requests\Tetapan;

use Illuminate\Foundation\Http\FormRequest;

class RefKodPoskod extends FormRequest
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

			'RefKodPoskodId' => !empty($this->RefKodPoskodId) ? 'required|unique:RefKodPoskod,RefKodPoskodId,' . $this->RefKodPoskodId . ',RefKodPoskodId' : 'required|unique:RefKodPoskod,RefKodPoskodId',
			'RpoPostcode' => !empty($this->RefKodPoskodId) ? 'required|unique:RefKodPoskod,RpoPostcode,' . $this->RefKodPoskodId . ',RpoPostcode' : 'required|unique:RefKodPoskod,RpoPostcode',
			'BandarId' => !empty($this->RefKodPoskodId) ? 'required|unique:RefKodPoskod,BandarId,' . $this->RefKodPoskodId . ',BandarId' : 'required|unique:RefKodPoskod,BandarId',
			'NegeriId' => !empty($this->RefKodPoskodId) ? 'required|unique:RefKodPoskod,NegeriId,' . $this->RefKodPoskodId . ',NegeriId' : 'required|unique:RefKodPoskod,NegeriId',
        ];
    }
}
