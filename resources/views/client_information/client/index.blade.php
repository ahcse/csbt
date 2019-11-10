@extends('layouts.app')
@section('content')
<div id="content" class="content">
   <ol class="breadcrumb float-xl-right">
      <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
      <li class="breadcrumb-item">Client Information</li>
      <li class="breadcrumb-item active">Clients</li>
   </ol>
   <h1 class="page-header">Clients <small><a href="javascript:;" class="btn btn-default btn-sm m-r-5 m-b-5 btn-danger modify-btn"><i
      class="fa fa-x fa-plus"></i> Add New</a></small></h1>
   <div class="row">
      <div class="col-xl-12">
         <div class="panel panel-inverse">
            <div class="panel-heading">
               @include('partials.panel_heading_btn', ['title' => 'Client List']);
            </div>
            <div class="panel-body">

              <div class="table-responsive">
                <table class="table table-striped table-bordered table-td-valign-middle" id="data-table-list">
                  <thead>
                     <tr>
                        <th width="1%">SL</th>
                        <th class="text-nowrap">Client Name</th>
                        <th class="text-nowrap">Responsible Person</th>
                        <th class="text-nowrap">Email Address</th>
                        <th class="text-nowrap">Mobile No.</th>
                        <th class="text-nowrap">Telephone No.</th>
                        <th class="text-nowrap">Status</th>
                        <th class="text-nowrap">Actions</th>
                     </tr>
                  </thead>
                  <tbody>
                  </tbody>
                 </table>
              </div>
            </div>
         </div>
      </div>
   </div>
</div>
@include('partials.delete');
@endsection
@section('script')
<script type="text/javascript">
  $(document).ready(function() {
    // valiables global
    let indexUrl= "/clients";
    let formUrl = '/clients/form';
    let viewUrl = '/clients/show';

    // feating data
    let table = $("#data-table-list").DataTable( {
        stateSave: false,
        "pageLength": 100,
        responsive:!0,
        ajax: indexUrl,
        processing: true,
        serverSide: true,
        "columns": [
          {
              "render": function(data, type, full, meta) {
                   return meta.row + 1;
              }, sortable: false, searchable: false
          },
          {data: 'name'},
          {data: 'responsible'},
          {data: 'email'},
          {data: 'mobile'},
          {data: 'phone'},
          {data: 'status'},
          {data: 'actions', 'sortable': false, 'searchable': false}
        ]
    });

  // opening form modal
  $("body").on("click", ".modify-btn", function (e) {
      e.preventDefault();
      var id = $(this).data('id');
      $("#steelModal").modal('show');
      $('.modal-content').load(formUrl, {id: id, _token: '{{csrf_token()}}'}, function() {
         $.getScript( "/js/parsley.js");
      });
  });

  $("body").on("click", ".view-btn", function (e) {
      e.preventDefault();
      var id = $(this).data('id');
      $("#steelModal").modal('show');
      $('.modal-content').load(viewUrl, {id: id, _token: '{{csrf_token()}}'}, function() {
         $.getScript( "/js/parsley.js");
      });
  });

  // storing 
  $(document).on("submit", "form.form-add", function (e) {
    e.preventDefault();
    let form = $(this);
    let formdata = false;
    if (window.FormData) {
        formdata = new FormData(form[0]);
    }
    let formAction = form.attr('action');

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: formAction,
        type: 'POST',
        data: formdata,
        cache: false,
        contentType: false,
        processData: false,
        success: function (data, textStatus, jqXHR) {
          table.ajax.reload();
          $("#steelModal").modal('hide');
          $.notify(data.message,'success');
        },
        error: function (xhr, ajaxOptions, thrownError) {
          if(xhr.responseJSON.message) {
            $.notify(xhr.responseJSON.message,'error');
          }
          else{
            $.notify(thrownError,'error');
          }
        }
    });
  });

  });

</script>
@endsection