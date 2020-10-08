<?php

namespace App\Http\Requests\Tetapan;

use Illuminate\Foundation\Http\FormRequest;

class RefAgama extends FormRequest
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

			'RefAgamaId' => !empty($this->RefAgamaId) ? 'required|unique:RefAgama,RefAgamaId,' . $this->RefAgamaId . ',RefAgamaId' : 'required|unique:RefAgama,RefAgamaId',
			'KodAgama' => !empty($this->RefAgamaId) ? 'required|unique:RefAgama,KodAgama,' . $this->RefAgamaId . ',KodAgama' : 'required|unique:RefAgama,KodAgama',
			'Penerangan' => !empty($this->RefAgamaId) ? 'required|unique:RefAgama,Penerangan,' . $this->RefAgamaId . ',Penerangan' : 'required|unique:RefAgama,Penerangan',
			'Papar' => '',
        ];
    }
}
