@extends('main-layout')
@section('content')


@section('content')
<section class="d-flex justify-content-center">
    <div class="form_container">
        <form method="POST" action="{{ route('person.store') }}">
            <h1>New Person</h1>
            @csrf
            <label for="name">Nome</label>
            <input type="text" name="name">
            <br>
            <label for="lastname">Cognome</label>
            <input type="text" name="lastname">
            <br>
            <label for="date_of_birth">Data di nascita</label>
            <input type="date" name="date_of_birth">
            <br>
            <label for="height">Altezza</label>
            <input type="text" name="height">
            <br>
            <input id="btn_submit" type="submit" value="CREATE NEW TASK">
        </form>
        
    </div> 
</section>  
    
  
@endsection
@endsection