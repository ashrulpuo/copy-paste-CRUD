<?php

namespace App\Http\Requests\Tetapan;

use Illuminate\Foundation\Http\FormRequest;

class RefNegara extends FormRequest
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

			'RefNegaraId' => !empty($this->RefNegaraId) ? 'required|unique:RefNegara,RefNegaraId,' . $this->RefNegaraId . ',RefNegaraId' : 'required|unique:RefNegara,RefNegaraId',
			'kodNegara' => !empty($this->RefNegaraId) ? 'required|unique:RefNegara,kodNegara,' . $this->RefNegaraId . ',kodNegara' : 'required|unique:RefNegara,kodNegara',
			'Penerangan' => !empty($this->RefNegaraId) ? 'required|unique:RefNegara,Penerangan,' . $this->RefNegaraId . ',Penerangan' : 'required|unique:RefNegara,Penerangan',
			'KodTel' => !empty($this->RefNegaraId) ? 'required|unique:RefNegara,KodTel,' . $this->RefNegaraId . ',KodTel' : 'required|unique:RefNegara,KodTel',
			'RujukanMyidentity' => !empty($this->RefNegaraId) ? 'required|unique:RefNegara,RujukanMyidentity,' . $this->RefNegaraId . ',RujukanMyidentity' : 'required|unique:RefNegara,RujukanMyidentity',
			'Papar' => '',
        ];
    }
}
