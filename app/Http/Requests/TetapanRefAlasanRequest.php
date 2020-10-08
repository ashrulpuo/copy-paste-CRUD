<?php

namespace App\Http\Requests\Tetapan;

use Illuminate\Foundation\Http\FormRequest;

class RefAlasan extends FormRequest
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

			'RefAlasanId' => !empty($this->RefAlasanId) ? 'required|unique:RefAlasan,RefAlasanId,' . $this->RefAlasanId . ',RefAlasanId' : 'required|unique:RefAlasan,RefAlasanId',
			'Alasan' => !empty($this->RefAlasanId) ? 'required|unique:RefAlasan,Alasan,' . $this->RefAlasanId . ',Alasan' : 'required|unique:RefAlasan,Alasan',
			'Jenis' => !empty($this->RefAlasanId) ? 'required|unique:RefAlasan,Jenis,' . $this->RefAlasanId . ',Jenis' : 'required|unique:RefAlasan,Jenis',
        ];
    }
}
