<?php

namespace App\Http\Requests\Tetapan;

use Illuminate\Foundation\Http\FormRequest;

class RefJenisTrans extends FormRequest
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

			'RefJenisTransId' => !empty($this->RefJenisTransId) ? 'required|unique:RefJenisTrans,RefJenisTransId,' . $this->RefJenisTransId . ',RefJenisTransId' : 'required|unique:RefJenisTrans,RefJenisTransId',
			'KodJenisTrans' => !empty($this->RefJenisTransId) ? 'required|unique:RefJenisTrans,KodJenisTrans,' . $this->RefJenisTransId . ',KodJenisTrans' : 'required|unique:RefJenisTrans,KodJenisTrans',
			'Penerangan' => !empty($this->RefJenisTransId) ? 'required|unique:RefJenisTrans,Penerangan,' . $this->RefJenisTransId . ',Penerangan' : 'required|unique:RefJenisTrans,Penerangan',
        ];
    }
}
