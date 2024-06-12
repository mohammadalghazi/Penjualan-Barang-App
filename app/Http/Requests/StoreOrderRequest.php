<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
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
            'payment_id' => 'nullable|integer|exists:payments,id',
            'address_id' => 'nullable|integer|exists:addresses,id',
            'status' => 'required|in:pending,success,failed',
        ];
    }

    public function messages(): array
    {
        return [
            'payment_id.integer' => 'Payment id must be an integer',
            'payment_id.exists' => 'Payment id not found',
            'address_id.integer' => 'Address id must be an integer',
            'address_id.exists' => 'Address id not found',
            'status.required' => 'Status is required',
            'status.in' => 'Status must be one of the following: pending, success, failed',
        ];
    }
}
