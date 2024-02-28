<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<title>DMS :: GTN Textiles</title>
<link rel="icon" href="favicon.ico">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

<!-- Bootstrap core CSS -->
<link href="{{ asset ('css/bootstrap.min.css') }}" rel="stylesheet">

<link rel="stylesheet" href="{{ asset ('font-awesome/css/font-awesome.min.css') }}">

<!-- Custom styles for this template -->
<link href="{{ asset ('css/style.css') }}" rel="stylesheet">

</head>

<body>

<div class="login-cover">
  <img src="{{ asset ('images/logo.svg') }}" class="login-logo">
  <div class="login-box">
    <h3>DMS Login</h3>
    <div class="login-in">
        <form method="POST" action="{{ route('login') }}">
          @csrf
          <label>Username</label>
          <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter your username" name="email" required autocomplete="off">
          @error('email')
            <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
            </span>
          @enderror
          <label>Password</label>
          <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter your password" name="password" required autocomplete="off"> @error('password')
            <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
            </span>
           @enderror
          <button type="submit" class="btn btn-primary btn-login">Login</button>
        </form>
          <a href="forgot-password.php">Forgot password?</a>
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
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-slim.min.js"><\/script>')</script>
<!-- <script src="js/vendor/popper.min.js"></script>
 -->
<script src="{{ asset ('js/bootstrap.min.js') }}"></script>
</body>
</html>
