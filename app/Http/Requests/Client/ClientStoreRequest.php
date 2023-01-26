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
            'contact' => 'required|string',
            'telephone' => 'required|phone:MA|unique:clients',
            'email' => 'required|email|unique:clients',
            'addresse' => 'required|string',
            'rc' => 'nullable|numeric|unique:clients',
            'ice' => 'required|numeric|digits_between:15,16|unique:clients',
            'description'=>'nullable|string',
        ];
    }
}
