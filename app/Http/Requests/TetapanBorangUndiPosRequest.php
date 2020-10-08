<?php

namespace App\Http\Requests\Tetapan;

use Illuminate\Foundation\Http\FormRequest;

class BorangUndiPos extends FormRequest
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

			'BorangUndiPosId' => !empty($this->BorangUndiPosId) ? 'required|unique:BorangUndiPos,BorangUndiPosId,' . $this->BorangUndiPosId . ',BorangUndiPosId' : 'required|unique:BorangUndiPos,BorangUndiPosId',
			'BorangUndiPos' => !empty($this->BorangUndiPosId) ? 'required|unique:BorangUndiPos,BorangUndiPos,' . $this->BorangUndiPosId . ',BorangUndiPos' : 'required|unique:BorangUndiPos,BorangUndiPos',
			'Keterangan' => !empty($this->BorangUndiPosId) ? 'required|unique:BorangUndiPos,Keterangan,' . $this->BorangUndiPosId . ',Keterangan' : 'required|unique:BorangUndiPos,Keterangan',
        ];
    }
}
