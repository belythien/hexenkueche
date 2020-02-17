<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AllergenSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table( 'allergens' )->insert( [
            'id'        => 1
        ] );
        DB::table( 'allergens' )->insert( [
            'id'        => 2
        ] );
        DB::table( 'allergens' )->insert( [
            'id'        => 3
        ] );
        DB::table( 'allergens' )->insert( [
            'id'        => 4
        ] );
        DB::table( 'allergens' )->insert( [
            'id'        => 5
        ] );
        DB::table( 'allergens' )->insert( [
            'id'        => 6
        ] );
        DB::table( 'allergens' )->insert( [
            'id'        => 7
        ] );
        DB::table( 'allergens' )->insert( [
            'id'        => 8
        ] );
        DB::table( 'allergens' )->insert( [
            'id'        => 9
        ] );
        DB::table( 'allergens' )->insert( [
            'id'        => 10
        ] );
        DB::table( 'allergens' )->insert( [
            'id'        => 11
        ] );
        DB::table( 'allergens' )->insert( [
            'id'        => 12
        ] );
    }
}

