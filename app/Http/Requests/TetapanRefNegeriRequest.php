<?php

namespace App\Http\Requests\Tetapan;

use Illuminate\Foundation\Http\FormRequest;

class RefNegeri extends FormRequest
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

			'RefNegeriId' => !empty($this->RefNegeriId) ? 'required|unique:RefNegeri,RefNegeriId,' . $this->RefNegeriId . ',RefNegeriId' : 'required|unique:RefNegeri,RefNegeriId',
			'KodNegeri' => !empty($this->RefNegeriId) ? 'required|unique:RefNegeri,KodNegeri,' . $this->RefNegeriId . ',KodNegeri' : 'required|unique:RefNegeri,KodNegeri',
			'Penerangan' => !empty($this->RefNegeriId) ? 'required|unique:RefNegeri,Penerangan,' . $this->RefNegeriId . ',Penerangan' : 'required|unique:RefNegeri,Penerangan',
			'RujukanMyidentity' => !empty($this->RefNegeriId) ? 'required|unique:RefNegeri,RujukanMyidentity,' . $this->RefNegeriId . ',RujukanMyidentity' : 'required|unique:RefNegeri,RujukanMyidentity',
			'Papar' => '',
			'PosUserCode' => !empty($this->RefNegeriId) ? 'required|unique:RefNegeri,PosUserCode,' . $this->RefNegeriId . ',PosUserCode' : 'required|unique:RefNegeri,PosUserCode',
			'ParlimenOrder' => !empty($this->RefNegeriId) ? 'required|unique:RefNegeri,ParlimenOrder,' . $this->RefNegeriId . ',ParlimenOrder' : 'required|unique:RefNegeri,ParlimenOrder',
			'Singkatan' => !empty($this->RefNegeriId) ? 'required|unique:RefNegeri,Singkatan,' . $this->RefNegeriId . ',Singkatan' : 'required|unique:RefNegeri,Singkatan',
        ];
    }
}
