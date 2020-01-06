@extends('layouts.admin')

  @section('title','Adding new League')

  @section('header')
  @parent
  @endsection

  


  @section('sidebar')
  @parent
  @section('content')
  <form method="POST" action="/leagues/{{ $league->id }}">
  @method('PUT')
  @csrf
  <div class="form-group">
    <label for="formGroupExampleInput">League Name</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="name" value="{{$league->name}}" placeholder="League Name">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">League Season</label>
    <input type="number" max="2020" min="2018" value="{{$league->year}}" name="year" class="form-control" id="formGroupExampleInput2">
  </div>
  <input type="submit" value="Add">
</form>
  @endsection
  @endsection
  
  
  
  
  
  
  @section('footer')
  @parent
  @endsection
  

  @section('js')
  @parent
  @endsection