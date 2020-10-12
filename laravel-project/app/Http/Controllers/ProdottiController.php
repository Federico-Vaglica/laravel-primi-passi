<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdottiController extends Controller
{
    public function index(){
        return view('prodotti');
    }
}
