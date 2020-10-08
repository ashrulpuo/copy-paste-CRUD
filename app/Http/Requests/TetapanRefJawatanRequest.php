<?php

namespace App\Http\Requests\Tetapan;

use Illuminate\Foundation\Http\FormRequest;

class RefJawatan extends FormRequest
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

			'Ref_jawatanId' => !empty($this->RefJawatanId) ? 'required|unique:RefJawatan,Ref_jawatanId,' . $this->RefJawatanId . ',Ref_jawatanId' : 'required|unique:RefJawatan,Ref_jawatanId',
			'Kod' => !empty($this->RefJawatanId) ? 'required|unique:RefJawatan,Kod,' . $this->RefJawatanId . ',Kod' : 'required|unique:RefJawatan,Kod',
			'Jawatan' => !empty($this->RefJawatanId) ? 'required|unique:RefJawatan,Jawatan,' . $this->RefJawatanId . ',Jawatan' : 'required|unique:RefJawatan,Jawatan',
			'Papar' => '',
        ];
    }
}
