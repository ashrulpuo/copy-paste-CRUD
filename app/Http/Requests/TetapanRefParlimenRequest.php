<?php

namespace App\Http\Requests\Tetapan;

use Illuminate\Foundation\Http\FormRequest;

class RefParlimen extends FormRequest
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

			'RefParlimenId' => !empty($this->RefParlimenId) ? 'required|unique:RefParlimen,RefParlimenId,' . $this->RefParlimenId . ',RefParlimenId' : 'required|unique:RefParlimen,RefParlimenId',
			'ParlimenId' => !empty($this->RefParlimenId) ? 'required|unique:RefParlimen,ParlimenId,' . $this->RefParlimenId . ',ParlimenId' : 'required|unique:RefParlimen,ParlimenId',
			'Negeri' => !empty($this->RefParlimenId) ? 'required|unique:RefParlimen,Negeri,' . $this->RefParlimenId . ',Negeri' : 'required|unique:RefParlimen,Negeri',
			'KodParlimen' => !empty($this->RefParlimenId) ? 'required|unique:RefParlimen,KodParlimen,' . $this->RefParlimenId . ',KodParlimen' : 'required|unique:RefParlimen,KodParlimen',
			'Penerangan' => !empty($this->RefParlimenId) ? 'required|unique:RefParlimen,Penerangan,' . $this->RefParlimenId . ',Penerangan' : 'required|unique:RefParlimen,Penerangan',
			'KodAsal' => !empty($this->RefParlimenId) ? 'required|unique:RefParlimen,KodAsal,' . $this->RefParlimenId . ',KodAsal' : 'required|unique:RefParlimen,KodAsal',
			'MaklumatAsal' => !empty($this->RefParlimenId) ? 'required|unique:RefParlimen,MaklumatAsal,' . $this->RefParlimenId . ',MaklumatAsal' : 'required|unique:RefParlimen,MaklumatAsal',
			'Papar' => '',
        ];
    }
}
