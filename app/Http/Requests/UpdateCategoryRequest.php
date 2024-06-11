<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->user()->role === 'admin';
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $category = $this->route('category');
        return [
            'name' => 'required|max:255|unique:categories,name,' . $category->id,
            'code' => 'required|max:255|unique:categories,code,' . $category->id,
            'description' => 'required|max:255',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Name is required',
            'name.max' => 'Name must be less than 255 characters',
            'code.required' => 'Code is required',
            'code.max' => 'Code must be less than 255 characters',
            'description.required' => 'Description is required',
            'description.max' => 'Description must be less than 255 characters',
        ];
    }
}
