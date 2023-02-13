<?php

declare(strict_types=1);

namespace App\Http\Requests\Document;

use Illuminate\Foundation\Http\FormRequest;

class EstimateStoreRequest extends FormRequest
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

            'client' => ['required', 'integer', 'exists:clients,id'],
            'document_date' => ['required', 'date_format:d/m/Y'],
        ];
    }

    public function attributes()
    {
        return [
            'document_date' => 'date de devis',
        ];
    }
}
