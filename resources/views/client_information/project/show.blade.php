 <div class="row">
            <div class="col-xl-12">
                <div class="panel panel-inverse">
                    <div class="panel-heading">
                        <h4 class="panel-title">Project Information</h4>
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
                                <td>Project Name</td>
                                <td>{{$model->name}}</td>
                            </tr>
                            <tr>
                                <td>Project Type</td>
                                <td>{{$model->type}}</td>
                            </tr>
                            <tr>
                                <td>Client Name</td>
                                <td>{{$model->client->name}}</td>
                            </tr>
                            <tr>
                                <td>Project Address</td>
                                <td>{{$model->address}}</td>
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