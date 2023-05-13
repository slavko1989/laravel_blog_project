@props(['cat'])

<table class="table">
    <thead>
      <tr>
        <th>Category name</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    	@foreach($cat as $cat)
      <tr>
        <td>{{ ucfirst(trans($cat->cat_name)) }}</td>
        <td>
        	<a href="{{ url('admin/add_cat/'. $cat->id) }}"><span class="glyphicon glyphicon-remove-sign"></span></a>
        	|| <a href="{{ url('admin/edit_cat/'. $cat->id) }}"><span class="glyphicon glyphicon-pencil"></span></a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>