<?php

namespace App\Http\Controllers;

use App\Models\Produser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class ProduserController extends Controller
{
    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'nm_produser' => ['required'],
            'international' => ['required'],
        ])->validate();

        Produser::create([
            'kd_produser' =>  IdGenerator::generate(['table' => 'produser', 'field' => 'kd_produser', 'length' => 4, 'prefix' => 'PD']),
            'nm_produser' => strtoupper($request->nm_produser),
            'international' => strtoupper($request->international),
        ]);

        return redirect()->route('project')->with(['success' => 'Produser baru berhasil ditambahkan.']);
    }

    public function edit($id)
    {
        $produser = Produser::where('kd_produser', $id)->first();
        return view('project.produser.edit', [
            'data' => $produser,
        ]);
    }

    public function update(Request $request, $id)
    {
        $produser = Produser::where('kd_produser', $id)->first();
        Validator::make($request->all(), [
            'nm_produser' => ['required'],
            'international' => ['required'],
        ])->validate();
        $produser->update([
            'nm_produser' => strtoupper($request->nm_produser),
            'international' => strtoupper($request->international),
        ]);
        return redirect()->route('project')->with(['success' => 'Produser berhasil diubah.']);
    }

    public function destroy($id)
    {
        $produser = Produser::where('kd_produser', $id)->first();
        $produser->delete();
        return redirect()->route('project')->with(['success' => 'Produser berhasil dihapus.']);
    }
}
