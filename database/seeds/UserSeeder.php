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
            'name' => 'Carlos',
            'email' => 'carlos@example.com',
            'password' => '12345678'
        ]);
        DB::table('users')->insert([
            'name' => 'Laís',
            'email' => 'lais@example.com',
            'password' => '12345678'
        ]);
    }
}
