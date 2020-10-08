<?php

namespace App\Http\Requests\Tetapan;

use Illuminate\Foundation\Http\FormRequest;

class RefLevel extends FormRequest
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

			'RefLevelId' => !empty($this->RefLevelId) ? 'required|unique:RefLevel,RefLevelId,' . $this->RefLevelId . ',RefLevelId' : 'required|unique:RefLevel,RefLevelId',
			'KodLevel' => !empty($this->RefLevelId) ? 'required|unique:RefLevel,KodLevel,' . $this->RefLevelId . ',KodLevel' : 'required|unique:RefLevel,KodLevel',
			'UserLevel' => !empty($this->RefLevelId) ? 'required|unique:RefLevel,UserLevel,' . $this->RefLevelId . ',UserLevel' : 'required|unique:RefLevel,UserLevel',
        ];
    }
}
