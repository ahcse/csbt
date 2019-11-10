@extends('layouts.app')
@section('content')
    <div id="content" class="content">
        <ol class="breadcrumb float-xl-right">
            <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
            <li class="breadcrumb-item">Client Information</li>
            <li class="breadcrumb-item active">Alamgir Hossen</li>
        </ol>
        <h1 class="page-header">Alamgir Hossen <small>20191123001</small></h1>
        <div class="row">
            <div class="col-xl-6">
                <div class="panel panel-inverse">
                    <div class="panel-heading">
                        <h4 class="panel-title">Day Wise Attendance</h4>
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
                                <th width="1%">SL</th>
                                <th class="text-nowrap">Date</th>
                                <th class="text-nowrap">In</th>
                                <th class="text-nowrap">Out</th>
                                <th class="text-nowrap">Diff.</th>
                                <th class="text-nowrap">OK</th>
                                <th class="text-nowrap">Remarks</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>01/11/2019</td>
                                <td>10:30</td>
                                <td>6:00</td>
                                <td>0:30</td>
                                <td><i class="fa fa-check"></i></td>
                                <td>Sick</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>02/11/2019</td>
                                <td>10:30</td>
                                <td>6:00</td>
                                <td>0:30</td>
                                <td><i class="fa fa-times"></i></td>
                                <td>Sick</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>03/11/2019</td>
                                <td>10:30</td>
                                <td>6:00</td>
                                <td>0:30</td>
                                <td><i class="fa fa-check"></i></td>
                                <td>Sick</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>04/11/2019</td>
                                <td>10:30</td>
                                <td>6:00</td>
                                <td>0:30</td>
                                <td><i class="fa fa-times"></i></td>
                                <td>Sick</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>05/11/2019</td>
                                <td>10:30</td>
                                <td>6:00</td>
                                <td>0:30</td>
                                <td><i class="fa fa-check"></i></td>
                                <td>Sick</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>06/11/2019</td>
                                <td>10:30</td>
                                <td>6:00</td>
                                <td>0:30</td>
                                <td><i class="fa fa-times"></i></td>
                                <td>Sick</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>07/11/2019</td>
                                <td>10:30</td>
                                <td>6:00</td>
                                <td>0:30</td>
                                <td><i class="fa fa-check"></i></td>
                                <td>Sick</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>08/11/2019</td>
                                <td>10:30</td>
                                <td>6:00</td>
                                <td>0:30</td>
                                <td><i class="fa fa-times"></i></td>
                                <td>Sick</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>09/11/2019</td>
                                <td>10:30</td>
                                <td>6:00</td>
                                <td>0:30</td>
                                <td><i class="fa fa-check"></i></td>
                                <td>Sick</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>10/11/2019</td>
                                <td>10:30</td>
                                <td>6:00</td>
                                <td>0:30</td>
                                <td><i class="fa fa-times"></i></td>
                                <td>Sick</td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>11/11/2019</td>
                                <td>10:30</td>
                                <td>6:00</td>
                                <td>0:30</td>
                                <td><i class="fa fa-check"></i></td>
                                <td>Sick</td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>12/11/2019</td>
                                <td>10:30</td>
                                <td>6:00</td>
                                <td>0:30</td>
                                <td><i class="fa fa-times"></i></td>
                                <td>Sick</td>
                            </tr>
                            <tr>
                                <td>13</td>
                                <td>13/11/2019</td>
                                <td>10:30</td>
                                <td>6:00</td>
                                <td>0:30</td>
                                <td><i class="fa fa-check"></i></td>
                                <td>Sick</td>
                            </tr>
                            <tr>
                                <td>14</td>
                                <td>14/11/2019</td>
                                <td>10:30</td>
                                <td>6:00</td>
                                <td>0:30</td>
                                <td><i class="fa fa-times"></i></td>
                                <td>Sick</td>
                            </tr>
                            <tr>
                                <td>15</td>
                                <td>15/11/2019</td>
                                <td>10:30</td>
                                <td>6:00</td>
                                <td>0:30</td>
                                <td><i class="fa fa-check"></i></td>
                                <td>Sick</td>
                            </tr>
                            <tr>
                                <td>16</td>
                                <td>16/11/2019</td>
                                <td>10:30</td>
                                <td>6:00</td>
                                <td>0:30</td>
                                <td><i class="fa fa-times"></i></td>
                                <td>Sick</td>
                            </tr>
                            <tr>
                                <td>17</td>
                                <td>17/11/2019</td>
                                <td>10:30</td>
                                <td>6:00</td>
                                <td>0:30</td>
                                <td><i class="fa fa-check"></i></td>
                                <td>Sick</td>
                            </tr>
                            <tr>
                                <td>18</td>
                                <td>18/11/2019</td>
                                <td>10:30</td>
                                <td>6:00</td>
                                <td>0:30</td>
                                <td><i class="fa fa-times"></i></td>
                                <td>Sick</td>
                            </tr>
                            <tr>
                                <td>19</td>
                                <td>19/11/2019</td>
                                <td>10:30</td>
                                <td>6:00</td>
                                <td>0:30</td>
                                <td><i class="fa fa-check"></i></td>
                                <td>Sick</td>
                            </tr>
                            <tr>
                                <td>20</td>
                                <td>20/11/2019</td>
                                <td>10:30</td>
                                <td>6:00</td>
                                <td>0:30</td>
                                <td><i class="fa fa-times"></i></td>
                                <td>Sick</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><strong>25</strong></td>
                                <td></td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('human_resource.attendance_register.sidebar');
@endsection

