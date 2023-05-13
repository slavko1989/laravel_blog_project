
@props(['comments'])

<div class="row d-flex justify-content-center">
  <div class="col-md-8 col-lg-6">
    <div class="card shadow-0 border" style="background-color: #f0f2f5;">
      <div class="card-body p-4">
        <div class="form-outline mb-4">
          <form method="post" action="{{ url('users_views/single_post/'.$post->id) }}">
          <textarea type="text" id="addANote" class="form-control" placeholder="Type comment..." name="comment" style="margin: 2px;"></textarea>
          <input type="submit" id="addANote" class="btn btn-primary" value="Add comment" name="submit">
        </form>
        </div>

        <div class="card mb-4">
          <div class="card-body">
            <p>
              <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(4).webp" alt="avatar" width="25"
                  height="25" />
                MARTHA</p>

            <div class="d-flex justify-content-between">
              <div class="d-flex flex-row align-items-center">
                
                <p class="small mb-0 ms-2">TEXT</p>
              </div>
              <div class="d-flex flex-row align-items-center">
                <p class="small text-muted mb-0">
                  <a href="">EDIT</a>
                  <a href="" style="color: red;">DELETE</a>
                </p>
                <i class="far fa-thumbs-up mx-2 fa-xs text-black" style="margin-top: -0.16rem;"></i>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>