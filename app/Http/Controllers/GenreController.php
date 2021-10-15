<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class GenreController extends Controller
{
    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'nm_genre' => ['required', 'unique:genre,nm_genre'],
        ])->validate();

        Genre::create([
            'kd_genre' => IdGenerator::generate(['table' => 'genre', 'field' => 'kd_genre', 'length' => 4, 'prefix' => 'G']),
            'nm_genre' => strtoupper($request->nm_genre),
        ]);

        return redirect()->route('project')->with(['success' => 'Genre baru berhasil ditambahkan.']);
    }

    public function edit($id)
    {
        $genre = Genre::where('kd_genre', $id)->first();
        return view('project.genre.edit', [
            'data' => $genre,
        ]);
    }

    public function update(Request $request, $id)
    {
        $genre = Genre::where('kd_genre', $id)->first();
        Validator::make($request->all(), [
            'nm_genre' => ['required', "unique:genre,nm_genre,$genre->nm_genre,nm_genre"],
        ])->validate();
        $genre->update([
            'nm_genre' => strtoupper($request->nm_genre),
        ]);
        return redirect()->route('project')->with(['success' => 'Genre berhasil diubah.']);
    }

    public function destroy($id)
    {
        $genre = Genre::where('kd_genre', $id)->first();
        $genre->delete();
        return redirect()->route('project')->with(['success' => 'Genre berhasil dihapus.']);
    }
}
