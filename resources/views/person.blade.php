@extends('main-layout')
@section('content')
    <section class="d-flex justify-content-center ">
        <div>
            <h2>
                Nome: {{$person->name}} <br>
                Cognome: {{$person->lastname}} <br>
                Data Di Nascita : {{$person->date_of_birth}}<br>
                Altezza :  {{$person->height}} Metri
            </h2>
        </div>
    </section>
@endsection