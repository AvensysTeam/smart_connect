  @extends('layouts.main')
  @section('content')


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