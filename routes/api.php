<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MunicipioController;
use App\Http\Controllers\ParroquiaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/{id}/municipios',[MunicipioController::class,'index']);
Route::get('/{id}/parroquias',[ParroquiaController::class,'index']);
