@extends('layouts.admin')

  @section('title','Update Stadium details')

  @section('header')
  @parent
  @endsection

  


  @section('sidebar')
  @parent
  @section('content')
  <form method="POST" action="/stadiums/{{ $stadium->id }}">
  @method('PUT')
  @csrf
  <div class="form-group">
    <label for="formGroupExampleInput">Stadium Name</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="name" value="{{$stadium->name}}" placeholder="Stadium Name">
  </div>
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