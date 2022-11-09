<?php

namespace Database\Seeders;

use App\Models\Facturis\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name'=>'PME',
                'slug'=>'pme',
                'code'=>1,
                'added_at'=>now(),
            ],
            [
                'name'=>'SA',
                'slug'=>'sa',
                'code'=>2,
                'added_at'=>now(),
            ]
        ];

        foreach($categories as $category)
        {
            Category::create($category);
        }
    }
}
