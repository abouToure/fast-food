<?php

namespace Database\Seeders;

use App\Models\Shop;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Empty the table first
     Schema::disableForeignKeyConstraints();
     Shop::truncate();
     Schema::enableForeignKeyConstraints();

     //Define data
     $shops = [
         [
             'quantity' => '1',
             'price'=>'10',
         ],
         [
            'quantity' => '5',
            'price'=>'50',
        ],
        [
            'quantity' => '9',
            'price'=>'90',
        ],
     ];
     
     
        //Insert data in the table
        foreach ($shops as $data) {     
            DB::table('shops')->insert([
                'quantity' => $data['quantity'],
                'price' => $data['price'],
            ]);
        }
    }
}
