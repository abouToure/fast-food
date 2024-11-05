<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Product::truncate();
        Schema::enableForeignKeyConstraints();

        $products = [
            [

                'name' => 'Ayiti',
                'description' => "Un homme est bloqué à l’aéroport.\n "
                    . 'Questionné par les douaniers, il doit alors justifier son identité, '
                    . 'et surtout prouver qu\'il est haïtien – qu\'est-ce qu\'être haïtien ?',
                'poster_url' => 'client1.jpg',
                'price' => 8.50,
                'category_name' => 'Pizza',

            ],
            [

                'name' => 'Cible mouvante',
                'description' => 'Dans ce « thriller d’anticipation », des adultes semblent alimenter '
                    . 'et véhiculer une crainte féroce envers les enfants âgés entre 10 et 12 ans.',
                'poster_url' => 'client2.jpg',
                'price' => 9.00,
                'category_name' => 'Burger',
            ],
        ];

        //Prepare the data
        foreach ($products as &$data) {
            $category = Category::firstWhere('name',$data['category_name']);
            DB::table('products')->insert([
                'name' => $data['name'],
                'description' => $data['description'],
                'poster_url' => $data['poster_url'],
                'price' => $data['price'],
                'category_id' => $category->id ?? null,

            ]);
        }
    }
}
