<?php

namespace App\Http\Requests\Keys;

use Illuminate\Foundation\Http\FormRequest;

class UpdateKeyRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => [
                'string',
                'max:255',
            ],
            'description' => [
                'string',
            ],
            'difficulty' => [
                'integer',
                'min:1',
            ],
            'colour' => [
                'nullable',
                'string',
                'regex:/[0-9a-z]{6}/i',
            ],
            'image_url' => [
                'nullable',
                'url',
            ],
        ];
    }
}
