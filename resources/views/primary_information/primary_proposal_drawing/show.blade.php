@extends('layouts.app')
@section('content')
    <div id="content" class="content">
        <ol class="breadcrumb float-xl-right">
            <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
            <li class="breadcrumb-item">Primary Information</li>
            <li class="breadcrumb-item">Primary Proposal Drawing</li>
            <li class="breadcrumb-item active">Solar Panel Shed</li>
        </ol>
        <h1 class="page-header"><small><a href="javascript:;" class="btn btn-default btn-sm m-r-5 m-b-5 btn-danger modify-btn"><i
                        class="fa fa-x fa-plus"></i> Add New</a></small></h1>
        <div class="row">
            <div class="col-xl-12">
                <div class="panel panel-inverse">
                    <div class="panel-heading">
                        <h4 class="panel-title">Primary Proposal Drawing Information</h4>
                        <div class="panel-heading-btn">
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default"
                               data-click="panel-expand"><i class="fa fa-expand"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success"
                               data-click="panel-reload"><i class="fa fa-redo"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning"
                               data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger"
                               data-click="panel-remove"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped table-bordered table-td-valign-middle" id="data-table-list">
                            <thead>
                            <tr>
                                <th width="1%">SL</th>
                                <th class="text-nowrap">Description</th>
                                <th class="text-nowrap">Remarks</th>
                                <th class="text-nowrap">Date</th>
                                <th class="text-nowrap">Attachment</th>
                                <th class="text-nowrap">Action</th>
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
    @include('partials.sidebar', [$project]);
@endsection

@section('script')
<script type="text/javascript">
    $(document).ready(function() {

        let formUrl          = '/primary-proposal-drawings/form';
        let indexUrl         = '/primary-proposal-drawings/show/'+'{{Request::segment(3)}}';
        let deletUrl         = 'primary-proposal-drawings/delete';
        let deletebaleItemId = null;
        let storeUrl         = '/primary-proposal-drawings/store';

        // feating data
        let table = $("#data-table-list").DataTable( {
            stateSave: false,
            "pageLength": 100,
            responsive:!0,
            processing: true,
            serverSide: true,
            ajax: {
                url: indexUrl,
                dataType: 'json',
                cache:false,
                type: 'GET',
                data: function ( d ) {
                }
            },
            "columns": [
                {
                    "render": function(data, type, full, meta) {
                         return meta.row + 1;
                    }, sortable: false, searchable: false
                },
                {data: 'description'},
                {data: 'remarks'},
                {data: 'created_at'},
                {data: 'attachment'},
                {data: 'actions'}
            ]
        });

        // opening form modal
        $("body").on("click", ".modify-btn", function (e) {
            e.preventDefault();
            var id = $(this).data('id');
            $("#steelModal").modal('show');
            $('.modal-content').load(formUrl, {id: id, _token: '{{csrf_token()}}', project_id: '{{Request::segment(3)}}'}, function() {
               $.getScript( "/js/parsley.js");
            });
        });

        // view 
        $("body").on("click", ".view-btn", function (e) {
            e.preventDefault();
            var id = $(this).data('id');
            $("#steelModal").modal('show');
            $('.modal-content').load(viewUrl, {id: id, _token: '{{csrf_token()}}'}, function() {
               $.getScript( "/js/parsley.js");
            });
        });

        // delete modal
        $("body").on("click", ".delete-btn", function (e) {
            e.preventDefault();
            deletebaleItemId = $(this).data('id');
            $("#steelModal").modal('show');
            $('.modal-content').load(deletUrl, {delete: false, _token: '{{csrf_token()}}'}, function() {
            });
        });

        // delete confirm
        $("body").on("click", ".delete-confirm", function (e) {
            e.preventDefault();
            $.ajax({
              url:  deletUrl,
              type: 'POST',
              data : {
                "_token": "{{ csrf_token() }}",
                delete: true,
                id: deletebaleItemId
              },
              success: function(data, textStatus, jqXHR) {
                $.notify(data.message,'success');
                table.ajax.reload();
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
      
        // storing 
        $(document).on("submit", "form.form-add", function (e) {
          e.preventDefault();
          let form = $(this);
          let formdata = false;
          if (window.FormData) {
              formdata = new FormData(form[0]);
          }
          let formAction = storeUrl;//form.attr('action');
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
                $("#steelModal").modal('hide');
                $.notify(data.message,'success');
                table.ajax.reload();
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


