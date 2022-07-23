<?php

namespace App\Http\Requests\Account;

use Illuminate\Validation\Rules;
use App\Rules\Account\MatchOldPassword;
use Illuminate\Foundation\Http\FormRequest;

class PasswordStoreRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "current_password" => ["required", new MatchOldPassword],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ];
    }
}
