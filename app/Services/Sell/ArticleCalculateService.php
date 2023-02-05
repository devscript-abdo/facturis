<?php

namespace App\Services\Sell;
use Illuminate\Http\Request;

trait ArticleCalculateService
{

    private function hasItems(Request $request)
    {

        $articlesData = collect($request->articles)->map(function ($item) {

            if ($item['remise'] && $item['remise'] > 0 && $item['remise'] !== 0) {

                $itemPrice = $item['price_uni'] * $item['quantity'];
                $finalePrice = $this->caluculateRemise($itemPrice, $item['remise']);
                $tauxRemise = $this->calculateOnlyRemise($itemPrice, $item['remise']);

                $totalPrice = $this->caluculateTotalWithTax($finalePrice, $item['taux_tax']);
                $taxePrice = $this->calculateOnlyTax($finalePrice, $item['taux_tax']);

                $prices = [
                    'price_total' => $totalPrice,
                    'price_ht' => $finalePrice,
                    'price_tax' => $taxePrice,
                    'taux_remise' => $tauxRemise
                ];

                return collect($item)->merge($prices);
            }
            $prices = [
                'price_total' => $this->caluculateTotalWithTax($item['price_uni'] * $item['quantity'], $item['taux_tax']),
                'price_ht' => ($item['price_uni'] * $item['quantity']),
                'price_tax' => $this->calculateOnlyTax(($item['price_uni'] * $item['quantity']), $item['taux_tax']),
                'remise' => '0'
            ];

            return collect($item)->merge($prices);
        })->toArray();

        $articles = array_filter(array_map('array_filter', $articlesData));

        return $articles;
    }
}
