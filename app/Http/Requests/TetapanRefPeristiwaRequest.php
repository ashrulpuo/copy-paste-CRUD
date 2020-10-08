<?php

namespace App\Http\Requests\Tetapan;

use Illuminate\Foundation\Http\FormRequest;

class RefPeristiwa extends FormRequest
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

			'RefPeristiwaId' => !empty($this->RefPeristiwaId) ? 'required|unique:RefPeristiwa,RefPeristiwaId,' . $this->RefPeristiwaId . ',RefPeristiwaId' : 'required|unique:RefPeristiwa,RefPeristiwaId',
			'Kod' => !empty($this->RefPeristiwaId) ? 'required|unique:RefPeristiwa,Kod,' . $this->RefPeristiwaId . ',Kod' : 'required|unique:RefPeristiwa,Kod',
			'Peristiwa' => !empty($this->RefPeristiwaId) ? 'required|unique:RefPeristiwa,Peristiwa,' . $this->RefPeristiwaId . ',Peristiwa' : 'required|unique:RefPeristiwa,Peristiwa',
			'Papar' => '',
        ];
    }
}
