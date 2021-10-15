<?php

namespace App\Http\Controllers;

use App\Models\Negara;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NegaraController extends Controller
{
    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'kd_negara' => ['required', 'unique:negara,kd_negara'],
            'nm_negara' => ['required', 'unique:negara,nm_negara'],
        ])->validate();

        Negara::create([
            'kd_negara' => strtoupper($request->kd_negara),
            'nm_negara' => strtoupper($request->nm_negara),
        ]);

        return redirect()->route('project')->with(['success' => 'Negara baru berhasil ditambahkan.']);
    }

    public function edit($id)
    {
        $country = Negara::where('kd_negara', $id)->first();
        return view('project.negara.edit', [
            'data' => $country,
        ]);
    }

    public function update(Request $request, $id)
    {
        $country = Negara::where('kd_negara', $id)->first();
        Validator::make($request->all(), [
            'kd_negara' => ['required', "unique:negara,kd_negara,$country->kd_negara,kd_negara"],
            'nm_negara' => ['required', "unique:negara,nm_negara,$country->nm_negara,nm_negara"],
        ])->validate();
        $country->update([
            'kd_negara' => strtoupper($request->kd_negara),
            'nm_negara' => strtoupper($request->nm_negara),
        ]);
        return redirect()->route('project')->with(['success' => 'Negara berhasil diubah.']);
    }

    public function destroy($id)
    {
        $country = Negara::where('kd_negara', $id)->first();
        $country->delete();
        return redirect()->route('project')->with(['success' => 'Negara berhasil dihapus.']);
    }
}
