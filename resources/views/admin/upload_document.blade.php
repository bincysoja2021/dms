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
          <form method="POST" action="{{ url('submit_docs') }}" enctype="multipart/form-data">
            @csrf
            <tr>
              <td>Date</td>
              <td>{{\Carbon\Carbon::now()->setTimezone("Asia/Kolkata")->format('d-m-Y H:i:s A')}}</td>
            </tr>
            <tr>
              <td>Document type <span style="color: red">*</span></td>
              <td>
                <select class="form-control @error('doc_type') is-invalid @enderror" name="doc_type" id="doc_type" > 
                  <option>Select</option>
                  <option value="Invoice">Invoice</option>
                  <option value="Sales Order">Sales Order</option>
                  <option value="Shipping Bill">Shipping Bill</option>
                </select>
                 @error('doc_type')
                  <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </td>
            </tr>
            <tr>
              <td>Company ID <span style="color: red">*</span></td>
              <td><input type="text" class="form-control  @error('company_id') is-invalid @enderror" name="company_id" id="company_id" value="{{ old('company_id') }}">
              @error('company_id')
            <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
            </span>
          @enderror </td>
            </tr>
            <tr>
              <td>Company name <span style="color: red">*</span></td>
              <td><input type="text" class="form-control  @error('company_name') is-invalid @enderror" name="company_name" id="company_name" value="{{ old('company_name') }}">
              @error('company_name')
            <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
            </span>
          @enderror </td>
            </tr>
            <tr>
              <td>Upload file<span style="color: red">*</span></td>
              <td>
                  <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror" onchange="Checksize_image()">
                    @error('image')
                      <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                <img src="" alt="Image Preview" id="preview" style="display: none;">
               <!--  <span class="text-success">IN100200300.pdf</span> -->
              </td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>
                <button type="submit" class="btn btn-success" id="upload_document">Upload Document</button>
            </tr>
        </form>
        </table>
        
      </div>
    </div>
  </div>
</div>

<script>
    // document.getElementById('image').addEventListener('change', function(event) {
    //     var file = event.target.files[0];
    //     var reader = new FileReader();
        
    //     reader.onload = function(e) {
    //         var img = document.getElementById('preview');
    //         img.src = e.target.result;
    //         img.style.display = 'block';
    //     };
        
    //     reader.readAsDataURL(file);
    // });
</script>
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
Checksize_image = () => {
const fi = document.getElementById('image');
var type = document.getElementById("doc_type").value;
var company_id = document.getElementById("company_id").value;
var name = document.getElementById("company_name").value;
var image = document.getElementById("image").value;
var allowedExtensions = /(\.pdf)$/i;


if(!allowedExtensions.exec(image)){
// alert('Please upload file having extensions .pdf only.');
$("#upload_document").attr("disabled", true);
var msg="Please upload file having extensions .pdf only.";
$.ajax({
      type: "POST",
      headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') },
      url: '/failed_docs',
      data: { "_token": "{{ csrf_token() }}",
        type: type,
        company_id:company_id,
        name:name,
        image:image,
        msg:msg,
      },
      success: function(newData) {
        if(newData.success == 1){  
          swal({
            title: "Error!",
            text: newData.message,
            icon: "error",
          });
           setTimeout(function()
            {
              window.location.href="{{url("upload_document")}}";
            }, 3000);
          
        } 
      },
              
    });
}
// Check if any file is selected.
if (fi.files.length > 0)
{
  for (const i = 0; i <= fi.files.length - 1; i++)
  {
    const fsize = fi.files.item(i).size;
    const file = Math.round((fsize / 1024));
    // compare size of the file.
    if (file >= 4096) 
    {
      var msg="File too Big, please select a file less than 4mb.";
      // alert("File too Big, please select a file less than 4mb");
      $("#upload_document").attr("disabled", true);
      $.ajax({
            type: "POST",
            headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') },
            url: '/failed_docs',
            data: { "_token": "{{ csrf_token() }}",
              type: type,
              company_id:company_id,
              name:name,
              image:image,
              msg:msg,
            },
            success: function(newData) {
              if(newData.success == 1){  
                swal({
                  title: "Error!",
                  text: newData.message,
                  icon: "error",
                });
                 setTimeout(function()
                {
                  window.location.href="{{url("upload_document")}}";
                }, 3000);
              } 
            },
                    
          });
    }
    else if (file < 10)
    {
      var msg="File too small, please select a file greater than 10kb.";
      // alert("File too small, please select a file greater than 10kb");
      $("#upload_document").attr("disabled", true);
      $.ajax({
            type: "POST",
            headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') },
            url: '/failed_docs',
            data: { "_token": "{{ csrf_token() }}",
              type: type,
              company_id:company_id,
              name:name,
              image:image,
              msg:msg,
            },
            success: function(newData) {
              if(newData.success == 1){  
                swal({
                  title: "Error!",
                  text: newData.message,
                  icon: "error",
                });
                 setTimeout(function()
                {
                  window.location.href="{{url("upload_document")}}";
                }, 3000);
              } 
            },
                    
          });
    } 
    // else {
    //     alert("ok")
    // }
  }
}
}
</script>
@include("admin.include.footer")
