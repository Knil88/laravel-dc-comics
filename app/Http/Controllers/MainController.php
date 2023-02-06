<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //creaimo il metodo home ed i dati del database

    public function home(){
        $people = Person::all();
        
        return view('home',compact('people'));
    }
    //Creaimo il metodo show che cliccando sul nome andrà  a visualizzare tutte le specifiche e lo colleghiamo alla pagina person

    public function personShow(Person  $person) {

        return view('person', compact('person'));
    }
}
