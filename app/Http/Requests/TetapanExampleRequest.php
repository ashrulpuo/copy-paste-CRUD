<?php

namespace App\Http\Requests\Tetapan;

use Illuminate\Foundation\Http\FormRequest;

class Example extends FormRequest
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

			'ExampleId' => !empty($this->ExampleId) ? 'required|unique:Example,ExampleId,' . $this->ExampleId . ',ExampleId' : 'required|unique:Example,ExampleId',
			'name' => !empty($this->ExampleId) ? 'required|unique:Example,name,' . $this->ExampleId . ',name' : 'required|unique:Example,name',
			'created_at' => !empty($this->ExampleId) ? 'required|unique:Example,created_at,' . $this->ExampleId . ',created_at' : 'required|unique:Example,created_at',
			'updated_at' => !empty($this->ExampleId) ? 'required|unique:Example,updated_at,' . $this->ExampleId . ',updated_at' : 'required|unique:Example,updated_at',
        ];
    }
}
