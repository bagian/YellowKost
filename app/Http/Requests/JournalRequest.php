<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JournalRequest extends FormRequest
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
        $rules = [
            'type' => ['required', 'string', 'in:earnings,expends,payment'],
            'date' => ['required', 'date'],
            'amount' => ['required', 'numeric'],
            'payment_method' => ['required', 'exists:payment_methods,id'],
        ];

        if ($this->input('type' === 'payment')) {
            $rules['id_booking'] = ['exists:bookings,id'];
            $rules['status'] = ['required', 'in:confirmed,pending,failed'];
            $rules['is_dp'] = ['boolean'];
        } else {
            $rules['detail'] = ['required', 'string', 'max:255'];
            $rules['notes'] = ['nullable', 'string', 'max:500'];
        }

        return $rules;
    }
}
