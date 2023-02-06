@extends('main-layout')
@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">Cognome</th>
       <th scope="col">Elimina Dato </th>

      </tr>
    </thead>
    <tbody>
        @foreach ($people as $person)
        <tr>
            <th scope="row">{{$person->id}}</th>
            <td><a href="{{ route('person.show', $person) }}">{{$person->name}}</a></td>
            <td>{{$person->lastname}}</td>
            <td><a href="">ELIMINA</a></td>
          </tr>
        @endforeach
      
    
    </tbody>
  </table>
@endsection