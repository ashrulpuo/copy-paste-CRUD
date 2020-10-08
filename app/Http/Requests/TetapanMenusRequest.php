<?php

namespace App\Http\Requests\Tetapan;

use Illuminate\Foundation\Http\FormRequest;

class Menus extends FormRequest
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

			'MenuId' => !empty($this->MenusId) ? 'required|unique:Menus,MenuId,' . $this->MenusId . ',MenuId' : 'required|unique:Menus,MenuId',
			'Menu' => !empty($this->MenusId) ? 'required|unique:Menus,Menu,' . $this->MenusId . ',Menu' : 'required|unique:Menus,Menu',
			'Parent' => !empty($this->MenusId) ? 'required|unique:Menus,Parent,' . $this->MenusId . ',Parent' : 'required|unique:Menus,Parent',
			'RoutesId' => !empty($this->MenusId) ? 'required|unique:Menus,RoutesId,' . $this->MenusId . ',RoutesId' : 'required|unique:Menus,RoutesId',
			'Type' => !empty($this->MenusId) ? 'required|unique:Menus,Type,' . $this->MenusId . ',Type' : 'required|unique:Menus,Type',
			'Icon' => !empty($this->MenusId) ? 'required|unique:Menus,Icon,' . $this->MenusId . ',Icon' : 'required|unique:Menus,Icon',
			'Sort' => !empty($this->MenusId) ? 'required|unique:Menus,Sort,' . $this->MenusId . ',Sort' : 'required|unique:Menus,Sort',
			'deleted_at' => !empty($this->MenusId) ? 'required|unique:Menus,deleted_at,' . $this->MenusId . ',deleted_at' : 'required|unique:Menus,deleted_at',
			'created_at' => !empty($this->MenusId) ? 'required|unique:Menus,created_at,' . $this->MenusId . ',created_at' : 'required|unique:Menus,created_at',
			'updated_at' => !empty($this->MenusId) ? 'required|unique:Menus,updated_at,' . $this->MenusId . ',updated_at' : 'required|unique:Menus,updated_at',
        ];
    }
}
