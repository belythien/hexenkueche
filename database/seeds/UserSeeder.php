<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        DB::table( 'users' )->insert( [
            'name'     => 'Basti',
            'email'    => 's.hoewer@gmail.com',
            'password' => bcrypt( '9O35cBEFTJ4p'),
        ] );

        DB::table( 'users' )->insert( [
            'name'     => 'Tastibasti',
            'email'    => 'tastibasti@gmail.com',
            'password' => bcrypt( 'b8h4WOFz9Bt5'),
        ] );

        DB::table( 'users' )->insert( [
            'name'     => 'Birgit',
            'email'    => 'hexenkueche1@yahoo.com',
            'password' => bcrypt( 'IyS1EJ87AGa2'),
        ] );
    }
}
