<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<!-- styles and scripts -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
<link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script src = "http://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js" defer ></script>

<title>All Users :: DMS</title>
@include("admin.include.header")

<div class="main-content">
 @include("admin.include.menu_left")
  <div class="main-area">
    <h2 class="main-heading">All Users</h2>  
    <div class="dash-all pt-0">
      <div class="dash-table-all">
        <table class="table table-striped user-datatable">
          <thead>
            <tr>
              <th>Sl.</th>
              <th>Username</th>
              <th>Email ID</th>
              <th>User Type</th>            
              <th>Last Login</th>
              <th>Active Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
           
          </tbody>
        </table>
       
      </div>
    </div>
  </div>
</div>

<!-- The Modal -->
<div class="modal fade" id="userModal">
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
<script type="text/javascript">
  $(function () {
    var table = $('.user-datatable').DataTable
    ({
        processing: true,
        serverSide: true,
        ajax: "{{ route('users.list') }}",
        columns: [
            {data: 'id', name: 'id'},
            {data: 'full_name', name: 'full_name'},
            {data: 'email', name: 'email'},
            {data: 'user_type', name: 'user_type'},
            {data: 'last_login_time', name: 'last_login_time'},
            {data: 'active_status', name: 'active_status'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
  });

</script>
@include("admin.include.footer")
