@props(['tag'])

<table class="table">
    <thead>
      <tr>
        <th>Tag name</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($tag as $tag)
      <tr>
        <td>{{ ucfirst(trans($tag->tag_name)) }}</td>
        <td>
          <a href="{{ url('admin/add_tag/'. $tag->id) }}"><span class="glyphicon glyphicon-remove-sign"></span></a>
          || <a href="{{ url('admin/edit_tag/'. $tag->id) }}"><span class="glyphicon glyphicon-pencil"></span></a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>