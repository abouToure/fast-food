<?php

namespace Database\Seeders;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Schema;

class CategorySeeder extends Seeder
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
     Category::truncate();
     Schema::enableForeignKeyConstraints();

     //Define data
     $categories = [
         [
             'id' => '1',
             'name'=>'Burger',
         ],
         [
            'id' => '2',
            'name'=>'Pizza',
        ],
        [
            'id' => '3',
            'name'=>'Frite',
        ],
     ];
     
     
        //Insert data in the table
        foreach ($categories as $data) {     
            DB::table('categories')->insert([
                'id' => $data['id'],
                'name' => $data['name'],
            ]);
        }
    }
}
