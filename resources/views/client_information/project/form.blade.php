<div class="row">
            <div class="col-xl-12">
                <div class="panel panel-inverse">
                    <div class="panel-heading">
                        <h4 class="panel-title">Project {{$model?'Edit': 'Creation'}} Form</h4>
                        <div class="panel-heading-btn">
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger close"
                                data-dismiss="modal"><i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal form-add" data-parsley-validate="true" name="demo-form" action="/projects/store" method="POST">
                            @csrf
                            <input type="hidden" value="{{$model?$model->id: ''}}" name="id"/>

                            <div class="form-group row m-b-15">
                                <label class="col-md-4 col-sm-4 col-form-label">Client Name</label>
                                <div class="col-md-8 col-sm-8">
                                    {!! Form::select('client_id', $clients, $model?($model->client?$model->client->id: ''): '',
                                     ['class'=>'form-control selectpicker','required'=>'required',  'data-live-search'=>"true",
                                     'data-parsley-required' => "true", 'data-style' => 'btn-white'
                                     ]) !!}
                                </div>
                            </div>

                            <div class="form-group row m-b-15">
                                <label class="col-md-4 col-sm-4 col-form-label" for="name">Project Name </label>
                                <div class="col-md-8 col-sm-8">
                                    <input class="form-control" type="text" name="name"
                                           placeholder="Enter Project Name"
                                           data-parsley-required="true" value="{{$model?$model->name:''}}"/>
                                </div>
                            </div>
                            <div class="form-group row m-b-15">
                                <label class="col-md-4 col-sm-4 col-form-label" for="type">Project Type </label>
                                <div class="col-md-8 col-sm-8">
                                    <input class="form-control" type="text" name="type"
                                           placeholder="Enter Project Type"
                                           data-parsley-required="true" value="{{$model?$model->type:''}}"/>
                                </div>
                            </div>
                            <div class="form-group row m-b-15">
                                <label class="col-md-4 col-sm-4 col-form-label" for="Address">Address </label>
                                <div class="col-md-8 col-sm-8">
                            <textarea class="form-control" name="address" rows="1"
                                      placeholder="Enter Address"
                                      data-parsley-required="true">{{$model?$model->address:''}}</textarea>
                                </div>
                            </div>
                            <div class="form-group row m-b-15">
                                <label class="col-md-4 col-sm-4 col-form-label">Status</label>
                                <div class="col-md-8 col-sm-8">
                                    {!! Form::select('status', $statuses, $model?$model->status: '',
                                     ['class'=>'form-control selectpicker','required'=>'required',  'data-live-search'=>"true",
                                     'data-parsley-required' => "true", 'data-style' => 'btn-white'
                                     ]) !!}
                                </div>
                            </div>
                            <div class="form-group row m-b-0">
                                <label class="col-md-4 col-sm-4 col-form-label">&nbsp;</label>
                                <div class="col-md-8 col-sm-8">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
       