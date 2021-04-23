@extends('disseny')

@section('content')

<h1>Llista de Usuaris</h1>
<div class="mt-5">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
  <table class="table">
    <thead>
        <tr class="table-primary">
          <td># ID</td>
          <td>Nom</td>
          <td>Cognoms</td>
          <td>Correu</td>
          
        </tr>
    </thead>
    <tbody>
        @foreach($usuari as $us)
        <tr>
            <td>{{$us->id}}</td>
            <td>{{$us->Nom}}</td>
            <td>{{$us->Cognoms}}</td>
            <td>{{$us->Correu}}</td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
<br>
@endsection