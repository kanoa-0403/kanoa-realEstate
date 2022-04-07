<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterFormRequest extends FormRequest
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
            // 'lastname' => 'required',
            // 'firstname' => 'required',
            // 'lastname_kana' => 'required',
            // 'firstname_kana' => 'required',
            // 'sex' => 'required',
            // 'birth_date' => 'required',
            // 'email' => 'required',
            // 'phone_number' => 'required',
            // 'postcode' => 'required',
            // 'prefecture' => 'required',
            // 'city' => 'required',
            // 'block' => 'required',
            // 'password' => 'required',
            // 'profile_img' => 'required',
            // 'profile' => 'required',
            // 'role' => 'required',
        ];
    }
}
