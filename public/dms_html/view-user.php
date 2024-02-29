<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<title>View User :: DMS</title>
<?php include("include/header.php");?>

<div class="main-content">
  <?php include("include/menu-left.php");?>
  <div class="main-area">
    <h2 class="main-heading">View User</h2>
    <div class="tag-block">
      <table class="table table-striped">        
        <tr>
          <td>Username</td>
          <td width="10">:</td>
          <td>
            <input type="text" class="form-control" name="" value="scandan" disabled>
          </td>
        </tr>
        <tr>
          <td>User email</td>
          <td width="10">:</td>
          <td>
            <input type="text" class="form-control" name="" value="scandan@gtntextiles.com" disabled>
          </td>
        </tr>
        <tr>
          <td>User Full name</td>
          <td width="10">:</td>
          <td>
            <input type="text" class="form-control" name="" value="Scandan Full name" disabled>
          </td>
        </tr>
        <tr>
          <td>Employee ID</td>
          <td width="10">:</td>
          <td>
            <input type="text" class="form-control" name="" value="GTN152890" disabled>
          </td>
        </tr>
        <tr>
          <td>User type</td>
          <td width="10">:</td>
          <td>
            <input type="text" class="form-control" name="" value="Manager" disabled>
          </td>
        </tr>
        <tr>
          <td>User created on</td>
          <td width="10">:</td>
          <td>
            <input type="text" class="form-control" name="" value="05-08-2023" disabled>
          </td>
        </tr>
        <tr>
          <td>User active status</td>
          <td width="10">:</td>
          <td>
            <input type="text" class="form-control" name="" value="Active" disabled>
          </td>
        </tr>
        <tr>
          <td>User last login</td>
          <td width="10">:</td>
          <td>
            <input type="text" class="form-control" name="" value="01-02-2024, 02:19:45 PM" disabled>
          </td>
        </tr>        
        <tr>
          <td>Office</td>
          <td width="10">:</td>
          <td>
            <select class="form-control" disabled>              
              <option>GTN Textiles</option>              
            </select>
          </td>
        </tr>
        <tr>
          <td>Department/Section</td>
          <td width="10">:</td>
          <td>
            <select class="form-control" disabled>              
              <option>Sales</option>
              <option>Finance</option>
            </select>
          </td>
        </tr>
      </table>
      <div class="btn-groups">
        <a href="edit-user.php" class="btn btn-info">Edit</a>        
      </div>
    </div>
  </div>
</div>

<?php include("include/footer.php");?>
