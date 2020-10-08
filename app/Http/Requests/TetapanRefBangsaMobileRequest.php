<?php

namespace App\Http\Requests\Tetapan;

use Illuminate\Foundation\Http\FormRequest;

class RefBangsaMobile extends FormRequest
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

			'RefBangsaMobileId' => !empty($this->RefBangsaMobileId) ? 'required|unique:RefBangsaMobile,RefBangsaMobileId,' . $this->RefBangsaMobileId . ',RefBangsaMobileId' : 'required|unique:RefBangsaMobile,RefBangsaMobileId',
			'KodBangsa' => !empty($this->RefBangsaMobileId) ? 'required|unique:RefBangsaMobile,KodBangsa,' . $this->RefBangsaMobileId . ',KodBangsa' : 'required|unique:RefBangsaMobile,KodBangsa',
			'Penerangan' => !empty($this->RefBangsaMobileId) ? 'required|unique:RefBangsaMobile,Penerangan,' . $this->RefBangsaMobileId . ',Penerangan' : 'required|unique:RefBangsaMobile,Penerangan',
        ];
    }
}
