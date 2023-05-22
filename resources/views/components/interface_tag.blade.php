@props(['tag'])

 @foreach($tag as $tag)
      <li class="w3-padding-16">
        
        <span class="w3-large"><span class="glyphicon glyphicon-ok"></span>&nbsp;<a href="{{ url('users_views/post_by_tag/'.$tag->id) }}"
          style="text-decoration: none;">{{ ucfirst(trans($tag->tag_name)) }}</a></span><br>
      </li> 
 @endforeach