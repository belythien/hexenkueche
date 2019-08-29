<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HotboxSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table( 'hotboxes' )->insert( [
            'text'        => 'Reservierung per Telefon 06126-5049523',
            'url'         => 'reservierung',
            'status'        => 1
        ] );

        DB::table( 'hotboxes' )->insert( [
            'text'        => 'Reservierung per Telefon 06126-5049523',
            'url'         => 'reservierung',
            'status'        => 1
        ] );
    }
}
