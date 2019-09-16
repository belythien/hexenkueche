<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AllergenTranslationSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table( 'allergen_translations' )->insert( [
            'name'        => 'Weizen',
            'allergen_id' => 1,
            'locale'      => 'de'
        ] );
        DB::table( 'allergen_translations' )->insert( [
            'name'        => 'Wheat',
            'allergen_id' => 1,
            'locale'      => 'en'
        ] );

        DB::table( 'allergen_translations' )->insert( [
            'name'        => 'Soja',
            'allergen_id' => 2,
            'locale'      => 'de'
        ] );
        DB::table( 'allergen_translations' )->insert( [
            'name'        => 'Soy',
            'allergen_id' => 2,
            'locale'      => 'en'
        ] );

        DB::table( 'allergen_translations' )->insert( [
            'name'        => 'Senf',
            'allergen_id' => 3,
            'locale'      => 'de'
        ] );
        DB::table( 'allergen_translations' )->insert( [
            'name'        => 'Mustard',
            'allergen_id' => 3,
            'locale'      => 'en'
        ] );

        DB::table( 'allergen_translations' )->insert( [
            'name'        => 'Lupine',
            'allergen_id' => 4,
            'locale'      => 'de'
        ] );
        DB::table( 'allergen_translations' )->insert( [
            'name'        => 'Lupine',
            'allergen_id' => 4,
            'locale'      => 'en'
        ] );

        DB::table( 'allergen_translations' )->insert( [
            'name'        => 'Cashew',
            'allergen_id' => 5,
            'locale'      => 'de'
        ] );
        DB::table( 'allergen_translations' )->insert( [
            'name'        => 'Cashew',
            'allergen_id' => 5,
            'locale'      => 'en'
        ] );

        DB::table( 'allergen_translations' )->insert( [
            'name'        => 'Sellerie',
            'allergen_id' => 6,
            'locale'      => 'de'
        ] );
        DB::table( 'allergen_translations' )->insert( [
            'name'        => 'Celery',
            'allergen_id' => 6,
            'locale'      => 'en'
        ] );

        DB::table( 'allergen_translations' )->insert( [
            'name'        => 'Gerste',
            'allergen_id' => 7,
            'locale'      => 'de'
        ] );
        DB::table( 'allergen_translations' )->insert( [
            'name'        => 'Barley',
            'allergen_id' => 7,
            'locale'      => 'en'
        ] );

        DB::table( 'allergen_translations' )->insert( [
            'name'        => 'Roggen',
            'allergen_id' => 8,
            'locale'      => 'de'
        ] );
        DB::table( 'allergen_translations' )->insert( [
            'name'        => 'Rye',
            'allergen_id' => 8,
            'locale'      => 'en'
        ] );

        DB::table( 'allergen_translations' )->insert( [
            'name'        => 'Sesam',
            'allergen_id' => 9,
            'locale'      => 'de'
        ] );
        DB::table( 'allergen_translations' )->insert( [
            'name'        => 'Sesame',
            'allergen_id' => 9,
            'locale'      => 'en'
        ] );

        DB::table( 'allergen_translations' )->insert( [
            'name'        => 'Nüsse',
            'allergen_id' => 10,
            'locale'      => 'de'
        ] );
        DB::table( 'allergen_translations' )->insert( [
            'name'        => 'Nuts',
            'allergen_id' => 10,
            'locale'      => 'en'
        ] );

        DB::table( 'allergen_translations' )->insert( [
            'name'        => 'Mandel',
            'allergen_id' => 11,
            'locale'      => 'de'
        ] );
        DB::table( 'allergen_translations' )->insert( [
            'name'        => 'Almond',
            'allergen_id' => 11,
            'locale'      => 'en'
        ] );

        DB::table( 'allergen_translations' )->insert( [
            'name'        => 'Hafer',
            'allergen_id' => 12,
            'locale'      => 'de'
        ] );
        DB::table( 'allergen_translations' )->insert( [
            'name'        => 'Oats',
            'allergen_id' => 12,
            'locale'      => 'en'
        ] );
    }
}
