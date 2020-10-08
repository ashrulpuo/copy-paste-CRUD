<?php

namespace App\Http\Requests\Tetapan;

use Illuminate\Foundation\Http\FormRequest;

class RefBangsa extends FormRequest
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

			'RefBangsaId' => !empty($this->RefBangsaId) ? 'required|unique:RefBangsa,RefBangsaId,' . $this->RefBangsaId . ',RefBangsaId' : 'required|unique:RefBangsa,RefBangsaId',
			'KodBangsa' => !empty($this->RefBangsaId) ? 'required|unique:RefBangsa,KodBangsa,' . $this->RefBangsaId . ',KodBangsa' : 'required|unique:RefBangsa,KodBangsa',
			'kodGrpBangsa' => !empty($this->RefBangsaId) ? 'required|unique:RefBangsa,kodGrpBangsa,' . $this->RefBangsaId . ',kodGrpBangsa' : 'required|unique:RefBangsa,kodGrpBangsa',
			'Penerangan' => !empty($this->RefBangsaId) ? 'required|unique:RefBangsa,Penerangan,' . $this->RefBangsaId . ',Penerangan' : 'required|unique:RefBangsa,Penerangan',
			'Papar' => '',
        ];
    }
}
