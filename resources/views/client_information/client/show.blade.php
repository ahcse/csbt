{{-- 
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
 --}}
        <div class="row">
            <div class="col-xl-12">
                <div class="panel panel-inverse">
                    <div class="panel-heading">
                        <h4 class="panel-title">Client Information</h4>
                        <div class="panel-heading-btn">
                           <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger close"
                              data-dismiss="modal"><i class="fa fa-times"></i>
                           </a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped table-bordered table-td-valign-middle">
                            <thead>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Client Name</td>
                                <td>{{$model->name}}</td>
                            </tr>
                            <tr>
                                <td>Responsible</td>
                                <td>{{$model->responsible}}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>{{$model->email}}</td>
                            </tr>
                            <tr>
                                <td>Mobile</td>
                                <td>{{$model->mobile}}</td>
                            </tr>
                            <tr>
                                <td>Phone</td>
                                <td>{{$model->phone}}</td>
                            </tr>
                            <tr>
                                <td>Fax</td>
                                <td>{{$model->fax}}</td>
                            </tr>
                            <tr>
                                <td>Office Address</td>
                                <td>{{$model->office_address}}</td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>{{$model->status}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>