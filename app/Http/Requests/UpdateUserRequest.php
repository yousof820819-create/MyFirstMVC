<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateUserRequest extends FormRequest
{
    public function authorize(): bool
    {
        return (bool) session('is_admin');
    }

    public function rules(): array
    {
        $id = $this->route('id');
        $field = $this->route('field');

        $rules = [
            'name'         => ['required', 'string', 'max:191'],
            'last_name'    => ['required', 'string', 'max:191'],
            'phone_number' => ['required', 'digits:11', Rule::unique('users', 'phone_number')->ignore($id)],
            'email'        => ['required', 'email', 'max:191', Rule::unique('users', 'email')->ignore($id)],
        ];

        abort_unless(array_key_exists($field, $rules), 404);

        return ['value' => $rules[$field]];
    }

    public function attributes(): array
    {
        return ['value' => str_replace('_', ' ', $this->route('field'))];
    }

    public function messages(): array
    {
        return [
            'value.required' => 'the :attribute is required',
            'value.string'   => 'the :attribute must be string',
            'value.max'      => 'the :attribute is too long',
            'value.digits'   => 'the phone number must be 11 digits',
            'value.email'    => 'the email must be a valid email',
            'value.unique'   => 'this :attribute already exists',
        ];
    }
}
