<?php

namespace App\Http\Requests\Tetapan;

use Illuminate\Foundation\Http\FormRequest;

class DUN extends FormRequest
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

			'DunId' => !empty($this->DUNId) ? 'required|unique:DUN,DunId,' . $this->DUNId . ',DunId' : 'required|unique:DUN,DunId',
			'ParlimenId' => !empty($this->DUNId) ? 'required|unique:DUN,ParlimenId,' . $this->DUNId . ',ParlimenId' : 'required|unique:DUN,ParlimenId',
			'KodDUN' => !empty($this->DUNId) ? 'required|unique:DUN,KodDUN,' . $this->DUNId . ',KodDUN' : 'required|unique:DUN,KodDUN',
			'Penerangan' => !empty($this->DUNId) ? 'required|unique:DUN,Penerangan,' . $this->DUNId . ',Penerangan' : 'required|unique:DUN,Penerangan',
        ];
    }
}
