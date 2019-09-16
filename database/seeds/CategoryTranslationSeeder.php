<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTranslationSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $categories = App\Category::all();
        App\CategoryTranslation::truncate();
        foreach( $categories as $category ) {
            DB::insert( 'INSERT INTO category_translations (category_id, locale, name, description) VALUES (?, ?, ?, ?)', [ $category->id, 'de', $category->name, $category->description ] );
            DB::insert( 'INSERT INTO category_translations (category_id, locale, name, description) VALUES (?, ?, ?, ?)', [ $category->id, 'en', $category->name, $category->description ] );
        }
    }
}
