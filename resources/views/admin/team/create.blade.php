

@extends('layouts.admin')

@section('title','Adding new Team')

@section('header')
@parent
@endsection




@section('sidebar')
@parent
@section('content')
<form method="POST" action="/teams" enctype="multipart/form-data">
@csrf
<div class="form-group">
  <label for="formGroupExampleInput">Team Name</label>
  <input type="text" class="form-control" id="formGroupExampleInput" name="name" placeholder="Team Name">
</div>
<div class="form-group">
  <label for="formGroupExampleInput">Team photo :</label><br>
  
  @if (count($errors) > 0)

    <div class="alert alert-danger">

    <strong>Whoops!</strong> There were some problems with your input.

    <ul>

        @foreach ($errors->all() as $error)

            <li>{{ $error }}</li>

        @endforeach
      </ul>
      </div>
    @endif
  <input type="file" class="" id="formGroupExampleInput" name="photo">
</div>
<div class="form-group">
  <label for="formGroupExampleInput2">number of players</label>
  <input type="number" max="40" min="23" value="23" name="no_players" class="form-control" id="formGroupExampleInput2">
</div>
<div class="form-group">
<label for="formGroupExampleInput2">Team League</label>
<select name="league" id="">
  @foreach($leagues as $league)
      <option value="{{$league->id}}">{{ $league->name }}</option>
  @endforeach
    </select>
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