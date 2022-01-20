<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'username' => 'Admin',
                'gender' => 'male',
                'age' => '22',
                'phone' => '6281262887232',
                'email' => 'admin@gmail.com',
                'password' => password_hash('asdfasdf', PASSWORD_DEFAULT),
                'role' => 'Admin',
                'image' => 'images/defaultImage.png',
            ],
            [
                'name' => 'winer',
                'username' => 'winer',
                'gender' => 'male',
                'age' => '22',
                'phone' => '6281262887232',
                'email' => 'winerwijaya05@gmail.com',
                'password' => password_hash('asdfasdf', PASSWORD_DEFAULT),
                'role' => 'Customer',
                'image' => 'images/defaultImage.png',
            ],
            [
                'name' => 'Selvia',
                'username' => 'selvia',
                'gender' => 'female',
                'age' => '20',
                'phone' => '6281224743429',
                'email' => 'selvia@gmail.com',
                'password' => password_hash('asdfasdf', PASSWORD_DEFAULT),
                'role' => 'Customer',
                'image' => 'images/defaultImage.png',
            ],
        ]);
    }
}
