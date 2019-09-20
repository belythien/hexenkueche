<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageTranslationSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $images = App\Image::all();
        App\ImageTranslation::truncate();
        foreach( $images as $image ) {
            DB::insert( 'INSERT INTO image_translations (image_id, locale, name, description, copyright) VALUES (?, ?, ?, ?, ?)', [ $image->id, 'de', $image->name, '', $image->copyright ] );
            DB::insert( 'INSERT INTO image_translations (image_id, locale, name, description, copyright) VALUES (?, ?, ?, ?, ?)', [ $image->id, 'en', $image->name, '', $image->copyright ] );
        }
    }
}
