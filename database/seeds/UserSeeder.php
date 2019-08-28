<?php

use Illuminate\Support\Str;
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
            'name' => 'Basti',
            'email' => 's.hoewer@gmail.com',
            'password' => '$2y$10$Aq0wn/T/JIiqASO8HtLK/e8vpyI5hSjvHRYCnqCyXdYJyXlZwui8y',
        ]);

        DB::table('users')->insert([
            'name' => 'Tastibasti',
            'email' => 'tastibasti@gmail.com',
            'password' => '$2y$10$Aq0wn/T/JIiqASO8HtLK/e8vpyI5hSjvHRYCnqCyXdYJyXlZwui8y',
        ]);
    }
}
