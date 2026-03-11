<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDemonRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'blood_level' => 'required|integer|min:0',
            'hierarchy' => 'required|in:rey,luna,común'
        ];
    }
}
