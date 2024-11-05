<?php

namespace Database\Seeders;
use App\Models\User;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
class UserSeeder extends Seeder
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
        User::truncate();
        Schema::enableForeignKeyConstraints();

        //Define data
        $users = [
            [
                'name'=>'admin',
                'email'=>'admin@sull.com',
                'password'=>'123',
                'usertype' => '1'
            ],
            [
                'name'=>'abou',
                'email'=>'abou@sull.com',
                'password'=>'123',
                'usertype' => '0'
            ],
        ];



        //Insert data in the table
        foreach ($users as $data) {     
            DB::table('users')->insert([
                'name' => $data['name'],
                'email' => $data['email'],
                'usertype' => $data['usertype'],
                'password' => Hash::make($data['password']),
            ]);
        }
    }
}
