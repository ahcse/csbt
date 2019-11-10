<div class="row">
            <div class="col-xl-12">
                <div class="panel panel-inverse">
                    <div class="panel-heading">
                        <h4 class="panel-title">Primary Proposal Drawing {{$model?'Edit': 'Creation'}} Form</h4>
                        <div class="panel-heading-btn">
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger close"
                                data-dismiss="modal"><i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal form-add" data-parsley-validate="true" name="demo-form">
                            @csrf
                            <input type="hidden" value="{{$model?$model->id: ''}}" name="id"/>
                            <input type="hidden" value="{{$projectId}}" name="project_id"/>
                            <div class="form-group row m-b-15">
                                <label class="col-md-4 col-sm-4 col-form-label" for="description">Description</label>
                                <div class="col-md-8 col-sm-8">
                                        <textarea class="form-control" name="description" rows="1"
                                                  placeholder="Enter Description"
                                                  data-parsley-required="true">{{$model?$model->description:''}}</textarea>
                                </div>
                            </div>
                            <div class="form-group row m-b-15">
                                <label class="col-md-4 col-sm-4 col-form-label" for="uploaded_at">Upload Date</label>
                                <div class="col-md-8 col-sm-8">
                                    <input class="form-control" type="date" name="uploaded_at"
                                           placeholder="Enter Upload Date" data-parsley-required="true" value="{{$model?$model->uploaded_at:''}}"/>
                                </div>
                            </div>
                            <div class="form-group row m-b-15">
                                <label class="col-md-4 col-sm-4 col-form-label" for="remarks">Remarks </label>
                                <div class="col-md-8 col-sm-8">
                                        <textarea class="form-control" name="remarks" rows="1"
                                                  placeholder="Enter Remarks"
                                                  data-parsley-required="true">{{$model?$model->remarks:''}}</textarea>
                                </div>
                            </div>
                            <div class="form-group row m-b-15">
                                <label class="col-md-4 col-sm-4 col-form-label" for="attachment">

                                @if($model)
                                Edit Attachment (<a target="_blank" href="{{$model->attachment}}">{{$model->attachment}}</a>)
                                @else
                                New Attachment
                                @endif
                                </label>
                                <div class="col-md-8 col-sm-8">
                                    @if($model)
                                    <input type="file" name="attachment"/>
                                    @else
                                    <input type="file" name="attachment"  data-parsley-required="true"/>
                                    @endif
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
