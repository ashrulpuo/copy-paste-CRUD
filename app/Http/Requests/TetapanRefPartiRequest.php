<?php

namespace App\Http\Requests\Tetapan;

use Illuminate\Foundation\Http\FormRequest;

class RefParti extends FormRequest
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

			'RefPartiId' => !empty($this->RefPartiId) ? 'required|unique:RefParti,RefPartiId,' . $this->RefPartiId . ',RefPartiId' : 'required|unique:RefParti,RefPartiId',
			'KodParti' => !empty($this->RefPartiId) ? 'required|unique:RefParti,KodParti,' . $this->RefPartiId . ',KodParti' : 'required|unique:RefParti,KodParti',
			'KodOrder' => !empty($this->RefPartiId) ? 'required|unique:RefParti,KodOrder,' . $this->RefPartiId . ',KodOrder' : 'required|unique:RefParti,KodOrder',
			'Penerangan' => !empty($this->RefPartiId) ? 'required|unique:RefParti,Penerangan,' . $this->RefPartiId . ',Penerangan' : 'required|unique:RefParti,Penerangan',
        ];
    }
}
