
@extends('marques.layout')
@section('content')
<div class="card">
  <div class="card-header">Marques Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Nom : {{ $marques->name }}</h5>
        <p class="card-text">Date de début : {{ $marques->date }}</p>
        <p class="card-text">Description : {{ $marques->description }}</p>
        <p class="card-text">Url site : {{ $marques->url }}</p>
        <p class="card-text">Téléphone : {{ $marques->telephone }}</p>
        <p class="card-text">Email : {{ $marques->email }}</p>
  </div>
      
    </hr>
  
  </div>
</div>