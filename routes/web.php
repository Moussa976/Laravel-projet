<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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

Route::get('/test', function () {
    return view('test');
});

// EXO affichez uen nouvelle vue "calcul", qui affiche la somme de 2 nombres qui affiche la somme passés en paramètres (nb1 = 5 et nb2 = 12)
Route::get('/test/calcul/{nb1?}/{nb2?}', [TestController::class, 'index']);


Route::match(['get', 'post'],'/test/form/', [TestController::class, 'form']);