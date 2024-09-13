<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class IndexRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array {
        return [
            'title' => 'string',
            'content' => 'string',
            'image' => 'string|nullable',
            'category_id' => '',
            'tags' => ''
        ];
    }
}