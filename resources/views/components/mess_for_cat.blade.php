@props(['mess_for_cat'])

@if(session()->has('mess_true_cat'))
<p style="color: red; font-family: cursive;font-weight: bolder;" class="alert alert-success">{{ session()->get('mess_true_cat') }}</p>
@endif

@if(session()->has('mess'))
<p style="color: red; font-family: cursive;font-weight: bolder;" class="alert alert-success">{{ session()->get('mess') }}</p>
@endif

@if(session()->has('status_ban'))
<p style="color: red; font-family: cursive;font-weight: bolder;" class="alert alert-success">{{ session()->get('status_ban') }}</p>
@endif



@if(session()->has('delete_comm'))
<p style="color: red; font-family: cursive;font-weight: bolder;" class="alert alert-success">{{ session()->get('delete_comm') }}</p>
@endif

@if(session()->has('update_comm'))
<p style="color: red; font-family: cursive;font-weight: bolder;" class="alert alert-success">{{ session()->get('update_comm') }}</p>
@endif

@if(session()->has('mess_false_cat'))
<p style="color: red; font-family: cursive;font-weight: bolder;" class="alert alert-success">{{ session()->get('mess_false_cat') }}</p>
@endif

@if(session()->has('mess_del_cat'))
<p style="color: red; font-family: cursive;font-weight: bolder;" class="alert alert-success">{{ session()->get('mess_del_cat') }}</p>
@endif

@if(session()->has('mess_true_edit_cat'))
<p style="color: red; font-family: cursive;font-weight: bolder;" class="alert alert-success">{{ session()->get('mess_true_edit_cat') }}</p>
@endif

@if(session()->has('mess_false_edit_cat'))
<p style="color: red; font-family: cursive;font-weight: bolder;" class="alert alert-success">{{ session()->get('mess_false_edit_cat') }}</p>
@endif

@if(session()->has('create_post'))
<p style="color: red; font-family: cursive;font-weight: bolder;" class="alert alert-success">{{ session()->get('create_post') }}</p>
@endif

@if(session()->has('error_create_post'))
<p style="color: red; font-family: cursive;font-weight: bolder;" class="alert alert-success">{{ session()->get('error_create_post') }}</p>
@endif

@if(session()->has('delete_post'))
<p style="color: red; font-family: cursive;font-weight: bolder;" class="alert alert-success">{{ session()->get('delete_post') }}</p>
@endif

@if(session()->has('update_post'))
<p style="color: red; font-family: cursive;font-weight: bolder;" class="alert alert-success">{{ session()->get('update_post') }}</p>
@endif

@if(session()->has('error_update_post'))
<p style="color: red; font-family: cursive;font-weight: bolder;" class="alert alert-success">{{ session()->get('error_update_post') }}</p>
@endif

@if(session()->has('mess_true_tag'))
<p style="color: red; font-family: cursive;font-weight: bolder;" class="alert alert-success">{{ session()->get('mess_true_tag') }}</p>
@endif

@if(session()->has('mess_false_tag'))
<p style="color: red; font-family: cursive;font-weight: bolder;" class="alert alert-success">{{ session()->get('mess_false_tag') }}</p>
@endif

@if(session()->has('mess_del_tag'))
<p style="color: red; font-family: cursive;font-weight: bolder;" class="alert alert-success">{{ session()->get('mess_false_tag') }}</p>
@endif

@if(session()->has('mess_true_edit_tag'))
<p style="color: red; font-family: cursive;font-weight: bolder;" class="alert alert-success">{{ session()->get('mess_true_edit_tag') }}</p>
@endif

@if(session()->has('mess_false_edit_tag'))
<p style="color: red; font-family: cursive;font-weight: bolder;" class="alert alert-success">{{ session()->get('mess_false_edit_tag') }}</p>
@endif