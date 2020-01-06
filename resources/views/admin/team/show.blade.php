

  @extends('layouts.admin')

  @section('title','League Details')

  @section('header')
  @parent
  @endsection

  


  @section('sidebar')
  @parent
  @section('content')
  <style>
    .team-photo{
      max-height:80px;
      max-width:80px;
    }
  </style>
  <h1>Team ID : {{ $team->id }}</h1>
  <h1>Team Name : {{ $team->name }}</h1>
  <h1>Team Photo : <img src='{{ asset("storage/images/$team->photo") }}' alt="" class="team-photo"></h1>
  <h1>Players in the team : {{ $team->num_of_players }}</h1>
  <h1>League : {{ $team->league->name }}</h1>

  @endsection
  @endsection
  
  
  
  
  
  
  @section('footer')
  @parent
  @endsection
  

  @section('js')
  @parent
  @endsection