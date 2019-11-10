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
                                <li class="nav-item prev-button"><a href="javascript:;" data-click="prev-tab"
                                                                    class="nav-link text-primary"><i
                                            class="fa fa-arrow-left"></i></a></li>
                                <li class="nav-item"><a href="#nav-tab-1" data-toggle="tab" class="nav-link active">Assessment</a>
                                </li>
                                <li class="nav-item"><a href="#nav-tab-2" data-toggle="tab" class="nav-link">Recommendation</a>
                                </li>
                                <li class="nav-item"><a href="#nav-tab-3" data-toggle="tab" class="nav-link">Performance
                                        History</a></li>
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
                                <table
                                    class="table table-striped table-bordered table-td-valign-middle data-table-responsive">
                                    <thead>
                                    <tr>
                                        <th rowspan="2">SL</th>
                                        <th rowspan="2">Items to be Rated</th>
                                        <th colspan="1">5</th>
                                        <th colspan="1">4</th>
                                        <th colspan="1">3</th>
                                        <th colspan="1">2</th>
                                        <th colspan="1">1</th>
                                        <th colspan="1">0</th>
                                    </tr>
                                    <tr>
                                        <th colspan="1">Excellent (95 and Above)</th>
                                        <th colspan="1">Very Good (85-94)</th>
                                        <th colspan="1">Good (75-84)</th>
                                        <th colspan="1">Satisfactory (65-74)</th>
                                        <th colspan="1">Average (55-64)</th>
                                        <th colspan="1">Below Average (Below 55)</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td class="text-left">Reliability, Commitment & Sense of Responsibility</td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td class="text-left">Professional Knowledge, Skill and Awarness of Company
                                            Policies & Procedure
                                        </td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td class="text-left">Competence, Ability to do & get things done; Leadership to
                                            train, Guide, Supervise & Utilize Manpower
                                        </td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td class="text-left">Initiative, Drive, Enthusiasm</td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td class="text-left">Quality & Quantity of work</td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td class="text-left">Marketing ability</td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td class="text-left">Learning ability, analytical thinking</td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td class="text-left">Presentation and outer personality</td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td class="text-left">Power of judgement, decision making, intelligence & mental
                                            alertness
                                        </td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td class="text-left">Interpersonal behavior, Team spirit, co-operation,
                                            flexibility
                                        </td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td class="text-left">Honesty & integrity, financial discipline</td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td class="text-left">Attendance, time consciousness, punctuality & discipline
                                        </td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td class="text-left">Managing capabilities including crisis management</td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>14</td>
                                        <td class="text-left">Creativity and innovative ideas</td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>15</td>
                                        <td class="text-left">Communication ability (Verbal & Written)</td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>16</td>
                                        <td class="text-left">Physical Fitness & Endurance</td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>17</td>
                                        <td class="text-left">Command & Control</td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>18</td>
                                        <td class="text-left">Concern of Subordinates</td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>19</td>
                                        <td class="text-left">Cost Saving Mentality</td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>20</td>
                                        <td class="text-left">Computer Knowledge</td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>21</td>
                                        <td class="text-left">Software Operating Knowledge</td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                    </tr>
                                    <tr>
                                        <td>22</td>
                                        <td class="text-left"> MIS & Reporting</td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="text-right"><strong>Total:</strong></td>
                                        <td colspan="1"><strong>20</strong></td>
                                        <td colspan="1"><strong>20</strong></td>
                                        <td colspan="1"><strong>20</strong></td>
                                        <td colspan="1"><strong>20</strong></td>
                                        <td colspan="1"><strong>20</strong></td>
                                        <td colspan="1"><strong>20</strong></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="text-right"><strong>Grand Total:</strong></td>
                                        <td colspan="6"><strong>89</strong></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="nav-tab-2">
                            <form class="form-horizontal" data-parsley-validate="true" name="demo-form">
                                <table
                                    class="table table-striped table-bordered table-td-valign-middle data-table-responsive">
                                    <thead>
                                    <tr>
                                        <th>Particulars</th>
                                        <th>Yes</th>
                                        <th>No</th>
                                        <th>Remarks</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="text-left">Increment</td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><textarea class="form-control" rows="2" cols="100"
                                                      placeholder="Text"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">Performance Bonus</td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><textarea class="form-control" rows="2" cols="100"
                                                      placeholder="Text"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">Long Service Award</td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><textarea class="form-control" rows="2" cols="100"
                                                      placeholder="Text"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">Promotion</td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><textarea class="form-control" rows="2" cols="100"
                                                      placeholder="Text"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">External Training Required</td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><textarea class="form-control" rows="2" cols="100"
                                                      placeholder="Text"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">In House Training Required</td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><textarea class="form-control" rows="2" cols="100"
                                                      placeholder="Text"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">Job Rotation</td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><textarea class="form-control" rows="2" cols="100"
                                                      placeholder="Text"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">On Job Training</td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><input type="radio" name="radio"></td>
                                        <td><textarea class="form-control" rows="2" cols="100"
                                                      placeholder="Text"></textarea></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="nav-tab-3">
                            <small><a href="#form" data-toggle="modal" class="btn btn-default btn-sm m-r-5 m-b-5 btn-danger"><i class="fa fa-x fa-plus"></i> Add New</a></small>
                            <table class="table table-striped table-bordered table-td-valign-middle data-table-responsive">
                                <thead>
                                <tr>
                                    <th width="1%">SL</th>
                                    <th class="text-nowrap">Item</th>
                                    <th class="text-nowrap">Plate Size</th>
                                    <th class="text-nowrap">Unit</th>
                                    <th class="text-nowrap">Weight</th>
                                    <th class="text-nowrap">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>4mm</td>
                                    <td>120m x 130mm</td>
                                    <td>kg</td>
                                    <td>150</td>
                                    <td>
                                        <a href="#form" class="label label-success" data-toggle="modal"><i
                                                class="fa fa-pencil-alt"></i></a>
                                        <a href="#delete" class="label label-danger" data-toggle="modal"><i
                                                class="fa fa-times"></i></a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('human_resource.performance_appraisal.form');
    @include('partials.sidebar');
    @include('partials.delete');
@endsection

