@extends('layouts.admin')

  @section('title','League Details')

  @section('header')
  @parent
  @endsection

  


  @section('sidebar')
  @parent
  @section('content')
  <h1>League ID : {{ $oneLeague->id }}</h1>
  <h1>League Name : {{ $oneLeague->name }}</h1>
  <h1>League Season : {{ $oneLeague->year }}</h1>

  @endsection
  @endsection
  
  
  
  
  
  
  @section('footer')
  @parent
  @endsection
  

  @section('js')
  @parent
  @endsection