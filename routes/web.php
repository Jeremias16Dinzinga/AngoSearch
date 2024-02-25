<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;
use App\Models\Angolano;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $totalRegistros = Angolano::count();
    $totalMasculino = Angolano::where('sexo', 'M')->count();
    $totalFeminino= Angolano::where('sexo', 'F')->count();
    $totalProvincias = Angolano::distinct()->count('provincia');

    return view('index', compact('totalRegistros', 'totalMasculino','totalFeminino', 'totalProvincias'));    
});

Route::get('/startSearch', function () {
    return view('search');
});


Route::get('/search', [SearchController::class, 'searchQuickly'])->name('search');
Route::get('/searchUnique', [SearchController::class, 'searchUnique'])->name('searchUnique');


