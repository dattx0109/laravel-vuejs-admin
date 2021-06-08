
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Quản trị Samacom</title>
    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/font-awesome/css/font-awesome.css')}}" rel="stylesheet">

    <!-- Toastr style -->
    <link href="{{asset('frontend/css/plugins/toastr/toastr.min.css')}}" rel="stylesheet">

    <!-- Gritter -->
    <link href="{{asset('frontend/js/plugins/gritter/jquery.gritter.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/plugins/chosen/bootstrap-chosen.css')}}" rel="stylesheet">

    <link href="{{asset('frontend/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet">

    <!-- Sass main CSS -->
    <link href="{{asset('frontend/css/sass/dist/main.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/sass/dist/partials.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/plugins/summernote/summernote.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/plugins/summernote/summernote-bs3.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/plugins/datapicker/datepicker3.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/plugins/bootstrap-markdown/bootstrap-markdown.min.css')}}" rel="stylesheet">


</head>

<body>
<div id="app">
<div id="wrapper">
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear">
                                <span class="block m-t-xs">
                                    <strong class="font-bold">email</strong>
                                 </span>
                                <span class="text-muted text-xs block">
                                    Info <b class="caret"></b>
                                </span>
                            </span>
                        </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="profile.html">Profile</a></li>
                            <li><a href="contacts.html">Contacts</a></li>
                            <li><a href="mailbox.html">Mailbox</a></li>
                            <li class="divider"></li>
                            <li><a href="{{url('/login')}}">Logout</a></li>
                        </ul>
                    </div>
                </li>
                <li class="">
                    <a href="#">
                        <i class="fa fas fa-user"></i>
                        <span class="nav-label">Tài khoản</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level collapse in">
                        <li class="">
                            <a href="">
                                <i class="fa fas fa-sliders"></i><span class="nav-label">Vai trò</span>
                            </a>
                        </li>
                        <li class="">
                            <router-link to="/store-user">
                                <i class="fa fas fa-plus"></i>
                                <span class="nav-label">Thêm user</span>
                            </router-link>
                        </li>
                        <li class="">
                            <router-link to="/user">
                                <i class="fa fas fa-list"></i>
                                <span class="nav-label">DS user</span>
                            </router-link>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a href="javascript:void(0)">
                        <i class="fa fas fa-briefcase"></i>
                        <span class="nav-label">Công việc</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level collapse in">
                        <li class="">
                            <a href="">
                                <i class="fa fas fa-plus"></i>
                                <span class="nav-label">Thêm mới</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="{{url('/danh-sach-cong-viec')}}">
                                <i class="fa fas fa-list"></i>
                                <span class="nav-label">Danh sách</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a href="javascript:void(0)">
                        <i class="fa fas fa-building"></i>
                        <span class="nav-label">Công ty</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level collapse">
                        <li class="">
                            <a href="">
                                <i class="fa fas fa-plus"></i>
                                <span class="nav-label">Thêm mới</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="">
                                <i class="fa fas fa-list"></i>
                                <span class="nav-label">Danh sách</span>
                            </a>
                        </li>
                    </ul>
                </li>
{{--                <li class="{{(Request::routeIs('report-referral') || Request::routeIs('recruitment')) ? 'active' : ''}}">--}}
{{--                    <a href="javascript:void(0)">--}}
{{--                        <i class="fa fas fa-share-alt"></i>--}}
{{--                        <span class="nav-label">Quản trị referral</span>--}}
{{--                        <span class="fa arrow"></span>--}}
{{--                    </a>--}}
{{--                    <ul class="nav nav-second-level collapse {{ Request::routeIs('report-referral') ? 'in' : '' }} {{ Request::routeIs('recruitment') ? 'in' : '' }}">--}}
{{--                        <li class="{{ Request::routeIs('report-referral') ? 'active' : '' }}">--}}
{{--                            <a href="{{url('/report-referral')}}">--}}
{{--                                <i class="fa fas fa-plus"></i>--}}
{{--                                <span class="nav-label">Báo cáo referral</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="{{ Request::routeIs('recruitment') ? 'active' : '' }}">--}}
{{--                            <a href="{{url('/recruitment')}}">--}}
{{--                                <i class="fa fas fa-user"></i>--}}
{{--                                <span class="nav-label">Tạo nhân sự tuyển dụng</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="{{( Request::routeIs('listEmployer') ? 'active' : '' )}}">--}}
{{--                    <a href="javascript:void(0)">--}}
{{--                        <i class="fa fas fa-user-secret"></i>--}}
{{--                        <span class="nav-label">Nhà Tuyển dụng</span>--}}
{{--                        <span class="fa arrow"></span>--}}
{{--                    </a>--}}
{{--                    <ul class="nav nav-second-level collapse--}}
{{--                    {{ Request::routeIs('listEmployer') ? 'in' : '' }}">--}}
{{--                        <li class="{{ Request::routeIs('listEmployer') ? 'active' : '' }}">--}}
{{--                            <a href="{{url('/listEmployer')}}">--}}
{{--                                <i class="fa fas fa-user"></i>--}}
{{--                                <span class="nav-label">Danh sách nhà tuyển dụng</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="">--}}
{{--                    <a href="javascript:void(0)">--}}
{{--                        <i class="fa fas fa-money"></i>--}}
{{--                        <span class="nav-label">Quản trị đặt hàng</span>--}}
{{--                        <span class="fa arrow"></span>--}}
{{--                    </a>--}}
{{--                    <ul class="nav nav-second-level collapse {{ Request::routeIs('list-employer-order') ? 'in' : '' }} {{ Request::routeIs('list-employer-approve') ? 'in' : '' }}{{ Request::routeIs('list-employer-buy-package') ? 'in' : '' }}{{ Request::routeIs('list-employer-landing-page') ? 'in' : '' }}">--}}
{{--                        <li class="{{ Request::routeIs('list-employer-landing-page') ? 'active' : '' }}">--}}
{{--                            <a href="{{url('/list-employer-landing-page')}}">--}}
{{--                                <i class="fa fa-phone-square"></i>--}}
{{--                                <span class="nav-label">Danh sách liên hệ</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="{{ Request::routeIs('list-employer-order') ? 'active' : '' }}">--}}
{{--                            <a href="{{url('/list-employer-order')}}">--}}
{{--                                <i class="fa fas fa-list-alt"></i>--}}
{{--                                <span class="nav-label">Danh sách gia hạn</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="{{ Request::routeIs('list-employer-approve') ? 'active' : '' }}">--}}
{{--                            <a href="{{url('/list-employer-approve')}}">--}}
{{--                                <i class="fa fas fa-gift"></i>--}}
{{--                                <span class="nav-label">Danh sách kích hoạt</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="{{ Request::routeIs('list-employer-buy-package') ? 'active' : '' }}">--}}
{{--                            <a href="{{url('/list-employer-buy-package')}}">--}}
{{--                                <i class="fa fas fa-check-square"></i>--}}
{{--                                <span class="nav-label">Danh sách sử dụng</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="">--}}
{{--                    <a href="javascript:void(0)">--}}
{{--                        <i class="fa fas fa-user"></i>--}}
{{--                        <span class="nav-label">Ứng viên</span>--}}
{{--                        <span class="fa arrow"></span>--}}
{{--                    </a>--}}
{{--                    <ul class="nav nav-second-level collapse">--}}
{{--                        <li class="">--}}
{{--                            <a href="{{route('filter-account')}}">--}}
{{--                                <i class="fa fas fa-plus"></i>--}}
{{--                                <span class="nav-label">Danh sách ứng viên</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        --}}{{--<li class="{{ Request::routeIs('recruitment') ? 'active' : '' }}">--}}
{{--                        --}}{{--<a href="{{url('/recruitment')}}">--}}
{{--                        --}}{{--<i class="fa fas fa-user"></i>--}}
{{--                        --}}{{--<span class="nav-label">Tạo nhân sự tuyển dụng</span>--}}
{{--                        --}}{{--</a>--}}
{{--                        --}}{{--</li>--}}
{{--                    </ul>--}}
{{--                </li>--}}

            </ul>
        </div>
    </nav>
    <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i>
                    </a>
                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li class="dropdown">
                        <ul class="dropdown-menu dropdown-messages">
                            <li>
                                <div class="dropdown-messages-box">
                                    <a href="profile.html" class="pull-left">
                                        <img alt="image" class="img-circle" src="img/a7.jpg">
                                    </a>
                                    <div class="media-body">
                                        <small class="pull-right">46h ago</small>
                                        <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>.
                                        <br>
                                        <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                    </div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="dropdown-messages-box">
                                    <a href="profile.html" class="pull-left">
                                        <img alt="image" class="img-circle" src="img/a4.jpg">
                                    </a>
                                    <div class="media-body ">
                                        <small class="pull-right text-navy">5h ago</small>
                                        <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica
                                            Smith</strong>. <br>
                                        <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                                    </div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="dropdown-messages-box">
                                    <a href="profile.html" class="pull-left">
                                        <img alt="image" class="img-circle" src="img/profile.jpg">
                                    </a>
                                    <div class="media-body ">
                                        <small class="pull-right">23h ago</small>
                                        <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                                        <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                                    </div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="text-center link-block">
                                    <a href="mailbox.html">
                                        <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <router-link to="/logout">
                            <i class="fa fa-sign-out"></i> Log out
                        </router-link>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="row  border-bottom dashboard-header">
            <router-view></router-view>
        </div>

    </div>
</div>
</div>
<!-- Mainly scripts -->
<script src="{{asset('frontend/js/jquery-3.1.1.min.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
<script src="{{asset('frontend/js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

{{--<!-- Custom and plugin javascript -->--}}
<script src="{{asset('frontend/js/inspinia.js')}}"></script>
{{--<script src="{{asset('frontend/js/plugins/pace/pace.min.js')}}"></script>--}}

<!-- jQuery UI -->
<script src="{{asset('frontend/js/plugins/jquery-ui/jquery-ui.min.js')}}"></script>

<!-- GITTER -->
<script src="{{asset('frontend/js/plugins/gritter/jquery.gritter.min.js')}}"></script>

<!-- Chartfrontend/js-->
<script src="{{asset('frontend/js/plugins/chart.js/Chart.min.js')}}"></script>

<!-- Toastr -->
<script src="{{asset('frontend/js/plugins/toastr/toastr.min.js')}}"></script>

<script src="{{asset('frontend/js/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js')}}"></script>
<script src="{{asset('frontend/js/plugins/chosen/chosen.jquery.js')}}"></script>

<!-- SUMMERNOTE -->
<script src="{{asset('frontend/js/plugins/summernote/summernote.min.js')}}"></script>
<script src="{{asset('frontend/js/plugins/auto-format-currency/simple.money.format.js')}}"></script>
<script src="{{asset('frontend/js/plugins/auto-format-currency/simple.money.format.js')}}"></script>
<script src="{{asset('frontend/js/plugins/datapicker/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>
<!-- Data picker -->
</body>
</html>
