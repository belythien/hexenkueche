<?php

use Illuminate\Database\Seeder;

class EventTranslationSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $events = App\Event::all();
        App\EventTranslation::truncate();
        foreach( $events as $event ) {
            DB::insert( 'INSERT INTO event_translations (event_id, locale, name, description) VALUES (?, ?, ?, ?)', [ $event->id, 'de', $event->name, $event->description ] );
            DB::insert( 'INSERT INTO event_translations (event_id, locale, name, description) VALUES (?, ?, ?, ?)', [ $event->id, 'en', $event->name, $event->description ] );
        }
    }
}
