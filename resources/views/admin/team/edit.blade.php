

@extends('layouts.admin')

@section('title','Update Team Details')

@section('header')
@parent
@endsection




@section('sidebar')
@parent
@section('content')
<form method="POST" action="/teams/{{ $team->id }}" enctype="multipart/form-data">
@method('PUT')
@csrf
  <div class="form-group">
    <label for="formGroupExampleInput">Team Name</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="name" value="{{$team->name}}" placeholder="Team Name" required>
  </div>
  <div >
    <h5>Previous image :</h5>
    <img src='{{ asset("storage/images/$team->photo") }}' alt="" style="max-width: 80px;max-height:80px;">
    <input type="text" style="display:none;" value="{{$team->photo}}" name="old_name">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Team New Photo</label>
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
    <br><input type="file" name="photo" id="formGroupExampleInput2">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Team number of players</label>
    <input type="number" value="{{$team->num_of_players}}" name="no_players" class="form-control" id="formGroupExampleInput2" required>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Team previous league :</label>
    <input type="text" value="{{$team->league->name}}" class="form-control" id="formGroupExampleInput2" disabled>
  </div>
  Team League: <select name="league" id="">
        <option style="display:none;" value="{{$team->league->id}}" selected>{{$team->league->name}}</option>
    @foreach($leagues as $league)
        <option value="{{$league->id}}">{{ $league->name }}</option>
    @endforeach
    </select>
  <input type="submit" value="Edit">
  </form>
@endsection
@endsection






@section('footer')
@parent
@endsection


@section('js')
@parent
@endsection