<?php

use Illuminate\Database\Seeder;

class MenuPageSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table( 'menu_page' )->insert( [
            'menu_id' => 1,
            'page_id' => 6
        ] );

        DB::table( 'menu_page' )->insert( [
            'menu_id' => 1,
            'page_id' => 3
        ] );

        DB::table( 'menu_page' )->insert( [
            'menu_id' => 1,
            'page_id' => 5
        ] );

        DB::table( 'menu_page' )->insert( [
            'menu_id' => 2,
            'page_id' => 6
        ] );

        DB::table( 'menu_page' )->insert( [
            'menu_id' => 2,
            'page_id' => 3
        ] );

        DB::table( 'menu_page' )->insert( [
            'menu_id' => 2,
            'page_id' => 4
        ] );

        DB::table( 'menu_page' )->insert( [
            'menu_id' => 2,
            'page_id' => 5
        ] );

        DB::table( 'menu_page' )->insert( [
            'menu_id' => 3,
            'page_id' => 8
        ] );

        DB::table( 'menu_page' )->insert( [
            'menu_id' => 3,
            'page_id' => 7
        ] );
    }
}
