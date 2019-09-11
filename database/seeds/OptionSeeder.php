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
        $menu_item_id = 1;
        // Salate
        // Rumpelstilzchen
        DB::table( 'options' )->insert( [
            'amount'       => 'mittel',
            'price'        => 8.50,
            'menu_item_id' => $menu_item_id
        ] );

        DB::table( 'options' )->insert( [
            'amount'       => 'groß',
            'price'        => 11.50,
            'menu_item_id' => $menu_item_id++
        ] );

        // Italian
        DB::table( 'options' )->insert( [
            'amount'       => 'mittel',
            'price'        => 8.50,
            'menu_item_id' => $menu_item_id
        ] );

        DB::table( 'options' )->insert( [
            'amount'       => 'groß',
            'price'        => 11.50,
            'menu_item_id' => $menu_item_id++
        ] );

        // Kleiner Salat
        DB::table( 'options' )->insert( [
            'name'         => 'Blattsalate, Gurke, Mais, Tomaten',
            'price'        => 4.5,
            'menu_item_id' => $menu_item_id++
        ] );

        // Caprese
        DB::table( 'options' )->insert( [
            'price'        => 5.8,
            'menu_item_id' => $menu_item_id++
        ] );

        // Kartoffeliges
        // Süßkartoffel-Pommes
        DB::table( 'options' )->insert( [
            'amount'       => 'klein',
            'price'        => 3.0,
            'menu_item_id' => $menu_item_id
        ] );

        DB::table( 'options' )->insert( [
            'amount'       => 'groß',
            'price'        => 4.5,
            'menu_item_id' => $menu_item_id++
        ] );

        // Kartoffel-Dippers
        DB::table( 'options' )->insert( [
            'amount'       => 'klein',
            'price'        => 2.0,
            'menu_item_id' => $menu_item_id
        ] );

        DB::table( 'options' )->insert( [
            'amount'       => 'groß',
            'price'        => 3.5,
            'menu_item_id' => $menu_item_id++
        ] );

        // Kartoffel-Pommes
        DB::table( 'options' )->insert( [
            'amount'       => 'klein',
            'price'        => 2.0,
            'menu_item_id' => $menu_item_id
        ] );

        DB::table( 'options' )->insert( [
            'amount'       => 'groß',
            'price'        => 3.5,
            'menu_item_id' => $menu_item_id++
        ] );

        // Sweet-Chili-Cheeze-Fries
        DB::table( 'options' )->insert( [
            'price'        => 6.0,
            'menu_item_id' => $menu_item_id++
        ] );

        // Nachos
        // Chili-Cheeze
        DB::table( 'options' )->insert( [
            'price'        => 5.5,
            'menu_item_id' => $menu_item_id++
        ] );

        // Nacho Trio
        DB::table( 'options' )->insert( [
            'price'        => 5.5,
            'menu_item_id' => $menu_item_id++
        ] );

        // Specials
        // Falafel-Teller
        DB::table( 'options' )->insert( [
            'name'         => 'mit Kartoffel-Pommes',
            'price'        => 8.50,
            'menu_item_id' => $menu_item_id
        ] );

        DB::table( 'options' )->insert( [
            'name'         => 'mit Süßkartoffel-Pommes',
            'price'        => 9.50,
            'menu_item_id' => $menu_item_id++
        ] );

        // Jack-Teller
        DB::table( 'options' )->insert( [
            'name'         => 'auf Kartoffel-Pommes',
            'price'        => 8.50,
            'menu_item_id' => $menu_item_id
        ] );

        DB::table( 'options' )->insert( [
            'name'         => 'auf Süßkartoffel-Pommes',
            'price'        => 9.50,
            'menu_item_id' => $menu_item_id++
        ] );

        // Burger
        // Champion-Burger
        DB::table( 'options' )->insert( [
            'name'         => 'mit Süßkartoffel-Pommes',
            'price'        => 10.50,
            'menu_item_id' => $menu_item_id
        ] );

        DB::table( 'options' )->insert( [
            'name'         => 'mit Kartoffel-Dippers',
            'price'        => 9.50,
            'menu_item_id' => $menu_item_id
        ] );

        DB::table( 'options' )->insert( [
            'name'         => 'ohne Beilage',
            'price'        => 7.50,
            'menu_item_id' => $menu_item_id++
        ] );

        // Power-Burger
        DB::table( 'options' )->insert( [
            'name'         => 'mit Süßkartoffel-Pommes',
            'price'        => 10.50,
            'menu_item_id' => $menu_item_id
        ] );

        DB::table( 'options' )->insert( [
            'name'         => 'mit Kartoffel-Dippers',
            'price'        => 9.50,
            'menu_item_id' => $menu_item_id
        ] );

        DB::table( 'options' )->insert( [
            'name'         => 'ohne Beilage',
            'price'        => 7.50,
            'menu_item_id' => $menu_item_id++
        ] );

        // Meat-Love-Burger
        DB::table( 'options' )->insert( [
            'name'         => 'mit Süßkartoffel-Pommes',
            'price'        => 13.50,
            'menu_item_id' => $menu_item_id
        ] );

        DB::table( 'options' )->insert( [
            'name'         => 'mit Kartoffel-Dippers',
            'price'        => 12.50,
            'menu_item_id' => $menu_item_id
        ] );

        DB::table( 'options' )->insert( [
            'name'         => 'ohne Beilage',
            'price'        => 10.50,
            'menu_item_id' => $menu_item_id++
        ] );

        // Wraps
        // Laxx-Wrap
        DB::table( 'options' )->insert( [
            'price'        => 8.0,
            'menu_item_id' => $menu_item_id++
        ] );

        // Power-Wrap
        DB::table( 'options' )->insert( [
            'price'        => 7.5,
            'menu_item_id' => $menu_item_id++
        ] );

        // Falafel-Wrap
        DB::table( 'options' )->insert( [
            'price'        => 6.0,
            'menu_item_id' => $menu_item_id++
        ] );

        // Jack-Wrap
        DB::table( 'options' )->insert( [
            'price'        => 8.0,
            'menu_item_id' => $menu_item_id++
        ] );

        // Flammkuchen
        // Classic
        DB::table( 'options' )->insert( [
            'price'        => 7.0,
            'menu_item_id' => $menu_item_id++
        ] );

        // Italian
        DB::table( 'options' )->insert( [
            'price'        => 8.5,
            'menu_item_id' => $menu_item_id++
        ] );

        // Spezial
        DB::table( 'options' )->insert( [
            'price'        => 8.5,
            'menu_item_id' => $menu_item_id++
        ] );

        // Gaumenfreuden
        // Baklava
        DB::table( 'options' )->insert( [
            'price'        => 3.0,
            'menu_item_id' => $menu_item_id++
        ] );

        // Bananen-Tiramisu
        DB::table( 'options' )->insert( [
            'price'        => 4.0,
            'menu_item_id' => $menu_item_id++
        ] );

        // Himbeer Panna Cocos
        DB::table( 'options' )->insert( [
            'price'        => 3.8,
            'menu_item_id' => $menu_item_id++
        ] );

        // Durstlöscher
        // Wasser
        DB::table( 'options' )->insert( [
            'amount'       => '0,2l',
            'price'        => 2.0,
            'menu_item_id' => $menu_item_id
        ] );

        DB::table( 'options' )->insert( [
            'amount'       => '0,75l',
            'price'        => 4.0,
            'menu_item_id' => $menu_item_id++
        ] );

        // Bio-Zisch
        DB::table( 'options' )->insert( [
            'amount'       => '0,33l',
            'price'        => 3.0,
            'menu_item_id' => $menu_item_id++
        ] );

        // Saft
        DB::table( 'options' )->insert( [
            'name'         => 'Orange, Apfel',
            'amount'       => '0,33l',
            'price'        => 3.0,
            'menu_item_id' => $menu_item_id
        ] );

        DB::table( 'options' )->insert( [
            'name'         => 'Mango, Kirsch, Maracuja, Banane, Mango-Kokos, KiBa',
            'amount'       => '0,33l',
            'price'        => 3.8,
            'menu_item_id' => $menu_item_id
        ] );

        DB::table( 'options' )->insert( [
            'name'         => 'Orange, Apfel',
            'amount'       => '0,50l',
            'price'        => 3.8,
            'menu_item_id' => $menu_item_id
        ] );

        DB::table( 'options' )->insert( [
            'name'         => 'Mango, Kirsch, Maracuja, Banane, Mango-Kokos, KiBa',
            'amount'       => '0,50l',
            'price'        => 4.8,
            'menu_item_id' => $menu_item_id++
        ] );

        // Saftschorlen
        DB::table( 'options' )->insert( [
            'name'         => 'Orange, Apfel',
            'amount'       => '0,33l',
            'price'        => 2.8,
            'menu_item_id' => $menu_item_id
        ] );

        DB::table( 'options' )->insert( [
            'name'         => 'Mango, Kirsch, Maracuja, Banane, Mango-Kokos, KiBa',
            'amount'       => '0,33l',
            'price'        => 3.2,
            'menu_item_id' => $menu_item_id
        ] );

        DB::table( 'options' )->insert( [
            'name'         => 'Orange, Apfel',
            'amount'       => '0,50l',
            'price'        => 3.5,
            'menu_item_id' => $menu_item_id
        ] );

        DB::table( 'options' )->insert( [
            'name'         => 'Mango, Kirsch, Maracuja, Banane, Mango-Kokos, KiBa',
            'amount'       => '0,50l',
            'price'        => 4.0,
            'menu_item_id' => $menu_item_id++
        ] );

        // Eistee (bio & fair)
        DB::table( 'options' )->insert( [
            'name'         => 'Pfirsich-Zitrone',
            'amount'       => '0,33l',
            'price'        => 3.5,
            'menu_item_id' => $menu_item_id
        ] );

        DB::table( 'options' )->insert( [
            'name'         => 'Himbeer-Hibiskus',
            'amount'       => '0,33l',
            'price'        => 3.5,
            'menu_item_id' => $menu_item_id
        ] );

        DB::table( 'options' )->insert( [
            'name'         => 'Matcha',
            'amount'       => '0,50l',
            'price'        => 4.5,
            'menu_item_id' => $menu_item_id
        ] );

        DB::table( 'options' )->insert( [
            'name'         => 'Mate-Zitrone',
            'amount'       => '0,50l',
            'price'        => 4.5,
            'menu_item_id' => $menu_item_id++
        ] );

        // Hexenbräu vom Fass
        DB::table( 'options' )->insert( [
            'amount'       => '0,33l',
            'price'        => 2.8,
            'menu_item_id' => $menu_item_id
        ] );

        DB::table( 'options' )->insert( [
            'amount'       => '0,50l',
            'price'        => 4.2,
            'menu_item_id' => $menu_item_id++
        ] );

        // Lahnstein-Brauerei Flaschenbier
        DB::table( 'options' )->insert( [
            'name'         => 'Hefeweizen oder Hefeweizen alkoholfrei',
            'amount'       => '0,50l',
            'price'        => 3.5,
            'menu_item_id' => $menu_item_id
        ] );

        DB::table( 'options' )->insert( [
            'name'         => 'Pils alkoholfrei',
            'amount'       => '0,50l',
            'price'        => 3.2,
            'menu_item_id' => $menu_item_id
        ] );

        DB::table( 'options' )->insert( [
            'name'         => 'Malztrunk',
            'amount'       => '0,50l',
            'price'        => 3.0,
            'menu_item_id' => $menu_item_id
        ] );

        DB::table( 'options' )->insert( [
            'name'         => 'Radler',
            'amount'       => '0,33l',
            'price'        => 2.8,
            'menu_item_id' => $menu_item_id++
        ] );

        // Heißes
        // Tee (bio)
        DB::table( 'options' )->insert( [
            'name'         => 'Oriental-Chai, Grüner Tee/Matcha, Calm&Relax',
            'price'        => 2.5,
            'menu_item_id' => $menu_item_id
        ] );

        DB::table( 'options' )->insert( [
            'name'         => 'Bio-Blütenrispentee: Bergtee, Kamille, Wilder Thymian, Lindenblüte',
            'price'        => 3.0,
            'menu_item_id' => $menu_item_id++
        ] );

        // Kaffee (fair & bio)
        DB::table( 'options' )->insert( [
            'name'         => 'Cafe Creme',
            'price'        => 2.5,
            'menu_item_id' => $menu_item_id
        ] );

        DB::table( 'options' )->insert( [
            'name'         => 'Cappuccino',
            'price'        => 2.8,
            'menu_item_id' => $menu_item_id
        ] );

        DB::table( 'options' )->insert( [
            'name'         => 'Latte Macchiato',
            'price'        => 3.5,
            'menu_item_id' => $menu_item_id
        ] );

        DB::table( 'options' )->insert( [
            'name'         => 'Espresso',
            'price'        => 2.0,
            'menu_item_id' => $menu_item_id++
        ] );

        // Kakao (bio)
        DB::table( 'options' )->insert( [
            'name'         => 'Oatly!',
            'price'        => 2.5,
            'menu_item_id' => $menu_item_id++
        ] );

        // Latte & Co
        DB::table( 'options' )->insert( [
            'name'         => 'Chai Latte',
            'price'        => 4.0,
            'menu_item_id' => $menu_item_id
        ] );

        DB::table( 'options' )->insert( [
            'name'         => 'Matcha Latte',
            'price'        => 4.0,
            'menu_item_id' => $menu_item_id
        ] );

        DB::table( 'options' )->insert( [
            'name'         => 'Kurkuma Latte',
            'price'        => 4.0,
            'menu_item_id' => $menu_item_id
        ] );

        DB::table( 'options' )->insert( [
            'name'         => 'Pink-Superfruit-Latte',
            'price'        => 4.0,
            'menu_item_id' => $menu_item_id++
        ] );

        // Weinkarte
        // Apfelwein (regional)
        DB::table( 'options' )->insert( [
            'amount'       => '0,25l',
            'price'        => 2.0,
            'menu_item_id' => $menu_item_id
        ] );

        DB::table( 'options' )->insert( [
            'amount'       => '0,50l',
            'price'        => 3.5,
            'menu_item_id' => $menu_item_id++
        ] );

        // Rosé (bio)
        DB::table( 'options' )->insert( [
            'amount'       => '0,20l',
            'price'        => 4.0,
            'menu_item_id' => $menu_item_id++
        ] );

        // Weißwein (bio)
        DB::table( 'options' )->insert( [
            'name'         => '<em>Sauvignon-Verdejo</em> fruchtig, aromatisch',
            'amount'       => '0,20l',
            'price'        => 4.0,
            'sort'         => 1,
            'menu_item_id' => $menu_item_id
        ] );

        DB::table( 'options' )->insert( [
            'name'         => '<em>Grüner Veltliner</em> trocken',
            'amount'       => '0,20l',
            'price'        => 4.5,
            'sort'         => 2,
            'menu_item_id' => $menu_item_id
        ] );

        DB::table( 'options' )->insert( [
            'name'         => '<em>Blütenmuskateller</em> halbtrocken',
            'amount'       => '0,20l',
            'price'        => 4.5,
            'sort'         => 3,
            'menu_item_id' => $menu_item_id
        ] );

        DB::table( 'options' )->insert( [
            'name'         => '<em>Gewürztraminer</em> halbtrocken, kräftig',
            'amount'       => '0,20l',
            'price'        => 5.0,
            'sort'         => 4,
            'menu_item_id' => $menu_item_id
        ] );

        DB::table( 'options' )->insert( [
            'name'         => '<em>Gemischter Satz</em> lieblich',
            'amount'       => '0,20l',
            'price'        => 5.0,
            'sort'         => 5,
            'menu_item_id' => $menu_item_id
        ] );

        DB::table( 'options' )->insert( [
            'name'         => '<em>Chardonnay</em> trocken',
            'amount'       => '0,20l',
            'price'        => 5.0,
            'sort'         => 6,
            'menu_item_id' => $menu_item_id++
        ] );

        // Dessertwein (bio)
        DB::table( 'options' )->insert( [
            'name'         => '<em>Gewürztraminer</em> lieblich',
            'amount'       => '0,10l',
            'price'        => 4.0,
            'sort'         => 1,
            'menu_item_id' => $menu_item_id++
        ] );

        // Rotwein (bio)
        DB::table( 'options' )->insert( [
            'name'         => '<em>Merlot</em> trocken',
            'amount'       => '0,20l',
            'price'        => 4.0,
            'sort'         => 1,
            'menu_item_id' => $menu_item_id
        ] );

        DB::table( 'options' )->insert( [
            'name'         => '<em>Tempranillo</em> trocken',
            'amount'       => '0,20l',
            'price'        => 4.0,
            'sort'         => 2,
            'menu_item_id' => $menu_item_id
        ] );

        DB::table( 'options' )->insert( [
            'name'         => '<em>Cabernet-Sauvignon</em> trocken',
            'amount'       => '0,20l',
            'price'        => 4.0,
            'sort'         => 3,
            'menu_item_id' => $menu_item_id
        ] );

        DB::table( 'options' )->insert( [
            'name'         => '<em>Blauer Zweigelt</em> trocken',
            'amount'       => '0,20l',
            'price'        => 4.5,
            'sort'         => 4,
            'menu_item_id' => $menu_item_id
        ] );

        DB::table( 'options' )->insert( [
            'name'         => '<em>Roesler</em> trocken',
            'amount'       => '0,20l',
            'price'        => 5.0,
            'sort'         => 5,
            'menu_item_id' => $menu_item_id
        ] );

        DB::table( 'options' )->insert( [
            'name'         => '<em>Red Romance</em> lieblich',
            'amount'       => '0,20l',
            'price'        => 4.5,
            'sort'         => 6,
            'menu_item_id' => $menu_item_id++
        ] );

        // Prosecco (bio)
        DB::table( 'options' )->insert( [
            'name'         => '<em>Prosecco</em> Sparkling Pink',
            'amount'       => '0,10l',
            'price'        => 3.0,
            'sort'         => 1,
            'menu_item_id' => $menu_item_id
        ] );

        DB::table( 'options' )->insert( [
            'name'         => '<em>Prosecco Slush</em> Mango-Limette oder Erdbeer-Minze',
            'amount'       => '0,20l',
            'price'        => 5.0,
            'sort'         => 2,
            'menu_item_id' => $menu_item_id++
        ] );

        // Hochprozentiges
        // Klassiker
        DB::table( 'options' )->insert( [
            'name'         => 'Asbach-Cola',
            'price'        => 3.5,
            'sort'         => 1,
            'menu_item_id' => $menu_item_id
        ] );

        DB::table( 'options' )->insert( [
            'name'         => 'Jacky-Cola',
            'amount'       => '2cl',
            'price'        => 3.8,
            'sort'         => 2,
            'menu_item_id' => $menu_item_id
        ] );

        DB::table( 'options' )->insert( [
            'name'         => 'Jacky on the Rocks',
            'amount'       => '4cl',
            'price'        => 4.5,
            'sort'         => 3,
            'menu_item_id' => $menu_item_id
        ] );

        DB::table( 'options' )->insert( [
            'name'         => 'Vodka on the Rocks (Three Sixty)',
            'amount'       => '4cl',
            'price'        => 4.5,
            'sort'         => 4,
            'menu_item_id' => $menu_item_id
        ] );

        DB::table( 'options' )->insert( [
            'name'         => 'Vodka Energy, Vodka O, Vodka Maracuja',
            'amount'       => '2cl',
            'price'        => 4.2,
            'sort'         => 5,
            'menu_item_id' => $menu_item_id
        ] );

        DB::table( 'options' )->insert( [
            'name'         => 'Gin Tonic (Bombay Sapphire)',
            'amount'       => '2cl',
            'price'        => 4.2,
            'sort'         => 6,
            'menu_item_id' => $menu_item_id
        ] );

        DB::table( 'options' )->insert( [
            'name'         => 'Batida de Coco mit Kirsch, Maracuja oder Mango',
            'amount'       => '2cl',
            'price'        => 4.2,
            'sort'         => 7,
            'menu_item_id' => $menu_item_id
        ] );

        DB::table( 'options' )->insert( [
            'name'         => 'Chillma Hanf-Likör Klopfer',
            'amount'       => '2cl',
            'price'        => 2.5,
            'sort'         => 8,
            'menu_item_id' => $menu_item_id
        ] );

        DB::table( 'options' )->insert( [
            'name'         => 'Pastis 51',
            'amount'       => '2cl',
            'price'        => 2.5,
            'sort'         => 9,
            'menu_item_id' => $menu_item_id++
        ] );

        // Weinbrand
        DB::table( 'options' )->insert( [
            'name'         => '“O de wie” (Apfelweinbrand)',
            'amount'       => '2cl',
            'price'        => 2.5,
            'sort'         => 1,
            'menu_item_id' => $menu_item_id
        ] );

        DB::table( 'options' )->insert( [
            'name'         => 'Williams Christ (Fortbacher)',
            'amount'       => '2cl',
            'price'        => 2.0,
            'sort'         => 2,
            'menu_item_id' => $menu_item_id
        ] );

        DB::table( 'options' )->insert( [
            'name'         => 'Marille (Hauser)',
            'amount'       => '2cl',
            'price'        => 2.0,
            'sort'         => 3,
            'menu_item_id' => $menu_item_id
        ] );

        DB::table( 'options' )->insert( [
            'name'         => 'Himbeergeist (Fortbacher)',
            'amount'       => '2cl',
            'price'        => 2.0,
            'sort'         => 4,
            'menu_item_id' => $menu_item_id++
        ] );

        // Specials
        DB::table( 'options' )->insert( [
            'name'         => 'Taunus Benzin (Reichspostbitter)',
            'amount'       => '2cl',
            'price'        => 2.5,
            'sort'         => 1,
            'menu_item_id' => $menu_item_id
        ] );

        DB::table( 'options' )->insert( [
            'name'         => 'Vegan Spirit (Kräuterlikör)',
            'amount'       => '1cl',
            'price'        => 2.0,
            'sort'         => 2,
            'menu_item_id' => $menu_item_id
        ] );
    }
}
