<?php

namespace App\Http\Requests\Tetapan;

use Illuminate\Foundation\Http\FormRequest;

class RefJantina extends FormRequest
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

			'RefJantinaId' => !empty($this->RefJantinaId) ? 'required|unique:RefJantina,RefJantinaId,' . $this->RefJantinaId . ',RefJantinaId' : 'required|unique:RefJantina,RefJantinaId',
			'KodJantina' => !empty($this->RefJantinaId) ? 'required|unique:RefJantina,KodJantina,' . $this->RefJantinaId . ',KodJantina' : 'required|unique:RefJantina,KodJantina',
			'Penerangan' => !empty($this->RefJantinaId) ? 'required|unique:RefJantina,Penerangan,' . $this->RefJantinaId . ',Penerangan' : 'required|unique:RefJantina,Penerangan',
			'Papar' => '',
        ];
    }
}
