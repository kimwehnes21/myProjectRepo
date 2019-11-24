@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2 margin-tb">
            <div class="pull-left my-4">
                <h2>Infos zu {{$horse->name}}</h2>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2 margin-tb">
          <div class="pull-left">
              <a class="btn btn-primary mb-4" href="{{ route('home') }}"> Back</a>
          </div>
        </div>
    </div>


    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <label for="">name:</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="Name" value="{{$horse->name}}">
      </div>

      <div class="col-md-8 col-md-offset-2">
        <label for="">birthday:</label>
        <input type="date" name="birthday" id="birthday" class="form-control" placeholder="12.11.2001" value="{{ $horse->birthday }}">
      </div>

      <div class="col-md-8 col-md-offset-2">
        <label for="">father:</label>
        <input type="text" name="father" id="father" class="form-control" placeholder="Vater" value="{{ $horse->father }}">
      </div>

      <div class="col-md-8 col-md-offset-2">
        <label for="">mother:</label>
        <input type="text" name="mother" id="mother" class="form-control" placeholder="Mutter" value="{{ $horse->mother }}">
      </div>

      <div class="col-md-8 col-md-offset-2">
        <label for="">trainingsessions:</label>
        <input type="text" name="trainingsessions" id="trainingsessions" class="form-control" placeholder="Traningstage" value="{{ $horse->trainingsessions }}">
      </div>

      <div class="col-md-8 col-md-offset-2">
        <label for="">owner:</label>
        <input type="text" name="owner" id="owner" class="form-control" placeholder="Besitzer" value="{{ $horse->owner }}">
      </div>
    </div>


@endsection
