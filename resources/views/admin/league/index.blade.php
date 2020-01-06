@extends('layouts.admin')

  @section('title','Leagues')

  @section('header')
  @parent
  @endsection

  


  @section('sidebar')
  @parent
  @section('content')
  <!-- DataTables Example -->
  <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Example</div>
            <form action="leagues/create" method="GET">
            <button type="submit" class="btn btn-primary">Add new League</button>
            </form>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Year</th>
                    <th>Read</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    
                  </tr>
                </thead>
                <tbody>


                @foreach($leagues as $key => $league)
                  <tr>
                    <td>{{ ++$key }}</td>
                    <td>{{ $league->name }}</td>
                    <td>{{ $league->year }}</td>
                    <td><form action="/leagues/{{ $league->id }}" method='GET'>
                    @method('SHOW')
                    @csrf
                      <input class="btn btn-primary" type="submit" value='Read'>
                    </form></td>  
                    <td><form action="/leagues/{{ $league->id }}/edit" method='GET'>
                    @method('UPDATE')
                    @csrf
                      <input class="btn btn-warning" type="submit" value='Edit'>
                    </form></td>  
                    <td><form  action="/leagues/{{ $league->id }}" method='post'>
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





