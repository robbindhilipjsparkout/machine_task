<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Hash;


class TeacherLoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teachers_login')->insert([
            'name'=>'robbin Dhilip',
            'email'=>'robbindhilip@110',
            'phone_number'=>987654,
            'password'=>Hash::make('123456'),
            'original_password'=>'123456'
            

        ]);
    }
}
