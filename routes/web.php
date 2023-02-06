<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

//Per ogni metodo andiamo a creare una route

Route::get('/', [MainController::class,'home'])->name('home');

//Con questo metodo possiamo mostare per ogni dato tutte le specifiche

Route :: get('/person/show/{person}', [MainController :: class, 'personShow'])
    -> name('person.show');
