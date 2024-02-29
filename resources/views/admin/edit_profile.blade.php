<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<title>Settings :: DMS</title>
@include("admin.include.header")

<div class="main-content">
 @include("admin.include.menu_left")
  <div class="main-area">
    <h2 class="main-heading">Settings</h2>
    <h4 class="sub-heading">Profile</h4>
    <div class="tag-block">
      <table class="table table-striped">
        <tr>
          <td>Username</td>
          <td><input type="text" class="form-control" name="" value="Skandan"></td>
        </tr>
        <tr>
          <td>User type</td>
          <td>: Manager User</td>
        </tr>
        <tr>
          <td>User Email</td>
          <td>: admin@gtntextiles.com</td>
        </tr>
        <tr>
          <td>Password reset</td>
          <td>: <a href="">click here to reset password</a></td>
        </tr>
        <tr>
          <td>User registered on</td>
          <td>: 05-01-2024, 10:05:27 AM</td>
        </tr>
      </table>
      <a href=" {{ url('/settings') }}" class="btn btn-primary">Save Profile</a>
    </div>
  </div>
</div>
@include("admin.include.footer")
