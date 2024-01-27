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
  <script src="{{asset('assets/js/Chart.bundle.min.js')}}"> </script>
  <!-- Aven  -->
  <script>
    var stopImagePathleft = "{{ asset('assets/images/fan_li.png') }}";
    var stopImagePathright = "{{ asset('assets/images/fan_ri.png') }}";
    var startImagePathleft = "{{ asset('assets/images/fan_l.gif') }}";
    var startImagePathright = "{{ asset('assets/images/fan_r.gif') }}";
  </script>
  <script src="{{asset('assets/js/aven.js')}}"></script>
  
</head>

<body class="ms-body ms-aside-left-open">

  @include('layouts.setting')
  @include('layouts.sidebar_left')
  @include('layouts.sidebar_right')

  @yield('content')



  <!-- SCRIPTS -->

  <script src="{{ asset('assets/js/data-tables.js')}}"> </script>
  <script src="{{asset('assets/js/Chart.bundle.min.js')}}"> </script>
  <script src="{{asset('assets/js/project-management.js')}}"> </script>
  <!-- Page Specific Scripts Finish -->

  <!-- mylo core JavaScript -->
  <script src="{{asset('assets/js/framework.js')}}"></script>
 

  <!-- Settings -->
  <script src="{{asset('assets/js/settings.js')}}"></script>


</body>

</html>
