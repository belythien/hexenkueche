<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OptionSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        // Salate
        // Rumpelstilzchen
        DB::table( 'options' )->insert( [
            'amount'       => 'mittel',
            'price'        => 8.50,
            'menu_item_id' => 1
        ] );

        DB::table( 'options' )->insert( [
            'amount'       => 'groß',
            'price'        => 11.50,
            'menu_item_id' => 1
        ] );

        // Italian
        DB::table( 'options' )->insert( [
            'amount'       => 'mittel',
            'price'        => 8.50,
            'menu_item_id' => 2
        ] );

        DB::table( 'options' )->insert( [
            'amount'       => 'groß',
            'price'        => 11.50,
            'menu_item_id' => 2
        ] );

        // Kleiner Salat
        DB::table( 'options' )->insert( [
            'price'        => 4.5,
            'menu_item_id' => 3
        ] );
        DB::table( 'options' )->insert( [
            'price'        => 5.8,
            'menu_item_id' => 4
        ] );

        // Caprese

        // Kartoffeliges
        // Süßkartoffel-Pommes
        DB::table( 'options' )->insert( [
            'amount'       => 'klein',
            'price'        => 3.0,
            'menu_item_id' => 5
        ] );

        DB::table( 'options' )->insert( [
            'amount'       => 'groß',
            'price'        => 4.5,
            'menu_item_id' => 5
        ] );

        // Kartoffel-Dippers
        DB::table( 'options' )->insert( [
            'amount'       => 'klein',
            'price'        => 2.0,
            'menu_item_id' => 6
        ] );

        DB::table( 'options' )->insert( [
            'amount'       => 'groß',
            'price'        => 3.5,
            'menu_item_id' => 6
        ] );

        // Kartoffel-Pommes
        DB::table( 'options' )->insert( [
            'amount'       => 'klein',
            'price'        => 2.0,
            'menu_item_id' => 7
        ] );

        DB::table( 'options' )->insert( [
            'amount'       => 'groß',
            'price'        => 3.5,
            'menu_item_id' => 7
        ] );

        // Sweet-Chili-Cheeze-Fries
        DB::table( 'options' )->insert( [
            'price'        => 6.0,
            'menu_item_id' => 8
        ] );

        // Nachos
        // Chili-Cheeze
        DB::table( 'options' )->insert( [
            'price'        => 5.5,
            'menu_item_id' => 9
        ] );

         // Nacho Trio
         DB::table( 'options' )->insert( [
            'price'        => 5.5,
            'menu_item_id' => 10
        ] );

        // Specials
        // Falafel-Teller
        DB::table( 'options' )->insert( [
            'name'         => 'mit Kartoffel-Pommes',
            'price'        => 8.50,
            'menu_item_id' => 11
        ] );

        DB::table( 'options' )->insert( [
            'name'         => 'mit Süßkartoffel-Pommes',
            'price'        => 9.50,
            'menu_item_id' => 11
        ] );

        // Jack-Teller
        DB::table( 'options' )->insert( [
            'name'         => 'auf Kartoffel-Pommes',
            'price'        => 8.50,
            'menu_item_id' => 12
        ] );

        DB::table( 'options' )->insert( [
            'name'         => 'auf Süßkartoffel-Pommes',
            'price'        => 9.50,
            'menu_item_id' => 12
        ] );

        // Burger
        // Champion-Burger
        DB::table( 'options' )->insert( [
            'name'         => 'mit Süßkartoffel-Pommes',
            'price'        => 10.50,
            'menu_item_id' => 13
        ] );

        DB::table( 'options' )->insert( [
            'name'         => 'mit Kartoffel-Dippers',
            'price'        => 9.50,
            'menu_item_id' => 13
        ] );

        DB::table( 'options' )->insert( [
            'name'         => 'ohne Beilage',
            'price'        => 7.50,
            'menu_item_id' => 13
        ] );

        // Power-Burger
        DB::table( 'options' )->insert( [
            'name'         => 'mit Süßkartoffel-Pommes',
            'price'        => 10.50,
            'menu_item_id' => 14
        ] );

        DB::table( 'options' )->insert( [
            'name'         => 'mit Kartoffel-Dippers',
            'price'        => 9.50,
            'menu_item_id' => 14
        ] );

        DB::table( 'options' )->insert( [
            'name'         => 'ohne Beilage',
            'price'        => 7.50,
            'menu_item_id' => 14
        ] );

        // Meat-Love-Burger
        DB::table( 'options' )->insert( [
            'name'         => 'mit Süßkartoffel-Pommes',
            'price'        => 13.50,
            'menu_item_id' => 15
        ] );

        DB::table( 'options' )->insert( [
            'name'         => 'mit Kartoffel-Dippers',
            'price'        => 12.50,
            'menu_item_id' => 15
        ] );

        DB::table( 'options' )->insert( [
            'name'         => 'ohne Beilage',
            'price'        => 10.50,
            'menu_item_id' => 15
        ] );

        // Wraps
        // Laxx-Wrap
        DB::table( 'options' )->insert( [
            'price'        => 8.0,
            'menu_item_id' => 16
        ] );

        // Power-Wrap
        DB::table( 'options' )->insert( [
            'price'        => 7.5,
            'menu_item_id' => 17
        ] );

        // Falafel-Wrap
        DB::table( 'options' )->insert( [
            'price'        => 6.0,
            'menu_item_id' => 18
        ] );

        // Flammkuchen
        // Classic
        DB::table( 'options' )->insert( [
            'price'        => 7.0,
            'menu_item_id' => 19
        ] );

        // Italian
        DB::table( 'options' )->insert( [
            'price'        => 8.5,
            'menu_item_id' => 20
        ] );

        // Spezial
        DB::table( 'options' )->insert( [
            'price'        => 8.5,
            'menu_item_id' => 21
        ] );

        // Gaumenfreuden
        // Baklava
        DB::table( 'options' )->insert( [
            'price'        => 3.0,
            'menu_item_id' => 22
        ] );

        // Bananen-Tiramisu
        DB::table( 'options' )->insert( [
            'price'        => 4.0,
            'menu_item_id' => 23
        ] );

        // Himbeer Panna Cocos
        DB::table( 'options' )->insert( [
            'price'        => 3.8,
            'menu_item_id' => 24
        ] );

        // Durstlöscher
        // Wasser
        DB::table( 'options' )->insert( [
            'amount'       => '0,2l',
            'price'        => 2.0,
            'menu_item_id' => 25
        ] );

        DB::table( 'options' )->insert( [
            'amount'       => '0,75l',
            'price'        => 4.0,
            'menu_item_id' => 25
        ] );

        // Bio-Zisch
        DB::table( 'options' )->insert( [
            'amount'       => '0,33l',
            'price'        => 3.0,
            'menu_item_id' => 26
        ] );

        // Saft
        DB::table( 'options' )->insert( [
            'name'         => 'Orange, Apfel',
            'amount'       => '0,33l',
            'price'        => 3.0,
            'menu_item_id' => 27
        ] );

        DB::table( 'options' )->insert( [
            'name'         => 'Mango, Kirsch, Maracuja, Banane, Mango-Kokos, KiBa',
            'amount'       => '0,33l',
            'price'        => 3.8,
            'menu_item_id' => 27
        ] );

        DB::table( 'options' )->insert( [
            'name'         => 'Orange, Apfel',
            'amount'       => '0,50l',
            'price'        => 3.8,
            'menu_item_id' => 27
        ] );

        DB::table( 'options' )->insert( [
            'name'         => 'Mango, Kirsch, Maracuja, Banane, Mango-Kokos, KiBa',
            'amount'       => '0,50l',
            'price'        => 4.8,
            'menu_item_id' => 27
        ] );

        // Saftschorlen
        DB::table( 'options' )->insert( [
            'name'         => 'Orange, Apfel',
            'amount'       => '0,33l',
            'price'        => 2.8,
            'menu_item_id' => 28
        ] );

        DB::table( 'options' )->insert( [
            'name'         => 'Mango, Kirsch, Maracuja, Banane, Mango-Kokos, KiBa',
            'amount'       => '0,33l',
            'price'        => 3.2,
            'menu_item_id' => 28
        ] );

        DB::table( 'options' )->insert( [
            'name'         => 'Orange, Apfel',
            'amount'       => '0,50l',
            'price'        => 3.5,
            'menu_item_id' => 28
        ] );

        DB::table( 'options' )->insert( [
            'name'         => 'Mango, Kirsch, Maracuja, Banane, Mango-Kokos, KiBa',
            'amount'       => '0,50l',
            'price'        => 4.0,
            'menu_item_id' => 28
        ] );

        // Eistee (bio & fair)
        DB::table( 'options' )->insert( [
            'name'         => 'Pfirsich-Zitrone',
            'amount'       => '0,33l',
            'price'        => 3.5,
            'menu_item_id' => 29
        ] );

        DB::table( 'options' )->insert( [
            'name'         => 'Himbeer-Hibiskus',
            'amount'       => '0,33l',
            'price'        => 3.5,
            'menu_item_id' => 29
        ] );

        DB::table( 'options' )->insert( [
            'name'         => 'Matcha',
            'amount'       => '0,50l',
            'price'        => 4.5,
            'menu_item_id' => 29
        ] );

        DB::table( 'options' )->insert( [
            'name'         => 'Mate-Zitrone',
            'amount'       => '0,50l',
            'price'        => 4.5,
            'menu_item_id' => 29
        ] );

        // Hexenbräu vom Fass
        DB::table( 'options' )->insert( [
            'amount'       => '0,33l',
            'price'        => 2.8,
            'menu_item_id' => 30
        ] );

        DB::table( 'options' )->insert( [
            'amount'       => '0,50l',
            'price'        => 4.2,
            'menu_item_id' => 30
        ] );

        // Lahnstein-Brauerei Flaschenbier
        DB::table( 'options' )->insert( [
            'name'         => 'Hefeweizen oder Hefeweizen alkoholfrei',
            'amount'       => '0,50l',
            'price'        => 3.5,
            'menu_item_id' => 31
        ] );

        DB::table( 'options' )->insert( [
            'name'         => 'Pils alkoholfrei',
            'amount'       => '0,50l',
            'price'        => 3.2,
            'menu_item_id' => 31
        ] );

        DB::table( 'options' )->insert( [
            'name'         => 'Malztrunk',
            'amount'       => '0,50l',
            'price'        => 3.0,
            'menu_item_id' => 31
        ] );

        DB::table( 'options' )->insert( [
            'name'         => 'Radler',
            'amount'       => '0,33l',
            'price'        => 2.8,
            'menu_item_id' => 31
        ] );

        // Heißes
        // Tee (bio)
        DB::table( 'options' )->insert( [
            'name'         => 'Oriental-Chai, Grüner Tee/Matcha, Calm&Relax',
            'price'        => 2.5,
            'menu_item_id' => 32
        ] );

        DB::table( 'options' )->insert( [
            'name'         => 'Bio-Blütenrispentee: Bergtee, Kamille, Wilder Thymian, Lindenblüte',
            'price'        => 3.0,
            'menu_item_id' => 32
        ] );

        // Kaffee (fair & bio)
        DB::table( 'options' )->insert( [
            'name'         => 'Cafe Creme',
            'price'        => 2.5,
            'menu_item_id' => 33
        ] );

        DB::table( 'options' )->insert( [
            'name'         => 'Cappuccino',
            'price'        => 2.8,
            'menu_item_id' => 33
        ] );

        DB::table( 'options' )->insert( [
            'name'         => 'Latte Macchiato',
            'price'        => 3.5,
            'menu_item_id' => 33
        ] );

        DB::table( 'options' )->insert( [
            'name'         => 'Espresso',
            'price'        => 2.0,
            'menu_item_id' => 33
        ] );

        // Kakao (bio)
        DB::table( 'options' )->insert( [
            'name'         => 'Oatly!',
            'price'        => 2.5,
            'menu_item_id' => 34
        ] );

        // Latte & Co
        DB::table( 'options' )->insert( [
            'name'         => 'Chai Latte',
            'price'        => 4.0,
            'menu_item_id' => 35
        ] );

        DB::table( 'options' )->insert( [
            'name'         => 'Matcha Latte',
            'price'        => 4.0,
            'menu_item_id' => 35
        ] );

        DB::table( 'options' )->insert( [
            'name'         => 'Kurkuma Latte',
            'price'        => 4.0,
            'menu_item_id' => 35
        ] );

        DB::table( 'options' )->insert( [
            'name'         => 'Pink-Superfruit-Latte',
            'price'        => 4.0,
            'menu_item_id' => 35
        ] );

        // Weinkarte
        // Apfelwein (regional)
        DB::table( 'options' )->insert( [
            'amount'       => '0,25l',
            'price'        => 2.0,
            'menu_item_id' => 36
        ] );

        DB::table( 'options' )->insert( [
            'amount'       => '0,50l',
            'price'        => 3.5,
            'menu_item_id' => 36
        ] );

        // Rosé (bio)
        DB::table( 'options' )->insert( [
            'amount'       => '0,20l',
            'price'        => 4.0,
            'menu_item_id' => 37
        ] );

        // Weißwein (bio)
        DB::table( 'options' )->insert( [
            'name'         => '<em>Sauvignon-Verdejo</em> fruchtig, aromatisch',
            'amount'       => '0,20l',
            'price'        => 4.0,
            'sort'         => 1,
            'menu_item_id' => 38
        ] );

        DB::table( 'options' )->insert( [
            'name'         => '<em>Grüner Veltliner*</em> trocken',
            'amount'       => '0,20l',
            'price'        => 4.5,
            'sort'         => 2,
            'menu_item_id' => 38
        ] );

        DB::table( 'options' )->insert( [
            'name'         => '<em>Blütenmuskateller*</em> halbtrocken',
            'amount'       => '0,20l',
            'price'        => 4.5,
            'sort'         => 3,
            'menu_item_id' => 38
        ] );

        DB::table( 'options' )->insert( [
            'name'         => '<em>Gewürztraminer*</em> halbtrocken, kräftig',
            'amount'       => '0,20l',
            'price'        => 5.0,
            'sort'         => 4,
            'menu_item_id' => 38
        ] );

        DB::table( 'options' )->insert( [
            'name'         => '<em>Gemischter Satz*</em> lieblich',
            'amount'       => '0,20l',
            'price'        => 5.0,
            'sort'         => 5,
            'menu_item_id' => 38
        ] );

        DB::table( 'options' )->insert( [
            'name'         => '<em>Chardonnay*</em> trocken',
            'amount'       => '0,20l',
            'price'        => 5.0,
            'sort'         => 6,
            'menu_item_id' => 38
        ] );

        // Dessertwein (bio)
        DB::table( 'options' )->insert( [
            'name'         => '<em>Gewürztraminer*</em> lieblich',
            'amount'       => '0,10l',
            'price'        => 4.0,
            'sort'         => 1,
            'menu_item_id' => 39
        ] );

        // Rotwein (bio)
        DB::table( 'options' )->insert( [
            'name'         => '<em>Merlot</em> trocken',
            'amount'       => '0,20l',
            'price'        => 4.0,
            'sort'         => 1,
            'menu_item_id' => 40
        ] );

        DB::table( 'options' )->insert( [
            'name'         => '<em>Tempranillo</em> trocken',
            'amount'       => '0,20l',
            'price'        => 4.0,
            'sort'         => 2,
            'menu_item_id' => 40
        ] );

        DB::table( 'options' )->insert( [
            'name'         => '<em>Cabernet-Sauvignon</em> trocken',
            'amount'       => '0,20l',
            'price'        => 4.0,
            'sort'         => 3,
            'menu_item_id' => 40
        ] );

        DB::table( 'options' )->insert( [
            'name'         => '<em>Blauer Zweigelt*</em> trocken',
            'amount'       => '0,20l',
            'price'        => 4.5,
            'sort'         => 4,
            'menu_item_id' => 40
        ] );

        DB::table( 'options' )->insert( [
            'name'         => '<em>Roesler*</em> trocken',
            'amount'       => '0,20l',
            'price'        => 5.0,
            'sort'         => 5,
            'menu_item_id' => 40
        ] );

        DB::table( 'options' )->insert( [
            'name'         => '<em>Red Romance*</em> lieblich',
            'amount'       => '0,20l',
            'price'        => 4.5,
            'sort'         => 6,
            'menu_item_id' => 40
        ] );

        // Prosecco (bio)
        DB::table( 'options' )->insert( [
            'name'         => '<em>Prosecco*</em> Sparkling Pink',
            'amount'       => '0,10l',
            'price'        => 3.0,
            'sort'         => 1,
            'menu_item_id' => 41
        ] );

        DB::table( 'options' )->insert( [
            'name'         => '<em>Prosecco* Slush</em> Mango-Limette oder Erdbeer-Minze',
            'amount'       => '0,20l',
            'price'        => 5.0,
            'sort'         => 2,
            'menu_item_id' => 41
        ] );

        // Hochprozentiges
        // Klassiker
        DB::table( 'options' )->insert( [
            'name'         => 'Asbach-Cola',
            'price'        => 3.5,
            'sort'         => 1,
            'menu_item_id' => 42
        ] );

        DB::table( 'options' )->insert( [
            'name'         => 'Jacky-Cola',
            'amount'       => '2cl',
            'price'        => 3.8,
            'sort'         => 2,
            'menu_item_id' => 42
        ] );

        DB::table( 'options' )->insert( [
            'name'         => 'Jacky on the Rocks',
            'amount'       => '4cl',
            'price'        => 4.5,
            'sort'         => 3,
            'menu_item_id' => 42
        ] );

        DB::table( 'options' )->insert( [
            'name'         => 'Vodka on the Rocks (Three Sixty)',
            'amount'       => '4cl',
            'price'        => 4.5,
            'sort'         => 4,
            'menu_item_id' => 42
        ] );

        DB::table( 'options' )->insert( [
            'name'         => 'Vodka Energy, Vodka O, Vodka Maracuja',
            'amount'       => '2cl',
            'price'        => 4.2,
            'sort'         => 5,
            'menu_item_id' => 42
        ] );

        DB::table( 'options' )->insert( [
            'name'         => 'Gin Tonic (Bombay Sapphire)',
            'amount'       => '2cl',
            'price'        => 4.2,
            'sort'         => 6,
            'menu_item_id' => 42
        ] );

        DB::table( 'options' )->insert( [
            'name'         => 'Batida de Coco mit Kirsch, Maracuja oder Mango',
            'amount'       => '2cl',
            'price'        => 4.2,
            'sort'         => 7,
            'menu_item_id' => 42
        ] );

        DB::table( 'options' )->insert( [
            'name'         => 'Chillma Hanf-Likör Klopfer',
            'amount'       => '2cl',
            'price'        => 2.5,
            'sort'         => 8,
            'menu_item_id' => 42
        ] );

        DB::table( 'options' )->insert( [
            'name'         => 'Pastis 51',
            'amount'       => '2cl',
            'price'        => 2.5,
            'sort'         => 9,
            'menu_item_id' => 42
        ] );

        // Weinbrand
        DB::table( 'options' )->insert( [
            'name'         => '“O de wie” (Apfelweinbrand)',
            'amount'       => '2cl',
            'price'        => 2.5,
            'sort'         => 1,
            'menu_item_id' => 43
        ] );

        DB::table( 'options' )->insert( [
            'name'         => 'Williams Christ (Fortbacher)',
            'amount'       => '2cl',
            'price'        => 2.0,
            'sort'         => 2,
            'menu_item_id' => 43
        ] );

        DB::table( 'options' )->insert( [
            'name'         => 'Marille (Hauser)',
            'amount'       => '2cl',
            'price'        => 2.0,
            'sort'         => 3,
            'menu_item_id' => 43
        ] );

        DB::table( 'options' )->insert( [
            'name'         => 'Himbeergeist (Fortbacher)',
            'amount'       => '2cl',
            'price'        => 2.0,
            'sort'         => 4,
            'menu_item_id' => 43
        ] );

        // Specials
        DB::table( 'options' )->insert( [
            'name'         => 'Taunus Benzin (Reichspostbitter)',
            'amount'       => '2cl',
            'price'        => 2.5,
            'sort'         => 1,
            'menu_item_id' => 44
        ] );

        DB::table( 'options' )->insert( [
            'name'         => 'Vegan Spirit (Kräuterlikör)',
            'amount'       => '1cl',
            'price'        => 2.0,
            'sort'         => 2,
            'menu_item_id' => 44
        ] );
    }
}
