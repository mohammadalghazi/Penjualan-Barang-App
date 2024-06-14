<?php

namespace App\Http\Requests;

use App\Models\Product;
use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
        return [
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'size' => 'required|json',
            'stock' => 'required|integer',
            'price' => 'required|integer',
            'status' => 'required|string',
            'category_id' => 'required|exists:sub_categories,id',
            'brand_id' => 'required|exists:brands,id',
            'discount_id' => 'nullable|exists:discounts,id',
            'expired_at' => 'required|date',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Name is required',
            'description.required' => 'Description is required',
            'size.required' => 'Size is required',
            'stock.required' => 'Stock is required',
            'price.required' => 'Price is required',
            'status.required' => 'Status is required',
            'category_id.required' => 'Category is required',
            'brand_id.required' => 'Brand is required',
            'discount_id.required' => 'Discount is required',
            'expired_at.required' => 'Expired date is required',
        ];
    }
}
