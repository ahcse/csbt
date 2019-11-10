
@if (isset($project))
<div class="theme-panel theme-panel-lg"><a href="javascript:;" data-click="theme-panel-expand"
                                           class="theme-collapse-btn"><i class="fa fa-eye"></i></a>
    <div class="theme-panel-content">
        <div id="accordion" class="accordion">
            
            @if($project->client)
            <div class="card bg-black">
                <div class="card-header bg-dark pointer-cursor d-flex align-items-center" data-toggle="collapse"
                     data-target="#collapseOne">
                    <i class="fa fa-circle fa-fw text-white mr-2 f-s-8"></i> Client Information
                </div>
                <div id="collapseOne" class="collapse" data-parent="#accordion">
                    <div class="card-body bg-white">
                        <ul class="slide_panel">
                            <li><strong>Client Name</strong><br/> {{$project->client->name}}</li>
                            <li><strong>Responsible Person Name</strong><br/>
                                {{$project->client->responsible}}
                            </li>
                            <li><strong>Email Address</strong><br/>
                                {{$project->client->email}}
                            </li>
                            <li><strong>Mobile No.</strong><br/>
                                {{$project->client->mobile}}
                            </li>
                            <li><strong>Telephone No.</strong><br/>
                               {{$project->client->phone}}
                            </li>
                            <li><strong>Office Address</strong><br/>
                                {{$project->client->office_address}}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            @endif


            <div class="card bg-black">
                <div class="card-header bg-dark pointer-cursor d-flex align-items-center collapsed"
                     data-toggle="collapse" data-target="#collapseTwo"><i
                        class="fa fa-circle fa-fw text-white mr-2 f-s-8"></i> Project Information
                </div>
                <div id="collapseTwo" class="collapse" data-parent="#accordion">
                    <div class="card-body bg-white">
                        <ul class="slide_panel">
                            <li><strong>Project Name</strong><br/>
                                {{$project->name}}
                            </li>
                            <li><strong>Project Type</strong><br/>
                                {{$project->type}}
                            </li>
                            <li><strong>Quatation No.</strong><br/>
                                4
                                QT-654658
                            </li>
                            <li><strong>Project Location</strong><br/>
                                {{$project->address}}
                            </li>

                            <li><strong>Project Status</strong><br/>
                                {{$project->status}}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endif
