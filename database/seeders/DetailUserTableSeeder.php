<?php

namespace Database\Seeders;

use App\Models\DetailUser;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DetailUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $detail_user = [
            [
                'users_id'          =>  1,
                'photo'             =>  '',
                'role'              =>  'website developer' ,
                'biography'         =>   '',
                'created_at'        =>   date('Y-m-d H:i:s'),
                'updated_at'        =>   date('Y-m-d H:i:s'),
            ],
            [
                'users_id'          =>  2,
                'photo'             =>  '',
                'role'              =>  'UI Designer',
                'biography'         =>   '',
                'created_at'        =>   date('Y-m-d H:i:s'),
                'updated_at'        =>   date('Y-m-d H:i:s'),
            ]
        ];

        DetailUser::insert($detail_user);
    }
}
