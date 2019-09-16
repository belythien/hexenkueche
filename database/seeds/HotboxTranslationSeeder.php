<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HotboxTranslationSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $hotboxes = App\Hotbox::all();
        App\HotboxTranslation::truncate();
        foreach( $hotboxes as $hotbox ) {
            DB::insert( 'INSERT INTO hotbox_translations (hotbox_id, locale, text) VALUES (?, ?, ?)', [ $hotbox->id, 'de', $hotbox->text ] );
            DB::insert( 'INSERT INTO hotbox_translations (hotbox_id, locale, text) VALUES (?, ?, ?)', [ $hotbox->id, 'en', $hotbox->text ] );
        }
    }
}
