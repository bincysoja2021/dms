<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<title>All Users :: DMS</title>
@include("admin.include.header")

<div class="main-content">
@include("admin.include.menu_left")
  <div class="main-area">
    <h2 class="main-heading">Add User</h2>  
    <div class="dash-all pt-0">
      <div class="dash-table-all" style="max-width:700px;">        
        <table class="table table-striped">        
        <tr>
          <td>User Full Name</td>
          <td width="10">:</td>
          <td>
            <input type="text" class="form-control" name="" value="">
          </td>
        </tr>
        <tr>
          <td>User Email ID</td>
          <td width="10">:</td>
          <td>
            <input type="text" class="form-control" name="" value="">
          </td>
        </tr>
        <tr>
          <td>Employee ID</td>
          <td width="10">:</td>
          <td>
            <input type="text" class="form-control" name="" value="">
          </td>
        </tr>
        <tr>
          <td>Username</td>
          <td width="10">:</td>
          <td>
            <input type="text" class="form-control" name="" value="">
          </td>
        </tr>
        <tr>
          <td>User Type</td>
          <td width="10">:</td>
          <td>
            <select class="form-control">
              <option>Manager</option>
              <option>Super Admin</option>
            </select> 
          </td>
        </tr>
        <tr>
          <td>Office</td>
          <td width="10">:</td>
          <td>
            <select class="form-control">
              <option>Select</option>
              <option>GTN Textiles</option>              
            </select>
          </td>
        </tr>
        <tr>
          <td>Department/Section</td>
          <td width="10">:</td>
          <td>
            <select class="form-control">
              <option>Select</option>
              <option>Sales</option>
              <option>Finance</option>
            </select>
          </td>
        </tr>
      </table>
      <a href="{{url('/all_users')}}" class="btn btn-primary">Add User</a>
      </div>
    </div>
  </div>
</div>

<!-- The Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
    
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title text-danger">Are you Sure, you want to delete the user?</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      
      <!-- Modal body -->
      <div class="modal-body">
        Once you delete the user, you will no longer be able to access the user data. Click "Yes" to proceed or else click "Cancel".
      </div>
      
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Yes</button>
        <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
      </div>
      
    </div>
  </div>
</div>

@include("admin.include.footer")
