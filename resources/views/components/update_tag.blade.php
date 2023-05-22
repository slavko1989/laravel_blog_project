@props(['edit_tag'])

<form method="post" action="{{ url('admin/edit_tag/'.$edit_tag->id) }}">
          @csrf
            <!-- Name input -->
            <input type="hidden" name="id" value="{{ $edit_tag->id }}">
            <div class="form-outline mb-4">
              <input type="text" id="form4Example1" class="form-control" name="tag_name" value="{{ $edit_tag->tag_name }}">
              @error('cat_name')
                  <p style="color: red;">{{ $message }}</p>
              @enderror
              <label class="form-label" for="form4Example1">Tag Name</label>
            </div>
  <!-- Submit button -->
            <input type="submit" name="submit" class="btn btn-primary btn-block mb-4" value="SEND">
        </form>