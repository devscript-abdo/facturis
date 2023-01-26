<?php

declare(strict_types=1);

namespace App\Http\Requests\Document;

use Illuminate\Foundation\Http\FormRequest;

class ArticleStoreRequest extends FormRequest
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
            'articles' => ['required','array'],
            'articles.*.designation' => ['required', 'string'],
            'articles.*.description' => ['nullable', 'string'],
            'articles.*.quantity' => ['required', 'integer'],
            'articles.*.prix_unitaire' => ['required', 'numeric', 'digits_between:1,20'],
            //'articles.*.montant_ht' => ['nullable', 'numeric'],
            'articles.*.remise' => ['nullable', 'numeric', 'digits_between:1,20'],
            'articles.*.taux_tax' => ['required', 'string', 'exists:taxes,taux_percent'],
        ];
    }
}
