<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<title>Upload Docmuments :: DMS</title>
@include("admin.include.header")

<div class="main-content">
  @include("admin.include.menu_left")
  <div class="main-area">
    <h2 class="main-heading">Upload Docmument</h2>  
    <div class="dash-all pt-0">
      <div class="dash-table-all">        
        <table class="table" style="max-width: 600px;">
          <tr>
            <td>Date</td>
            <td>10-02-2024, 10:05:28 AM</td>
          </tr>
          <tr>
            <td>Document type</td>
            <td>
              <select class="form-control">
                <option>Invoice</option>
                <option>Sales Order</option>
                <option>Shipping Bill</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>Upload file</td>
            <td>
              <button type="button" href="#" class="btn btn-primary btn-sm btn-upload">
                Click to Upload 
                <input type="file" name="file"><i class="fa fa-upload" aria-hidden="true"></i>
              </button>
              <span class="text-success">IN100200300.pdf</span>
            </td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>
              <button type="button" href="" class="btn btn-success">Upload Document</button>
          </tr>
        </table>
        
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
        <h4 class="modal-title text-danger">Are you Sure, you want to delete the file?</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      
      <!-- Modal body -->
      <div class="modal-body">
        Once you delete the file, you will no longer be able to access the file. Click "Yes" to proceed or else click "Cancel".
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
