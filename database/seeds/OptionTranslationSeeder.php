<?php

use Illuminate\Database\Seeder;

class OptionTranslationSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $options = App\Option::all();
        App\OptionTranslation::truncate();
        foreach( $options as $option ) {
            DB::insert( 'INSERT INTO option_translations (option_id, locale, name, amount) VALUES (?, ?, ?, ?)', [ $option->id, 'de', $option->name, $option->amount ] );
            DB::insert( 'INSERT INTO option_translations (option_id, locale, name, amount) VALUES (?, ?, ?, ?)', [ $option->id, 'en', $option->name, $option->amount ] );
        }
    }
}
