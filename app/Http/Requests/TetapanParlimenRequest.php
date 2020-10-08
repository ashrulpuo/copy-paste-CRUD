<?php

namespace App\Http\Requests\Tetapan;

use Illuminate\Foundation\Http\FormRequest;

class Parlimen extends FormRequest
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

			'ParlimenId' => !empty($this->ParlimenId) ? 'required|unique:Parlimen,ParlimenId,' . $this->ParlimenId . ',ParlimenId' : 'required|unique:Parlimen,ParlimenId',
			'RefNegeriId' => !empty($this->ParlimenId) ? 'required|unique:Parlimen,RefNegeriId,' . $this->ParlimenId . ',RefNegeriId' : 'required|unique:Parlimen,RefNegeriId',
			'Negeri' => !empty($this->ParlimenId) ? 'required|unique:Parlimen,Negeri,' . $this->ParlimenId . ',Negeri' : 'required|unique:Parlimen,Negeri',
			'KodParlimen' => !empty($this->ParlimenId) ? 'required|unique:Parlimen,KodParlimen,' . $this->ParlimenId . ',KodParlimen' : 'required|unique:Parlimen,KodParlimen',
			'Penerangan' => !empty($this->ParlimenId) ? 'required|unique:Parlimen,Penerangan,' . $this->ParlimenId . ',Penerangan' : 'required|unique:Parlimen,Penerangan',
        ];
    }
}
