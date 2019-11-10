<div class="row">
            <div class="col-xl-12">
                <div class="panel panel-inverse">
                    <div class="panel-heading">
                        <h4 class="panel-title">Primary Proposal 
                        {{$type == 'basic_building'?'Basic Building': 'Sheeting & Accessories'}} 
                       {{$model?'Edit': 'Creation'}} Form</h4>
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
                            
                            @if($model)
                            <input type="hidden" value="{{$model->type}}" name="type"/>
                            @else
                            <input type="hidden" value="{{$type}}" name="type"/>
                            @endif
                    <div class="form-group row m-b-15">
                        <label class="col-md-4 col-sm-4 col-form-label" for="Description">Description of Item </label>
                        <div class="col-md-8 col-sm-8">
                            <input class="form-control" type="text" name="description"  placeholder="Enter Description of Item" data-parsley-required="true" value="{{$model?$model->description: ''}}"/>
                        </div>
                    </div>
                    <div class="form-group row m-b-15">
                        <label class="col-md-4 col-sm-4 col-form-label" for="unit">Unit </label>
                        <div class="col-md-8 col-sm-8">

                            {!! Form::select('unit', $units, $model?$model->unit: '',
                                 ['class'=>'form-control selectpicker','required'=>'required',  'data-live-search'=>"true",
                                 'data-parsley-required' => "true", 'data-style' => 'btn-white'
                            ]) !!}

                        </div>
                    </div>
                    <div class="form-group row m-b-15">
                        <label class="col-md-4 col-sm-4 col-form-label" for="quantity">Quantity </label>
                        <div class="col-md-8 col-sm-8">
                            <input class="form-control" type="number" name="quantity"  placeholder="Enter Quantity" data-parsley-required="true" value="{{$model?$model->quantity: ''}}"/>
                        </div>
                    </div>
                    <div class="form-group row m-b-15">
                        <label class="col-md-4 col-sm-4 col-form-label" for="rate">Rate </label>
                        <div class="col-md-8 col-sm-8">
                            <input class="form-control" type="number" name="rate"  placeholder="Enter Rate" data-parsley-required="true" value="{{$model?$model->rate: ''}}"/>
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