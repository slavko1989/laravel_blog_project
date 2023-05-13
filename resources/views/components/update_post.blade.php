  
@props(['category'])

  <select name="cat_id" class="form-control">

      @foreach($category as $cat)
      <option value="{{ $cat->id }}">{{ $cat->cat_name }}</option>
      
      @endforeach
    </select>