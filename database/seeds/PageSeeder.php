<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table( 'pages' )->insert( [
            'slug'       => 'home',
            'title'      => 'Herzlich Willkommen in unserer Hexenküche in Idstein!',
            'menu_title' => 'Startseite',
            'content'    => '<h4>Über uns</h4>
                            <p>Wir sind größtenteils ein Familienunternehmen und haben unsere Leidenschaft für Essen nicht erst seit der Eröffnung dieses Lokals im März 2019 entdeckt. Die Hexenküche ist eben die “Heimat des Veggiemobils”, das die Gaumen von Menschen über die Grenzen Hessens hinaus verwöhnt und eine Bereicherung für jeden darstellt, der ehrliche und vollwertige Alternativen zu fleischlastigen und fettigen Fertiggerichten sucht.</p>
                            <h4>Speisen</h4>
                            <p>Auch wenn die Karte auf den ersten Blick nicht danach aussieht: <br>
                            Sie werden bei uns keine fertigen Saucen und Dressings finden! Darüber hinaus haben wir überwiegend Speisen im Programm, die hier in dieser Küche selbst gemacht sind - wie zum Beispiel unsere Falafel sowie unseren Champion- und Power-Burger. Die Burgerbrötchen, auch Buns genannt, stammen von einer befreundeten Bäckerei, die diese exklusiv mit uns entwickelt hat und uns ständig mit frischem Nachschub versorgt.</p>
                            <h4>Einfach aber gut</h4>
                            <p>Das bedeutet als Konsequenz für Sie, dass keine künstlichen Aromen oder Geschmacksverstärker enthalten und die Anzahl der Allergene auf ein Minimum reduziert sind. Jedoch kann es unter Umständen mal etwas länger dauern, da bei uns mit frischen Lebensmitteln gearbeitet wird! Wir bitten in diesem Fall um Ihr Verständnis!</p>
                            <h4>Mehr als nur Trinken</h4>
                            <p>Auch bei unseren Getränken haben wir uns etwas einfallen lassen! So sind unsere Weine ausschließlich bio und vegan, d. h. mineralisch geklärt. Die mit einem * versehenen Weine beziehen wir vom Weingut Gerald Fürnkranz aus dem österreichischen Weinviertel. Sie wurden mehrfach prämiert und besitzen einen Histamingehalt von unter 0,1 mg pro Liter.<br>
                            Auch bei unseren restlichen Getränken haben wir darauf geachtet, Bio-Produkte zu verwenden, wenn möglich aus fairem Anbau und in Glas-Flaschen statt in der üblichen PET.<br>
                            </p>
                            <p>Wir freuen uns auf Ihren Besuch!</p>
                            <p>Ihre Hexenküche</p>',
            'hotbox_id'  => 2,
            'status'     => 1
        ] );

        DB::table( 'pages' )->insert( [
            'slug'    => '404',
            'title'   => 'Au weia!',
			'menu_title' => 'Seite nicht gefunden',
            'content' => 'Diese Seite existiert nicht...<br><br><br><img src="/img/404.png" width="50%" class="float-right">',
            'status'  => 1
        ] );

        DB::table( 'pages' )->insert( [
            'slug'       => 'anfahrt',
            'title'      => 'So finden Sie uns',
            'menu_title' => 'Anfahrt',
            'content'    => '<p>Du findest uns in der <br>
                    Goethestraße 2<br>
                    65510 Idstein-Wörsdorf
                    </p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2551.58894305102!2d8.253570615842166!3d50.24358381012987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47bdb7d31032fd17%3A0x3391e97b21da569b!2sHexenk%C3%BCche!5e0!3m2!1sde!2sde!4v1566656329419!5m2!1sde!2sde" width="100%" height="550" frameborder="0" style="border:0;" allowfullscreen=""></iframe>',
            'hotbox_id'  => 2,
            'status'     => 1
        ] );

        DB::table( 'pages' )->insert( [
            'slug'       => 'reservierung',
            'title'      => 'Gerne reservieren wir einen Tisch für Sie!',
            'menu_title' => 'Reservierung',
            'content'    => 'Rufen Sie dazu einfach an unter 06126 5049523 oder schreiben Sie eine Whatsapp an 0160 7744836.<br>
                    Reservierungen per Mail bekommen wir möglicherweise zu spät mit, weil wir viel zu sehr mit kochen beschäftigt sind :)

                    <div class="row mt-3">
                        <div class="col-lg-4">
                            <img class="img-thumbnail mb-3" src="/storage/images/IMG_20190824_211040-01_1567012561.jpeg">
                        </div>
                        <div class="col-lg-4">
                            <img class="img-thumbnail mb-3" src="/storage/images/IMG_20190824_211212-01_1567012791.jpeg">
                        </div>
                        <div class="col-lg-4">
                            <img class="img-thumbnail mb-3" src="/storage/images/IMG_20190824_215835-01_1567012807.jpeg">
                        </div>',
            'hotbox_id'  => 3,
            'status'     => 1
        ] );

        DB::table( 'pages' )->insert( [
            'slug'       => 'catering',
            'title'      => 'Catering',
            'menu_title' => 'Catering',
            'content'    => '<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                          <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                          <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>',
            'status'     => 1
        ] );

        DB::table( 'pages' )->insert( [
            'slug'       => 'speisekarte',
            'title'      => 'Speisekarte',
            'menu_title' => 'Speisekarte',
            'content'    => '<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>',
            'hotbox_id'  => 2,
            'status'     => 1
        ] );

        DB::table( 'pages' )->insert( [
            'slug'       => 'impressum',
            'title'      => 'Impressum',
            'menu_title' => 'Impressum',
            'content'    => 'lalala',
            'status'     => 1
        ] );

        DB::table( 'pages' )->insert( [
            'slug'       => 'datenschutz',
            'title'      => 'Datenschutz',
            'menu_title' => 'Datenschutz',
            'content'    => 'lalala',
            'status'     => 1
        ] );

        DB::table( 'pages' )->insert( [
            'slug'       => 'kontakt',
            'title'      => 'Kontakt',
            'menu_title' => 'Kontakt',
            'content'    => 'lalala',
            'status'     => 1
        ] );
    }
}
