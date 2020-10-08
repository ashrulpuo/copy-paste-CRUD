<?php

namespace App\Http\Requests\Tetapan;

use Illuminate\Foundation\Http\FormRequest;

class RefGelaran extends FormRequest
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

			'RefGelaranId' => !empty($this->RefGelaranId) ? 'required|unique:RefGelaran,RefGelaranId,' . $this->RefGelaranId . ',RefGelaranId' : 'required|unique:RefGelaran,RefGelaranId',
			'Kod' => !empty($this->RefGelaranId) ? 'required|unique:RefGelaran,Kod,' . $this->RefGelaranId . ',Kod' : 'required|unique:RefGelaran,Kod',
			'Gelaran' => !empty($this->RefGelaranId) ? 'required|unique:RefGelaran,Gelaran,' . $this->RefGelaranId . ',Gelaran' : 'required|unique:RefGelaran,Gelaran',
			'Papar' => '',
        ];
    }
}
