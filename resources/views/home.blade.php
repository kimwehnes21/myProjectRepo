<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    @extends('layouts.app')
    <meta charset="utf-8">
    <title>Hallo</title>
  </head>
  <body>
    @section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Pferde des Trainingsstalls Mustermann</h1>
            </div>
        </div>
        <div class="row">
          <div class="col-md-8 col-md-offset-2 text-center">
            <br>
            @if (Auth::check() && Auth::user()->authorizeRoles(['admin']))
            <form method="post" action="create">
              {{csrf_field()}}
              <button type="submit" class="btn btn-success w-50 ">Hinzufügen</button>
            </form>
            @endif
            <br>
          </div>
        </div>
        <div class="row">
          <div class="d-flex justify-content-center">
            <div class="col-md-8 col-md-offset-2">
              <table class="table table-striped table-hover">
                <tr>
                  <th>name</th>
                  <th>birthday</th>
                  <th>trainingsessions</th>
                  <th>actions</th>
                </tr>

                @foreach($data as $horse)
                <tr>
                  <td>{{$horse->name}}</td>
                  <td>{{$horse->birthday}}</td>
                  <td>{{$horse->trainingsessions}}</td>
                  <td>
                    @if (Auth::check() && Auth::user()->authorizeRoles(['admin']))
                      <form action="{{ route('horses.destroy',$horse->id) }}" method="POST">
                      {{ method_field('DELETE') }}
                      {{csrf_field()}}
                      <button type="submit" class="btn btn-danger">Löschen</button>
                    @endif
                    @if (Auth::check() && Auth::user()->authorizeRoles(['admin','editor']))
                      <a href="horses/{{$horse->id}}/edit" class="btn btn-primary">Bearbeiten</a>
                    @endif
                      <a href="horses/{{$horse->id}}" class="btn btn-info" >mehr Infos</a>
                    </form>
                  </td>
                </tr>
                @endforeach



              </table>
            </div>
          </div>
        </div>
      </div>
    @endsection
  </body>
</html>
