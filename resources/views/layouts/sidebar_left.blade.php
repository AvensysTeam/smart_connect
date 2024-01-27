 <!-- Sidebar Navigation Left -->
 <aside id="ms-side-nav" class="side-nav fixed ms-aside-scrollable ms-aside-left">

<!-- Logo -->
<div class="logo-sn ms-d-block-lg">
  <a class="pl-0 ml-0 text-center" href="pages/dashboard/index.html"> <img src="{{asset('assets/img/logo.png')}}" alt="logo"> </a>
</div>

<!-- Navigation -->
<ul class="accordion ms-main-aside fs-14" id="side-nav-accordion">
    <!-- Dashboard -->
    <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#dashboard" aria-expanded="false" aria-controls="dashboard">
           <span><i class="material-icons fs-16">dashboard</i>Dashboard </span>
         </a>
        <ul id="dashboard" class="collapse" aria-labelledby="dashboard" data-parent="#side-nav-accordion">
          <li> <a href="pages/dashboard/index.html">Project Management</a> </li>
          <li> <a href="pages/dashboard/client-management.html"> Client Management </a> </li>
          <li> <a href="pages/dashboard/social-media.html">Social Media</a> </li>
          <li> <a href="pages/dashboard/cryptocurrency.html">Crypto Currency</a> </li>
          <li> <a href="pages/dashboard/web-analytics.html">Web Analytics</a> </li>
        </ul>
    </li>
    <!-- /Dashboard -->
    <li class="menu-item">
      <a href="/user/mqtt">
        <span><i class="material-icons fs-16">widgets</i>MQTT4</span>
      </a>
    </li>

    <li class="menu-item">
        <a href="{{ Route('user.customers') }}">
          <span><i class="material-icons fs-16">format_paint</i>Customer Manager</span>
        </a>
    </li>
    <li class="menu-item">
        <a href="{{ Route('user.signout') }}">
          <span><i class="flaticon-shut-down fs-16"></i>Logout</span>
        </a>
    </li>
    <!-- Form Elements -->
    <!-- <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#form-elements" aria-expanded="false" aria-controls="form-elements">
          <span><i class="material-icons fs-16">input</i>Form Elements</span>
        </a>
        <ul id="form-elements" class="collapse" aria-labelledby="form-elements" data-parent="#side-nav-accordion">
          <li> <a href="pages/form/form-elements.html">Form Elements</a> </li>
          <li> <a href="pages/form/form-layout.html">Form Layouts</a> </li>
          <li> <a href="pages/form/form-validation.html">Form Validation</a> </li>
          <li> <a href="pages/form/form-wizard.html">Form Wizard</a> </li>
        </ul>
    </li> -->
    <!-- /Form Elements -->
    <!-- Charts -->
    <!-- <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#charts" aria-expanded="false" aria-controls="charts">
          <span><i class="material-icons fs-16">equalizer</i>Charts</span>
        </a>
        <ul id="charts" class="collapse" aria-labelledby="charts" data-parent="#side-nav-accordion">
          <li> <a href="pages/charts/chartjs.html">Chart JS</a> </li>
          <li> <a href="pages/charts/morris-charts.html">Morris Chart</a> </li>
        </ul>
    </li> -->
    <!-- /Charts -->

</ul>


</aside>