@props(['cat'])

 @foreach($cat as $cat)
      <li class="w3-padding-16">
        <img src="{{ asset('images/code.jpg') }}" alt="Image" class="w3-left w3-margin-right" style="width:50px;border-radius:50%;">
        <span class="w3-large"><a href="{{ url('users_views/post_by_cat/'.$cat->id) }}"
          style="text-decoration: none;">{{ ucfirst(trans($cat->cat_name)) }}</a></span><br>
      </li> 
 @endforeach