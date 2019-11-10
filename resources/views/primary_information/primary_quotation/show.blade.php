@extends('layouts.app')
@section('content')
    <div id="content" class="content">
        <ol class="breadcrumb float-xl-right">
            <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
            <li class="breadcrumb-item">Design & Engineering</li>
            <li class="breadcrumb-item active">Work Order</li>
            <li class="breadcrumb-item active">Work order list</li>
        </ol>
        <h1 class="page-header">Work order list</h1>
        <div class="row">
            <div class="col-xl-12">
                <div class="panel panel-inverse panel-with-tabs" data-sortable-id="ui-unlimited-tabs-1">
                    <div class="panel-heading p-0">
                        <div class="tab-overflow">
                            <ul class="nav nav-tabs nav-tabs-inverse">
                                <li class="nav-item prev-button"><a href="javascript:;" data-click="prev-tab"
                                                                    class="nav-link text-primary"><i
                                            class="fa fa-arrow-left"></i></a></li>
                                <li class="nav-item"><a href="#nav-tab-1" data-toggle="tab" class="nav-link active">Basic
                                        Building</a></li>
                                <li class="nav-item"><a href="#nav-tab-2" data-toggle="tab" class="nav-link"> Sheeting &
                                        Accessories</a></li>
                                <li class="nav-item next-button"><a href="javascript:;" data-click="next-tab"
                                                                    class="nav-link text-primary"><i
                                            class="fa fa-arrow-right"></i></a></li>
                            </ul>
                        </div>
                        <div class="panel-heading-btn mr-2 ml-2 d-flex">
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-secondary"
                               data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        </div>
                    </div>
                    <div class="panel-body tab-content">
                        <div class="tab-pane fade active show" id="nav-tab-1">
                            <h5 class="m-t-10"><small><a href="javascript:;" data-type="basic_building" class="btn btn-default btn-sm m-r-5 m-b-5 btn-danger modify-btn"><i class="fa fa-x fa-plus"></i> Add New</a></small></h5>
                            
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-td-valign-middle" id="basic-building-list">
                                    <thead>
                                    <tr>
                                        <th width="1%">SL.</th>
                                        <th class="text-nowrap">Description of Item</th>
                                        <th class="text-nowrap">Unit</th>
                                        <th class="text-nowrap">Qty</th>
                                        <th class="text-nowrap">Rate</th>
                                        <th class="text-nowrap">Amount</th>
                                        <th class="text-nowrap">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                        
                                    </tbody>
                                </table>
                            </div>    
                        </div>
                        <div class="tab-pane fade" id="nav-tab-2">
                            <h5 class="m-t-10"><small><a href="javascript:;" data-type="sheet" class="btn btn-default btn-sm m-r-5 m-b-5 btn-danger modify-btn"><i class="fa fa-x fa-plus"></i> Add New</a></small></h5>

                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-td-valign-middle" id="sheet-list">
                                    <thead>
                                    <tr>
                                        <th width="1%">SL.</th>
                                        <th class="text-nowrap">Description of Item</th>
                                        <th class="text-nowrap">Unit</th>
                                        <th class="text-nowrap">Qty</th>
                                        <th class="text-nowrap">Rate</th>
                                        <th class="text-nowrap">Amount</th>
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
        </div>
    </div>
    @include('partials.sidebar', [$project]);
    @include('partials.delete');
@endsection



@section('script')
<script type="text/javascript">
    $(document).ready(function() {

        let formUrl          = '/primary-quotations/form';
        let indexUrl         = '/primary-quotations/show/'+'{{Request::segment(3)}}';
        let deletUrl         = '/primary-quotations/delete';
        let deletebaleItemId = null;
        let storeUrl         = '/primary-quotations/store';
        let tables = {};
        let tableIds = ['#basic-building-list',"#sheet-list"];

        for(let i = 0; i<tableIds.length; i++) {
            // feating data
            tables[`${tableIds[i]}`] = $(tableIds[i]).DataTable( {
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
                        if(tableIds[i] == '#basic-building-list') {
                            $.extend( d, {type: 'basic_building'});
                        }
                        if(tableIds[i] == '#sheet-list') {
                             $.extend( d, {type: 'sheet'});
                        }
                    }
                },
                "columns": [
                    {
                        "render": function(data, type, full, meta) {
                             return meta.row + 1;
                        }, sortable: false, searchable: false
                    },
                    {data: 'description'},
                    {data: 'unit'},
                    {data: 'quantity'},
                    {data: 'rate'},
                    {data: 'amount'},
                    {data: 'actions'}
                ]
            });
        }
        
        // opening form modal
        $("body").on("click", ".modify-btn", function (e) {
            e.preventDefault();
            let type = $(this).data().type;
            var id = $(this).data('id');
            $("#steelModal").modal('show');
            $('.modal-content').load(formUrl, {id: id, type: type, _token: '{{csrf_token()}}', project_id: '{{Request::segment(3)}}'}, function() {
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
                Object.keys(tables).forEach(function(key) {
                  tables[key].ajax.reload();
                });
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
                Object.keys(tables).forEach(function(key) {
                  tables[key].ajax.reload();
                });

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

