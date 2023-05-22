@props(['tag'])
<div class="w3-container w3-white">
    <p>
    @foreach($tag as $tag)
        <span class="w3-light-grey w3-black w3-margin-bottom"><a href="{{ url('users_views/post_by_tag/'.$tag->id) }}">{{ $tag->tag_name }}</a></span>
      @endforeach
      </p>
</div>