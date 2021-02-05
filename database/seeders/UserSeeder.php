<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


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
             'name'=>'Ali Bhai',
            'email'=>'alibhai@gmail.com',
            'password'=>Hash::make('12345')
            ],
            [
                'name'=>'Kamal joy',
               'email'=>'kamaljoy@gmail.com',
               'password'=>Hash::make('12345')
            ],
            [
                'name'=>'Hello Ali',
               'email'=>'helloali@gmail.com',
               'password'=>Hash::make('12345')
            ]

        ]);
    }
}
