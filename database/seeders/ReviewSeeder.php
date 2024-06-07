<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert([
            [
                'title' => 'Uitstekende service',
                'content' => 'Ik kon na bellen meteen de volgende dag langskomen. Deed het voor 3x goedkoper dan de garage waar ik daarvoor was. Ik ga dus voortaan altijd hierheen.',
                'author_name' => 'Joey Herben',
                'rating' => 5,
            ],
            [
                'title' => 'Zeer kundig en klantvriendelijk',
                'content' => 'De eigenaar is zeer kundig, klantvriendelijk en levert uitstekend werk af. Heel blij eindelijk een goede betrouwbare garage gevonden te hebben. Dank, de Ford focus rijdt weer als een zonnetje!',
                'author_name' => 'Miriam de Beus',
                'rating' => 5,
            ],
            [
                'title' => 'Betrouwbare service',
                'content' => 'De eigenaar van deze garage is zeer vakkundig en vriendelijk. Hij gaf eerlijk advies en een goede service. Het probleem aan mijn auto was snel verholpen. Een garage met een betere prijs/kwaliteit verhouding kan je niet vinden. Ik kan deze garage zeker aanbevelen.',
                'author_name' => 'Tobias Van Stelten',
                'rating' => 5,
            ],
            [
                'title' => 'Snelle hulp',
                'content' => 'Deze man heeft mij binnen 1 uur uit de brand geholpen. Weet waar hij over praat en niet duur. Aanrader.',
                'author_name' => 'Ernst Sodekampff',
                'rating' => 5,
            ],
            [
                'title' => 'Topmonteur',
                'content' => 'Een topmonteur… eerlijk en geeft de juiste advies. Zéér behulpzaam en staat klaar voor de klanten. Mijn complimenten.',
                'author_name' => 'BRN Nanhoe',
                'rating' => 5,
            ],
            [
                'title' => 'Geweldige ervaring',
                'content' => 'Vriendelijk, goede service & advies. Auto werd die middag nog gemaakt. Dankbaar 🙏🏻',
                'author_name' => 'Marije Vesters',
                'rating' => 5,
            ]
        ]);
    }
}

