<div class="modal fade" id="form_payment_schedule">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Payment Schedule Edit Form</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" data-parsley-validate="true" name="demo-form">
                    <div class="form-group row m-b-15">
                        <label class="col-md-4 col-sm-4 col-form-label" for="%">%</label>
                        <div class="col-md-8 col-sm-8">
                            <input class="form-control" type="text" name="%"  placeholder="Enter %" data-parsley-required="true" data-parsley-range="[2,100]"/>
                        </div>
                    </div>
                    <div class="form-group row m-b-15">
                        <label class="col-md-4 col-sm-4 col-form-label"for="particulars">Particulars</label>
                        <div class="col-md-8 col-sm-8">
                            <input class="form-control" type="text" name="particulars"  placeholder="Enter Particulars" data-parsley-required="true" data-parsley-range="[2,100]"/>
                        </div>
                    </div>
                    <div class="form-group row m-b-15">
                        <label class="col-md-4 col-sm-4 col-form-label" for="amount">Amount</label>
                        <div class="col-md-8 col-sm-8">
                            <input class="form-control" type="text" name="amount"  placeholder="Enter Amount" data-parsley-required="true" data-parsley-range="[2,100]"/>
                        </div>
                    </div>
                    <div class="form-group row m-b-15">
                        <label class="col-md-4 col-sm-4 col-form-label" for="remarks">Remarks </label>
                        <div class="col-md-8 col-sm-8">
                            <textarea class="form-control" name="remarks" rows="1"  placeholder="Enter Remarks" ></textarea>
                        </div>
                    </div>
                    <div class="form-group row m-b-0">
                        <label class="col-md-4 col-sm-4 col-form-label">&nbsp;</label>
                        <div class="col-md-2 col-sm-2">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <a href="javascript:;" class="btn btn-white" data-dismiss="modal">Close</a>
            </div>
        </div>
    </div>
</div>
