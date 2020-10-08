<?php

namespace App\Http\Requests\Tetapan;

use Illuminate\Foundation\Http\FormRequest;

class Routes extends FormRequest
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

			'RoutesId' => !empty($this->RoutesId) ? 'required|unique:Routes,RoutesId,' . $this->RoutesId . ',RoutesId' : 'required|unique:Routes,RoutesId',
			'Method' => !empty($this->RoutesId) ? 'required|unique:Routes,Method,' . $this->RoutesId . ',Method' : 'required|unique:Routes,Method',
			'Uri' => !empty($this->RoutesId) ? 'required|unique:Routes,Uri,' . $this->RoutesId . ',Uri' : 'required|unique:Routes,Uri',
			'Name' => !empty($this->RoutesId) ? 'required|unique:Routes,Name,' . $this->RoutesId . ',Name' : 'required|unique:Routes,Name',
			'Controller' => !empty($this->RoutesId) ? 'required|unique:Routes,Controller,' . $this->RoutesId . ',Controller' : 'required|unique:Routes,Controller',
			'Function' => !empty($this->RoutesId) ? 'required|unique:Routes,Function,' . $this->RoutesId . ',Function' : 'required|unique:Routes,Function',
			'Hash' => !empty($this->RoutesId) ? 'required|unique:Routes,Hash,' . $this->RoutesId . ',Hash' : 'required|unique:Routes,Hash',
			'created_at' => !empty($this->RoutesId) ? 'required|unique:Routes,created_at,' . $this->RoutesId . ',created_at' : 'required|unique:Routes,created_at',
			'updated_at' => !empty($this->RoutesId) ? 'required|unique:Routes,updated_at,' . $this->RoutesId . ',updated_at' : 'required|unique:Routes,updated_at',
        ];
    }
}
