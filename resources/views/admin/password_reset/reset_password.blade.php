<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<title>Reset Password :: GTN Textiles</title>
<link rel="icon" href="favicon.ico">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

<!-- Bootstrap core CSS -->
<link href="{{ asset ('css/bootstrap.min.css') }}" rel="stylesheet">

<link rel="stylesheet" href="{{ asset ('font-awesome/css/font-awesome.min.css') }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />

<!-- Custom styles for this template -->
<link href="{{ asset ('css/style.css') }}" rel="stylesheet">
<style type="text/css">
  .reset_password{
  position: relative;
}
.eye_show {
  z-index: 9999;
  position: absolute;
  top: 68%;
  right: 10px;
}
</style>
</head>

<body>

<div class="login-cover">
  <img src="{{ asset ('images/logo.svg') }}" class="login-logo">
  <div class="login-box">
    <h3>DMS - Reset Password</h3>
    <div class="login-in">
      <form method="POST" action="{{ route('reset_password_submit') }}">
        @csrf    
        @if ($errors->any())
          @foreach ($errors->all() as $error)
            <div class="alert alert-danger">{{$error}}</div>
          @endforeach
        @endif
        <div class="reset_password">
          <label>Enter new password</label>
          <input type="password" class="form-control" placeholder="Enter your username" name="password" autocomplete="off" required id="password">
          
          <span toggle="#password_show" class="fa fa-fw fa-eye field_icon toggle_reset_password eye_show"></span>
        </div>
          <label>Re-enter new password</label>
          <input type="password" class="form-control" placeholder="Enter your password" name="password-confirm" autocomplete="off" required>

        <button class="btn btn-primary btn-login">Reset</button> 
      </form>     
    </div>
  </div>
  <h6>
    <i class="fa fa-copyright" aria-hidden="true"></i> 2024-25 GTN Enterprises.    
  </h6>
  <h6>
    GTN-DMS2024.V.0.1 by Exacore
  </h6>
  <h6>
    DMS2024 App Info <i class="fa fa-info-circle" aria-hidden="true"></i>
  </h6>  
</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script type="text/javascript">
  $(document).on('click', '.toggle_reset_password', function() {
    $(this).toggleClass("fa-eye fa-eye-slash");
    var input = $("#password");
    input.attr('type') === 'password' ? input.attr('type','text') : input.attr('type','password')
});
</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="{{ asset ('js/bootstrap.min.js') }}"></script>
</body>
</html>
