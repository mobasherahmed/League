

@extends('layouts.admin')

@section('title','Stadium Details')

@section('header')
@parent
@endsection




@section('sidebar')
@parent
@section('content')
<h1>Stadium ID : {{ $stadium->id }}</h1>
<h1>Stadium Name : {{ $stadium->name }}</h1>


@endsection
@endsection






@section('footer')
@parent
@endsection


@section('js')
@parent
@endsection