<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'author'=>'Fehér Krisztián',
            'title'=>'Szupergyors rajzoló algoritmusok',
            'publisher'=>'Fehér Krisztián Dezső',
            'id'=>'9786150068404',
            'year'=>'2020',
            'storage'=>'6',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Fehér Krisztián',
            'title'=>'Nyomtatók programozása',
            'publisher'=>'Fehér Krisztián Dezső',
            'id'=>'9786150073330',
            'year'=>'2020',
            'storage'=>'6',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Fehér Krisztián',
            'title'=>'HTML5 Canvas grafika programozása',
            'publisher'=>'Fehér Krisztián Dezső',
            'id'=>'9786150076263',
            'year'=>'2021',
            'storage'=>'3',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Fehér Krisztián',
            'title'=>'CUDA programozási alapismeretek',
            'publisher'=>'Fehér Krisztián Dezső',
            'id'=>'9786150076270',
            'year'=>'2021',
            'storage'=>'1',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Bogyó-Pollok Rita',
            'title'=>'Anyanapló',
            'publisher'=>'Snowfighter Kft',
            'id'=>'9786150116440',
            'year'=>'2021',
            'storage'=>'9',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Képes-Kocziszki Zsanett  -  Takács-Kocziszki Kármen',
            'title'=>'Mandala',
            'publisher'=>'Zsaka Design',
            'id'=>'9786150124032',
            'year'=>'2021',
            'storage'=>'10',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Képes-Kocziszki Zsanett  -  Takács-Kocziszki Kármen',
            'title'=>'Magyar motívumok',
            'publisher'=>'Zsaka Design',
            'id'=>'9786150124056',
            'year'=>'2021',
            'storage'=>'4',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Abonyi Alma',
            'title'=>'Bevezetés a művészgyanták világába',
            'publisher'=>'MAGÁNKIADÁS',
            'id'=>'9786150131696',
            'year'=>'2021',
            'storage'=>'1',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Richard Blum',
            'title'=>'PHP, MySQL & JavaScript 7 könyv 1-ben',
            'publisher'=>'TARAMIX Kiadó Kft.',
            'id'=>'9786155186721',
            'year'=>'2020',
            'storage'=>'10',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Stephen R. Davis',
            'title'=>'C ++ - Tantusz könyvek',
            'publisher'=>'TARAMIX Kiadó Kft.',
            'id'=>'9786155186790',
            'year'=>'2021',
            'storage'=>'8',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Dávid Krisztina',
            'title'=>'Word 2019',
            'publisher'=>'TARAMIX Kiadó Kft.',
            'id'=>'9786155186813',
            'year'=>'2021',
            'storage'=>'5',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Szabó Ildikó',
            'title'=>'Excel 2019',
            'publisher'=>'TARAMIX Kiadó Kft.',
            'id'=>'9786155186820',
            'year'=>'2021',
            'storage'=>'5',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Forgács Róbert',
            'title'=>'Anya - nyelv - ész',
            'publisher'=>'TINTA KÖNYVKIADÓ KFT',
            'id'=>'9786155219108',
            'year'=>'2021',
            'storage'=>'9',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Patrice Karst',
            'title'=>'A láthatatlan fonal',
            'publisher'=>'KULCSLYUK KIADÓ KFT.',
            'id'=>'9786155281259',
            'year'=>'2022',
            'storage'=>'5',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Kádár Annamária',
            'title'=>'Lilla és Tündérbogyó',
            'publisher'=>'KULCSLYUK KIADÓ KFT.',
            'id'=>'9786155281358',
            'year'=>'2022',
            'storage'=>'9',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Kádár Annamária  -  Kerekes Valéria',
            'title'=>'Mesepszichológia a gyakorlatban',
            'publisher'=>'KULCSLYUK KIADÓ KFT.',
            'id'=>'9786155281440',
            'year'=>'2022',
            'storage'=>'3',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Deliága Éva  -  Lovász Hajnalka',
            'title'=>'Mit kezdjünk az akaratossággal?',
            'publisher'=>'KULCSLYUK KIADÓ KFT.',
            'id'=>'9786155281464',
            'year'=>'2021',
            'storage'=>'6',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Marjorie Sarnat',
            'title'=>'Baglyok',
            'publisher'=>'PARTVONAL',
            'id'=>'9786155283758',
            'year'=>'2021',
            'storage'=>'10',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Nagy Róbert',
            'title'=>'Influencer videók készítése netre',
            'publisher'=>'BBS-INFO KÖNYVK. ÉS INFORM. KFT.',
            'id'=>'9786155477881',
            'year'=>'2020',
            'storage'=>'10',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Nagy Róbert',
            'title'=>'Online térképes alkalmazások',
            'publisher'=>'BBS-INFO KÖNYVK. ÉS INFORM. KFT.',
            'id'=>'9786155477904',
            'year'=>'2020',
            'storage'=>'8',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Huszár István',
            'title'=>'Tárgyiasult ötletek',
            'publisher'=>'BBS-INFO KÖNYVK. ÉS INFORM. KFT.',
            'id'=>'9786155477973',
            'year'=>'2021',
            'storage'=>'5',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Bártfai Barnabás',
            'title'=>'Excel tippek',
            'publisher'=>'BBS-INFO KÖNYVK. ÉS INFORM. KFT.',
            'id'=>'9786155477997',
            'year'=>'2021',
            'storage'=>'1',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Lesley Stanfield',
            'title'=>'100 kötött és horgolt virág',
            'publisher'=>'Tölgy Kiadó Keresked. és Szolg. Kft',
            'id'=>'9786155636158',
            'year'=>'2021',
            'storage'=>'7',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Wendy Gardiner  -  Lorna Knight',
            'title'=>'Varrógép ABC',
            'publisher'=>'Tölgy Kiadó Keresked. és Szolg. Kft',
            'id'=>'9786155636165',
            'year'=>'2021',
            'storage'=>'9',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Lukács Ildikó',
            'title'=>'Esőcsepp keltette hullámok',
            'publisher'=>'MINERVA KIADÓ',
            'id'=>'9786155637193',
            'year'=>'2022',
            'storage'=>'2',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Dr. Philipp Schott',
            'title'=>'Egy kisállatrendelő hétköznapjai',
            'publisher'=>'PARTVONAL',
            'id'=>'9786155783784',
            'year'=>'2021',
            'storage'=>'6',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Linda Thomas',
            'title'=>'Szeretni a takarítást?!',
            'publisher'=>'CASPARUS KIADÓ KFT.',
            'id'=>'9786155835056',
            'year'=>'2021',
            'storage'=>'2',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Joyce Meyer',
            'title'=>'Erőt minden napra',
            'publisher'=>'IMMANUEL ALAPÍTVÁNY',
            'id'=>'9786156017307',
            'year'=>'2022',
            'storage'=>'9',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Dr. Esche-Belke Susanne  -  Dr. Kirschner-Brouns Suzann',
            'title'=>'Nők a változókor küszöbén',
            'publisher'=>'Partvonal Könyvkiadó Kft',
            'id'=>'9786156058249',
            'year'=>'2021',
            'storage'=>'1',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Hedvig Montgomery',
            'title'=>'Szülői varázslat 3.',
            'publisher'=>'Partvonal Könyvkiadó Kft',
            'id'=>'9786156058379',
            'year'=>'2021',
            'storage'=>'10',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Michelle Icard',
            'title'=>'Hogyan beszélgess vele?',
            'publisher'=>'Partvonal Könyvkiadó Kft',
            'id'=>'9786156058881',
            'year'=>'2022',
            'storage'=>'2',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Mélanie Schmidt-Ulmann',
            'title'=>'Bingeni Szent Hildegárd holisztikus gyógyító titkai',
            'publisher'=>'Partvonal Könyvkiadó Kft',
            'id'=>'9786156058911',
            'year'=>'2022',
            'storage'=>'1',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Carla Naumburg',
            'title'=>'A nevem Anya. Vagy ahogy a gyerekeim hívnak: ANYA ANYAA ANYAAA',
            'publisher'=>'ÁLOMGYÁR KIADÓ',
            'id'=>'9786156067487',
            'year'=>'2021',
            'storage'=>'3',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'April Cassidy',
            'title'=>'Boldog feleség',
            'publisher'=>'Patmos Records',
            'id'=>'9786156108609',
            'year'=>'2022',
            'storage'=>'2',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Fehér Krisztián',
            'title'=>'Androidos alkalmazásfejlesztés Kotlin nyelven',
            'publisher'=>'Fehér Krisztián Dezső',
            'id'=>'9786156184009',
            'year'=>'2021',
            'storage'=>'8',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Fehér Krisztián',
            'title'=>'Így készíts térképet otthon!',
            'publisher'=>'Fehér Krisztián Dezső',
            'id'=>'9786156184023',
            'year'=>'2020',
            'storage'=>'4',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Fehér Krisztián',
            'title'=>'Számítógépvásárlási túlélőkönyv',
            'publisher'=>'Fehér Krisztián Dezső',
            'id'=>'9786156184030',
            'year'=>'2020',
            'storage'=>'2',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Fehér Krisztián',
            'title'=>'Multi-GPU grafika CUDA alapokon',
            'publisher'=>'Fehér Krisztián Dezső',
            'id'=>'9786156184047',
            'year'=>'2020',
            'storage'=>'3',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Fehér Krisztián',
            'title'=>'Androidos alkalmazásfejlesztés Kotlin nyelven',
            'publisher'=>'Fehér Krisztián Dezső',
            'id'=>'9786156184054',
            'year'=>'2021',
            'storage'=>'9',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'dr. Kökényesi-Bartos Attila',
            'title'=>'Digitális hajsza II. rész',
            'publisher'=>'Fehér Krisztián Dezső',
            'id'=>'9786156184078',
            'year'=>'2021',
            'storage'=>'8',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Fehér Krisztián',
            'title'=>'A Windows keményvonalas programozása',
            'publisher'=>'Fehér Krisztián Dezső',
            'id'=>'9786156184085',
            'year'=>'2021',
            'storage'=>'8',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Fehér Krisztián',
            'title'=>'Multi-GPU grafika CUDA alapkon 2.rész',
            'publisher'=>'Fehér Krisztián Dezső',
            'id'=>'9786156184092',
            'year'=>'2021',
            'storage'=>'5',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Fehér Krisztián',
            'title'=>'Játékprogram egy hétvége alatt! 1.rész',
            'publisher'=>'Fehér Krisztián Dezső',
            'id'=>'9786156184108',
            'year'=>'2021',
            'storage'=>'9',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Fehér Krisztián',
            'title'=>'GPU farm és eGPU építési kisokos',
            'publisher'=>'Fehér Krisztián Dezső',
            'id'=>'9786156184122',
            'year'=>'2021',
            'storage'=>'8',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Fehér Krisztián',
            'title'=>'Játékprogram egy hétvége alatt! -  2. rész',
            'publisher'=>'Fehér Krisztián Dezső',
            'id'=>'9786156184139',
            'year'=>'2021',
            'storage'=>'7',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Fehér Krisztián',
            'title'=>'Automatizált és manuális szoftvertesztelési alapismeretek',
            'publisher'=>'Fehér Krisztián Dezső',
            'id'=>'9786156184146',
            'year'=>'2021',
            'storage'=>'3',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Fehér Krisztián',
            'title'=>'Kibervédelmi tesztalkalmazások programozása',
            'publisher'=>'Fehér Krisztián Dezső',
            'id'=>'9786156184153',
            'year'=>'2022',
            'storage'=>'3',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Fehér Krisztián',
            'title'=>'Programozz C nyelven!',
            'publisher'=>'Fehér Krisztián Dezső',
            'id'=>'9786156184177',
            'year'=>'2022',
            'storage'=>'2',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Fehér Krisztián',
            'title'=>'Androidos alkalmazásfejlesztés Kotlin nyelven - 3. rész',
            'publisher'=>'Fehér Krisztián Dezső',
            'id'=>'9786156184184',
            'year'=>'2022',
            'storage'=>'8',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'dr. Kökényesi-Bartos Attila',
            'title'=>'Digitális hajsza I. rész',
            'publisher'=>'Fehér Krisztián Dezső',
            'id'=>'9786156184191',
            'year'=>'2022',
            'storage'=>'1',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Nemere István',
            'title'=>'Akik az életeddel játszanak',
            'publisher'=>'K.U.K. KÖNYV-ÉS LAPKIADÓ KFT.',
            'id'=>'9786156188205',
            'year'=>'2022',
            'storage'=>'8',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Bors Richárd',
            'title'=>'Avarpaplan',
            'publisher'=>'zár DÉNES NATUR MŰHELY KFT',
            'id'=>'9786156243232',
            'year'=>'2021',
            'storage'=>'2',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Dabis Gábor',
            'title'=>'Télen-nyáron vadcsapáson',
            'publisher'=>'DÉNES NATUR MŰHELY KFT.',
            'id'=>'9786156243256',
            'year'=>'2021',
            'storage'=>'4',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Varga Csaba',
            'title'=>'Vadászat és pipaszó',
            'publisher'=>'DÉNES NATUR MŰHELY KFT.',
            'id'=>'9786156243263',
            'year'=>'2021',
            'storage'=>'1',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Pinjung Emil',
            'title'=>'Pusztaszer',
            'publisher'=>'DÉNES NATUR MŰHELY KFT.',
            'id'=>'9786156243287',
            'year'=>'2021',
            'storage'=>'3',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Bayer Zsolt  -  Semjén Zsolt',
            'title'=>'A vadászat választott engem',
            'publisher'=>'DÉNES NATUR MŰHELY KFT.',
            'id'=>'9786156243317',
            'year'=>'2021',
            'storage'=>'5',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Chika Miyata',
            'title'=>'Hogyan rajzoljunk le szinte mindent',
            'publisher'=>'RAINBOW-SLIDE BT.',
            'id'=>'9786156282026',
            'year'=>'2022',
            'storage'=>'10',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Robin Sharma',
            'title'=>'Hajnali 5 óra Klub',
            'publisher'=>'TRIVIUM KIADÓ KFT.',
            'id'=>'9786156346148',
            'year'=>'2022',
            'storage'=>'5',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Sol Rayond',
            'title'=>'Amit a testünk üzen',
            'publisher'=>'Marysol könyvkiadó',
            'id'=>'9786156367044',
            'year'=>'2022',
            'storage'=>'9',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Kubinyi Ágoston',
            'title'=>'Magyarországi mérges növények',
            'publisher'=>'Nemzeti Örökség',
            'id'=>'9786156385093',
            'year'=>'2022',
            'storage'=>'3',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Orbán Zoltán  -  Máté Bence  -  Enczi Zoltán  -  Imre Tamás  -  Korbely Attila  -  Richard Keating',
            'title'=>'A vadvilág fotózása',
            'publisher'=>'RAINBOW-SLIDE BT.',
            'id'=>'9786158078245',
            'year'=>'2021',
            'storage'=>'8',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Csabai László',
            'title'=>'Sherlock Holmes Budapesten',
            'publisher'=>'CORVINA KIADÓ KFT',
            'id'=>'9789631367751',
            'year'=>'2021',
            'storage'=>'5',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Dr. Richard Halvorsen',
            'title'=>'Vakcinák',
            'publisher'=>'CORVINA KIADÓ KFT',
            'id'=>'9789631367911',
            'year'=>'2022',
            'storage'=>'10',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Gyöngyöshalászi Takách Gyula',
            'title'=>'Vadászösvényeken',
            'publisher'=>'LAZI KÖNYVKIADÓ KFT.',
            'id'=>'9789632675220',
            'year'=>'2021',
            'storage'=>'10',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Lizzie Streit',
            'title'=>'Természetes gyulladáscsökkentők',
            'publisher'=>'CSER KÖNYVKIADÓ ÉS KER. Kft.',
            'id'=>'9789632786742',
            'year'=>'2022',
            'storage'=>'6',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Gary Chapman',
            'title'=>'Az 5 szeretetnyelv:  Kamaszokra hangolva',
            'publisher'=>'HARMAT KIADÓI ALAPITVÁNY',
            'id'=>'9789632882710',
            'year'=>'2022',
            'storage'=>'5',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Gary Chapman',
            'title'=>'Segítség, szülők lettünk!',
            'publisher'=>'HARMAT KIADÓI ALAPITVÁNY',
            'id'=>'9789632883571',
            'year'=>'2021',
            'storage'=>'3',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Gary Chapman',
            'title'=>'Változzunk együtt!',
            'publisher'=>'HARMAT KIADÓI ALAPITVÁNY',
            'id'=>'9789632883588',
            'year'=>'2021',
            'storage'=>'8',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Gary Chapman',
            'title'=>'Nyerő páros',
            'publisher'=>'HARMAT KIADÓI ALAPITVÁNY',
            'id'=>'9789632883595',
            'year'=>'2021',
            'storage'=>'8',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Mihalec Gábor',
            'title'=>'Gyűrű-kúra',
            'publisher'=>'HARMAT KIADÓI ALAPITVÁNY',
            'id'=>'9789632884509',
            'year'=>'2021',
            'storage'=>'5',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Dr. Henry Cloud  -  Dr. John Townsend',
            'title'=>'Határaink',
            'publisher'=>'HARMAT KIADÓI ALAPITVÁNY',
            'id'=>'9789632885209',
            'year'=>'2022',
            'storage'=>'1',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Gary Chapman',
            'title'=>'Maradjunk együtt!',
            'publisher'=>'HARMAT KIADÓI ALAPITVÁNY',
            'id'=>'9789632886824',
            'year'=>'2022',
            'storage'=>'3',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Anita Moorjani',
            'title'=>'Szenzitivitás - Az új erő',
            'publisher'=>'BIOENERGETIC KIADÓ KFT.',
            'id'=>'9789632915593',
            'year'=>'2022',
            'storage'=>'2',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Vekerdy Tamás',
            'title'=>'Kisgyerekek - óvodások',
            'publisher'=>'Central Médiacsoport Zrt.',
            'id'=>'9789633411810',
            'year'=>'2021',
            'storage'=>'2',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Melinda Blau  -  Tracy Hogg',
            'title'=>'A suttogó titkai 1.',
            'publisher'=>'EURÓPA KÖNYVKIADÓ KFT.',
            'id'=>'9789634059509',
            'year'=>'2021',
            'storage'=>'10',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Giulia Pianigiani',
            'title'=>'Kukucs, itt vagyok! - Babanapló fiú',
            'publisher'=>'MÓRA FERENC IFJÚSÁGI KÖNYVKIADÓ ZRT',
            'id'=>'9789634158684',
            'year'=>'2021',
            'storage'=>'10',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Giulia Pianigiani',
            'title'=>'Kukucs, itt vagyok! - Babanapló lány',
            'publisher'=>'MÓRA FERENC IFJÚSÁGI KÖNYVKIADÓ ZRT',
            'id'=>'9789634158691',
            'year'=>'2021',
            'storage'=>'2',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Marie-Héléne Place',
            'title'=>'60 Montessori fejlesztő gyakorlat kisbabáknak',
            'publisher'=>'MÓRA FERENC IFJÚSÁGI KÖNYVKIADÓ ZRT',
            'id'=>'9789634158899',
            'year'=>'2021',
            'storage'=>'10',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Andrea Owen',
            'title'=>'Hogyan állj ki magadért',
            'publisher'=>'MAGNÓLIA',
            'id'=>'9789634199885',
            'year'=>'2022',
            'storage'=>'2',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Pamela Druckerman',
            'title'=>'Nem harap a spenót',
            'publisher'=>'Libri Könyvkiadó Kft.',
            'id'=>'9789634338796',
            'year'=>'2021',
            'storage'=>'9',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Beth Kempton',
            'title'=>'Wabi Sabi',
            'publisher'=>'Libri Könyvkiadó Kft.',
            'id'=>'9789634339991',
            'year'=>'2022',
            'storage'=>'4',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Craig Jelley',
            'title'=>'Minecraft - Útmutató a kreatív módhoz',
            'publisher'=>'BOOKLINE KÖNYVEK',
            'id'=>'9789634370505',
            'year'=>'2021',
            'storage'=>'1',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Tim Seldin',
            'title'=>'Hogyan nevelj boldog gyereket',
            'publisher'=>'KOLIBRI GYEREKKÖNYVKIADÓ KFT',
            'id'=>'9789634379195',
            'year'=>'2021',
            'storage'=>'1',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Kate Cody',
            'title'=>'Első baba emlékkönyvem',
            'publisher'=>'ALEXANDRA KÖNYVESHÁZ KFT.',
            'id'=>'9789634471301',
            'year'=>'2021',
            'storage'=>'10',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Erneszt Anna',
            'title'=>'Szerelem - Inspirációs könyv jegyzeteléshez',
            'publisher'=>'Szalay Könyvek',
            'id'=>'9789634592860',
            'year'=>'2021',
            'storage'=>'2',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Jim Sorenson',
            'title'=>'Transformers - képes útmutató',
            'publisher'=>'FUMAX KFT',
            'id'=>'9789634702139',
            'year'=>'2021',
            'storage'=>'10',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Szalay Ágnes',
            'title'=>'Éppen jókor',
            'publisher'=>'JAFFA  KIADÓ ÉS KERESKEDELMI KFT.',
            'id'=>'9789634755548',
            'year'=>'2022',
            'storage'=>'7',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Megan Logan',
            'title'=>'Szeresd Magad!',
            'publisher'=>'JAFFA  KIADÓ ÉS KERESKEDELMI KFT.',
            'id'=>'9789634755562',
            'year'=>'2022',
            'storage'=>'2',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Éve Herrmann',
            'title'=>'100 Montessori fejlesztő gyakorlat óvodásoknak',
            'publisher'=>'MÓRA FERENC IFJÚSÁGI KÖNYVKIADÓ ZRT',
            'id'=>'9789634862895',
            'year'=>'2021',
            'storage'=>'10',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Forgács Zsóka',
            'title'=>'Oviból a suliba - Iskolaérettségi kisokos',
            'publisher'=>'MÓRA FERENC IFJÚSÁGI KÖNYVKIADÓ ZRT',
            'id'=>'9789634865162',
            'year'=>'2021',
            'storage'=>'3',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Máté Ákos  -  Ring Orsolya  -  Sebők Miklós',
            'title'=>'Szövegbányászat és mesterséges intelligencia R-ben',
            'publisher'=>'Typotex Elektronikus Kiadó Kft.',
            'id'=>'9789634931393',
            'year'=>'2021',
            'storage'=>'5',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Katherine Bassford',
            'title'=>'Nemet mondok a cukorra',
            'publisher'=>'Lingea Kft.',
            'id'=>'9789635050659',
            'year'=>'2021',
            'storage'=>'8',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Harriet Dyer',
            'title'=>'Nemet mondok a hulladékra',
            'publisher'=>'Lingea Kft.',
            'id'=>'9789635050666',
            'year'=>'2021',
            'storage'=>'5',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Alexa Kaye',
            'title'=>'Nemet mondok a húsra',
            'publisher'=>'Lingea Kft.',
            'id'=>'9789635050673',
            'year'=>'2021',
            'storage'=>'6',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Chloe Ramsden',
            'title'=>'Nemet mondok a közösségi oldalakra',
            'publisher'=>'Lingea Kft.',
            'id'=>'9789635050680',
            'year'=>'2021',
            'storage'=>'10',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Lili Chin',
            'title'=>'Kutyanyelv',
            'publisher'=>'Lingea Kft.',
            'id'=>'9789635050802',
            'year'=>'2021',
            'storage'=>'3',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Katie Byron',
            'title'=>'Az öröm ezer neve',
            'publisher'=>'ÉDESVÍZ KIADÓ',
            'id'=>'9789635071838',
            'year'=>'2022',
            'storage'=>'5',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Gabrielle Bernstein',
            'title'=>'Spirituális és trendi',
            'publisher'=>'ÉDESVÍZ KIADÓ',
            'id'=>'9789635071869',
            'year'=>'2022',
            'storage'=>'9',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Dr. Shefali Tsabary',
            'title'=>'A tudatos család',
            'publisher'=>'ÉDESVÍZ KIADÓ',
            'id'=>'9789635072668',
            'year'=>'2022',
            'storage'=>'2',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Gabriel Palacios',
            'title'=>'Ki a legjobb számodra?',
            'publisher'=>'ÉDESVÍZ KIADÓ',
            'id'=>'9789635072743',
            'year'=>'2022',
            'storage'=>'3',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Marine Sélénée',
            'title'=>'Összekapcsolt sorsok különböző végzetek',
            'publisher'=>'ÉDESVÍZ KIADÓ',
            'id'=>'9789635072804',
            'year'=>'2022',
            'storage'=>'1',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Szepes Mária',
            'title'=>'A mindennapi élet mágiája',
            'publisher'=>'ÉDESVÍZ KIADÓ',
            'id'=>'9789635072835',
            'year'=>'2022',
            'storage'=>'6',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Bernáth István',
            'title'=>'Állatok a lakásban',
            'publisher'=>'ELEKTRA KIADÓHÁZ BT.',
            'id'=>'9789635200597',
            'year'=>'2021',
            'storage'=>'4',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Bernáth István',
            'title'=>'Kutyafajták kislexikona',
            'publisher'=>'ELEKTRA KIADÓHÁZ BT.',
            'id'=>'9789635200634',
            'year'=>'2021',
            'storage'=>'4',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Dr. Patay Géza',
            'title'=>'Emlékképek a nemzeti agarászat utolsó évszázadából',
            'publisher'=>'Ludovika Egyetemi Kiadó',
            'id'=>'9789635315635',
            'year'=>'2021',
            'storage'=>'1',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Ant Middleton',
            'title'=>'Zéró negativitás',
            'publisher'=>'21. Század Kiadó',
            'id'=>'9789635680702',
            'year'=>'2022',
            'storage'=>'6',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Yuki Hattori',
            'title'=>'Macskanyelv',
            'publisher'=>'21. Század Kiadó',
            'id'=>'9789635680863',
            'year'=>'2021',
            'storage'=>'1',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Matthew McConaughey',
            'title'=>'Zöldlámpa - A te naplód, a te utad',
            'publisher'=>'21. Század Kiadó',
            'id'=>'9789635681709',
            'year'=>'2021',
            'storage'=>'2',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Sienna Cole  -  Ludányi Bettina',
            'title'=>'Nőiségnapló',
            'publisher'=>'ÁLOMGYÁR KIADÓ',
            'id'=>'9789635700417',
            'year'=>'2022',
            'storage'=>'1',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Keresztes Bianka',
            'title'=>'Kvíz az életem',
            'publisher'=>'Open Books',
            'id'=>'9789635721054',
            'year'=>'2021',
            'storage'=>'3',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Natacha Calestrémé',
            'title'=>'Az energiád kulcsa',
            'publisher'=>'MŰVELT NÉP KÖNYVKIADÓ',
            'id'=>'9789635800766',
            'year'=>'2022',
            'storage'=>'4',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Dr. Jen Gunter',
            'title'=>'Vagina biblia',
            'publisher'=>'ALEXANDRA KÖNYVESHÁZ KFT.',
            'id'=>'9789635820405',
            'year'=>'2022',
            'storage'=>'10',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Jill Krause',
            'title'=>'50 teendő, mielőtt megszületik',
            'publisher'=>'ALEXANDRA KÖNYVESHÁZ KFT.',
            'id'=>'9789635821051',
            'year'=>'2022',
            'storage'=>'3',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Johanna Basford',
            'title'=>'30 nap kreativitás',
            'publisher'=>'MANÓ KÖNYVEK',
            'id'=>'9789635840649',
            'year'=>'2021',
            'storage'=>'10',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Putnik-Mayer Yvette',
            'title'=>'Kisgazdi-képző',
            'publisher'=>'Allegro Könyvek',
            'id'=>'9789639240988',
            'year'=>'2021',
            'storage'=>'10',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Gombos Edina',
            'title'=>'Babanapló',
            'publisher'=>'PARTVONAL',
            'id'=>'9789639910089',
            'year'=>'2022',
            'storage'=>'8',
            'description'=>'Feltöltés alatt.',
      ]);
      DB::table('books')->insert([
            'author'=>'Lengyel Orsolya',
            'title'=>'Jaj! Szülők lettünk!',
            'publisher'=>'ROLAND-TOYS',
            'id'=>'9789737148568',
            'year'=>'2021',
            'storage'=>'4',
            'description'=>'Feltöltés alatt.',
      ]);
      
      
    }
}
