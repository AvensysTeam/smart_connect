@extends('layouts.main')
@section('content')

<!-- Main Content -->
<main class="body-content">

    <!-- Navigation Bar -->
    <nav class="navbar ms-navbar">

    <div class="ms-aside-toggler ms-toggler pl-0" data-target="#ms-side-nav" data-toggle="slideLeft">
        <span class="ms-toggler-bar bg-primary"></span>
        <span class="ms-toggler-bar bg-primary"></span>
        <span class="ms-toggler-bar bg-primary"></span>
    </div>

    <div class="logo-sn logo-sm ms-d-block-sm">
        <a class="pl-0 ml-0 text-center navbar-brand mr-0" href="../dashboard/index.html"><img src="../../assets/img/m-logo-1.png" alt="logo"> </a>
    </div>

    <ul class="ms-nav-list ms-inline mb-0" id="ms-nav-options">
        <li class="ms-nav-item ms-search-form pb-0 py-0">
        <form class="ms-form" method="post">
            <div class="ms-form-group my-0 mb-0 has-icon fs-14">
            <input type="search" class="ms-form-input" name="search" placeholder="Search here..." value="">
            <i class="flaticon-search text-disabled"></i>
            </div>
        </form>
        </li>
        <li class="ms-nav-item dropdown">
        <a href="#" class="text-disabled ms-has-notification" id="mailDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flaticon-mail"></i></a>
        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="mailDropdown">
            <li class="dropdown-menu-header">
            <h6 class="dropdown-header ms-inline m-0"><span class="text-disabled">Mail</span></h6><span class="badge badge-pill badge-success">3 New</span>
            </li>
            <li class="dropdown-divider"></li>
            <li class="ms-scrollable ms-dropdown-list">
            <a class="media p-2" href="#">
                <div class="ms-chat-status ms-status-offline ms-chat-img mr-2 align-self-center">
                <img src="../../assets/img/project-management/people-5.jpg" class="ms-img-round" alt="people">
                </div>
                <div class="media-body">
                <span>Hey man, looking forward to your new project.</span>
                <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 30 seconds ago</p>
                </div>
            </a>
            <a class="media p-2" href="#">
                <div class="ms-chat-status ms-status-online ms-chat-img mr-2 align-self-center">
                <img src="../../assets/img/project-management/people-12.jpg" class="ms-img-round" alt="people">
                </div>
                <div class="media-body">
                <span>Dear John, I was told you bought mylo! Send me your feedback</span>
                <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 28 minutes ago</p>
                </div>
            </a>
            <a class="media p-2" href="#">
                <div class="ms-chat-status ms-status-offline ms-chat-img mr-2 align-self-center">
                <img src="../../assets/img/project-management/people-12.jpg" class="ms-img-round" alt="people">
                </div>
                <div class="media-body">
                <span>How many people are we inviting to the dashboard?</span>
                <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 6 hours ago</p>
                </div>
            </a>
            </li>
            <li class="dropdown-divider"></li>
            <li class="dropdown-menu-footer text-center">
            <a href="../apps/email.html">Go to Inbox</a>
            </li>
        </ul>
        </li>
        <li class="ms-nav-item dropdown">
        <a href="#" class="text-disabled ms-has-notification" id="notificationDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flaticon-bell"></i></a>
        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="notificationDropdown">
            <li class="dropdown-menu-header">
            <h6 class="dropdown-header ms-inline m-0"><span class="text-disabled">Notifications</span></h6><span class="badge badge-pill badge-info">4 New</span>
            </li>
            <li class="dropdown-divider"></li>
            <li class="ms-scrollable ms-dropdown-list">
            <a class="media p-2" href="#">
                <div class="media-body">
                <span>12 ways to improve your crypto dashboard</span>
                <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 30 seconds ago</p>
                </div>
            </a>
            <a class="media p-2" href="#">
                <div class="media-body">
                <span>You have newly registered users</span>
                <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 45 minutes ago</p>
                </div>
            </a>
            <a class="media p-2" href="#">
                <div class="media-body">
                <span>Your account was logged in from an unauthorized IP</span>
                <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 2 hours ago</p>
                </div>
            </a>
            <a class="media p-2" href="#">
                <div class="media-body">
                <span>An application form has been submitted</span>
                <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 1 day ago</p>
                </div>
            </a>
            </li>
            <li class="dropdown-divider"></li>
            <li class="dropdown-menu-footer text-center">
            <a href="#">View all Notifications</a>
            </li>
        </ul>
        </li>
        <li class="ms-nav-item">
        <a href="#" class="text-disabled ms-toggler" data-target="#ms-recent-activity" data-toggle="slideRight"><i class="flaticon-menu"></i></a>
        </li>
        <li class="ms-nav-item ms-nav-user dropdown">
        <a href="#"  id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img class="ms-user-img ms-img-round float-right" src="../../assets/img/project-management/people-5.jpg" alt="people"> </a>
        <ul class="dropdown-menu dropdown-menu-right user-dropdown" aria-labelledby="userDropdown">
            <li class="dropdown-menu-header">
            <h6 class="dropdown-header ms-inline m-0"><span class="text-disabled">Welcome, Anny Farisha</span></h6>
            </li>
            <li class="dropdown-divider"></li>
            <li class="ms-dropdown-list">
            <a class="media fs-14 p-2" href="../prebuilt-pages/user-profile.html"> <span><i class="flaticon-user mr-2"></i> Profile</span> </a>
            <a class="media fs-14 p-2" href="../apps/email.html"> <span><i class="flaticon-mail mr-2"></i> Inbox</span> <span class="badge badge-pill badge-info">3</span> </a>
            <a class="media fs-14 p-2" href="../prebuilt-pages/user-profile.html"> <span><i class="flaticon-gear mr-2"></i> Account Settings</span> </a>
            </li>
            <li class="dropdown-divider"></li>
            <li class="dropdown-menu-footer">
            <a class="media fs-14 p-2" href="../prebuilt-pages/lock-screen.html"> <span><i class="flaticon-security mr-2"></i> Lock</span> </a>
            </li>
            <li class="dropdown-menu-footer">
            <a class="media fs-14 p-2" href="../prebuilt-pages/default-login.html"> <span><i class="flaticon-shut-down mr-2"></i> Logout</span> </a>
            </li>
        </ul>
        </li>
    </ul>

    <div class="ms-toggler ms-d-block-sm pr-0 ms-nav-toggler" data-toggle="slideDown" data-target="#ms-nav-options">
        <span class="ms-toggler-bar bg-primary"></span>
        <span class="ms-toggler-bar bg-primary"></span>
        <span class="ms-toggler-bar bg-primary"></span>
    </div>

    </nav>

    <!-- Body Content Wrapper -->
    <div class="ms-content-wrapper">
        <div class="row">

            <div class="col-md-12">
                <!-- <nav aria-label="breadcrumb">
                    <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Tables</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Data Tables</li>
                    </ol>
                </nav> -->

                <div class="ms-panel">
                    <div class="ms-panel-header">
                    <h1>Customers</h1>
                    </div>
                    <div class="ms-panel-body">
                    <div class="table-responsive">
                        <table id="customers_table" class="table table-hover w-100"></table>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
<script>
    (function($) {
        'use strict';

        var dataSet = [
            [ "<a href='/user/customer'>Customer 1</a>", "<a href='/user/customer'>Vs 127</a>", "<a href='/user/customer'>2334346643</a>", "<div class='activation_btn clicked'>1</div>" ],
            [ "<a href='/user/customer'>Customer 1</a>", "<a href='/user/customer'>Vs 47</a>", "<a href='/user/customer'>2334346644</a>", "<div class='activation_btn'>0</div>" ],
            [ "<a href='/user/customer'>Customer 1</a>", "<a href='/user/customer'>Vs 47</a>", "<a href='/user/customer'>2334346645</a>", "<div class='activation_btn clicked'>1</div>" ],
            [ "<a href='/user/customer'>Customer 2</a>", "<a href='/user/customer'>FS 127</a>", "<a href='/user/customer'>2334346643</a>", "<div class='activation_btn clicked'>1</div>" ],
            [ "<a href='/user/customer'>Customer 3</a>", "<a href='/user/customer'>HB 32</a>", "<a href='/user/customer'>2335469950</a>", "<div class='activation_btn'>0</div>"],      
        ];

        var tableOne = $('#customers_table').DataTable( {
            data: dataSet,
            columns: [
            { title: "Title" },
            { title: "Unit" },
            { title: "Serial Number" },
            { title: "Smart Activation" },
            ],
        });

        $(".activation_btn").click(function() {
            $(this).toggleClass("clicked");
            let btn = $(this);
            let curValue = btn.val();
            let newValue = curValue == 0 ? 1 : 0;
            btn.val(newValue);            
        });

        // Use the CSRF token in the headers of your Ajax request
        // $.ajaxSetup({
        //     headers: {
        //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //     }
        // });

        // $.ajax({
        //     url: '/user/customers',
        //     method: 'POST',
        //     // data: postData,
        //     success: function (data) {
        //         console.log(data);

        //     },
        //     error: function (error) {
        //         console.error('Error getting Customers request:', error);
        //     }
        // });


    })(jQuery);

</script>

@endsection