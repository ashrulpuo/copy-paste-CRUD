<?php

namespace App\Http\Requests\Tetapan;

use Illuminate\Foundation\Http\FormRequest;

class RefAlasanPenolakan extends FormRequest
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

			'RefAlasanPenolakanId' => !empty($this->RefAlasanPenolakanId) ? 'required|unique:RefAlasanPenolakan,RefAlasanPenolakanId,' . $this->RefAlasanPenolakanId . ',RefAlasanPenolakanId' : 'required|unique:RefAlasanPenolakan,RefAlasanPenolakanId',
			'Kod' => !empty($this->RefAlasanPenolakanId) ? 'required|unique:RefAlasanPenolakan,Kod,' . $this->RefAlasanPenolakanId . ',Kod' : 'required|unique:RefAlasanPenolakan,Kod',
			'Penerangan' => !empty($this->RefAlasanPenolakanId) ? 'required|unique:RefAlasanPenolakan,Penerangan,' . $this->RefAlasanPenolakanId . ',Penerangan' : 'required|unique:RefAlasanPenolakan,Penerangan',
			'Papar' => '',
        ];
    }
}
