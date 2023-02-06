@extends('main-layout')
@section('content')
<main>
    <div class="d-flex justify-content-center mb-2">
        <button class="btn_create">
           <a  id="link_create" href="{{route('person.create')}}"> CREATE A NEW PERSON</a>
        </button>
    </div>
      
    <table class="table">
        <thead>
          <tr>
            
            <th scope="col">Nome</th>
            <th scope="col">Cognome</th>
           <th scope="col">Elimina Dato </th>
    
          </tr>
        </thead>
        <tbody>
            @foreach ($people as $person)
            <tr>
                
                <td><a href="{{ route('person.show', $person) }}">{{$person->name}}</a></td>
                <td>{{$person->lastname}}</td>

                {{-- Colleghiamo la route al link in modo che appena cliccato sul link si eliminerà il dato  --}}

                <td><a href="{{ route('person.delete', $person) }}">ELIMINA</a></td>
              </tr>
            @endforeach
          
        
        </tbody>
      </table>
</main>
@endsection