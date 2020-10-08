<?php

namespace App\Http\Requests\Tetapan;

use Illuminate\Foundation\Http\FormRequest;

class failed_jobs extends FormRequest
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

			'id' => !empty($this->failed_jobsId) ? 'required|unique:failed_jobs,id,' . $this->failed_jobsId . ',id' : 'required|unique:failed_jobs,id',
			'connection' => !empty($this->failed_jobsId) ? 'required|unique:failed_jobs,connection,' . $this->failed_jobsId . ',connection' : 'required|unique:failed_jobs,connection',
			'queue' => !empty($this->failed_jobsId) ? 'required|unique:failed_jobs,queue,' . $this->failed_jobsId . ',queue' : 'required|unique:failed_jobs,queue',
			'payload' => !empty($this->failed_jobsId) ? 'required|unique:failed_jobs,payload,' . $this->failed_jobsId . ',payload' : 'required|unique:failed_jobs,payload',
			'exception' => !empty($this->failed_jobsId) ? 'required|unique:failed_jobs,exception,' . $this->failed_jobsId . ',exception' : 'required|unique:failed_jobs,exception',
			'failed_at' => !empty($this->failed_jobsId) ? 'required|unique:failed_jobs,failed_at,' . $this->failed_jobsId . ',failed_at' : 'required|unique:failed_jobs,failed_at',
        ];
    }
}
