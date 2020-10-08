<?php

namespace App\Http\Requests\Tetapan;

use Illuminate\Foundation\Http\FormRequest;

class RefHilangLayak extends FormRequest
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

			'RefHilangLayakId' => !empty($this->RefHilangLayakId) ? 'required|unique:RefHilangLayak,RefHilangLayakId,' . $this->RefHilangLayakId . ',RefHilangLayakId' : 'required|unique:RefHilangLayak,RefHilangLayakId',
			'KodPotongID' => !empty($this->RefHilangLayakId) ? 'required|unique:RefHilangLayak,KodPotongID,' . $this->RefHilangLayakId . ',KodPotongID' : 'required|unique:RefHilangLayak,KodPotongID',
			'KodHilangLayak' => !empty($this->RefHilangLayakId) ? 'required|unique:RefHilangLayak,KodHilangLayak,' . $this->RefHilangLayakId . ',KodHilangLayak' : 'required|unique:RefHilangLayak,KodHilangLayak',
			'Penerangan' => !empty($this->RefHilangLayakId) ? 'required|unique:RefHilangLayak,Penerangan,' . $this->RefHilangLayakId . ',Penerangan' : 'required|unique:RefHilangLayak,Penerangan',
        ];
    }
}
