<!--

    <div class="content-wrapper">
        <!-- Container-fluid starts -->
        <!-- Main content starts -->
        <div class="container-fluid">
            <div class="row">
                <div class="main-header">
                    <h4>Dashboard</h4>
                </div>
            </div>
            <!-- 4-blocks row start -->
            <div class="row dashboard-header">
                <div class="col-lg-3 col-md-6">
                    <div class="card dashboard-product">
                        <span>Products</span>
                        <h2 class="dashboard-total-products">4500</h2>
                        <span class="label label-warning">Sales</span>Arriving Today
                        <div class="side-box">
                            <i class="ti-signal text-warning-color"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card dashboard-product">
                        <span>Products</span>
                        <h2 class="dashboard-total-products">37,500</h2>
                        <span class="label label-primary">Views</span>View Today
                        <div class="side-box ">
                            <i class="ti-gift text-primary-color"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card dashboard-product">
                        <span>Products</span>
                        <h2 class="dashboard-total-products">$<span>30,780</span></h2>
                        <span class="label label-success">Sales</span>Reviews
                        <div class="side-box">
                            <i class="ti-direction-alt text-success-color"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card dashboard-product">
                        <span>Products</span>
                        <h2 class="dashboard-total-products">$<span>30,780</span></h2>
                        <span class="label label-danger">Sales</span>Reviews
                        <div class="side-box">
                            <i class="ti-rocket text-danger-color"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 4-blocks row end -->

            <!-- 1-3-block row start -->
          
            <div class="row">
            
                <div class="col-lg-4">
                
                <div class="col-md-12 mt-1 mb-2"><button type="button" id="addNewBook" class="btn btn-success">Add</button>
                </div>

                </div>
                <div class="col-sm-12">
                <div class="col-lg-8">

                <div class="card-header text-center font-weight-bold">
                <h2>Laravel 8 Ajax Book CRUD with DataTable Example Tutorial</h2>
            </div>

            <div class="card-body">

                <table class="table table-bordered" id="datatable-ajax-crud">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Image</th>
                            <th>Book Title</th>
                            <th>Code</th>
                            <th>Author</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>

            </div>


                </div>
                <div class="col-xl-4 col-lg-12 grid-item">
                    <div class="card">
                    <div class="modal fade" id="ajax-book-model" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="ajaxBookModel"></h4>
                    </div>
                    <div class="modal-body">
                        <form action="javascript:void(0)" id="addEditBookForm" name="addEditBookForm"
                            class="form-horizontal" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="id" id="id">
                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Book Name</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="title" name="title"
                                        placeholder="Enter Book Name" maxlength="50" required="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Book Code</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="code" name="code"
                                        placeholder="Enter Book Code" maxlength="50" required="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Book Author</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="author" name="author"
                                        placeholder="Enter author Name" required="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Book Image</label>
                                <div class="col-sm-6 pull-left">
                                    <input type="file" class="form-control" id="image" name="image" required="">
                                </div>
                                <div class="col-sm-6 pull-right">
                                    <img id="preview-image"
                                        src="https://www.riobeauty.co.uk/images/product_image_not_found.gif"
                                        alt="preview image" style="max-height: 250px;">
                                </div>
                            </div>

                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-primary" id="btn-save" value="addNewBook">Save
                                    changes
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">

                    </div>
                </div>
            </div>
        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-12 grid-item">
                    <div class="card">

                    </div>
                </div>
            </div>
            </div>
            <!-- 1-3-block row end -->

           
        </div>
        <!-- Main content ends -->
        <!-- Container-fluid ends -->
        <div class="fixed-button">
            <a href="#!" class="btn btn-md btn-primary">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i> Upgrade To Pro
            </a>
        </div>
    </div>
    </div>
    <script type="text/javascript">
            $(document).ready(function () {

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $('#image').change(function () {

                    let reader = new FileReader();

                    reader.onload = (e) => {

                        $('#preview-image').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(this.files[0]);

                });

                $('#datatable-ajax-crud').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ url('ajax-datatable-crud') }}",
                    columns: [{
                            data: 'id',
                            name: 'id',
                            'visible': false
                        },
                        {
                            data: 'image',
                            name: 'image',
                            orderable: false
                        },
                        {
                            data: 'title',
                            name: 'title'
                        },
                        {
                            data: 'code',
                            name: 'code'
                        },
                        {
                            data: 'author',
                            name: 'author'
                        },
                        {
                            data: 'created_at',
                            name: 'created_at'
                        },
                        {
                            data: 'action',
                            name: 'action',
                            orderable: false
                        },
                    ],
                    order: [
                        [0, 'desc']
                    ]
                });


                $('#addNewBook').click(function () {
                    $('#addEditBookForm').trigger("reset");
                    $('#ajaxBookModel').html("Add Book");
                    $('#ajax-book-model').modal('show');
                    $("#image").attr("required", "true");
                    $('#id').val('');
                    $('#preview-image').attr('src',
                        'https://www.riobeauty.co.uk/images/product_image_not_found.gif');


                });

                $('body').on('click', '.edit', function () {

                    var id = $(this).data('id');

                    // ajax
                    $.ajax({
                        type: "POST",
                        url: "{{ url('edit-book') }}",
                        data: {
                            id: id
                        },
                        dataType: 'json',
                        success: function (res) {
                            $('#ajaxBookModel').html("Edit Book");
                            $('#ajax-book-model').modal('show');
                            $('#id').val(res.id);
                            $('#title').val(res.title);
                            $('#code').val(res.code);
                            $('#author').val(res.author);
                            $('#image').removeAttr('required');

                        }
                    });

                });

                $('body').on('click', '.delete', function () {

                    if (confirm("Delete Record?") == true) {
                        var id = $(this).data('id');

                        // ajax
                        $.ajax({
                            type: "POST",
                            url: "{{ url('delete-book') }}",
                            data: {
                                id: id
                            },
                            dataType: 'json',
                            success: function (res) {

                                var oTable = $('#datatable-ajax-crud').dataTable();
                                oTable.fnDraw(false);
                            }
                        });
                    }

                });

                $('#addEditBookForm').submit(function (e) {

                    e.preventDefault();

                    var formData = new FormData(this);

                    $.ajax({
                        type: 'POST',
                        url: "{{ url('add-update-book')}}",
                        data: formData,
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: (data) => {
                            $("#ajax-book-model").modal('hide');
                            var oTable = $('#datatable-ajax-crud').dataTable();
                            oTable.fnDraw(false);
                            $("#btn-save").html('Submit');
                            $("#btn-save").attr("disabled", false);
                        },
                        error: function (data) {
                            console.log(data);
                        }
                    });
                });
            });

        </script>



</body>

        -->




        ---------------------------------------




        <!DOCTYPE html>
<html lang="en">
<head>
    <title>Anbar</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">

    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <title>Anbar</title>
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
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet">

    <!-- themify -->
    <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">

    <!-- iconfont -->
    <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">

    <!-- simple line icon -->
    <link rel="stylesheet" type="text/css" href="assets/icon/simple-line-icons/css/simple-line-icons.css">

    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap/css/bootstrap.min.css">

    <!-- Chartlist chart css -->
    <link rel="stylesheet" href="assets/plugins/chartist/dist/chartist.css" type="text/css" media="all">

    <!-- Weather css -->
    <link href="assets/css/svg-weather.css" rel="stylesheet">


    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">

    <!-- Responsive.css-->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
    </head>
    <body class="sidebar-mini fixed">
    <div class="loader-bg">
        <div class="loader-bar">
        </div>
    </div>
    <div class="wrapper">
        <!-- Navbar-->
        <header class="main-header-top hidden-print">
            <a href="index.html" class="logo">
                <!--<img class="img-fluid able-logo" src=""
                    alt="Theme-logo">--></a>
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#!" data-toggle="offcanvas" class="sidebar-toggle"></a>
                <ul class="top-nav lft-nav">
                    <li>
                        <a href="#!" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"
                            class="dropdown-toggle drop icon-circle drop-image">
                            <i class="ti-files"> </i><span> Files</span>
                        </a>
                    </li>
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
                    <div class="upgrade-button">
                        <a href="#" class="icon-circle txt-white btn btn-sm btn-primary upgrade-button">
                            <span>Upgrade To Pro</span>
                        </a>
                    </div>

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
                                            <img class="img-circle" src="assets/images/avatar-1.png" alt="User Image">
                                        </span>
                                        <div class="media-body"><span class="block">Lisa sent you a mail</span><span
                                                class="text-muted block-time">2min ago</span></div>
                                    </a>
                                </li>
                                <li class="bell-notification">
                                    <a href="javascript:;" class="media">
                                        <span class="media-left media-icon">
                                            <img class="img-circle" src="assets/images/avatar-2.png" alt="User Image">
                                        </span>
                                        <div class="media-body"><span class="block">Server Not Working</span><span
                                                class="text-muted block-time">20min ago</span></div>
                                    </a>
                                </li>
                                <li class="bell-notification">
                                    <a href="javascript:;" class="media"><span class="media-left media-icon">
                                            <img class="img-circle" src="assets/images/avatar-3.png" alt="User Image">
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
                            <a href="#!" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"
                                class="dropdown-toggle drop icon-circle drop-image">
                                <span><img class="img-circle " src="assets/images/avatar-1.png" style="width:40px;"
                                        alt="User Image"></span>
                                <span>John <b>Doe</b> <i class=" icofont icofont-simple-down"></i></span>

                            </a>
                            <ul class="dropdown-menu settings-menu">
                                <li><a href="#!"><i class="icon-settings"></i> Settings</a></li>
                                <li><a href="#"><i class="icon-user"></i> Profile</a></li>
                                <li><a href="#"><i class="icon-envelope-open"></i> My Messages</a></li>
                                <li class="p-0">
                                    <div class="dropdown-divider m-0"></div>
                                </li>
                                <li><a href="#"><i class="icon-lock"></i> Lock Screen</a></li>
                                <li><a href="login1.html"><i class="icon-logout"></i> Logout</a></li>

                            </ul>
                        </li>
                    </ul>

                    <!-- search -->
                    <div id="morphsearch" class="morphsearch">
                        <form class="morphsearch-form">

                            <input class="morphsearch-input" type="search" placeholder="Search..." />

                            <button class="morphsearch-submit" type="submit">Search</button>

                        </form>
                        <div class="morphsearch-content">
                            <div class="dummy-column">
                                <h2>People</h2>
                                <a class="dummy-media-object" href="#!">
                                    <img class="round"
                                        src="http://0.gravatar.com/avatar/81b58502541f9445253f30497e53c280?s=50&d=identicon&r=G"
                                        alt="Sara Soueidan" />
                                    <h3>Sara Soueidan</h3>
                                </a>

                                <a class="dummy-media-object" href="#!">
                                    <img class="round"
                                        src="http://1.gravatar.com/avatar/9bc7250110c667cd35c0826059b81b75?s=50&d=identicon&r=G"
                                        alt="Shaun Dona" />
                                    <h3>Shaun Dona</h3>
                                </a>
                            </div>
                            <div class="dummy-column">
                                <h2>Popular</h2>
                                <a class="dummy-media-object" href="#!">
                                    <img src="assets/images/avatar-1.png" alt="PagePreloadingEffect" />
                                    <h3>Page Preloading Effect</h3>
                                </a>

                                <a class="dummy-media-object" href="#!">
                                    <img src="assets/images/avatar-1.png" alt="DraggableDualViewSlideshow" />
                                    <h3>Draggable Dual-View Slideshow</h3>
                                </a>
                            </div>
                            <div class="dummy-column">
                                <h2>Recent</h2>
                                <a class="dummy-media-object" href="#!">
                                    <img src="assets/images/avatar-1.png" alt="TooltipStylesInspiration" />
                                    <h3>Tooltip Styles Inspiration</h3>
                                </a>
                                <a class="dummy-media-object" href="#!">
                                    <img src="assets/images/avatar-1.png" alt="NotificationStyles" />
                                    <h3>Notification Styles Inspiration</h3>
                                </a>
                            </div>
                        </div>
                        <!-- /morphsearch-content -->
                        <span class="morphsearch-close"><i class="icofont icofont-search-alt-1"></i></span>
                    </div>
                    <!-- search end -->
                </div>
            </nav>
        </header>
        <!-- Side-Nav-->
        <aside class="main-sidebar hidden-print ">
            <section class="sidebar" id="sidebar-scroll">
                <!-- Sidebar Menu-->
                <ul class="sidebar-menu">
                    <li class="nav-level">--- Navigation</li>
                    <li class="active treeview">
                        <a class="waves-effect waves-dark" href="index.html">
                            <i class="icon-speedometer"></i><span> Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-level">--- Components</li>
                    <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i
                                class="icon-briefcase"></i><span> UI Elements</span><i class="icon-arrow-down"></i></a>
                        <ul class="treeview-menu">
                            <li><a class="waves-effect waves-dark" href="accordion.html"><i
                                        class="icon-arrow-right"></i> Accordion</a></li>
                            <li><a class="waves-effect waves-dark" href="button.html"><i class="icon-arrow-right"></i>
                                    Button</a></li>
                            <li><a class="waves-effect waves-dark" href="label-badge.html"><i
                                        class="icon-arrow-right"></i> Label Badge</a></li>
                            <li><a class="waves-effect waves-dark" href="bootstrap-ui.html"><i
                                        class="icon-arrow-right"></i> Grid system</a></li>
                            <li><a class="waves-effect waves-dark" href="box-shadow.html"><i
                                        class="icon-arrow-right"></i> Box Shadow</a></li>
                            <li><a class="waves-effect waves-dark" href="color.html"><i class="icon-arrow-right"></i>
                                    Color</a></li>
                            <li><a class="waves-effect waves-dark" href="light-box.html"><i
                                        class="icon-arrow-right"></i> Light Box</a></li>
                            <li><a class="waves-effect waves-dark" href="notification.html"><i
                                        class="icon-arrow-right"></i> Notification</a></li>
                            <li><a class="waves-effect waves-dark" href="panels-wells.html"><i
                                        class="icon-arrow-right"></i> Panels-Wells</a></li>
                            <li><a class="waves-effect waves-dark" href="tabs.html"><i class="icon-arrow-right"></i>
                                    Tabs</a></li>
                            <li><a class="waves-effect waves-dark" href="tooltips.html"><i class="icon-arrow-right"></i>
                                    Tooltips</a></li>
                            <li><a class="waves-effect waves-dark" href="typography.html"><i
                                        class="icon-arrow-right"></i> Typography</a></li>
                        </ul>
                    </li>

                    <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-chart"></i><span>
                                Charts &amp; Maps</span><span class="label label-success menu-caption">New</span><i
                                class="icon-arrow-down"></i></a>
                        <ul class="treeview-menu">
                            <li><a class="waves-effect waves-dark" href="float-chart.html"><i
                                        class="icon-arrow-right"></i> Float Charts</a></li>
                            <li><a class="waves-effect waves-dark" href="morris-chart.html"><i
                                        class="icon-arrow-right"></i> Morris Charts</a></li>
                        </ul>
                    </li>

                    <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i
                                class="icon-book-open"></i><span> Forms</span><i class="icon-arrow-down"></i></a>
                        <ul class="treeview-menu">
                            <li><a class="waves-effect waves-dark" href="form-elements-bootstrap.html"><i
                                        class="icon-arrow-right"></i> Form Elements Bootstrap</a></li>

                            <li><a class="waves-effect waves-dark" href="form-elements-advance.html"><i
                                        class="icon-arrow-right"></i> Form Elements Advance</a></li>
                        </ul>
                    </li>

                    <li class="treeview">
                        <a class="waves-effect waves-dark" href="basic-table.html">
                            <i class="icon-list"></i><span> Table</span>
                        </a>
                    </li>


                    <li class="nav-level">--- More</li>

                    <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i
                                class="icon-docs"></i><span>Pages</span><i class="icon-arrow-down"></i></a>
                        <ul class="treeview-menu">
                            <li class="treeview"><a href="#!"><i class="icon-arrow-right"></i><span>
                                        Authentication</span><i class="icon-arrow-down"></i></a>
                                <ul class="treeview-menu">
                                    <li><a class="waves-effect waves-dark" href="register1.html" target="_blank"><i
                                                class="icon-arrow-right"></i> Register 1</a></li>

                                    <li><a class="waves-effect waves-dark" href="login1.html" target="_blank"><i
                                                class="icon-arrow-right"></i><span> Login 1</span></a></li>
                                    <li><a class="waves-effect waves-dark" href="forgot-password.html"
                                            target="_blank"><i class="icon-arrow-right"></i><span> Forgot
                                                Password</span></a></li>

                                </ul>
                            </li>

                            <li><a class="waves-effect waves-dark" href="404.html" target="_blank"><i
                                        class="icon-arrow-right"></i> Error 404</a></li>
                            <li><a class="waves-effect waves-dark" href="sample-page.html"><i
                                        class="icon-arrow-right"></i> Sample Page</a></li>

                        </ul>
                    </li>


                    <li class="nav-level">--- Menu Level</li>

                    <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i
                                class="icofont icofont-company"></i><span>Menu Level 1</span><i
                                class="icon-arrow-down"></i></a>
                        <ul class="treeview-menu">
                            <li>
                                <a class="waves-effect waves-dark" href="#!">
                                    <i class="icon-arrow-right"></i>
                                    Level Two
                                </a>
                            </li>
                            <li class="treeview">
                                <a class="waves-effect waves-dark" href="#!">
                                    <i class="icon-arrow-right"></i>
                                    <span>Level Two</span>
                                    <i class="icon-arrow-down"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li>
                                        <a class="waves-effect waves-dark" href="#!">
                                            <i class="icon-arrow-right"></i>
                                            Level Three
                                        </a>
                                    </li>
                                    <li>
                                        <a class="waves-effect waves-dark" href="#!">
                                            <i class="icon-arrow-right"></i>
                                            <span>Level Three</span>
                                            <i class="icon-arrow-down"></i>
                                        </a>
                                        <ul class="treeview-menu">
                                            <li>
                                                <a class="waves-effect waves-dark" href="#!">
                                                    <i class="icon-arrow-right"></i>
                                                    Level Four
                                                </a>
                                            </li>
                                            <li>
                                                <a class="waves-effect waves-dark" href="#!">
                                                    <i class="icon-arrow-right"></i>
                                                    Level Four
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
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
                            <div class="media friendlist-box" data-id="1" data-status="online"
                                data-username="Josephin Doe" data-toggle="tooltip" data-placement="left"
                                title="Josephin Doe">

                                <a class="media-left" href="#!">
                                    <img class="media-object img-circle" src="assets/images/avatar-1.png"
                                        alt="Generic placeholder image">
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
                                    <img class="media-object img-circle" src="assets/images/avatar-2.png"
                                        alt="Generic placeholder image">
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
                                    <img class="media-object img-circle" src="assets/images/avatar-3.png"
                                        alt="Generic placeholder image">
                                    <div class="live-status bg-danger"></div>
                                </a>
                                <div class="media-body">
                                    <div class="friend-header">Michael Scofield</div>
                                    <span>3 hours ago</span>
                                </div>
                            </div>
                            <div class="media friendlist-box" data-id="5" data-status="online"
                                data-username="Irina Shayk" data-toggle="tooltip" data-placement="left"
                                title="Irina Shayk">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-circle" src="assets/images/avatar-4.png"
                                        alt="Generic placeholder image">
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
                                    <img class="media-object img-circle" src="assets/images/avatar-5.png"
                                        alt="Generic placeholder image">
                                    <div class="live-status bg-danger"></div>
                                </a>
                                <div class="media-body">
                                    <div class="friend-header">Sara Tancredi</div>
                                    <span>2 days ago</span>
                                </div>
                            </div>
                            <div class="media friendlist-box" data-id="1" data-status="online"
                                data-username="Josephin Doe" data-toggle="tooltip" data-placement="left"
                                title="Josephin Doe">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-circle" src="assets/images/avatar-1.png"
                                        alt="Generic placeholder image">
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
                                    <img class="media-object img-circle" src="assets/images/avatar-2.png"
                                        alt="Generic placeholder image">
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="friend-header">Alice</div>
                                    <span>1 hour ago</span>
                                </div>
                            </div>
                            <div class="media friendlist-box" data-id="1" data-status="online"
                                data-username="Josephin Doe" data-toggle="tooltip" data-placement="left"
                                title="Josephin Doe">

                                <a class="media-left" href="#!">
                                    <img class="media-object img-circle" src="assets/images/avatar-1.png"
                                        alt="Generic placeholder image">
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
                                    <img class="media-object img-circle" src="assets/images/avatar-2.png"
                                        alt="Generic placeholder image">
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="friend-header">Alice</div>
                                    <span>1 hour ago</span>
                                </div>
                            </div>
                            <div class="media friendlist-box" data-id="1" data-status="online"
                                data-username="Josephin Doe" data-toggle="tooltip" data-placement="left"
                                title="Josephin Doe">

                                <a class="media-left" href="#!">
                                    <img class="media-object img-circle" src="assets/images/avatar-1.png"
                                        alt="Generic placeholder image">
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
                                    <img class="media-object img-circle" src="assets/images/avatar-2.png"
                                        alt="Generic placeholder image">
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="friend-header">Alice</div>
                                    <span>1 hour ago</span>
                                </div>
                            </div>
                            <div class="media friendlist-box" data-id="1" data-status="online"
                                data-username="Josephin Doe" data-toggle="tooltip" data-placement="left"
                                title="Josephin Doe">

                                <a class="media-left" href="#!">
                                    <img class="media-object img-circle" src="assets/images/avatar-1.png"
                                        alt="Generic placeholder image">
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="friend-header">Josephin Doe</div>
                                    <span>20min ago</span>
                                </div>
                            </div>
                            <div class="media friendlist-box" data-id="1" data-status="online"
                                data-username="Josephin Doe" data-toggle="tooltip" data-placement="left"
                                title="Josephin Doe">

                                <a class="media-left" href="#!">
                                    <img class="media-object img-circle" src="assets/images/avatar-1.png"
                                        alt="Generic placeholder image">
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="friend-header">Josephin Doe</div>
                                    <span>20min ago</span>
                                </div>
                            </div>
                            <div class="media friendlist-box" data-id="1" data-status="online"
                                data-username="Josephin Doe" data-toggle="tooltip" data-placement="left"
                                title="Josephin Doe">

                                <a class="media-left" href="#!">
                                    <img class="media-object img-circle" src="assets/images/avatar-1.png"
                                        alt="Generic placeholder image">
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="friend-header">Josephin Doe</div>
                                    <span>20min ago</span>
                                </div>
                            </div>
                            <div class="media friendlist-box" data-id="1" data-status="online"
                                data-username="Josephin Doe" data-toggle="tooltip" data-placement="left"
                                title="Josephin Doe">

                                <a class="media-left" href="#!">
                                    <img class="media-object img-circle" src="assets/images/avatar-1.png"
                                        alt="Generic placeholder image">
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
                    <img class="media-object img-circle m-t-5" src="assets/images/avatar-1.png"
                        alt="Generic placeholder image">
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
        <script src="assets/plugins/Jquery/dist/jquery.min.js"></script>
        <script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="assets/plugins/tether/dist/js/tether.min.js"></script>

        <!-- Required Fremwork -->
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

        <!-- Scrollbar JS-->
        <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
        <script src="assets/plugins/jquery.nicescroll/jquery.nicescroll.min.js"></script>

        <!--classic JS-->
        <script src="assets/plugins/classie/classie.js"></script>

        <!-- notification -->
        <script src="assets/plugins/notification/js/bootstrap-growl.min.js"></script>

        <!-- Sparkline charts -->
        <script src="assets/plugins/jquery-sparkline/dist/jquery.sparkline.js"></script>

        <!-- Counter js  -->
        <script src="assets/plugins/waypoints/jquery.waypoints.min.js"></script>
        <script src="assets/plugins/countdown/js/jquery.counterup.js"></script>

        <!-- Echart js -->
        <script src="assets/plugins/charts/echarts/js/echarts-all.js"></script>

        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
        <script src="https://code.highcharts.com/highcharts-3d.js"></script>

        <!-- custom js -->
        <script type="text/javascript" src="assets/js/main.min.js"></script>
        <script type="text/javascript" src="assets/pages/dashboard.js"></script>
        <script type="text/javascript" src="assets/pages/elements.js"></script>
        <script src="assets/js/menu.min.js"></script>
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

@yield('content')
</html>
