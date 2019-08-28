<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Salate
        DB::table('options')->insert([
            'name' => 'mittel',
            'price' => 8.50,
            'menu_item_id' => 1
        ]);

        DB::table('options')->insert([
            'name' => 'groß',
            'price' => 11.50,
            'menu_item_id' => 1
        ]);

        DB::table('options')->insert([
            'name' => 'mittel',
            'price' => 8.50,
            'menu_item_id' => 2
        ]);

        DB::table('options')->insert([
            'name' => 'groß',
            'price' => 11.50,
            'menu_item_id' => 2
        ]);

        // Kartoffeliges
        DB::table('options')->insert([
            'name' => 'klein',
            'price' => 3.0,
            'menu_item_id' => 5
        ]);

        DB::table('options')->insert([
            'name' => 'groß',
            'price' => 4.5,
            'menu_item_id' => 5
        ]);

        DB::table('options')->insert([
            'name' => 'klein',
            'price' => 2.0,
            'menu_item_id' => 6
        ]);

        DB::table('options')->insert([
            'name' => 'groß',
            'price' => 3.5,
            'menu_item_id' => 6
        ]);

        DB::table('options')->insert([
            'name' => 'klein',
            'price' => 2.0,
            'menu_item_id' => 7
        ]);

        DB::table('options')->insert([
            'name' => 'groß',
            'price' => 3.5,
            'menu_item_id' => 7
        ]);

        // Specials
        DB::table('options')->insert([
            'name' => 'mit Kartoffel-Pommes',
            'price' => 8.50,
            'menu_item_id' => 11
        ]);

        DB::table('options')->insert([
            'name' => 'mit Süßkartoffel-Pommes',
            'price' => 9.50,
            'menu_item_id' => 11
        ]);

        DB::table('options')->insert([
            'name' => 'auf Kartoffel-Pommes',
            'price' => 8.50,
            'menu_item_id' => 12
        ]);

        DB::table('options')->insert([
            'name' => 'auf Süßkartoffel-Pommes',
            'price' => 9.50,
            'menu_item_id' => 12
        ]);

        // Burger
        DB::table('options')->insert([
            'name' => 'mit Süßkartoffel-Pommes',
            'price' => 10.50,
            'menu_item_id' => 13
        ]);

        DB::table('options')->insert([
            'name' => 'mit Kartoffel-Dippers',
            'price' => 9.50,
            'menu_item_id' => 13
        ]);

        DB::table('options')->insert([
            'name' => 'ohne Beilage',
            'price' => 7.50,
            'menu_item_id' => 13
        ]);

        DB::table('options')->insert([
            'name' => 'mit Süßkartoffel-Pommes',
            'price' => 10.50,
            'menu_item_id' => 14
        ]);

        DB::table('options')->insert([
            'name' => 'mit Kartoffel-Dippers',
            'price' => 9.50,
            'menu_item_id' => 14
        ]);

        DB::table('options')->insert([
            'name' => 'ohne Beilage',
            'price' => 7.50,
            'menu_item_id' => 14
        ]);

        DB::table('options')->insert([
            'name' => 'mit Süßkartoffel-Pommes',
            'price' => 13.50,
            'menu_item_id' => 15
        ]);

        DB::table('options')->insert([
            'name' => 'mit Kartoffel-Dippers',
            'price' => 12.50,
            'menu_item_id' => 15
        ]);

        DB::table('options')->insert([
            'name' => 'ohne Beilage',
            'price' => 10.50,
            'menu_item_id' => 15
        ]);

        DB::table('options')->insert([
            'name' => '0.2l',
            'price' => 2.0,
            'menu_item_id' => 25
        ]);

        DB::table('options')->insert([
            'name' => '0.75l',
            'price' => 4.0,
            'menu_item_id' => 25
        ]);

        // Saft
        DB::table('options')->insert([
            'name' => '0.33l',
            'price' => 3.0,
            'menu_item_id' => 27
        ]);

        DB::table('options')->insert([
            'name' => '0.50l',
            'price' => 3.8,
            'menu_item_id' => 27
        ]);

        DB::table('options')->insert([
            'name' => '0.33l',
            'price' => 3.8,
            'menu_item_id' => 28
        ]);

        DB::table('options')->insert([
            'name' => '0.50l',
            'price' => 4.8,
            'menu_item_id' => 28
        ]);

        // Saftschorlen
        DB::table('options')->insert([
            'name' => '0.33l',
            'price' => 2.8,
            'menu_item_id' => 29
        ]);

        DB::table('options')->insert([
            'name' => '0.50l',
            'price' => 3.5,
            'menu_item_id' => 29
        ]);

        DB::table('options')->insert([
            'name' => '0.33l',
            'price' => 3.2,
            'menu_item_id' => 30
        ]);

        DB::table('options')->insert([
            'name' => '0.50l',
            'price' => 4.0,
            'menu_item_id' => 30
        ]);

        DB::table('options')->insert([
            'name' => 'Pfirsich-Zitrone 0.33l',
            'price' => 3.5,
            'menu_item_id' => 31
        ]);

        DB::table('options')->insert([
            'name' => 'Himbeer-Hibiskus 0.33l',
            'price' => 3.5,
            'menu_item_id' => 31
        ]);

        DB::table('options')->insert([
            'name' => 'Matcha 0.50l',
            'price' => 4.5,
            'menu_item_id' => 31
        ]);

        DB::table('options')->insert([
            'name' => 'Mate-Zitrone 0.50l',
            'price' => 4.5,
            'menu_item_id' => 31
        ]);

        DB::table('options')->insert([
            'name' => '0.33l',
            'price' => 2.8,
            'menu_item_id' => 32
        ]);

        DB::table('options')->insert([
            'name' => '0.50l',
            'price' => 4.2,
            'menu_item_id' => 32
        ]);

        DB::table('options')->insert([
            'name' => 'Hefeweizen oder Hefeweizen alkoholfrei 0.50l',
            'price' => 3.5,
            'menu_item_id' => 33
        ]);

        DB::table('options')->insert([
            'name' => 'Pils alkoholfrei 0.50l',
            'price' => 3.2,
            'menu_item_id' => 33
        ]);

        DB::table('options')->insert([
            'name' => 'Malztrunk 0.50l',
            'price' => 3.0,
            'menu_item_id' => 33
        ]);

        DB::table('options')->insert([
            'name' => 'Radler 0.33l',
            'price' => 2.8,
            'menu_item_id' => 33
        ]);

        DB::table('options')->insert([
            'name' => 'Oriental-Chai, Grüner Tee/Matcha, Calm&Relax',
            'price' => 2.5,
            'menu_item_id' => 34
        ]);

        DB::table('options')->insert([
            'name' => 'Bio-Blütenrispentee: Bergtee, Kamille, Wilder Thymian, Lindenblüte',
            'price' => 3.0,
            'menu_item_id' => 34
        ]);

        DB::table('options')->insert([
            'name' => 'Cafe Creme',
            'price' => 2.5,
            'menu_item_id' => 35
        ]);

        DB::table('options')->insert([
            'name' => 'Cappuccino',
            'price' => 2.8,
            'menu_item_id' => 35
        ]);

        DB::table('options')->insert([
            'name' => 'Latte Macchiato',
            'price' => 3.5,
            'menu_item_id' => 35
        ]);

        DB::table('options')->insert([
            'name' => 'Espresso',
            'price' => 2.0,
            'menu_item_id' => 35
        ]);

        DB::table('options')->insert([
            'name' => 'Chai Latte',
            'price' => 4.0,
            'menu_item_id' => 37
        ]);

        DB::table('options')->insert([
            'name' => 'Matcha Latte',
            'price' => 4.0,
            'menu_item_id' => 37
        ]);

        DB::table('options')->insert([
            'name' => 'Kurkuma Latte',
            'price' => 4.0,
            'menu_item_id' => 37
        ]);

        DB::table('options')->insert([
            'name' => 'Pink-Superfruit-Latte',
            'price' => 4.0,
            'menu_item_id' => 37
        ]);

        DB::table('options')->insert([
            'name' => '0.25l',
            'price' => 2.0,
            'menu_item_id' => 38
        ]);

        DB::table('options')->insert([
            'name' => '0.50l',
            'price' => 3.5,
            'menu_item_id' => 38
        ]);

        DB::table('options')->insert([
            'name' => '<em>Sauvignon-Verdejo</em> fruchtig, aromatisch 0.20l',
            'price' => 4.0,
            'sort' => 1,
            'menu_item_id' => 40
        ]);

        DB::table('options')->insert([
            'name' => '<em>Grüner Veltliner*</em> trocken 0.20l',
            'price' => 4.5,
            'sort' => 2,
            'menu_item_id' => 40
        ]);

        DB::table('options')->insert([
            'name' => '<em>Blütenmuskateller*</em> halbtrocken 0.20l',
            'price' => 4.5,
            'sort' => 3,
            'menu_item_id' => 40
        ]);

        DB::table('options')->insert([
            'name' => '<em>Gewürztraminer*</em> halbtrocken, kräftig 0.20l',
            'price' => 5.0,
            'sort' => 4,
            'menu_item_id' => 40
        ]);

        DB::table('options')->insert([
            'name' => '<em>Gemischter Satz*</em> lieblich 0.20l',
            'price' => 5.0,
            'sort' => 5,
            'menu_item_id' => 40
        ]);

        DB::table('options')->insert([
            'name' => '<em>Chardonnay*</em> trocken 0.20l',
            'price' => 5.0,
            'sort' => 6,
            'menu_item_id' => 40
        ]);

        DB::table('options')->insert([
            'name' => '<em>Gewürztraminer*</em> lieblich 0.10l',
            'price' => 4.0,
            'sort' => 1,
            'menu_item_id' => 41
        ]);

        DB::table('options')->insert([
            'name' => '<em>Merlot</em> trocken 0.20l',
            'price' => 4.0,
            'sort' => 1,
            'menu_item_id' => 42
        ]);

        DB::table('options')->insert([
            'name' => '<em>Tempranillo</em> trocken 0.20l',
            'price' => 4.0,
            'sort' => 2,
            'menu_item_id' => 42
        ]);

        DB::table('options')->insert([
            'name' => '<em>Cabernet-Sauvignon</em> trocken 0.20l',
            'price' => 4.0,
            'sort' => 3,
            'menu_item_id' => 42
        ]);

        DB::table('options')->insert([
            'name' => '<em>Blauer Zweigelt*</em> trocken 0.20l',
            'price' => 4.5,
            'sort' => 4,
            'menu_item_id' => 42
        ]);

        DB::table('options')->insert([
            'name' => '<em>Roesler*</em> trocken 0.20l',
            'price' => 5.0,
            'sort' => 5,
            'menu_item_id' => 42
        ]);

        DB::table('options')->insert([
            'name' => '<em>Red Romance*</em> lieblich 0.20l',
            'price' => 4.5,
            'sort' => 6,
            'menu_item_id' => 42
        ]);

        DB::table('options')->insert([
            'name' => '<em>Prosecco*</em> Sparkling Pink 0.10l',
            'price' => 3.0,
            'sort' => 1,
            'menu_item_id' => 43
        ]);

        DB::table('options')->insert([
            'name' => '<em>Prosecco* Slush</em> Mango-Limette oder Erdbeer-Minze 0.20l',
            'price' => 5.0,
            'sort' => 2,
            'menu_item_id' => 43
        ]);

        DB::table('options')->insert([
            'name' => 'Asbach-Cola',
            'price' => 3.5,
            'sort' => 1,
            'menu_item_id' => 44
        ]);

        DB::table('options')->insert([
            'name' => 'Jacky-Cola 2cl',
            'price' => 3.8,
            'sort' => 2,
            'menu_item_id' => 44
        ]);

        DB::table('options')->insert([
            'name' => 'Jacky on the Rocks 4cl',
            'price' => 4.5,
            'sort' => 3,
            'menu_item_id' => 44
        ]);

        DB::table('options')->insert([
            'name' => 'Vodka on the Rocks (Three Sixty) 4cl',
            'price' => 4.5,
            'sort' => 4,
            'menu_item_id' => 44
        ]);

        DB::table('options')->insert([
            'name' => 'Vodka Energy, Vodka O, Vodka Maracuja 2cl',
            'price' => 4.2,
            'sort' => 5,
            'menu_item_id' => 44
        ]);

        DB::table('options')->insert([
            'name' => 'Gin Tonic (Bombay Sapphire) 2cl',
            'price' => 4.2,
            'sort' => 6,
            'menu_item_id' => 44
        ]);

        DB::table('options')->insert([
            'name' => 'Batida de Coco mit Kirsch, Maracuja oder Mango 2cl',
            'price' => 4.2,
            'sort' => 7,
            'menu_item_id' => 44
        ]);

        DB::table('options')->insert([
            'name' => 'Chillma Hanf-Likör Klopfer 2cl',
            'price' => 2.5,
            'sort' => 8,
            'menu_item_id' => 44
        ]);

        DB::table('options')->insert([
            'name' => 'Pastis 51 2cl',
            'price' => 2.5,
            'sort' => 9,
            'menu_item_id' => 44
        ]);

        DB::table('options')->insert([
            'name' => '“O de wie” (Apfelweinbrand) 2cl',
            'price' => 2.5,
            'sort' => 1,
            'menu_item_id' => 45
        ]);

        DB::table('options')->insert([
            'name' => 'Williams Christ (Fortbacher) 2cl',
            'price' => 2.0,
            'sort' => 2,
            'menu_item_id' => 45
        ]);

        DB::table('options')->insert([
            'name' => 'Marille (Hauser) 2cl',
            'price' => 2.0,
            'sort' => 3,
            'menu_item_id' => 45
        ]);

        DB::table('options')->insert([
            'name' => 'Himbeergeist (Fortbacher) 2cl',
            'price' => 2.0,
            'sort' => 4,
            'menu_item_id' => 45
        ]);

        DB::table('options')->insert([
            'name' => 'Taunus Benzin (Reichspostbitter) 2cl',
            'price' => 2.5,
            'sort' => 1,
            'menu_item_id' => 46
        ]);

        DB::table('options')->insert([
            'name' => 'Vegan Spirit (Kräuterlikör) 1cl',
            'price' => 2.0,
            'sort' => 2,
            'menu_item_id' => 46
        ]);
    }
}
