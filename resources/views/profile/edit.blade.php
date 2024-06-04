@extends('layouts.master')
@section('title','dashboard')
    
@section('assets')
<link rel="stylesheet" href="{{asset('vendors/simple-line-icons/css/simple-line-icons.css')}}">
<link rel="stylesheet" href="{{asset('vendors/flag-icon-css/css/flag-icon.min.css')}}">
<link rel="stylesheet" href="{{asset('vendors/css/vendor.bundle.base.css')}}">
<!-- endinject -->
<!-- Plugin css for this page -->
<link rel="stylesheet" href="{{asset('vendors/select2/select2.min.css')}}">
<link rel="stylesheet" href="{{asset('vendors/select2-bootstrap-theme/select2-bootstrap.min.css')}}">
@endsection

@section('content')
<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> Change Password </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
          <li class="breadcrumb-item active" aria-current="page">Change Password</li>
        </ol>
      </nav>
  
    </div>
    <div class="row">
  
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title" style="text-align: center;">Change Password</h4>
            {{-- error repoting --}}
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

            <form class="forms-sample" action="{{ route('password.update') }}" name="changepassword" method="post" onsubmit="return checkpass();">
              @csrf
              @method('put')
              <div class="form-group">
                <label for="exampleInputName1">Current Password</label>
                <input type="password" name="currentpassword" id="currentpassword" class="form-control" required="true">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail3">New Password</label>
                <input type="password" name="newpassword"  class="form-control" required="true">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword4">Confirm Password</label>
                <input type="password" name="confirmpassword" id="confirmpassword" value=""  class="form-control" required="true">
              </div>
              
              <button type="submit" class="btn btn-primary mr-2" name="submit">Change</button>
             
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('script')
<script src="{{asset('vendors/js/vendor.bundle.base.js')}}"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{asset('vendors/select2/select2.min.js')}}"></script>
<script src="{{asset('vendors/typeahead.js/typeahead.bundle.min.js')}}"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{asset('js/off-canvas.js')}}"></script>
<script src="{{asset('js/misc.js')}}"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="{{asset('js/typeahead.js')}}"></script>
<script src="{{asset('js/select2.js')}}"></script>
<script type="text/javascript">
    function checkpass()
    {
    if(document.changepassword.newpassword.value!=document.changepassword.confirmpassword.value)
    {
    alert('New Password and Confirm Password field does not match');
    document.changepassword.confirmpassword.focus();
    return false;
    }
    return true;
    }   

</script>
@endsection


