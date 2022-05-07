<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name'              =>  'Ali Fahrial Anwar',
                'email'             =>  'alifahiralanwar@gmail.com',
                'password'          =>   Hash::make('12345678'),
                'remember_token'    =>   NULL,
                'created_at'        =>   date('Y-m-d H:i:s'),
                'updated_at'        =>   date('Y-m-d H:i:s'),
            ],
            [
                'name'              =>  'Muhammad Anwar',
                'email'             =>  'muhammadanwar@gmail.com',
                'password'          =>   Hash::make('12345678'),
                'remember_token'    =>   NULL,
                'created_at'        =>   date('Y-m-d H:i:s'),
                'updated_at'        =>   date('Y-m-d H:i:s'),
            ]
        ];

        User::insert($users);
    }
}
