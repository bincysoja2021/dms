<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<title>Read Message :: DMS</title>
@include("admin.include.header")

<div class="main-content">
  @include("admin.include.menu_left")
  <div class="main-area">
    <h2 class="main-heading">Read Message</h2>
    <div class="message-body">
      <div class="tag-block">
        <table class="table">
          <tr>
            <td width="200">Message Title</td>
            <td width="10">:</td>
            <td>Uploading failed for 3 documents</td>
          </tr>
          <tr>
            <td>Date and Time</td>
            <td>:</td>
            <td>20-02-2024</td>
          </tr>
          <tr>
            <td>Status</td>
            <td>:</td>
            <td><span class="text-danger">Failed</span></td>
          </tr>
          <tr>
            <td>Message</td>
            <td>:</td>
            <td>
              Uploading failed for 3 documents out of 25 documents scheduled.<br/>
              Date uploaded : 20-02-2024<br/>
              Documents scheduled : 25<br/>
              Documents successfull : 22<br/>
              Documents failed : 3<br/>
              Document names : IN100200.pdf, SB200500.pdf, SB500600.pdf<br/>              
            </td>
          </tr>
        </table>
        <div class="btn-groups">
          <a href=" {{url ('/notification') }}" class="btn btn-info">Go back to Notifications</a>        
        </div>
      </div>      
    </div>
    
  </div>
</div>

@include("admin.include.footer")
