<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MachinController extends Controller
{
    public function show($n)
    {
        return view('machin')->with('numero', $n);
    }
}
