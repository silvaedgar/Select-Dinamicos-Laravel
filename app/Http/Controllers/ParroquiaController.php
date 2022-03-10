<?php

namespace App\Http\Controllers;

use App\Models\Parroquia;

class ParroquiaController extends Controller
{
    public function index($municipio_id)
    {
        return  (Parroquia::where('municipio_id','=',$municipio_id)->get());
    }
}
