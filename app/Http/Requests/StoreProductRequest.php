<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'size' => 'required|json',
            'stock' => 'required|integer',
            'price' => 'required|integer',
            'status' => 'required|string',
            'image' => 'nullable|image|mimes::jpeg,png,jpg,gif,svg|max:2048',
            'category_id' => 'required|exists:sub_categories,id',
            'brand_id' => 'required|exists:brands,id',
            'discount_id' => 'nullable|exists:discounts,id',
            'expired_at' => 'nullable|date',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Name is required',
            'description.required' => 'Description is required',
            'size.required' => 'Size is required',
            'stock.required' => 'Stock is required',
            'stock.integer' => 'Stock must be an integer',
            'price.required' => 'Price is required',
            'status.required' => 'Status is required',
            'image.required' => 'Image is required',
            'image.max' => 'Image must be less than 2048 characters',
            'image.mimes' => 'Image must be jpeg,png,jpg,gif,svg',
            'category_id.required' => 'Category is required',
            'brand_id.required' => 'Brand is required',
            'discount_id.nullable' => 'Discount is required',
            'expired_at.nullable' => 'Expired date is required',
        ];
    }
}
