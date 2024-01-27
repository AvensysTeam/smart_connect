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
        <a class="pl-0 ml-0 text-center navbar-brand mr-0" href="../dashboard/index.html"><img src="assets/img/m-logo-1.png" alt="logo"> </a>
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
                  <img src="assets/img/project-management/people-5.jpg" class="ms-img-round" alt="people">
                </div>
                <div class="media-body">
                  <span>Hey man, looking forward to your new project.</span>
                  <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 30 seconds ago</p>
                </div>
              </a>
              <a class="media p-2" href="#">
                <div class="ms-chat-status ms-status-online ms-chat-img mr-2 align-self-center">
                  <img src="assets/img/project-management/people-12.jpg" class="ms-img-round" alt="people">
                </div>
                <div class="media-body">
                  <span>Dear John, I was told you bought mylo! Send me your feedback</span>
                  <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 28 minutes ago</p>
                </div>
              </a>
              <a class="media p-2" href="#">
                <div class="ms-chat-status ms-status-offline ms-chat-img mr-2 align-self-center">
                  <img src="assets/img/project-management/people-12.jpg" class="ms-img-round" alt="people">
                </div>
                <div class="media-body">
                  <span>How many people are we inviting to the dashboard?</span>
                  <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 6 hours ago</p>
                </div>
              </a>
            </li>
            <li class="dropdown-divider"></li>
            <li class="dropdown-menu-footer text-center">
              <a href="pages/apps/email.html">Go to Inbox</a>
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
          <a href="#"  id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img class="ms-user-img ms-img-round float-right" src="assets/img/project-management/people-5.jpg" alt="people"> </a>
          <ul class="dropdown-menu dropdown-menu-right user-dropdown" aria-labelledby="userDropdown">
            <li class="dropdown-menu-header">
              <h6 class="dropdown-header ms-inline m-0"><span class="text-disabled">Welcome, Farisha</span></h6>
            </li>
            <li class="dropdown-divider"></li>
            <li class="ms-dropdown-list">
              <a class="media fs-14 p-2" href="pages/prebuilt-pages/user-profile.html"> <span><i class="flaticon-user mr-2"></i> Profile</span> </a>
              <a class="media fs-14 p-2" href="pages/apps/email.html"> <span><i class="flaticon-mail mr-2"></i> Inbox</span> <span class="badge badge-pill badge-info">3</span> </a>
              <a class="media fs-14 p-2" href="pages/prebuilt-pages/user-profile.html"> <span><i class="flaticon-gear mr-2"></i> Account Settings</span> </a>
            </li>
            <li class="dropdown-divider"></li>
            <li class="dropdown-menu-footer">
              <a class="media fs-14 p-2" href="pages/prebuilt-pages/lock-screen.html"> <span><i class="flaticon-security mr-2"></i> Lock</span> </a>
            </li>
            <li class="dropdown-menu-footer">
              <a class="media fs-14 p-2" href="pages/prebuilt-pages/default-login.html"> <span><i class="flaticon-shut-down mr-2"></i> Logout</span> </a>
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

        <div class="col-xl-3 col-md-6">
          <div class="ms-card card-gradient-success ms-widget ms-infographics-widget">
            <div class="ms-card-body media">
              <div class="media-body">
                <h6>Total Subscriptions</h6>
                <p class="ms-card-change"> <i class="material-icons">arrow_upward</i> 4567</p>
                <p class="fs-12">48% From Last 24 Hours</p>
              </div>
            </div>
            <i class="flaticon-statistics"></i>
          </div>
        </div>

        <div class="col-xl-3 col-md-6">
          <div class="ms-card card-gradient-secondary ms-widget ms-infographics-widget">
            <div class="ms-card-body media">
              <div class="media-body">
                <h6>Budgets</h6>
                <p class="ms-card-change"> $80,950</p>
                <p class="fs-12">2% Decreased from last budget</p>
              </div>
            </div>
            <i class="flaticon-stats"></i>
          </div>
        </div>

        <div class="col-xl-3 col-md-6">
          <div class="ms-card card-gradient-warning ms-widget ms-infographics-widget">
            <div class="ms-card-body media">
              <div class="media-body">
                <h6>Total Users</h6>
                <p class="ms-card-change"> <i class="material-icons">arrow_upward</i> 4567</p>
                <p class="fs-12">48% From Last 24 Hours</p>
              </div>
            </div>
            <i class="flaticon-user"></i>
          </div>
        </div>

        <div class="col-xl-3 col-md-6">
          <div class="ms-card card-gradient-info ms-widget ms-infographics-widget">
            <div class="ms-card-body media">
              <div class="media-body">
                <h6>Conversions</h6>
                <p class="ms-card-change"> $80,950</p>
                <p class="fs-12">2% Decreased from last budget</p>
              </div>
            </div>
            <i class="flaticon-reuse"></i>
          </div>
        </div>

        <div class="col-xl-6 col-md-12">
          <div class="ms-panel">
            <div class="ms-panel-header">
              <h6>Recent Buyers</h6>
            </div>
            <div class="ms-panel-body p-0">
              <div class="table-responsive">
                <table class="table table-hover thead-light">
                  <thead>
                    <tr>
                      <th scope="col">User</th>
                      <th scope="col">Service</th>
                      <th scope="col">Product ID</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="ms-table-f-w"> <img src="assets/img/project-management/people-5.jpg" alt="people"> Chihoo Hwang </td>
                      <td>Wordpress Template</td>
                      <td>67384917</td>
                    </tr>
                    <tr>
                      <td class="ms-table-f-w"> <img src="assets/img/project-management/people-3.jpg" alt="people"> Ajay Suryavanash </td>
                      <td>Business Card</td>
                      <td>789393819</td>
                    </tr>
                    <tr>
                      <td class="ms-table-f-w"> <img src="assets/img/project-management/people-7.jpg" alt="people"> John Doe </td>
                      <td>App Customization</td>
                      <td>137893137</td>
                    </tr>
                    <tr>
                      <td class="ms-table-f-w"> <img src="assets/img/project-management/people-11.jpg" alt="people"> Alesdro Guitto </td>
                      <td>Dashboard Design</td>
                      <td>235193138</td>
                    </tr>
                    <tr>
                      <td class="ms-table-f-w"> <img src="assets/img/project-management/people-12.jpg" alt="people"> Manbir Sahwny </td>
                      <td>Theme Development</td>
                      <td>19938917</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-6 col-md-12">
          <div class="ms-panel ms-panel-fh">
            <div class="ms-panel-header">
              <h6>Project Timeline</h6>
            </div>
            <div class="ms-panel-body">
              <ul class="ms-activity-log">
               <li>
                 <div class="ms-btn-icon btn-pill icon btn-success">
                   <i class="flaticon-tick-inside-circle"></i>
                 </div>
                 <h6>Lorem ipsum dolor sit</h6>
                 <span> <i class="material-icons">event</i>1 January, 2022</span>
                 <p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, ula in sodales vehicula....</p>
               </li>
               <li>
                 <div class="ms-btn-icon btn-pill icon btn-danger">
                   <i class="flaticon-alert-1"></i>
                 </div>
                 <h6>Lorem ipsum dolor sit</h6>
                 <span> <i class="material-icons">event</i>1 March, 2022</span>
                 <p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, ula in sodales vehicula....</p>
               </li>
             </ul>
            </div>
          </div>
        </div>

        <div class="col-xl-7 col-md-12">
          <div class="ms-panel ms-panel-fh">
            <div class="ms-panel-header header-mini">
              <div class="d-flex justify-content-between">
                <div>
                  <h6>Project Sales</h6>
                  <p>Monitor how much sales your product does</p>
                </div>
                <div class="btn-group btn-group-toggle ms-graph-metrics" data-toggle="buttons">
                  <label class="btn btn-sm btn-outline-primary active day">
                    <input type="radio" checked=""> Day
                  </label>
                  <label class="btn btn-sm btn-outline-primary month">
                    <input type="radio"> Month
                  </label>
                  <label class="btn btn-sm btn-outline-primary year">
                    <input type="radio"> Year
                  </label>
                </div>
              </div>
              <div class="d-flex justify-content-between ms-graph-meta">
                <div class="ms-graph-labels">
                  <span class="ms-graph-decrease"></span> <p>Traffic</p>
                  <span class="ms-graph-regular"></span> <p>Sales</p>
                </div>
              </div>
            </div>
            <div class="ms-panel-body">
              <canvas id="pm-chart"></canvas>
            </div>
          </div>
        </div>

        <div class="col-xl-5 col-md-12">
          <div class="ms-panel">
            <div class="ms-panel-header">
              <h6>most sellings projects</h6>
            </div>
            <div class="ms-panel-body">
              <span class="progress-label">HTML & CSS Projects</span><span class="progress-status">83%</span>
              <div class="progress progress-tiny">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 83%" aria-valuenow="83" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <span class="progress-label">Wordpress Projects</span><span class="progress-status">50%</span>
              <div class="progress progress-tiny">
                <div class="progress-bar bg-secondary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <span class="progress-label">PSD Projects</span><span class="progress-status">75%</span>
              <div class="progress progress-tiny">
                <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <span class="progress-label">Code Snippets</span><span class="progress-status">92%</span>
              <div class="progress progress-tiny">
                <div class="progress-bar bg-danger" role="progressbar" style="width: 92%" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>

          <div class="ms-panel">
            <div class="ms-panel-header">
              <h6>Top Sales</h6>
              <p>Your highest selling projects</p>
            </div>
            <div class="ms-panel-body p-0">
              <div class="ms-quick-stats">
                <div class="ms-stats-grid">
                  <p class="ms-text-success">+47.18%</p>
                  <p class="ms-text-dark">8,033</p>
                  <span>Admin Dashboard</span>
                </div>
                <div class="ms-stats-grid">
                  <p class="ms-text-success">+17.24%</p>
                  <p class="ms-text-dark">6,039</p>
                  <span>Wordpress Theme</span>
                </div>
              </div>
            </div>
          </div>

        </div>

        <div class="col-md-12">
          <div class="ms-panel">
            <div class="ms-panel-header">
              <h6>Latest Projects</h6>
              <p>Some of your latest works</p>
            </div>
            <div class="ms-panel-body">
              <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                  <div class="ms-card">
                    <div class="ms-card-body">
                      <div class="media fs-14">
                        <div class="mr-2 align-self-center">
                          <img src="assets/img/project-management/people-12.jpg" class="ms-img-round" alt="people">
                        </div>
                        <div class="media-body">
                          <h6>John Doe </h6>
                          <div class="dropdown float-right">
                            <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="material-icons">more_vert</i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                              <li class="ms-dropdown-list">
                                <a class="media p-2" href="#">
                                  <div class="media-body">
                                    <span>Comment</span>
                                  </div>
                                </a>
                                <a class="media p-2" href="#">
                                  <div class="media-body">
                                    <span>Share</span>
                                  </div>
                                </a>
                                <a class="media p-2" href="#">
                                  <div class="media-body">
                                    <span>Favorite</span>
                                  </div>
                                </a>
                              </li>
                            </ul>
                          </div>
                          <p class="fs-12 my-1 text-disabled">30 seconds ago</p>
                        </div>

                      </div>
                      <h6>This is a project name</h6>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nunc velit, dictum eget nulla a, sollicitudin rhoncus orci. Vivamus nec commodo turpis.</p>
                    </div>
                    <div class="ms-card-img">
                      <img src="assets/img/project-management/misc-11.jpg" alt="card_img">
                    </div>
                    <div class="ms-card-footer text-disabled d-flex">
                      <div class="ms-card-options">
                        <i class="material-icons">favorite</i> 982
                      </div>
                      <div class="ms-card-options">
                        <i class="material-icons">comment</i> 785
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                  <div class="ms-card">
                    <div class="ms-card-body">
                      <div class="media fs-14">
                        <div class="mr-2 align-self-center">
                          <img src="assets/img/project-management/people-12.jpg" class="ms-img-round" alt="people">
                        </div>
                        <div class="media-body">
                          <h6>John Doe </h6>
                          <div class="dropdown float-right">
                            <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="material-icons">more_vert</i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                              <li class="ms-dropdown-list">
                                <a class="media p-2" href="#">
                                  <div class="media-body">
                                    <span>Comment</span>
                                  </div>
                                </a>
                                <a class="media p-2" href="#">
                                  <div class="media-body">
                                    <span>Share</span>
                                  </div>
                                </a>
                                <a class="media p-2" href="#">
                                  <div class="media-body">
                                    <span>Favorite</span>
                                  </div>
                                </a>
                              </li>
                            </ul>
                          </div>
                          <p class="fs-12 my-1 text-disabled">30 seconds ago</p>
                        </div>

                      </div>
                      <h6>This is a project name</h6>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nunc velit, dictum eget nulla a, sollicitudin rhoncus orci. Vivamus nec commodo turpis.</p>
                    </div>
                    <div class="ms-card-img">
                      <img src="assets/img/project-management/misc-10.jpg" alt="card_img">
                    </div>
                    <div class="ms-card-footer text-disabled d-flex">
                      <div class="ms-card-options">
                        <i class="material-icons">favorite</i> 982
                      </div>
                      <div class="ms-card-options">
                        <i class="material-icons">comment</i> 785
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                  <div class="ms-card">
                    <div class="ms-card-body">
                      <div class="media fs-14">
                        <div class="mr-2 align-self-center">
                          <img src="assets/img/project-management/people-12.jpg" class="ms-img-round" alt="people">
                        </div>
                        <div class="media-body">
                          <h6>John Doe </h6>
                          <div class="dropdown float-right">
                            <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="material-icons">more_vert</i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                              <li class="ms-dropdown-list">
                                <a class="media p-2" href="#">
                                  <div class="media-body">
                                    <span>Comment</span>
                                  </div>
                                </a>
                                <a class="media p-2" href="#">
                                  <div class="media-body">
                                    <span>Share</span>
                                  </div>
                                </a>
                                <a class="media p-2" href="#">
                                  <div class="media-body">
                                    <span>Favorite</span>
                                  </div>
                                </a>
                              </li>
                            </ul>
                          </div>
                          <p class="fs-12 my-1 text-disabled">30 seconds ago</p>
                        </div>

                      </div>
                      <h6>This is a project name</h6>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nunc velit, dictum eget nulla a, sollicitudin rhoncus orci. Vivamus nec commodo turpis.</p>
                    </div>
                    <div class="ms-card-img">
                      <img src="assets/img/project-management/misc-9.jpg" alt="card_img">
                    </div>
                    <div class="ms-card-footer text-disabled d-flex">
                      <div class="ms-card-options">
                        <i class="material-icons">favorite</i> 982
                      </div>
                      <div class="ms-card-options">
                        <i class="material-icons">comment</i> 785
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

  </main>

  <!-- Quick bar -->
  <aside id="ms-quick-bar" class="ms-quick-bar fixed ms-d-block-lg">

    <ul class="nav nav-tabs ms-quick-bar-list" role="tablist">
      <li class="ms-quick-bar-item ms-has-qa" role="presentation" data-toggle="tooltip" data-placement="left" title="Launch Chat" data-title="Chat">
        <a href="#qa-chat" aria-controls="qa-chat" role="tab" data-toggle="tab">
          <i class="flaticon-chat"></i>
          <span class="ms-quick-bar-label">Chat</span>
        </a>
      </li>
      <li class="ms-quick-bar-item ms-has-qa" role="presentation" data-toggle="tooltip" data-placement="left" title="Launch Email" data-title="Email">
        <a href="#qa-email" aria-controls="qa-email" role="tab" data-toggle="tab">
          <i class="flaticon-mail"></i>
          <span class="ms-quick-bar-label">Email</span>
        </a>
      </li>
      <li class="ms-quick-bar-item ms-has-qa" role="presentation" data-toggle="tooltip" data-placement="left" title="Launch To-do-list" data-title="To-do-list">
        <a href="#qa-toDo" aria-controls="qa-toDo" role="tab" data-toggle="tab">
          <i class="flaticon-list"></i>
          <span class="ms-quick-bar-label">To-do</span>
        </a>
      </li>
      <li class="ms-quick-bar-item ms-has-qa" role="presentation" data-toggle="tooltip" data-placement="left" title="Launch Reminders" data-title="Reminders">
        <a href="#qa-reminder" aria-controls="qa-reminder" role="tab" data-toggle="tab">
          <i class="flaticon-bell"></i>
          <span class="ms-quick-bar-label">Reminder</span>
        </a>
      </li>
      <li class="ms-quick-bar-item ms-has-qa" role="presentation" data-toggle="tooltip" data-placement="left" title="Launch Notes" data-title="Notes">
        <a href="#qa-notes" aria-controls="qa-notes" role="tab" data-toggle="tab">
          <i class="flaticon-pencil"></i>
          <span class="ms-quick-bar-label">Notes</span>
        </a>
      </li>
      <li class="ms-quick-bar-item ms-has-qa" role="presentation" data-toggle="tooltip" data-placement="left" title="Invite Members" data-title="Invite Members">
        <a href="#qa-invite" aria-controls="qa-invite" role="tab" data-toggle="tab">
          <i class="flaticon-share-1"></i>
          <span class="ms-quick-bar-label">Invite</span>
        </a>
      </li>

    </ul>

    <div class="ms-configure-qa" data-toggle="tooltip" data-placement="left" title="Configure Quick Access">

      <a href="#">
        <i class="flaticon-hammer"></i>
        <span class="ms-quick-bar-label">Configure</span>
      </a>

    </div>

    <!-- Quick bar Content -->
    <div class="ms-quick-bar-content">

      <div class="ms-quick-bar-header clearfix">
        <h5 class="ms-quick-bar-title float-left">Title</h5>
        <button type="button" class="close ms-toggler" data-target="#ms-quick-bar" data-toggle="hideQuickBar" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>

      <div class="ms-quick-bar-body tab-content">
        <div role="tabpanel" class="tab-pane" id="qa-chat">

          <div class="ms-chat-container">

            <div class="ms-chat-header px-3">
              <div class="ms-chat-user-container media clearfix">
                <div class="ms-chat-status ms-status-online ms-chat-img mr-3 align-self-center">
                  <img src="assets/img/project-management/people-5.jpg" class="ms-img-round" alt="people">
                </div>
                <div class="media-body ms-chat-user-info mt-1">
                  <h6>Anny Farisha</h6>
                  <a href="#" class="text-disabled has-chevron fs-12" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Available
                  </a>
                  <ul class="dropdown-menu">
                    <li class="ms-dropdown-list">
                      <a class="media p-2" href="#">
                        <div class="media-body">
                          <span>Busy</span>
                        </div>
                      </a>
                      <a class="media p-2" href="#">
                        <div class="media-body">
                          <span>Away</span>
                        </div>
                      </a>
                      <a class="media p-2" href="#">
                        <div class="media-body">
                          <span>Offline</span>
                        </div>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <form class="ms-form my-3" method="post">
                <div class="ms-form-group my-0 mb-0 has-icon fs-14">
                  <input type="search" class="ms-form-input w-100" name="search" placeholder="Search for People and Groups" value="">
                  <i class="flaticon-search text-disabled"></i>
                </div>
              </form>
            </div>

            <div class="ms-chat-body">
              <ul class="nav nav-tabs tabs-bordered d-flex nav-justified px-3" role="tablist">
                <li role="presentation" class="fs-12"><a href="#chats" aria-controls="chats" class="active show" role="tab" data-toggle="tab"> Chats </a></li>
                <li role="presentation" class="fs-12"><a href="#groups" aria-controls="groups" role="tab" data-toggle="tab"> Groups </a></li>
                <li role="presentation" class="fs-12"><a href="#contacts" aria-controls="contacts" role="tab" data-toggle="tab"> Contacts </a></li>
              </ul>

              <div class="tab-content">
                <div role="tabpanel" class="tab-pane active show fade in" id="chats">
                  <ul class="ms-scrollable ms-quickbar-container">
                    <li class="ms-chat-user-container ms-open-chat ms-deletable p-3 media clearfix">
                      <div class="ms-chat-status ms-status-away ms-has-new-msg ms-chat-img mr-3 align-self-center">
                        <span class="msg-count">3</span>
                        <img src="assets/img/project-management/people-11.jpg" class="ms-img-round" alt="people">
                      </div>
                      <div class="media-body ms-chat-user-info mt-1">
                        <h6>James Zathila</h6> <span class="ms-chat-time">2 Hours ago</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                        <i class="flaticon-trash ms-delete-trigger"> </i>
                      </div>
                    </li>
                    <li class="ms-chat-user-container ms-open-chat ms-deletable p-3 media clearfix">
                      <div class="ms-chat-status ms-status-online ms-chat-img mr-3 align-self-center">
                        <img src="assets/img/project-management/people-10.jpg" class="ms-img-round" alt="people">
                      </div>
                      <div class="media-body ms-chat-user-info mt-1">
                        <h6>Raymart Sandiago</h6> <span class="ms-chat-time">3 Hours ago</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                        <i class="flaticon-trash ms-delete-trigger"> </i>
                      </div>
                    </li>
                    <li class="ms-chat-user-container ms-open-chat ms-deletable p-3 media clearfix">
                      <div class="ms-chat-status ms-status-offline ms-chat-img mr-3 align-self-center">
                        <img src="assets/img/project-management/people-8.jpg" class="ms-img-round" alt="people">
                      </div>
                      <div class="media-body ms-chat-user-info mt-1">
                        <h6>Heather Brown</h6> <span class="ms-chat-time">12 Hours ago</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                        <i class="flaticon-trash ms-delete-trigger"> </i>
                      </div>
                    </li>
                    <li class="ms-chat-user-container ms-open-chat ms-deletable p-3 media clearfix">
                      <div class="ms-chat-status ms-status-busy ms-chat-img mr-3 align-self-center">
                        <img src="assets/img/project-management/people-7.jpg" class="ms-img-round" alt="people">
                      </div>
                      <div class="media-body ms-chat-user-info mt-1">
                        <h6>Micheal John</h6> <span class="ms-chat-time">Yesterday</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                        <i class="flaticon-trash ms-delete-trigger"> </i>
                      </div>
                    </li>
                    <li class="ms-chat-user-container ms-open-chat ms-deletable p-3 media clearfix">
                      <div class="ms-chat-status ms-status-online ms-chat-img mr-3 align-self-center">
                        <img src="assets/img/project-management/people-12.jpg" class="ms-img-round" alt="people">
                      </div>
                      <div class="media-body ms-chat-user-info mt-1">
                        <h6>John Doe</h6> <span class="ms-chat-time">3 Days ago</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                        <i class="flaticon-trash ms-delete-trigger"> </i>
                      </div>
                    </li>
                  </ul>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="groups">
                  <ul class="ms-scrollable ms-quickbar-container">
                    <li class="ms-chat-user-container ms-open-chat p-3 media clearfix">
                      <div class="ms-chat-img mr-3 align-self-center">
                        <img src="assets/img/project-management/people-3.jpg" class="ms-img-round" alt="people">
                      </div>
                      <div class="media-body ms-chat-user-info mt-1">
                        <h6>James Zathila</h6> <a href="#" class="ms-chat-time"> <i class="flaticon-chat"></i> </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                        <ul class="ms-group-members clearfix mt-3 mb-0">
                          <li> <img src="assets/img/project-management/people-3.jpg" alt="member"> </li>
                          <li> <img src="assets/img/project-management/people-5.jpg" alt="member"> </li>
                          <li> <img src="assets/img/project-management/people-7.jpg" alt="member"> </li>
                          <li class="ms-group-count"> + 12 more </li>
                        </ul>
                      </div>
                    </li>
                    <li class="ms-chat-user-container ms-open-chat p-3 media clearfix">
                      <div class="ms-chat-img mr-3 align-self-center">
                        <img src="assets/img/project-management/people-12.jpg" class="ms-img-round" alt="people">
                      </div>
                      <div class="media-body ms-chat-user-info mt-1">
                        <h6>Raymart Sandiago</h6> <a href="#" class="ms-chat-time"> <i class="flaticon-chat"></i> </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                        <ul class="ms-group-members clearfix mt-3 mb-0">
                          <li> <img src="assets/img/project-management/people-11.jpg" alt="member"> </li>
                          <li> <img src="assets/img/project-management/people-8.jpg" alt="member"> </li>
                        </ul>
                      </div>
                    </li>
                    <li class="ms-chat-user-container ms-open-chat p-3 media clearfix">
                      <div class="ms-chat-img mr-3 align-self-center">
                        <img src="assets/img/project-management/people-12.jpg" class="ms-img-round" alt="people">
                      </div>
                      <div class="media-body ms-chat-user-info mt-1">
                        <h6>John Doe</h6> <a href="#" class="ms-chat-time"> <i class="flaticon-chat"></i> </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                        <ul class="ms-group-members clearfix mt-3 mb-0">
                          <li> <img src="assets/img/project-management/people-3.jpg" alt="member"> </li>
                          <li> <img src="assets/img/project-management/people-8.jpg" alt="member"> </li>
                          <li> <img src="assets/img/project-management/people-10.jpg" alt="member"> </li>
                          <li class="ms-group-count"> + 4 more </li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="contacts">
                  <ul class="ms-scrollable ms-quickbar-container">
                    <li class="ms-chat-user-container ms-open-chat p-3 media clearfix">
                      <div class="ms-chat-img mr-3 align-self-center">
                        <img src="assets/img/project-management/people-12.jpg" class="ms-img-round" alt="people">
                      </div>
                      <div class="media-body ms-chat-user-info mt-1">
                        <h6>John Doe</h6> <a href="#" class="ms-chat-time"> <i class="flaticon-chat"></i> </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                      </div>
                    </li>
                    <li class="ms-chat-user-container ms-open-chat p-3 media clearfix">
                      <div class="ms-chat-img mr-3 align-self-center">
                        <img src="assets/img/project-management/people-7.jpg" class="ms-img-round" alt="people">
                      </div>
                      <div class="media-body ms-chat-user-info mt-1">
                        <h6>Raymart Sandiago</h6> <a href="#" class="ms-chat-time"> <i class="flaticon-chat"></i> </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                      </div>
                    </li>
                    <li class="ms-chat-user-container ms-open-chat p-3 media clearfix">
                      <div class="ms-chat-img mr-3 align-self-center">
                        <img src="assets/img/project-management/people-5.jpg" class="ms-img-round" alt="people">
                      </div>
                      <div class="media-body ms-chat-user-info mt-1">
                        <h6>Micheal John</h6> <a href="#" class="ms-chat-time"> <i class="flaticon-chat"></i> </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                      </div>
                    </li>
                    <li class="ms-chat-user-container ms-open-chat p-3 media clearfix">
                      <div class="ms-chat-img mr-3 align-self-center">
                        <img src="assets/img/project-management/people-3.jpg" class="ms-img-round" alt="people">
                      </div>
                      <div class="media-body ms-chat-user-info mt-1">
                        <h6>Heather Brown</h6> <a href="#" class="ms-chat-time"> <i class="flaticon-chat"></i> </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                      </div>
                    </li>
                    <li class="ms-chat-user-container ms-open-chat p-3 media clearfix">
                      <div class="ms-chat-img mr-3 align-self-center">
                        <img src="assets/img/project-management/people-12.jpg" class="ms-img-round" alt="people">
                      </div>
                      <div class="media-body ms-chat-user-info mt-1">
                        <h6>Mila Freign</h6> <a href="#" class="ms-chat-time"> <i class="flaticon-chat"></i> </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                      </div>
                    </li>
                    <li class="ms-chat-user-container ms-open-chat p-3 media clearfix">
                      <div class="ms-chat-img mr-3 align-self-center">
                        <img src="assets/img/project-management/people-11.jpg" class="ms-img-round" alt="people">
                      </div>
                      <div class="media-body ms-chat-user-info mt-1">
                        <h6>James Zathila</h6> <a href="#" class="ms-chat-time"> <i class="flaticon-chat"></i> </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>

            </div>

          </div>

        </div>

        <div role="tabpanel" class="tab-pane" id="qa-email">

          <div class="ms-email-container">

            <div class="ms-qa-options">
              <a href="#" class="btn btn-primary w-100 mt-0 has-icon"> <i class="flaticon-pencil"></i> Compose Email </a>
            </div>

            <ul class="ms-scrollable ms-quickbar-container">
              <li class="p-3  media ms-email clearfix">
                <div class="ms-email-img mr-3 ">
                  <img src="assets/img/project-management/people-12.jpg" class="ms-img-round" alt="people">
                </div>
                <div class="media-body ms-email-details">
                  <span class="ms-email-sender">James Zathila</span>
                  <h6 class="ms-email-subject">[WordPress] New Comment</h6> <span class="ms-email-time">2 Hours ago</span>
                  <p class="ms-email-msg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                </div>
              </li>
              <li class="p-3  media ms-email clearfix">
                <div class="ms-email-img mr-3 ">
                  <img src="assets/img/project-management/people-5.jpg" class="ms-img-round" alt="people">
                </div>
                <div class="media-body ms-email-details">
                  <span class="ms-email-sender">John Doe</span>
                  <h6 class="ms-email-subject">[WordPress] New Comment</h6> <span class="ms-email-time">8 Hours ago</span>
                  <p class="ms-email-msg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                </div>
              </li>
              <li class="p-3  media ms-email clearfix">
                <div class="ms-email-img mr-3 ">
                  <img src="assets/img/project-management/people-3.jpg" class="ms-img-round" alt="people">
                </div>
                <div class="media-body ms-email-details">
                  <span class="ms-email-sender">Heather Brown</span>
                  <h6 class="ms-email-subject">[WordPress] New Comment</h6> <span class="ms-email-time">1 Day ago</span>
                  <p class="ms-email-msg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                </div>
              </li>
            </ul>
          </div>

        </div>

        <div role="tabpanel" class="tab-pane" id="qa-toDo">
          <div class="ms-quickbar-container ms-todo-list-container ms-scrollable">

            <form class="ms-add-task-block">
              <div class="form-group mx-3 mt-0  fs-14 clearfix">
                <input type="text" class="form-control fs-14 float-left" id="task-block" name="todo-block" placeholder="Add Task Block" value="">
                <button type="submit" class="ms-btn-icon bg-primary float-right"><i class="material-icons text-disabled">add</i></button>
              </div>
            </form>

            <ul class="ms-todo-list">
              <li class="ms-card ms-qa-card ms-deletable">

                <div class="ms-card-header clearfix">
                  <h6 class="ms-card-title">Task Block Title</h6>
                  <button data-toggle="tooltip" data-placement="left" title="Add a Task to this block" class="ms-add-task-to-block ms-btn-icon float-right"> <i class="material-icons text-disabled">add</i> </button>
                </div>

                <div class="ms-card-body">
                  <ul class="ms-list ms-task-block">
                    <li class="ms-list-item ms-to-do-task ms-deletable">
                      <label class="ms-checkbox-wrap ms-todo-complete">
                        <input type="checkbox" value="">
                        <i class="ms-checkbox-check"></i>
                      </label>
                      <span> Task to do </span>
                      <button type="submit" class="close"><i class="flaticon-trash ms-delete-trigger"> </i></button>
                    </li>
                    <li class="ms-list-item ms-to-do-task ms-deletable">
                      <label class="ms-checkbox-wrap ms-todo-complete">
                        <input type="checkbox" value="">
                        <i class="ms-checkbox-check"></i>
                      </label>
                      <span>Task to do</span>
                      <button type="submit" class="close"><i class="flaticon-trash ms-delete-trigger"> </i></button>
                    </li>
                  </ul>
                </div>

                <div class="ms-card-footer clearfix">
                  <a href="#" class="text-disabled mr-2"> <i class="flaticon-archive"> </i> Archive </a>
                  <a href="#" class="text-disabled  ms-delete-trigger float-right"> <i class="flaticon-trash"> </i> Delete </a>
                </div>

              </li>
            </ul>

          </div>
        </div>

        <div role="tabpanel" class="tab-pane" id="qa-reminder">
          <div class="ms-quickbar-container ms-reminders">

            <ul class="ms-qa-options">
              <li> <a href="#" data-toggle="modal" data-target="#reminder-modal"> <i class="flaticon-bell"></i> New Reminder </a> </li>
            </ul>

            <div class="ms-quickbar-container ms-scrollable">

              <div class="ms-card ms-qa-card ms-deletable">
                <div class="ms-card-body">
                  <p> Developer Meeting in Block B </p>
                  <span class="text-disabled fs-12"><i class="material-icons fs-14">access_time</i> Today - 3:45 pm</span>
                </div>
                <div class="ms-card-footer clearfix">

                  <div class="ms-note-editor float-right">
                    <a href="#" class="text-disabled mr-2" data-toggle="modal" data-target="#reminder-modal"> <i class="flaticon-pencil"> </i> Edit </a>
                    <a href="#" class="text-disabled  ms-delete-trigger"> <i class="flaticon-trash"> </i> Delete </a>
                  </div>

                </div>
              </div>
              <div class="ms-card ms-qa-card ms-deletable">
                <div class="ms-card-body">
                  <p> Start adding change log to version 2 </p>
                  <span class="text-disabled fs-12"><i class="material-icons fs-14">access_time</i> Tomorrow - 12:00 pm</span>
                </div>
                <div class="ms-card-footer clearfix">

                  <div class="ms-note-editor float-right">
                    <a href="#" class="text-disabled mr-2" data-toggle="modal" data-target="#reminder-modal"> <i class="flaticon-pencil"> </i> Edit </a>
                    <a href="#" class="text-disabled  ms-delete-trigger"> <i class="flaticon-trash"> </i> Delete </a>
                  </div>

                </div>
              </div>

            </div>

          </div>
        </div>

        <div role="tabpanel" class="tab-pane" id="qa-notes">

          <ul class="ms-qa-options">
            <li> <a href="#" data-toggle="modal" data-target="#notes-modal"> <i class="flaticon-sticky-note"></i> New Note </a> </li>
            <li> <a href="#"> <i class="flaticon-excel"></i> Export to Excel </a> </li>
          </ul>

          <div class="ms-quickbar-container ms-scrollable">

            <div class="ms-card ms-qa-card ms-deletable">
              <div class="ms-card-header">
                <h6 class="ms-card-title">Don't forget to check with the designer</h6>
              </div>
              <div class="ms-card-body">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vulputate urna in faucibus venenatis. Etiam at dapibus neque,
                  vel varius metus. Pellentesque eget orci malesuada, venenatis magna et
                </p>
                <ul class="ms-note-members clearfix mb-0">
                  <li class="ms-deletable"> <img src="assets/img/project-management/people-12.jpg" alt="member"> </li>
                  <li class="ms-deletable"> <img src="assets/img/project-management/people-11.jpg" alt="member"> </li>
                </ul>
              </div>
              <div class="ms-card-footer clearfix">

                <div class="dropdown float-left">
                  <a href="#" class="text-disabled" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="flaticon-share-1"></i> Share
                  </a>
                  <ul class="dropdown-menu">
                    <li class="dropdown-menu-header">
                      <h6 class="dropdown-header ms-inline m-0"><span class="text-disabled">Share With</span></h6>
                    </li>
                    <li class="dropdown-divider"></li>
                    <li class="ms-scrollable ms-dropdown-list ms-members-list">
                      <a class="media p-2" href="#">
                        <div class="mr-2 align-self-center">
                          <img src="assets/img/project-management/people-8.jpg" class="ms-img-round" alt="people">
                        </div>
                        <div class="media-body">
                          <span>John Doe</span>
                        </div>
                      </a>
                      <a class="media p-2" href="#">
                        <div class="mr-2 align-self-center">
                          <img src="assets/img/project-management/people-12.jpg" class="ms-img-round" alt="people">
                        </div>
                        <div class="media-body">
                          <span>Raymart Sandiago</span>
                        </div>
                      </a>
                      <a class="media p-2" href="#">
                        <div class="mr-2 align-self-center">
                          <img src="assets/img/project-management/people-10.jpg" class="ms-img-round" alt="people">
                        </div>
                        <div class="media-body">
                          <span>Heather Brown</span>
                        </div>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="ms-note-editor float-right">
                  <a href="#" class="text-disabled mr-2" data-toggle="modal" data-target="#notes-modal"> <i class="flaticon-pencil"> </i> Edit </a>
                  <a href="#" class="text-disabled  ms-delete-trigger"> <i class="flaticon-trash"> </i> Delete </a>
                </div>

              </div>
            </div>

            <div class="ms-card ms-qa-card ms-deletable">
              <div class="ms-card-header">
                <h6 class="ms-card-title">Perform the required unit tests</h6>
              </div>
              <div class="ms-card-body">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vulputate urna in faucibus venenatis. Etiam at dapibus neque,
                  vel varius metus. Pellentesque eget orci malesuada, venenatis magna et
                </p>
                <ul class="ms-note-members clearfix mb-0">
                  <li class="ms-deletable"> <img src="assets/img/project-management/people-7.jpg" alt="member"> </li>
                </ul>
              </div>
              <div class="ms-card-footer clearfix">

                <div class="dropdown float-left">
                  <a href="#" class="text-disabled" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="flaticon-share-1"></i> Share
                  </a>
                  <ul class="dropdown-menu">
                    <li class="dropdown-menu-header">
                      <h6 class="dropdown-header ms-inline m-0"><span class="text-disabled">Share With</span></h6>
                    </li>
                    <li class="dropdown-divider"></li>
                    <li class="ms-scrollable ms-dropdown-list ms-members-list">
                      <a class="media p-2" href="#">
                        <div class="mr-2 align-self-center">
                          <img src="assets/img/project-management/people-11.jpg" class="ms-img-round" alt="people">
                        </div>
                        <div class="media-body">
                          <span>John Doe</span>
                        </div>
                      </a>
                      <a class="media p-2" href="#">
                        <div class="mr-2 align-self-center">
                          <img src="assets/img/project-management/people-12.jpg" class="ms-img-round" alt="people">
                        </div>
                        <div class="media-body">
                          <span>Raymart Sandiago</span>
                        </div>
                      </a>
                      <a class="media p-2" href="#">
                        <div class="mr-2 align-self-center">
                          <img src="assets/img/project-management/people-11.jpg" class="ms-img-round" alt="people">
                        </div>
                        <div class="media-body">
                          <span>Heather Brown</span>
                        </div>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="ms-note-editor float-right">
                  <a href="#" class="text-disabled mr-2" data-toggle="modal" data-target="#notes-modal"> <i class="flaticon-pencil"> </i> Edit </a>
                  <a href="#" class="text-disabled  ms-delete-trigger"> <i class="flaticon-trash"> </i> Delete </a>
                </div>

              </div>
            </div>

          </div>

        </div>

        <div role="tabpanel" class="tab-pane" id="qa-invite">

          <div class="ms-quickbar-container text-center ms-invite-member">
            <i class="flaticon-network"></i>
            <p>Invite Team Members</p>
            <form>
              <div class="ms-form-group">
                <input type="text" placeholder="Member Email" class="form-control" name="invite-email" value="">
              </div>
              <div class="ms-form-group">
                <button type="submit" name="invite-member" class="btn btn-primary w-100">Invite</button>
              </div>
            </form>
          </div>

        </div>

      </div>

    </div>

  </aside>

  <!-- MODALS -->

  <!-- Reminder Modal -->
  <div class="modal fade" id="reminder-modal" tabindex="-1" role="dialog" aria-labelledby="reminder-modal">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">

        <div class="modal-header bg-secondary">
          <h5 class="modal-title has-icon text-white"> New Reminder</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>

        <form>

        <div class="modal-body">

          <div class="ms-form-group">
            <label>Remind me about</label>
            <textarea class="form-control" name="reminder"></textarea>
          </div>

          <div class="ms-form-group">
            <span class="ms-option-name fs-14">Repeat Daily</span>
            <label class="ms-switch float-right">
              <input type="checkbox">
              <span class="ms-switch-slider round"></span>
            </label>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="ms-form-group">
                <input type="text" class="form-control datepicker" name="reminder-date" value="" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="ms-form-group">
                <select class="form-control" name="reminder-time">
                  <option value="">12:00 pm</option>
                  <option value="">1:00 pm</option>
                  <option value="">2:00 pm</option>
                  <option value="">3:00 pm</option>
                  <option value="">4:00 pm</option>
                </select>
              </div>
            </div>
          </div>

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-secondary shadow-none" data-dismiss="modal">Add Reminder</button>
        </div>

        </form>

      </div>
    </div>
  </div>

  <!-- Notes Modal -->
  <div class="modal fade" id="notes-modal" tabindex="-1" role="dialog" aria-labelledby="notes-modal">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">

        <div class="modal-header bg-secondary">
          <h5 class="modal-title has-icon text-white" id="NoteModal">New Note</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>

        <form>

        <div class="modal-body">

          <div class="ms-form-group">
            <label>Note Title</label>
            <input type="text" class="form-control" name="note-title" value="">
          </div>

          <div class="ms-form-group">
            <label>Note Description</label>
            <textarea class="form-control" name="note-description"></textarea>
          </div>

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-secondary shadow-none" data-dismiss="modal">Add Note</button>
        </div>

        </form>

      </div>
    </div>
  </div>

@endsection