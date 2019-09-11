<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table( 'images' )->insert( [
            'name'     => 'Baklava',
            'filename' => 'baklava.jpg'
        ] );

        DB::table( 'images' )->insert( [
            'name'     => 'Bio-Zisch-Limonaden',
            'filename' => 'bio-zisch.jpg'
        ] );

        DB::table( 'images' )->insert( [
            'name'     => 'Caprese',
            'filename' => 'caprese.jpg'
        ] );

        DB::table( 'images' )->insert( [
            'name'     => 'Chili-Cheeze-Fries',
            'filename' => 'chili-cheeze-fries.jpg'
        ] );

        DB::table( 'images' )->insert( [
            'name'     => 'Bezaubernde Ginny',
            'filename' => 'cocktail.jpg'
        ] );

        DB::table( 'images' )->insert( [
            'name'     => 'Eiskaffee',
            'filename' => 'eiskaffee.jpg'
        ] );

        DB::table( 'images' )->insert( [
            'name'     => 'Erdbeer-Prosecco-Slush',
            'filename' => 'erdbeer-prosecco-slush.jpg'
        ] );

        DB::table( 'images' )->insert( [
            'name'     => 'Falafel-Teller',
            'filename' => 'falafel-teller.jpg'
        ] );

        DB::table( 'images' )->insert( [
            'name'     => 'Flammkuchen Spezial',
            'filename' => 'flammkuchen.jpg'
        ] );

        DB::table( 'images' )->insert( [
            'name'     => 'Interieur',
            'filename' => 'interieur_01.jpg'
        ] );

        DB::table( 'images' )->insert( [
            'name'     => 'Interieur',
            'filename' => 'interieur_02.jpg'
        ] );

        DB::table( 'images' )->insert( [
            'name'     => 'Interieur',
            'filename' => 'interieur_03.jpg'
        ] );

        DB::table( 'images' )->insert( [
            'name'     => 'Jack-Teller',
            'filename' => 'jack-teller.jpg'
        ] );

        DB::table( 'images' )->insert( [
            'name'     => 'Power-Burger',
            'filename' => 'power-burger.jpg'
        ] );

        DB::table( 'images' )->insert( [
            'name'     => 'Super-Food-Latte',
            'filename' => 'super-food-latte.jpg'
        ] );

        DB::table( 'images' )->insert( [
            'name'     => 'Power-Wrap',
            'filename' => 'power-wrap.jpg'
        ] );

        DB::table( 'images' )->insert( [
            'name'     => 'Veggiemobil',
            'filename' => 'veggiemobil.jpg'
        ] );

        DB::table( 'images' )->insert( [
            'name'     => 'Bar',
            'filename' => 'bar.jpg'
        ] );

        DB::table( 'images' )->insert( [
            'name'     => 'Außen im Dunkeln',
            'filename' => 'aussen.jpg'
        ] );

        DB::table( 'images' )->insert( [
            'name'     => 'Nacho-Trio',
            'filename' => 'nacho-trio.jpg'
        ] );
    }
}
