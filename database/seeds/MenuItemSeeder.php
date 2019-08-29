<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuItemSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        // Salate
        DB::table( 'menu_items' )->insert( [
            'name'        => 'Rumpelstilzchen',
            'description' => 'Blattsalat, rote Zwiebeln, Paprika, Möhren, Cocktail-Tomaten, gebratene Champignons und karamellisierte Walnüsse',
            'sort'        => 1,
            'category_id' => 1
        ] );

        DB::table( 'menu_items' )->insert( [
            'name'        => 'Mediteran',
            'description' => 'Blattsalat, Paprika, Oliven, Möhren, Cocktail-Tomaten, rote Zwiebeln und Flohzarella',
            'sort'        => 2,
            'category_id' => 1
        ] );

        DB::table( 'menu_items' )->insert( [
            'name'        => 'Kleiner gemischter Salat der Saison',
            'description' => '',
            'price'       => 4.5,
            'sort'        => 3,
            'category_id' => 1
        ] );

        DB::table( 'menu_items' )->insert( [
            'name'        => 'Caprese',
            'description' => 'Tomaten, Flohzarella, Olivenöl, Balsamico und frischer Basilikum',
            'image'       => 'caprese.jpg',
            'price'       => 5.8,
            'sort'        => 4,
            'category_id' => 1
        ] );

        // Pommes
        DB::table( 'menu_items' )->insert( [
            'name'        => 'Süßkartoffel-Pommes',
            'description' => '',
            'sort'        => 1,
            'category_id' => 2
        ] );

        DB::table( 'menu_items' )->insert( [
            'name'        => 'Kartoffel-Dippers',
            'description' => '',
            'sort'        => 2,
            'category_id' => 2
        ] );

        DB::table( 'menu_items' )->insert( [
            'name'        => 'Kartoffel-Pommes',
            'description' => '',
            'sort'        => 3,
            'category_id' => 2
        ] );

        DB::table( 'menu_items' )->insert( [
            'name'        => 'Sweet-Chili-Cheeze-Fries',
            'description' => 'Süßkartoffel-Pommes, Jalapenos, selbst gemachte Cheeze-Sauce',
            'image'       => 'chili-cheeze-fries.jpg',
            'sort'        => 4,
            'price'       => 6.0,
            'category_id' => 2
        ] );

        // Nachos
        DB::table( 'menu_items' )->insert( [
            'name'        => 'Chili-Cheeze',
            'description' => 'mit Jalapenos und selbst gemachter Cheeze-Sauce',
            'sort'        => 1,
            'price'       => 5.5,
            'category_id' => 3
        ] );

        DB::table( 'menu_items' )->insert( [
            'name'        => 'Nacho Trio',
            'description' => 'mit Aioli, Tomate-Chili und Avocado-Creme',
            'sort'        => 2,
            'price'       => 5.5,
            'category_id' => 3
        ] );

        // Specials
        DB::table( 'menu_items' )->insert( [
            'name'        => 'Falafel-Teller',
            'description' => 'selbstgemachte Falafel, Blattsalat, Tomaten, Mais, Möhren, Hummus, Tomaten-Chili-Sauce',
            'sort'        => 1,
            'category_id' => 4
        ] );

        DB::table( 'menu_items' )->insert( [
            'name'        => 'Jack-Teller',
            'description' => 'Jackfrucht in Barbecue-Sauce auf selbstgemachtem Krautsalat',
            'image'       => 'jack-teller.jpg',
            'sort'        => 2,
            'category_id' => 4
        ] );

        // Burger
        DB::table( 'menu_items' )->insert( [
            'name'        => 'Champion-Burger',
            'description' => 'Bratling aus Champignons, Sonnenblumenkernen, glatter Petersilie, Walnüssen und roten Zwiebeln, dazu süßer Senf3, Sandwich-Gurken, Tomaten, Rucola, gebratene Zwiebeln, Tomaten-Paprika-Sauce',
            'sort'        => 1,
            'category_id' => 5
        ] );

        DB::table( 'menu_items' )->insert( [
            'name'        => 'Power-Burger',
            'description' => 'Bratling aus Süßkartoffeln und schwarzen Bohnen, dazu Avocado-Creme4, Sandwich-Gurken, Blattsalat, Tomaten, Nachos, Jalapenos, Tomaten-Chili-Sauce',
            'image'       => 'power-burger.jpg',
            'sort'        => 2,
            'category_id' => 5
        ] );

        DB::table( 'menu_items' )->insert( [
            'name'        => 'Meat-Love-Burger',
            'description' => 'Beyond-Meat-Patty, Mayo, Sandwich-Gurke, Blattsalat, Tomaten, Zwiebeln, Tomaten-Sauce',
            'sort'        => 3,
            'category_id' => 5
        ] );

        // Wraps
        DB::table( 'menu_items' )->insert( [
            'name'        => 'Laxx-Wrap',
            'description' => 'grüne Sauce, Blattsalat, Laxx, Mais, Möhren, rote Zwiebeln',
            'price'       => 8.00,
            'sort'        => 1,
            'category_id' => 6
        ] );

        DB::table( 'menu_items' )->insert( [
            'name'        => 'Power-Wrap',
            'description' => 'Avocado-Creme, Blattsalat, Sandwich-Gurken, Süßkartoffel, schwarze Bohnen, Jalapenos, Nachos, Tomaten-Chili-Sauce',
            'price'       => 7.50,
            'sort'        => 2,
            'category_id' => 6
        ] );

        DB::table( 'menu_items' )->insert( [
            'name'        => 'Falafel-Wrap',
            'description' => 'selbst gemachter Falafel, Mais, Tomaten, Gurken, Blattsalat, Hummus, Möhren, Tomaten-Chili-Sauce',
            'price'       => 6.00,
            'sort'        => 3,
            'category_id' => 6
        ] );

        // Flammkuchen
        DB::table( 'menu_items' )->insert( [
            'name'        => 'Classic',
            'description' => 'Hefeschmelz, Räuchertofu, rote und weiße Zwiebeln',
            'price'       => 7.00,
            'sort'        => 1,
            'category_id' => 7
        ] );

        DB::table( 'menu_items' )->insert( [
            'name'        => 'Italian',
            'description' => 'Hefeschmelz, Cocktail-Tomaten, Rucola, rote und weiße Zwiebeln',
            'price'       => 8.50,
            'sort'        => 2,
            'category_id' => 7
        ] );

        DB::table( 'menu_items' )->insert( [
            'name'        => 'Spezial',
            'description' => 'Hefeschmelz, Champignons, Rucola, rote und weiße Zwiebeln',
            'image'       => 'flammkuchen.jpg',
            'price'       => 8.50,
            'sort'        => 3,
            'category_id' => 7
        ] );

        // Gaumenfreuden
        DB::table( 'menu_items' )->insert( [
            'name'        => 'Baklava',
            'description' => '',
            'image'       => 'baklava.jpg',
            'price'       => 3.0,
            'sort'        => 1,
            'category_id' => 8
        ] );

        DB::table( 'menu_items' )->insert( [
            'name'        => 'Bananen-Tiramisu',
            'description' => '',
            'price'       => 4.0,
            'sort'        => 2,
            'category_id' => 8
        ] );

        DB::table( 'menu_items' )->insert( [
            'name'        => 'Himbeer Panna Cocos',
            'description' => '',
            'price'       => 3.8,
            'sort'        => 3,
            'category_id' => 8
        ] );

        // Durstlöscher
        DB::table( 'menu_items' )->insert( [
            'name'        => 'Wasser',
            'description' => 'Taunusquelle (still/classic)',
            'sort'        => 1,
            'category_id' => 9
        ] );

        DB::table( 'menu_items' )->insert( [
            'name'        => 'Bio-Zisch Limonaden',
            'description' => 'Zitrone-Naturtrüb, Orange, Cola, Rosenblüte, Mate, Tonic, Ginger Life, Matcha, Hanf, Nature Energy, Himbeer-Cassis',
            'image'       => 'bio-zisch.jpg',
            'sort'        => 2,
            'category_id' => 9
        ] );

        DB::table( 'menu_items' )->insert( [
            'name'        => 'Saft',
            'description' => 'Orange, Apfel',
            'sort'        => 3,
            'category_id' => 9
        ] );

        DB::table( 'menu_items' )->insert( [
            'name'        => 'Saft',
            'description' => 'Mango, Kirsch, Maracuja, Banane, Mango-Kokos, KiBa',
            'sort'        => 4,
            'category_id' => 9
        ] );

        DB::table( 'menu_items' )->insert( [
            'name'        => 'Saftschorle',
            'description' => 'Orange, Apfel',
            'sort'        => 5,
            'category_id' => 9
        ] );

        DB::table( 'menu_items' )->insert( [
            'name'        => 'Saftschorle',
            'description' => 'Mango, Kirsch, Maracuja, Banane, Mango-Kokos, KiBa',
            'sort'        => 6,
            'category_id' => 9
        ] );

        DB::table( 'menu_items' )->insert( [
            'name'        => 'Eistee (bio & fair)',
            'description' => '',
            'sort'        => 7,
            'category_id' => 9
        ] );

        DB::table( 'menu_items' )->insert( [
            'name'        => 'Hexenbräu vom Fass',
            'description' => 'Bernstein oder Pils naturtrüb',
            'sort'        => 8,
            'category_id' => 9
        ] );

        DB::table( 'menu_items' )->insert( [
            'name'        => 'Lahnstein-Brauerei Flaschenbier',
            'description' => '',
            'sort'        => 9,
            'category_id' => 9
        ] );

        // Heißes
        DB::table( 'menu_items' )->insert( [
            'name'        => 'Tee (bio)',
            'description' => 'Weitere Tees auf Anfrage',
            'sort'        => 1,
            'category_id' => 10
        ] );

        DB::table( 'menu_items' )->insert( [
            'name'        => 'Kaffee (fair & bio)',
            'description' => '',
            'image'       => 'eiskaffee.jpg',
            'sort'        => 2,
            'category_id' => 10
        ] );

        DB::table( 'menu_items' )->insert( [
            'name'        => 'Kakao (bio)',
            'description' => 'Oatly!',
            'price'       => 2.5,
            'sort'        => 3,
            'category_id' => 10
        ] );

        DB::table( 'menu_items' )->insert( [
            'name'        => 'Latte & Co',
            'description' => '<strong>Wahlweise mit Bio Soja-, Hafer- oder Kokosdrink!</strong><br>Wir verwenden Produkte von “The Yeah Blend” • 100 % vegan & fettfrei, frei von Gluten, Allergenen & Laktose • ganz ohne Konservierungsstoffe, Emulgatoren & Stabilisatoren • ohne künstliche Aromen & jegliche Farbstoffe • hergestellt in Deutschland',
            'image'       => 'super-food-latte.jpg',
            'sort'        => 4,
            'category_id' => 10
        ] );

        // Weinkarte
        DB::table( 'menu_items' )->insert( [
            'name'        => 'Apfelwein (regional)',
            'description' => 'pur oder gespritzt',
            'sort'        => 1,
            'category_id' => 11
        ] );

        DB::table( 'menu_items' )->insert( [
            'name'        => 'Rosé (bio)',
            'description' => 'Amphorium Garnacha Rosé Romance*',
            'sort'        => 2,
            'category_id' => 11
        ] );

        DB::table( 'menu_items' )->insert( [
            'name'        => 'Weißwein (bio)',
            'description' => '',
            'sort'        => 3,
            'category_id' => 11
        ] );

        DB::table( 'menu_items' )->insert( [
            'name'        => 'Dessertwein (bio)',
            'description' => '',
            'sort'        => 4,
            'category_id' => 11
        ] );

        DB::table( 'menu_items' )->insert( [
            'name'        => 'Rotwein (bio)',
            'description' => '',
            'sort'        => 5,
            'category_id' => 11
        ] );

        DB::table( 'menu_items' )->insert( [
            'name'        => 'Prosecco (bio)',
            'description' => '',
            'image'       => 'erdbeer-prosecco-slush.jpg',
            'sort'        => 6,
            'category_id' => 11
        ] );

        // Hochprozentiges
        DB::table( 'menu_items' )->insert( [
            'name'        => 'Klassiker',
            'description' => '',
            'sort'        => 1,
            'category_id' => 12
        ] );

        DB::table( 'menu_items' )->insert( [
            'name'        => 'Weinbrand',
            'description' => '',
            'sort'        => 2,
            'category_id' => 12
        ] );

        DB::table( 'menu_items' )->insert( [
            'name'        => 'Specials',
            'description' => '',
            'image'       => 'cocktail.jpg',
            'sort'        => 3,
            'category_id' => 12
        ] );
    }
}
