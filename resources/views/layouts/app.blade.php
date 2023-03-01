<!DOCTYPE html>
<html lang="en">

<head>

    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
     <![endif]-->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <!-- Favicon icon -->
    <link rel="shortcut icon" href="" type="image/x-icon">
    <link rel="icon" href="" type="image/x-icon">

    <title>Anbar</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">



    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">

    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet">

    <!-- themify -->
    <link rel="stylesheet" type="text/css" href="{{url('assets/icon/themify-icons/themify-icons.css')}}">

    <!-- iconfont -->
    <link rel="stylesheet" type="text/css" href="{{url('assets/icon/icofont/css/icofont.css')}}">

    <!-- simple line icon -->
    <link rel="stylesheet" type="text/css" href="{{url('assets/icon/simple-line-icons/css/simple-line-icons.css')}}">

    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{url('assets/plugins/bootstrap/css/bootstrap.min.css')}}">

    <!-- Chartlist chart css -->
    <link rel="stylesheet" href="{{url('assets/plugins/chartist/dist/chartist.css')}}" type="text/css" media="all">

    <!-- Weather css -->
    <link href="{{url('assets/css/svg-weather.css')}}" rel="stylesheet')}}">


    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/main.css')}}">

    <!-- Responsive.css-->
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/responsive.css')}}">
</head>

<body class="sidebar-mini fixed">
    <div class="loader-bg">
        <div class="loader-bar">
        </div>
    </div>
    <div class="wrapper">
        <!-- Navbar-->
        <header class="main-header-top hidden-print">
            <a href="{{route('brands')}}" class="logo"><img class="img-fluid able-logo" style="width:80px;"
                    src="storage/uploads/warehouse.jpeg"></a>
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#!" data-toggle="offcanvas" class="sidebar-toggle"></a>
                <ul class="top-nav lft-nav">

                    <li class="dropdown">
                        <a href="#!" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"
                            class="dropdown-toggle drop icon-circle drop-image">
                            <span>Dropdown </span><i class=" icofont icofont-simple-down"></i>
                        </a>
                        <ul class="dropdown-menu settings-menu">
                            <li><a href="#">List item 1</a></li>
                            <li><a href="#">List item 2</a></li>
                            <li><a href="#">List item 3</a></li>
                            <li><a href="#">List item 4</a></li>
                            <li><a href="#">List item 5</a></li>
                        </ul>
                    </li>
                    <li class="dropdown pc-rheader-submenu message-notification search-toggle">
                        <a href="#!" id="morphsearch-search" class="drop icon-circle txt-white">
                            <i class="ti-search"></i>
                        </a>
                    </li>
                </ul>
                <!-- Navbar Right Menu-->
                <div class="navbar-custom-menu f-right">


                    <ul class="top-nav">
                        <!--Notification Menu-->

                        <li class="dropdown notification-menu">
                            <a href="#!" data-toggle="dropdown" aria-expanded="false" class="dropdown-toggle">
                                <i class="icon-bell"></i>
                                <span class="badge badge-danger header-badge">9</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="not-head">You have <b class="text-primary">4</b> new notifications.</li>
                                <li class="bell-notification">
                                    <a href="javascript:;" class="media">
                                        <span class="media-left media-icon">
                                            <img class="img-circle" src="" alt="User Image">
                                        </span>
                                        <div class="media-body"><span class="block">Lisa sent you a mail</span><span
                                                class="text-muted block-time">2min ago</span></div>
                                    </a>
                                </li>
                                <li class="bell-notification">
                                    <a href="javascript:;" class="media">
                                        <span class="media-left media-icon">
                                            <img class="img-circle" src="" alt="User Image">
                                        </span>
                                        <div class="media-body"><span class="block">Server Not Working</span><span
                                                class="text-muted block-time">20min ago</span></div>
                                    </a>
                                </li>
                                <li class="bell-notification">
                                    <a href="javascript:;" class="media"><span class="media-left media-icon">
                                            <img class="img-circle" src="" alt="User Image">
                                        </span>
                                        <div class="media-body"><span class="block">Transaction xyz complete</span><span
                                                class="text-muted block-time">3 hours ago</span></div>
                                    </a>
                                </li>
                                <li class="not-footer">
                                    <a href="#!">See all notifications.</a>
                                </li>
                            </ul>
                        </li>
                        <!-- chat dropdown -->
                        <li class="pc-rheader-submenu ">
                            <a href="#!" class="drop icon-circle displayChatbox">
                                <i class="icon-bubbles"></i>
                                <span class="badge badge-danger header-badge">5</span>
                            </a>

                        </li>
                        <!-- window screen -->
                        <li class="pc-rheader-submenu">
                            <a href="#!" class="drop icon-circle" onclick="javascript:toggleFullScreen()">
                                <i class="icon-size-fullscreen"></i>
                            </a>

                        </li>
                        <!-- User Menu-->
                        <li class="dropdown">
                            <a href="" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"
                                class="dropdown-toggle drop icon-circle drop-image">
                                <span><img class="img-circle " src="{{Auth::user()->psekil}}" style="width:40px;"
                                        alt=""></span>
                                <span>{{Auth::user()->name}} <b></b> <i class=" icofont icofont-simple-down"></i></span>
                            </a>
                            <ul class="dropdown-menu settings-menu">
                                <li><a href="#!"><i class="icon-settings"></i> Settings</a></li>
                                <li><a href="{{route('profile')}}"><i class="icon-user"></i> Profile</a></li>
                                <li><a href="#"><i class="icon-envelope-open"></i> My Messages</a></li>
                                <li class="p-0">
                                    <div class="dropdown-divider m-0"></div>
                                </li>
                                <li><a href="#"><i class="icon-lock"></i> Lock Screen</a></li>
                                <li><a href="{{route('logout')}}"><i class="icon-logout"></i> Logout</a></li>

                            </ul>
                        </li>
                    </ul>

                    <!-- search -->
                    <div id="morphsearch" class="morphsearch">
                        <form class="morphsearch-form">

                            <input class="morphsearch-input" type="search" placeholder="Search...">

                            <button class="morphsearch-submit" type="submit">Search</button>

                        </form>
                        <div class="morphsearch-content">
                            <div class="dummy-column">
                                <h2>People</h2>
                                <a class="dummy-media-object" href="#!">
                                    <img class="round"
                                        src="http://0.gravatar.com/avatar/81b58502541f9445253f30497e53c280?s=50&amp;d=identicon&amp;r=G"
                                        alt="Sara Soueidan">
                                    <h3>Sara Soueidan</h3>
                                </a>

                                <a class="dummy-media-object" href="#!">
                                    <img class="round"
                                        src="http://1.gravatar.com/avatar/9bc7250110c667cd35c0826059b81b75?s=50&amp;d=identicon&amp;r=G"
                                        alt="Shaun Dona">
                                    <h3>Shaun Dona</h3>
                                </a>
                            </div>
                            <div class="dummy-column">
                                <h2>Popular</h2>
                                <a class="dummy-media-object" href="#!">
                                    <img src="" alt="PagePreloadingEffect">
                                    <h3>Page Preloading Effect</h3>
                                </a>

                                <a class="dummy-media-object" href="#!">
                                    <img src="" alt="DraggableDualViewSlideshow">
                                    <h3>Draggable Dual-View Slideshow</h3>
                                </a>
                            </div>
                            <div class="dummy-column">
                                <h2>Recent</h2>
                                <a class="dummy-media-object" href="#!">
                                    <img src="" alt="TooltipStylesInspiration">
                                    <h3>Tooltip Styles Inspiration</h3>
                                </a>
                                <a class="dummy-media-object" href="#!">
                                    <img src="" alt="NotificationStyles">
                                    <h3>Notification Styles Inspiration</h3>
                                </a>
                            </div>
                        </div>
                        <!-- /morphsearch-content -->
                        <span class="morphsearch-close"><i class="icofont icofont-search-alt-1"></i></span>
                    </div>
                    <!-- search end -->
                </div>
    </div>
    </nav>
    </header>
    <!-- Side-Nav-->
    <aside class="main-sidebar hidden-print ">
        <section class="sidebar" id="sidebar-scroll">
            <!-- Sidebar Menu-->
            <ul class="sidebar-menu">

                <li class="nav-level">---Anbar---</li>
                <li><a class="waves-effect waves-dark" href="{{route('brands')}}">
                        <i class="icon-tag"></i>
                        <span>Brands</span>
                    </a>
                </li>
                <li><a class="waves-effect waves-dark" href="{{route('clients')}}">
                        <i class="icon-people"></i>
                        <span>Müştərilər</span>
                    </a>
                </li>
                <li><a class="waves-effect waves-dark" href="{{route('products')}}">
                        <i class="icon-menu"></i>
                        <span>Məhsullar</span>
                    </a>
                </li>
                <li><a class="waves-effect waves-dark" href="{{route('xerc')}}">
                        <i class="icon-credit-card"></i>
                        <span>Xərc</span>
                    </a>
                </li>
                <li><a class="waves-effect waves-dark" href="{{route('orders')}}">
                        <i class="icon-bag"></i>
                        <span>Sifarişlər</span>
                    </a>
                </li>
                <li><a class="waves-effect waves-dark" href="{{route('staff')}}">
                        <i class="icon-people"></i>
                        <span>İşçilər</span>
                    </a>
                </li>


                <li class="nav-level">--- More</li>

                <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i
                            class="icon-docs"></i><span>Pages</span><i class="icon-arrow-down"></i></a>
                    <ul class="treeview-menu">
                        <li class="treeview"><a href="#!"><i class="icon-arrow-right"></i><span> Authentication</span><i
                                    class="icon-arrow-down"></i></a>
                            <ul class="treeview-menu">
                                <li><a class="waves-effect waves-dark" href="{{route('signin')}}" target="_blank"><i
                                            class="icon-arrow-right"></i> Register 1</a></li>

                                <li><a class="waves-effect waves-dark" href="{{route('signup')}}" target="_blank"><i
                                            class="icon-arrow-right"></i><span> Login 1</span></a></li>
                                <li><a class="waves-effect waves-dark" href="forgot-password.html" target="_blank"><i
                                            class="icon-arrow-right"></i><span> Forgot Password</span></a></li>

                            </ul>
                        </li>

                        <li><a class="waves-effect waves-dark" href="404.html" target="_blank"><i
                                    class="icon-arrow-right"></i> Error 404</a></li>
                        <li><a class="waves-effect waves-dark" href="sample-page.html"><i class="icon-arrow-right"></i>
                                Sample Page</a></li>

                    </ul>
                </li>


        </section>
    </aside>
    <!-- Sidebar chat start -->
    <div id="sidebar" class="p-fixed header-users showChat">
        <div class="had-container">
            <div class="card card_main header-users-main">
                <div class="card-content user-box">
                    <div class="md-group-add-on p-20">
                        <span class="md-add-on">
                            <i class="icofont icofont-search-alt-2 chat-search"></i>
                        </span>
                        <div class="md-input-wrapper">
                            <input type="text" class="md-form-control" name="username" id="search-friends">
                            <label>Search</label>
                        </div>

                    </div>
                    <div class="media friendlist-main">

                        <h6>Friend List</h6>

                    </div>
                    <div class="main-friend-list">
                        <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe"
                            data-toggle="tooltip" data-placement="left" title="Josephin Doe">
                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="" alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="friend-header">Josephin Doe</div>
                                <span>20min ago</span>
                            </div>
                        </div>
                        <div class="media friendlist-box" data-id="3" data-status="online" data-username="Alice"
                            data-toggle="tooltip" data-placement="left" title="Alice">
                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="" alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="friend-header">Alice</div>
                                <span>1 hour ago</span>
                            </div>
                        </div>
                        <div class="media friendlist-box" data-id="7" data-status="offline"
                            data-username="Michael Scofield" data-toggle="tooltip" data-placement="left"
                            title="Michael Scofield">
                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="" alt="Generic placeholder image">
                                <div class="live-status bg-danger"></div>
                            </a>
                            <div class="media-body">
                                <div class="friend-header">Michael Scofield</div>
                                <span>3 hours ago</span>
                            </div>
                        </div>
                        <div class="media friendlist-box" data-id="5" data-status="online" data-username="Irina Shayk"
                            data-toggle="tooltip" data-placement="left" title="Irina Shayk">
                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="" alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="friend-header">Irina Shayk</div>
                                <span>1 day ago</span>
                            </div>
                        </div>
                        <div class="media friendlist-box" data-id="6" data-status="offline"
                            data-username="Sara Tancredi" data-toggle="tooltip" data-placement="left"
                            title="Sara Tancredi">
                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="" alt="Generic placeholder image">
                                <div class="live-status bg-danger"></div>
                            </a>
                            <div class="media-body">
                                <div class="friend-header">Sara Tancredi</div>
                                <span>2 days ago</span>
                            </div>
                        </div>
                        <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe"
                            data-toggle="tooltip" data-placement="left" title="Josephin Doe">
                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="" alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="friend-header">Josephin Doe</div>
                                <span>20min ago</span>
                            </div>
                        </div>
                        <div class="media friendlist-box" data-id="3" data-status="online" data-username="Alice"
                            data-toggle="tooltip" data-placement="left" title="Alice">
                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="" alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="friend-header">Alice</div>
                                <span>1 hour ago</span>
                            </div>
                        </div>
                        <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe"
                            data-toggle="tooltip" data-placement="left" title="Josephin Doe">

                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="" alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="friend-header">Josephin Doe</div>
                                <span>20min ago</span>
                            </div>
                        </div>
                        <div class="media friendlist-box" data-id="3" data-status="online" data-username="Alice"
                            data-toggle="tooltip" data-placement="left" title="Alice">
                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="" alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="friend-header">Alice</div>
                                <span>1 hour ago</span>
                            </div>
                        </div>
                        <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe"
                            data-toggle="tooltip" data-placement="left" title="Josephin Doe">

                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="" alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="friend-header">Josephin Doe</div>
                                <span>20min ago</span>
                            </div>
                        </div>
                        <div class="media friendlist-box" data-id="3" data-status="online" data-username="Alice"
                            data-toggle="tooltip" data-placement="left" title="Alice">
                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="" alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="friend-header">Alice</div>
                                <span>1 hour ago</span>
                            </div>
                        </div>
                        <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe"
                            data-toggle="tooltip" data-placement="left" title="Josephin Doe">

                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="" alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="friend-header">Josephin Doe</div>
                                <span>20min ago</span>
                            </div>
                        </div>
                        <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe"
                            data-toggle="tooltip" data-placement="left" title="Josephin Doe">

                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="" alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="friend-header">Josephin Doe</div>
                                <span>20min ago</span>
                            </div>
                        </div>
                        <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe"
                            data-toggle="tooltip" data-placement="left" title="Josephin Doe">

                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="" alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="friend-header">Josephin Doe</div>
                                <span>20min ago</span>
                            </div>
                        </div>
                        <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe"
                            data-toggle="tooltip" data-placement="left" title="Josephin Doe">

                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="" alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="friend-header">Josephin Doe</div>
                                <span>20min ago</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="showChat_inner">
        <div class="media chat-inner-header">
            <a class="back_chatBox">
                <i class="icofont icofont-rounded-left"></i> Josephin Doe
            </a>
        </div>
        <div class="media chat-messages">
            <a class="media-left photo-table" href="#!">
                <img class="media-object img-circle m-t-5" src="" alt="Generic placeholder image">
                <div class="live-status bg-success"></div>
            </a>
            <div class="media-body chat-menu-content">
                <div class="">
                    <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                    <p class="chat-time">8:20 a.m.</p>
                </div>
            </div>
        </div>
        <div class="media chat-messages">
            <div class="media-body chat-menu-reply">
                <div class="">
                    <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                    <p class="chat-time">8:20 a.m.</p>
                </div>
            </div>
            <div class="media-right photo-table">
                <a href="#!">
                    <img class="media-object img-circle m-t-5" src="" alt="Generic placeholder image">
                    <div class="live-status bg-success"></div>
                </a>
            </div>
        </div>
        <div class="media chat-reply-box">
            <div class="md-input-wrapper">
                <input type="text" class="md-form-control" id="inputEmail" name="inputEmail">
                <label>Share your thoughts</label>
                <span class="highlight"></span>
                <span class="bar"></span> <button type="button" class="chat-send waves-effect waves-light">
                    <i class="icofont icofont-location-arrow f-20 "></i>
                </button>

                <button type="button" class="chat-send waves-effect waves-light">
                    <i class="icofont icofont-location-arrow f-20 "></i>
                </button>
            </div>

        </div>
    </div>
    <div class="content-wrapper">
        <!-- Container-fluid starts -->
        <!-- Main content starts -->
        <div class="container-fluid">
            <div class="main-header" style="margin-top: 0px;">

            </div>
            <!-- 4-blocks row start -->

            @php
            use App\Models\products;
            use App\Models\brands;
            use App\Models\clients;
            use App\Models\orders;
            use App\Models\staff;
            use App\Models\document;
            @endphp
            @php($alis = 0)
            @php($satis = 0)
            @php($miqdar = 0)
            @php($qazanc = 0)
            @php($cqazanc = 0)
            <div class="row dashboard-header">
                <div class="col-lg-3 col-md-6">
                    <div class="card dashboard-product">
                        <span>Brendlər</span>
                        <h2 class="dashboard-total-products">
                            {{brands::where('user_id','=',Auth::id())->count()}}</h2>
                        <div class="side-box ">
                            <i class="ti-ticket text-primary-color"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card dashboard-product">
                        <span>Məhsullar</span>
                        <h2 class="dashboard-total-products">
                            <span>{{products::where('user_id','=',Auth::id())->count()}}</span></h2>
                        <div class="side-box">
                            <i class="ti-layout-grid3 text-warning-color"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card dashboard-product">
                        <span>Müştərilər</span>
                        <h2 class="dashboard-total-products">
                            <span>{{clients::where('user_id','=',Auth::id())->count()}}</span></h2>
                        <div class="side-box">
                            <i class="bi bi-people-fill text-success-color"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card dashboard-product">
                        <span>Sifarişlər</span>
                        <h2 class="dashboard-total-products">
                            <span>{{orders::where('user_id','=',Auth::id())->count()}}</span></h2>
                        <div class="side-box">
                            <i class="ti-shopping-cart-full text-danger-color"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card dashboard-product">
                        <span>Qazanc</span>
                        <h2 class="dashboard-total-products">
                            <span>
                                @foreach($product_data as $p)
                                {{($qazanc = ($p->satis - $p->alis)*$p->miqdar)}}
                                @endforeach
                            </span></h2>
                        <div class="side-box">
                            <i class="ti-money text-danger-color"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card dashboard-product">
                        <span>Cari qazanc</span>
                        <h2 class="dashboard-total-products"><span>
                                @foreach ($orders_data as $order_qazanc)
                                @if($order_qazanc->tesdiq==1)
                                {{($cqazanc = ($order_qazanc->satis -
                                $order_qazanc->alis)*$order_qazanc->order_miqdar)}}
                                @else
                                {{0}}
                                @endif
                                @endforeach
                            </span></h2>
                        <div class="side-box">
                            <i class="ti-money text-danger-color"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card dashboard-product">
                        <span>İşçilər </span>
                        <h2 class="dashboard-total-products"><span>
                                {{staff::where('user_id','=',Auth::id())->count()}}
                            </span></h2>
                        <div class="side-box">
                            <i class="ti-people text-danger-color"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card dashboard-product">
                        <span>Toplam sənəd </span>
                        <h2 class="dashboard-total-products"><span>
                                {{document::where('user_id','=',Auth::id())->count()}}
                            </span></h2>
                        <div class="side-box">
                            <i class="ti-files text-danger-color"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 4-blocks row end -->

            <!-- Sidebar chat end-->
            <!-- Warning Section Starts -->
            <!-- Older IE warning message -->
            <!--[if lt IE 9]>
      <div class="ie-warning">
          <h1>Warning!!</h1>
          <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
          <div class="iew-container">
              <ul class="iew-download">
                  <li>
                      <a href="http://www.google.com/chrome/">
                          <img src="assets/images/browser/chrome.png" alt="Chrome">
                          <div>Chrome</div>
                      </a>
                  </li>
                  <li>
                      <a href="https://www.mozilla.org/en-US/firefox/new/">
                          <img src="assets/images/browser/firefox.png" alt="Firefox">
                          <div>Firefox</div>
                      </a>
                  </li>
                  <li>
                      <a href="http://www.opera.com">
                          <img src="assets/images/browser/opera.png" alt="Opera">
                          <div>Opera</div>
                      </a>
                  </li>
                  <li>
                      <a href="https://www.apple.com/safari/">
                          <img src="assets/images/browser/safari.png" alt="Safari">
                          <div>Safari</div>
                      </a>
                  </li>
                  <li>
                      <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                          <img src="assets/images/browser/ie.png" alt="">
                          <div>IE (9 & above)</div>
                      </a>
                  </li>
              </ul>
          </div>
          <p>Sorry for the inconvenience!</p>
      </div>
      <![endif]-->
            <!-- Warning Section Ends -->

            <!-- Required Jqurey -->



            @yield('content')

            <script src="{{url('assets/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
            <script src="{{url('assets/plugins/tether/dist/js/tether.min.js')}}"></script>

            <!-- Required Fremwork -->
            <script src="{{url('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

            <!-- Scrollbar JS-->
            <script src="{{url('assets/plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
            <script src="{{url('assets/plugins/jquery.nicescroll/jquery.nicescroll.min.js')}}"></script>

            <!--classic JS-->
            <script src="{{url('assets/plugins/classie/classie.js')}}"></script>

            <!-- notification -->
            <script src="{{url('assets/plugins/notification/js/bootstrap-growl.min.js')}}"></script>

            <!-- Sparkline charts -->
            <script src="{{url('assets/plugins/jquery-sparkline/dist/jquery.sparkline.js')}}"></script>

            <!-- Counter js  -->
            <script src="{{url('assets/plugins/waypoints/jquery.waypoints.min.js')}}"></script>
            <script src="{{url('assets/plugins/countdown/js/jquery.counterup.js')}}"></script>

            <!-- Echart js -->
            <script src="{{url('assets/plugins/charts/echarts/js/echarts-all.js')}}"></script>

            <script src="{{url('https://code.highcharts.com/highcharts.js')}}"></script>
            <script src="{{url('https://code.highcharts.com/modules/exporting.js')}}"></script>
            <script src="{{url('https://code.highcharts.com/highcharts-3d.js')}}"></script>

            <!-- custom js -->
            <script type="text/javascript" src="{{url('assets/js/main.min.js')}}"></script>
            <script type="text/javascript" src="{{url('assets/pages/dashboard.js')}}"></script>
            <script type="text/javascript" src="{{url('assets/pages/elements.js')}}"></script>
            <script src="assets/js/menu.min"></script>
            <script>
                var $window = $(window);
                var nav = $('.fixed-button');
                $window.scroll(function () {
                    if ($window.scrollTop() >= 200) {
                        nav.addClass('active');
                    } else {
                        nav.removeClass('active');
                    }
                });

            </script>

</html>
