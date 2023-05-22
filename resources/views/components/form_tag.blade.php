@props(['form_tag'])

<form method="post" action="{{ route('store_tag') }}">
          @csrf
            <!-- Name input -->
            <div class="form-outline mb-4">
              <input type="text" id="form4Example1" placeholder="Input tag name" class="form-control" name="tag_name" value="{{ old('tag_name') }}">
              @error('tag_name')
                  <p style="color: red;">{{ $message }}</p>
              @enderror
              <label class="form-label" for="form4Example1">Name</label>
            </div>
  <!-- Submit button -->
            <input type="submit" name="submit" class="btn btn-primary btn-block mb-4" value="SEND">
        </form>