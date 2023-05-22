 <form method="post" action="{{ url('admin/add_post') }}" enctype="multipart/form-data">
  <!-- Name input -->
  @csrf
  <input type="hidden" name="cat_id">
  <input type="hidden" name="tag_id">
  <div class="form-outline mb-4">
    <input type="text" id="form4Example1" class="form-control" name="title" value="{{ old('title') }}">
    <label class="form-label" for="form4Example1">Title</label>
    @error('title')
        <p style="color: red;">{{ $message }}</p>
    @enderror
  </div>

  
<div class="form-outline mb-4">
    <input type="file" id="form4Example1" class="form-control" name="img" value="{{ old('img') }}">
    <label class="form-label" for="form4Example1">Image</label>
     @error('img')
        <p style="color: red;">{{ $message }}</p>
    @enderror
  </div>

  <!-- Message input -->
  <div class="form-outline mb-4">
    <textarea class="form-control" id="form4Example3" rows="4" name="body" value="{{ old('body') }}"></textarea>
    <label class="form-label" for="form4Example3">Text</label>
     @error('body')
        <p style="color: red;">{{ $message }}</p>
    @enderror
  </div>

  <div class="form-outline mb-4">
    <select name="cat_id" class="form-control">
      <option class="form-control">Choose category</option>

      @foreach($category as $cat)
      <option value="{{ $cat->id }}">{{ $cat->cat_name }}</option>
      @endforeach
    </select>
  </div><br><br>

  <div class="form-outline mb-4">
    <select name="tag_id" class="form-control">
      <option class="form-control">Choose Tag</option>

      @foreach($tags as $tag)
      <option value="{{ $tag->id }}">{{ $tag->tag_name }}</option>
      @endforeach
    </select>
  </div><br><br>


  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4">Send</button>
</form>