@props(['users'])

<table class="table">
    <thead>
      <tr>
        <th>Title</th>
        <th>Body</th>
        <th>Image</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    	@foreach($users as $user)
      <tr>
        <td>{{ ucfirst(trans($user->name)) }}</td>
        <td>{{ $user->email }}</td>
        <td><img src="{{ $user->profile_photo_url }}" style="width: 70px;height:70px;"></td>
        
        <td>
        	<a href="{{ url('admin/add_user/'. $user->id) }}"><span class="glyphicon glyphicon-remove-sign"></span></a>
        	|| <a href="{{ url('admin/edit_user/'. $user->id) }}"><span class="glyphicon glyphicon-pencil"></span></a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>