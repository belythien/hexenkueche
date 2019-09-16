<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageTranslationSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $pages = App\Page::all();
        App\PageTranslation::truncate();
        foreach( $pages as $page ) {
            DB::insert( 'INSERT INTO page_translations (page_id, locale, title, menu_title, content) VALUES (?, ?, ?, ?, ?)', [ $page->id, 'de', $page->title, $page->menu_title, $page->content ] );
            DB::insert( 'INSERT INTO page_translations (page_id, locale, title, menu_title, content) VALUES (?, ?, ?, ?, ?)', [ $page->id, 'en', $page->title, $page->menu_title, $page->content ] );
        }
    }
}
