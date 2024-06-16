<?php

namespace App\Http\Requests\Edit;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' => 'required|string|min:2',
            'price' => 'required|integer|min:0',
            'stock' => 'required|integer|min:0',
            'satuan_id' => 'required|exists:satuans,id',
            'category_id' => 'required|exists:categories,id',
            'deskripsi' => 'required|string|min:1',
        ];
    }
}
