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
            'description' => 'Dressings zur Wahl: Apfel-Senf<sup class="allergen" title="Senf">3</sup>, Balsamico & Olivenöl oder Kräuter-Creme<sup class="allergen" title="Soja">2</sup>',
            'sort'        => 10
        ] );
        DB::table( 'categories' )->insert( [
            'name'        => 'Pommes',
            'description' => 'mit 1 Dip zur Wahl (Jeder weitere Dip  0.50€ extra):<br>Mayo<sup class="allergen" title="Soja">2</sup><sup class="allergen" title="Senf">3</sup>,  Aioli,  Ketchup,  Tomate-Chili, Barbecue<sup class="allergen" title="Senf">3</sup><sup class="allergen" title="Cashew">6</sup><sup class="allergen" title="Sellerie">7</sup>, Mango-Kokos',
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
            'description' => 'Wir bieten Ihnen exklusiv mit unserer Bäckerei entwickelte und stets frisch hergestellte Burger-Brötchen an! Mais-Dinkel-Brötchen<sup class="allergen" title="Weizen">1</sup><sup class="allergen" title="Roggen">8</sup><sup class="allergen" title="Sesam">9</sup> oder Laugenbrötchen<sup class="allergen" title="Weizen">1</sup>',
            'sort'        => 50
        ] );
        DB::table( 'categories' )->insert( [
            'name'        => 'Wraps',
            'description' => 'Zu allen Wraps wird ein kleiner gemischter Beilagensalat gereicht!<br>Dressings zur Wahl: Apfel-Senf<sup class="allergen" title="Senf">3</sup>, Balsamico & Olivenöl oder Kräuter-Creme<sup class="allergen" title="Soja">2</sup>',
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
