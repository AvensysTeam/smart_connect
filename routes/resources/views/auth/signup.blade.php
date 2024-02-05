
  <!-- Setting Panel -->
  <div class="ms-toggler ms-settings-toggle ms-d-block-lg">
    <i class="flaticon-paint"></i>
  </div>
  <div class="ms-settings-panel ms-d-block-lg">
    <div class="row">

      <div class="col-xl-4 col-md-4">
        <h4 class="section-title">Customize</h4>
        <div>
          <label class="ms-switch">
             <input type="checkbox" id="dark-mode">
             <span class="ms-switch-slider round"></span>
           </label>
          <span>Light Mode</span>
        </div>
        <div>
          <label class="ms-switch">
             <input type="checkbox" id="remove-quickbar">
             <span class="ms-switch-slider round"></span>
           </label>
          <span> Remove Quickbar </span>
        </div>
      </div>
      <div class="col-xl-4 col-md-4">
        <h4 class="section-title">Keyboard Shortcuts</h4>
        <p class="ms-directions mb-0"><code>Esc</code> Close Quick Bar</p>
        <p class="ms-directions mb-0"><code>Alt + (1 -> 6)</code> Open Quick Bar Tab</p>
        <p class="ms-directions mb-0"><code>Alt + Q</code> Enable Quick Bar Configure Mode</p>

      </div>

    </div>
  </div>
@extends('layouts.app')
@section('content')
  <!-- Preloader -->
  <div id="preloader-wrap">
    <div class="spinner spinner-8">
      <div class="ms-circle1 ms-child"></div>
      <div class="ms-circle2 ms-child"></div>
      <div class="ms-circle3 ms-child"></div>
      <div class="ms-circle4 ms-child"></div>
      <div class="ms-circle5 ms-child"></div>
      <div class="ms-circle6 ms-child"></div>
      <div class="ms-circle7 ms-child"></div>
      <div class="ms-circle8 ms-child"></div>
      <div class="ms-circle9 ms-child"></div>
      <div class="ms-circle10 ms-child"></div>
      <div class="ms-circle11 ms-child"></div>
      <div class="ms-circle12 ms-child"></div>
    </div>
  </div>

  <!-- Overlays -->
  <div class="ms-aside-overlay ms-overlay-left ms-toggler" data-target="#ms-side-nav" data-toggle="slideLeft"></div>
  <div class="ms-aside-overlay ms-overlay-right ms-toggler" data-target="#ms-recent-activity" data-toggle="slideRight"></div>

  <!-- Sidebar Navigation Left -->
  <aside id="ms-side-nav" class="side-nav fixed ms-aside-scrollable ms-aside-left">

    <!-- Logo -->
    <div class="logo-sn ms-d-block-lg">
      <a class="pl-0 ml-0 text-center" href="../dashboard/index.html"> <img src="../../assets/img/mylo-logo-5A.png" alt="logo"> </a>
    </div>

    <!-- Navigation -->
    <ul class="accordion ms-main-aside fs-14" id="side-nav-accordion">
        <!-- Dashboard -->
        <li class="menu-item">
            <a href="#" class="has-chevron" data-toggle="collapse" data-target="#dashboard" aria-expanded="false" aria-controls="dashboard">
               <span><i class="material-icons fs-16">dashboard</i>Dashboard </span>
             </a>
            <ul id="dashboard" class="collapse" aria-labelledby="dashboard" data-parent="#side-nav-accordion">
              <li> <a href="../dashboard/index.html">Project Management</a> </li>
              <li> <a href="../dashboard/client-management.html"> Client Management </a> </li>
              <li> <a href="../dashboard/social-media.html">Social Media</a> </li>
              <li> <a href="../dashboard/cryptocurrency.html">Crypto Currency</a> </li>
              <li> <a href="../dashboard/web-analytics.html">Web Analytics</a> </li>
            </ul>
        </li>
        <!-- /Dashboard -->
        <li class="menu-item">
          <a href="../widgets.html">
            <span><i class="material-icons fs-16">widgets</i>Widgets</span>
          </a>
        </li>
        <!-- Basic UI Elements -->
        <li class="menu-item">
            <a href="#" class="has-chevron" data-toggle="collapse" data-target="#basic-elements" aria-expanded="false" aria-controls="basic-elements">
              <span><i class="material-icons fs-16">filter_list</i>Basic UI Elements</span>
            </a>
            <ul id="basic-elements" class="collapse" aria-labelledby="basic-elements" data-parent="#side-nav-accordion">
              <li> <a href="../ui-basic/accordions.html">Accordions</a> </li>
              <li> <a href="../ui-basic/alerts.html">Alerts</a> </li>
              <li> <a href="../ui-basic/buttons.html">Buttons</a> </li>
              <li> <a href="../ui-basic/breadcrumbs.html">Breadcrumbs</a> </li>
              <li> <a href="../ui-basic/badges.html">Badges</a> </li>
              <li> <a href="../ui-basic/cards.html">Cards</a> </li>
              <li> <a href="../ui-basic/progress-bars.html">Progress Bars</a> </li>
              <li> <a href="../ui-basic/preloaders.html">Pre-loaders</a> </li>
              <li> <a href="../ui-basic/pagination.html">Pagination</a> </li>
              <li> <a href="../ui-basic/tabs.html">Tabs</a> </li>

              <li> <a href="../ui-basic/typography.html">Typography</a> </li>
            </ul>
        </li>
        <!-- /Basic UI Elements -->
        <!-- Advanced UI Elements -->
        <li class="menu-item">
            <a href="#" class="has-chevron" data-toggle="collapse" data-target="#advanced-elements" aria-expanded="false" aria-controls="advanced-elements">
              <span><i class="material-icons fs-16">code</i>Advanced UI Elements</span>
            </a>
            <ul id="advanced-elements" class="collapse" aria-labelledby="advanced-elements" data-parent="#side-nav-accordion">
              <li> <a href="../ui-advanced/draggables.html">Draggables</a> </li>
              <li> <a href="../ui-advanced/sliders.html">Sliders</a> </li>
              <li> <a href="../ui-advanced/modals.html">Modals</a> </li>
              <li> <a href="../ui-advanced/rating.html">Rating</a> </li>
              <li> <a href="../ui-advanced/tour.html">Tour</a> </li>
              <li> <a href="../ui-advanced/cropper.html">Cropper</a> </li>
              <li> <a href="../ui-advanced/range-slider.html">Range Slider</a> </li>
            </ul>
        </li>
        <!-- /Advanced UI Elements -->
        <li class="menu-item">
            <a href="../animation.html">
              <span><i class="material-icons fs-16">format_paint</i>Animations</span>
            </a>
        </li>
        <!-- Form Elements -->
        <li class="menu-item">
            <a href="#" class="has-chevron" data-toggle="collapse" data-target="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <span><i class="material-icons fs-16">input</i>Form Elements</span>
            </a>
            <ul id="form-elements" class="collapse" aria-labelledby="form-elements" data-parent="#side-nav-accordion">
              <li> <a href="../form/form-elements.html">Form Elements</a> </li>
              <li> <a href="../form/form-layout.html">Form Layouts</a> </li>
              <li> <a href="../form/form-validation.html">Form Validation</a> </li>
              <li> <a href="../form/form-wizard.html">Form Wizard</a> </li>
            </ul>
        </li>
        <!-- /Form Elements -->
        <!-- Charts -->
        <li class="menu-item">
            <a href="#" class="has-chevron" data-toggle="collapse" data-target="#charts" aria-expanded="false" aria-controls="charts">
              <span><i class="material-icons fs-16">equalizer</i>Charts</span>
            </a>
            <ul id="charts" class="collapse" aria-labelledby="charts" data-parent="#side-nav-accordion">
              <li> <a href="../charts/chartjs.html">Chart JS</a> </li>
              <li> <a href="../charts/morris-charts.html">Morris Chart</a> </li>
            </ul>
        </li>
        <!-- /Charts -->
        <!-- Tables -->
        <li class="menu-item">
            <a href="#" class="has-chevron" data-toggle="collapse" data-target="#tables" aria-expanded="false" aria-controls="tables">
              <span><i class="material-icons fs-16">tune</i>Tables</span>
            </a>
            <ul id="tables" class="collapse" aria-labelledby="tables" data-parent="#side-nav-accordion">
              <li> <a href="../tables/basic-tables.html">Basic Tables</a> </li>
              <li> <a href="../tables/data-tables.html">Data tables</a> </li>
            </ul>
        </li>
        <!-- /Tables -->
        <!-- Popups -->
        <li class="menu-item">
            <a href="#" class="has-chevron" data-toggle="collapse" data-target="#popups" aria-expanded="false" aria-controls="popups">
              <span><i class="material-icons fs-16">message</i>Popups</span>
            </a>
            <ul id="popups" class="collapse" aria-labelledby="popups" data-parent="#side-nav-accordion">
              <li> <a href="../popups/sweet-alerts.html">Sweet Alerts</a> </li>
              <li> <a href="../popups/toast.html">Toast</a> </li>
            </ul>
        </li>
        <!-- /Popups -->
        <!-- Icons -->
        <li class="menu-item">
            <a href="#" class="has-chevron" data-toggle="collapse" data-target="#icons" aria-expanded="false" aria-controls="icons">
              <span><i class="material-icons fs-16">border_color</i>Icons</span>
            </a>
            <ul id="icons" class="collapse" aria-labelledby="icons" data-parent="#side-nav-accordion">
              <li> <a href="../icons/fontawesome.html">Fontawesome</a> </li>
              <li> <a href="../icons/flaticons.html">Flaticons</a> </li>
              <li> <a href="../icons/materialize.html">Materialize</a> </li>
            </ul>
        </li>
        <!-- /Icons -->
        <!-- Maps -->
        <li class="menu-item">
            <a href="#" class="has-chevron" data-toggle="collapse" data-target="#maps" aria-expanded="false" aria-controls="maps">
              <span><i class="material-icons fs-16">map</i>Maps</span>
            </a>
            <ul id="maps" class="collapse" aria-labelledby="maps" data-parent="#side-nav-accordion">
              <li> <a href="../maps/google-maps.html">Google Maps</a> </li>
              <li> <a href="../maps/vector-maps.html">Vector Maps</a> </li>
            </ul>
        </li>
        <!-- /Maps -->
        <!-- Pages -->
        <li class="menu-item">
          <a href="#" class="has-chevron" data-toggle="collapse" data-target="#pages" aria-expanded="false" aria-controls="pages">
            <span><i class="material-icons fs-16">insert_drive_file</i>Pages</span>
          </a>
          <ul id="pages" class="collapse" aria-labelledby="pages" data-parent="#side-nav-accordion">
            <li class="menu-item">
              <a href="#" class="has-chevron" data-toggle="collapse" data-target="#authentication" aria-expanded="false" aria-controls="authentication">Authentication</a>
              <ul id="authentication" class="collapse" aria-labelledby="authentication" data-parent="#pages">
                <li> <a href="../prebuilt-pages/default-login.html">Default Login</a> </li>
                <li> <a href="../prebuilt-pages/modal-login.html">Modal Login</a> </li>
                <li> <a href="../prebuilt-pages/default-register.html">Default Registration</a> </li>
                <li> <a href="../prebuilt-pages/modal-register.html">Modal Registration</a> </li>
                <li> <a href="../prebuilt-pages/lock-screen.html">Lock Screen</a> </li>
              </ul>
            </li>
            <li> <a href="../prebuilt-pages/coming-soon.html">Coming Soon</a> </li>
            <li> <a href="../prebuilt-pages/error.html">Error Page</a> </li>
            <li class="menu-item"> <a href="../prebuilt-pages/faq.html"> FAQ </a> </li>
            <li class="menu-item"> <a href="../prebuilt-pages/portfolio.html"> Portfolio </a> </li>
            <li class="menu-item"> <a href="../prebuilt-pages/user-profile.html"> User Profile </a> </li>
            <li class="menu-item"> <a href="../prebuilt-pages/invoice.html"> Invoice </a> </li>

          </ul>
        </li>
        <!-- /Pages -->
        <!-- Apps -->
        <li class="menu-item">
          <a href="#" class="has-chevron" data-toggle="collapse" data-target="#apps" aria-expanded="false" aria-controls="apps">
            <span><i class="material-icons fs-16">phone_iphone</i>Apps</span>
          </a>
          <ul id="apps" class="collapse" aria-labelledby="apps" data-parent="#side-nav-accordion">
            <li> <a href="../apps/chat.html">Chat</a> </li>
            <li> <a href="../apps/email.html">Email</a> </li>
            <li> <a href="../apps/to-do-list.html">To-do List</a> </li>
          </ul>
        </li>
        <!-- /Apps -->
    </ul>

  </aside>

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
        <li class="ms-nav-item">
          <a href="#" class="btn btn-primary mt-0">Login</a>
        </li>
      </ul>

      <div class="ms-toggler ms-d-block-sm pr-0 ms-nav-toggler" data-toggle="slideDown" data-target="#ms-nav-options">
        <span class="ms-toggler-bar bg-primary"></span>
        <span class="ms-toggler-bar bg-primary"></span>
        <span class="ms-toggler-bar bg-primary"></span>
      </div>

    </nav>

    <!-- Body Content Wrapper -->
    <div class="ms-content-wrapper ms-auth">

      <div class="ms-auth-container">
        <div class="ms-auth-col">
          <div class="ms-auth-bg"></div>
        </div>
        <div class="ms-auth-col">
          <div class="ms-auth-form">
            <form method="post" action="{{ route('user.signup') }}">
              @csrf
              <h1>Create Account</h1>
              <p>Please enter personal information to continue</p>
              <div class="form-row">
                <div class="col-md-6 ">
                  <label for="validationCustom01">First name</label>
                  <div class="input-group">
                    <input type="text" class="form-control" id="validationCustom01" placeholder="First name" name="first_name" required="">
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                </div>
                <div class="col-md-6 ">
                  <label for="validationCustom02">Last name</label>
                  <div class="input-group">
                    <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" name="last_name" required="">
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-12 ">
                  <label for="validationCustom03">Email Address</label>
                  <div class="input-group">
                    <input type="email" class="form-control" id="validationCustom03" placeholder="Email Address" name="email" required="">
                    <div class="invalid-feedback">
                      Please provide a valid email.
                    </div>
                  </div>
                </div>
                <div class="col-md-12 ">
                  <label for="validationCustom04">Password</label>
                  <div class="input-group">
                    <input type="password" class="form-control" id="validationCustom04" placeholder="Password" name="password" required="">
                    <div class="invalid-feedback">
                      Please provide a password.
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="form-check pl-0">
                  <label class="ms-checkbox-wrap">
                    <input class="form-check-input" type="checkbox" name="terms" id="invalidCheck" required="">
                    <i class="ms-checkbox-check"></i>
                  </label>
                  <span> Agree to terms and conditions </span>
                </div>
              </div>
              <button class="btn btn-primary mt-4 d-block w-100" type="submit">Create Account</button>
              
              <p class="mb-0 mt-3 text-center">Already have an account? <a class="btn-link" href="/login">Login</a> </p>
            </form>

          </div>
        </div>
      </div>

    </div>

  </main>

@endsection