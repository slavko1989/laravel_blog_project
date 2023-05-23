 
@props(['form_contact'])
 <form class="form-horizontal" method="post" action="{{ url('users_views/contact_page') }}">
      @csrf
      <div class="form-group">
    <label class="control-label col-sm-2" for="email">Name:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="email" placeholder="Enter name" name="name">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Subject:</label>
    <div class="col-sm-10">
      <textarea type="text" class="form-control" id="pwd" placeholder="Enter subject" name="subject"></textarea>
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Send</button>
    </div>
  </div>
</form>