@extends('layouts.admin')

  @section('title','Teams')

  @section('header')
  @parent
  @endsection

  


  @section('sidebar')
  @parent
  @section('content')
  <style>
    .team-photo{
      max-height:50px;
      max-width:50px;
    }
  </style>
  <!-- DataTables Example -->
  <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Example</div>
            <form action="teams/create" method="GET">
            <button type="submit" class="btn btn-primary">Add new Team</button>
            </form>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>photo</th>
                    <th>Num of playes</th>
                    <th>league</th>
                    <th>Read</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    
                  </tr>
                </thead>
                
                <tbody>


                @foreach($teams as $key => $team)
                  <tr>
                    <td>{{ ++$key }}</td>
                    <td>{{ $team->name }}</td>
                    <td><img src="storage/images/{{ $team->photo }}" alt="" class="team-photo"></td>
                    <td>{{ $team->num_of_players }}</td>
                    <td>{{ $team->league->name }}</td> 
                    <td><form action="/teams/{{ $team->id }}" method='GET'>
                    @method('SHOW')
                    @csrf
                      <input class="btn btn-primary" type="submit" value='Read'>
                    </form></td>  
                    <td><form action="/teams/{{ $team->id }}/edit" method='GET'>
                    @method('UPDATE')
                    @csrf
                      <input class="btn btn-warning" type="submit" value='Edit'>
                    </form></td>  
                    <td><form  action="/teams/{{ $team->id }}" method='post'>
                    @method('DELETE')
                    @csrf
                      <input class="btn btn-danger" type="submit" value='Delete'>
                    </form></td>                   
                  </tr>
                @endforeach  
                </tbody>
              </table>
            </div>
          </div>
  @endsection
  @endsection
  
  
  
  
  
  
  @section('footer')
  @parent
  @endsection
  

  @section('js')
  @parent
  @endsection
