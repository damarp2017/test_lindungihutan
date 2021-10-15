<?php

namespace App\Http\Controllers;

use App\Models\Artis;
use App\Models\Film;
use App\Models\Genre;
use App\Models\Produser;
use Illuminate\Http\Request;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class FilmController extends Controller
{
    public function action(Request $request)
    {
        if ($request->ajax()) {
            if ($request->action == 'edit') {
                $film = Film::where('kd_film', $request->kd_film)->first();
                $film->update([
                    'nm_film' => $request->nm_film,
                    'pendapatan' => $request->pendapatan,
                    'nominasi' => $request->nominasi,
                ]);
            }
            return response()->json($request);
        }
    }

    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'nm_film' => ['required'],
            'genre' => ['required'],
            'artis' => ['required'],
            'produser' => ['required'],
            'pendapatan' => ['required'],
            'nominasi' => ['required'],
        ])->validate();

        Film::create([
            'kd_film' =>  IdGenerator::generate(['table' => 'film', 'field' => 'kd_film', 'length' => 4, 'prefix' => 'F']),
            'nm_film' => strtoupper($request->nm_film),
            'genre' => strtoupper($request->genre),
            'artis' => strtoupper($request->artis),
            'produser' => strtoupper($request->produser),
            'pendapatan' => strtoupper($request->pendapatan),
            'nominasi' => strtoupper($request->nominasi),
        ]);

        return redirect()->route('project')->with(['success' => 'Film baru berhasil ditambahkan.']);
    }

    public function edit($id)
    {
        $artis = Film::where('kd_film', $id)->first();
        $genres = Genre::all();
        $actress = Artis::all();
        $produsers = Produser::all();
        return view('project.film.edit', [
            'data' => $artis,
            'genres' => $genres,
            'actress' => $actress,
            'produsers' => $produsers,
        ]);
    }

    public function update(Request $request, $id)
    {
        $film = Film::where('kd_film', $id)->first();
        Validator::make($request->all(), [
            'nm_film' => ['required'],
            'genre' => ['required'],
            'artis' => ['required'],
            'produser' => ['required'],
            'pendapatan' => ['required'],
            'nominasi' => ['required'],
        ])->validate();

        $film->update([
            'nm_film' => strtoupper($request->nm_film),
            'genre' => strtoupper($request->genre),
            'artis' => strtoupper($request->artis),
            'produser' => strtoupper($request->produser),
            'pendapatan' => strtoupper($request->pendapatan),
            'nominasi' => strtoupper($request->nominasi),
        ]);
        return redirect()->route('project')->with(['success' => 'Film berhasil diubah.']);
    }

    public function destroy($id)
    {
        $artis = Film::where('kd_film', $id)->first();
        $artis->delete();
        return redirect()->route('project')->with(['success' => 'Film berhasil dihapus.']);
    }
}
