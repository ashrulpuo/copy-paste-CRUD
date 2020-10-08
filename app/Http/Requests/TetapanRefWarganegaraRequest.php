<?php

namespace App\Http\Requests\Tetapan;

use Illuminate\Foundation\Http\FormRequest;

class RefWarganegara extends FormRequest
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

			'RefWarganegaraId' => !empty($this->RefWarganegaraId) ? 'required|unique:RefWarganegara,RefWarganegaraId,' . $this->RefWarganegaraId . ',RefWarganegaraId' : 'required|unique:RefWarganegara,RefWarganegaraId',
			'KodWarganegara' => !empty($this->RefWarganegaraId) ? 'required|unique:RefWarganegara,KodWarganegara,' . $this->RefWarganegaraId . ',KodWarganegara' : 'required|unique:RefWarganegara,KodWarganegara',
			'Penerangan' => !empty($this->RefWarganegaraId) ? 'required|unique:RefWarganegara,Penerangan,' . $this->RefWarganegaraId . ',Penerangan' : 'required|unique:RefWarganegara,Penerangan',
        ];
    }
}
