<?php

namespace App\Http\Requests\Tetapan;

use Illuminate\Foundation\Http\FormRequest;

class DM extends FormRequest
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

			'DmId' => !empty($this->DMId) ? 'required|unique:DM,DmId,' . $this->DMId . ',DmId' : 'required|unique:DM,DmId',
			'DunId' => !empty($this->DMId) ? 'required|unique:DM,DunId,' . $this->DMId . ',DunId' : 'required|unique:DM,DunId',
			'KodDm' => !empty($this->DMId) ? 'required|unique:DM,KodDm,' . $this->DMId . ',KodDm' : 'required|unique:DM,KodDm',
			'Penerangan' => !empty($this->DMId) ? 'required|unique:DM,Penerangan,' . $this->DMId . ',Penerangan' : 'required|unique:DM,Penerangan',
        ];
    }
}
