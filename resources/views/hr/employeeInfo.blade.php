
          <!-- .page -->

          <div class="page has-sidebar has-sidebar-fluid has-sidebar-expand-xl">


            <!-- .page-inner -->
            <div class="page-inner page-inner-fill position-relative">
                <header class="page-navs bg-light shadow-sm">
                    <div class="input-group has-clearable">
{{--                        <select class="custom-select" id="selDefault">--}}
{{--                            <option> Small select </option>--}}
{{--                        </select>--}}
                        <select id="select2-single" class="form-control" data-toggle="select2" data-placeholder="Select a state" data-allow-clear="true"></select>
                    </div>
                </header>

              <header class="page-navs bg-light shadow-sm">



                <!-- .input-group -->
                <div class="input-group has-clearable">

                  <button type="button" class="close" aria-label="Close">
                      <span aria-hidden="true"><i class="fa fa-times-circle"></i></span>
                  </button>
                    <label class="input-group-prepend" for="searchClients">
                        <span class="input-group-text">
                            <span class="oi oi-magnifying-glass"></span>
                        </span>
                    </label>
                    <input type="text" class="form-control" id="searchClients" data-filter=".board .list-group-item" placeholder="Find Employee">
                </div><!-- /.input-group -->
              </header>
                <button type="button" class="btn btn-primary btn-floated position-absolute" data-toggle="modal" data-target="#clientNewModal" title="Add new employee">
                    <i class="fa fa-plus"></i>
                </button> <!-- board -->



              <div class="board p-0 perfect-scrollbar nxscroll">
                <!-- .list-group -->
                <div class="list-group list-group-flush list-group-divider border-top employeeList" data-toggle="radiolist">

                  <?php /*
                  <!-- .list-group-item -->
                  <div class="list-group-item active" data-toggle="sidebar" data-sidebar="show" onclick="outletInfo('Mr. Jamal Hossen','profile.jpg')">
                    <a href="#" class="stretched-link"></a> <!-- .list-group-item-figure -->
                    <div class="list-group-item-figure">
                        <a href="#" class="user-avatar user-avatar-md" data-toggle="tooltip" title="Martha Myers">
                            <img src="assets/images/avatars/profile.jpg" alt="">
                        </a>
                    </div><!-- /.list-group-item-figure -->

                    <!-- .list-group-item-body -->
                    <div class="list-group-item-body">
                      <h4 class="list-group-item-title"> Mr. Jamal Hossen</h4>
                      <p class="list-group-item-text"> Branch Manager </p>
                    </div><!-- /.list-group-item-body -->
                  </div><!-- /.list-group-item --> */ ?>

                </div><!-- /.list-group -->
              </div><!-- /board -->
            </div><!-- /.page-inner -->







            <!-- .page-sidebar -->
            <div class="page-sidebar bg-light">


              <!-- .sidebar-header Mobile view part-->
              <header class="sidebar-header d-xl-none">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item active">
                      <a href="#" onclick="Looper.toggleSidebar()"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Back</a>
                    </li>
                  </ol>
                </nav>
              </header><!-- /.sidebar-header -->




              <!-- .sidebar-section -->
              <div class="sidebar-section sidebar-section-fill">

              <!-- Title Name -->
                <h1 class="page-title" id="title-outlet-name">
                    <a href="#" class="user-avatar user-avatar-md" data-toggle="tooltip" title="Martha Myers">
                        <!-- <img src="assets/images/avatars/profile.jpg" alt=""> -->
                    </a>
                    <!-- Mr. Jamal Hossen  -->
                  </h1>
                <p class="text-muted" id="title-outlet-address">
                <!-- Branch Manager.  -->
                </p><!-- .nav-scroller -->



                <div class="nav-scroller border-bottom">
                  <!-- .nav-tabs -->
                  <ul class="nav nav-tabs">
                    <li class="nav-item">
                      <a class="nav-link active show" data-toggle="tab" href="#client-billing-contact" onClick="storeTabId('basicInfo')">Basic Info</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" onclick="getJoiningData()" href="#joining-info" onClick="storeTabId('complain')">Joining Info</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#client-tasks" onClick="storeTabId('service')">Education</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#client-invoices">Attendance</a>
                    </li>
                  </ul><!-- /.nav-tabs -->
                </div><!-- /.nav-scroller -->





                <!-- .tab-content -->
                <div class="tab-content pt-4" id="clientDetailsTabs">
                  <!-- .tab-pane -->
                  <div class="tab-pane fade show active" id="client-billing-contact" role="tabpanel" aria-labelledby="client-billing-contact-tab">

                    <!-- New -->
                    <div class="card">
                      <!-- .card-body -->
                      <div class="card-body">


                      <div class="masonry-layout">

                          <div class="masonry-item col-lg-3">
                              <div class="text-center" id="profile-photo">
                                  <a href="user-profile.html" class="user-avatar user-avatar-xxl">
                                      <!-- <img src="assets/images/avatars/profile.jpg" alt=""> -->
                                  </a>
                                  <h2 class="h4 mt-2 mb-0">
                                  <!-- Mr. Jamal Hossen  -->
                                  </h2>
                                  <p class="text-muted">
                                  <!-- Branch Manager -->
                                  </p>
                              </div>
                          </div>

                          <div class="masonry-item col-lg-6">
                              <div class="d-flex justify-content-between align-items-center">
                                <h2 id="client-billing-contact-tab" class="card-title">
                                <!-- Contact Information -->
                                </h2>
                              </div>
                              <div class="employeeInfoContact">

                              </div>
                          </div>

                      </div>





                      </div><!-- /.card-body -->
                    </div><!-- /.card -->
                    <!-- End New  -->



                      <!-- Basic information detail -->
                      <div class="card">
                      <!-- .card-body -->
                      <div class="card-body">
                          <div class="masonry-layout">
                              <div class="masonry-item col-lg-6">
                                  <div class="d-flex justify-content-between align-items-center">
                                      <h2 id="client-billing-contact-tab" class="card-title card-title111">
                                      <!-- Present Address -->
                                      </h2>
                                  </div>
                                  <address class="preAddr">
                                  </address>
                              </div>
                              <div class="masonry-item col-lg-6">
                                  <div class="d-flex justify-content-between align-items-center">
                                      <h2 id="client-billing-contact-tab" class="card-title card-title222">
                                      <!-- Parmanent Address -->
                                      </h2>
                                  </div>
                                  <address class="perAddr">
                                  </address>
                              </div>
                          </div>
                      </div><!-- /.card-body -->
                  </div><!-- /.card -->
                <!-- / Basic information detail -->

                  </div><!-- /.tab-pane -->
                  <!-- .tab-pane -->
                  <div class="tab-pane fade" id="client-tasks" role="tabpanel" aria-labelledby="client-tasks-tab">
                    <!-- .card -->
                    <div class="card">
                      <!-- .card-header -->
                      <div class="card-header d-flex">
                        <button type="button" class="btn btn-primary ml-auto">Add</button>
                      </div><!-- /.card-header -->
                      <!-- .table-responsive -->
                      <div class="table-responsive">
                       <h1>Employee Education Info</h1>
                      </div><!-- /.table-responsive -->
                    </div><!-- /.card -->
                  </div><!-- /.tab-pane -->




                  <!-- joining-info .tab-pane -->
                  <div class="tab-pane fade" id="joining-info" role="tabpanel" aria-labelledby="joining-info-tab">
                    <!-- .card -->
                    <div class="card">
                      <!-- .card-header -->
                      <div class="card-header d-flex">

                        <button type="button" class="btn btn-primary ml-auto" data-toggle="modal" data-target="#empJoiningModal" title="Add New">Add New</button>

                      </div><!-- /.card-header -->
                      <!-- .table-responsive -->
                      <div class="table-responsive">
                        <!-- .table -->
                        <table class="table">
                          <!-- thead -->
                          <thead>
                            <tr>
                              <th> Outlet </th>
                              <th> Designation </th>
                              <th> Start </th>
                              <th> End </th>
                              <th> Status </th>
                              <th></th>
                            </tr>
                          </thead><!-- /thead -->
                          <!-- tbody -->
                          <tbody>
                            <!-- tr -->
                            <tr>
                              <td class="align-middle">
                                Syrena Project
                              </td>
                              <td class="align-middle">Manager </td>
                              <td class="align-middle"> 04/10/2018 </td>
                              <td class="align-middle"> 08/18/2018 </td>
                              <td class="align-middle">
                                <span class="badge badge-warning">On Going</span>
                              </td>
                              <td class="align-middle text-right">
                                <div class="dropdown">
                                  <button type="button" class="btn btn-sm btn-icon btn-secondary" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true"><i class="fa fa-ellipsis-h"></i> <span class="sr-only">Actions</span></button>
                                  <div class="dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-arrow mr-n1"></div><button class="dropdown-item" type="button">Edit</button> <button class="dropdown-item" type="button">Delete</button>
                                  </div>
                                </div>
                              </td>
                            </tr><!-- /tr -->
                            <!-- tr -->
                          </tbody><!-- /tbody -->
                        </table><!-- /.table -->
                      </div><!-- /.table-responsive -->
                    </div><!-- /.card -->
                  </div><!-- /.tab-pane -->
                  <!-- joining-info .tab-pane -->



                  <div class="tab-pane fade" id="client-invoices" role="tabpanel" aria-labelledby="client-invoices-tab">
                    <!-- .card -->
                    <div class="card">
                      <!-- .card-header -->
                      <div class="card-header d-flex">
                        <!-- .dropdown -->
                        <div class="dropdown">
                          <button type="button" class="btn btn-secondary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-filter mr-1"></i> All (5) <i class="fa fa-caret-down"></i></button> <!-- .dropdown-menu -->
                          <div class="dropdown-menu stop-propagation">
                            <div class="dropdown-arrow"></div>
                            <h6 id="client-invoices-tab" class="dropdown-header"> Invoices </h6><label class="custom-control custom-radio"><input type="radio" class="custom-control-input" name="clientInvoiceFilter" value="0" checked> <span class="custom-control-label">All (5)</span></label> <label class="custom-control custom-radio"><input type="radio" class="custom-control-input" name="clientInvoiceFilter" value="1"> <span class="custom-control-label">Draft (1)</span></label> <label class="custom-control custom-radio"><input type="radio" class="custom-control-input" name="clientInvoiceFilter" value="2"> <span class="custom-control-label">Send (2)</span></label> <label class="custom-control custom-radio"><input type="radio" class="custom-control-input" name="clientInvoiceFilter" value="3"> <span class="custom-control-label">Paid (0)</span></label>
                          </div><!-- /.dropdown-menu -->
                        </div><!-- /.dropdown -->
                        <button type="button" class="btn btn-primary ml-auto">Add invoice</button>
                      </div><!-- /.card-header -->
                      <!-- .table-responsive -->
                      <div class="table-responsive">
                        <!-- .table -->
                        <table class="table">
                          <!-- thead -->
                          <thead>
                            <tr>
                              <th style="min-width:256px"> Project </th>
                              <th></th>
                              <th> Due </th>
                              <th> Amount </th>
                              <th> Received </th>
                              <th> Status </th>
                              <th></th>
                            </tr>
                          </thead><!-- /thead -->
                          <!-- tbody -->
                          <tbody>
                            <!-- tr -->
                            <tr>
                              <td class="align-middle text-truncate">
                                <div class="media align-items-center">
                                  <a href="#" class="tile bg-pink text-white mr-2">SP</a>
                                  <div class="media-body">
                                    <a href="#">Syrena Project</a> <small class="d-block text-muted">Invoice #9463</small>
                                  </div>
                                </div>
                              </td>
                              <td class="align-middle"></td>
                              <td class="align-middle"> 09/16/2018 </td>
                              <td class="align-middle"> $1,500 </td>
                              <td class="align-middle"> $1,500 </td>
                              <td class="align-middle">
                                <span class="badge badge-success">Paid</span>
                              </td>
                              <td class="align-middle text-right">
                                <div class="dropdown">
                                  <button type="button" class="btn btn-sm btn-icon btn-secondary" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true"><i class="fa fa-ellipsis-h"></i> <span class="sr-only">Actions</span></button>
                                  <div class="dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-arrow mr-n1"></div><button class="dropdown-item" type="button">Edit</button> <button class="dropdown-item" type="button">Delete</button>
                                  </div>
                                </div>
                              </td>
                            </tr><!-- /tr -->
                            <!-- tr -->
                            <tr>
                              <td class="align-middle text-truncate">
                                <div class="media align-items-center">
                                  <a href="#" class="tile bg-purple text-white mr-2">BA</a>
                                  <div class="media-body">
                                    <a href="#">Mobile App Gex</a> <small class="d-block text-muted">Invoice #0754</small>
                                  </div>
                                </div>
                              </td>
                              <td class="align-middle"></td>
                              <td class="align-middle"> 12/13/2018 </td>
                              <td class="align-middle"> $1,000 </td>
                              <td class="align-middle"> - </td>
                              <td class="align-middle">
                                <span class="badge badge-warning">Outstanding</span>
                              </td>
                              <td class="align-middle text-right">
                                <div class="dropdown">
                                  <button type="button" class="btn btn-sm btn-icon btn-secondary" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true"><i class="fa fa-ellipsis-h"></i> <span class="sr-only">Actions</span></button>
                                  <div class="dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-arrow mr-n1"></div><button class="dropdown-item" type="button">Edit</button> <button class="dropdown-item" type="button">Delete</button>
                                  </div>
                                </div>
                              </td>
                            </tr><!-- /tr -->
                            <!-- tr -->
                            <tr>
                              <td class="align-middle text-truncate">
                                <div class="media align-items-center">
                                  <a href="#" class="tile bg-teal text-white mr-2">SB</a>
                                  <div class="media-body">
                                    <a href="#">SVG Icon Bundle</a> <small class="d-block text-muted">Invoice #8613</small>
                                  </div>
                                </div>
                              </td>
                              <td class="align-middle">
                                <i class="fa fa-paperclip text-muted"></i>
                              </td>
                              <td class="align-middle"> 02/09/2019 </td>
                              <td class="align-middle"> $3,000 </td>
                              <td class="align-middle"> $500 </td>
                              <td class="align-middle">
                                <span class="badge badge-warning">Outstanding</span>
                              </td>
                              <td class="align-middle text-right">
                                <div class="dropdown">
                                  <button type="button" class="btn btn-sm btn-icon btn-secondary" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true"><i class="fa fa-ellipsis-h"></i> <span class="sr-only">Actions</span></button>
                                  <div class="dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-arrow mr-n1"></div><button class="dropdown-item" type="button">Edit</button> <button class="dropdown-item" type="button">Delete</button>
                                  </div>
                                </div>
                              </td>
                            </tr><!-- /tr -->
                            <!-- tr -->
                            <tr>
                              <td class="align-middle text-truncate">
                                <div class="media align-items-center">
                                  <a href="#" class="tile bg-red text-white mr-2">LB</a>
                                  <div class="media-body">
                                    <a href="#">Landing Page Booster</a> <small class="d-block text-muted">Invoice #9458</small>
                                  </div>
                                </div>
                              </td>
                              <td class="align-middle"></td>
                              <td class="align-middle"> 05/30/2018 </td>
                              <td class="align-middle"> $499 </td>
                              <td class="align-middle"> - </td>
                              <td class="align-middle">
                                <span class="badge badge-danger">Past Due</span>
                              </td>
                              <td class="align-middle text-right">
                                <div class="dropdown">
                                  <button type="button" class="btn btn-sm btn-icon btn-secondary" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true"><i class="fa fa-ellipsis-h"></i> <span class="sr-only">Actions</span></button>
                                  <div class="dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-arrow mr-n1"></div><button class="dropdown-item" type="button">Edit</button> <button class="dropdown-item" type="button">Delete</button>
                                  </div>
                                </div>
                              </td>
                            </tr><!-- /tr -->
                          </tbody><!-- /tbody -->
                        </table><!-- /.table -->
                      </div><!-- /.table-responsive -->
                    </div><!-- /.card -->
                  </div><!-- /.tab-pane -->
                  <!-- .tab-pane -->
                  <div class="tab-pane fade" id="client-expenses" role="tabpanel" aria-labelledby="client-expenses-tab">
                    <!-- .card -->
                    <div class="card">
                      <!-- .card-header -->
                      <div class="card-header d-flex">
                        <!-- .dropdown -->
                        <div class="dropdown">
                          <button class="btn btn-secondary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span>This Year</span> <i class="fa fa-fw fa-caret-down"></i></button> <!-- .dropdown-menu -->
                          <div class="dropdown-menu dropdown-menu-md stop-propagation">
                            <div class="dropdown-arrow"></div><!-- .custom-control -->
                            <div class="custom-control custom-radio">
                              <input type="radio" class="custom-control-input" id="clientExpensesDateFilter0" name="clientExpensesDateFilter" value="0"> <label class="custom-control-label" for="clientExpensesDateFilter0">Last 7 days</label>
                            </div><!-- /.custom-control -->
                            <!-- .custom-control -->
                            <div class="custom-control custom-radio">
                              <input type="radio" class="custom-control-input" id="clientExpensesDateFilter1" name="clientExpensesDateFilter" value="1"> <label class="custom-control-label" for="clientExpensesDateFilter1">Last 3 days</label>
                            </div><!-- /.custom-control -->
                            <!-- .custom-control -->
                            <div class="custom-control custom-radio">
                              <input type="radio" class="custom-control-input" id="clientExpensesDateFilter2" name="clientExpensesDateFilter" value="2"> <label class="custom-control-label" for="clientExpensesDateFilter2">This month</label>
                            </div><!-- /.custom-control -->
                            <!-- .custom-control -->
                            <div class="custom-control custom-radio">
                              <input type="radio" class="custom-control-input" id="clientExpensesDateFilter3" name="clientExpensesDateFilter" value="3"> <label class="custom-control-label" for="clientExpensesDateFilter3">Last month</label>
                            </div><!-- /.custom-control -->
                            <!-- .custom-control -->
                            <div class="custom-control custom-radio">
                              <input type="radio" class="custom-control-input" id="clientExpensesDateFilter4" name="clientExpensesDateFilter" value="4" checked> <label class="custom-control-label" for="clientExpensesDateFilter4">This year</label>
                            </div><!-- /.custom-control -->
                          </div><!-- /.dropdown-menu -->
                        </div><!-- /.dropdown -->
                        <button id="client-expenses-tab" type="button" class="btn btn-primary ml-auto">Add expense</button>
                      </div><!-- /.card-header -->
                      <!-- .table-responsive -->
                      <div class="table-responsive">
                        <!-- .table -->
                        <table class="table">
                          <!-- thead -->
                          <thead>
                            <tr>
                              <th> Date </th>
                              <th> Amount </th>
                              <th style="min-width:200px"> Vendor </th>
                              <th></th>
                              <th> Category </th>
                              <th></th>
                            </tr>
                          </thead><!-- /thead -->
                          <!-- tbody -->
                          <tbody>
                            <!-- tr -->
                            <tr>
                              <td class="align-middle"> 04/11/2019 </td>
                              <td class="align-middle"> $360.00 </td>
                              <td class="align-middle"> Facebook, Inc. </td>
                              <td class="align-middle">
                                <i class="fa fa-paperclip text-muted"></i>
                              </td>
                              <td class="align-middle">
                                <span class="badge text-white bg-purple">Campaign</span>
                              </td>
                              <td class="align-middle text-right">
                                <div class="dropdown">
                                  <button type="button" class="btn btn-sm btn-icon btn-secondary" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true"><i class="fa fa-ellipsis-h"></i> <span class="sr-only">Actions</span></button>
                                  <div class="dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-arrow mr-n1"></div><button class="dropdown-item" type="button">Edit</button> <button class="dropdown-item" type="button">Delete</button>
                                  </div>
                                </div>
                              </td>
                            </tr><!-- /tr -->
                            <!-- tr -->
                            <tr>
                              <td class="align-middle"> 09/15/2019 </td>
                              <td class="align-middle"> $49.00 </td>
                              <td class="align-middle"> Adobe Systems </td>
                              <td class="align-middle">
                                <i class="fa fa-paperclip text-muted"></i>
                              </td>
                              <td class="align-middle">
                                <span class="badge text-white bg-orange">Other</span>
                              </td>
                              <td class="align-middle text-right">
                                <div class="dropdown">
                                  <button type="button" class="btn btn-sm btn-icon btn-secondary" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true"><i class="fa fa-ellipsis-h"></i> <span class="sr-only">Actions</span></button>
                                  <div class="dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-arrow mr-n1"></div><button class="dropdown-item" type="button">Edit</button> <button class="dropdown-item" type="button">Delete</button>
                                  </div>
                                </div>
                              </td>
                            </tr><!-- /tr -->
                            <!-- tr -->
                            <tr>
                              <td class="align-middle"> 10/11/2019 </td>
                              <td class="align-middle"> $610.00 </td>
                              <td class="align-middle"> InVisionApp, Inc. </td>
                              <td class="align-middle">
                                <i class="fa fa-paperclip text-muted"></i>
                              </td>
                              <td class="align-middle">
                                <span class="badge text-white bg-pink">Design</span>
                              </td>
                              <td class="align-middle text-right">
                                <div class="dropdown">
                                  <button type="button" class="btn btn-sm btn-icon btn-secondary" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true"><i class="fa fa-ellipsis-h"></i> <span class="sr-only">Actions</span></button>
                                  <div class="dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-arrow mr-n1"></div><button class="dropdown-item" type="button">Edit</button> <button class="dropdown-item" type="button">Delete</button>
                                  </div>
                                </div>
                              </td>
                            </tr><!-- /tr -->
                          </tbody><!-- /tbody -->
                        </table><!-- /.table -->
                      </div><!-- /.table-responsive -->
                    </div><!-- /.card -->
                  </div><!-- /.tab-pane -->
                </div><!-- /.tab-content -->
              </div><!-- /.sidebar-section -->
            </div><!-- /.page-sidebar -->
            <!-- Keep in mind that modals should be placed outsite of page sidebar -->

            <!-- .Employee Entry Form -->
            <form id="employee_entry_form" enctype="multipart/form-data">
                <div class="modal fade" id="clientNewModal" tabindex="-1" role="dialog" aria-labelledby="clientNewModalLabel" aria-hidden="true">
                  <!-- .modal-dialog -->
                  <div class="modal-dialog " role="document" style="max-width:60% !important">
                    <!-- .modal-content -->
                    <div class="modal-content">
                        <div class="form-row" id="massageDiv"></div>
                      <!-- .modal-header -->
                      <div class="modal-header">
                        <h4 id="clientNewModalLabel" class="modal-title inline-editable">
                          Employee Entry Form
                        </h4>
                      </div><!-- /.modal-header -->
                      <!-- .modal-body -->
                      <div class="modal-body">
                        <!-- .form-row -->
                        <div class="form-row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="emp_name">Employee name</label>
                              <input autocomplete="off" name="emp_name" type="text" id="emp_name" class="form-control">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="contact_no">Contact No.</label>
                              <input autocomplete="off" name="contact_no" type="number" min="0" id="contact_no" class="form-control">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="email_id">Contact email</label>
                              <input autocomplete="off" name="email_id" type="email" id="email_id" class="form-control">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="photo_path">Image</label>
                              <input name="photo_path" type="file" id="photo_path" class="form-control">
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="present_address">Present Address</label>
                              <input autocomplete="off" name="present_address" type="text" id="present_address" class="form-control">
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="permanent_address">Parmanent Address</label>
                              <input autocomplete="off" name="permanent_address" type="text" id="permanent_address" class="form-control">
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="emp_dob">Date Of Birth</label>
                              <input autocomplete="off" name="emp_dob" type="date" id="emp_dob" class="form-control">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                                <label for="designation_id">Designation <abbr title="Required">*</abbr></label>
                                <select class="custom-select d-block w-100" id="designation_id" required="">
                                    <option value=""> Choose... </option>
                                </select>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                                <label for="outlet_id">Outlet <abbr title="Required">*</abbr></label>
                                <select class="custom-select d-block w-100" id="outlet_id" required="">
                                    <option value=""> Choose... </option>
                                </select>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="joining_date">Join Date</label>
                              <input autocomplete="off" name="joining_date" type="date" id="joining_date" class="form-control">
                            </div>
                          </div>


                        </div><!-- /.form-row -->
                      </div><!-- /.modal-body -->


                      <!-- .modal-footer -->
                      <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" onclick="saveEmpBasic()">Save</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                      </div><!-- /.modal-footer -->
                    </div><!-- /.modal-content -->
                  </div><!-- /.modal-dialog -->
                </div>
              </form>
              <!-- /.Employee Entry Form -->

            <!-- .Employee Joining Form -->
            <form id="employee_joining_form" enctype="multipart/form-data">
                <div class="modal fade" id="empJoiningModal" tabindex="-1" role="dialog" aria-labelledby="empJoiningModalLabel" aria-hidden="true">
                  <!-- .modal-dialog -->
                  <div class="modal-dialog " role="document" style="max-width:60% !important">
                    <!-- .modal-content -->
                    <div class="modal-content">
                        <div class="form-row" id="massageDiv"></div>
                      <!-- .modal-header -->
                      <div class="modal-header">
                        <h4 id="empJoiningModalLabel" class="modal-title inline-editable">
                          Employee Joining Form
                        </h4>
                      </div><!-- /.modal-header -->
                      <!-- .modal-body -->
                      <div class="modal-body">
                        <!-- .form-row -->
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                  <label for="start_joining_date">Join Date</label>
                                  <input autocomplete="off" name="start_joining_date" type="date" id="start_joining_date" class="form-control" required>
                                  <input  name="joining_emp_id" type="hidden" id="joining_emp_id" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="end_date">End Date</label>
                                <input autocomplete="off" name="end_date" type="date" id="end_date" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="joining_designation_id">Designation <abbr title="Required">*</abbr></label>
                                    <select class="custom-select d-block w-100" id="joining_designation_id" required="">
                                        <option value=""> Choose... </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="joining_outlet_id">Outlet <abbr title="Required">*</abbr></label>
                                    <select class="custom-select d-block w-100" id="joining_outlet_id" required="">
                                        <option value=""> Choose... </option>
                                    </select>
                                </div>
                          </div>



                        </div><!-- /.form-row -->
                      </div><!-- /.modal-body -->


                      <!-- .modal-footer -->
                      <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" onclick="saveEmpJoining()">Save</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                      </div><!-- /.modal-footer -->
                    </div><!-- /.modal-content -->
                  </div><!-- /.modal-dialog -->
                </div>
            </form>
            <!-- /.Employee Joining Form -->

            <!-- .modal -->
            <form id="clientBillingEditForm" name="clientBillingEditForm">
              <div class="modal fade" id="clientBillingEditModal" tabindex="-1" role="dialog" aria-labelledby="clientBillingEditModalLabel" aria-hidden="true">
                <!-- .modal-dialog -->
                <div class="modal-dialog" role="document">
                  <!-- .modal-content -->
                  <div class="modal-content">
                    <!-- .modal-header -->
                    <div class="modal-header">
                      <h6 id="clientBillingEditModalLabel" class="modal-title inline-editable">
                        <span class="sr-only">Client name</span> <input type="text" class="form-control form-control-lg" value="Zathunicon, Inc." placeholder="E.g. Stilearning, Inc." required="">
                      </h6>
                    </div><!-- /.modal-header -->
                    <!-- .modal-body -->
                    <div class="modal-body">
                      <!-- .form-row -->
                      <div class="form-row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="ceStreet">Street</label> <input type="text" id="ceStreet" class="form-control" value="280 Suzanne Throughway">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="ceSuite">Suite</label> <input type="text" id="ceSuite" class="form-control" value="Breannabury">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="ceZip">Zip</label> <input type="text" id="ceZip" class="form-control" value="45801">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="ceCountry">Country</label> <select id="ceCountry" class="custom-select d-block w-100">
                              <option value=""> Choose... </option>
                              <option selected> United States </option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="ceCity">City</label> <select id="ceCity" class="custom-select d-block w-100">
                              <option value=""> Choose... </option>
                              <option selected> San Francisco </option>
                            </select>
                          </div>
                        </div>
                      </div><!-- /.form-row -->
                    </div><!-- /.modal-body -->
                    <!-- .modal-footer -->
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-primary">Save</button> <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                    </div><!-- /.modal-footer -->
                  </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
              </div>
            </form><!-- /.modal -->
            <!-- .modal -->
            <form id="clientContactNewForm" name="clientContactNewForm">
              <div class="modal fade" id="clientContactNewModal" tabindex="-1" role="dialog" aria-labelledby="clientContactNewModalLabel" aria-hidden="true">
                <!-- .modal-dialog -->
                <div class="modal-dialog" role="document">
                  <!-- .modal-content -->
                  <div class="modal-content">
                    <!-- .modal-header -->
                    <div class="modal-header">
                      <h6 id="clientContactNewModalLabel" class="modal-title inline-editable">
                        <span class="sr-only">Contact name</span> <input type="text" class="form-control form-control-lg" placeholder="Name (e.g. John Doe)" required="">
                      </h6>
                    </div><!-- /.modal-header -->
                    <!-- .modal-body -->
                    <div class="modal-body">
                      <!-- .form-group -->
                      <div class="form-group">
                        <div class="form-label-group">
                          <input type="email" id="cnEmail" class="form-control" placeholder="Email" required=""> <label for="cnEmail">Email</label>
                        </div>
                      </div><!-- /.form-group -->
                      <!-- .form-group -->
                      <div class="form-group">
                        <div class="form-label-group">
                          <input type="tel" id="cnPhone" class="form-control" placeholder="Phone"> <label for="cnPhone">Phone</label>
                        </div>
                      </div><!-- /.form-group -->
                    </div><!-- /.modal-body -->
                    <!-- .modal-footer -->
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-primary">Save</button> <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                    </div><!-- /.modal-footer -->
                  </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
              </div>
            </form><!-- /.modal -->
            <!-- .modal -->
            <form id="clientContactEditForm" name="clientContactEditForm">
              <div class="modal fade" id="clientContactEditModal" tabindex="-1" role="dialog" aria-labelledby="clientContactEditModalLabel" aria-hidden="true">
                <!-- .modal-dialog -->
                <div class="modal-dialog" role="document">
                  <!-- .modal-content -->
                  <div class="modal-content">
                    <!-- .modal-header -->
                    <div class="modal-header">
                      <h6 id="clientContactEditModalLabel" class="modal-title inline-editable">
                        <span class="sr-only">Contact name</span> <input type="text" class="form-control form-control-lg" value="Alexane Collins" placeholder="Name (e.g. John Doe)" required="">
                      </h6>
                    </div><!-- /.modal-header -->
                    <!-- .modal-body -->
                    <div class="modal-body">
                      <!-- .form-group -->
                      <div class="form-group">
                        <div class="form-label-group">
                          <input type="email" id="ceEmail" class="form-control" value="fhauck@gmail.com" placeholder="Email" required=""> <label for="ceEmail">Email</label>
                        </div>
                      </div><!-- /.form-group -->
                      <!-- .form-group -->
                      <div class="form-group">
                        <div class="form-label-group">
                          <input type="tel" id="cePhone" class="form-control" value="0621099222" placeholder="Phone"> <label for="cePhone">Phone</label>
                        </div>
                      </div><!-- /.form-group -->
                    </div><!-- /.modal-body -->
                    <!-- .modal-footer -->
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-primary">Save</button> <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                    </div><!-- /.modal-footer -->
                  </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
              </div>
            </form><!-- /.modal -->
          </div><!-- /.page -->




    <script>

      $(document).ready(function(){
          getAllEmployee();
          getAlloutlet();
          getAllDesignation();
      });

        $("#employee_entry_form").submit(function(e) {
            e.preventDefault();
        });
        $("#employee_joining_form").submit(function(e) {
            e.preventDefault();
        });

    // outlet
    function getAlloutlet(){
        var html = '';
        $.ajax({
            type: "GET",
            url: 'getAllOutlet',
            context: document.body
        }).done(function(result) {
            console.log(result);
            var html = '<option value="">Choose... </option>';
            $.each(result, function(i,data) {
                html +='<option value="'+data.outlet_id+'">'+data.outlet_name+'</option>';
            });
            $('#outlet_id').html(html);
            $('#joining_outlet_id').html(html);
            // assetGroupCombo(result);
        });
    }

    // Designation
    function getAllDesignation(){
        var html = '';
        $.ajax({
            type: "GET",
            url: 'getAllDesignation',
            context: document.body
        }).done(function(result) {
            console.log(result);
            var html = '<option value="">Choose... </option>';
            $.each(result, function(i,data) {
                html +='<option value="'+data.designation_id+'">'+data.designation_name+'</option>';
            });
            $('#designation_id').html(html);
            $('#joining_designation_id').html(html);
        });
    }
    //  Save Employee Entry Form
    function saveEmpBasic(){
        var empName             = $('#emp_name').val();
        var empContact          = $('#contact_no').val();
        var empEmail            = $('#email_id').val();
        var empPresentAddress   = $('#present_address').val();
        var empPermanentAddress = $('#permanent_address').val();
        var empDob              = $('#emp_dob').val();
        var empDesignation      = $('#designation_id').val();
        var empOutlet           = $('#outlet_id').val();
        var empJoin             = $('#joining_date').val();
        var empPhoto             = $('#photo_path').val();

        var actionlink = 'saveEmployeeBasicInfo';
        $.ajax({
            type: "POST",
            url: actionlink,
            data:{
                _token:'{{csrf_token()}}',
                emp_name:empName,
                emp_dob:empDob,
                contact_no:empContact,
                email_id:empEmail,
                present_address:empPresentAddress,
                permanent_address:empPermanentAddress,
                designation_id:empDesignation,
                outlet_id:empOutlet,
                joining_date:empJoin,
                photo_path:empPhoto
            },

            context: document.body
        }).done(function(result) {
            if(result==1){
                $("#massageDiv").show();
                $('#emp_name').val("");
                $('#contact_no').val("");
                $('#email_id').val("");
                $('#present_address').val("");
                $('#permanent_address').val("");
                $('#emp_dob').val("");
                $('#designation_id').val("");
                $('#outlet_id').val("");
                $('#joining_date').val("");
                $('#photo_path').val("");
                $('#clientNewModal').modal('toggle');
                getAllEmployee();


            }else{
                alert('Error');
            }
            // alert(result);
        });
    }

    //  Save Employee Joining Form
    function saveEmpJoining(){
        var empId               = $('#joining_emp_id').val();
        var empDesignation      = $('#joining_designation_id').val();
        var empOutlet           = $('#joining_outlet_id').val();
        var empJoin             = $('#start_joining_date').val();
        var empEnd             = $('#end_date').val();

        var actionlink = 'saveEmployeeJoiningInfo';
        $.ajax({
            type: "POST",
            url: actionlink,
            data:{
                _token:'{{csrf_token()}}',
                emp_id:empId,
                designation_id:empDesignation,
                outlet_id:empOutlet,
                joining_date:empJoin,
            },

            context: document.body
        }).done(function(result) {
            if(result==1){
                $("#massageDiv").show();
                $('#emp_id').val("");
                $('#designation_id').val("");
                $('#outlet_id').val("");
                $('#joining_date').val("");
                $('#empJoiningModal').modal('toggle');

            }else{
                alert('Error');
            }
        });
    }

    // getJoiningData
    function getJoiningData()
    {
        var empId = $('#joining_emp_id').val();
        alert(empId);
    }

      function getAllEmployee() {
        var html = '';
        $.ajax({
            type: "GET",
            url: 'getAllEmployee',
            context: document.body
        }).done(function(result) {
            $('.employeeList').html("");
            $.each(result, function(i,data) {
              // <!-- .list-group-item -->
              html += "<div class='list-group-item active' data-toggle='sidebar' data-sidebar='show' onclick='outletInfo("+data.emp_id+")'>";
              html += "<a href='#' class='stretched-link'></a>";
              html += "<div class='list-group-item-figure'>";
              html += "<a href='#' class='user-avatar user-avatar-md' data-toggle='tooltip' title="+data.emp_name+">";
              html += "<img src='assets/images/avatars/profile.jpg' alt=''>";
              html += "</a>";
              html += "</div>";

              html += "<div class='list-group-item-body'>";
              html += "<h4 class='list-group-item-title'>"+data.emp_name+"</h4>";
              html += "<p class='list-group-item-text'>"+data.designation_name+"</p>";
              html += "</div>";
              html += "</div>";
            });
            $('.employeeList').append(html);
        });
      }

      function removeAssetSubGroup(subGroupId){
          alert(subGroupId);
          $.ajax({
              type: "DELETE",
              url: 'deleteSubGroup',
              data:{_token:'{{csrf_token()}}',sub_group_id:subGroupId}
          }).done(function(result) {
              alert(result);
          });
      }
      //////////// Employee crud ends


      var tabID='basicInfo';

      function outletInfo(emp_id) {

        var employeeInfoContactVar = '';
        var preAddr = '';
        var perAddr = '';
          $.ajax({
            type: "GET",
            url: "employeeByID/" + emp_id,
            // data: { sales_ref: sales_ref},
            dataType: 'json',
            success: function (data) {
                // console.log(data)
                if (data) {

                    var photoPath = "assets/images/avatars/"+data.photo_path;
                    var empHtml = '<a href="#" class="user-avatar user-avatar-md" data-toggle="tooltip" title="Martha Myers"><img src="'+photoPath+'" alt=""></a> ' + data.emp_name;

                    $("#title-outlet-name").html(empHtml);

                    var profileTitle = '<a href="#" class="user-avatar user-avatar-xxl"><img src="'+photoPath+'" alt=""></a><h2 class="h4 mt-2 mb-0"> '+ data.emp_name +' </h2> <p class="text-muted"> '+ data.designation_name +' </p>';
                    $("#profile-photo").html(profileTitle);

                    employeeInfoContactVar += "<strong>Mobile : "+data.contact_no+"</strong>";
                    employeeInfoContactVar += "<address> Email: "+data.email_id;
                    employeeInfoContactVar += "<br>Mobile: "+data.contact_no+" <br> Join Date: "+data.joining_date+" </address>";
                    $(".employeeInfoContact").html(employeeInfoContactVar);

                    preAddr += data.present_address;
                    perAddr += data.permanent_address;

                    $(".preAddr").html(preAddr);
                    $(".perAddr").html(perAddr);
                    $(".card-title111").html('Parmanent Address');
                    $(".card-title222").html('Parmanent Address');
                    $('#joining_emp_id').val(data.emp_id);


                } else {
                    // $('#customer_id').val('');
                    // $("#territory_id").trigger("change");
                }
            }
          });

        // Call Tab containt loading function
        // storeTabId(tabID);

      }


      // Load the Tab containt
      function storeTabId(pTabID){
        tabID = pTabID;

        switch(tabID){
          case 'basicInfo':
            outletBasicInfo();
            break;
          case 'service':
            outletService();
            break;
          case 'complain':
            outletComplain();
            break;
        }
      }

      // $( document ).ready(function() {

      //     alert("I am here");
      //     $('.hhh').on('click', myFunc)

      // });

      function outletBasicInfo(){
        // alert('Outlet Basic Info Loading.....');
      }

      function outletService(){
        // alert('Loading.... outlet service');
      }

      function outletComplain(){
        // alert('Loading.... outlet Complain');
      }


    </script>
