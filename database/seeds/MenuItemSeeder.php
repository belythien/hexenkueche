<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuItemSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $sort = 10;
        // Salate
        DB::table( 'menu_items' )->insert( [
            'name'        => 'Rumpelstilzchen',
            'description' => 'Blattsalat, rote Zwiebeln, Paprika, Möhren, Cocktail-Tomaten, gebratene Champignons und karamellisierte Walnüsse',
            'sort'        => $sort,
            'category_id' => 1
        ] );
        $sort += 10;
        DB::table( 'menu_items' )->insert( [
            'name'        => 'Italian',
            'description' => 'Blattsalat, Paprika, Oliven, Möhren, Cocktail-Tomaten, rote Zwiebeln und Flohzarella',
            'sort'        => $sort,
            'category_id' => 1
        ] );
        $sort += 10;
        DB::table( 'menu_items' )->insert( [
            'name'        => 'Kleiner gemischter Salat der Saison',
            'sort'        => $sort,
            'category_id' => 1
        ] );
        $sort += 10;
        DB::table( 'menu_items' )->insert( [
            'name'        => 'Caprese',
            'description' => 'Tomaten, Flohzarella, Olivenöl, Balsamico und frischer Basilikum',
            'sort'        => $sort,
            'category_id' => 1
        ] );
        $sort += 10;
        // Pommes
        DB::table( 'menu_items' )->insert( [
            'name'        => 'Süßkartoffel-Pommes',
            'sort'        => $sort,
            'category_id' => 2
        ] );
        $sort += 10;
        DB::table( 'menu_items' )->insert( [
            'name'        => 'Kartoffel-Dippers',
            'sort'        => $sort,
            'category_id' => 2
        ] );
        $sort += 10;
        DB::table( 'menu_items' )->insert( [
            'name'        => 'Kartoffel-Pommes',
            'sort'        => $sort,
            'category_id' => 2
        ] );
        $sort += 10;
        DB::table( 'menu_items' )->insert( [
            'name'        => 'Sweet-Chili-Cheeze-Fries',
            'description' => 'Süßkartoffel-Pommes, Jalapeños, selbst gemachte Cheeze-Sauce',
            'sort'        => $sort,
            'category_id' => 2
        ] );
        $sort += 10;
        // Nachos
        DB::table( 'menu_items' )->insert( [
            'name'        => 'Chili-Cheeze',
            'description' => 'mit Jalapeños und selbst gemachter Cheeze-Sauce',
            'sort'        => $sort,
            'category_id' => 3
        ] );
        $sort += 10;
        DB::table( 'menu_items' )->insert( [
            'name'        => 'Nacho Trio',
            'description' => 'mit Aioli, Tomate-Chili und Avocado-Creme',
            'sort'        => $sort,
            'category_id' => 3
        ] );
        $sort += 10;
        // Specials
        DB::table( 'menu_items' )->insert( [
            'name'        => 'Falafel-Teller',
            'description' => 'selbstgemachte Falafel, Blattsalat, Tomaten, Mais, Möhren, Hummus, Tomaten-Chili-Sauce',
            'sort'        => $sort,
            'category_id' => 4
        ] );
        $sort += 10;
        DB::table( 'menu_items' )->insert( [
            'name'        => 'Jack-Teller',
            'description' => 'Jackfrucht in Barbecue-Sauce auf selbstgemachtem Krautsalat',
            'sort'        => $sort,
            'category_id' => 4
        ] );
        $sort += 10;
        // Burger
        DB::table( 'menu_items' )->insert( [
            'name'        => 'Champion-Burger',
            'description' => 'Bratling aus Champignons, Sonnenblumenkernen, glatter Petersilie, Walnüssen und roten Zwiebeln, dazu süßer Senf3, Sandwich-Gurken, Tomaten, Rucola, gebratene Zwiebeln, Tomaten-Paprika-Sauce',
            'sort'        => $sort,
            'category_id' => 5
        ] );
        $sort += 10;
        DB::table( 'menu_items' )->insert( [
            'name'        => 'Power-Burger',
            'description' => 'Bratling aus Süßkartoffeln und schwarzen Bohnen, dazu Avocado-Creme4, Sandwich-Gurken, Blattsalat, Tomaten, Nachos, Jalapeños, Tomaten-Chili-Sauce',
            'sort'        => $sort,
            'category_id' => 5
        ] );
        $sort += 10;
        DB::table( 'menu_items' )->insert( [
            'name'        => 'Meat-Love-Burger',
            'description' => 'Beyond-Meat-Patty, Mayo, Sandwich-Gurke, Blattsalat, Tomaten, Zwiebeln, Tomaten-Sauce',
            'sort'        => $sort,
            'category_id' => 5
        ] );
        $sort += 10;
        // Wraps
        DB::table( 'menu_items' )->insert( [
            'name'        => 'Laxx-Wrap',
            'description' => 'grüne Sauce, Blattsalat, Laxx, Mais, Möhren, rote Zwiebeln',
            'sort'        => $sort,
            'category_id' => 6
        ] );
        $sort += 10;
        DB::table( 'menu_items' )->insert( [
            'name'        => 'Power-Wrap',
            'description' => 'Avocado-Creme, Blattsalat, Sandwich-Gurken, Süßkartoffel, schwarze Bohnen, Jalapeños, Nachos, Tomaten-Chili-Sauce',
            'sort'        => $sort,
            'category_id' => 6
        ] );
        $sort += 10;
        DB::table( 'menu_items' )->insert( [
            'name'        => 'Falafel-Wrap',
            'description' => 'selbst gemachter Falafel, Mais, Tomaten, Gurken, Blattsalat, Hummus, Möhren, Tomaten-Chili-Sauce',
            'sort'        => $sort,
            'category_id' => 6
        ] );
        $sort += 10;
        // Flammkuchen
        DB::table( 'menu_items' )->insert( [
            'name'        => 'Classic',
            'description' => 'Hefeschmelz, Räuchertofu, rote und weiße Zwiebeln',
            'sort'        => $sort,
            'category_id' => 7
        ] );
        $sort += 10;
        DB::table( 'menu_items' )->insert( [
            'name'        => 'Italian',
            'description' => 'Hefeschmelz, Cocktail-Tomaten, Rucola, rote und weiße Zwiebeln',
            'sort'        => $sort,
            'category_id' => 7
        ] );
        $sort += 10;
        DB::table( 'menu_items' )->insert( [
            'name'        => 'Spezial',
            'description' => 'Hefeschmelz, Champignons, Rucola, rote und weiße Zwiebeln',
            'sort'        => $sort,
            'category_id' => 7
        ] );
        $sort += 10;
        // Gaumenfreuden
        DB::table( 'menu_items' )->insert( [
            'name'        => 'Baklava',
            'description' => '',
            'sort'        => $sort,
            'category_id' => 8
        ] );
        $sort += 10;
        DB::table( 'menu_items' )->insert( [
            'name'        => 'Bananen-Tiramisu',
            'description' => '',
            'sort'        => $sort,
            'category_id' => 8
        ] );
        $sort += 10;
        DB::table( 'menu_items' )->insert( [
            'name'        => 'Himbeer Panna Cocos',
            'description' => '',
            'sort'        => $sort,
            'category_id' => 8
        ] );
        $sort += 10;
        // Durstlöscher
        DB::table( 'menu_items' )->insert( [
            'name'        => 'Wasser',
            'description' => 'Taunusquelle (still/classic)',
            'sort'        => $sort,
            'category_id' => 9
        ] );
        $sort += 10;
        DB::table( 'menu_items' )->insert( [
            'name'        => 'Bio-Zisch Limonaden',
            'description' => 'Zitrone-Naturtrüb, Orange, Cola, Rosenblüte, Mate, Tonic, Ginger Life, Matcha, Hanf, Nature Energy oder Himbeer-Cassis',
            'sort'        => $sort,
            'category_id' => 9
        ] );
        $sort += 10;
        DB::table( 'menu_items' )->insert( [
            'name'        => 'Saft',
            'sort'        => $sort,
            'category_id' => 9
        ] );
        $sort += 10;
        DB::table( 'menu_items' )->insert( [
            'name'        => 'Saftschorle',
            'sort'        => $sort,
            'category_id' => 9
        ] );
        $sort += 10;
        DB::table( 'menu_items' )->insert( [
            'name'        => 'Eistee (bio & fair)',
            'sort'        => $sort,
            'category_id' => 9
        ] );
        $sort += 10;
        DB::table( 'menu_items' )->insert( [
            'name'        => 'Hexenbräu vom Fass',
            'description' => 'Bernstein oder Pils naturtrüb',
            'sort'        => $sort,
            'category_id' => 9
        ] );
        $sort += 10;
        DB::table( 'menu_items' )->insert( [
            'name'        => 'Lahnstein-Brauerei Flaschenbier',
            'description' => '',
            'sort'        => $sort,
            'category_id' => 9
        ] );
        $sort += 10;
        // Heißes
        DB::table( 'menu_items' )->insert( [
            'name'        => 'Tee (bio)',
            'description' => 'Weitere Tees auf Anfrage',
            'sort'        => $sort,
            'category_id' => 10
        ] );
        $sort += 10;
        DB::table( 'menu_items' )->insert( [
            'name'        => 'Kaffee (fair & bio)',
            'description' => 'Wahlweise mit Bio Soja-, Hafer- oder Kokosdrink',
            'sort'        => $sort,
            'category_id' => 10
        ] );
        $sort += 10;
        DB::table( 'menu_items' )->insert( [
            'name'        => 'Kakao (bio)',
            'sort'        => $sort,
            'category_id' => 10
        ] );
        $sort += 10;
        DB::table( 'menu_items' )->insert( [
            'name'        => 'Latte & Co',
            'description' => '<strong>Wahlweise mit Bio Soja-, Hafer- oder Kokosdrink!</strong><br>Wir verwenden Produkte von “The Yeah Blend” • 100 % vegan & fettfrei, frei von Gluten, Allergenen & Laktose • ganz ohne Konservierungsstoffe, Emulgatoren & Stabilisatoren • ohne künstliche Aromen & jegliche Farbstoffe • hergestellt in Deutschland',
            'sort'        => $sort,
            'category_id' => 10
        ] );
        $sort += 10;
        // Weinkarte
        DB::table( 'menu_items' )->insert( [
            'name'        => 'Apfelwein (regional)',
            'description' => 'pur oder gespritzt',
            'sort'        => $sort,
            'category_id' => 11
        ] );
        $sort += 10;
        DB::table( 'menu_items' )->insert( [
            'name'        => 'Rosé (bio)',
            'description' => 'Amphorium Garnacha Rosé Romance',
            'sort'        => $sort,
            'category_id' => 11
        ] );
        $sort += 10;
        DB::table( 'menu_items' )->insert( [
            'name'        => 'Weißwein (bio)',
            'sort'        => $sort,
            'category_id' => 11
        ] );
        $sort += 10;
        DB::table( 'menu_items' )->insert( [
            'name'        => 'Dessertwein (bio)',
            'sort'        => $sort,
            'category_id' => 11
        ] );
        $sort += 10;
        DB::table( 'menu_items' )->insert( [
            'name'        => 'Rotwein (bio)',
            'sort'        => $sort,
            'category_id' => 11
        ] );
        $sort += 10;
        DB::table( 'menu_items' )->insert( [
            'name'        => 'Prosecco (bio)',
            'sort'        => $sort,
            'category_id' => 11
        ] );
        $sort += 10;
        // Hochprozentiges
        DB::table( 'menu_items' )->insert( [
            'name'        => 'Klassiker',
            'sort'        => $sort,
            'category_id' => 12
        ] );
        $sort += 10;
        DB::table( 'menu_items' )->insert( [
            'name'        => 'Weinbrand',
            'sort'        => $sort,
            'category_id' => 12
        ] );
        $sort += 10;
        DB::table( 'menu_items' )->insert( [
            'name'        => 'Specials',
            'sort'        => $sort,
            'category_id' => 12
        ] );
    }
}
