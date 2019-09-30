<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KeywordSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
//        App\Keyword::truncate();
        $keywords = [
            1 => [
                'de' => 'Großer Hunger',
                'en' => 'Big hunger'
            ],
            2 => [
                'de' => 'etwas hungrig',
                'en' => 'little hungry'
            ],
            3 => [
                'de' => 'Getränk',
                'en' => 'Beverage'
            ]
        ];
        foreach( $keywords as $key => $keyword ) {
            DB::table( 'keywords' )->insert( [
                'id' => $key
            ] );
            foreach( $keyword as $locale => $name ) {
                DB::table( 'keyword_translations' )->insert( [
                    'keyword_id' => $key,
                    'locale'     => $locale,
                    'name'       => $name
                ] );
            }
        }
    }
}
