@props(['form_cat'])

<form method="post" action="{{ route('store_category') }}">
          @csrf
            <!-- Name input -->
            <div class="form-outline mb-4">
              <input type="text" id="form4Example1" placeholder="Input category name" class="form-control" name="cat_name" value="{{ old('cat_name') }}">
              @error('cat_name')
                  <p style="color: red;">{{ $message }}</p>
              @enderror
              <label class="form-label" for="form4Example1">Name</label>
            </div>
  <!-- Submit button -->
            <input type="submit" name="submit" class="btn btn-primary btn-block mb-4" value="SEND">
        </form>