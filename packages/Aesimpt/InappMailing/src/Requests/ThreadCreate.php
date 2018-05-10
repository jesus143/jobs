<?php

namespace Aesimpt\InAppMailing\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ThreadCreate extends FormRequest
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
            'receiver' => 'required|email',
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
            'receiver.required' => __('Email receiver field is required.'),
            'receiver.email' => __('Receiver email must be a valid email.'),
            'body.required' => __('Message field is required')
        ];
    }
}
