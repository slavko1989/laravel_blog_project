@extends('admin.layout.main')
@section('title','ADMIN DASHBOARD')
@section('link')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 550px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
        
    /* On small screens, set height to 'auto' for the grid */
    @media screen and (max-width: 767px) {
      .row.content {height: auto;} 
    }
  </style>

@include('admin.layout.links')
@include('admin.layout.sidebar')

@section('main')
    <div class="col-sm-9">
      <div class="well">

    <x-mess_for_cat> </x-mess_for_cat>
    <x-form_tag> </x-form_tag>
    <x-show_tag :tag='$tag'> </x-show_tag>
 
      </div>
    </div>
  </div>
@endsection