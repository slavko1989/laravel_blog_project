@props(['lastPost'])
<ul class="w3-ul w3-hoverable w3-white">

  @forelse($lastPost as $last)
        <li class="w3-padding-16">
          <img src=" {{ asset('post_img/'.$last->img) }} " alt="Image" class="w3-left w3-margin-right" style="width:50px">
          <span class="w3-large">{{ $last->title }}</span><br>
          <span>{{ $last->created_at }}</span>
        </li>
    @empty
    {{ 'notnign' }}
  @endforelse
  </ul>