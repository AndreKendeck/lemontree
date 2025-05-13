<?php

namespace App\Http\Requests;

use App\Enums\ClientType;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreClientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    protected function prepareForValidation()
    {
        $this->mergeIfMissing([
            'primary_sales_contact' => [
                'name' => $this->get('primary_sales_contact_name'),
                'email' => $this->get('primary_sales_contact_email'),
                'telephone' => $this->get('primary_sales_contact_telephone')
            ],
            'primary_logistics_contact' => [
                'name' => $this->get('primary_logistics_contact_name'),
                'email' => $this->get('primary_logistics_contact_email'),
                'telephone' => $this->get('primary_logistics_contact_telephone')
            ]
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'type' => ['required', Rule::enum(ClientType::class)],
            'business_name' => ['required', 'string', 'min:3', 'max:255'],
            'country' => ['required', 'min:3', 'max:255'],
            'vat_number' => ['required', 'min:3', 'max:255'],
            'primary_sales_contact' => ['required', 'array:name,email,telephone'],
            'primary_logistics_contact' => ['required', 'array:name,email,telephone']
        ];
    }
}
