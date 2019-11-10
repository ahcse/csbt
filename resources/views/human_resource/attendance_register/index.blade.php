@extends('layouts.app')
@section('content')
    <div id="content" class="content">
        <ol class="breadcrumb float-xl-right">
            <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
            <li class="breadcrumb-item">Human Resource</li>
            <li class="breadcrumb-item active">Attendance Register</li>
        </ol>
        <h1 class="page-header">Attendance Register <small><a href="#form" data-toggle="modal"
                                                              class="btn btn-default btn-sm m-r-5 m-b-5 btn-danger"><i
                        class="fa fa-x fa-plus"></i> Add New</a></small></h1>
        <div class="row">
            <div class="col-xl-12">
                <div class="panel panel-inverse">
                    <div class="panel-heading">
                        <h4 class="panel-title">Attendance Register List</h4>
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
                        <table class="table table-striped table-bordered table-td-valign-middle data-table-responsive">
                            <thead>
                            <tr>
                                <th width="1%">SL</th>
                                <th class="text-nowrap">Employee ID</th>
                                <th class="text-nowrap">Employee Name</th>
                                <th class="text-nowrap">Designation</th>
                                <th class="text-nowrap">Department</th>
                                <th class="text-nowrap">In</th>
                                <th class="text-nowrap">Out</th>
                                <th class="text-nowrap">Diff</th>
                                <th class="text-nowrap">Remarks</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td><a href="/attendance-register/show">20191022001</a></td>
                                <td><a href="/attendance-register/show">Alamgir Hossen</a></td>
                                <td>Software Engineer</td>
                                <td>Design & Engineering</td>
                                <td>10:30</td>
                                <td>6:00</td>
                                <td>0:30</td>
                                <td>Sick</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><a href="/attendance-register/show">20191022001</a></td>
                                <td><a href="/attendance-register/show">Alamgir Hossen</a></td>
                                <td>Software Engineer</td>
                                <td>Design & Engineering</td>
                                <td>10:30</td>
                                <td>6:00</td>
                                <td>0:30</td>
                                <td>Sick</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><a href="/attendance-register/show">20191022001</a></td>
                                <td><a href="/attendance-register/show">Alamgir Hossen</a></td>
                                <td>Software Engineer</td>
                                <td>Design & Engineering</td>
                                <td>10:30</td>
                                <td>6:00</td>
                                <td>0:30</td>
                                <td>Sick</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td><a href="/attendance-register/show">20191022001</a></td>
                                <td><a href="/attendance-register/show">Alamgir Hossen</a></td>
                                <td>Software Engineer</td>
                                <td>Design & Engineering</td>
                                <td>10:30</td>
                                <td>6:00</td>
                                <td>0:30</td>
                                <td>Sick</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td><a href="/attendance-register/show">20191022001</a></td>
                                <td><a href="/attendance-register/show">Alamgir Hossen</a></td>
                                <td>Software Engineer</td>
                                <td>Design & Engineering</td>
                                <td>10:30</td>
                                <td>6:00</td>
                                <td>0:30</td>
                                <td>Sick</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td><a href="/attendance-register/show">20191022001</a></td>
                                <td><a href="/attendance-register/show">Alamgir Hossen</a></td>
                                <td>Software Engineer</td>
                                <td>Design & Engineering</td>
                                <td>10:30</td>
                                <td>6:00</td>
                                <td>0:30</td>
                                <td>Sick</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td><a href="/attendance-register/show">20191022001</a></td>
                                <td><a href="/attendance-register/show">Alamgir Hossen</a></td>
                                <td>Software Engineer</td>
                                <td>Design & Engineering</td>
                                <td>10:30</td>
                                <td>6:00</td>
                                <td>0:30</td>
                                <td>Sick</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td><a href="/attendance-register/show">20191022001</a></td>
                                <td><a href="/attendance-register/show">Alamgir Hossen</a></td>
                                <td>Software Engineer</td>
                                <td>Design & Engineering</td>
                                <td>10:30</td>
                                <td>6:00</td>
                                <td>0:30</td>
                                <td>Sick</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td><a href="/attendance-register/show">20191022001</a></td>
                                <td><a href="/attendance-register/show">Alamgir Hossen</a></td>
                                <td>Software Engineer</td>
                                <td>Design & Engineering</td>
                                <td>10:30</td>
                                <td>6:00</td>
                                <td>0:30</td>
                                <td>Sick</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td><a href="/attendance-register/show">20191022001</a></td>
                                <td><a href="/attendance-register/show">Alamgir Hossen</a></td>
                                <td>Software Engineer</td>
                                <td>Design & Engineering</td>
                                <td>10:30</td>
                                <td>6:00</td>
                                <td>0:30</td>
                                <td>Sick</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('human_resource.attendance_register.sidebar');
    @include('human_resource.attendance_register.form');
@endsection
