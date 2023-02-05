<?php

declare(strict_types=1);

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;

class ClientStoreRequest extends FormRequest
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
            'contact' => 'nullable|string',
            'telephone' => 'required|phone:MA|unique:clients',
            'fax' => 'nullable|phone:MA|unique:clients',
            'email' => 'nullable|email|unique:clients',

            'rc' => 'nullable|numeric|unique:clients',
            'ice' => 'required|numeric|digits_between:15,16|unique:clients',
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
