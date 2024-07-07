<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Normalization;
class NormalizationController extends Controller
{
    public function index() {
        $normalizations = normalization::all();
        return view("normalization.read", compact("normalizations"));
    }
}
