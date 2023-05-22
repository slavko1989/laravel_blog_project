  <div class="row d-flex justify-content-center">
  <div class="col-md-8 col-lg-6">
    <div class="card shadow-0 border" style="background-color: #f0f2f5;">
      <div class="card-body p-4">
        <div class="form-outline mb-4">


          @if(session()->has('mess_comm'))
        <p style="color: red;font-weight: bolder;">{{ session()->get('mess_comm') }}</p>
        @endif

        @if(session()->has('auth_check'))
        <p style="color: red;font-weight: bolder;">{{ session()->get('auth_check') }}</p>
        @endif





          <form method="post" action="{{ url('users_views/single_post/'.$post->id) }}">
            @csrf
            <input type="hidden" name="post_id">
            <input type="hidden" name="user_id">
          <textarea type="text" id="addANote" class="form-control" placeholder="Type comment..." name="comment" style="margin: 2px;" value="{{ old('comment') }}"></textarea>
          @error('comment')
                <p style="color: red;">{{ $message }}</p>
          @enderror
          <input type="submit" id="addANote" class="btn btn-primary" value="Add comment" name="submit">
        </form>
        </div>

        <div class="card mb-4">
          @forelse($post->comments as $comm)
          <div class="card-body">
            <p>
             @if($comm->user) 
              <img src="{{ $comm->user->profile_photo_url }}" 
              style="width: 50px;height:50px;border-radius:40%; "> {{ $comm->user->name }}
           
            
            @endif
            <small class="ms-3 text-primary">{{ $comm->created_at }} </small>
            </p>

            <div class="d-flex justify-content-between">
              
              <div class="d-flex flex-row align-items-center">
                
                <p class="small mb-0 ms-2">{{ $comm->comment }}</p>
              </div>

              <div class="d-flex flex-row align-items-center">
                <p class="small text-muted mb-0">
                  @if(Auth::check() && Auth::id()==$comm->user_id)
                  <a href="">EDIT</a>
                  <a href="" style="color: red;">DELETE</a>
                  @else
                  {{ 'login to delete or edit your comments' }}
                  @endif
                </p>
                <i class="far fa-thumbs-up mx-2 fa-xs text-black" style="margin-top: -0.16rem;"></i>
                
              </div>
              
            </div>

          </div>
          @empty
              {{ 'no comments' }}
              @endforelse
        </div>
      </div>
    </div>
  </div>
</div>

