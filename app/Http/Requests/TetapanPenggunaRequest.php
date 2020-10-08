<?php

namespace App\Http\Requests\Tetapan;

use Illuminate\Foundation\Http\FormRequest;

class Pengguna extends FormRequest
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

			'PenggunaId' => !empty($this->PenggunaId) ? 'required|unique:Pengguna,PenggunaId,' . $this->PenggunaId . ',PenggunaId' : 'required|unique:Pengguna,PenggunaId',
			'Nama' => !empty($this->PenggunaId) ? 'required|unique:Pengguna,Nama,' . $this->PenggunaId . ',Nama' : 'required|unique:Pengguna,Nama',
			'NoKp' => !empty($this->PenggunaId) ? 'required|unique:Pengguna,NoKp,' . $this->PenggunaId . ',NoKp' : 'required|unique:Pengguna,NoKp',
			'NoPerkhidmatan' => !empty($this->PenggunaId) ? 'required|unique:Pengguna,NoPerkhidmatan,' . $this->PenggunaId . ',NoPerkhidmatan' : 'required|unique:Pengguna,NoPerkhidmatan',
			'TarikhLahir' => !empty($this->PenggunaId) ? 'required|unique:Pengguna,TarikhLahir,' . $this->PenggunaId . ',TarikhLahir' : 'required|unique:Pengguna,TarikhLahir',
			'NoTelefonNegaraId' => !empty($this->PenggunaId) ? 'required|unique:Pengguna,NoTelefonNegaraId,' . $this->PenggunaId . ',NoTelefonNegaraId' : 'required|unique:Pengguna,NoTelefonNegaraId',
			'NoTelefonPrefik' => !empty($this->PenggunaId) ? 'required|unique:Pengguna,NoTelefonPrefik,' . $this->PenggunaId . ',NoTelefonPrefik' : 'required|unique:Pengguna,NoTelefonPrefik',
			'NoTelefon' => !empty($this->PenggunaId) ? 'required|unique:Pengguna,NoTelefon,' . $this->PenggunaId . ',NoTelefon' : 'required|unique:Pengguna,NoTelefon',
			'Emel' => !empty($this->PenggunaId) ? 'required|unique:Pengguna,Emel,' . $this->PenggunaId . ',Emel' : 'required|unique:Pengguna,Emel',
			'PengesahanEmelPada' => !empty($this->PenggunaId) ? 'required|unique:Pengguna,PengesahanEmelPada,' . $this->PenggunaId . ',PengesahanEmelPada' : 'required|unique:Pengguna,PengesahanEmelPada',
			'KataLaluan' => !empty($this->PenggunaId) ? 'required|unique:Pengguna,KataLaluan,' . $this->PenggunaId . ',KataLaluan' : 'required|unique:Pengguna,KataLaluan',
			'SoalanKeselamatanId' => !empty($this->PenggunaId) ? 'required|unique:Pengguna,SoalanKeselamatanId,' . $this->PenggunaId . ',SoalanKeselamatanId' : 'required|unique:Pengguna,SoalanKeselamatanId',
			'JawapanKeselamatan' => !empty($this->PenggunaId) ? 'required|unique:Pengguna,JawapanKeselamatan,' . $this->PenggunaId . ',JawapanKeselamatan' : 'required|unique:Pengguna,JawapanKeselamatan',
			'aktif' => !empty($this->PenggunaId) ? 'required|unique:Pengguna,aktif,' . $this->PenggunaId . ',aktif' : 'required|unique:Pengguna,aktif',
        ];
    }
}
