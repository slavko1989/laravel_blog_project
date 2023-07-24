@props(['users'])

<table class="table">
    <thead>
      <tr>
        <th>Title</th>
        <th>Body</th>
        <th>Image</th>
        <th>Role</th>
        <th>Status</th>
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
          @if($user->role_as == 1)
          <p style="color: red;">Admin</p>
          @elseif($user->role_as == 0)
          <p style="color: blueviolet;">User</p>
          @endif
          <select name="role_as">
            <option>Choose!</option>
            <option value="0">Admin</option>
            <option value="1">User</option>
          </select>
        </td>
        <td>
          @if($user->status == 0)
          <p style="color: red;">Active</p>
          @elseif($user->status == 1)
          <p style="color: darkblue;">Baned</p>
          @endif
          <select name="status">
            <option>Choose!</option>
            <option value="0" style="color: red;">Active</option>
            <option value="1">Baned</option>
          </select>

        </td>
        
        <td>
        	<a href="{{ url('admin/add_user/'. $user->id) }}"><span class="glyphicon glyphicon-remove-sign"></span></a>
        	|| <a href="{{ url('admin/edit_user/'. $user->id) }}"><span class="glyphicon glyphicon-pencil"></span></a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>