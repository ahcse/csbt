@extends('layouts.app')
@section('content')
    <div id="content" class="content">
        <ol class="breadcrumb float-xl-right">
            <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
            <li class="breadcrumb-item">Human Resource</li>
            <li class="breadcrumb-item">Recruitment Process</li>
            <li class="breadcrumb-item active">Alamgir Hossen</li>
        </ol>
        <h1 class="page-header">Alamgir Hossen</h1>
        <div class="row">
            <div class="col-xl-12">
                <div class="panel panel-inverse panel-with-tabs" data-sortable-id="ui-unlimited-tabs-1">
                    <div class="panel-heading p-0">
                        <div class="tab-overflow">
                            <ul class="nav nav-tabs nav-tabs-inverse">
                                <li class="nav-item prev-button"><a href="javascript:;" data-click="prev-tab"
                                                                    class="nav-link text-primary"><i
                                            class="fa fa-arrow-left"></i></a></li>
                                <li class="nav-item"><a href="#nav-tab-1" data-toggle="tab" class="nav-link active">Interview
                                        Details</a></li>
                                <li class="nav-item"><a href="#nav-tab-2" data-toggle="tab" class="nav-link">Appointment
                                        Details</a></li>
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
                            <form class="form-horizontal" data-parsley-validate="true" name="demo-form">
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="interview_date">Interview
                                        Date</label>
                                    <div class="col-md-3 col-sm-3">
                                        <input class="form-control" type="date" name="interview_date"
                                               placeholder="Ex: 30/12/2019" data-parsley-required="true"/>
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="asset_name">Candidate
                                        Status</label>
                                    <div class="col-md-3 col-sm-3">
                                        <select class="form-control selectpicker" name="candidate_status"
                                                data-live-search="true" data-size="10" data-style="btn-white"
                                                data-parsley-required="true">
                                            <option value="">Please Select</option>
                                            <option value="1">Fresher</option>
                                            <option value="2">Experince Above 1 years</option>
                                            <option value="2">Experince Above 2 years</option>
                                            <option value="2">Experince Above 3 years</option>
                                            <option value="2">Experince Above 4 years</option>
                                            <option value="2">Experince Above 5 years</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="length">Length(Years)</label>
                                    <div class="col-md-3 col-sm-3">
                                        <input class="form-control" type="text" name="length" placeholder="Ex: 2"
                                               data-parsley-required="true"/>
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="interview_results">Interview
                                        Results</label>
                                    <div class="col-md-3 col-sm-3">
                                        <select class="form-control selectpicker" name="interview_results"
                                                data-live-search="true" data-size="10" data-style="btn-white"
                                                data-parsley-required="true">
                                            <option value="">Please Select</option>
                                            <option value="1">Fresher</option>
                                            <option value="2">Good</option>
                                            <option value="3">Excelent</option>
                                            <option value="4">Very Good</option>
                                            <option value="5">Average</option>
                                            <option value="6">Below Average</option>
                                            <option value="7">Satisfactory</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="interviewed_by">Interviewed
                                        By</label>
                                    <div class="col-md-3 col-sm-3">
                                        <select class="form-control selectpicker" name="interviewed_by"
                                                data-live-search="true" data-size="10"
                                                data-style="btn-white"
                                                data-parsley-required="true">
                                            <option value="">Please Select</option>
                                            <option value="1">Alamgir Hossen</option>
                                            <option value="2">Zahid Hasan</option>
                                            <option value="3">Enamul Kabir</option>
                                            <option value="4">Ariful Islam</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="reference">Reference
                                        Details</label>
                                    <div class="col-md-3 col-sm-3">
                                        <textarea class="form-control" name="reference" rows="2" placeholder="Ex: Text"
                                                  data-parsley-required="true"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="Present Gross Salary">Present
                                        Gross Salary</label>
                                    <div class="col-md-3 col-sm-3">
                                        <input class="form-control" type="text" name="present_salary"
                                               placeholder="Ex: 5,000.00" data-parsley-required="true"/>
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="Expected Gross Salary">Expected
                                        Gross Salary</label>
                                    <div class="col-md-3 col-sm-3">
                                        <input class="form-control" type="text" name="expected_salary"
                                               placeholder="Ex: 5,000.00" data-parsley-required="true"/>
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="Ready to Join After (Days)">Ready
                                        to Join After (Days)</label>
                                    <div class="col-md-3 col-sm-3">
                                        <input class="form-control" type="text" name="possible_join_date"
                                               placeholder="Ex: 20" data-parsley-required="true"/>
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="CV Attachment">CV
                                        Attachment</label>
                                    <div class="col-md-3 col-sm-3">
                                        <input class="form-control" type="file" name="attachment"
                                               data-parsley-required="true"/>
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="Total Value">Remarks </label>
                                    <div class="col-md-3 col-sm-3">
                                        <textarea class="form-control" name="remarks" rows="2" placeholder="Ex: Text"
                                                  data-parsley-required="true"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row m-b-0">
                                    <label class="col-md-2 col-sm-2 col-form-label">&nbsp;</label>
                                    <div class="col-md-3 col-sm-3">
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="nav-tab-2">
                            <form class="form-horizontal" data-parsley-validate="true" name="demo-form">
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="Joining Date">Joining
                                        Date</label>
                                    <div class="col-md-3 col-sm-3">
                                        <input class="form-control" type="date" name="joining_date"
                                               placeholder="Ex: 12/30/2019" data-parsley-required="true"/>
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="Department Name">Department Name</label>
                                    <div class="col-md-3 col-sm-3">
                                        <select class="form-control selectpicker" name="department"
                                                data-live-search="true" data-size="10"
                                                data-style="btn-white"
                                                data-parsley-required="true">
                                            <option value="">Please Select</option>
                                            <option value="1">Design & Engineering</option>
                                            <option value="2">Purchase</option>
                                            <option value="3">Accounting</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label"
                                           for="short_name">Designation </label>
                                    <div class="col-md-3 col-sm-3">
                                        <select class="form-control selectpicker" name="designation"
                                                data-live-search="true" data-size="10"
                                                data-style="btn-white"
                                                data-parsley-required="true">
                                            <option value="">Please Select</option>
                                            <option value="1">Junior Office</option>
                                            <option value="2">Office</option>
                                            <option value="3">Sr. Officer</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="Supervisor">Supervisor </label>
                                    <div class="col-md-3 col-sm-3">
                                        <select class="form-control selectpicker" name="supervisor"
                                                data-live-search="true" data-size="10"
                                                data-style="btn-white"
                                                data-parsley-required="true">
                                            <option value="">Please Select</option>
                                            <option value="1">Alamgir Hossen</option>
                                            <option value="2">Zahid Hasan</option>
                                            <option value="3">Enamul Kabir</option>
                                            <option value="4">Ariful Islam</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="Unit Name">Unit Name</label>
                                    <div class="col-md-3 col-sm-3">
                                        <input class="form-control" type="text" name="unit_name"
                                               placeholder="Ex: A Unit" data-parsley-required="true"/>
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="Section Name">Section
                                        Name</label>
                                    <div class="col-md-3 col-sm-3">
                                        <input class="form-control" type="text" name="section_name"
                                               placeholder="Ex: Morning" data-parsley-required="true"/>
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="Office Phone">Office
                                        Phone</label>
                                    <div class="col-md-3 col-sm-3">
                                        <input class="form-control" type="number" name="office_phone"
                                               placeholder="Ex: 01918059932" data-parsley-required="true"/>
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="Office Email">Office
                                        Email</label>
                                    <div class="col-md-3 col-sm-3">
                                        <input class="form-control" type="email" name="office_email"
                                               placeholder="Ex: text@gmail.com" data-parsley-required="true"/>
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="starting_salary">Starting Gross
                                        Salary</label>
                                    <div class="col-md-3 col-sm-3">
                                        <input class="form-control" type="number" name="starting_salary"
                                               placeholder="Ex: 10,000.00" data-parsley-required="true"/>
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="Length of Services">Length of
                                        Services(Year)</label>
                                    <div class="col-md-3 col-sm-3">
                                        <input class="form-control" type="number" name="length_services"
                                               placeholder="Ex: 2" data-parsley-required="true"/>
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="Total Value">Provisional
                                        Period(Month)</label>
                                    <div class="col-md-3 col-sm-3">
                                        <input class="form-control" type="number" name="provisional_period"
                                               placeholder="Ex: 2" data-parsley-required="true"/>
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="Remarks">Job Confirmation
                                        Date</label>
                                    <div class="col-md-3 col-sm-3">
                                        <input class="form-control" type="date" name="job_confirmation"
                                               placeholder="Ex: 12/30/2019"
                                               data-parsley-required="true"/>
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="Job Grade">Job Grade</label>
                                    <div class="col-md-3 col-sm-3">
                                        <input class="form-control" type="text" name="job_grade"
                                               placeholder="Ex: A"
                                               data-parsley-required="true"/>
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="Next Job Grade">Next Job Grade</label>
                                    <div class="col-md-3 col-sm-3">
                                        <input class="form-control" type="text" name="next_job_grade"
                                               placeholder="Ex: Text"
                                               data-parsley-required="true"/>
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="Performance Evaluation Period">Performance Evaluation
                                        Period(Year)</label>
                                    <div class="col-md-3 col-sm-3">
                                        <input class="form-control" type="text" name="evaluation_period" placeholder="Ex: 1" data-parsley-required="true"/>
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="Job Description">Job
                                        Description</label>
                                    <div class="col-md-3 col-sm-3">
                                        <input class="form-control" type="text" name="description_job"
                                               placeholder="Ex: Text"
                                               data-parsley-required="true"/>
                                    </div>
                                </div>

                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="Remarks">Committee Member</label>
                                    <div class="col-md-3 col-sm-3">
                                        <input class="form-control" type="text" name="committee_member" placeholder="Ex: Text" data-parsley-required="true"/>
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="Remarks">Remarks </label>
                                    <div class="col-md-3 col-sm-3">
                                        <textarea class="form-control" name="remarks" rows="2" placeholder="Ex: Text" data-parsley-required="true"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row m-b-0">
                                    <label class="col-md-2 col-sm-2 col-form-label">&nbsp;</label>
                                    <div class="col-md-3 col-sm-3">
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('partials.sidebar');
    @include('partials.delete');
@endsection
