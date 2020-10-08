<?php

namespace App\Http\Requests\Tetapan;

use Illuminate\Foundation\Http\FormRequest;

class KategoriUndiPos extends FormRequest
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

			'KategoriUndiPosId' => !empty($this->KategoriUndiPosId) ? 'required|unique:KategoriUndiPos,KategoriUndiPosId,' . $this->KategoriUndiPosId . ',KategoriUndiPosId' : 'required|unique:KategoriUndiPos,KategoriUndiPosId',
			'Kategori' => !empty($this->KategoriUndiPosId) ? 'required|unique:KategoriUndiPos,Kategori,' . $this->KategoriUndiPosId . ',Kategori' : 'required|unique:KategoriUndiPos,Kategori',
			'Keterangan' => !empty($this->KategoriUndiPosId) ? 'required|unique:KategoriUndiPos,Keterangan,' . $this->KategoriUndiPosId . ',Keterangan' : 'required|unique:KategoriUndiPos,Keterangan',
			'BorangUndiPosId' => !empty($this->KategoriUndiPosId) ? 'required|unique:KategoriUndiPos,BorangUndiPosId,' . $this->KategoriUndiPosId . ',BorangUndiPosId' : 'required|unique:KategoriUndiPos,BorangUndiPosId',
			'Semakan' => !empty($this->KategoriUndiPosId) ? 'required|unique:KategoriUndiPos,Semakan,' . $this->KategoriUndiPosId . ',Semakan' : 'required|unique:KategoriUndiPos,Semakan',
			'Perakuan' => !empty($this->KategoriUndiPosId) ? 'required|unique:KategoriUndiPos,Perakuan,' . $this->KategoriUndiPosId . ',Perakuan' : 'required|unique:KategoriUndiPos,Perakuan',
			'Kelulusan' => !empty($this->KategoriUndiPosId) ? 'required|unique:KategoriUndiPos,Kelulusan,' . $this->KategoriUndiPosId . ',Kelulusan' : 'required|unique:KategoriUndiPos,Kelulusan',
			'Dokumen' => !empty($this->KategoriUndiPosId) ? 'required|unique:KategoriUndiPos,Dokumen,' . $this->KategoriUndiPosId . ',Dokumen' : 'required|unique:KategoriUndiPos,Dokumen',
			'Proses' => !empty($this->KategoriUndiPosId) ? 'required|unique:KategoriUndiPos,Proses,' . $this->KategoriUndiPosId . ',Proses' : 'required|unique:KategoriUndiPos,Proses',
        ];
    }
}
