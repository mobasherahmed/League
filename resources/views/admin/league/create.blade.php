@extends('layouts.admin')

  @section('title','Adding new League')

  @section('header')
  @parent
  @endsection

  


  @section('sidebar')
  @parent
  @section('content')
  <form method="POST" action="/leagues">
  @csrf
  <div class="form-group">
    <label for="formGroupExampleInput">League Name</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="name" placeholder="League Name">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Another label</label>
    <input type="number" max="2020" minimum="2018" value="2019" name="year" class="form-control" id="formGroupExampleInput2">
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