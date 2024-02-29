<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<title>All Docmuments :: DMS</title>
<?php include("include/header.php");?>

<div class="main-content">
  <?php include("include/menu-left.php");?>
  <div class="main-area">
    <h2 class="main-heading">All Docmuments</h2>
    <?php include("include/search.php");?>
    
    <div class="dash-all">
      <div class="dash-table-all">
        <h4 class="sub-heading">Uploaded Documents</h4>
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
            <th>Document ID</th>
            <th>Uploaded Date</th>
            <th>Tags</th>
            <th>Thumbnail</th>
            <th>Action</th>
          </thead>
          <tbody>
            <tr>
              <td><input type="checkbox" class="checkbox"></td>
              <td>01.</td>
              <td>SO-4512012</td>
              <td>20-02-2024</td>
              <td>IN-123456789, BN-123456789, SO-123456789, CN-Exacore</td>
              <td>
                <a href="images/thumbnail.png" data-fancybox="images" data-caption="My caption">
                  <img src="images/thumbnail.png" alt="" />
                </a>
              </td>
              <td>
                <a href="view-file.php"><i class="fa fa-eye" aria-hidden="true"></i></a>
                <a href="edit-file.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                <a href="" data-toggle="modal" data-target="#myModal"><i class="fa fa-trash" aria-hidden="true"></i>
                </a>
                <a href="#"><i class="fa fa-download" aria-hidden="true"></i></a>
              </td>
            </tr>
            <tr>
              <td><input type="checkbox" class="checkbox"></td>
              <td>02.</td>
              <td>SO-4512012</td>
              <td>20-02-2024</td>
              <td>IN-123456789, BN-123456789, SO-123456789, CN-Exacore</td>
              <td>
                <a href="images/thumbnail.png" data-fancybox="images" data-caption="My caption">
                  <img src="images/thumbnail.png" alt="" />
                </a>
              </td>
              <td>
                <a href="view-file.php"><i class="fa fa-eye" aria-hidden="true"></i></a>
                <a href="edit-file.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                <a href="" data-toggle="modal" data-target="#myModal"><i class="fa fa-trash" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-download" aria-hidden="true"></i></a>
              </td>
            </tr>
            <tr>
              <td><input type="checkbox" class="checkbox"></td>
              <td>03.</td>
              <td>SO-4512012</td>
              <td>20-02-2024</td>
              <td>IN-123456789, BN-123456789, SO-123456789, CN-Exacore</td>
              <td>
                <a href="images/thumbnail.png" data-fancybox="images" data-caption="My caption">
                  <img src="images/thumbnail.png" alt="" />
                </a>
              </td>
              <td>
                <a href="view-file.php"><i class="fa fa-eye" aria-hidden="true"></i></a>
                <a href="edit-file.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                <a href="" data-toggle="modal" data-target="#myModal"><i class="fa fa-trash" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-download" aria-hidden="true"></i></a>
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

<?php include("include/footer.php");?>
