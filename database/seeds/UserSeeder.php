<?php

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
            'name' => 'Sabbir',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
            'created_at' => '2021-09-01 10:24:16',
            'updated_at' => '2021-09-01 10:24:16',
        ]);
    }
}
