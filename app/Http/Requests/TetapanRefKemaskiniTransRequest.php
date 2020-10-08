<?php

namespace App\Http\Requests\Tetapan;

use Illuminate\Foundation\Http\FormRequest;

class RefKemaskiniTrans extends FormRequest
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

			'RefKemaskiniTransId' => !empty($this->RefKemaskiniTransId) ? 'required|unique:RefKemaskiniTrans,RefKemaskiniTransId,' . $this->RefKemaskiniTransId . ',RefKemaskiniTransId' : 'required|unique:RefKemaskiniTrans,RefKemaskiniTransId',
			'kodKemaskiniTrans' => !empty($this->RefKemaskiniTransId) ? 'required|unique:RefKemaskiniTrans,kodKemaskiniTrans,' . $this->RefKemaskiniTransId . ',kodKemaskiniTrans' : 'required|unique:RefKemaskiniTrans,kodKemaskiniTrans',
			'Penerangan' => !empty($this->RefKemaskiniTransId) ? 'required|unique:RefKemaskiniTrans,Penerangan,' . $this->RefKemaskiniTransId . ',Penerangan' : 'required|unique:RefKemaskiniTrans,Penerangan',
        ];
    }
}
