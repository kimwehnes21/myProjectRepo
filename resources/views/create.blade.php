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
                <h1>Hallo und herzlich Willkommen</h1>
            </div>
        </div>
        <div class="row">
          <div class="d-flex justify-content-center">
            <div class="col-md-8 col-md-offset-2">
              <form action="{{route('new')}}" method="post">
                {{csrf_field()}}
                <div class="row form-group">
                  <div class="col-md-12">
                    <label for="">name:</label>
                    <input type="text" name="name" class="form-control" required>
                  </div>
                  <div class="col-md-12">
                    <label for="">birthday:</label>
                    <input type="date" name="birthday" class="form-control" required>
                  </div>
                  <div class="col-md-12">
                    <label for="">father:</label>
                    <input type="text" name="father" class="form-control" required>
                  </div>
                  <div class="col-md-12">
                    <label for="">mother:</label>
                    <input type="text" name="mother" class="form-control" required>
                  </div>
                  <div class="col-md-12">
                    <label for="">trainingsessions:</label>
                    <input type="text" name="trainingsessions" class="form-control" required>
                  </div>
                  <div class="col-md-12">
                    <label for="">owner:</label>
                    <input type="text" name="owner" class="form-control" required>
                  </div>
                </div>
                <div class="col-md-12">
                  <button type="submit" class="btn btn-success w-50 ">Create</button>
                </div>

              </form>
            </div>
          </div>
        </div>
    </div>
    @endsection
  </body>
</html>
