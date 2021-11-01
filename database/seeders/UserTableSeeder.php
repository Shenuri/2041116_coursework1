<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a = new User;
        $a->first_name="Mark";
        $a->last_name="Andrew";
        $a->username="mark123";
        $a->email="mark12@gmail.com";
        $a->password="mark";
        $a->phone_number="0903454567";
        $a->dob="1990-05-03";
        $a->save();

    }
}
