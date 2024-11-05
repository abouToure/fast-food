<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\Shop;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call([
            CategorySeeder::class,
           // ShopSeeder::class,
            UserSeeder::class,
            //ProductSeeder::class
        ]);
          User::factory(100)->create();
           Product::factory(5)->create();
    }
}
