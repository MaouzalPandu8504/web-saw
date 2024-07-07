<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Weight;

use function Laravel\Prompts\alert;

class WeightController extends Controller
{
    public function index() {
        $weight = Weight::all();
        return view("weight.read", compact("weight"));
    }

    public function edit($id) {
        $weight = Weight::findOrFail($id);
        return view("weight.edit", compact("weight"));
    }

    public function update(Request $request, $id) {
    $request -> validate([
        'w1' => 'required|numeric',
        'w2' => 'required|numeric',
        'w3' => 'required|numeric',
        'w4' => 'required|numeric',
    ]);

    $total = $request -> w1 + $request -> w2 + $request -> w3 + $request -> w4;
    if ($total != 100){
        return redirect()->back()->withInput()->with(['error' => 'Bobot tidak boleh kurang / lebih dari 100!', 'total' => $total]);
    } else {
        $weight = Weight::findOrFail($id);
        $weight -> w1 = $request -> w1;
        $weight -> w2 = $request -> w2;
        $weight -> w3 = $request -> w3;
        $weight -> w4 = $request -> w4;

        $weight -> save();
        return redirect() -> route('weight') -> with('success', 'weight updated successfully.');
    }

}
}
