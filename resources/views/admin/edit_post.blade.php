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

<form method="post" action="{{ url('admin/edit_post/'. $edit_post->id) }}" enctype="multipart/form-data">
  <!-- Name input -->
  @csrf
  <input type="hidden" name="cat_id">
  <input type="hidden" name="tag_id">
  <input type="hidden" name="id" value="{{ $edit_post->id }}">
  <div class="form-outline mb-4">
    <input type="text" id="form4Example1" class="form-control" name="title" value="{{ $edit_post->title }}">
    <label class="form-label" for="form4Example1">Title</label>
    @error('title')
        <p style="color: red;">{{ $message }}</p>
    @enderror
  </div>

  
<div class="form-outline mb-4">
    <input type="file" id="form4Example1" class="form-control" name="img" value="{{ $edit_post->img }}">
    <label class="form-label" for="form4Example1">Image</label>
    <img src="{{ asset('post_img/'. $edit_post->img) }}" class="img-thumbnail" alt="" style="width: 70px;height: 70px;">
     @error('img')
        <p style="color: red;">{{ $message }}</p>
    @enderror
  </div>

  <!-- Message input -->
  <div class="form-outline mb-4">
    <textarea class="form-control" id="form4Example3" rows="4" name="body" value="{{ $edit_post->body }}">{{ $edit_post->body }}</textarea>
    <label class="form-label" for="form4Example3">Text</label>
     @error('body')
        <p style="color: red;">{{ $message }}</p>
    @enderror
  </div>

  <div class="form-outline mb-4">
      <x-update_post :category='$category'> </x-update_post>
  </div><br><br>

  <div class="form-outline mb-4">
      <x-update_tags :tags='$tags'> </x-update_tags>
  </div><br><br>


  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4">Send</button>
</form>



    </div>
    </div>

  </div>


@endsection