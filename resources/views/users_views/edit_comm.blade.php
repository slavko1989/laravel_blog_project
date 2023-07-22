@extends('layout.main')
@section('title','MY BLOG')
@section('link')
<link href="{{ url('css/style.css') }}" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
@include('layout.header')
<br><br>

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-3 col-md-6" style="text-align: center;">
      <p>Update your comment</p>
    
    
      <form method="post" action="{{ url('users_views/edit_comm/'.$edit->id) }}">
          @csrf
            <!-- Name input -->
            <input type="hidden" name="id" value="{{ $edit->id }}">
            <div class="form-outline mb-4">
              <input type="text" id="form4Example1" class="form-control" name="comment" value="{{ $edit->comment }}">
              @error('comment')
                  <p style="color: red;">{{ $message }}</p>
              @enderror
              <label class="form-label" for="form4Example1">Comment</label>
            </div>
  <!-- Submit button -->
            <input type="submit" name="submit" class="btn btn-primary btn-block mb-4" value="SEND">
        </form>
      </div>
    </div>
  </div>
@endsection