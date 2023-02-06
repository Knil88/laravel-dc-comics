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
   
    //Con il metodo  delete agganciato al controller consentirà nella pagina home appena colegato al link elimineremo i dati

 Route :: get('/person/delete/{person}', [MainController :: class, 'personDelete'])
-> name('person.delete');

//con questo metodo(il create) andiamo a definire du rotte rotte la prima che condurraà al form e la seconda che rimanderà alla pagina home

Route :: get('/person/create', [MainController :: class, 'personCreate'])
    -> name('person.create');

    Route :: post('/person/store', [MainController :: class, 'personStore'])
    -> name('person.store');