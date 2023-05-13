@props(['category'])

<div class="form-outline mb-4">
  
<select name="cat_id" class="form-control">
      <option class="form-control">Choose category</option>

      @foreach($category as $cat)
      <option value="{{ $cat->id }}">{{ $cat->cat_name }}</option>
      @endforeach
    </select>
</div><br><br>