<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>CSBT | Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link href="{{ asset('css/fontawesome-all.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/default/app.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/bootstrap-select.min.css') }}" rel="stylesheet"/>

    <style>
        .table td, .table th{
            padding: 10px 10px;
        }
        .slide_panel{
            padding:0;
            margin:0;
        }
        .slide_panel li{
            list-style-type: none;
            border-bottom:1px dashed #aaa;
            padding-bottom:6px;
            padding-top:6px;
        }
        .slide_panel li:last-child{
            border-bottom:0;
        }
        .slide_panel li strong{
            font-size:13px;
            color:#000;
            margin-bottom:5px;
        }
        .slide-title{
            border-top:1px solid #000;
            border-bottom:1px solid #000;
            padding:8px 10px;
            color:#fff;
            background:#222;
            font-weight:bold;
            font-size:14px;
        }
        .val {
            color: red;
        }
        label {
            color: #242a30;
            font-weight: 600;
        }
        .card-header{
            padding: 10px 15px;
        }
        .accordion>.card .card-header{
            color: white;
            font-weight: bold;
        }
        .accordion>.card{
            overflow: auto;
        }
        body table.dataTable{
            width: 100% !important;
        }
        .accordion>.card .card-header{
            cursor: pointer;
        }
    </style>
    @yield('css')
</head>
<body>
<div id="page-loader" class="fade show"><span class="spinner"></span></div>
<div id="page-container" class="fade in page-sidebar-fixed page-header-fixed">
    <div id="header" class="header navbar-default">
        <div class="navbar-header">
            <a href="/dashboard" class="navbar-brand"><span class="navbar-logo"></span> <b>Confidence Steel</b> &nbsp;  Admin</a>
            <button type="button" class="navbar-toggle" data-click="sidebar-toggled">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <ul class="navbar-nav navbar-right">
            <li class="navbar-form">
                <form action="" method="POST" name="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter keyword" />
                        <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                    </div>
                </form>
            </li>
            <li class="dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle f-s-14">
                    <i class="fa fa-bell"></i>
                    <span class="label">5</span>
                </a>
                <div class="dropdown-menu media-list dropdown-menu-right">
                    <div class="dropdown-header">NOTIFICATIONS (5)</div>
                    <a href="javascript:;" class="dropdown-item media">
                        <div class="media-left">
                            <i class="fa fa-bug media-object bg-silver-darker"></i>
                        </div>
                        <div class="media-body">
                            <h6 class="media-heading">Server Error Reports <i class="fa fa-exclamation-circle text-danger"></i></h6>
                            <div class="text-muted f-s-10">3 minutes ago</div>
                        </div>
                    </a>
                    <a href="javascript:;" class="dropdown-item media">
                        <div class="media-left">
                            <img src="../img/user/user-1.jpg" class="media-object" alt="" />
                            <i class="fab fa-facebook-messenger text-blue media-object-icon"></i>
                        </div>
                        <div class="media-body">
                            <h6 class="media-heading">John Smith</h6>
                            <p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
                            <div class="text-muted f-s-10">25 minutes ago</div>
                        </div>
                    </a>
                    <a href="javascript:;" class="dropdown-item media">
                        <div class="media-left">
                            <img src="../img/user/user-2.jpg" class="media-object" alt="" />
                            <i class="fab fa-facebook-messenger text-blue media-object-icon"></i>
                        </div>
                        <div class="media-body">
                            <h6 class="media-heading">Olivia</h6>
                            <p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
                            <div class="text-muted f-s-10">35 minutes ago</div>
                        </div>
                    </a>
                    <a href="javascript:;" class="dropdown-item media">
                        <div class="media-left">
                            <i class="fa fa-plus media-object bg-silver-darker"></i>
                        </div>
                        <div class="media-body">
                            <h6 class="media-heading"> New User Registered</h6>
                            <div class="text-muted f-s-10">1 hour ago</div>
                        </div>
                    </a>
                    <a href="javascript:;" class="dropdown-item media">
                        <div class="media-left">
                            <i class="fa fa-envelope media-object bg-silver-darker"></i>
                            <i class="fab fa-google text-warning media-object-icon f-s-14"></i>
                        </div>
                        <div class="media-body">
                            <h6 class="media-heading"> New Email From John</h6>
                            <div class="text-muted f-s-10">2 hour ago</div>
                        </div>
                    </a>
                    <div class="dropdown-footer text-center">
                        <a href="javascript:;">View more</a>
                    </div>
                </div>
            </li>
            <li class="dropdown navbar-user"> <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="{{ asset('img/user/user-13.jpg') }}" alt="" /> <span class="d-none d-md-inline">{{Auth::user()->name}}</span> <b class="caret"></b> </a>
                <div class="dropdown-menu dropdown-menu-right"> <a href="javascript:;" class="dropdown-item">Edit Profile</a>
                    <a href="javascript:;" class="dropdown-item"><span class="badge badge-danger pull-right">2</span> Inbox</a>
                    <a href="javascript:;" class="dropdown-item">Calendar</a>

                    <a href="javascript:;" class="dropdown-item">Setting</a>
                    <div class="dropdown-divider"></div>
                    <a href="/logout" class="dropdown-item">Log Out</a> </div>
            </li>
        </ul>
    </div>
