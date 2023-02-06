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

    public function personDelete(Person $person) {

        $person -> delete();
    
        return redirect() -> route('home');
    }
//aggancito al controller facciamo in modo che una volta collegato al ink ci porti nel nostro form
    public function personCreate() {

        return view('personCreate');
    }
    public function personStore(Request $request) {

        $data = $request -> validate([
            'name' => 'required|string|max:32',
            'lastname' => 'nullable|string',
            'date_of_birth' => 'required|integer|min:0|max:10',
            'height'=>'required|integer/min'
        ]);
    
        $person = new Person();
    
        $person -> name = $data['name'];
        $person -> lastname = $data['lastname'];
        $person -> date_of_birth = $data['date_of_birth'];
        $person -> height = $data['height'];
    
        $person -> save();
    
        return redirect() -> route('home');
    }
}
