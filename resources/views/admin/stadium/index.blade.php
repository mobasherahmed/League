@extends('layouts.admin')

  @section('title','Stadiums')

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
            <form action="stadiums/create" method="GET">
            <button type="submit" class="btn btn-primary">Add new Team</button>
            </form>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Read</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    
                  </tr>
                </thead>
                
                <tbody>


                @foreach($stadiums as $key => $stadium)
                  <tr>
                    <td>{{ ++$key }}</td>
                    <td>{{ $stadium->name }}</td>
                    <td><form action="/stadiums/{{ $stadium->id }}" method='GET'>
                    @method('SHOW')
                    @csrf
                      <input class="btn btn-primary" type="submit" value='Read'>
                    </form></td>  
                    <td><form action="/stadiums/{{ $stadium->id }}/edit" method='GET'>
                    @method('UPDATE')
                    @csrf
                      <input class="btn btn-warning" type="submit" value='Edit'>
                    </form></td>  
                    <td><form  action="/stadiums/{{ $stadium->id }}" method='post'>
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