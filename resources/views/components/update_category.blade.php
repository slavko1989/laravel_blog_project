@props(['edit_cat'])

<form method="post" action="{{ url('admin/edit_cat/'.$edit_cat->id) }}">
          @csrf
            <!-- Name input -->
            <input type="hidden" name="id" value="{{ $edit_cat->id }}">
            <div class="form-outline mb-4">
              <input type="text" id="form4Example1" class="form-control" name="cat_name" value="{{ $edit_cat->cat_name }}">
              @error('cat_name')
                  <p style="color: red;">{{ $message }}</p>
              @enderror
              <label class="form-label" for="form4Example1">Category Name</label>
            </div>
  <!-- Submit button -->
            <input type="submit" name="submit" class="btn btn-primary btn-block mb-4" value="SEND">
        </form>