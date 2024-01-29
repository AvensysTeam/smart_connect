<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Mylo Dashboard</title>
  <!-- Iconic Fonts -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('assets/iconic-fonts/flat-icons/flaticon.css')}}">
  <!-- Bootstrap core CSS -->
  <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- jQuery UI -->
  <link href="{{asset('assets/css/jquery-ui.min.css')}}" rel="stylesheet">
  <!-- mylo styles -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
  <!-- Aven style -->
  <link href="{{asset('assets/css/aven.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/0.8.2/css/flag-icon.min.css">
  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="32x32" href="{{asset('M-favicon.png')}}">

  <meta name="csrf-token" content="{{ csrf_token() }}">
  
  <!-- Global Required Scripts Start -->
  <script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('assets/js/popper.min.js')}}"></script>
  <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/js/perfect-scrollbar.js')}}"> </script>
  <script src="{{asset('assets/js/jquery-ui.min.js')}}"> </script>
  <!-- Global Required Scripts End -->

  <!-- Page Specific Scripts Start -->
  <script src="{{ asset('assets/js/datatables.min.js')}}"> </script>
  <script src="{{asset('assets/js/raphael.min.js')}}"> </script>
  <script src="{{asset('assets/js/morris.min.js')}}"> </script>
  <script src="{{asset('assets/js/morris-charts.js')}}"> </script>
  <!-- Aven  -->
  <script>
    var stopImagePathleft = "{{ asset('assets/images/fan_li.png') }}";
    var stopImagePathright = "{{ asset('assets/images/fan_ri.png') }}";
    var startImagePathleft = "{{ asset('assets/images/fan_l.gif') }}";
    var startImagePathright = "{{ asset('assets/images/fan_r.gif') }}";
  </script>
  <script src="{{asset('assets/js/aven.js')}}"></script>

  <!-- datepicker -->
  <script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>
  <link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css" />

  <style>
    .flag-item{
      display: block;
      padding: 2px 5px;
    }
    .dropdown-flag{
      /* width: 45px !important; */
      min-width: 0px !important;
      left: 19px !important;
      padding: 0px !important;
      margin-top: -10px !important;
    }
    .
  </style>
</head>

<body class="ms-body ms-aside-left-open">

  @include('layouts.setting')
  @include('layouts.sidebar_left')
  @include('layouts.sidebar_right')

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
            <li class="ms-nav-item dropdown">
              <span style="margin-right:-50px;">Language</span>
            </li>
            <li class="ms-nav-item dropdown">
                @foreach($langs as $item)
                <a href="#" class="text-disabled" id="mailDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @if(session('lang') == $item->code) 
                        <span class="flag-icon flag-icon-{{ strtolower($item->country_flag) }}"></span>
                    @endif
                </a>
                @endforeach                        
                <ul class="dropdown-menu dropdown-flag" aria-labelledby="mailDropdown">
                    @foreach($langs as $item)
                    <a href="javascript:void(0)" class="flag-item langSel" data-code="{{ $item->code }}" @if(session('lang') == $item->code) id="selected-lang" @endif >
                        <span class="flag-icon flag-icon-{{ strtolower($item->country_flag) }}"></span>
                    </a> 
                    @endforeach
                </ul>
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

      @yield('content')
      
  </main>
  <script>
    $(".langSel").on("click", function() {
        var code = $(this).data('code');
        window.location.href = "/user/languages/change/"+code;
    
    });
  </script>

  <!-- SCRIPTS -->

  <script src="{{ asset('assets/js/data-tables.js')}}"> </script>
  <!-- <script src="{{asset('assets/js/Chart.bundle.min.js')}}"> </script> -->
  <script src="{{asset('assets/js/project-management.js')}}"> </script>
  <!-- Page Specific Scripts Finish -->

  <!-- mylo core JavaScript -->
  <script src="{{asset('assets/js/framework.js')}}"></script>
 

  <!-- Settings -->
  <script src="{{asset('assets/js/settings.js')}}"></script>

 
</body>

</html>
