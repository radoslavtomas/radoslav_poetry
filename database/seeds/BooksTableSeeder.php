<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$book1 = App\Book::create([
			'name' => 'Status reports',
			'name_sk' => 'Statusové hlásenia',
			'slug' => 'status-reports',
			'description' => 'My latest book so far started as an experiment on social networks. Over a period of one year I kept posting poems written by authors from all over the world. Occasionally, I posted my own poem signed by a fictive poet from some European country. When others found out about this experiment we started a creative game with names, gender identities and culture. A selection from these poems by fictive authors was published in Status reports (Statusové hlásenia).',
			'description_sk' => 'Zatiaľ moja posledná kniha, ktorá vznikla ako hra na sociálnych sieťach. Počas jedného roka som na rôznych miestach zverejňoval básne viac alebo menej známych autorov a autoriek. Pomedzi to som pridával aj básne, ktoré boli moje vlastné, podpísal som ich však vymyslenými menami básnikov a poetiek z rôznych európskych krajín. Postupne na to ľudia prišli a vznikla tak hra s menami, identitou, rodom a kultúrami. Výber týchto básni fiktívnych autorov a autoriek vyšiel ako Statusové hlásenia – s podtitulom „antológia súčasnej európskej poézie“.',
			'meta' => 'Publishing house: Kon-Press, Trnava, Slovakia, 2011. Illustrations Milan Ladyka. Paperback, 56 pages, ISBN 9788085413663.',
			'meta_sk' => 'Vydavateľstvo Kon-Press, Trnava. Rok vydania 2011. Ilustrácie Milan Ladyka. Brožovaná väzba, 56 strán, ISBN 9788085413663.',
			'poems' => 'Vezmi ma znova
do vlaku, o ktorom
sa nám snívalo,
mali sme šestnásť a neprekážalo
nám šúpať pomaranče
holými prstami. Alica,
čo robíš práve teraz? Nezabudni
na všetky tie príchody
a utekania. Trvali milióny rokov.
A všetky boli naše.



Vezmi ma znova
do vlaku, o ktorom
sa nám snívalo,
mali sme šestnásť a neprekážalo
nám šúpať pomaranče
holými prstami. Alica,
čo robíš práve teraz? Nezabudni
na všetky tie príchody
a utekania. Trvali milióny rokov.
A všetky boli naše.



Vezmi ma znova
do vlaku, o ktorom
sa nám snívalo,
mali sme šestnásť a neprekážalo
nám šúpať pomaranče
holými prstami. Alica,
čo robíš práve teraz? Nezabudni
na všetky tie príchody
a utekania. Trvali milióny rokov.
A všetky boli naše.',
			'poems_sk' => 'Vezmi ma znova
do vlaku, o ktorom
sa nám snívalo,
mali sme šestnásť a neprekážalo
nám šúpať pomaranče
holými prstami. Alica,
čo robíš práve teraz? Nezabudni
na všetky tie príchody
a utekania. Trvali milióny rokov.
A všetky boli naše.



Vezmi ma znova
do vlaku, o ktorom
sa nám snívalo,
mali sme šestnásť a neprekážalo
nám šúpať pomaranče
holými prstami. Alica,
čo robíš práve teraz? Nezabudni
na všetky tie príchody
a utekania. Trvali milióny rokov.
A všetky boli naše.



Vezmi ma znova
do vlaku, o ktorom
sa nám snívalo,
mali sme šestnásť a neprekážalo
nám šúpať pomaranče
holými prstami. Alica,
čo robíš práve teraz? Nezabudni
na všetky tie príchody
a utekania. Trvali milióny rokov.
A všetky boli naše.',
			'download' => '/download/radoslav_tomas_statusove_hlasenia.pdf',
			'buy' => 'http://www.martinus.sk/?uItem=120218',
			'cover' => '/img/covers/status_reports_cover.png',
			'background' => '/img/books/status_bg.jpg',
			'slide_color' => '#ffa726',
			'year' => 2011
		]);

		$book2 = App\Book::create([
			'name' => 'Wolves weddings',
			'name_sk' => 'Vlčie svadby',
			'slug' => 'wolves-weddings',
			'description' => 'Wolves’ weddings (Vlčie svadby) are based on mythology. I work here with Greek and Biblical motifs and their relevance for current society. The focus is on details which provide a framework for the story. They provide anchors through which the reader is invited to relate to the story. This relationship is particularly highlighted in the final part of the book, in which an old mythology and the story of my grandfather, whom I have never met, interconnect into one archetypal tale.',
			'description_sk' => 'Vlčie svadby vychádzajú z mytológie. Pracujem tu s gréckymi a biblickými motívmi, ktoré som sa snažil preniesť do súčasnosti. Pozornosť je na detailoch, ktoré príbeh rámcujú. Vytvárajú mapu, pomocou ktorej sa čitatelia a čitateľky môžu stotožniť s príbehom a prežiť ho ako ich osobný. Toto je súčasťou najmä poslednej časti, kde som vložil mytológiu a príbeh môjho starého otca, ktorého som nikdy nepoznal osobne.',
			'meta' => 'Publishing house: Na konári, Praha, 2009. Illustrations Ján Mikuš. Paperback, 76 pages, ISBN 9788090448704.',
			'meta_sk' => 'Vydavateľstvo Na konári, Praha. Rok vydania 2009. Ilustrácie Ján Mikuš. Brožovaná väzba, 76 strán, ISBN 9788090448704.',
			'poems' => 'Vezmi ma znova
do vlaku, o ktorom
sa nám snívalo,
mali sme šestnásť a neprekážalo
nám šúpať pomaranče
holými prstami. Alica,
čo robíš práve teraz? Nezabudni
na všetky tie príchody
a utekania. Trvali milióny rokov.
A všetky boli naše.



Vezmi ma znova
do vlaku, o ktorom
sa nám snívalo,
mali sme šestnásť a neprekážalo
nám šúpať pomaranče
holými prstami. Alica,
čo robíš práve teraz? Nezabudni
na všetky tie príchody
a utekania. Trvali milióny rokov.
A všetky boli naše.



Vezmi ma znova
do vlaku, o ktorom
sa nám snívalo,
mali sme šestnásť a neprekážalo
nám šúpať pomaranče
holými prstami. Alica,
čo robíš práve teraz? Nezabudni
na všetky tie príchody
a utekania. Trvali milióny rokov.
A všetky boli naše.',
			'poems_sk' => 'Vezmi ma znova
do vlaku, o ktorom
sa nám snívalo,
mali sme šestnásť a neprekážalo
nám šúpať pomaranče
holými prstami. Alica,
čo robíš práve teraz? Nezabudni
na všetky tie príchody
a utekania. Trvali milióny rokov.
A všetky boli naše.



Vezmi ma znova
do vlaku, o ktorom
sa nám snívalo,
mali sme šestnásť a neprekážalo
nám šúpať pomaranče
holými prstami. Alica,
čo robíš práve teraz? Nezabudni
na všetky tie príchody
a utekania. Trvali milióny rokov.
A všetky boli naše.



Vezmi ma znova
do vlaku, o ktorom
sa nám snívalo,
mali sme šestnásť a neprekážalo
nám šúpať pomaranče
holými prstami. Alica,
čo robíš práve teraz? Nezabudni
na všetky tie príchody
a utekania. Trvali milióny rokov.
A všetky boli naše.',
			'download' => '/download/radoslav_tomas_vlcie_svadby.pdf',
			'buy' => '',
			'cover' => '/img/covers/wolves_weddings_cover.png',
			'background' => '/img/books/vlk_bg.jpg',
			'slide_color' => '#ffa726',
			'year' => 2009
		]);

		$book3 = App\Book::create([
			'name' => 'A boy',
			'name_sk' => 'Chlapec',
			'slug' => 'a-boy',
			'description' => 'My first book which I wrote when I was 17-18 years old. It received literary prize for first-published poets in Slovakia – the Ivan Krasko Prize. Personally, I would now hesitate to put some of the poems into the book, yet I still appreciate its nostalgic simplicity. I enjoy coming back to it, as it hides many stories from my childhood and first joys from poetic discovery of the world.',
			'description_sk' => 'Moja prvá kniha, ktorú som napísal ako 17 až 18-ročný. Získala Cenu Ivana Kraska za najlepší debut roka. Osobne by som dnes už niektoré z básní do knihy nezaradil, mám ale veľmi rád nostalgickú naivitu, ktorá v nich je. A vždy sa k nim rád vrátim. Je v nich veľa môjho detstva a radosti z objavovania sveta.',
			'meta' => 'Publishing house: Vydavateľstvo Spolku slovenských spisovateľov, Bratislava, 2005. Illustrations Kamila Bíziková. Paperback, 56 pages, ISBN 8080612188.',
			'meta_sk' => 'Vydavateľstvo Spolku slovenských spisovateľov, Bratislava. Rok vydania 2005. Ilustrácie Kamila Bíziková. Brožovaná väzba, 56 strán, ISBN 8080612188.',
			'poems' => 'Vezmi ma znova
do vlaku, o ktorom
sa nám snívalo,
mali sme šestnásť a neprekážalo
nám šúpať pomaranče
holými prstami. Alica,
čo robíš práve teraz? Nezabudni
na všetky tie príchody
a utekania. Trvali milióny rokov.
A všetky boli naše.



Vezmi ma znova
do vlaku, o ktorom
sa nám snívalo,
mali sme šestnásť a neprekážalo
nám šúpať pomaranče
holými prstami. Alica,
čo robíš práve teraz? Nezabudni
na všetky tie príchody
a utekania. Trvali milióny rokov.
A všetky boli naše.



Vezmi ma znova
do vlaku, o ktorom
sa nám snívalo,
mali sme šestnásť a neprekážalo
nám šúpať pomaranče
holými prstami. Alica,
čo robíš práve teraz? Nezabudni
na všetky tie príchody
a utekania. Trvali milióny rokov.
A všetky boli naše.',
			'poems_sk' => 'Vezmi ma znova
do vlaku, o ktorom
sa nám snívalo,
mali sme šestnásť a neprekážalo
nám šúpať pomaranče
holými prstami. Alica,
čo robíš práve teraz? Nezabudni
na všetky tie príchody
a utekania. Trvali milióny rokov.
A všetky boli naše.



Vezmi ma znova
do vlaku, o ktorom
sa nám snívalo,
mali sme šestnásť a neprekážalo
nám šúpať pomaranče
holými prstami. Alica,
čo robíš práve teraz? Nezabudni
na všetky tie príchody
a utekania. Trvali milióny rokov.
A všetky boli naše.



Vezmi ma znova
do vlaku, o ktorom
sa nám snívalo,
mali sme šestnásť a neprekážalo
nám šúpať pomaranče
holými prstami. Alica,
čo robíš práve teraz? Nezabudni
na všetky tie príchody
a utekania. Trvali milióny rokov.
A všetky boli naše.',
			'download' => '/download/radoslav_tomas_chlapec.pdf',
			'buy' => '',
			'cover' => '/img/covers/boy_cover.png',
			'background' => '/img/books/boy_bg.jpg',
			'slide_color' => '#ffa726',
			'year' => 2005
		]);
    }
}
