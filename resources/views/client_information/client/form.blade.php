<div class="row">
   <div class="col-xl-12">
      <div class="panel panel-inverse">
         <div class="panel-heading">
            <h4 class="panel-title">
            Client {{$model?'Edit': 'Creation'}} Form</h4>
            <div class="panel-heading-btn">
               <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger close"
                  data-dismiss="modal"><i class="fa fa-times"></i>
               </a>
            </div>
         </div>
         <div class="panel-body">
            <form class="form-horizontal form-add" data-parsley-validate="true" name="demo-form" action="/clients/store" method="POST">
               @csrf
               <input type="hidden" value="{{$model?$model->id: ''}}" name="id"/>

               <div class="form-group row m-b-15">
                  <label class="col-md-4 col-sm-4 col-form-label" for="name">Client Name </label>
                  <div class="col-md-8 col-sm-8">
                     <input class="form-control" type="text" name="name"
                        placeholder="Enter Client Name"
                        data-parsley-required="true" value="{{$model?$model->name: ''}}" />
                  </div>
               </div>
               <div class="form-group row m-b-15">
                  <label class="col-md-4 col-sm-4 col-form-label" for="responsible">Responsible
                  Person </label>
                  <div class="col-md-8 col-sm-8">
                     <input class="form-control" type="text" name="responsible"
                        placeholder="Enter Responsible Person"
                        data-parsley-required="true" value="{{$model?$model->responsible: ''}}"/>
                  </div>
               </div>
               <div class="form-group row m-b-15">
                  <label class="col-md-4 col-sm-4 col-form-label" for="email">Email Address </label>
                  <div class="col-md-8 col-sm-8">
                     <input class="form-control" type="email" name="email" data-parsley-type="email"
                        placeholder="Enter Email Address" data-parsley-required="true" value="{{$model?$model->email: ''}}"/>
                  </div>
               </div>
               <div class="form-group row m-b-15">
                  <label class="col-md-4 col-sm-4 col-form-label" for="mobile">Mobile </label>
                  <div class="col-md-8 col-sm-8">
                     <input class="form-control" type="tel" name="mobile"
                        placeholder="Enter mobile no"
                        data-parsley-required="true" value="{{$model?$model->mobile: ''}}"/>
                  </div>
               </div>
               <div class="form-group row m-b-15">
                  <label class="col-md-4 col-sm-4 col-form-label" for="phone">Phone </label>
                  <div class="col-md-8 col-sm-8">
                     <input class="form-control" type="tel" name="phone"
                        placeholder="Enter phone no"
                        data-parsley-required="true" value="{{$model?$model->phone: ''}}"/>
                  </div>
               </div>
               <div class="form-group row m-b-15">
                  <label class="col-md-4 col-sm-4 col-form-label" for="fax">Fax</label>
                  <div class="col-md-8 col-sm-8">
                     <input class="form-control" type="text" name="fax"
                        placeholder="Enter Fax" data-parsley-required="true" value="{{$model?$model->fax: ''}}"/>
                  </div>
               </div>
               <div class="form-group row m-b-15">
                  <label class="col-md-4 col-sm-4 col-form-label" for="office_address">Office Address </label>
                  <div class="col-md-8 col-sm-8">
                     <textarea class="form-control" name="office_address" rows="1"
                        placeholder="Enter Office Address"
                        data-parsley-required="true">{{$model?$model->office_address: ''}}</textarea>
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