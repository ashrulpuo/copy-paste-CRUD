<?php

namespace App\Http\Requests\Tetapan;

use Illuminate\Foundation\Http\FormRequest;

class RefJenisTransbck extends FormRequest
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

			'RefJenisTransbckId' => !empty($this->RefJenisTransbckId) ? 'required|unique:RefJenisTransbck,RefJenisTransbckId,' . $this->RefJenisTransbckId . ',RefJenisTransbckId' : 'required|unique:RefJenisTransbck,RefJenisTransbckId',
			'KodJenisTransbck' => !empty($this->RefJenisTransbckId) ? 'required|unique:RefJenisTransbck,KodJenisTransbck,' . $this->RefJenisTransbckId . ',KodJenisTransbck' : 'required|unique:RefJenisTransbck,KodJenisTransbck',
			'Penerangan' => !empty($this->RefJenisTransbckId) ? 'required|unique:RefJenisTransbck,Penerangan,' . $this->RefJenisTransbckId . ',Penerangan' : 'required|unique:RefJenisTransbck,Penerangan',
        ];
    }
}
