<?php

use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table( 'menus' )->insert( [
            'title'       => 'Willkommen',
            'description' => 'auf der Einstiegsseite',
            'code'        => 'welcome'
        ] );

        DB::table( 'menus' )->insert( [
            'title'       => 'Hauptnavigation',
            'description' => 'in der oberen Leiste',
            'code'        => 'primary'
        ] );

        DB::table( 'menus' )->insert( [
            'title'       => 'Footer',
            'description' => 'in der Leiste unten rechts',
            'code'        => 'footer'
        ] );
    }
}
