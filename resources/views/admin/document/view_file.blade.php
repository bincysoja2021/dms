<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<title>View file :: DMS</title>
@include("admin.include.header")

<div class="main-content">
  @include("admin.include.menu_left")
  <div class="main-area">
    <h2 class="main-heading">View file</h2>
    <div class="tag-block">
      <table class="table table-striped">        
        <tr>
          <td>Invoice Number</td>
          <td width="10">:</td>
          <td>
            <input type="text" class="form-control" name="" value="IN100200300" disabled>
          </td>
        </tr>
        <tr>
          <td>Invoice Date</td>
          <td width="10">:</td>
          <td>
            <input type="text" class="form-control" name="" value="10-05-2020" disabled>
          </td>
        </tr>
        <tr>
          <td>Sales Order Number</td>
          <td width="10">:</td>
          <td>
            <input type="text" class="form-control" name="" value="SO100200300" disabled>
          </td>
        </tr>
        <tr>
          <td>Shipping Bill Number</td>
          <td width="10">:</td>
          <td>
            <input type="text" class="form-control" name="" value="SB100200300" disabled>
          </td>
        </tr>
        <tr>
          <td>Company Name</td>
          <td width="10">:</td>
          <td>
            <input type="text" class="form-control" name="" value="Exacore IT Solutions Private Limited" disabled>
          </td>
        </tr>
        <tr>
          <td>Company ID</td>
          <td width="10">:</td>
          <td>
            <input type="text" class="form-control" name="" value="EIT4000500" disabled>
          </td>
        </tr>
        <tr>
          <td>File name</td>
          <td width="10">:</td>
          <td>
            <input type="text" class="form-control" name="" value="IN100200300" disabled>
          </td>
        </tr>
        <tr>
          <td>Uploaded date</td>
          <td width="10">:</td>
          <td>
            <input type="text" class="form-control" name="" value="25-10-2023" disabled>
          </td>
        </tr>
        <tr>
          <td>Download file</td>
          <td width="10">:</td>
          <td>
            <a href="" class="btn btn-primary">Download</a>
          </td>
        </tr>        
      </table>
      <div class="btn-groups">
        <a href="{{url('/edit_file')}}" class="btn btn-info">Edit</a>        
      </div>
    </div>
  </div>
</div>

@include("admin.include.footer")
