  @props(['details'])

  @forelse($details as $post)
  <div class="w3-card-4 w3-margin w3-white">
    <img src="{{ asset('post_img/'.$post->img) }}"  style="width:100%">
    <div class="w3-container">
      <h3><b>{{ $post->title }}</b></h3>
      <h5>Title description, <span class="w3-opacity">{{ $post->created_at }}</span></h5>
    </div>

    <div class="w3-container">
      <p>{{ $post->body }}</p>
      <div class="w3-row">
        <div class="w3-col m8 s12">
          <p><a class="w3-button w3-padding-large w3-white w3-border" href="{{ url('users_views/single_post/'.$post->id) }}"><b>READ MORE »</b></a></p>
        </div>
        <div class="w3-col m4 w3-hide-small">
          <p><span class="w3-padding-large w3-right"><b>Comments  </b> <span class="w3-tag">0</span></span></p>
        </div>
      </div>
    </div>
    
  </div>
  @empty
  <img src="{{ asset('images/sorry.jpg')}}" style="width: 100%;height: 400px;">
  @endforelse


