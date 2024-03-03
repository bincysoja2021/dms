<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<title>Notifications :: DMS</title>
@include("admin.include.header")

<div class="main-content">
@include("admin.include.menu_left")
  <div class="main-area">
    <h2 class="main-heading">Notifications</h2>    
    <div class="dash-all pt-0">
      <div class="dash-table-all">        
        <div class="sort-block">
          <div class="show-num">
            <span>Show</span>
            <select class="select" id="filter_notification" >
              <option value="twenty" href="url('/notification_filter') }}"><a href="{{ url ('/notification_filter') }}">20</a></option>
              <option value="fifty" href="url('/notification_filter') }}"><a href="{{ url ('/notification_filter') }}">50</a></option>
              <option value="hundred" href="url('/notification_filter') }}"><a href="{{ url ('/notification_filter') }}">100</a></option>
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
        </div>
        <table class="table table-striped">
          <thead>            
            <th>Sl.</th>
            <th>Date</th>
            <th>Message</th>
            <th>Action</th>
          </thead>
          <tbody>
            @foreach($notification as $key=>$data)
            <tr>              
              <td>{{$key+1}}</td>
              <td>{{$data->date}}</td>
              <td>
                {{$data->message}}
              </td>              
              <td>
                <a href="{{ url('/view_message') }}"><i class="fa fa-eye" aria-hidden="true"></i></a>                
                <a href="" data-toggle="modal" data-target="#myModal"><i class="fa fa-trash" aria-hidden="true"></i></a>
              </td>
            </tr>
            @endforeach

          </tbody>
        </table>
        <div class="pagination-block">
          <ul class="pagination pagination-sm justify-content-end">
            <li class="page-item">{!! $notification->links('pagination::bootstrap-4') !!} value=""</li>
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

@include("admin.include.footer")
