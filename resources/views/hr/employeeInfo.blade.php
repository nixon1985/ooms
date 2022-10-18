
          <!-- .page -->

          <div class="page has-sidebar has-sidebar-fluid has-sidebar-expand-xl">


            <!-- .page-inner -->
            <div class="page-inner page-inner-fill position-relative">
                <header class="page-navs bg-light shadow-sm">
                    <div class="input-group has-clearable">
                        <select class="custom-select d-block w-100" name="outlet_list_search" id="outlet_list_search" required="">
                            <option value=""> Choose... </option>
                        </select>
                        {{-- <select id="select2-single" class="form-control" data-toggle="select2" data-placeholder="Select a state" data-allow-clear="true"></select> --}}
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
                  <div class="list-group-item active" data-toggle="sidebar" data-sidebar="show" onclick="employeeDetailList('Mr. Jamal Hossen','profile.jpg')">
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
                      <a class="nav-link" data-toggle="tab" onclick="getJoiningList()" href="#joining-info">Joining Info</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#emp_edu" onclick="getEduList()">Education</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#attendance">Attendance</a>
                    </li>
                  </ul><!-- /.nav-tabs -->
                </div><!-- /.nav-scroller -->

                <!-- .tab-content -->
                <div class="tab-content pt-4" id="clientDetailsTabs">

                  <div class="tab-pane fade show active" id="client-billing-contact" role="tabpanel" aria-labelledby="client-billing-contact-tab">

                    <!-- New -->
                    <div class="card">
                      <!-- .card-body -->
                      <div class="card-body">


                      <div class="masonry-layout">

                          <div class="masonry-item col-lg-3">
                              <div class="text-center" id="profile-photo">
                                  <a href="#" class="user-avatar user-avatar-xxl">
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
                    </div>
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
                  </div>
                <!-- / Basic information detail -->

                  </div>




                  <!-- joining-info .tab-pane -->
                  <div class="tab-pane fade" id="joining-info" role="tabpanel" aria-labelledby="joining-info-tab">

                    <div class="card">

                      <div class="card-header d-flex">

                        <button type="button" class="btn btn-primary ml-auto" data-toggle="modal" data-target="#empJoiningModal" title="Add New">Add New</button>

                      </div><!-- /.card-header -->
                      <!-- .table-responsive -->
                      <div class="table-responsive">
                        <!-- .table -->
                        <table class="table" id="employee_joining_grid">
                          <!-- thead -->
                          <thead>
                            <tr>
                              <th> Outlet </th>
                              <th> Designation </th>
                              <th> Start </th>
                              {{-- <th> End </th> --}}
                              <th> Status </th>
                              <th></th>
                            </tr>
                          </thead><!-- /thead -->
                          <!-- tbody -->
                          <tbody>

                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <!-- joining-info .tab-pane -->

                  <!-- education-info .tab-pane start-->
                  <div class="tab-pane fade" id="emp_edu" role="tabpanel" aria-labelledby="emp_edu-tab">

                    <div class="card">
                        <div class="form-row" id="massageDivEdu"></div>
                      <div class="card-header d-flex">
                        <button type="button" class="btn btn-primary ml-auto" data-toggle="modal" data-target="#empEduModal" title="Add New">Add New</button>
                      </div>
                      <div class="table-responsive">
                        <table class="table" id="employee_education_grid">
                          <thead>
                            <tr>
                              <th> Exam Title </th>
                              <th> Concentration/Major </th>
                              <th> Institute </th>
                              <th> Result </th>
                              <th> Pass.Year </th>
                              <th></th>
                            </tr>
                          </thead><!-- /thead -->
                          <!-- tbody -->
                          <tbody>

                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                    <!-- education-info .tab-pane End-->

                <!-- attendance .tab-pane start-->
                <div class="tab-pane fade" id="attendance" role="tabpanel" aria-labelledby="attendance-tab">

                    <div class="card">

                    <div class="card-header d-flex">
                        <button type="button" class="btn btn-primary ml-auto" data-toggle="modal" data-target="#attendanceModal" title="Add New">Add Attendance</button>
                    </div><!-- /.card-header -->
                    <!-- .table-responsive -->
                    <div class="table-responsive">
                        <!-- .table -->
                        <table class="table" id="employee_attend_grid">
                        <!-- thead -->
                        <thead>
                            <tr>
                            {{-- <th>Employee</th> --}}
                            <th>Date</th>
                            <th> In </th>
                            <th> Out </th>
                            <th>Action</th>
                            </tr>
                        </thead><!-- /thead -->
                        <!-- tbody -->
                        <tbody>
                            <!-- tr -->
                            <tr>


                                {{-- <td class="align-middle"> Emon </td> --}}
                                <td class="align-middle"> 09/16/2018 </td>
                                <td class="align-middle"> $1,500 </td>
                                <td class="align-middle"> $1,500 </td>
                                <td class="align-middle">
                                    <div class="dropdown">
                                    <button type="button" class="btn btn-sm btn-icon btn-secondary" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true"><i class="fa fa-ellipsis-h"></i> <span class="sr-only">Actions</span></button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <div class="dropdown-arrow mr-n1"></div><button class="dropdown-item" type="button">Edit</button> <button class="dropdown-item" type="button">Delete</button>
                                    </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                    </div>
                </div>
                <!-- attendance .tab-pane End-->

                  <div class="tab-pane fade" id="client-expenses" role="tabpanel" aria-labelledby="client-expenses-tab">

                    <div class="card">

                      <div class="card-header d-flex">

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
                            </tr>
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
                            </tr>
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
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Keep in mind that modals should be placed outsite of page sidebar -->

            <!-- .Employee Entry Form Start-->
            {{-- <form id="employee_entry_form" enctype="multipart/form-data"> --}}
                <form method="POST" enctype="multipart/form-data" id="employee_basic_information" action="javascript:void(0)" >
                <div class="modal fade" id="clientNewModal" tabindex="-1" role="dialog" aria-labelledby="clientNewModalLabel" aria-hidden="true">

                  <div class="modal-dialog " role="document" style="max-width:60% !important">

                    <div class="modal-content">
                        <div class="form-row" id="massageDiv"></div>

                      <div class="modal-header">
                        <h4 id="clientNewModalLabel" class="modal-title inline-editable">
                          Employee Entry Form
                        </h4>
                      </div>

                      <div class="modal-body">

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
                                <select class="custom-select d-block w-100" name="designation_id" id="designation_id" required="">
                                    <option value=""> Choose... </option>
                                </select>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                                <label for="outlet_id">Outlet <abbr title="Required">*</abbr></label>
                                <select class="custom-select d-block w-100" name="outlet_id" id="outlet_id" required="">
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

                          <script>
                            $(function () {
                                //show it when the checkbox is clicked
                                $('input[name="make_user"]').on('click', function () {
                                    if ($(this).prop('checked')) {
                                        $('input[name="showthis"]').css("display","block");

                                    } else {
                                        $('input[name="showthis"]').css("display","none");
                                    }
                                });
                            });
                          </script>

                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="make_user">Make User</label>
                              <input type="checkbox"  name="make_user" id="make_user">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="text" class="form-control showthis" name="password" id="password">
                              </div>
                          </div>

                          <div class="col-md-6 ">
                            <div class="form-group">
                                <label for="cpassword" style="margin-top: 45px;">Confirm Password</label>
                              <input type="password" class="form-control showthis" name="cpassword" id="cpassword">
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="modal-footer">
                        {{-- <button type="submit" class="btn btn-primary" onclick="saveEmpBasic()">Save</button> --}}
                        <button type="submit" class="btn btn-primary" >Save</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
            </form>
            <!-- /.Employee Entry Form End-->

            <!-- .Employee Joining Form Start-->
            <form id="employee_joining_form" enctype="multipart/form-data">
                <div class="modal fade" id="empJoiningModal" tabindex="-1" role="dialog" aria-labelledby="empJoiningModalLabel" aria-hidden="true">
                  <div class="modal-dialog " role="document" style="max-width:60% !important">

                    <div class="modal-content">
                        <div class="form-row" id="massageDiv"></div>

                      <div class="modal-header">
                        <h4 id="empJoiningModalLabel" class="modal-title inline-editable">
                          Employee Joining Form
                        </h4>
                      </div>

                      <div class="modal-body">

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



                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" onclick="saveEmpJoining()">Save</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
            </form>
            <!-- /.Employee Joining Form End-->
            <!-- .Employee Joining Edit Form Start-->
            <form id="employee_joining_edit_form" enctype="multipart/form-data">
                <div class="modal fade" id="empJoiningEditModal" tabindex="-1" role="dialog" aria-labelledby="empJoiningEditModalLabel" aria-hidden="true">
                  <div class="modal-dialog " role="document" style="max-width:60% !important">

                    <div class="modal-content">
                        <div class="form-row" id="massageDiv"></div>

                      <div class="modal-header">
                        <h4 id="empJoiningEditModalLabel" class="modal-title inline-editable">
                          Employee Joining Edit Form
                        </h4>
                      </div>

                      <div class="modal-body">

                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                  <label for="edit_start_joining_date">Join Date</label>
                                  <input autocomplete="off" name="edit_start_joining_date" type="date" id="edit_start_joining_date" class="form-control" required>
                                  <input autocomplete="off" name="edit_joining_id" type="hidden" id="edit_joining_id" class="form-control">

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="edit_end_date">End Date</label>
                                <input autocomplete="off" name="edit_end_date" type="date" id="edit_end_date" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="edit_joining_designation_id">Designation <abbr title="Required">*</abbr></label>
                                    <select class="custom-select d-block w-100" id="edit_joining_designation_id" required="">
                                        <option value=""> Choose... </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="edit_joining_outlet_id">Outlet <abbr title="Required">*</abbr></label>
                                    <select class="custom-select d-block w-100" id="edit_joining_outlet_id" required="">
                                        <option value=""> Choose... </option>
                                    </select>
                                </div>
                          </div>



                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" onclick="updateEmpJoining()">Update</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
            </form>
            <!-- /.Employee Joining Edit Form End-->

            <!-- .Employee Edu Form Start-->
            <form id="employee_edu_form" enctype="multipart/form-data">
                <div class="modal fade" id="empEduModal" tabindex="-1" role="dialog" aria-labelledby="empEduModalLabel" aria-hidden="true">

                  <div class="modal-dialog " role="document" style="max-width:60% !important">

                    <div class="modal-content">


                      <div class="modal-header">
                        <h4 id="empEduModalLabel" class="modal-title inline-editable">
                          Employee Education Form
                        </h4>
                      </div>

                      <div class="modal-body">

                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                  <label for="degree_name">Exam Title</label>
                                  <input autocomplete="off" name="degree_name" type="text" id="degree_name" class="form-control" placeholder="Degree" required>
                                  <input  name="edu_emp_id" type="hidden" id="edu_emp_id" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                  <label for="major">Concentration/Major</label>
                                  <input autocomplete="off" name="major" type="text" id="major" class="form-control" placeholder="Concentration/Major" required>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                  <label for="institute">Institute</label>
                                  <input autocomplete="off" name="institute" type="text" id="institute" class="form-control" placeholder="Institute" required>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                  <label for="board">Board</label>
                                    <select class="custom-select d-block w-100" id="board" required="">
                                        <option value=""> Choose... </option>
                                        <option value="Barishal">Barishal</option>
                                        <option value="Barishal">Barishal</option>
                                        <option value="Cumilla">Cumilla</option>
                                        <option value="Dhaka">Dhaka</option>
                                        <option value="Dinajpur">Dinajpur</option>
                                        <option value="Jashore">Jashore</option>
                                        <option value="Mymensingh">Mymensingh</option>
                                        <option value="Mymensingh">Mymensingh</option>
                                        <option value="Sylhet">Sylhet</option>
                                        <option value="Madrasah">Madrasah</option>
                                        <option value="Technical">Technical</option>
                                        <option value="BOU">BOU</option>
                                    </select>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                  <label for="year">Year</label>
                                    <select class="custom-select d-block w-100" id="year" required="">
                                        <option value=""> Choose... </option>
                                       @for ($m = 1980; $m < date('Y'); $m++)
                                        <option value="{{$m}}"> {{$m}}</option>
                                       @endfor
                                    </select>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                  <label for="result">Result</label>
                                  <input autocomplete="off" name="result" type="text" id="result" class="form-control" placeholder="5" required>

                                </div>
                            </div>
                        </div>
                      </div>

                      <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" onclick="saveEmpEdu()">Save</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
            </form>
            <!-- /.Employee Edu Form End-->

            <!-- .Employee Edu Edit Form Start-->
            <form id="employee_edu_edit_form" enctype="multipart/form-data">
              <div class="modal fade" id="empEduEditModal" tabindex="-1" role="dialog" aria-labelledby="empEduEditModalLabel" aria-hidden="true">

                <div class="modal-dialog " role="document" style="max-width:60% !important">

                  <div class="modal-content">


                    <div class="modal-header">
                      <h4 id="empEduEditModalLabel" class="modal-title inline-editable">
                        Employee Education Edit Form
                      </h4>
                    </div>

                    <div class="modal-body">

                      <div class="form-row">
                          <div class="col-md-6">
                              <div class="form-group">
                                <label for="edit_degree_name">Exam Title</label>
                                <input autocomplete="off" name="edit_degree_name" type="text" id="edit_degree_name" class="form-control" placeholder="Degree" required>
                                <input autocomplete="off" name="edit_edu_id" type="hidden" id="edit_edu_id" class="form-control">
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                <label for="edit_major">Concentration/Major</label>
                                <input autocomplete="off" name="edit_major" type="text" id="edit_major" class="form-control" placeholder="Concentration/Major" required>

                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                <label for="edit_institute">Institute</label>
                                <input autocomplete="off" name="edit_institute" type="text" id="edit_institute" class="form-control" placeholder="Institute" required>

                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                <label for="edit_board">Board</label>
                                  <select class="custom-select d-block w-100" id="edit_board" required="">
                                      <option value=""> Choose... </option>
                                      <option value="Barishal">Barishal</option>
                                      <option value="Barishal">Barishal</option>
                                      <option value="Cumilla">Cumilla</option>
                                      <option value="Dhaka">Dhaka</option>
                                      <option value="Dinajpur">Dinajpur</option>
                                      <option value="Jashore">Jashore</option>
                                      <option value="Mymensingh">Mymensingh</option>
                                      <option value="Mymensingh">Mymensingh</option>
                                      <option value="Sylhet">Sylhet</option>
                                      <option value="Madrasah">Madrasah</option>
                                      <option value="Technical">Technical</option>
                                      <option value="BOU">BOU</option>
                                  </select>

                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                <label for="edit_year">Year</label>
                                  <select class="custom-select d-block w-100" id="edit_year" required="">
                                      <option value=""> Choose... </option>
                                     @for ($m = 1980; $m < date('Y'); $m++)
                                      <option value="{{$m}}"> {{$m}}</option>
                                     @endfor
                                  </select>

                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                <label for="edit_result">Result</label>
                                <input autocomplete="off" name="edit_result" type="text" id="edit_result" class="form-control" placeholder="5" required>

                              </div>
                          </div>
                      </div>
                    </div>

                    <div class="modal-footer">
                      <button type="submit" class="btn btn-primary" onclick="updateEmpEdu()">Update</button>
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
          </form>
          <!-- /.Employee Edu Edit Form End-->

            <!-- .Attendance  Form Start-->
            <form id="employee_attend_form" enctype="multipart/form-data">
                <div class="modal fade" id="attendanceModal" tabindex="-1" role="dialog" aria-labelledby="attendanceModalLabel" aria-hidden="true">

                  <div class="modal-dialog " role="document" style="max-width:60% !important">

                    <div class="modal-content">


                      <div class="modal-header">
                        <h4 id="attendanceModalLabel" class="modal-title inline-editable">
                          Employee Attendance Form
                        </h4>
                      </div>

                      <div class="modal-body">

                        <div class="form-row">
                            <div class="col-md-12">
                                <div class="form-group">
                                  <label for="attend_date">Date</label>
                                  <input autocomplete="off" name="attend_date" type="date" id="attend_date" class="form-control" placeholder="22-01-2022" required>

                                </div>
                            </div>
                            {{-- <div class="col-md-6">
                                <div class="form-group">
                                  <label for="employee_id">Employee</label>
                                  <select class="custom-select d-block w-100" id="employee_id" required="">
                                    <option value=""> Choose... </option>
                                </select>

                                </div>
                            </div> --}}
                            <div class="col-md-6">
                                <div class="form-group">
                                  <label for="in_time">In Time</label>
                                  <input autocomplete="off" name="in_time" type="time" id="in_time" class="form-control" placeholder="In Time" required>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                  <label for="out_time">Out Time</label>
                                  <input autocomplete="off" name="out_time" type="time" id="out_time" class="form-control" placeholder="Out Time">

                                </div>
                            </div>
                        </div>
                      </div>

                      <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" onclick="saveEmpAtten()">Save</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
            </form>
            <!-- /.Attendance  Form End-->
            <!-- .Attendance Edit Form Start-->
            <form id="employee_attend_edit_form" enctype="multipart/form-data">
                <div class="modal fade" id="attendanceEditModal" tabindex="-1" role="dialog" aria-labelledby="attendanceEditModalLabel" aria-hidden="true">

                  <div class="modal-dialog " role="document" style="max-width:60% !important">

                    <div class="modal-content">


                      <div class="modal-header">
                        <h4 id="attendanceEditModalLabel" class="modal-title inline-editable">
                          Employee Attendance Edit Form
                        </h4>
                      </div>

                      <div class="modal-body">

                        <div class="form-row">
                            <div class="col-md-12">
                                <div class="form-group">
                                  <label for="edit_attend_date">Date</label>
                                  <input autocomplete="off" name="edit_attend_date" type="date" id="edit_attend_date" class="form-control" placeholder="22-01-2022" required>
                                  <input autocomplete="off" name="attend_row_id" type="hidden" id="attend_row_id" class="form-control" >

                                </div>
                            </div>
                            {{-- <div class="col-md-6">
                                <div class="form-group">
                                  <label for="employee_id">Employee</label>
                                  <select class="custom-select d-block w-100" id="employee_id" required="">
                                    <option value=""> Choose... </option>
                                </select>

                                </div>
                            </div> --}}
                            <div class="col-md-6">
                                <div class="form-group">
                                  <label for="edit_in_time">In Time</label>
                                  <input autocomplete="off" name="edit_in_time" type="time" id="edit_in_time" class="form-control" placeholder="In Time" required>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                  <label for="edit_out_time">Out Time</label>
                                  <input autocomplete="off" name="edit_out_time" type="time" id="edit_out_time" class="form-control" placeholder="Out Time">

                                </div>
                            </div>
                        </div>
                      </div>

                      <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" onclick="updateEmpAtten()">Update</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
            </form>
            <!-- /.Attendance Edit Form End-->

            <form id="clientBillingEditForm" name="clientBillingEditForm">
              <div class="modal fade" id="clientBillingEditModal" tabindex="-1" role="dialog" aria-labelledby="clientBillingEditModalLabel" aria-hidden="true">

                <div class="modal-dialog" role="document">

                  <div class="modal-content">

                    <div class="modal-header">
                      <h6 id="clientBillingEditModalLabel" class="modal-title inline-editable">
                        <span class="sr-only">Client name</span> <input type="text" class="form-control form-control-lg" value="Zathunicon, Inc." placeholder="E.g. Stilearning, Inc." required="">
                      </h6>
                    </div>

                    <div class="modal-body">

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
                      </div>
                    </div>

                    <div class="modal-footer">
                      <button type="submit" class="btn btn-primary">Save</button> <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>

            <form id="clientContactNewForm" name="clientContactNewForm">
              <div class="modal fade" id="clientContactNewModal" tabindex="-1" role="dialog" aria-labelledby="clientContactNewModalLabel" aria-hidden="true">

                <div class="modal-dialog" role="document">

                  <div class="modal-content">

                    <div class="modal-header">
                      <h6 id="clientContactNewModalLabel" class="modal-title inline-editable">
                        <span class="sr-only">Contact name</span> <input type="text" class="form-control form-control-lg" placeholder="Name (e.g. John Doe)" required="">
                      </h6>
                    </div>

                    <div class="modal-body">

                      <div class="form-group">
                        <div class="form-label-group">
                          <input type="email" id="cnEmail" class="form-control" placeholder="Email" required=""> <label for="cnEmail">Email</label>
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="form-label-group">
                          <input type="tel" id="cnPhone" class="form-control" placeholder="Phone"> <label for="cnPhone">Phone</label>
                        </div>
                      </div>
                    </div>

                    <div class="modal-footer">
                      <button type="submit" class="btn btn-primary">Save</button> <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>

            <form id="clientContactEditForm" name="clientContactEditForm">
              <div class="modal fade" id="clientContactEditModal" tabindex="-1" role="dialog" aria-labelledby="clientContactEditModalLabel" aria-hidden="true">

                <div class="modal-dialog" role="document">

                  <div class="modal-content">

                    <div class="modal-header">
                      <h6 id="clientContactEditModalLabel" class="modal-title inline-editable">
                        <span class="sr-only">Contact name</span> <input type="text" class="form-control form-control-lg" value="Alexane Collins" placeholder="Name (e.g. John Doe)" required="">
                      </h6>
                    </div>

                    <div class="modal-body">

                      <div class="form-group">
                        <div class="form-label-group">
                          <input type="email" id="ceEmail" class="form-control" value="fhauck@gmail.com" placeholder="Email" required=""> <label for="ceEmail">Email</label>
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="form-label-group">
                          <input type="tel" id="cePhone" class="form-control" value="0621099222" placeholder="Phone"> <label for="cePhone">Phone</label>
                        </div>
                      </div>
                    </div>

                    <div class="modal-footer">
                      <button type="submit" class="btn btn-primary">Save</button> <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>




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
        $("#employee_joining_edit_form").submit(function(e) {
            e.preventDefault();
        });
        $("#employee_edu_form").submit(function(e) {
            e.preventDefault();
        });
        $("#employee_edu_edit_form").submit(function(e) {
            e.preventDefault();
        });
        $("#employee_attend_form").submit(function(e) {
            e.preventDefault();
        });
        $("#employee_attend_edit_form").submit(function(e) {
            e.preventDefault();
        });

    //getAllEmployee
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
                html += "<div class='list-group-item active' data-toggle='sidebar' data-sidebar='show' onclick='employeeDetailList("+data.emp_id+")'>";
                html += "<a href='#' class='stretched-link'></a>";
                html += "<div class='list-group-item-figure'>";
                html += "<a href='#' class='user-avatar user-avatar-md' data-toggle='tooltip' title="+data.emp_name+">";
                // html += "<img src='http://ooms.test/storage/employee/"+data.photo_path+"' alt=''>";
                html += "<img src='{{ asset('storage/employee')}}/"+data.photo_path+"' alt=''>";
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


    $('#outlet_list_search').on('change', function() {
        // alert( this.value );
        EmployeeByOutlet(this.value)
    });

    // get Employee by outlet
    function   EmployeeByOutlet(outlet_id)
    {
        // alert(outlet_id);
        var html = '';
        $.ajax({
            type: "GET",
            url: 'getAllEmployeeByOutlet/'+ outlet_id,
            context: document.body
        }).done(function(result) {
            $('.employeeList').html("");
            $.each(result, function(i,data) {
                // <!-- .list-group-item -->
                html += "<div class='list-group-item active' data-toggle='sidebar' data-sidebar='show' onclick='employeeDetailList("+data.emp_id+")'>";
                html += "<a href='#' class='stretched-link'></a>";
                html += "<div class='list-group-item-figure'>";
                html += "<a href='#' class='user-avatar user-avatar-md' data-toggle='tooltip' title="+data.emp_name+">";
                // html += "<img src='http://ooms.test/storage/employee/"+data.photo_path+"' alt=''>";
                html += "<img src='{{ asset('storage/employee')}}/"+data.photo_path+"' alt=''>";
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
    // employee details
    function employeeDetailList(emp_id) {
        var employeeInfoContactVar = '';
        sessionStorage.clear();
        var preAddr = '';
        var perAddr = '';
            $.ajax({
            type: "GET",
            url: "employeeByID/" + emp_id,
            // data: { sales_ref: sales_ref},
            dataType: 'json',
            success: function (data) {
                console.log(data)
                if (data) {

                    var photoPath = '{{ asset('storage/employee/')}}'+"/"+data.photo_path;
                    var empHtml = '<a href="#" class="user-avatar user-avatar-md" data-toggle="tooltip" title="Martha Myers"><img src="'+photoPath+'" alt=""></a> ' + data.emp_name;

                    $("#title-outlet-name").html(empHtml);

                    var profileTitle = '<a href="#" class="user-avatar user-avatar-xxl"><img src="'+photoPath+'" alt=""></a><h2 class="h4 mt-2 mb-0"> '+ data.emp_name +' </h2> <p class="text-muted"> '+ data.designation_name +' </p>';
                    $("#profile-photo").html(profileTitle);

                    employeeInfoContactVar += "<strong>Mobile : "+data.contact_no+"</strong>";
                    employeeInfoContactVar += "<address> Email: "+data.email_id;
                    // employeeInfoContactVar += "<br>Mobile: "+data.contact_no+" <br> Join Date: "+data.joining_date+" </address>";
                    employeeInfoContactVar += " <br> Join Date: "+data.joining_date;
                    employeeInfoContactVar += " <br> <strong> Outlet Name: "+data.outlet_name+"</strong> </address>";
                    $(".employeeInfoContact").html(employeeInfoContactVar);

                    preAddr += data.present_address;
                    perAddr += data.permanent_address;

                    $(".preAddr").html(preAddr);
                    $(".perAddr").html(perAddr);
                    $(".card-title111").html('Parmanent Address');
                    $(".card-title222").html('Parmanent Address');

                    sessionStorage.setItem("joining_emp_id", data.emp_id);
                    sessionStorage.setItem("edu_emp_id", data.emp_id);
                    getJoiningList();
                    getEduList();
                    getAttendList();


                    // console.log(sessionStorage.getItem("joining_emp_id"));
                    // console.log(sessionStorage.getItem("edu_emp_id"));

                } else {
                    // $('#customer_id').val('');
                    // $("#territory_id").trigger("change");
                }
            }
            });
        // Call Tab containt loading function
        // storeTabId(tabID);

    }


    // outlet
    function getAlloutlet(){
        var html = '';
        $.ajax({
            type: "GET",
            url: 'getAllOutlet',
            context: document.body
        }).done(function(result) {
            // console.log(result);
            var html = '<option value="">Choose... </option>';
            $.each(result, function(i,data) {
                html +='<option value="'+data.outlet_id+'">'+data.outlet_name+'</option>';
            });
            $('#outlet_id').html(html);
            $('#outlet_list_search').html(html);
            $('#joining_outlet_id').html(html);
            $('#edit_joining_outlet_id').html(html);
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
            // console.log(result);
            var html = '<option value="">Choose... </option>';
            $.each(result, function(i,data) {
                html +='<option value="'+data.designation_id+'">'+data.designation_name+'</option>';
            });
            $('#designation_id').html(html);
            $('#joining_designation_id').html(html);
            $('#edit_joining_designation_id').html(html);
        });
    }
    // Employee list for attendent
    function getEmployeeList(){
        var html = '';
        $.ajax({
            type: "GET",
            url: 'getAllEmployee',
            context: document.body
        }).done(function(result) {
            // console.log(result);
            var html = '<option value="">Choose... </option>';
            $.each(result, function(i,data) {
                html +='<option value="'+data.emp_id+'">'+data.emp_name+'</option>';
            });
            $('#employee_id').html(html);
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
    //  Employee Joining Form
    function saveEmpJoining(){
        var empId               = sessionStorage.getItem("joining_emp_id");
        var empDesignation      = $('#joining_designation_id').val();
        var empOutlet           = $('#joining_outlet_id').val();
        var empJoin             = $('#start_joining_date').val();
        var empEnd              = $('#end_date').val();

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
                $('#joining_emp_id').val("");
                $('#joining_designation_id').val("");
                $('#joining_outlet_id').val("");
                $('#start_joining_date').val("");
                $('#end_date').val("");

                // setEmpId();
                getJoiningList();
                $('#empJoiningModal').modal('toggle');



            }else{
                alert('Error');
            }
        });
    }

    //  Update Joining Form
    function updateEmpJoining(){
        var rowId               = $('#edit_joining_id').val();
        var empId               = sessionStorage.getItem("joining_emp_id");
        var empDesignation      = $('#edit_joining_designation_id').val();
        var empOutlet           = $('#edit_joining_outlet_id').val();
        var empJoin             = $('#edit_start_joining_date').val();
        var empEnd              = $('#end_date').val();

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
                edit_joining_id:rowId,
            },

            context: document.body
        }).done(function(result) {
            if(result==1){
                $("#massageDiv").show();
                $('#joining_emp_id').val("");
                $('#edit_joining_designation_id').val("");
                $('#edit_joining_outlet_id').val("");
                $('#edit_start_joining_date').val("");
                $('#end_date').val("");

                // setEmpId();
                getJoiningList();
                $('#empJoiningEditModal').modal('toggle');



            }else{
                alert('Error');
            }
        });
    }
    //  Save Employee Education Form
    function saveEmpEdu(){
        var empId          = sessionStorage.getItem("edu_emp_id");
        var empDegree      = $('#degree_name').val();
        var empMajor       = $('#major').val();
        var empInstitute   = $('#institute').val();
        var empBoard       = $('#board').val();
        var empYear        = $('#year').val();
        var empResult      = $('#result').val();

        var actionlink = 'saveEmployeeEduInfo';
        $.ajax({
            type: "POST",
            url: actionlink,
            data:{
                _token:'{{csrf_token()}}',
                emp_id:empId,
                degree_name:empDegree,
                major:empMajor,
                institute:empInstitute,
                board:empBoard,
                year:empYear,
                result:empResult
            },

            context: document.body
        }).done(function(result) {
            if(result==1){
                $("#massageDivEdu").show();
                $('#edu_emp_id').val("");
                $('#degree_name').val("");
                $('#major').val("");
                $('#institute').val("");
                $('#board').val("");
                $('#year').val("");
                $('#result').val("");
                $('#empEduModal').modal('toggle');
                getEduList();

            }else{
                alert('Error');
            }
        });
    }

    //  Update Employee Education Form
    function updateEmpEdu(){
        var rowId          = $('#edit_edu_id').val();
        var empId          = sessionStorage.getItem("edu_emp_id");
        var empDegree      = $('#edit_degree_name').val();
        var empMajor       = $('#edit_major').val();
        var empInstitute   = $('#edit_institute').val();
        var empBoard       = $('#edit_board').val();
        var empYear        = $('#edit_year').val();
        var empResult      = $('#edit_result').val();

        var actionlink = 'saveEmployeeEduInfo';
        $.ajax({
            type: "POST",
            url: actionlink,
            data:{
                _token:'{{csrf_token()}}',
                emp_id:empId,
                edit_emp_id:rowId,
                degree_name:empDegree,
                major:empMajor,
                institute:empInstitute,
                board:empBoard,
                year:empYear,
                result:empResult
            },

            context: document.body
        }).done(function(result) {
            if(result==1){
                $("#massageDivEdu").show();

                $('#edit_degree_name').val("");
                $('#edit_major').val("");
                $('#edit_institute').val("");
                $('#edit_board').val("");
                $('#edit_year').val("");
                $('#edit_result').val("");
                $('#empEduEditModal').modal('toggle');
                getEduList();

            }else{
                alert('Error');
            }
        });
    }

    // Save Employee Attendent
    function saveEmpAtten()
    {
        // var empId           = $('#employee_id').val();
        var empId           = sessionStorage.getItem("edu_emp_id");
        var empDate         = $('#attend_date').val();
        var empInTime       = $('#in_time').val();
        var empOutTime     = $('#out_time').val();


        var actionlink = 'saveEmployeeAttendInfo';
        $.ajax({
            type: "POST",
            url: actionlink,
            data:{
                _token:'{{csrf_token()}}',
                emp_id:empId,
                attend_date:empDate,
                in_time:empInTime,
                out_time:empOutTime,
            },

            context: document.body
        }).done(function(result) {
            if(result==1){
                $("#massageDivEdu").show();
                $('#employee_id').val("");
                $('#attend_date').val("");
                $('#in_time').val("");
                $('#out_time').val("");
                $('#attendanceModal').modal('toggle');
                getAttendList();

            }else{
                alert('Error');
            }
        });
    }

    // Udate Employee Attendent
    function updateEmpAtten()
    {
        var rowId           = $('#attend_row_id').val();
        var empId           = sessionStorage.getItem("edu_emp_id");
        var empDate         = $('#edit_attend_date').val();
        var empInTime       = $('#edit_in_time').val();
        var empOutTime     = $('#edit_out_time').val();


        var actionlink = 'saveEmployeeAttendInfo';
        $.ajax({
            type: "POST",
            url: actionlink,
            data:{
                _token:'{{csrf_token()}}',
                row_id:rowId,
                emp_id:empId,
                attend_date:empDate,
                in_time:empInTime,
                out_time:empOutTime,
            },

            context: document.body
        }).done(function(result) {
            if(result==1){
                $("#massageDivEdu").show();
                $('#edit_attend_date').val("");
                $('#edit_in_time').val("");
                $('#edit_out_time').val("");
                $('#attendanceEditModal').modal('toggle');
                getAttendList();

            }else{
                alert('Error');
            }
        });
    }

    // getJoiningList
    function getJoiningList()
    {

        var html = '';
        $('#employee_joining_grid tbody').html("");
        var empId = sessionStorage.getItem("joining_emp_id")


        $.ajax({
            type: "GET",
            url: 'joiningByID/'+empId,
            context: document.body
        }).done(function(result) {
            $.each(result, function(i,data) {

                html += "<tr>";
                // html +="<td class='align-middle'>"+i+"</td>";
                html +="<td class='align-middle'>"+data.outlet+"</td>";
                html +="<td class='align-middle'>"+data.designation+"</td>";
                html +="<td class='align-middle'>"+data.joining_date+"</td>";
                html +="<td class='align-middle'>"+data.created_by+"</td>";
                // html +='<td class="alian-middle text-right"><button type="button" class="btn btn-sm btn-icon btn-secondary"><i class="fa fa-pencil-alt"></i> <span class="sr-only">Edit</span></button><button type="button" onclick="removeJoining('+ data.emp_rec_id+')" class="btn btn-sm btn-icon btn-secondary"> <i class="far fa-trash-alt"></i><span class="sr-only">Remove</span> </button></td>';
                html +='<td class="alian-middle text-right"><button type="button" class="btn btn-sm btn-icon btn-secondary" onclick="editEmpJoining('+ data.emp_rec_id+')"><i class="fa fa-pencil-alt"></i> <span class="sr-only">Edit</span></button> &nbsp;<button type="button" onclick="removeJoining('+ data.emp_rec_id+')" class="btn btn-sm btn-icon btn-secondary"> <i class="far fa-trash-alt"></i><span class="sr-only">Remove</span> </button></td>';
                html += '</tr>';
            });
            $('#employee_joining_grid tbody').html(html);
        });
    }

    // editEmpJoining
    function editEmpJoining(row_id)
    {
        $('#empJoiningEditModal').modal('show');
        $.ajax({
            type: "GET",
            url: 'editJoiningByID/'+row_id,
            context: document.body
        }).done(function(result) {
                $('#edit_joining_id').val(result.emp_rec_id);
                $('#edit_start_joining_date').val(result.joining_date);
                $('#edit_joining_designation_id').val(result.designation_id);
                $('#edit_joining_outlet_id').val(result.outlet_id);
                $('#end_date').val("");
            // $('#employee_joining_grid tbody').html(html);
        });
    }
    // editEmpEdu
    function editEmpEdu(row_id)
    {
        $('#empEduEditModal').modal('show');
        $.ajax({
            type: "GET",
            url: 'editEduByID/'+row_id,
            context: document.body
        }).done(function(result) {
                $('#edit_edu_id').val(result.edu_id);
                $('#edit_degree_name').val(result.degree_name);
                $('#edit_major').val(result.major);
                $('#edit_institute').val(result.institute);
                $('#edit_board').val(result.board);
                $('#edit_year').val(result.year);
                $('#edit_result').val(result.result);
        });
    }
    // editAttend
    function editAttend(row_id)
    {
        $('#attendanceEditModal').modal('show');
        $.ajax({
            type: "GET",
            url: 'editAttendByID/'+row_id,
            context: document.body
        }).done(function(result) {
                $('#attend_row_id').val(result.attend_id);
                $('#edit_attend_date').val(result.attend_date);
                $('#edit_in_time').val(result.in_time);
                $('#edit_out_time').val(result.out_time);

        });
    }


    // getEduList
    function getEduList()
    {
        var html = '';
        $('#employee_education_grid tbody').html("");

        var empId = sessionStorage.getItem("edu_emp_id");
        // getEduList(empId);
        $.ajax({
            type: "GET",
            url: 'eduByID/'+empId,
            context: document.body
        }).done(function(result) {
            $.each(result, function(i,data) {
                html += "<tr>";
                // html +="<td class='align-middle'>"+i+"</td>";
                html +="<td class='align-middle'>"+data.degree_name+"</td>";
                html +="<td class='align-middle'>"+data.major+"</td>";
                html +="<td class='align-middle'>"+data.institute+"</td>";
                html +="<td class='align-middle'>"+data.result+"</td>";
                html +="<td class='align-middle'>"+data.year+"</td>";
                // html +='<td class="alian-middle text-right"><button type="button" class="btn btn-sm btn-icon btn-secondary"><i class="fa fa-pencil-alt"></i> <span class="sr-only">Edit</span></button><button type="button" onclick="removeEdu('+data.edu_id+')" class="btn btn-sm btn-icon btn-secondary"> <i class="far fa-trash-alt"></i><span class="sr-only">Remove</span> </button></td>';
                html +='<td class="alian-middle text-right"><button type="button" class="btn btn-sm btn-icon btn-secondary" onclick="editEmpEdu('+data.edu_id+')"><i class="fa fa-pencil-alt"></i> <span class="sr-only">Edit</span></button><button type="button" onclick="removeEdu('+data.edu_id+')" class="btn btn-sm btn-icon btn-secondary"> <i class="far fa-trash-alt"></i><span class="sr-only">Remove</span> </button></td>';
                html += '</tr>';
            });
            $('#employee_education_grid tbody').html(html);

        });
    }

    // getAttendList
    function getAttendList()
    {
        var html = '';
        $('#employee_attend_grid tbody').html("");

        var empId = sessionStorage.getItem("edu_emp_id");
        // getEduList(empId);
        $.ajax({
            type: "GET",
            url: 'attendByID/'+empId,
            context: document.body
        }).done(function(result) {
            $.each(result, function(i,data) {
                html += "<tr>";
                // html +="<td class='align-middle'>"+i+"</td>";
                // html +="<td class='align-middle'>"+data.emp_id+"</td>";
                html +="<td class='align-middle'>"+data.attend_date+"</td>";
                html +="<td class='align-middle'>"+data.in_time+"</td>";
                html +="<td class='align-middle'>"+data.out_time+"</td>";
                // html +='<td class="alian-middle text-right"><button type="button" class="btn btn-sm btn-icon btn-secondary"><i class="fa fa-pencil-alt"></i> <span class="sr-only">Edit</span></button><button type="button" onclick="removeEdu('+data.edu_id+')" class="btn btn-sm btn-icon btn-secondary"> <i class="far fa-trash-alt"></i><span class="sr-only">Remove</span> </button></td>';
                html +='<td class="alian-middle text-right"><button type="button" class="btn btn-sm btn-icon btn-secondary" onclick="editAttend('+data.attend_id+')"><i class="fa fa-pencil-alt"></i> <span class="sr-only">Edit</span></button><button type="button" onclick="removeAttend('+data.attend_id+')" class="btn btn-sm btn-icon btn-secondary"> <i class="far fa-trash-alt"></i><span class="sr-only">Remove</span> </button></td>';
                html += '</tr>';
            });
            $('#employee_attend_grid tbody').html(html);
            // getEmployeeList();

        });
    }

    // remove joining row
    function removeJoining(rowId)
    {
        var html = '';
        $.ajax({
            type: "DELETE",
            url: 'deleteEmpJoiningInfo/'+rowId,
            data:{_token:'{{csrf_token()}}',row_id:rowId}
        }).done(function(result) {
            $('#employee_joining_grid tbody').html("");
            getJoiningList();
        });
    }

    // remove education row
    function removeEdu(rowId)
    {
        var html = '';
        $.ajax({
            type: "DELETE",
            url: 'deleteEmpEduInfo/'+rowId,
            data:{_token:'{{csrf_token()}}',row_id:rowId}
        }).done(function(result) {
            $('#employee_education_grid tbody').html("");
            getEduList();
        });
    }

    // remove attend row
    function removeAttend(rowId)
    {
        var html = '';
        $.ajax({
            type: "DELETE",
            url: 'deleteEmpAttendInfo/'+rowId,
            data:{_token:'{{csrf_token()}}',row_id:rowId}
        }).done(function(result) {
            $('#employee_attend_grid tbody').html("");
            getAttendList();
        });
    }
      //////////// Employee crud ends


      var tabID='basicInfo';







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
{{-- save employee  --}}
<script type="text/javascript">
    $(document).ready(function (e) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });
    $('#employee_basic_information').submit(function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            type:'POST',
            url: "{{ url('saveEmployeeBasicInfo')}}",
            data: formData,
            cache:false,
            contentType: false,
            processData: false,
            success: (data) => {
                this.reset();
                $('#clientNewModal').modal('toggle');
                getAllEmployee();
            },
            error: function(data){
                console.log(data);
            }
        });
        });
    });
</script>
