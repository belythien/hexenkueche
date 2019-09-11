<?php

use Illuminate\Database\Seeder;

class AllergenMenuItemSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        // Rumpelstilzchen
        DB::table( 'allergen_menu_item' )->insert( [
            'allergen_id' => 10,
            'menu_item_id' => 1
        ] );

        // Italian
        DB::table( 'allergen_menu_item' )->insert( [
            'allergen_id' => 6,
            'menu_item_id' => 2
        ] );

        // Caprese
        DB::table( 'allergen_menu_item' )->insert( [
            'allergen_id' => 6,
            'menu_item_id' => 4
        ] );

        // Nacho Trio
        DB::table( 'allergen_menu_item' )->insert( [
            'allergen_id' => 2,
            'menu_item_id' => 10
        ] );
        DB::table( 'allergen_menu_item' )->insert( [
            'allergen_id' => 4,
            'menu_item_id' => 10
        ] );

        // Jack-Teller
        DB::table( 'allergen_menu_item' )->insert( [
            'allergen_id' => 7,
            'menu_item_id' => 12
        ] );

        // Champion-Burger
        DB::table( 'allergen_menu_item' )->insert( [
            'allergen_id' => 3,
            'menu_item_id' => 13
        ] );

        // Power-Burger
        DB::table( 'allergen_menu_item' )->insert( [
            'allergen_id' => 4,
            'menu_item_id' => 14
        ] );

        // Meat-Love-Burger
        DB::table( 'allergen_menu_item' )->insert( [
            'allergen_id' => 2,
            'menu_item_id' => 15
        ] );

        // Laxx-Wrap
        DB::table( 'allergen_menu_item' )->insert( [
            'allergen_id' => 1,
            'menu_item_id' => 16
        ] );

        // Power-Wrap
        DB::table( 'allergen_menu_item' )->insert( [
            'allergen_id' => 1,
            'menu_item_id' => 17
        ] );
        DB::table( 'allergen_menu_item' )->insert( [
            'allergen_id' => 4,
            'menu_item_id' => 17
        ] );

        // Falafel-Wrap
        DB::table( 'allergen_menu_item' )->insert( [
            'allergen_id' => 1,
            'menu_item_id' => 18
        ] );

        // Jack-Wrap
        DB::table( 'allergen_menu_item' )->insert( [
            'allergen_id' => 1,
            'menu_item_id' => 19
        ] );
        DB::table( 'allergen_menu_item' )->insert( [
            'allergen_id' => 2,
            'menu_item_id' => 19
        ] );
        DB::table( 'allergen_menu_item' )->insert( [
            'allergen_id' => 6,
            'menu_item_id' => 19
        ] );
        DB::table( 'allergen_menu_item' )->insert( [
            'allergen_id' => 7,
            'menu_item_id' => 19
        ] );

        // Classic
        DB::table( 'allergen_menu_item' )->insert( [
            'allergen_id' => 1,
            'menu_item_id' => 20
        ] );

        // Italian
        DB::table( 'allergen_menu_item' )->insert( [
            'allergen_id' => 1,
            'menu_item_id' => 21
        ] );

        // Spezial
        DB::table( 'allergen_menu_item' )->insert( [
            'allergen_id' => 1,
            'menu_item_id' => 22
        ] );

        // Baklava
        DB::table( 'allergen_menu_item' )->insert( [
            'allergen_id' => 1,
            'menu_item_id' => 23
        ] );
        DB::table( 'allergen_menu_item' )->insert( [
            'allergen_id' => 10,
            'menu_item_id' => 23
        ] );

        // Bananen-Tiramisu
        DB::table( 'allergen_menu_item' )->insert( [
            'allergen_id' => 1,
            'menu_item_id' => 24
        ] );
        DB::table( 'allergen_menu_item' )->insert( [
            'allergen_id' => 2,
            'menu_item_id' => 24
        ] );
    }
}
