<!-- .aside-menu -->
          <div class="aside-menu overflow-hidden">
            <!-- .stacked-menu -->
            <nav id="stacked-menu" class="stacked-menu">
              <!-- .menu -->
              <ul class="menu">
                <!-- .menu-item -->
                <li class="menu-item has-active">
                  <a href="#" class="menu-link" onClick="loadRemotePage('dashboard');">
                      <span class="menu-icon fas fa-home"></span> <span class="menu-text">Dashboard</span>
                  </a>
                </li><!-- /.menu-item -->
                <!-- .menu-item -->

                <li class="menu-item has-child">
                  <a href="#" class="menu-link"><span class="menu-icon far fa-building"></span> <span class="menu-text">Outlet</span></a>
                  <ul class="menu">
                    <li class="menu-item">
                      <a href="#" onClick="loadRemotePage('outletinfo');" class="menu-link">Outlet Info</a>
                    </li>
                  </ul>
                </li>

                <li class="menu-item has-child">
                  <a href="#" class="menu-link"><span class="menu-icon oi oi-person"></span> <span class="menu-text">HR</span> <span class="badge badge-warning">New</span></a> <!-- child menu -->
                  <ul class="menu">
                    <li class="menu-item">
                      <a href="#" class="menu-link" onClick="loadRemotePage('employeeInfo');" >Employee Info</a>
                    </li>

                    <li class="menu-item">
                      <a href="#" class="menu-link" onClick="loadRemotePage('entryform.php');">Attendance</a>
                    </li>


                    <li class="menu-item">
                      <a href="page-teams.html" class="menu-link">Leave Application</a>
                    </li>
                  </ul><!-- /child menu -->
                </li><!-- /.menu-item -->
                <!-- .menu-item -->
                <li class="menu-item has-child">
                  <a href="#" class="menu-link"><span class="menu-icon oi oi-wrench"></span> <span class="menu-text">Maintenance</span></a> <!-- child menu -->
                  <ul class="menu">
                      <li class="menu-item">
                          <a href="#" class="menu-link" onclick="loadRemotePage('maintenanceConfig')"> Configuration </a>
                      </li>

                    <li class="menu-item">
                      <a href="#" class="menu-link" onclick="loadRemotePage('servicing')">Schedule Maintenance</a>
                    </li>
                    <li class="menu-item">
                      <a href="#" class="menu-link" onclick="loadRemotePage('getServiceUI')">Service Panel</a>
                    </li>
                    <li class="menu-item">
                      <a href="#" class="menu-link" onclick="loadRemotePage('complain')" >Observe the request</a>
                    </li>
                  </ul><!-- /child menu -->
                </li><!-- /.menu-item -->
                <!-- .menu-item -->
                <li class="menu-item has-child">
                  <a href="#" class="menu-link"><span class="menu-icon oi oi-puzzle-piece"></span> <span class="menu-text">Asset Management</span></a> <!-- child menu -->
                  <ul class="menu">
                      <!--
                      <li class="menu-item has-child">
                          <a href="#" class="menu-link">Basic Config</a>
                          <ul class="menu">
                              <li class="menu-item">
                                  <a href="#" class="menu-link" onclick="loadRemotePage('assetGroup')" >Asset Group</a>
                              </li>
                          </ul>
                      </li>
                      -->
                      <li class="menu-item">
                          <a href="#" class="menu-link" onclick="loadRemotePage('assetConfigUi')" >Asset Config</a>
                      </li>
                      <li class="menu-item">
                          <a href="#" class="menu-link" onclick="loadRemotePage('assetRegister')" >Asset List</a>
                      </li>

                    <li class="menu-item">
                      <a href="user-activities.html" class="menu-link">Asset Issue</a>
                    </li>
                    <li class="menu-item">
                      <a href="user-teams.html" class="menu-link">Asset Transfer</a>
                    </li>
                    <li class="menu-item">
                      <a href="user-projects.html" class="menu-link">Asset Destroy</a>
                    </li>
                  </ul><!-- /child menu -->
                </li><!-- /.menu-item -->
                <!-- .menu-item -->
                <li class="menu-item has-child">
                  <a href="#" class="menu-link"><span class="menu-icon oi oi-cart"></span> <span class="menu-text">Sales</span> <span class="badge badge-subtle badge-success">+4</span></a> <!-- child menu -->
                  <ul class="menu">
                    <li class="menu-item">
                      <a href="layout-blank.html" class="menu-link">Sales Target Setup</a>
                    </li>
                    <li class="menu-item">
                      <a href="layout-nosearch.html" class="menu-link">Daily Sales Posting</a>
                    </li>
                    <li class="menu-item">
                      <a href="layout-horizontal-menu.html" class="menu-link">Sales Report</a>
                    </li>
                  </ul><!-- /child menu -->
                </li><!-- /.menu-item -->

                <li class="menu-item has-child">
                  <a href="#" class="menu-link"><span class="menu-icon oi oi-chat"></span> <span class="menu-text">Branding And Marketing</span> <span class="badge badge-subtle badge-success">+4</span></a> <!-- child menu -->
                  <ul class="menu">
                    <li class="menu-item">
                      <a href="#" class="menu-link" onclick="loadRemotePage('brandingMaterial')" >Create Branding Material</a>
                    </li>
                    <li class="menu-item">
                      <a href="layout-nosearch.html" class="menu-link">Allocate the Branding Material</a>
                    </li>
                  </ul><!-- /child menu -->
                </li><!-- /.menu-item -->

                <!-- .menu-header -->
                <li class="menu-header">Reports </li><!-- /.menu-header -->
                <!-- .menu-item -->
                <li class="menu-item has-child">
                  <a href="#" class="menu-link"><span class="menu-icon far fa-file"></span> <span class="menu-text">Asset Information</span></a> <!-- child menu -->
                  <ul class="menu">
                    <li class="menu-item"><a href="#" class="menu-link">Asset List</a></li>
                      <li class="menu-item"><a href="#" class="menu-link">Damage Assets</a></li>
                  </ul><!-- /child menu -->
                </li><!-- /.menu-item -->
                <!-- .menu-item -->

                  <li class="menu-item has-child">
                      <a href="#" class="menu-link"><span class="menu-icon far fa-file"></span> <span class="menu-text">Maintenance</span></a> <!-- child menu -->
                      <ul class="menu">
                          <li class="menu-item">
                              <a href="#" class="menu-link" onclick="loadRemotePage('reportNewServiceRequest')">Pending Request</a>
                          </li>
                          <li class="menu-item">
                              <a href="#" class="menu-link">In Progress</a>
                          </li>

                          <li class="menu-item">
                              <a href="#" class="menu-link">Progress Done</a>
                          </li>

                      </ul><!-- /child menu -->
                  </li><!-- /.menu-item -->


                <!-- .menu-item -->

                <!-- .menu-item -->

              </ul><!-- /.menu -->
            </nav><!-- /.stacked-menu -->
          </div><!-- /.aside-menu -->
