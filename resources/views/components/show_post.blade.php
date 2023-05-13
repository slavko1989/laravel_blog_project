@props(['post'])

<table class="table">
    <thead>
      <tr>
        <th>Title</th>
        <th>Body</th>
        <th>Image</th>
        <th>Category</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    	@foreach($post as $post)
      <tr>
        <td>{{ ucfirst(trans($post->title)) }}</td>
        <td>{{ ucfirst(trans(Str::substr($post->body,0,50))) }}</td>
        <td><img src="{{ asset('post_img/'.$post->img) }}" style="width: 70px;height:70px;"></td>
        <td>{{ ucfirst(trans($post->cat_name)) }}</td>
        <td>
        	<a href="{{ url('admin/add_post/'. $post->id) }}"><span class="glyphicon glyphicon-remove-sign"></span></a>
        	|| <a href="{{ url('admin/edit_post/'. $post->id) }}"><span class="glyphicon glyphicon-pencil"></span></a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>