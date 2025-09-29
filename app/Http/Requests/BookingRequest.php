<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;

class BookingRequest extends FormRequest
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
        return [
            "full_name" => ["required", "string"],
            "email" => ["required", "email"],
            "phone" => ["required", "numeric", "digits_between:10,13"],
            "parent_phone" => ["required", "numeric", "digits_between:10,13"],
            "nik" => ["required", "numeric", "digits:16"],
            "ktp" => ["required", "image", "max:3000"],
            "check_in" => ["required", "date"],
            "id_user" => ['nullable', 'exists:users,id'],
        ];
    }
}
