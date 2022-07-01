@extends('marques.layout')
@section('content')
<div class="card">
  <div class="card-header">Marques Page</div>
  @if ($errors->any())
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
@endif
  <div class="card-body">
      
      <form action="{{ route('marques.store') }}" method="post">
        {!! csrf_field() !!}
        <label>Nom</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Date de début</label></br>
        <input type="text" name="date" id="date" class="form-control"></br>
        <label>Description</label></br>
        <input type="text" name="description" id="description" class="form-control"></br>
        <label>Url site</label></br>
        <input type="text" name="url" id="url" class="form-control"></br>
        <label>Téléphone</label></br>
        <input type="text" name="telephone" id="telephone" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="email" id="email" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@endsection
{{-- @section('content2')
kgjhg jgfhgf
@endsection --}}