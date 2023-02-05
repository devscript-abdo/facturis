<?php

declare(strict_types=1);

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ClientUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [

            'entreprise' => 'required|string',

            'telephone' => ['required', 'phone:MA', Rule::unique('clients')->ignore($this->route('client'), 'uuid')],
            'fax' => ['nullable', 'phone:MA', Rule::unique('clients')->ignore($this->route('client'), 'uuid')],
            'email' => ['nullable', 'email', Rule::unique('clients')->ignore($this->route('client'), 'uuid')],

            'rc' => ['nullable', 'numeric', Rule::unique('clients')->ignore($this->route('client'), 'uuid')],
            'ice' => ['required', 'numeric', 'digits_between:14,16', Rule::unique('clients')->ignore($this->route('client'), 'uuid')],
            'details' => 'nullable|string',
            'devis' => ['required', 'integer', 'exists:currencies,id'],

            'facturation_address' => ['nullable', 'string'],
            'facturation_postal' => ['nullable', 'numeric'],
            'facturation_city' => ['nullable', 'string'],
            'facturation_country' => ['nullable', 'string'],

            'livraison_address' => ['nullable', 'string'],
            'livraison_postal' => ['nullable', 'numeric'],
            'livraison_city' => ['nullable', 'string'],
            'livraison_country' => ['nullable', 'string'],
        ];
    }
}
