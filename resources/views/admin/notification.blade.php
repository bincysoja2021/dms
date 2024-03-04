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
<title>Notifications :: DMS</title>
@include("admin.include.header")

<div class="main-content">
@include("admin.include.menu_left")
  <div class="main-area">
    <h2 class="main-heading">Notifications</h2>   
    <?php  $url = $_SERVER['HTTP_HOST'] ; ?> 
    <div class="dash-all pt-0">
      <div class="dash-table-all">        
        <!-- <div class="sort-block">
          <div class="show-num">
            <span>Show</span>
            <select class="select" id="filter_notification" onchange="location.href='notification_filter?search='+this.value">
              <option value="20" >20</option>
              <option value="50" >50</option>
              <option value="100" >100</option>
            </select>
            <span>Entries</span>
          </div>           
          <div class="sort-by ml-auto">
            <select class="select">
              <option>Select</option>
              <option>Sort by latest</option>
              <option>Sort by oldest</option>
            </select>
          </div>
        </div> -->
        <table class="table table-striped yajra-datatable">
          <thead>
          <tr>            
            <th>Sl.</th>
            <th>Date</th>
            <th>Message</th>
            <th>Action</th>
          </tr>
          </thead>
          <tbody>

          </tbody>
        </table>
        <!-- <div class="pagination-block">
          <ul class="pagination pagination-sm justify-content-end">
            <li class="page-item">{!! $notification->links('pagination::bootstrap-4') !!}</li>
          </ul>
        </div> -->
      </div>
    </div>
  </div>
</div>

<!-- The Modal -->
<div class="modal fade" id="notificationModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
    
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title text-danger">Are you Sure, you want to delete the notification?</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      
      <!-- Modal body -->
      <div class="modal-body">
        Once you delete the notification, you will no longer be able to access the message. Click "Yes" to proceed or else click "Cancel".
      </div>
      
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Yes</button>
        <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
      </div>
      
    </div>
  </div>
</div>
<script type="text/javascript">
  $(function () {
    var table = $('.yajra-datatable').DataTable
    ({
        processing: true,
        serverSide: true,
        ajax: "{{ route('notification.list') }}",
        columns: [
            {data: 'id', name: 'id'},
            {data: 'date', name: 'date'},
            {data: 'message', name: 'message'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
  });

</script>

@include("admin.include.footer")
