<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alternative;
use App\Models\MinMax;

class AlternativeController extends Controller
{
    public function index() {
        $alternatives = Alternative::all();
        $minmaxs = MinMax::all();
        return view("alternative.read", compact("alternatives", 'minmaxs'));
    }

    public function edit($id) {
        $alternative = Alternative::findOrFail($id);
        return view('alternative.edit', compact('alternative'));
    }

    public function update(Request $request, $id) {
        $request -> validate([
            'nama' => 'required|string|max:50',
            'luas_bangunan' => 'required|numeric',
            'jumlah_penerangan' => 'required|numeric',
            'pendapatan' => 'required|numeric',
            'jumlah_anggota_keluarga' => 'required|numeric',
        ]);

        $alternative = Alternative::findOrFail($id);
        $alternative -> nama = $request -> nama;
        $alternative -> luas_bangunan = $request -> luas_bangunan;
        $alternative -> jumlah_penerangan = $request -> jumlah_penerangan;
        $alternative -> pendapatan = $request -> pendapatan;
        $alternative -> jumlah_anggota_keluarga = $request -> jumlah_anggota_keluarga;
        $alternative -> save();

        return redirect() -> route('alternative') -> with('success', 'Alternative updated successfully.');
    }

    public function create() {
        return view('alternative.create');
    }

    public function store(Request $request) {
        $request -> validate([
            'nama'=> 'required | string',
            'luas_bangunan' => 'required | numeric',
            'jumlah_penerangan' => 'required | numeric',
            'pendapatan' => 'required | numeric',
            'jumlah_anggota_keluarga'=> 'required | numeric'
        ]);

        Alternative::create([
            'nama' => $request -> nama,
            'luas_bangunan' => $request -> luas_bangunan,
            'jumlah_penerangan' => $request -> jumlah_penerangan,
            'pendapatan' => $request -> pendapatan,
            'jumlah_anggota_keluarga' => $request -> jumlah_anggota_keluarga
        ]);

        return redirect() -> route('alternative');
    }

    public function destroy($id) {
        $alternative = Alternative::findOrFail($id);
        $alternative->delete();

    return redirect()->route('alternative')->with('success', 'Alternative deleted successfully.');
    }
}
