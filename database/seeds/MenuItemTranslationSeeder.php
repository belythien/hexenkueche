<?php

use Illuminate\Database\Seeder;

class MenuItemTranslationSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $menu_items = App\MenuItem::all();
        App\MenuItemTranslation::truncate();
        foreach( $menu_items as $menu_item ) {
            DB::insert( 'INSERT INTO menu_item_translations (menu_item_id, locale, name, description) VALUES (?, ?, ?, ?)', [ $menu_item->id, 'de', $menu_item->name, $menu_item->description ] );
            DB::insert( 'INSERT INTO menu_item_translations (menu_item_id, locale, name, description) VALUES (?, ?, ?, ?)', [ $menu_item->id, 'en', $menu_item->name, $menu_item->description ] );
        }
    }
}
