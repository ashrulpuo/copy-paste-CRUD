<?php

namespace App\Http\Requests\Tetapan;

use Illuminate\Foundation\Http\FormRequest;

class RefPpn extends FormRequest
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

			'RefPpnId' => !empty($this->RefPpnId) ? 'required|unique:RefPpn,RefPpnId,' . $this->RefPpnId . ',RefPpnId' : 'required|unique:RefPpn,RefPpnId',
			'KodNegeri' => !empty($this->RefPpnId) ? 'required|unique:RefPpn,KodNegeri,' . $this->RefPpnId . ',KodNegeri' : 'required|unique:RefPpn,KodNegeri',
			'Ppn' => !empty($this->RefPpnId) ? 'required|unique:RefPpn,Ppn,' . $this->RefPpnId . ',Ppn' : 'required|unique:RefPpn,Ppn',
			'Papar' => '',
			'PosUserCode' => !empty($this->RefPpnId) ? 'required|unique:RefPpn,PosUserCode,' . $this->RefPpnId . ',PosUserCode' : 'required|unique:RefPpn,PosUserCode',
			'ParlimenOrder' => !empty($this->RefPpnId) ? 'required|unique:RefPpn,ParlimenOrder,' . $this->RefPpnId . ',ParlimenOrder' : 'required|unique:RefPpn,ParlimenOrder',
			'Singkatan' => !empty($this->RefPpnId) ? 'required|unique:RefPpn,Singkatan,' . $this->RefPpnId . ',Singkatan' : 'required|unique:RefPpn,Singkatan',
        ];
    }
}
