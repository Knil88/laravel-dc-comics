@extends('main-layout')
@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">Cognome</th>
        <th scope="col">Data Di Nascita</th>
        <th scope="col">Altezza</th>
        <th scope="col">Elimina Dato </th>

      </tr>
    </thead>
    <tbody>
        @foreach ($people as $person)
        <tr>
            <th scope="row">{{$person->id}}</th>
            <td><a href="">{{$person->name}}</a></td>
            <td><a href="">{{$person->lastname}}</a></td>
            <td><a href="">{{$person->date_of_birth}}</a></td>
            <td><a href="">{{$person->height}}</a> metri</td>
            <td><a href="">ELIMINA</a></td>
          </tr>
        @endforeach
      
    
    </tbody>
  </table>
@endsection