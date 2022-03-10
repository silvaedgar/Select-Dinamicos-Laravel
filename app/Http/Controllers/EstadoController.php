<?php

namespace App\Http\Controllers;

use App\Models\Estado;

class EstadoController extends Controller
{
    public function index()
    {
        $estados = Estado::all();

        return view('welcome',compact('estados'));
    }

}
