<?php

use App\Http\Controllers\ArtisController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\NegaraController;
use App\Http\Controllers\ProduserController;
use App\Models\Artis;
use App\Models\Film;
use App\Models\Genre;
use App\Models\Negara;
use App\Models\Produser;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
})->name('index');

Route::prefix('sql')->group(function () {
    Route::get('1', function () {
        $films = Film::orderBy('nominasi', 'DESC')->get();
        return view('sql.1', [
            'data' => $films,
        ]);
    })->name('sql.1');

    Route::get('2', function () {
        $nominasi_terbanyak = Film::max('nominasi');
        $films = Film::where('nominasi', $nominasi_terbanyak)->get();
        return view('sql.2', [
            'data' => $films,
        ]);
    })->name('sql.2');

    Route::get('3', function () {
        $films = Film::where('nominasi', 0)->get();
        return view('sql.3', [
            'data' => $films,
        ]);
    })->name('sql.3');

    Route::get('4', function () {
        $films = Film::orderBy('pendapatan', 'ASC')->get();
        return view('sql.4', [
            'data' => $films,
        ]);
    })->name('sql.4');

    Route::get('5', function () {
        $pendapatan_terbesar = Film::max('pendapatan');
        $films = Film::where('pendapatan', $pendapatan_terbesar)->get();
        return view('sql.5', [
            'data' => $films,
        ]);
    })->name('sql.5');

    Route::get('6', function () {
        $semua_pendapatan = Film::get()->sum('pendapatan');
        $jumlah_film = Film::get()->count();
        $average = $semua_pendapatan / $jumlah_film;
        return view('sql.6', [
            'data' => $average,
        ]);
    })->name('sql.6');

    Route::get('7', function () {
        $award_terbanyak = Artis::max('award');
        $films = Film::whereHas('art', function ($query) use ($award_terbanyak) {
            $query->where('award', $award_terbanyak);
        })->get();
        return view('sql.7', [
            'data' => $films,
        ]);
    })->name('sql.7');

    Route::get('8', function () {
        $semua_nominasi = Film::get()->sum('nominasi');
        $jumlah_film = Film::get()->count();
        $average = $semua_nominasi / $jumlah_film;
        return view('sql.8', [
            'data' => $average,
        ]);
    })->name('sql.8');

    Route::get('9', function () {
        $films = Film::where('nm_film', 'like', 'i%')->get();
        return view('sql.9', [
            'data' => $films,
        ]);
    })->name('sql.9');

    Route::get('10', function () {
        $films = Film::where('nm_film', 'like', '%n')->get();
        return view('sql.10', [
            'data' => $films,
        ]);
    })->name('sql.10');

    Route::get('11', function () {
        $films = Film::where('nm_film', 'like', '%c%')->get();
        return view('sql.11', [
            'data' => $films,
        ]);
    })->name('sql.11');

    Route::get('12', function () {
        $films = Film::orderBy('pendapatan', 'DESC')->where('nm_film', 'like', '%s%')->first();
        return view('sql.12', [
            'data' => $films,
        ]);
    })->name('sql.12');

    Route::get('13', function () {
        $films = Film::whereHas('art', function ($query) {
            $query->where('negara', 'HK');
        })->get();
        return view('sql.13', [
            'data' => $films,
        ]);
    })->name('sql.13');

    Route::get('14', function () {
        $films = Film::whereHas('art._negara', function ($query) {
            $query->where('nm_negara', 'like', '%o%');
        })->get();
        return view('sql.14', [
            'data' => $films,
        ]);
    })->name('sql.14');

    Route::get('16', function () {
        $negara = Negara::get();
        // dd($negara);
        return view('sql.16', [
            'data' => $negara,
        ]);
    })->name('sql.16');

    Route::get('17', function () {
        $artis = Artis::orderBy('bayaran', 'ASC')->first();
        return view('sql.17', [
            'data' => $artis,
        ]);
    })->name('sql.17');

    Route::get('18', function () {
        $artis = Artis::withCount('_film')->get()->where('_film_count', 0);
        return view('sql.18', [
            'data' => $artis,
        ]);
    })->name('sql.18');

    Route::get('19', function () {
        $film_terbanyak = Artis::get()->max('count_film');
        $artis = Artis::get()->where('count_film', $film_terbanyak);
        return view('sql.19', [
            'data' => $artis,
        ]);
    })->name('sql.19');

    Route::get('20', function () {
        $artis = Artis::whereHas('_film._genre', function ($query) {
            $query->where('nm_genre', 'DRAMA');
        })->get();
        return view('sql.20', [
            'data' => $artis,
        ]);
    })->name('sql.20');

    Route::get('21', function () {
        $artis = Artis::whereHas('_film._genre', function ($query) {
            $query->where('nm_genre', 'HORROR');
        })->get();
        return view('sql.21', [
            'data' => $artis,
        ]);
    })->name('sql.21');

    Route::get('22', function () {
        $produser = Produser::withCount('_film')->get()->where('_film_count', 0);
        return view('sql.22', [
            'data' => $produser,
        ]);
    })->name('sql.22');

    Route::get('23', function () {
        $bayaran_termahal = Artis::max('bayaran');
        $produser = Produser::whereHas('_film.art', function ($query) use ($bayaran_termahal) {
            $query->where('bayaran', $bayaran_termahal);
        })->get();
        return view('sql.23', [
            'data' => $produser,
        ]);
    })->name('sql.23');

    Route::get('25', function () {
        $film = Film::whereHas('art', function ($query) {
            $query->where('nm_artis', 'like', 'j%');
        })->get();
        return view('sql.25', [
            'data' => $film,
        ]);
    })->name('sql.25');

    Route::get('26', function () {
        $produser = Produser::where('international', 'YA')->get();
        return view('sql.26', [
            'data' => $produser,
        ]);
    })->name('sql.26');

    Route::get('27', function () {
        $produser = Produser::where('international', 'YA')->get()->count();
        return view('sql.27', [
            'data' => $produser,
        ]);
    })->name('sql.27');

    Route::get('28', function () {
        $produser = Produser::get();
        return view('sql.28', [
            'data' => $produser,
        ]);
    })->name('sql.28');

    Route::get('29', function () {
        $produser = Produser::get();
        return view('sql.29', [
            'data' => $produser,
        ]);
    })->name('sql.29');

    Route::get('30', function () {
        $produser = Produser::with('_film')->where('nm_produser', 'MARVEL')->first();
        return view('sql.30', [
            'data' => $produser->_film->sum('pendapatan'),
        ]);
    })->name('sql.30');

    Route::get('31', function () {
        $produser = Produser::with('_film')->where('international', 'TIDAK')->get();
        $pendapatan = 0;
        foreach ($produser as $item) {
            $pendapatan += $item->_film->sum('pendapatan');
        }
        return view('sql.31', [
            'data' => $pendapatan,
        ]);
    })->name('sql.31');
});

Route::prefix('project')->group(function () {
    Route::get('/index', function () {
        $countries = Negara::get();
        $producers = Produser::get();
        $genres = Genre::get();
        $actress = Artis::get();
        $films = Film::get();
        return view('project', [
            'countries' => $countries,
            'producers' => $producers,
            'genres' => $genres,
            'actress' => $actress,
            'films' => $films,
        ]);
    })->name('project');

    // Negara
    Route::get('negara/create', function () {
        return view('project.negara.create');
    })->name('negara.create');
    Route::post('negara/store', [NegaraController::class, 'store'])->name('negara.store');
    Route::get('negara/edit/{id}', [NegaraController::class, 'edit'])->name('negara.edit');
    Route::put('negara/update/{id}', [NegaraController::class, 'update'])->name('negara.update');
    Route::delete('negara/destroy/{id}', [NegaraController::class, 'destroy'])->name('negara.destroy');

    // Produser
    Route::get('produser/create', function () {
        return view('project.produser.create');
    })->name('produser.create');
    Route::post('produser/store', [ProduserController::class, 'store'])->name('produser.store');
    Route::get('produser/edit/{id}', [ProduserController::class, 'edit'])->name('produser.edit');
    Route::put('produser/update/{id}', [ProduserController::class, 'update'])->name('produser.update');
    Route::delete('produser/destroy/{id}', [ProduserController::class, 'destroy'])->name('produser.destroy');

    // Genre
    Route::get('genre/create', function () {
        return view('project.genre.create');
    })->name('genre.create');
    Route::post('genre/store', [GenreController::class, 'store'])->name('genre.store');
    Route::get('genre/edit/{id}', [GenreController::class, 'edit'])->name('genre.edit');
    Route::put('genre/update/{id}', [GenreController::class, 'update'])->name('genre.update');
    Route::delete('genre/destroy/{id}', [GenreController::class, 'destroy'])->name('genre.destroy');

    // Artis
    Route::get('artis/create', function () {
        $countries = Negara::all();
        return view('project.artis.create', [
            'countries' => $countries,
        ]);
    })->name('artis.create');
    Route::post('artis/store', [ArtisController::class, 'store'])->name('artis.store');
    Route::get('artis/edit/{id}', [ArtisController::class, 'edit'])->name('artis.edit');
    Route::put('artis/update/{id}', [ArtisController::class, 'update'])->name('artis.update');
    Route::delete('artis/destroy/{id}', [ArtisController::class, 'destroy'])->name('artis.destroy');

    // Film
    Route::get('film/create', function () {
        $genres = Genre::all();
        $actress = Artis::all();
        $produsers = Produser::all();
        return view('project.film.create', [
            'genres' => $genres,
            'actress' => $actress,
            'produsers' => $produsers,
        ]);
    })->name('film.create');
    Route::post('film/store', [FilmController::class, 'store'])->name('film.store');
    Route::get('film/edit/{id}', [FilmController::class, 'edit'])->name('film.edit');
    Route::put('film/update/{id}', [FilmController::class, 'update'])->name('film.update');
    Route::delete('film/destroy/{id}', [FilmController::class, 'destroy'])->name('film.destroy');
    Route::post('film/action', [FilmController::class, 'action'])->name('film.action');
});
