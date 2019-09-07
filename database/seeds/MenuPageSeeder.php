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
            'page_id' => 3,
            'sort' => 20
        ] );

        DB::table( 'menu_page' )->insert( [
            'menu_id' => 1,
            'page_id' => 5,
            'sort' => 30
        ] );

        DB::table( 'menu_page' )->insert( [
            'menu_id' => 1,
            'page_id' => 6,
            'sort' => 10
        ] );

        DB::table( 'menu_page' )->insert( [
            'menu_id' => 2,
            'page_id' => 6,
            'sort' => 10
        ] );

        DB::table( 'menu_page' )->insert( [
            'menu_id' => 2,
            'page_id' => 3,
            'sort' => 20
        ] );

        DB::table( 'menu_page' )->insert( [
            'menu_id' => 2,
            'page_id' => 4,
            'sort' => 30
        ] );

        DB::table( 'menu_page' )->insert( [
            'menu_id' => 2,
            'page_id' => 5,
            'sort' => 40
        ] );

        DB::table( 'menu_page' )->insert( [
            'menu_id' => 3,
            'page_id' => 8,
            'sort' => 10
        ] );

        DB::table( 'menu_page' )->insert( [
            'menu_id' => 3,
            'page_id' => 7,
            'sort' => 20
        ] );

        DB::table( 'menu_page' )->insert( [
            'menu_id' => 3,
            'page_id' => 9,
            'sort' => 30
        ] );

        DB::table( 'menu_page' )->insert( [
            'menu_id' => 3,
            'page_id' => 10,
            'sort' => 40
        ] );
    }
}
