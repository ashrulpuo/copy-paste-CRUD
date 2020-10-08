<?php

namespace App\Http\Requests\Tetapan;

use Illuminate\Foundation\Http\FormRequest;

class RefBandar extends FormRequest
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

			'RefBandarId' => !empty($this->RefBandarId) ? 'required|unique:RefBandar,RefBandarId,' . $this->RefBandarId . ',RefBandarId' : 'required|unique:RefBandar,RefBandarId',
			'Penerangan' => !empty($this->RefBandarId) ? 'required|unique:RefBandar,Penerangan,' . $this->RefBandarId . ',Penerangan' : 'required|unique:RefBandar,Penerangan',
			'StateId' => !empty($this->RefBandarId) ? 'required|unique:RefBandar,StateId,' . $this->RefBandarId . ',StateId' : 'required|unique:RefBandar,StateId',
			'RujukanBandarSpr' => !empty($this->RefBandarId) ? 'required|unique:RefBandar,RujukanBandarSpr,' . $this->RefBandarId . ',RujukanBandarSpr' : 'required|unique:RefBandar,RujukanBandarSpr',
			'RujukanBandarMyidentity' => !empty($this->RefBandarId) ? 'required|unique:RefBandar,RujukanBandarMyidentity,' . $this->RefBandarId . ',RujukanBandarMyidentity' : 'required|unique:RefBandar,RujukanBandarMyidentity',
			'Papar' => '',
        ];
    }
}
