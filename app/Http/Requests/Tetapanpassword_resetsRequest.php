<?php

namespace App\Http\Requests\Tetapan;

use Illuminate\Foundation\Http\FormRequest;

class password_resets extends FormRequest
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

			'email' => !empty($this->password_resetsId) ? 'required|unique:password_resets,email,' . $this->password_resetsId . ',email' : 'required|unique:password_resets,email',
			'token' => !empty($this->password_resetsId) ? 'required|unique:password_resets,token,' . $this->password_resetsId . ',token' : 'required|unique:password_resets,token',
			'created_at' => !empty($this->password_resetsId) ? 'required|unique:password_resets,created_at,' . $this->password_resetsId . ',created_at' : 'required|unique:password_resets,created_at',
        ];
    }
}
