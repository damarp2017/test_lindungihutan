<?php

namespace Database\Seeders;

use App\Models\Artis;
use App\Models\Film;
use App\Models\Genre;
use App\Models\Negara;
use App\Models\Produser;
use Illuminate\Database\Seeder;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $negara_1 = new Negara();
        $negara_1->kd_negara = 'AS';
        $negara_1->nm_negara = 'AMERIKA SERIKAT';
        $negara_1->save();

        $negara_2 = new Negara();
        $negara_2->kd_negara = 'HK';
        $negara_2->nm_negara = 'HONGKONG';
        $negara_2->save();

        $negara_2 = new Negara();
        $negara_2->kd_negara = 'ID';
        $negara_2->nm_negara = 'INDONESIA';
        $negara_2->save();

        $negara_2 = new Negara();
        $negara_2->kd_negara = 'IN';
        $negara_2->nm_negara = 'INDIA';
        $negara_2->save();

        $produser_1 = new Produser();
        $produser_1->kd_produser = IdGenerator::generate(['table' => 'produser', 'field' => 'kd_produser', 'length' => 4, 'prefix' => 'PD']);
        $produser_1->nm_produser = 'MARVEL';
        $produser_1->international = 'YA';
        $produser_1->save();

        $produser_2 = new Produser();
        $produser_2->kd_produser = IdGenerator::generate(['table' => 'produser', 'field' => 'kd_produser', 'length' => 4, 'prefix' => 'PD']);
        $produser_2->nm_produser = 'HONGKONG CINEMA';
        $produser_2->international = 'YA';
        $produser_2->save();

        $produser_3 = new Produser();
        $produser_3->kd_produser = IdGenerator::generate(['table' => 'produser', 'field' => 'kd_produser', 'length' => 4, 'prefix' => 'PD']);
        $produser_3->nm_produser = 'RAPI FILM';
        $produser_3->international = 'TIDAK';
        $produser_3->save();

        $produser_4 = new Produser();
        $produser_4->kd_produser = IdGenerator::generate(['table' => 'produser', 'field' => 'kd_produser', 'length' => 4, 'prefix' => 'PD']);
        $produser_4->nm_produser = 'PARKIT';
        $produser_4->international = 'TIDAK';
        $produser_4->save();

        $produser_5 = new Produser();
        $produser_5->kd_produser = IdGenerator::generate(['table' => 'produser', 'field' => 'kd_produser', 'length' => 4, 'prefix' => 'PD']);
        $produser_5->nm_produser = 'PARAMOUNT PICTURE';
        $produser_5->international = 'YA';
        $produser_5->save();

        $genre_1 = new Genre();
        $genre_1->kd_genre = IdGenerator::generate(['table' => 'genre', 'field' => 'kd_genre', 'length' => 4, 'prefix' => 'G']);
        $genre_1->nm_genre = 'ACTION';
        $genre_1->save();

        $genre_2 = new Genre();
        $genre_2->kd_genre = IdGenerator::generate(['table' => 'genre', 'field' => 'kd_genre', 'length' => 4, 'prefix' => 'G']);
        $genre_2->nm_genre = 'HORROR';
        $genre_2->save();

        $genre_3 = new Genre();
        $genre_3->kd_genre = IdGenerator::generate(['table' => 'genre', 'field' => 'kd_genre', 'length' => 4, 'prefix' => 'G']);
        $genre_3->nm_genre = 'COMEDY';
        $genre_3->save();

        $genre_4 = new Genre();
        $genre_4->kd_genre = IdGenerator::generate(['table' => 'genre', 'field' => 'kd_genre', 'length' => 4, 'prefix' => 'G']);
        $genre_4->nm_genre = 'DRAMA';
        $genre_4->save();

        $genre_5 = new Genre();
        $genre_5->kd_genre = IdGenerator::generate(['table' => 'genre', 'field' => 'kd_genre', 'length' => 4, 'prefix' => 'G']);
        $genre_5->nm_genre = 'THRILLER';
        $genre_5->save();

        $genre_6 = new Genre();
        $genre_6->kd_genre = IdGenerator::generate(['table' => 'genre', 'field' => 'kd_genre', 'length' => 4, 'prefix' => 'G']);
        $genre_6->nm_genre = 'FICTION';
        $genre_6->save();

        $artis_1 = new Artis();
        $artis_1->kd_artis = IdGenerator::generate(['table' => 'artis', 'field' => 'kd_artis', 'length' => 4, 'prefix' => 'A']);
        $artis_1->nm_artis = "ROBERT DOWNEY JR";
        $artis_1->jk = 'PRIA';
        $artis_1->bayaran = 1000000000;
        $artis_1->award = 2;
        $artis_1->negara = 'AS';
        $artis_1->save();

        $artis_2 = new Artis();
        $artis_2->kd_artis = IdGenerator::generate(['table' => 'artis', 'field' => 'kd_artis', 'length' => 4, 'prefix' => 'A']);
        $artis_2->nm_artis = "ANGELINA JOLIE";
        $artis_2->jk = 'WANITA';
        $artis_2->bayaran = 700000000;
        $artis_2->award = 1;
        $artis_2->negara = 'AS';
        $artis_2->save();

        $artis_3 = new Artis();
        $artis_3->kd_artis = IdGenerator::generate(['table' => 'artis', 'field' => 'kd_artis', 'length' => 4, 'prefix' => 'A']);
        $artis_3->nm_artis = "JACKIE CHAN";
        $artis_3->jk = 'PRIA';
        $artis_3->bayaran = 200000000;
        $artis_3->award = 7;
        $artis_3->negara = 'HK';
        $artis_3->save();

        $artis_4 = new Artis();
        $artis_4->kd_artis = IdGenerator::generate(['table' => 'artis', 'field' => 'kd_artis', 'length' => 4, 'prefix' => 'A']);
        $artis_4->nm_artis = "JOE TASLIM";
        $artis_4->jk = 'PRIA';
        $artis_4->bayaran = 350000000;
        $artis_4->award = 1;
        $artis_4->negara = 'ID';
        $artis_4->save();

        $artis_5 = new Artis();
        $artis_5->kd_artis = IdGenerator::generate(['table' => 'artis', 'field' => 'kd_artis', 'length' => 4, 'prefix' => 'A']);
        $artis_5->nm_artis = "CHELSEA ISLAN";
        $artis_5->jk = 'WANITA';
        $artis_5->bayaran = 300000000;
        $artis_5->award = 0;
        $artis_5->negara = 'ID';
        $artis_5->save();

        $film_1 = new Film();
        $film_1->kd_film = IdGenerator::generate(['table' => 'film', 'field' => 'kd_film', 'length' => 4, 'prefix' => 'F']);
        $film_1->nm_film = 'IRON MAN';
        $film_1->genre = 'G001';
        $film_1->artis = 'A001';
        $film_1->produser = 'PD01';
        $film_1->pendapatan = 2000000000;
        $film_1->nominasi = 3;
        $film_1->save();

        $film_2 = new Film();
        $film_2->kd_film = IdGenerator::generate(['table' => 'film', 'field' => 'kd_film', 'length' => 4, 'prefix' => 'F']);
        $film_2->nm_film = 'IRON MAN 2';
        $film_2->genre = 'G001';
        $film_2->artis = 'A001';
        $film_2->produser = 'PD01';
        $film_2->pendapatan = 1800000000;
        $film_2->nominasi = 2;
        $film_2->save();

        $film_3 = new Film();
        $film_3->kd_film = IdGenerator::generate(['table' => 'film', 'field' => 'kd_film', 'length' => 4, 'prefix' => 'F']);
        $film_3->nm_film = 'IRON MAN 3';
        $film_3->genre = 'G001';
        $film_3->artis = 'A001';
        $film_3->produser = 'PD01';
        $film_3->pendapatan = 1200000000;
        $film_3->nominasi = 0;
        $film_3->save();

        $film_4 = new Film();
        $film_4->kd_film = IdGenerator::generate(['table' => 'film', 'field' => 'kd_film', 'length' => 4, 'prefix' => 'F']);
        $film_4->nm_film = 'AVENGER : CIVIL WAR';
        $film_4->genre = 'G001';
        $film_4->artis = 'A001';
        $film_4->produser = 'PD01';
        $film_4->pendapatan = 2000000000;
        $film_4->nominasi = 1;
        $film_4->save();

        $film_5 = new Film();
        $film_5->kd_film = IdGenerator::generate(['table' => 'film', 'field' => 'kd_film', 'length' => 4, 'prefix' => 'F']);
        $film_5->nm_film = 'SPIDERMAN HOME COMING';
        $film_5->genre = 'G001';
        $film_5->artis = 'A001';
        $film_5->produser = 'PD01';
        $film_5->pendapatan = 1300000000;
        $film_5->nominasi = 0;
        $film_5->save();

        $film_6 = new Film();
        $film_6->kd_film = IdGenerator::generate(['table' => 'film', 'field' => 'kd_film', 'length' => 4, 'prefix' => 'F']);
        $film_6->nm_film = 'THE RAID';
        $film_6->genre = 'G001';
        $film_6->artis = 'A004';
        $film_6->produser = 'PD03';
        $film_6->pendapatan = 800000000;
        $film_6->nominasi = 5;
        $film_6->save();

        $film_7 = new Film();
        $film_7->kd_film = IdGenerator::generate(['table' => 'film', 'field' => 'kd_film', 'length' => 4, 'prefix' => 'F']);
        $film_7->nm_film = 'FAST AND FURIOS';
        $film_7->genre = 'G001';
        $film_7->artis = 'A004';
        $film_7->produser = 'PD05';
        $film_7->pendapatan = 830000000;
        $film_7->nominasi = 2;
        $film_7->save();

        $film_8 = new Film();
        $film_8->kd_film = IdGenerator::generate(['table' => 'film', 'field' => 'kd_film', 'length' => 4, 'prefix' => 'F']);
        $film_8->nm_film = 'HABIBIE DAN AINUN';
        $film_8->genre = 'G004';
        $film_8->artis = 'A005';
        $film_8->produser = 'PD03';
        $film_8->pendapatan = 670000000;
        $film_8->nominasi = 4;
        $film_8->save();

        $film_9 = new Film();
        $film_9->kd_film = IdGenerator::generate(['table' => 'film', 'field' => 'kd_film', 'length' => 4, 'prefix' => 'F']);
        $film_9->nm_film = 'POLICY STORY';
        $film_9->genre = 'G001';
        $film_9->artis = 'A003';
        $film_9->produser = 'PD02';
        $film_9->pendapatan = 700000000;
        $film_9->nominasi = 3;
        $film_9->save();

        $film_10 = new Film();
        $film_10->kd_film = IdGenerator::generate(['table' => 'film', 'field' => 'kd_film', 'length' => 4, 'prefix' => 'F']);
        $film_10->nm_film = 'POLICY STORY 2';
        $film_10->genre = 'G001';
        $film_10->artis = 'A003';
        $film_10->produser = 'PD02';
        $film_10->pendapatan = 710000000;
        $film_10->nominasi = 1;
        $film_10->save();

        $film_11 = new Film();
        $film_11->kd_film = IdGenerator::generate(['table' => 'film', 'field' => 'kd_film', 'length' => 4, 'prefix' => 'F']);
        $film_11->nm_film = 'POLICY STORY 3';
        $film_11->genre = 'G001';
        $film_11->artis = 'A003';
        $film_11->produser = 'PD02';
        $film_11->pendapatan = 615000000;
        $film_11->nominasi = 0;
        $film_11->save();

        $film_12 = new Film();
        $film_12->kd_film = IdGenerator::generate(['table' => 'film', 'field' => 'kd_film', 'length' => 4, 'prefix' => 'F']);
        $film_12->nm_film = 'RUSH HOUR';
        $film_12->genre = 'G003';
        $film_12->artis = 'A003';
        $film_12->produser = 'PD05';
        $film_12->pendapatan = 695000000;
        $film_12->nominasi = 2;
        $film_12->save();

        $film_13 = new Film();
        $film_13->kd_film = IdGenerator::generate(['table' => 'film', 'field' => 'kd_film', 'length' => 4, 'prefix' => 'F']);
        $film_13->nm_film = 'KUNGFU PANDA';
        $film_13->genre = 'G003';
        $film_13->artis = 'A003';
        $film_13->produser = 'PD05';
        $film_13->pendapatan = 923000000;
        $film_13->nominasi = 5;
        $film_13->save();
    }
}
