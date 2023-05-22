@props(['cat'])

 @foreach($cat as $cat)
      <li class="w3-padding-16">
        
        <span class="w3-large"><span class="glyphicon glyphicon-ok"></span>&nbsp;<a href="{{ url('users_views/post_by_cat/'.$cat->id) }}"
          style="text-decoration: none;">{{ ucfirst(trans($cat->cat_name)) }}</a></span><br>
      </li> 
 @endforeach