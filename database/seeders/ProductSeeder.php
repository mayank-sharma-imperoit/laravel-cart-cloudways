<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products=[
            [
                'name'=>'iphone 14',
                'details'=>'iphone 14 16 gb 8 gb',
                'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
                'brands'=>'apple',
                'price'=>50.26,
                'shipping_cost'=>9.02,
                'image_path'=>'storage/product.png',

            ],
            [
                'name'=>'samsung galaxy book pro',
                'details'=>'15.5 inch 8 gb ',
                'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
                'brands'=>'samsung',
                'price'=>15.23,
                'shipping_cost'=>5,
                'image_path'=>'storage/product2.png',

            ]
        ];

        foreach($products as $key => $value){
            Product::create($value);
        }
    }
}
