<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'Ardi',
            'firstname' => 'Ardi',
            'lastname' => 'MyCourse',
            'email' => 'ardi@mycourse.id',
            'password' => bcrypt('secret')
        ]);
    }
}
