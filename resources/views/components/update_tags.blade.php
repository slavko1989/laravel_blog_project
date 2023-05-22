@props(['tags'])

  <select name="tag_id" class="form-control">

      @foreach($tags as $tag)
      <option value="{{ $tag->id }}">{{ $tag->tag_name }}</option>
      
      @endforeach
</select>