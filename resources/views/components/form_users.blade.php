@props(['form_users'])

  <form method="post" action="{{ url('admin/add_users') }}" enctype="multipart/form-data">
  <!-- Name input -->
  @csrf
  
  <div class="form-outline mb-4">
    <input type="text" id="form4Example1" class="form-control" name="name" value="{{ old('name') }}">
    <label class="form-label" for="form4Example1">Name</label>
    @error('name')
        <p style="color: red;">{{ $message }}</p>
    @enderror
  </div>

  
<div class="form-outline mb-4">
    <input type="file" id="form4Example1" class="form-control" name="profile_photo_url" value="{{ old('profile_photo_url') }}">
    <label class="form-label" for="form4Example1">Image</label>
     @error('profile_photo_url')
        <p style="color: red;">{{ $message }}</p>
    @enderror
  </div>

  <!-- Message input -->
  <div class="form-outline mb-4">
    <textarea class="form-control" id="form4Example3" rows="4" name="email" value="{{ old('email') }}"></textarea>
    <label class="form-label" for="form4Example3">Email</label>
     @error('email')
        <p style="color: red;">{{ $message }}</p>
    @enderror
  </div>

  <div class="form-outline mb-4">
    <input class="form-control" id="form4Example3" rows="4" name="password" value="{{ old('password') }}">
    <label class="form-label" for="form4Example3">Password</label>
     @error('password')
        <p style="color: red;">{{ $message }}</p>
    @enderror
  </div>

  


  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4">Send</button>
</form>
  