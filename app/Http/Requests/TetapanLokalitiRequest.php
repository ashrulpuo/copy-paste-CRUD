<?php

namespace App\Http\Requests\Tetapan;

use Illuminate\Foundation\Http\FormRequest;

class Lokaliti extends FormRequest
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

			'lokalitiId' => !empty($this->LokalitiId) ? 'required|unique:Lokaliti,lokalitiId,' . $this->LokalitiId . ',lokalitiId' : 'required|unique:Lokaliti,lokalitiId',
			'DmId' => !empty($this->LokalitiId) ? 'required|unique:Lokaliti,DmId,' . $this->LokalitiId . ',DmId' : 'required|unique:Lokaliti,DmId',
			'KodLokaliti' => !empty($this->LokalitiId) ? 'required|unique:Lokaliti,KodLokaliti,' . $this->LokalitiId . ',KodLokaliti' : 'required|unique:Lokaliti,KodLokaliti',
			'Penerangan' => !empty($this->LokalitiId) ? 'required|unique:Lokaliti,Penerangan,' . $this->LokalitiId . ',Penerangan' : 'required|unique:Lokaliti,Penerangan',
        ];
    }
}
