<?php

namespace Aesimpt\InAppMailing\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ThreadMessageCreate extends FormRequest
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
        return [
            'body' => 'required'
        ];
    }

    /**
     * Customize returned message validations.
     * 
     * @return array
     */
    public function messages()
    {
        return [
            'body.required' => __('Message field is required')
        ];
    }
}
