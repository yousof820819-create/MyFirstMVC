<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;


class RegisterRequest extends FormRequest{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array{
        return [
            'name' => ['required' , 'string' , 'max:191'],
            'last_name' => ['required' , 'string' , 'max:191'],
            'phone_number' => ['required', 'digits:11',Rule::unique('users','phone_number')],
            'email' => ['required','email','max:191',Rule::unique('users','email')],
            'password' => ['required','confirmed',Password::min(8)->max(20)],
        ];}

    public function messages(): array
        {
            return [
              'name.required' => 'the name is required',
              'name.string' => 'the name must be string',
              'name.max' => 'the name is too long, choose a shorter name',
              'last_name.required' => 'the lastname is required',
              'last_name.string' => 'the lastname must be string',
              'last_name.max' => 'the lastname is too long, choose a shorter lastname',
              'phone_number.required' => 'the phone number is required',
              'phone_number.digits' => 'the phone number must be 11 digits',
              'phone_number.unique' => 'the phone number is already exists',
              'email.required' => 'the email is required',
              'email.email' => 'the email must be a valid email',
              'email.max' =>  'the email must be a valid email',
              'email.unique' => 'the email is already exists',
              'password.required' => 'the password is required',
              'password.min' => 'the password must be between 8 and 20 characters',
              'password.max' => 'the password must be between 8 and 20 characters',
            ];
        }

}
//salam
