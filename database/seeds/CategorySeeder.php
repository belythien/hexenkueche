<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table( 'categories' )->insert( [
            'name'        => 'Salate',
            'description' => 'Dressings zur Wahl: Apfel-Senf, Balsamico & Olivenöl oder Kräuter-Creme',
            'sort'        => 10
        ] );
        DB::table( 'categories' )->insert( [
            'name'        => 'Pommes',
            'description' => 'mit 1 Dip zur Wahl (Jeder weitere Dip  0.50€ extra):<br>Mayo,  Aioli,  Ketchup,  Tomate-Chili, Barbecue, Mango-Kokos',
            'sort'        => 20
        ] );
        DB::table( 'categories' )->insert( [
            'name' => 'Nachos',
            'sort' => 30
        ] );
        DB::table( 'categories' )->insert( [
            'name' => 'Specials',
            'sort' => 40
        ] );
        DB::table( 'categories' )->insert( [
            'name'        => 'Burger',
            'description' => 'Wir bieten Ihnen exklusiv mit unserer Bäckerei entwickelte und stets frisch hergestellte Burger-Brötchen an! Mais-Dinkel-Brötchen oder Laugenbrötchen',
            'sort'        => 50
        ] );
        DB::table( 'categories' )->insert( [
            'name'        => 'Wraps',
            'description' => 'Zu allen Wraps wird ein kleiner gemischter Beilagensalat gereicht! (Dressings zur Wahl siehe Salate)',
            'sort'        => 60
        ] );
        DB::table( 'categories' )->insert( [
            'name' => 'Flammkuchen',
            'sort' => 70
        ] );
        DB::table( 'categories' )->insert( [
            'name'        => 'Gaumenfreuden',
            'description' => '(natürlich aus eigener Herstellung)',
            'sort'        => 80
        ] );
        DB::table( 'categories' )->insert( [
            'name'        => 'Durstlöscher',
            'description' => '',
            'sort'        => 90
        ] );
        DB::table( 'categories' )->insert( [
            'name'        => 'Heißes',
            'description' => '',
            'sort'        => 100
        ] );
        DB::table( 'categories' )->insert( [
            'name'        => 'Weinkarte',
            'description' => '',
            'sort'        => 110
        ] );
        DB::table( 'categories' )->insert( [
            'name'        => 'Hochprozentiges',
            'description' => '',
            'sort'        => 110
        ] );
    }
}
