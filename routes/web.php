<?php

use Illuminate\Support\Facades\Route;
use App\Model;
use App\Http\Controllers\EnregistrementController;
use App\Http\Controllers\TablesController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\TacheController;
use App\Http\Controllers\AnneesController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('index', function () {
    return view('index');
});

Route::get('/enregistrement', function () {
    return view('enregistrement');
});
Route::get('/calendrier', function () {
  return view('calendrier');
});

Route::get('/mes_taches', function () {
  return view('mes_taches');
});


Route::get('/tables', function () {
   return view('tables');
});

//Route::get('/liste', function () {
   // return view('liste');
//});

Route::get('/list_tache', [TacheController::class, "liste_taches"]);
Route::get('/liste', [EnregistrementController::class, "add"]);

//Route::get('/dashboard', function () {
    //return view('dashboard');
//})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

//Route::get("/tables",[TablesController::class,"tables"])->name("tables");
Route::get("/data",[DataController::class,"data"])->name("data");
//Route::get("/tache",[TacheController::class,"tache"])->name("tache");
Route::get("/annee",[AnneesController::class,"annee"])->name("annee");
//Route::resource('liste',ListeController::class);
Route::resource('tache',TacheController::class);
Route::resource('enregistrement',EnregistrementController::class);
//Route::resource('liste_tache',TacheController::class);
//enregistrer dans la base de donnée
Route::post("/annee",[AnneesController::class,"store"])->name("ajout3");
//recuperer la liste
Route::get("/annee",[AnneesController::class,"an"])->name("annee");

