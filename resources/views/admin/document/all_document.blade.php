<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
<link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script src = "http://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js" defer ></script>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<title>All Docmuments :: DMS</title>
@include("admin.include.header")

<div class="main-content">
  @include("admin.include.menu_left")
  <div class="main-area">
    <h2 class="main-heading">All Docmuments</h2>
    @include("admin.include.search")
    
    <div class="dash-all">
      <div class="dash-table-all">
        <h4 class="sub-heading">Uploaded Documents</h4>
        
        <table class="table table-striped doc-datatable" id="doc-datatable">
          <thead>
            <tr>
              <th width="20%"><input type="checkbox" id="select-all">&nbsp&nbsp&nbsp
              <button class="btn btn-primary" id="delete-selected">Delete</button></th>
              <th width="10%">Sl.</th>
              <th width="10%">Document ID</th>
              <th width="10%">Document Type</th>
              <th width="10%">Uploaded Date</th>
              <th width="10%">Thumbnail</th>
             <!--  <th>Tags</th>
              <th>Thumbnail</th> -->
              <th width="25%">Action</th>
           </tr>
          </thead>
          <tbody>
            
          </tbody>
        </table>
        
      </div>
    </div>
  </div>
</div>

<!-- Image Modal -->
<div class="modal fade" id="pdfModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="imageModalLabel">File Viewer</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
        <embed src="" id="pdfPreview"  frameborder="0" width="100%" height="400px">
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
// Handle click event on the file link
$('document').ready(function() {
  $('#doc-datatable').on('click', '.view_image', function(e)
  {
    e.preventDefault();
    var imageUrl = $(this).data('image');
    $('#pdfPreview').attr('src', imageUrl);
    $('#pdfModal').modal('show');
  });
});
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
 $('#select-all').on('change', function() {
        $('input[type="checkbox"]').prop('checked', $(this).prop('checked'));
    });
     
  $(function () {
    var table = $('.doc-datatable').DataTable
    ({
        processing: true,
        serverSide: true,
        ajax: "{{ route('get_doc_list.list') }}",
        columns: [
            { data: 'checkbox', name: 'checkbox', orderable: false, searchable: false },
            {data: 'id', name: 'id'},
            {data: 'doc_id', name: 'doc_id'},
            {data: 'document_type', name: 'document_type'},
            {data: 'date', name: 'date'},
            {data: 'filename', name: 'filename', orderable: false, searchable: false},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
  });

</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

<script type="text/javascript">
  function delete_doc_modal(id)
  {
    var id = id; 
    swal({
      title: 'Are you sure?',
      text: "Are you sure you want to delete this document?",
      type: 'warning',
      showCancelButton: true,
      confirmButtonClass: 'btn btn-success',
      cancelButtonClass: 'btn btn-danger',
      confirmButtonText: 'Yes, delete it!',
      buttonsStyling: false
    }).then((isConfirm) => {
    if (isConfirm){
       $.ajax({
              type:'GET',
              url:'{{url("/delete_docs")}}/' +id,
              data:{
                  "_token": "{{ csrf_token() }}",
              },
              success:function(data) {
              swal({

              title: "Success!",

              text: "Document has been deleted!..",

              icon: "success",

              });
              setTimeout(function()
              {
                window.location.href="{{url("all_document")}}";
              }, 2000);
              }
           });
    }
    });
  }
  $('#delete-selected').on('click', function() {
        var ids = $('input[name="item_checkbox[]"]:checked').map(function() {
            return $(this).val();
        }).get();

        $.ajax({
            url: '{{url("/delete_multi_docs")}}',
            method: 'POST',
            data: { 
                    ids: ids,
                    _token: "{{ csrf_token() }}",
                  },
            success: function(response) {
              swal({

              title: "Success!",

              text: "Selected documents has been deleted!..",

              icon: "success",

              });
             setTimeout(function()
              {
                window.location.href="{{url("all_document")}}";
              }, 2000);
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    });
</script>
@include("admin.include.footer")
