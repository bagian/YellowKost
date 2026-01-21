<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoomRequest extends FormRequest
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
            'room_name' => ['required', 'string'],
            'price' => ['required', 'string'],
            'period' => ['required', 'in:day,month,year'],
            'pictures' => ['nullable'],
            'pictures.*' => ['image', 'max:10000'],
        ];

        if($this->isMethod('PUT') || $this->isMethod('PATCH')) {
            $rules['deleted.*'] = ['exists:room_pictures,id'];
        }

        return $rules;
    }
}