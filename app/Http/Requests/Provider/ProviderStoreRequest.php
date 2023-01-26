<?php

declare(strict_types=1);

namespace App\Http\Requests\Provider;

use Illuminate\Foundation\Http\FormRequest;

class ProviderStoreRequest extends FormRequest
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
            'telephone' => 'required|phone:MA|unique:providers',
            'email' => 'required|email|unique:providers',
            'addresse' => 'required|string',
            'rc' => 'nullable|numeric|unique:providers',
            'ice' => 'required|numeric|digits_between:15,16|unique:providers',
            'description'=>'nullable|string',
        ];
    }
}
