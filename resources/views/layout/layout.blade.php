@extends('layout.main')
@section('title','MY BLOG')
@section('link')
<link href="{{ url('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="jquery-3.6.4.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
@include('layout.header')
@include('layout.nav')

@include('layout.subscribe')
@section('posts')
<!-- Grid -->
<div class="w3-row">
  <!-- Blog entries -->
  <div class="w3-col l8 s12">
    <!-- Blog entry -->
    <x-interface_post :post='$post'></x-interface_post>

    {!! $post->withQueryString()->links('pagination::bootstrap-5') !!}
    <hr>
    
    <!-- END BLOG ENTRIES -->
  </div>
  @section('sidebar')
  <!-- Introduction menu -->
  <div class="w3-col l4">
    <!-- About Card -->
    <div class="w3-card w3-margin w3-margin-top">
      <img src="images/php2.jpg" style="width:100%">
      <div class="w3-container w3-white">
        <h4><b>Junior developer</b></h4>
        <p>Just me, myself and I, exploring the universe of uknownment. I have a heart of love and a interest of lorem ipsum and mauris neque quam blog. I want to share my world with you.</p>
      </div>
    </div><hr>
    
    <!-- Posts -->
    <div class="w3-card w3-margin">
      <div class="w3-container w3-padding">
        <h4>Latest Posts</h4>
      </div>
      @include('layout.popular_post')
    </div>
    <hr>
    <div class="w3-card w3-margin">
      <div class="w3-container w3-padding">
        <h4>Category</h4>
      </div>
      <ul class="w3-ul w3-hoverable w3-white">
        <x-interface_cat :cat='$cat'></x-interface_cat> 
      </ul>
    </div>
    <hr>
    
    <!-- Labels / tags -->
    <div class="w3-card w3-margin">
      <div class="w3-container w3-padding">
        <h4>Tags</h4>
      </div>
       <x-tags_view :tag='$tag'></x-tags_view>
    </div>
  
  <!-- END Introduction Menu -->
</div>
<!-- END GRID -->
</div><br>
<!-- END w3-content -->
</div>
@endsection