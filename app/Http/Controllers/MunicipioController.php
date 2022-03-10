<?php

namespace App\Http\Controllers;

use App\Models\Municipio;

class MunicipioController extends Controller
{
    public function index($estado_id)
    {
        return  (Municipio::where('estado_id','=',$estado_id)->get());
        //
    }

}
