<?php

namespace App\Http\Requests;

use App\Enums\ClientType;
use App\Enums\PurchaseOrderType;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StorePurchaseOrderRequest extends FormRequest
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
            'type' => ['required', Rule::enum(PurchaseOrderType::class)],
            'client_id' => match ($this->type) {
                PurchaseOrderType::DISTRIBUTOR->value => ['required', Rule::exists('clients', 'id')->where('type', ClientType::DISTRIBUTOR)],
                PurchaseOrderType::SUPPLIER->value => ['required', Rule::exists('clients', 'id')->where('type', ClientType::SUPPLIER)]
            },
            'products' => ['required', 'array'],
            'products.*' => ['required', 'integer', Rule::exists('products', 'id')]
        ];
    }
}
