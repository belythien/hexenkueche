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
            'content'    => '<h2>Über uns</h2>
                            <p>Wir haben unsere Leidenschaft für Essen nicht erst seit der Eröffnung dieses Lokals im März 2019 entdeckt. Die Hexenküche ist die “Heimat des Veggiemobil”, das die Gaumen von Menschen über die Grenzen Hessens hinaus verwöhnt und eine Bereicherung für jeden darstellt, der ehrliche und vollwertige Alternativen zu fleischlastigen und fettigen Fertiggerichten sucht.</p>
                            <h2>Speisen</h2>
                            <p>Auch wenn die Karte auf den ersten Blick nicht danach aussieht: <br>
                            Sie werden bei uns keine fertigen Saucen und Dressings finden! Darüber hinaus haben wir überwiegend Speisen im Programm, die hier in dieser Küche selbst gemacht sind - wie zum Beispiel unsere Falafel sowie unseren Champion- und Power-Burger. Die Burgerbrötchen, auch Buns genannt, stammen von einer befreundeten Bäckerei, die diese exklusiv mit uns entwickelt hat und uns ständig mit frischem Nachschub versorgt.</p>
                            <h2>Einfach aber gut</h2>
                            <p>Das bedeutet als Konsequenz für Sie, dass keine künstlichen Aromen oder Geschmacksverstärker enthalten und die Anzahl der Allergene auf ein Minimum reduziert sind. Jedoch kann es unter Umständen mal etwas länger dauern, da bei uns mit frischen Lebensmitteln gearbeitet wird! Wir bitten in diesem Fall um Ihr Verständnis!</p>
                            <h2>Mehr als nur Trinken</h2>
                            <p>Auch bei unseren Getränken haben wir uns etwas einfallen lassen! So sind unsere Weine ausschließlich bio und vegan, d. h. mineralisch geklärt. Die mit einem * versehenen Weine beziehen wir vom Weingut Gerald Fürnkranz aus dem österreichischen Weinviertel. Sie wurden mehrfach prämiert und besitzen einen Histamingehalt von unter 0,1 mg pro Liter.<br>
                            Auch bei unseren restlichen Getränken haben wir darauf geachtet, Bio-Produkte zu verwenden, wenn möglich aus fairem Anbau und in Glas-Flaschen statt in der üblichen PET.<br>
                            </p>
                            <p>Wir freuen uns auf Ihren Besuch!</p>
                            <p>Ihre Hexenküche</p>',
            'hotbox_id'  => 1,
            'status'     => 1
        ] );

        DB::table( 'pages' )->insert( [
            'slug'       => '404',
            'title'      => 'Au weia!',
            'menu_title' => 'Seite nicht gefunden',
            'content'    => 'Diese Seite existiert nicht...<br><br><br><img src="/img/404.png" width="50%" class="float-right">',
            'status'     => 1
        ] );

        DB::table( 'pages' )->insert( [
            'slug'       => 'anfahrt',
            'title'      => 'So finden Sie uns',
            'menu_title' => 'Anfahrt',
            'content'    => '<p>Du findest uns in der <br>
                    Goethestraße 2<br>
                    65510 Idstein-Wörsdorf
                    </p>
                    <strong style="color:red">TODO: Iframe fliegt beim Bearbeiten immer raus!!!</strong>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2551.58894305102!2d8.253570615842166!3d50.24358381012987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47bdb7d31032fd17%3A0x3391e97b21da569b!2sHexenk%C3%BCche!5e0!3m2!1sde!2sde!4v1566656329419!5m2!1sde!2sde" width="100%" height="550" frameborder="0" style="border:0;" allowfullscreen=""></iframe>',
            'hotbox_id'  => 1,
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
            'status'     => 1
        ] );

        DB::table( 'pages' )->insert( [
            'slug'       => 'catering',
            'title'      => 'Catering',
            'menu_title' => 'Catering',
            'content'    => '<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                          <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                          <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>',
            'hotbox_id'  => 2,
            'status'     => 1
        ] );

        DB::table( 'pages' )->insert( [
            'slug'       => 'speisekarte',
            'title'      => 'Speisekarte',
            'menu_title' => 'Speisekarte',
            'content'    => '<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>',
            'status'     => 1
        ] );

        DB::table( 'pages' )->insert( [
            'slug'       => 'impressum',
            'title'      => 'Impressum',
            'menu_title' => 'Impressum',
            'content'    => '<p>Angaben gemäß § 5 TMG:</p>
<p>Hexenküche<br />
Birgit Jung
Goethestraße 2<br />
65510 Idstein</p>
<h3>Kontakt:</h3>
<p>E-Mail: <a href="mailto:hexenkueche1@yahoo.com">hexenkueche1@yahoo.com</a></p>
<h2>Haftungsausschluss:</h2>
<h3>Haftung für Inhalte</h3>
<p>Die Inhalte unserer Seiten wurden mit größter Sorgfalt erstellt. Für die Richtigkeit, Vollständigkeit und Aktualität der Inhalte können wir jedoch keine Gewähr übernehmen. Als Diensteanbieter sind wir gemäß § 7 Abs.1 TMG für eigene Inhalte auf diesen Seiten nach den allgemeinen Gesetzen verantwortlich. Nach §§ 8 bis 10 TMG sind wir als Diensteanbieter jedoch nicht verpflichtet, übermittelte oder gespeicherte fremde Informationen zu überwachen oder nach Umständen zu forschen, die auf eine rechtswidrige Tätigkeit hinweisen. Verpflichtungen zur Entfernung oder Sperrung der Nutzung von Informationen nach den allgemeinen Gesetzen bleiben hiervon unberührt. Eine diesbezügliche Haftung ist jedoch erst ab dem Zeitpunkt der Kenntnis einer konkreten Rechtsverletzung möglich. Bei Bekanntwerden von entsprechenden Rechtsverletzungen werden wir diese Inhalte umgehend entfernen.</p>
<h3>Haftung für Links</h3>
<p>Unser Angebot enthält Links zu externen Webseiten Dritter, auf deren Inhalte wir keinen Einfluss haben. Deshalb können für diese fremden Inhalte auch keine Gewähr übernehmen. Für die Inhalte der verlinkten Seiten ist stets der jeweilige Anbieter oder Betreiber der Seiten verantwortlich. Die verlinkten Seiten wurden zum Zeitpunkt der Verlinkung auf mögliche Rechtsverstöße überprüft. Rechtswidrige Inhalte waren zum Zeitpunkt der Verlinkung nicht erkennbar. Eine permanente inhaltliche Kontrolle der verlinkten Seiten ist jedoch ohne konkrete Anhaltspunkte einer Rechtsverletzung nicht zumutbar. Bei Bekanntwerden von Rechtsverletzungen werden wir derartige Links umgehend entfernen.</p>
<h3>Urheberrecht</h3>
<p>Die durch die Seitenbetreiber erstellten Inhalte und Werke auf diesen Seiten unterliegen dem deutschen Urheberrecht. Die Vervielfältigung, Bearbeitung, Verbreitung und<br />
jede Art der Verwertung außerhalb der Grenzen des Urheberrechtes bedürfen der schriftlichen Zustimmung des jeweiligen Autors bzw. Erstellers. Downloads und Kopien dieser Seite sind nur für den privaten, nicht kommerziellen Gebrauch gestattet. Soweit die Inhalte auf dieser Seite nicht vom Betreiber erstellt wurden, werden die Urheberrechte Dritter beachtet. Insbesondere werden Inhalte Dritter als solche gekennzeichnet. Solltest du trotzdem auf eine Urheberrechtsverletzung aufmerksam werden, bitte ich um einen entsprechenden Hinweis. Bei Bekanntwerden von Rechtsverletzungen werden wir derartige Inhalte umgehend entfernen.</p>',
            'status'     => 1
        ] );

        DB::table( 'pages' )->insert( [
            'slug'       => 'datenschutz',
            'title'      => 'Datenschutz',
            'menu_title' => 'Datenschutz',
            'content'    => '<p>Wir freuen uns sehr über Ihr Interesse an unserem Restaurant. Eine Nutzung der Internetseiten der Hexenküche ist grundsätzlich ohne jede Angabe personenbezogener Daten möglich. Sofern eine betroffene Person besondere Services unseres Restaurants über unsere Internetseite in Anspruch nehmen möchte, könnte jedoch eine Verarbeitung personenbezogener Daten erforderlich werden. Ist die Verarbeitung personenbezogener Daten erforderlich und besteht für eine solche Verarbeitung keine gesetzliche Grundlage, holen wir generell eine Einwilligung der betroffenen Person ein.</p>
<p>Die Verarbeitung personenbezogener Daten, beispielsweise des Namens, der Anschrift, E-Mail-Adresse oder Telefonnummer einer betroffenen Person, erfolgt stets im Einklang mit der Datenschutz-Grundverordnung und in Übereinstimmung mit den für die Hexenküche geltenden landesspezifischen Datenschutzbestimmungen. Mittels dieser Datenschutzerklärung möchte unser Ensemble die Öffentlichkeit über Art, Umfang und Zweck der von uns erhobenen, genutzten und verarbeiteten personenbezogenen Daten informieren. Ferner werden betroffene Personen mittels dieser Datenschutzerklärung über die ihnen zustehenden Rechte aufgeklärt.</p>
<p>Die Hexenküche hat als für die Verarbeitung Verantwortlicher zahlreiche technische und organisatorische Maßnahmen umgesetzt, um einen möglichst lückenlosen Schutz der über diese Internetseite verarbeiteten personenbezogenen Daten sicherzustellen. Dennoch können internetbasierte Datenübertragungen grundsätzlich Sicherheitslücken aufweisen, sodass ein absoluter Schutz nicht gewährleistet werden kann. Aus diesem Grund steht es jeder betroffenen Person frei, personenbezogene Daten auch auf alternativen Wegen, beispielsweise telefonisch, an uns zu übermitteln.</p>
<h4>1. Begriffsbestimmungen</h4>
<p>Die Datenschutzerklärung beruht auf den Begrifflichkeiten, die durch den Europäischen Richtlinien- und Verordnungsgeber beim Erlass der Datenschutz-Grundverordnung (DS-GVO) verwendet wurden. Unsere Datenschutzerklärung soll für die Öffentlichkeit einfach lesbar und verständlich sein. Um dies zu gewährleisten, möchten wir vorab die verwendeten Begrifflichkeiten erläutern.</p>
<p>Wir verwenden in dieser Datenschutzerklärung unter anderem die folgenden Begriffe:</p>
<ul style="list-style: none;">
<li>
<h4>a)    personenbezogene Daten</h4>
<p>Personenbezogene Daten sind alle Informationen, die sich auf eine identifizierte oder identifizierbare natürliche Person (im Folgenden „betroffene Person“) beziehen. Als identifizierbar wird eine natürliche Person angesehen, die direkt oder indirekt, insbesondere mittels Zuordnung zu einer Kennung wie einem Namen, zu einer Kennnummer, zu Standortdaten, zu einer Online-Kennung oder zu einem oder mehreren besonderen Merkmalen, die Ausdruck der physischen, physiologischen, genetischen, psychischen, wirtschaftlichen, kulturellen oder sozialen Identität dieser natürlichen Person sind, identifiziert werden kann.</li>
<li>
<h4>b)    betroffene Person</h4>
<p>Betroffene Person ist jede identifizierte oder identifizierbare natürliche Person, deren personenbezogene Daten von dem für die Verarbeitung Verantwortlichen verarbeitet werden.</li>
<li>
<h4>c)    Verarbeitung</h4>
<p>Verarbeitung ist jeder mit oder ohne Hilfe automatisierter Verfahren ausgeführte Vorgang oder jede solche Vorgangsreihe im Zusammenhang mit personenbezogenen Daten wie das Erheben, das Erfassen, die Organisation, das Ordnen, die Speicherung, die Anpassung oder Veränderung, das Auslesen, das Abfragen, die Verwendung, die Offenlegung durch Übermittlung, Verbreitung oder eine andere Form der Bereitstellung, den Abgleich oder die Verknüpfung, die Einschränkung, das Löschen oder die Vernichtung.</li>
<li>
<h4>d)    Einschränkung der Verarbeitung</h4>
<p>Einschränkung der Verarbeitung ist die Markierung gespeicherter personenbezogener Daten mit dem Ziel, ihre künftige Verarbeitung einzuschränken.</li>
<li>
<h4>e)    Profiling</h4>
<p>Profiling ist jede Art der automatisierten Verarbeitung personenbezogener Daten, die darin besteht, dass diese personenbezogenen Daten verwendet werden, um bestimmte persönliche Aspekte, die sich auf eine natürliche Person beziehen, zu bewerten, insbesondere, um Aspekte bezüglich Arbeitsleistung, wirtschaftlicher Lage, Gesundheit, persönlicher Vorlieben, Interessen, Zuverlässigkeit, Verhalten, Aufenthaltsort oder Ortswechsel dieser natürlichen Person zu analysieren oder vorherzusagen.</li>
<li>
<h4>f)     Pseudonymisierung</h4>
<p>Pseudonymisierung ist die Verarbeitung personenbezogener Daten in einer Weise, auf welche die personenbezogenen Daten ohne Hinzuziehung zusätzlicher Informationen nicht mehr einer spezifischen betroffenen Person zugeordnet werden können, sofern diese zusätzlichen Informationen gesondert aufbewahrt werden und technischen und organisatorischen Maßnahmen unterliegen, die gewährleisten, dass die personenbezogenen Daten nicht einer identifizierten oder identifizierbaren natürlichen Person zugewiesen werden.</li>
<li>
<h4>g)    Verantwortlicher oder für die Verarbeitung Verantwortlicher</h4>
<p>Verantwortlicher oder für die Verarbeitung Verantwortlicher ist die natürliche oder juristische Person, Behörde, Einrichtung oder andere Stelle, die allein oder gemeinsam mit anderen über die Zwecke und Mittel der Verarbeitung von personenbezogenen Daten entscheidet. Sind die Zwecke und Mittel dieser Verarbeitung durch das Unionsrecht oder das Recht der Mitgliedstaaten vorgegeben, so kann der Verantwortliche beziehungsweise können die bestimmten Kriterien seiner Benennung nach dem Unionsrecht oder dem Recht der Mitgliedstaaten vorgesehen werden.</li>
<li>
<h4>h)    Auftragsverarbeiter</h4>
<p>Auftragsverarbeiter ist eine natürliche oder juristische Person, Behörde, Einrichtung oder andere Stelle, die personenbezogene Daten im Auftrag des Verantwortlichen verarbeitet.</li>
<li>
<h4>i)      Empfänger</h4>
<p>Empfänger ist eine natürliche oder juristische Person, Behörde, Einrichtung oder andere Stelle, der personenbezogene Daten offengelegt werden, unabhängig davon, ob es sich bei ihr um einen Dritten handelt oder nicht. Behörden, die im Rahmen eines bestimmten Untersuchungsauftrags nach dem Unionsrecht oder dem Recht der Mitgliedstaaten möglicherweise personenbezogene Daten erhalten, gelten jedoch nicht als Empfänger.</li>
<li>
<h4>j)      Dritter</h4>
<p>Dritter ist eine natürliche oder juristische Person, Behörde, Einrichtung oder andere Stelle außer der betroffenen Person, dem Verantwortlichen, dem Auftragsverarbeiter und den Personen, die unter der unmittelbaren Verantwortung des Verantwortlichen oder des Auftragsverarbeiters befugt sind, die personenbezogenen Daten zu verarbeiten.</li>
<li>
<h4>k)    Einwilligung</h4>
<p>Einwilligung ist jede von der betroffenen Person freiwillig für den bestimmten Fall in informierter Weise und unmissverständlich abgegebene Willensbekundung in Form einer Erklärung oder einer sonstigen eindeutigen bestätigenden Handlung, mit der die betroffene Person zu verstehen gibt, dass sie mit der Verarbeitung der sie betreffenden personenbezogenen Daten einverstanden ist.</li>
</ul>
<h4>2. Name und Anschrift des für die Verarbeitung Verantwortlichen</h4>
<p>Verantwortlicher im Sinne der Datenschutz-Grundverordnung, sonstiger in den Mitgliedstaaten der Europäischen Union geltenden Datenschutzgesetze und anderer Bestimmungen mit datenschutzrechtlichem Charakter ist die:</p>
<p>Hexenküche</p>
<p>Birgit Jung<br />
Goethestraße 2<br />
65510 Idstein<br />
Deutschland<br />
Tel.: 06126 5049523<br />
E-Mail: hexenkueche1@yahoo.com</p>
<p>Website: hexenküche.org</p>
<h4>3. Cookies</h4>
<p>Die Internetseite der Hexenküche verwenden Cookies. Cookies sind Textdateien, welche über einen Internetbrowser auf einem Computersystem abgelegt und gespeichert werden.</p>
<p>Zahlreiche Internetseiten und Server verwenden Cookies. Viele Cookies enthalten eine sogenannte Cookie-ID. Eine Cookie-ID ist eine eindeutige Kennung des Cookies. Sie besteht aus einer Zeichenfolge, durch welche Internetseiten und Server dem konkreten Internetbrowser zugeordnet werden können, in dem das Cookie gespeichert wurde. Dies ermöglicht es den besuchten Internetseiten und Servern, den individuellen Browser der betroffenen Person von anderen Internetbrowsern, die andere Cookies enthalten, zu unterscheiden. Ein bestimmter Internetbrowser kann über die eindeutige Cookie-ID wiedererkannt und identifiziert werden.</p>
<p>Durch den Einsatz von Cookies kann die Hexenküche den Nutzern dieser Internetseite nutzerfreundlichere Services bereitstellen, die ohne die Cookie-Setzung nicht möglich wären.</p>
<p>Mittels eines Cookies können die Informationen und Angebote auf unserer Internetseite im Sinne des Benutzers optimiert werden. Cookies ermöglichen uns, wie bereits erwähnt, die Benutzer unserer Internetseite wiederzuerkennen. Zweck dieser Wiedererkennung ist es, den Nutzern die Verwendung unserer Internetseite zu erleichtern. Der Benutzer einer Internetseite, die Cookies verwendet, muss beispielsweise nicht bei jedem Besuch der Internetseite erneut seine Zugangsdaten eingeben, weil dies von der Internetseite und dem auf dem Computersystem des Benutzers abgelegten Cookie übernommen wird. Ein weiteres Beispiel ist das Cookie eines Warenkorbes im Online-Shop. Der Online-Shop merkt sich die Artikel, die ein Kunde in den virtuellen Warenkorb gelegt hat, über ein Cookie.</p>
<p>Die betroffene Person kann die Setzung von Cookies durch unsere Internetseite jederzeit mittels einer entsprechenden Einstellung des genutzten Internetbrowsers verhindern und damit der Setzung von Cookies dauerhaft widersprechen. Ferner können bereits gesetzte Cookies jederzeit über einen Internetbrowser oder andere Softwareprogramme gelöscht werden. Dies ist in allen gängigen Internetbrowsern möglich. Deaktiviert die betroffene Person die Setzung von Cookies in dem genutzten Internetbrowser, sind unter Umständen nicht alle Funktionen unserer Internetseite vollumfänglich nutzbar.</p>
<p><strong>Verwendetete Cookies</strong></p>
<p><em>hexenkuche_session</em><br />
Dieses Cookie enthält die eindeutige ID der sog. <em>Session</em>. Es wird im EXC-Doodle dafür verwendet, den User auch noch nach dem Wechsel zwischen einzelnen Seiten wieder zu erkennen.<br />
Das Cookie wird beim Schließen der Browser-Sitzung gelöscht.</p>
<h4>4. Erfassung von allgemeinen Daten und Informationen</h4>
<p>Die Internetseite der Hexenküche erfasst mit jedem Aufruf der Internetseite durch eine betroffene Person oder ein automatisiertes System eine Reihe von allgemeinen Daten und Informationen. Diese allgemeinen Daten und Informationen werden in den Logfiles des Servers gespeichert. Erfasst werden können die (1) verwendeten Browsertypen und Versionen, (2) das vom zugreifenden System verwendete Betriebssystem, (3) die Internetseite, von welcher ein zugreifendes System auf unsere Internetseite gelangt (sogenannte Referrer), (4) die Unterwebseiten, welche über ein zugreifendes System auf unserer Internetseite angesteuert werden, (5) das Datum und die Uhrzeit eines Zugriffs auf die Internetseite, (6) eine Internet-Protokoll-Adresse (IP-Adresse), (7) der Internet-Service-Provider des zugreifenden Systems und (8) sonstige ähnliche Daten und Informationen, die der Gefahrenabwehr im Falle von Angriffen auf unsere informationstechnologischen Systeme dienen.</p>
<p>Bei der Nutzung dieser allgemeinen Daten und Informationen zieht die Hexenküche keine Rückschlüsse auf die betroffene Person. Diese Informationen werden vielmehr benötigt, um (1) die Inhalte unserer Internetseite korrekt auszuliefern, (2) die Inhalte unserer Internetseite sowie die Werbung für diese zu optimieren, (3) die dauerhafte Funktionsfähigkeit unserer informationstechnologischen Systeme und der Technik unserer Internetseite zu gewährleisten sowie (4) um Strafverfolgungsbehörden im Falle eines Cyberangriffes die zur Strafverfolgung notwendigen Informationen bereitzustellen. Diese anonym erhobenen Daten und Informationen werden durch die Hexenküche daher einerseits statistisch und ferner mit dem Ziel ausgewertet, den Datenschutz und die Datensicherheit in unserem Ensemble zu erhöhen, um letztlich ein optimales Schutzniveau für die von uns verarbeiteten personenbezogenen Daten sicherzustellen. Die anonymen Daten der Server-Logfiles werden getrennt von allen durch eine betroffene Person angegebenen personenbezogenen Daten gespeichert.</p>
<h4>5. Registrierung auf unserer Internetseite</h4>
<p>Die betroffene Person hat die Möglichkeit, sich auf der Internetseite des für die Verarbeitung Verantwortlichen unter Angabe von personenbezogenen Daten zu registrieren. Welche personenbezogenen Daten dabei an den für die Verarbeitung Verantwortlichen übermittelt werden, ergibt sich aus der jeweiligen Eingabemaske, die für die Registrierung verwendet wird. Die von der betroffenen Person eingegebenen personenbezogenen Daten werden ausschließlich für die interne Verwendung bei dem für die Verarbeitung Verantwortlichen und für eigene Zwecke erhoben und gespeichert. Der für die Verarbeitung Verantwortliche kann die Weitergabe an einen oder mehrere Auftragsverarbeiter, beispielsweise einen Paketdienstleister, veranlassen, der die personenbezogenen Daten ebenfalls ausschließlich für eine interne Verwendung, die dem für die Verarbeitung Verantwortlichen zuzurechnen ist, nutzt.</p>
<p>Durch eine Registrierung auf der Internetseite des für die Verarbeitung Verantwortlichen wird ferner die vom Internet-Service-Provider (ISP) der betroffenen Person vergebene IP-Adresse, das Datum sowie die Uhrzeit der Registrierung gespeichert. Die Speicherung dieser Daten erfolgt vor dem Hintergrund, dass nur so der Missbrauch unserer Dienste verhindert werden kann, und diese Daten im Bedarfsfall ermöglichen, begangene Straftaten aufzuklären. Insofern ist die Speicherung dieser Daten zur Absicherung des für die Verarbeitung Verantwortlichen erforderlich. Eine Weitergabe dieser Daten an Dritte erfolgt grundsätzlich nicht, sofern keine gesetzliche Pflicht zur Weitergabe besteht oder die Weitergabe der Strafverfolgung dient.</p>
<p>Die Registrierung der betroffenen Person unter freiwilliger Angabe personenbezogener Daten dient dem für die Verarbeitung Verantwortlichen dazu, der betroffenen Person Inhalte oder Leistungen anzubieten, die aufgrund der Natur der Sache nur registrierten Benutzern angeboten werden können. Registrierten Personen steht die Möglichkeit frei, die bei der Registrierung angegebenen personenbezogenen Daten jederzeit abzuändern oder vollständig aus dem Datenbestand des für die Verarbeitung Verantwortlichen löschen zu lassen.</p>
<p>Der für die Verarbeitung Verantwortliche erteilt jeder betroffenen Person jederzeit auf Anfrage Auskunft darüber, welche personenbezogenen Daten über die betroffene Person gespeichert sind. Ferner berichtigt oder löscht der für die Verarbeitung Verantwortliche personenbezogene Daten auf Wunsch oder Hinweis der betroffenen Person, soweit dem keine gesetzlichen Aufbewahrungspflichten entgegenstehen. Die Gesamtheit der Mitarbeiter des für die Verarbeitung Verantwortlichen stehen der betroffenen Person in diesem Zusammenhang als Ansprechpartner zur Verfügung.</p>
<h4>8. Kontaktmöglichkeit über die Internetseite</h4>
<p>Die Internetseite der Hexenküche enthält aufgrund von gesetzlichen Vorschriften Angaben, die eine schnelle elektronische Kontaktaufnahme zu unserem Restaurant sowie eine unmittelbare Kommunikation mit uns ermöglichen, was ebenfalls eine allgemeine Adresse der sogenannten elektronischen Post (E-Mail-Adresse) umfasst. Sofern eine betroffene Person per E-Mail oder über ein Kontaktformular den Kontakt mit dem für die Verarbeitung Verantwortlichen aufnimmt, werden die von der betroffenen Person übermittelten personenbezogenen Daten automatisch gespeichert. Solche auf freiwilliger Basis von einer betroffenen Person an den für die Verarbeitung Verantwortlichen übermittelten personenbezogenen Daten werden für Zwecke der Bearbeitung oder der Kontaktaufnahme zur betroffenen Person gespeichert. Es erfolgt keine Weitergabe dieser personenbezogenen Daten an Dritte.</p>
<h4>9. Routinemäßige Löschung und Sperrung von personenbezogenen Daten</h4>
<p>Der für die Verarbeitung Verantwortliche verarbeitet und speichert personenbezogene Daten der betroffenen Person nur für den Zeitraum, der zur Erreichung des Speicherungszwecks erforderlich ist oder sofern dies durch den Europäischen Richtlinien- und Verordnungsgeber oder einen anderen Gesetzgeber in Gesetzen oder Vorschriften, welchen der für die Verarbeitung Verantwortliche unterliegt, vorgesehen wurde.</p>
<p>Entfällt der Speicherungszweck oder läuft eine vom Europäischen Richtlinien- und Verordnungsgeber oder einem anderen zuständigen Gesetzgeber vorgeschriebene Speicherfrist ab, werden die personenbezogenen Daten routinemäßig und entsprechend den gesetzlichen Vorschriften gesperrt oder gelöscht.</p>
<h4>10. Rechte der betroffenen Person</h4>
<ul style="list-style: none;">
<li>
<h4>a)    Recht auf Bestätigung</h4>
<p>Jede betroffene Person hat das vom Europäischen Richtlinien- und Verordnungsgeber eingeräumte Recht, von dem für die Verarbeitung Verantwortlichen eine Bestätigung darüber zu verlangen, ob sie betreffende personenbezogene Daten verarbeitet werden. Möchte eine betroffene Person dieses Bestätigungsrecht in Anspruch nehmen, kann sie sich hierzu jederzeit an einen Mitarbeiter des für die Verarbeitung Verantwortlichen wenden.</li>
<li>
<h4>b)    Recht auf Auskunft</h4>
<p>Jede von der Verarbeitung personenbezogener Daten betroffene Person hat das vom Europäischen Richtlinien- und Verordnungsgeber gewährte Recht, jederzeit von dem für die Verarbeitung Verantwortlichen unentgeltliche Auskunft über die zu seiner Person gespeicherten personenbezogenen Daten und eine Kopie dieser Auskunft zu erhalten. Ferner hat der Europäische Richtlinien- und Verordnungsgeber der betroffenen Person Auskunft über folgende Informationen zugestanden:</p>
<ul style="list-style: none;">
<li>die Verarbeitungszwecke</li>
<li>die Kategorien personenbezogener Daten, die verarbeitet werden</li>
<li>die Empfänger oder Kategorien von Empfängern, gegenüber denen die personenbezogenen Daten offengelegt worden sind oder noch offengelegt werden, insbesondere bei Empfängern in Drittländern oder bei internationalen Organisationen</li>
<li>falls möglich die geplante Dauer, für die die personenbezogenen Daten gespeichert werden, oder, falls dies nicht möglich ist, die Kriterien für die Festlegung dieser Dauer</li>
<li>das Bestehen eines Rechts auf Berichtigung oder Löschung der sie betreffenden personenbezogenen Daten oder auf Einschränkung der Verarbeitung durch den Verantwortlichen oder eines Widerspruchsrechts gegen diese Verarbeitung</li>
<li>das Bestehen eines Beschwerderechts bei einer Aufsichtsbehörde</li>
<li>wenn die personenbezogenen Daten nicht bei der betroffenen Person erhoben werden: Alle verfügbaren Informationen über die Herkunft der Daten</li>
<li>das Bestehen einer automatisierten Entscheidungsfindung einschließlich Profiling gemäß Artikel 22 Abs.1 und 4 DS-GVO und — zumindest in diesen Fällen — aussagekräftige Informationen über die involvierte Logik sowie die Tragweite und die angestrebten Auswirkungen einer derartigen Verarbeitung für die betroffene Person</li>
</ul>
<p>Ferner steht der betroffenen Person ein Auskunftsrecht darüber zu, ob personenbezogene Daten an ein Drittland oder an eine internationale Organisation übermittelt wurden. Sofern dies der Fall ist, so steht der betroffenen Person im Übrigen das Recht zu, Auskunft über die geeigneten Garantien im Zusammenhang mit der Übermittlung zu erhalten.</p>
<p>Möchte eine betroffene Person dieses Auskunftsrecht in Anspruch nehmen, kann sie sich hierzu jederzeit an einen Mitarbeiter des für die Verarbeitung Verantwortlichen wenden.</li>
<li>
<h4>c)    Recht auf Berichtigung</h4>
<p>Jede von der Verarbeitung personenbezogener Daten betroffene Person hat das vom Europäischen Richtlinien- und Verordnungsgeber gewährte Recht, die unverzügliche Berichtigung sie betreffender unrichtiger personenbezogener Daten zu verlangen. Ferner steht der betroffenen Person das Recht zu, unter Berücksichtigung der Zwecke der Verarbeitung, die Vervollständigung unvollständiger personenbezogener Daten — auch mittels einer ergänzenden Erklärung — zu verlangen.</p>
<p>Möchte eine betroffene Person dieses Berichtigungsrecht in Anspruch nehmen, kann sie sich hierzu jederzeit an einen Mitarbeiter des für die Verarbeitung Verantwortlichen wenden.</li>
<li>
<h4>d)    Recht auf Löschung (Recht auf Vergessen werden)</h4>
<p>Jede von der Verarbeitung personenbezogener Daten betroffene Person hat das vom Europäischen Richtlinien- und Verordnungsgeber gewährte Recht, von dem Verantwortlichen zu verlangen, dass die sie betreffenden personenbezogenen Daten unverzüglich gelöscht werden, sofern einer der folgenden Gründe zutrifft und soweit die Verarbeitung nicht erforderlich ist:</p>
<ul style="list-style: none;">
<li>Die personenbezogenen Daten wurden für solche Zwecke erhoben oder auf sonstige Weise verarbeitet, für welche sie nicht mehr notwendig sind.</li>
<li>Die betroffene Person widerruft ihre Einwilligung, auf die sich die Verarbeitung gemäß Art. 6 Abs. 1 Buchstabe a DS-GVO oder Art. 9 Abs. 2 Buchstabe a DS-GVO stützte, und es fehlt an einer anderweitigen Rechtsgrundlage für die Verarbeitung.</li>
<li>Die betroffene Person legt gemäß Art. 21 Abs. 1 DS-GVO Widerspruch gegen die Verarbeitung ein, und es liegen keine vorrangigen berechtigten Gründe für die Verarbeitung vor, oder die betroffene Person legt gemäß Art. 21 Abs. 2 DS-GVO Widerspruch gegen die Verarbeitung ein.</li>
<li>Die personenbezogenen Daten wurden unrechtmäßig verarbeitet.</li>
<li>Die Löschung der personenbezogenen Daten ist zur Erfüllung einer rechtlichen Verpflichtung nach dem Unionsrecht oder dem Recht der Mitgliedstaaten erforderlich, dem der Verantwortliche unterliegt.</li>
<li>Die personenbezogenen Daten wurden in Bezug auf angebotene Dienste der Informationsgesellschaft gemäß Art. 8 Abs. 1 DS-GVO erhoben.</li>
</ul>
<p>Sofern einer der oben genannten Gründe zutrifft und eine betroffene Person die Löschung von personenbezogenen Daten, die bei der Hexenküche gespeichert sind, veranlassen möchte, kann sie sich hierzu jederzeit an den Betreiber der Website wenden. Dieser wird veranlassen, dass dem Löschverlangen unverzüglich nachgekommen wird.</p>
<p>Wurden die personenbezogenen Daten durch die Hexenküche öffentlich gemacht und ist unser Restaurant als Verantwortlicher gemäß Art. 17 Abs. 1 DS-GVO zur Löschung der personenbezogenen Daten verpflichtet, so trifft die Hexenküche unter Berücksichtigung der verfügbaren Technologie und der Implementierungskosten angemessene Maßnahmen, auch technischer Art, um andere für die Datenverarbeitung Verantwortliche, welche die veröffentlichten personenbezogenen Daten verarbeiten, darüber in Kenntnis zu setzen, dass die betroffene Person von diesen anderen für die Datenverarbeitung Verantwortlichen die Löschung sämtlicher Links zu diesen personenbezogenen Daten oder von Kopien oder Replikationen dieser personenbezogenen Daten verlangt hat, soweit die Verarbeitung nicht erforderlich ist. Der Mitarbeiter der Hexenküche wird im Einzelfall das Notwendige veranlassen.</li>
<li>
<h4>e)    Recht auf Einschränkung der Verarbeitung</h4>
<p>Jede von der Verarbeitung personenbezogener Daten betroffene Person hat das vom Europäischen Richtlinien- und Verordnungsgeber gewährte Recht, von dem Verantwortlichen die Einschränkung der Verarbeitung zu verlangen, wenn eine der folgenden Voraussetzungen gegeben ist:</p>
<ul style="list-style: none;">
<li>Die Richtigkeit der personenbezogenen Daten wird von der betroffenen Person bestritten, und zwar für eine Dauer, die es dem Verantwortlichen ermöglicht, die Richtigkeit der personenbezogenen Daten zu überprüfen.</li>
<li>Die Verarbeitung ist unrechtmäßig, die betroffene Person lehnt die Löschung der personenbezogenen Daten ab und verlangt stattdessen die Einschränkung der Nutzung der personenbezogenen Daten.</li>
<li>Der Verantwortliche benötigt die personenbezogenen Daten für die Zwecke der Verarbeitung nicht länger, die betroffene Person benötigt sie jedoch zur Geltendmachung, Ausübung oder Verteidigung von Rechtsansprüchen.</li>
<li>Die betroffene Person hat Widerspruch gegen die Verarbeitung gem. Art. 21 Abs. 1 DS-GVO eingelegt und es steht noch nicht fest, ob die berechtigten Gründe des Verantwortlichen gegenüber denen der betroffenen Person überwiegen.</li>
</ul>
<p>Sofern eine der oben genannten Voraussetzungen gegeben ist und eine betroffene Person die Einschränkung von personenbezogenen Daten, die bei der Hexenküche gespeichert sind, verlangen möchte, kann sie sich hierzu jederzeit an einen Mitarbeiter des für die Verarbeitung Verantwortlichen wenden. Der Mitarbeiter der Hexenküche wird die Einschränkung der Verarbeitung veranlassen.</li>
<li>
<h4>f)     Recht auf Datenübertragbarkeit</h4>
<p>Jede von der Verarbeitung personenbezogener Daten betroffene Person hat das vom Europäischen Richtlinien- und Verordnungsgeber gewährte Recht, die sie betreffenden personenbezogenen Daten, welche durch die betroffene Person einem Verantwortlichen bereitgestellt wurden, in einem strukturierten, gängigen und maschinenlesbaren Format zu erhalten. Sie hat außerdem das Recht, diese Daten einem anderen Verantwortlichen ohne Behinderung durch den Verantwortlichen, dem die personenbezogenen Daten bereitgestellt wurden, zu übermitteln, sofern die Verarbeitung auf der Einwilligung gemäß Art. 6 Abs. 1 Buchstabe a DS-GVO oder Art. 9 Abs. 2 Buchstabe a DS-GVO oder auf einem Vertrag gemäß Art. 6 Abs. 1 Buchstabe b DS-GVO beruht und die Verarbeitung mithilfe automatisierter Verfahren erfolgt, sofern die Verarbeitung nicht für die Wahrnehmung einer Aufgabe erforderlich ist, die im öffentlichen Interesse liegt oder in Ausübung öffentlicher Gewalt erfolgt, welche dem Verantwortlichen übertragen wurde.</p>
<p>Ferner hat die betroffene Person bei der Ausübung ihres Rechts auf Datenübertragbarkeit gemäß Art. 20 Abs. 1 DS-GVO das Recht, zu erwirken, dass die personenbezogenen Daten direkt von einem Verantwortlichen an einen anderen Verantwortlichen übermittelt werden, soweit dies technisch machbar ist und sofern hiervon nicht die Rechte und Freiheiten anderer Personen beeinträchtigt werden.</p>
<p>Zur Geltendmachung des Rechts auf Datenübertragbarkeit kann sich die betroffene Person jederzeit an einen Mitarbeiter der Hexenküche wenden.</li>
<li>
<h4>g)    Recht auf Widerspruch</h4>
<p>Jede von der Verarbeitung personenbezogener Daten betroffene Person hat das vom Europäischen Richtlinien- und Verordnungsgeber gewährte Recht, aus Gründen, die sich aus ihrer besonderen Situation ergeben, jederzeit gegen die Verarbeitung sie betreffender personenbezogener Daten, die aufgrund von Art. 6 Abs. 1 Buchstaben e oder f DS-GVO erfolgt, Widerspruch einzulegen. Dies gilt auch für ein auf diese Bestimmungen gestütztes Profiling.</p>
<p>Die Hexenküche verarbeitet die personenbezogenen Daten im Falle des Widerspruchs nicht mehr, es sei denn, wir können zwingende schutzwürdige Gründe für die Verarbeitung nachweisen, die den Interessen, Rechten und Freiheiten der betroffenen Person überwiegen, oder die Verarbeitung dient der Geltendmachung, Ausübung oder Verteidigung von Rechtsansprüchen.</p>
<p>Verarbeitet die Hexenküche personenbezogene Daten, um Direktwerbung zu betreiben, so hat die betroffene Person das Recht, jederzeit Widerspruch gegen die Verarbeitung der personenbezogenen Daten zum Zwecke derartiger Werbung einzulegen. Dies gilt auch für das Profiling, soweit es mit solcher Direktwerbung in Verbindung steht. Widerspricht die betroffene Person gegenüber der Hexenküche der Verarbeitung für Zwecke der Direktwerbung, so wird die Hexenküche die personenbezogenen Daten nicht mehr für diese Zwecke verarbeiten.</p>
<p>Zudem hat die betroffene Person das Recht, aus Gründen, die sich aus ihrer besonderen Situation ergeben, gegen die sie betreffende Verarbeitung personenbezogener Daten, die bei der Hexenküche zu wissenschaftlichen oder historischen Forschungszwecken oder zu statistischen Zwecken gemäß Art. 89 Abs. 1 DS-GVO erfolgen, Widerspruch einzulegen, es sei denn, eine solche Verarbeitung ist zur Erfüllung einer im öffentlichen Interesse liegenden Aufgabe erforderlich.</p>
<p>Zur Ausübung des Rechts auf Widerspruch kann sich die betroffene Person direkt an den Betreiber der Website der Hexenküche. Der betroffenen Person steht es ferner frei, im Zusammenhang mit der Nutzung von Diensten der Informationsgesellschaft, ungeachtet der Richtlinie 2002/58/EG, ihr Widerspruchsrecht mittels automatisierter Verfahren auszuüben, bei denen technische Spezifikationen verwendet werden.</li>
<li>
<h4>h)    Automatisierte Entscheidungen im Einzelfall einschließlich Profiling</h4>
<p>Jede von der Verarbeitung personenbezogener Daten betroffene Person hat das vom Europäischen Richtlinien- und Verordnungsgeber gewährte Recht, nicht einer ausschließlich auf einer automatisierten Verarbeitung — einschließlich Profiling — beruhenden Entscheidung unterworfen zu werden, die ihr gegenüber rechtliche Wirkung entfaltet oder sie in ähnlicher Weise erheblich beeinträchtigt, sofern die Entscheidung (1) nicht für den Abschluss oder die Erfüllung eines Vertrags zwischen der betroffenen Person und dem Verantwortlichen erforderlich ist, oder (2) aufgrund von Rechtsvorschriften der Union oder der Mitgliedstaaten, denen der Verantwortliche unterliegt, zulässig ist und diese Rechtsvorschriften angemessene Maßnahmen zur Wahrung der Rechte und Freiheiten sowie der berechtigten Interessen der betroffenen Person enthalten oder (3) mit ausdrücklicher Einwilligung der betroffenen Person erfolgt.</p>
<p>Ist die Entscheidung (1) für den Abschluss oder die Erfüllung eines Vertrags zwischen der betroffenen Person und dem Verantwortlichen erforderlich oder (2) erfolgt sie mit ausdrücklicher Einwilligung der betroffenen Person, trifft die Hexenküche angemessene Maßnahmen, um die Rechte und Freiheiten sowie die berechtigten Interessen der betroffenen Person zu wahren, wozu mindestens das Recht auf Erwirkung des Eingreifens einer Person seitens des Verantwortlichen, auf Darlegung des eigenen Standpunkts und auf Anfechtung der Entscheidung gehört.</p>
<p>Möchte die betroffene Person Rechte mit Bezug auf automatisierte Entscheidungen geltend machen, kann sie sich hierzu jederzeit an einen Mitarbeiter des für die Verarbeitung Verantwortlichen wenden.</li>
<li>
<h4>i)      Recht auf Widerruf einer datenschutzrechtlichen Einwilligung</h4>
<p>Jede von der Verarbeitung personenbezogener Daten betroffene Person hat das vom Europäischen Richtlinien- und Verordnungsgeber gewährte Recht, eine Einwilligung zur Verarbeitung personenbezogener Daten jederzeit zu widerrufen.</p>
<p>Möchte die betroffene Person ihr Recht auf Widerruf einer Einwilligung geltend machen, kann sie sich hierzu jederzeit an einen Mitarbeiter des für die Verarbeitung Verantwortlichen wenden.</li>
</ul>
<h4>11. Rechtsgrundlage der Verarbeitung</h4>
<p>Art. 6 I lit. a DS-GVO dient unserem Restaurant als Rechtsgrundlage für Verarbeitungsvorgänge, bei denen wir eine Einwilligung für einen bestimmten Verarbeitungszweck einholen. Ist die Verarbeitung personenbezogener Daten zur Erfüllung eines Vertrags, dessen Vertragspartei die betroffene Person ist, erforderlich, wie dies beispielsweise bei Verarbeitungsvorgängen der Fall ist, die für eine Lieferung von Waren oder die Erbringung einer sonstigen Leistung oder Gegenleistung notwendig sind, so beruht die Verarbeitung auf Art. 6 I lit. b DS-GVO. Gleiches gilt für solche Verarbeitungsvorgänge die zur Durchführung vorvertraglicher Maßnahmen erforderlich sind, etwa in Fällen von Anfragen zur unseren Produkten oder Leistungen. Unterliegt unser Restaurant einer rechtlichen Verpflichtung durch welche eine Verarbeitung von personenbezogenen Daten erforderlich wird, wie beispielsweise zur Erfüllung steuerlicher Pflichten, so basiert die Verarbeitung auf Art. 6 I lit. c DS-GVO. In seltenen Fällen könnte die Verarbeitung von personenbezogenen Daten erforderlich werden, um lebenswichtige Interessen der betroffenen Person oder einer anderen natürlichen Person zu schützen. Dies wäre beispielsweise der Fall, wenn ein Besucher in unserem Betrieb verletzt werden würde und daraufhin sein Name, sein Alter, seine Krankenkassendaten oder sonstige lebenswichtige Informationen an einen Arzt, ein Krankenhaus oder sonstige Dritte weitergegeben werden müssten. Dann würde die Verarbeitung auf Art. 6 I lit. d DS-GVO beruhen.<br />
Letztlich könnten Verarbeitungsvorgänge auf Art. 6 I lit. f DS-GVO beruhen. Auf dieser Rechtsgrundlage basieren Verarbeitungsvorgänge, die von keiner der vorgenannten Rechtsgrundlagen erfasst werden, wenn die Verarbeitung zur Wahrung eines berechtigten Interesses unseres Restaurants oder eines Dritten erforderlich ist, sofern die Interessen, Grundrechte und Grundfreiheiten des Betroffenen nicht überwiegen. Solche Verarbeitungsvorgänge sind uns insbesondere deshalb gestattet, weil sie durch den Europäischen Gesetzgeber besonders erwähnt wurden. Er vertrat insoweit die Auffassung, dass ein berechtigtes Interesse anzunehmen sein könnte, wenn die betroffene Person ein Kunde des Verantwortlichen ist (Erwägungsgrund 47 Satz 2 DS-GVO).</p>
<h4>12. Berechtigte Interessen an der Verarbeitung, die von dem Verantwortlichen oder einem Dritten verfolgt werden</h4>
<p>Basiert die Verarbeitung personenbezogener Daten auf Artikel 6 I lit. f DS-GVO ist unser berechtigtes Interesse die Durchführung unserer Geschäftstätigkeit zugunsten des Wohlergehens all unserer Mitarbeiter und unserer Anteilseigner.</p>
<h4>13. Dauer, für die die personenbezogenen Daten gespeichert werden</h4>
<p>Das Kriterium für die Dauer der Speicherung von personenbezogenen Daten ist die jeweilige gesetzliche Aufbewahrungsfrist. Nach Ablauf der Frist werden die entsprechenden Daten routinemäßig gelöscht, sofern sie nicht mehr zur Vertragserfüllung oder Vertragsanbahnung erforderlich sind.</p>
<h4>14. Gesetzliche oder vertragliche Vorschriften zur Bereitstellung der personenbezogenen Daten; Erforderlichkeit für den Vertragsabschluss; Verpflichtung der betroffenen Person, die personenbezogenen Daten bereitzustellen; mögliche Folgen der Nichtbereitstellung</h4>
<p>Wir klären Sie darüber auf, dass die Bereitstellung personenbezogener Daten zum Teil gesetzlich vorgeschrieben ist (z.B. Steuervorschriften) oder sich auch aus vertraglichen Regelungen (z.B. Angaben zum Vertragspartner) ergeben kann.<br />
Mitunter kann es zu einem Vertragsschluss erforderlich sein, dass eine betroffene Person uns personenbezogene Daten zur Verfügung stellt, die in der Folge durch uns verarbeitet werden müssen. Die betroffene Person ist beispielsweise verpflichtet uns personenbezogene Daten bereitzustellen, wenn unser Restaurant mit ihr einen Vertrag abschließt. Eine Nichtbereitstellung der personenbezogenen Daten hätte zur Folge, dass der Vertrag mit dem Betroffenen nicht geschlossen werden könnte.<br />
Vor einer Bereitstellung personenbezogener Daten durch den Betroffenen muss sich der Betroffene an einen unserer Mitarbeiter wenden. Unser Mitarbeiter klärt den Betroffenen einzelfallbezogen darüber auf, ob die Bereitstellung der personenbezogenen Daten gesetzlich oder vertraglich vorgeschrieben oder für den Vertragsabschluss erforderlich ist, ob eine Verpflichtung besteht, die personenbezogenen Daten bereitzustellen, und welche Folgen die Nichtbereitstellung der personenbezogenen Daten hätte.</p>
<h4>15. Bestehen einer automatisierten Entscheidungsfindung</h4>
<p>Als verantwortungsbewusstes Restaurant verzichten wir auf eine automatische Entscheidungsfindung oder ein Profiling.</p>
<p>Diese Datenschutzerklärung wurde durch den Datenschutzerklärungs-Generator der DGD Deutsche Gesellschaft für Datenschutz GmbH, die als <a href="https://dg-datenschutz.de/datenschutz-dienstleistungen/externer-datenschutzbeauftragter/" rel="nofollow">Datenschutzbeauftragter</a> tätig ist, in Kooperation mit den <a href="https://www.wbs-law.de/it-recht/datenschutzrecht" rel="nofollow">Datenschutz Anwälten der Kanzlei WILDE BEUGER SOLMECKE | Rechtsanwälte</a> erstellt.</p>
',
            'status'     => 1
        ] );

    }
}
