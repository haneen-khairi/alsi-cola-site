<?php

namespace App\Http\Requests;

use App\Rules\GoogleRecaptcha;
use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'subject' => 'required',
            'message' => 'required',
            'g-recaptcha-response' => 'required'
        ];
       
    }

    public function message()
    {
        return [
            'name.required' => 'Name is required !!',
            'email.required' => 'Email is required !!',
            'email.email' => 'Invalid Email !!',
            'phone.required' => 'Phone is required !!',
            'subject.required' => 'Subject is required !!',
            'g-recaptcha-response.required' => 'Please verify that you are not a robot.',
                   
        ];
    }
}
