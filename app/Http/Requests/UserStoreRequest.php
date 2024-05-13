<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $userId = $this->user->id ?? null; // Retrieve user id if available

        return [
            'name' => ['required', 'string', 'min:3'],
            'username' => [
                'required',
                'string',
                'min:3',
                'unique:users,username,' . $userId, // Ensure username is unique, ignoring the current user's id if available
            ],
            'avatar'=>['file'],
            'email' => [
                'required',
                'string',
                'min:3',
                'email',
                'unique:users,email,' . $userId, // Ensure email is unique, ignoring the current user's id if available
            ],
            'password' => ['required', 'string', 'min:5', 'confirmed']
        ];
    }
}
