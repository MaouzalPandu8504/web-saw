<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Result;

class ResultController extends Controller
{
    public function index() {
        $results = result::all();
        return view('result.read', compact('results'));
    }
}
