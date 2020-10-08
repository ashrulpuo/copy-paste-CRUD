<?php

namespace App\Http\Requests\Tetapan;

use Illuminate\Foundation\Http\FormRequest;

class RefKodSebabBantahan extends FormRequest
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

			'RefKodSebabBantahanID' => !empty($this->RefKodSebabBantahanId) ? 'required|unique:RefKodSebabBantahan,RefKodSebabBantahanID,' . $this->RefKodSebabBantahanId . ',RefKodSebabBantahanID' : 'required|unique:RefKodSebabBantahan,RefKodSebabBantahanID',
			'KodKategori' => !empty($this->RefKodSebabBantahanId) ? 'required|unique:RefKodSebabBantahan,KodKategori,' . $this->RefKodSebabBantahanId . ',KodKategori' : 'required|unique:RefKodSebabBantahan,KodKategori',
			'KategoriSebab' => !empty($this->RefKodSebabBantahanId) ? 'required|unique:RefKodSebabBantahan,KategoriSebab,' . $this->RefKodSebabBantahanId . ',KategoriSebab' : 'required|unique:RefKodSebabBantahan,KategoriSebab',
			'KodSebab' => !empty($this->RefKodSebabBantahanId) ? 'required|unique:RefKodSebabBantahan,KodSebab,' . $this->RefKodSebabBantahanId . ',KodSebab' : 'required|unique:RefKodSebabBantahan,KodSebab',
			'Penerangan' => !empty($this->RefKodSebabBantahanId) ? 'required|unique:RefKodSebabBantahan,Penerangan,' . $this->RefKodSebabBantahanId . ',Penerangan' : 'required|unique:RefKodSebabBantahan,Penerangan',
        ];
    }
}
