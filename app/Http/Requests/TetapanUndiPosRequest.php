<?php

namespace App\Http\Requests\Tetapan;

use Illuminate\Foundation\Http\FormRequest;

class UndiPos extends FormRequest
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

			'UndiPosId' => !empty($this->UndiPosId) ? 'required|unique:UndiPos,UndiPosId,' . $this->UndiPosId . ',UndiPosId' : 'required|unique:UndiPos,UndiPosId',
			'No_rujukan' => !empty($this->UndiPosId) ? 'required|unique:UndiPos,No_rujukan,' . $this->UndiPosId . ',No_rujukan' : 'required|unique:UndiPos,No_rujukan',
			'Nama' => !empty($this->UndiPosId) ? 'required|unique:UndiPos,Nama,' . $this->UndiPosId . ',Nama' : 'required|unique:UndiPos,Nama',
			'Notel' => !empty($this->UndiPosId) ? 'required|unique:UndiPos,Notel,' . $this->UndiPosId . ',Notel' : 'required|unique:UndiPos,Notel',
			'Email' => !empty($this->UndiPosId) ? 'required|unique:UndiPos,Email,' . $this->UndiPosId . ',Email' : 'required|unique:UndiPos,Email',
			'No_passport' => !empty($this->UndiPosId) ? 'required|unique:UndiPos,No_passport,' . $this->UndiPosId . ',No_passport' : 'required|unique:UndiPos,No_passport',
			'DPI_nama' => !empty($this->UndiPosId) ? 'required|unique:UndiPos,DPI_nama,' . $this->UndiPosId . ',DPI_nama' : 'required|unique:UndiPos,DPI_nama',
			'DPI_alamat1' => !empty($this->UndiPosId) ? 'required|unique:UndiPos,DPI_alamat1,' . $this->UndiPosId . ',DPI_alamat1' : 'required|unique:UndiPos,DPI_alamat1',
			'DPI_alamat2' => !empty($this->UndiPosId) ? 'required|unique:UndiPos,DPI_alamat2,' . $this->UndiPosId . ',DPI_alamat2' : 'required|unique:UndiPos,DPI_alamat2',
			'DPI_alamat3' => !empty($this->UndiPosId) ? 'required|unique:UndiPos,DPI_alamat3,' . $this->UndiPosId . ',DPI_alamat3' : 'required|unique:UndiPos,DPI_alamat3',
			'DPI_poskod' => !empty($this->UndiPosId) ? 'required|unique:UndiPos,DPI_poskod,' . $this->UndiPosId . ',DPI_poskod' : 'required|unique:UndiPos,DPI_poskod',
			'DPI_bandar' => !empty($this->UndiPosId) ? 'required|unique:UndiPos,DPI_bandar,' . $this->UndiPosId . ',DPI_bandar' : 'required|unique:UndiPos,DPI_bandar',
			'DPI_negeri' => !empty($this->UndiPosId) ? 'required|unique:UndiPos,DPI_negeri,' . $this->UndiPosId . ',DPI_negeri' : 'required|unique:UndiPos,DPI_negeri',
			'DPI_Kod_Lokaliti' => !empty($this->UndiPosId) ? 'required|unique:UndiPos,DPI_Kod_Lokaliti,' . $this->UndiPosId . ',DPI_Kod_Lokaliti' : 'required|unique:UndiPos,DPI_Kod_Lokaliti',
			'DPI_lokaliti' => !empty($this->UndiPosId) ? 'required|unique:UndiPos,DPI_lokaliti,' . $this->UndiPosId . ',DPI_lokaliti' : 'required|unique:UndiPos,DPI_lokaliti',
			'DPI_Kod_DM' => !empty($this->UndiPosId) ? 'required|unique:UndiPos,DPI_Kod_DM,' . $this->UndiPosId . ',DPI_Kod_DM' : 'required|unique:UndiPos,DPI_Kod_DM',
			'DPI_Dm' => !empty($this->UndiPosId) ? 'required|unique:UndiPos,DPI_Dm,' . $this->UndiPosId . ',DPI_Dm' : 'required|unique:UndiPos,DPI_Dm',
			'DPI_Kod_Dun' => !empty($this->UndiPosId) ? 'required|unique:UndiPos,DPI_Kod_Dun,' . $this->UndiPosId . ',DPI_Kod_Dun' : 'required|unique:UndiPos,DPI_Kod_Dun',
			'DPI_Dun' => !empty($this->UndiPosId) ? 'required|unique:UndiPos,DPI_Dun,' . $this->UndiPosId . ',DPI_Dun' : 'required|unique:UndiPos,DPI_Dun',
			'DPI_Kod_Parlimen' => !empty($this->UndiPosId) ? 'required|unique:UndiPos,DPI_Kod_Parlimen,' . $this->UndiPosId . ',DPI_Kod_Parlimen' : 'required|unique:UndiPos,DPI_Kod_Parlimen',
			'DPI_Parlimen' => !empty($this->UndiPosId) ? 'required|unique:UndiPos,DPI_Parlimen,' . $this->UndiPosId . ',DPI_Parlimen' : 'required|unique:UndiPos,DPI_Parlimen',
			'Surat_alamat1' => !empty($this->UndiPosId) ? 'required|unique:UndiPos,Surat_alamat1,' . $this->UndiPosId . ',Surat_alamat1' : 'required|unique:UndiPos,Surat_alamat1',
			'Surat_alamat2' => !empty($this->UndiPosId) ? 'required|unique:UndiPos,Surat_alamat2,' . $this->UndiPosId . ',Surat_alamat2' : 'required|unique:UndiPos,Surat_alamat2',
			'Surat_alamat3' => !empty($this->UndiPosId) ? 'required|unique:UndiPos,Surat_alamat3,' . $this->UndiPosId . ',Surat_alamat3' : 'required|unique:UndiPos,Surat_alamat3',
			'Surat_poskod' => !empty($this->UndiPosId) ? 'required|unique:UndiPos,Surat_poskod,' . $this->UndiPosId . ',Surat_poskod' : 'required|unique:UndiPos,Surat_poskod',
			'Surat_BandarId' => !empty($this->UndiPosId) ? 'required|unique:UndiPos,Surat_BandarId,' . $this->UndiPosId . ',Surat_BandarId' : 'required|unique:UndiPos,Surat_BandarId',
			'Surat_bandar' => !empty($this->UndiPosId) ? 'required|unique:UndiPos,Surat_bandar,' . $this->UndiPosId . ',Surat_bandar' : 'required|unique:UndiPos,Surat_bandar',
			'Surat_NegeriId' => !empty($this->UndiPosId) ? 'required|unique:UndiPos,Surat_NegeriId,' . $this->UndiPosId . ',Surat_NegeriId' : 'required|unique:UndiPos,Surat_NegeriId',
			'Surat_NegaraId' => !empty($this->UndiPosId) ? 'required|unique:UndiPos,Surat_NegaraId,' . $this->UndiPosId . ',Surat_NegaraId' : 'required|unique:UndiPos,Surat_NegaraId',
			'Status' => !empty($this->UndiPosId) ? 'required|unique:UndiPos,Status,' . $this->UndiPosId . ',Status' : 'required|unique:UndiPos,Status',
			'DPI_semasa_nama' => !empty($this->UndiPosId) ? 'required|unique:UndiPos,DPI_semasa_nama,' . $this->UndiPosId . ',DPI_semasa_nama' : 'required|unique:UndiPos,DPI_semasa_nama',
			'DPI_semasa_alamat1' => !empty($this->UndiPosId) ? 'required|unique:UndiPos,DPI_semasa_alamat1,' . $this->UndiPosId . ',DPI_semasa_alamat1' : 'required|unique:UndiPos,DPI_semasa_alamat1',
			'DPI_semasa_alamat2' => !empty($this->UndiPosId) ? 'required|unique:UndiPos,DPI_semasa_alamat2,' . $this->UndiPosId . ',DPI_semasa_alamat2' : 'required|unique:UndiPos,DPI_semasa_alamat2',
			'DPI_semasa_poskod' => !empty($this->UndiPosId) ? 'required|unique:UndiPos,DPI_semasa_poskod,' . $this->UndiPosId . ',DPI_semasa_poskod' : 'required|unique:UndiPos,DPI_semasa_poskod',
			'DPI_semasa_negeri' => !empty($this->UndiPosId) ? 'required|unique:UndiPos,DPI_semasa_negeri,' . $this->UndiPosId . ',DPI_semasa_negeri' : 'required|unique:UndiPos,DPI_semasa_negeri',
			'DPI_semasa_lokaliti' => !empty($this->UndiPosId) ? 'required|unique:UndiPos,DPI_semasa_lokaliti,' . $this->UndiPosId . ',DPI_semasa_lokaliti' : 'required|unique:UndiPos,DPI_semasa_lokaliti',
			'DPI_semasa_dm' => !empty($this->UndiPosId) ? 'required|unique:UndiPos,DPI_semasa_dm,' . $this->UndiPosId . ',DPI_semasa_dm' : 'required|unique:UndiPos,DPI_semasa_dm',
			'DPI_semasa_dun' => !empty($this->UndiPosId) ? 'required|unique:UndiPos,DPI_semasa_dun,' . $this->UndiPosId . ',DPI_semasa_dun' : 'required|unique:UndiPos,DPI_semasa_dun',
			'DPI_semasa_nama_par' => !empty($this->UndiPosId) ? 'required|unique:UndiPos,DPI_semasa_nama_par,' . $this->UndiPosId . ',DPI_semasa_nama_par' : 'required|unique:UndiPos,DPI_semasa_nama_par',
			'Myidentity_alamat1' => !empty($this->UndiPosId) ? 'required|unique:UndiPos,Myidentity_alamat1,' . $this->UndiPosId . ',Myidentity_alamat1' : 'required|unique:UndiPos,Myidentity_alamat1',
			'Myidentity_alamat2' => !empty($this->UndiPosId) ? 'required|unique:UndiPos,Myidentity_alamat2,' . $this->UndiPosId . ',Myidentity_alamat2' : 'required|unique:UndiPos,Myidentity_alamat2',
			'Myidentity_alamat3' => !empty($this->UndiPosId) ? 'required|unique:UndiPos,Myidentity_alamat3,' . $this->UndiPosId . ',Myidentity_alamat3' : 'required|unique:UndiPos,Myidentity_alamat3',
			'Myidentity_kod_bandar' => !empty($this->UndiPosId) ? 'required|unique:UndiPos,Myidentity_kod_bandar,' . $this->UndiPosId . ',Myidentity_kod_bandar' : 'required|unique:UndiPos,Myidentity_kod_bandar',
			'Myidentity_kod_negeri' => !empty($this->UndiPosId) ? 'required|unique:UndiPos,Myidentity_kod_negeri,' . $this->UndiPosId . ',Myidentity_kod_negeri' : 'required|unique:UndiPos,Myidentity_kod_negeri',
			'Myidentity_resident' => !empty($this->UndiPosId) ? 'required|unique:UndiPos,Myidentity_resident,' . $this->UndiPosId . ',Myidentity_resident' : 'required|unique:UndiPos,Myidentity_resident',
			'Myidentity_t_mati' => !empty($this->UndiPosId) ? 'required|unique:UndiPos,Myidentity_t_mati,' . $this->UndiPosId . ',Myidentity_t_mati' : 'required|unique:UndiPos,Myidentity_t_mati',
			'Dikunci_oleh' => !empty($this->UndiPosId) ? 'required|unique:UndiPos,Dikunci_oleh,' . $this->UndiPosId . ',Dikunci_oleh' : 'required|unique:UndiPos,Dikunci_oleh',
			'Dikunci_pada' => !empty($this->UndiPosId) ? 'required|unique:UndiPos,Dikunci_pada,' . $this->UndiPosId . ',Dikunci_pada' : 'required|unique:UndiPos,Dikunci_pada',
			'Kiv_oleh' => !empty($this->UndiPosId) ? 'required|unique:UndiPos,Kiv_oleh,' . $this->UndiPosId . ',Kiv_oleh' : 'required|unique:UndiPos,Kiv_oleh',
			'Alasan_kiv' => !empty($this->UndiPosId) ? 'required|unique:UndiPos,Alasan_kiv,' . $this->UndiPosId . ',Alasan_kiv' : 'required|unique:UndiPos,Alasan_kiv',
			'Keterangan_kiv' => !empty($this->UndiPosId) ? 'required|unique:UndiPos,Keterangan_kiv,' . $this->UndiPosId . ',Keterangan_kiv' : 'required|unique:UndiPos,Keterangan_kiv',
			'Disahkan_oleh' => !empty($this->UndiPosId) ? 'required|unique:UndiPos,Disahkan_oleh,' . $this->UndiPosId . ',Disahkan_oleh' : 'required|unique:UndiPos,Disahkan_oleh',
			'Alasan_tolak' => !empty($this->UndiPosId) ? 'required|unique:UndiPos,Alasan_tolak,' . $this->UndiPosId . ',Alasan_tolak' : 'required|unique:UndiPos,Alasan_tolak',
			'Dibatal_oleh' => !empty($this->UndiPosId) ? 'required|unique:UndiPos,Dibatal_oleh,' . $this->UndiPosId . ',Dibatal_oleh' : 'required|unique:UndiPos,Dibatal_oleh',
			'Dibatal_pada' => !empty($this->UndiPosId) ? 'required|unique:UndiPos,Dibatal_pada,' . $this->UndiPosId . ',Dibatal_pada' : 'required|unique:UndiPos,Dibatal_pada',
			'Alasan_batal' => !empty($this->UndiPosId) ? 'required|unique:UndiPos,Alasan_batal,' . $this->UndiPosId . ',Alasan_batal' : 'required|unique:UndiPos,Alasan_batal',
			'PenggunaId' => !empty($this->UndiPosId) ? 'required|unique:UndiPos,PenggunaId,' . $this->UndiPosId . ',PenggunaId' : 'required|unique:UndiPos,PenggunaId',
			'KategoriUndiId' => !empty($this->UndiPosId) ? 'required|unique:UndiPos,KategoriUndiId,' . $this->UndiPosId . ',KategoriUndiId' : 'required|unique:UndiPos,KategoriUndiId',
			'deleted_at' => !empty($this->UndiPosId) ? 'required|unique:UndiPos,deleted_at,' . $this->UndiPosId . ',deleted_at' : 'required|unique:UndiPos,deleted_at',
        ];
    }
}
