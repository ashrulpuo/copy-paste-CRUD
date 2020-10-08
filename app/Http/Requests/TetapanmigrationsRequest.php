<?php

namespace App\Http\Requests\Tetapan;

use Illuminate\Foundation\Http\FormRequest;

class migrations extends FormRequest
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

			'id' => !empty($this->migrationsId) ? 'required|unique:migrations,id,' . $this->migrationsId . ',id' : 'required|unique:migrations,id',
			'migration' => !empty($this->migrationsId) ? 'required|unique:migrations,migration,' . $this->migrationsId . ',migration' : 'required|unique:migrations,migration',
			'batch' => !empty($this->migrationsId) ? 'required|unique:migrations,batch,' . $this->migrationsId . ',batch' : 'required|unique:migrations,batch',
        ];
    }
}
