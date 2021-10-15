<?php

namespace App\Http\Controllers;

use App\Models\Artis;
use App\Models\Negara;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class ArtisController extends Controller
{
    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'nm_artis' => ['required'],
            'bayaran' => ['required'],
            'award' => ['required'],
            'jk' => ['required'],
            'negara' => ['required'],
        ])->validate();

        Artis::create([
            'kd_artis' =>  IdGenerator::generate(['table' => 'artis', 'field' => 'kd_artis', 'length' => 4, 'prefix' => 'A']),
            'nm_artis' => strtoupper($request->nm_artis),
            'bayaran' => strtoupper($request->bayaran),
            'award' => strtoupper($request->award),
            'jk' => strtoupper($request->jk),
            'negara' => strtoupper($request->negara),
        ]);

        return redirect()->route('project')->with(['success' => 'Artis baru berhasil ditambahkan.']);
    }

    public function edit($id)
    {
        $artis = Artis::where('kd_artis', $id)->first();
        $countries = Negara::all();
        return view('project.artis.edit', [
            'data' => $artis,
            'countries' => $countries,
        ]);
    }

    public function update(Request $request, $id)
    {
        $artis = Artis::where('kd_artis', $id)->first();
        Validator::make($request->all(), [
            'nm_artis' => ['required'],
            'bayaran' => ['required'],
            'award' => ['required'],
            'jk' => ['required'],
            'negara' => ['required'],
        ])->validate();

        $artis->update([
            'nm_artis' => strtoupper($request->nm_artis),
            'bayaran' => strtoupper($request->bayaran),
            'award' => strtoupper($request->award),
            'jk' => strtoupper($request->jk),
            'negara' => strtoupper($request->negara),
        ]);
        return redirect()->route('project')->with(['success' => 'Artis berhasil diubah.']);
    }

    public function destroy($id)
    {
        $artis = Artis::where('kd_artis', $id)->first();
        $artis->delete();
        return redirect()->route('project')->with(['success' => 'Artis berhasil dihapus.']);
    }
}
