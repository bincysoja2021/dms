<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">
  @if(session()->has('message'))
      swal({

          title: "Success!",

          text: "{{ session()->get('message') }}",

          icon: "success",

      });
  @endif
  </script>
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
    <h2 class="main-heading">All Users</h2>  
    <div class="dash-all pt-0">
      <div class="dash-table-all"> 
        <div class="sort-block">
          <div class="show-num">
            <span>Show</span>
            <select class="select">
              <option>20</option>
              <option>50</option>
              <option>100</option>
            </select>
            <span>Entries</span>
          </div> 
          <a href="" class="btn btn-primary">Delete</a>
          <div class="sort-by ml-auto">
            <select class="select">
              <option>Select</option>
              <option>Sort by latest</option>
              <option>Sort by oldest</option>
            </select>
          </div>
        </div>
        <table class="table table-striped">
          <thead>
            <th><input type="checkbox" class="checkbox"></th>
            <th>Sl.</th>
            <th>Username</th>
            <th>Email ID</th>
            <th>User Type</th>            
            <th>Last Login</th>
            <th>Active Status</th>
            <th>Action</th>
          </thead>
          <tbody>
            <tr>
              <td><input type="checkbox" class="checkbox"></td>
              <td>01.</td>
              <td>scandan</td>
              <td>scandan@gtntextiles.com</td>
              <td>Manager</td>              
              <td>01-02-2024, 02:19:45 PM</td>
              <td class="text-success">Active</td>
              <td>
                <a href="{{url('/view_users')}}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                <a href="{{url('/edit_users')}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                <a href="" data-toggle="modal" data-target="#myModal"><i class="fa fa-trash" aria-hidden="true"></i></a>
              </td>
            </tr>
            <tr>
              <td><input type="checkbox" class="checkbox"></td>
              <td>02.</td>
              <td>josemathew</td>
              <td>josemathew@gtntextiles.com</td>
              <td>Super Admin</td>              
              <td>10-02-2024, 11:50:05 PM</td>
              <td class="text-success">Active</td>
              <td>
                <a href="{{url('/view_users')}}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                <a href="{{url('/edit_users')}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                <a href="" data-toggle="modal" data-target="#myModal"><i class="fa fa-trash" aria-hidden="true"></i></a>
              </td>
            </tr>
            <tr>
              <td><input type="checkbox" class="checkbox"></td>
              <td>03.</td>
              <td>binoy</td>
              <td>binoy@gtntextiles.com</td>
              <td>Manager</td>
              <td>01-02-2024, 04:23:28 PM</td>
              <td class="text-danger">In-active</td>
              <td>
                <a href="{{url('/view_users')}}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                <a href="{{url('/edit_users')}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                <a href="" data-toggle="modal" data-target="#myModal"><i class="fa fa-trash" aria-hidden="true"></i></a>
              </td>
            </tr>
          </tbody>
        </table>
        <div class="pagination-block">
          <ul class="pagination pagination-sm justify-content-end">
            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
          </ul>
        </div>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">
  @if(session()->has('message'))
      swal({

          title: "Success!",

          text: "{{ session()->get('message') }}",

          icon: "success",

      });
  @endif
  </script>

@include("admin.include.footer")
