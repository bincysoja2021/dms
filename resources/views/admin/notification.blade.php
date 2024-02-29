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
            <select class="select">
              <option>20</option>
              <option>50</option>
              <option>100</option>
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
            <tr>              
              <td>01.</td>
              <td>20-02-2024</td>
              <td>
                Uploading failed for 3 documents out of 25 documents scheduled...
              </td>              
              <td>
                <a href="{{ url('/view_message') }}"><i class="fa fa-eye" aria-hidden="true"></i></a>                
                <a href="" data-toggle="modal" data-target="#myModal"><i class="fa fa-trash" aria-hidden="true"></i></a>
              </td>
            </tr>
            <tr>              
              <td>02.</td>
              <td>28-02-2024</td>
              <td>
                All documents successfully uploaded...
              </td>              
              <td>
                <a href="{{ url('/view_message') }}"><i class="fa fa-eye" aria-hidden="true"></i></a>                
                <a href="" data-toggle="modal" data-target="#myModal"><i class="fa fa-trash" aria-hidden="true"></i></a>
              </td>
            </tr>
            <tr>              
              <td>03.</td>
              <td>05-02-2024</td>
              <td>
                Uploading failed for 1 documents out of 58 documents scheduled...
              </td>              
              <td>
                <a href=" {{ url('/view_message') }}"><i class="fa fa-eye" aria-hidden="true"></i></a>                
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
