
@extends('marques.layout')
@section('content')
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('marques/' .$marques->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$marques->id}}" id="id" />
        <label>Nom</label></br>
        <input type="text" name="name" id="name" value="{{$marques->name}}" class="form-control"></br>
        <label>Date de début</label></br>
        <input type="text" name="date" id="date" value="{{$marques->date}}" class="form-control"></br>
        <label>Description</label></br>
        <input type="text" name="description" id="description" value="{{$marques->description}}" class="form-control"></br>
        <label>Url site</label></br>
        <input type="text" name="url" id="url" value="{{$marques->url}}" class="form-control"></br>
        <label>Téléphone</label></br>
        <input type="text" name="telephone" id="telephone" value="{{$marques->telephone}}" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="email" id="email" value="{{$marques->email}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop