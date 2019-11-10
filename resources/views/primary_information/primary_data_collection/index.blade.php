@extends('layouts.app')
@section('content')
    <div id="content" class="content">
        <ol class="breadcrumb float-xl-right">
            <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
            <li class="breadcrumb-item">Primary Information</li>
            <li class="breadcrumb-item active">Primary Data Collection</li>
        </ol>
        <h1 class="page-header">Primary Data Collection</h1>
        <div class="row">
            <div class="col-xl-12">
                <div class="panel panel-inverse">
                    <div class="panel-heading">
                        <h4 class="panel-title">Primary Data Collection List</h4>
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
                                <th class="text-nowrap">Project Name</th>
                                <th class="text-nowrap">Client Name</th>
                                <th class="text-nowrap">Location</th>
                                <th class="text-nowrap">Status</th>
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
    @include('partials.project_search', $filters);
@endsection


@section('script')
<script type="text/javascript">
    $(document).ready(function() {

        var indexUrl = '/common/projects';
        let viewUrl  = '/primary-data-collections/show';
        let formUrl  = '/primary-data-collections/form';

        let getParams = function() {
            let selected_status     = $("select[name=status]").val();
            let selected_project_id = $("select[name=project_id]").val();
            let selected_client_id  = $("select[name=client_id]").val();

            let params = [];
            let paramsObject = {};

            if(selected_status) {
                params.push(`selected_status=${selected_status}`);
                paramsObject['selected_status'] = selected_status;
            }
            if(selected_project_id) {
                params.push(`selected_project_id=${selected_project_id}`);
                paramsObject['selected_project_id'] = selected_project_id;
            }
            if(selected_client_id) {
                params.push(`selected_client_id=${selected_client_id}`);
                paramsObject['selected_client_id'] = selected_client_id;
            }
            if(params.length) {
                params = params.join('&');
                return {
                    param_string: params,
                    param_object: paramsObject
                }
            }

            return {
                param_string: null,
                param_object: null
            }
        }

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
                    let param = getParams();
                    if(param.param_object) {
                        $.extend( d, param.param_object);
                    }
                }
            },
            "columns": [
                {
                    "render": function(data, type, full, meta) {
                         return meta.row + 1;
                    }, sortable: false, searchable: false
                },
                {data: 'name'},
                {data: 'type'},
                {
                  "render": function(data, type, full, meta) {
                      if(full.client) {
                          return full.client.name;
                      }
                      return '';
                  }, 
                  sortable: false, searchable: false
                },
                {data: 'status'},
                {
                  "render": function(data, type, full, meta) {
                    let btn1 = `<a href='javascript:;' class='btn btn-success btn-xs modify-btn' data-id='${full.id}'><i class='fa fa-pencil-alt'></i></a> `;
                    let btn2  = `<a href='javascript:;' class='btn btn-inverse btn-xs view-btn' data-id='${full.id}'><i class='fa fa-eye'></i></a>`;
                      return btn1+btn2;
                  }, 
                  sortable: false, searchable: false
                },
            ]
        });


        $("#filter-project").click(function() {
            let param = getParams();
            let location = `/primary-data-collections`;
            
            if(param.param_string) {
              location += `?${param.param_string}`;   
            }
            
            window.location = location;
        });


        $(document).on('click', '.view-btn', function(e) {
            e.preventDefault();
            var id = $(this).data('id');
            $("#steelModal").modal('show');
            $('.modal-content').load(viewUrl, {id: id, _token: '{{csrf_token()}}'}, function() {
               $.getScript( "/js/parsley.js");
            });
        });

        $(document).on("click", ".modify-btn", function (e) {
            e.preventDefault();
            var id = $(this).data('id');
            $("#steelModal").modal('show');
            $('.modal-content').load(formUrl, {id: id, _token: '{{csrf_token()}}'}, function() {
               $.getScript( "/js/parsley.js");
            });
        });
    });
</script>
@endsection
