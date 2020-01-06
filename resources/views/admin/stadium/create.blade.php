

@extends('layouts.admin')

@section('title','Adding new Stadium')

@section('header')
@parent
@endsection




@section('sidebar')
@parent
@section('content')
<form method="POST" action="/stadiums">
@csrf
<div class="form-group">
  <label for="formGroupExampleInput">Stadiums Name</label>
  <input type="text" class="form-control" id="formGroupExampleInput" name="name" placeholder="Stadium Name" required>
</div>
  <input class="btn btn-primary" type="submit" value='Add'>
</form>
@endsection
@endsection






@section('footer')
@parent
@endsection


@section('js')
@parent
@endsection