@extends('layouts.app')
@section('content')
    <div id="content" class="content">
        <ol class="breadcrumb float-xl-right">
            <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
            <li class="breadcrumb-item">Client Information</li>
            <li class="breadcrumb-item active">Great Wall Ceramic Industries Ltd</li>
        </ol>
        <h1 class="page-header">Great Wall Ceramic Industries Ltd</h1>
        <div class="row">
            <div class="col-xl-12">
                <div class="panel panel-inverse panel-with-tabs" data-sortable-id="ui-unlimited-tabs-1">
                    <div class="panel-heading p-0">
                        <div class="tab-overflow">
                            <ul class="nav nav-tabs nav-tabs-inverse">
                                <li class="nav-item prev-button"><a href="javascript:;" data-click="prev-tab" class="nav-link text-primary"><i class="fa fa-arrow-left"></i></a></li>
                                <li class="nav-item"><a href="#nav-tab-1" data-toggle="tab" class="nav-link active">Leave Chart</a></li>
                                <li class="nav-item"><a href="#nav-tab-2" data-toggle="tab" class="nav-link">Application Form</a></li>
                                <li class="nav-item next-button"><a href="javascript:;" data-click="next-tab" class="nav-link text-primary"><i class="fa fa-arrow-right"></i></a></li>
                            </ul>
                        </div>
                        <div class="panel-heading-btn mr-2 ml-2 d-flex">
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-secondary" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        </div>
                    </div>
                    <div class="panel-body tab-content">
                        <div class="tab-pane fade active show" id="nav-tab-1">
                            <h5 class="m-t-10">Leave Chart</h5>
                            <table class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th rowspan="2">SL</th>
                                    <th rowspan="2">Date</th>
                                    <th colspan="7">Leave Availed</th>
                                    <th colspan="2">This Time</th>
                                    <th colspan="7">Leave Balance</th>
                                    <th rowspan="2">Total<br>
                                        Leave<br>
                                        Balance</th>
                                    <th rowspan="2">Action</th>
                                </tr>
                                <tr>
                                    <th>A/L</th>
                                    <th>C/L</th>
                                    <th>M/L</th>
                                    <th>MT/L</th>
                                    <th>S/L</th>
                                    <th>SP/L</th>
                                    <th>L/W/P</th>
                                    <th>Period</th>
                                    <th>Days</th>
                                    <th>A/L</th>
                                    <th>C/L</th>
                                    <th>M/L</th>
                                    <th>MT/L</th>
                                    <th>S/L</th>
                                    <th>SP/L</th>
                                    <th>L/W/P</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>01.01.2015</td>
                                    <td>5</td>
                                    <td>5</td>
                                    <td>5</td>
                                    <td>5</td>
                                    <td>5</td>
                                    <td>5</td>
                                    <td>0</td>
                                    <td>-</td>
                                    <td>0</td>
                                    <td>5</td>
                                    <td>5</td>
                                    <td>5</td>
                                    <td>5</td>
                                    <td>5</td>
                                    <td>5</td>
                                    <td>0</td>
                                    <td>30</td>
                                    <td>
                                        <a href="#edit_erection_status" data-toggle="modal" class="label label-info"><i class="fa fa-edit"></i></a>
                                        <a href="#delete" data-toggle="modal"><span class="label label-danger"><i class="fa fa-times"></i></span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>01.02.2015</td>
                                    <td>3</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>01.02.2015 - 03.02.2015</td>
                                    <td>3</td>
                                    <td>2</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>27</td>
                                    <td>
                                        <a href="#edit_erection_status" data-toggle="modal" class="label label-info"><i class="fa fa-edit"></i></a>
                                        <a href="#delete" data-toggle="modal"><span class="label label-danger"><i class="fa fa-times"></i></span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>01.03.2015</td>
                                    <td>0</td>
                                    <td>3</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>01.03.2015 - 03.03.2015</td>
                                    <td>3</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>24</td>
                                    <td>
                                        <a href="#edit_erection_status" data-toggle="modal" class="label label-info"><i class="fa fa-edit"></i></a>
                                        <a href="#delete" data-toggle="modal"><span class="label label-danger"><i class="fa fa-times"></i></span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>01.04.2015</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>3</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>01.04.2015 - 04.02.2015</td>
                                    <td>3</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>21</td>
                                    <td>
                                        <a href="#edit_erection_status" data-toggle="modal" class="label label-info"><i class="fa fa-edit"></i></a>
                                        <a href="#delete" data-toggle="modal"><span class="label label-danger"><i class="fa fa-times"></i></span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>01.05.2015</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>3</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>01.05.2015 - 03.05.2015</td>
                                    <td>3</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>18</td>
                                    <td>
                                        <a href="#edit_erection_status" data-toggle="modal" class="label label-info"><i class="fa fa-edit"></i></a>
                                        <a href="#delete" data-toggle="modal"><span class="label label-danger"><i class="fa fa-times"></i></span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>01.06.2015</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>3</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>01.06.2015 - 03.06.2015</td>
                                    <td>3</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>15</td>
                                    <td>
                                        <a href="#edit_erection_status" data-toggle="modal" class="label label-info"><i class="fa fa-edit"></i></a>
                                        <a href="#delete" data-toggle="modal"><span class="label label-danger"><i class="fa fa-times"></i></span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>01.07.2015</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>3</td>
                                    <td>0</td>
                                    <td>01.07.2015 - 03.07.2015</td>
                                    <td>3</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>0</td>
                                    <td>12</td>
                                    <td>
                                        <a href="#edit_erection_status" data-toggle="modal" class="label label-info"><i class="fa fa-edit"></i></a>
                                        <a href="#delete" data-toggle="modal"><span class="label label-danger"><i class="fa fa-times"></i></span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>01.08.2015</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>3</td>
                                    <td>01.08.2015 - 08.02.2015</td>
                                    <td>3</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>09</td>
                                    <td>
                                        <a href="#edit_erection_status" data-toggle="modal" class="label label-info"><i class="fa fa-edit"></i></a>
                                        <a href="#delete" data-toggle="modal"><span class="label label-danger"><i class="fa fa-times"></i></span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>01.01.2016</td>
                                    <td>5</td>
                                    <td>5</td>
                                    <td>5</td>
                                    <td>5</td>
                                    <td>5</td>
                                    <td>5</td>
                                    <td>0</td>
                                    <td>01.02.2015 - 03.02.2015</td>
                                    <td>3</td>
                                    <td>5</td>
                                    <td>5</td>
                                    <td>5</td>
                                    <td>5</td>
                                    <td>5</td>
                                    <td>5</td>
                                    <td>0</td>
                                    <td>30</td>
                                    <td>
                                        <a href="#edit_erection_status" data-toggle="modal" class="label label-info"><i class="fa fa-edit"></i></a>
                                        <a href="#delete" data-toggle="modal"><span class="label label-danger"><i class="fa fa-times"></i></span></a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="nav-tab-2">
                            <h5 class="m-t-10">Application Form</h5>
                            Coming...
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('partials.leave_management');
@endsection

