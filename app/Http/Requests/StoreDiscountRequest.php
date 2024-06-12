<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDiscountRequest extends FormRequest
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
            'name' => 'required|string|max:255|unique:discounts',
            'type' => 'required|in:fixed,percentage',
            'rules' => 'required|json',
            'amount' => 'required|integer',
            'max_amount' => 'required|integer',
            'availability' => 'required|integer',
            'is_global' => 'required|boolean',
            'started_at' => 'required|date',
            'expired_at' => 'required|date',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Name is required',
            'name.unique' => 'Name is already taken',
            'type.required' => 'Type is required',
            'type.in' => 'Type is invalid',
            'rules.required' => 'Rules is required',
            'amount.required' => 'Amount is required',
            'max_amount.required' => 'Max Amount is required',
            'availability.required' => 'Availability is required',
            'is_global.required' => 'Is Global is required',
            'started_at.required' => 'Started At is required',
            'expired_at.required' => 'Expired At is required',
        ];
    }
}
