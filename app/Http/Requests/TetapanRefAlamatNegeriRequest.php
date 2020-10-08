<?php

namespace App\Http\Requests\Tetapan;

use Illuminate\Foundation\Http\FormRequest;

class RefAlamatNegeri extends FormRequest
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

			'RefAlamatNegeriId' => !empty($this->RefAlamatNegeriId) ? 'required|unique:RefAlamatNegeri,RefAlamatNegeriId,' . $this->RefAlamatNegeriId . ',RefAlamatNegeriId' : 'required|unique:RefAlamatNegeri,RefAlamatNegeriId',
			'KodAlamatNegeri' => !empty($this->RefAlamatNegeriId) ? 'required|unique:RefAlamatNegeri,KodAlamatNegeri,' . $this->RefAlamatNegeriId . ',KodAlamatNegeri' : 'required|unique:RefAlamatNegeri,KodAlamatNegeri',
			'Negeri' => !empty($this->RefAlamatNegeriId) ? 'required|unique:RefAlamatNegeri,Negeri,' . $this->RefAlamatNegeriId . ',Negeri' : 'required|unique:RefAlamatNegeri,Negeri',
			'Alamat1' => !empty($this->RefAlamatNegeriId) ? 'required|unique:RefAlamatNegeri,Alamat1,' . $this->RefAlamatNegeriId . ',Alamat1' : 'required|unique:RefAlamatNegeri,Alamat1',
			'Alamat2' => !empty($this->RefAlamatNegeriId) ? 'required|unique:RefAlamatNegeri,Alamat2,' . $this->RefAlamatNegeriId . ',Alamat2' : 'required|unique:RefAlamatNegeri,Alamat2',
			'Alamat3' => !empty($this->RefAlamatNegeriId) ? 'required|unique:RefAlamatNegeri,Alamat3,' . $this->RefAlamatNegeriId . ',Alamat3' : 'required|unique:RefAlamatNegeri,Alamat3',
			'Poskod' => !empty($this->RefAlamatNegeriId) ? 'required|unique:RefAlamatNegeri,Poskod,' . $this->RefAlamatNegeriId . ',Poskod' : 'required|unique:RefAlamatNegeri,Poskod',
			'Bandar' => !empty($this->RefAlamatNegeriId) ? 'required|unique:RefAlamatNegeri,Bandar,' . $this->RefAlamatNegeriId . ',Bandar' : 'required|unique:RefAlamatNegeri,Bandar',
			'KodPengguna' => !empty($this->RefAlamatNegeriId) ? 'required|unique:RefAlamatNegeri,KodPengguna,' . $this->RefAlamatNegeriId . ',KodPengguna' : 'required|unique:RefAlamatNegeri,KodPengguna',
			'ParlimenOrder' => !empty($this->RefAlamatNegeriId) ? 'required|unique:RefAlamatNegeri,ParlimenOrder,' . $this->RefAlamatNegeriId . ',ParlimenOrder' : 'required|unique:RefAlamatNegeri,ParlimenOrder',
			'PosUserCode' => !empty($this->RefAlamatNegeriId) ? 'required|unique:RefAlamatNegeri,PosUserCode,' . $this->RefAlamatNegeriId . ',PosUserCode' : 'required|unique:RefAlamatNegeri,PosUserCode',
        ];
    }
}
