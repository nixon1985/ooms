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
                      <a href="#" class="menu-link" onClick="loadRemotePage('empinfo');" >Employee Info</a>
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
                      <a href="layout-blank.html" class="menu-link">Create Branding Material</a>
                    </li>
                    <li class="menu-item">
                      <a href="layout-nosearch.html" class="menu-link">Allocate the Branding Material</a>
                    </li>
                  </ul><!-- /child menu -->
                </li><!-- /.menu-item -->


                <!-- .menu-item -->
                <li class="menu-item">
                  <a href="landing-page.html" class="menu-link"><span class="menu-icon fas fa-rocket"></span> <span class="menu-text">Landing Page</span></a>
                </li><!-- /.menu-item -->
                <!-- .menu-header -->
                <li class="menu-header">Reports </li><!-- /.menu-header -->
                <!-- .menu-item -->
                <li class="menu-item has-child">
                  <a href="#" class="menu-link"><span class="menu-icon far fa-file"></span> <span class="menu-text">Components</span></a> <!-- child menu -->
                  <ul class="menu">
                    <li class="menu-item">
                      <a href="component-general.html" class="menu-link">General</a>
                    </li>
                    <li class="menu-item">
                      <a href="component-icons.html" class="menu-link">Icons</a>
                    </li>
                    <li class="menu-item">
                      <a href="component-rich-media.html" class="menu-link">Rich Media</a>
                    </li>
                    <li class="menu-item">
                      <a href="component-list-views.html" class="menu-link">List Views</a>
                    </li>
                    <li class="menu-item">
                      <a href="component-sortable-nestable.html" class="menu-link">Sortable & Nestable</a>
                    </li>
                    <li class="menu-item">
                      <a href="component-activity.html" class="menu-link">Activity</a>
                    </li>
                    <li class="menu-item">
                      <a href="component-steps.html" class="menu-link">Steps</a>
                    </li>
                    <li class="menu-item">
                      <a href="component-tasks.html" class="menu-link">Tasks</a>
                    </li>
                    <li class="menu-item">
                      <a href="component-metrics.html" class="menu-link">Metrics</a>
                    </li>
                  </ul><!-- /child menu -->
                </li><!-- /.menu-item -->
                <!-- .menu-item -->
                <li class="menu-item has-child">
                  <a href="#" class="menu-link"><span class="menu-icon oi oi-pencil"></span> <span class="menu-text">Forms</span></a> <!-- child menu -->
                  <ul class="menu">
                    <li class="menu-item">
                      <a href="form-basic.html" class="menu-link">Basic Elements</a>
                    </li>
                    <li class="menu-item">
                      <a href="form-autocompletes.html" class="menu-link">Autocompletes</a>
                    </li>
                    <li class="menu-item">
                      <a href="form-pickers.html" class="menu-link">Pickers</a>
                    </li>
                    <li class="menu-item">
                      <a href="form-editors.html" class="menu-link">Editors</a>
                    </li>
                  </ul><!-- /child menu -->
                </li><!-- /.menu-item -->
                <!-- .menu-item -->
                <li class="menu-item has-child">
                  <a href="#" class="menu-link"><span class="menu-icon fas fa-table"></span> <span class="menu-text">Tables</span></a> <!-- child menu -->
                  <ul class="menu">
                    <li class="menu-item">
                      <a href="table-basic.html" class="menu-link">Basic Table</a>
                    </li>
                    <li class="menu-item">
                      <a href="table-datatables.html" class="menu-link">Datatables</a>
                    </li>
                    <li class="menu-item">
                      <a href="table-responsive-datatables.html" class="menu-link">Responsive Datatables</a>
                    </li>
                    <li class="menu-item">
                      <a href="table-filters-datatables.html" class="menu-link">Filter Columns</a>
                    </li>
                  </ul><!-- /child menu -->
                </li><!-- /.menu-item -->
                <!-- .menu-item -->
                <li class="menu-item has-child">
                  <a href="#" class="menu-link"><span class="menu-icon oi oi-bar-chart"></span> <span class="menu-text">Collections</span></a> <!-- child menu -->
                  <ul class="menu">
                    <li class="menu-item has-child">
                      <a href="#" class="menu-link">Chart.js</a> <!-- grand child menu -->
                      <ul class="menu">
                        <li class="menu-item">
                          <a href="collection-chartjs-line.html" class="menu-link">Line</a>
                        </li>
                        <li class="menu-item">
                          <a href="collection-chartjs-bar.html" class="menu-link">Bar</a>
                        </li>
                        <li class="menu-item">
                          <a href="collection-chartjs-radar-scatter.html" class="menu-link">Radar & Scatter</a>
                        </li>
                        <li class="menu-item">
                          <a href="collection-chartjs-others.html" class="menu-link">Others</a>
                        </li>
                      </ul><!-- /grand child menu -->
                    </li>
                    <li class="menu-item">
                      <a href="collection-flot-charts.html" class="menu-link">Flot</a>
                    </li>
                    <li class="menu-item">
                      <a href="collection-inline-charts.html" class="menu-link">Inline Charts</a>
                    </li>
                    <li class="menu-item">
                      <a href="collection-jqvmap.html" class="menu-link">Vector Map</a>
                    </li>
                  </ul><!-- /child menu -->
                </li><!-- /.menu-item -->
                <!-- .menu-item -->
                <li class="menu-item has-child">
                  <a href="#" class="menu-link"><span class="menu-icon oi oi-list-rich"></span> <span class="menu-text">Level Menu</span></a> <!-- child menu -->
                  <ul class="menu">
                    <li class="menu-item">
                      <a href="#" class="menu-link">Menu Item</a>
                    </li>
                    <li class="menu-item has-child">
                      <a href="#" class="menu-link">Menu Item</a> <!-- grand child menu -->
                      <ul class="menu">
                        <li class="menu-item">
                          <a href="#" class="menu-link">Child Item</a>
                        </li>
                        <li class="menu-item">
                          <a href="#" class="menu-link">Child Item</a>
                        </li>
                        <li class="menu-item has-child">
                          <a href="#" class="menu-link">Child Item</a> <!-- grand child menu -->
                          <ul class="menu">
                            <li class="menu-item">
                              <a href="#" class="menu-link">Grand Child Item</a>
                            </li>
                            <li class="menu-item">
                              <a href="#" class="menu-link">Grand Child Item</a>
                            </li>
                            <li class="menu-item">
                              <a href="#" class="menu-link">Grand Child Item</a>
                            </li>
                            <li class="menu-item">
                              <a href="#" class="menu-link">Grand Child Item</a>
                            </li>
                          </ul><!-- /grand child menu -->
                        </li>
                        <li class="menu-item">
                          <a href="#" class="menu-link">Child Item</a>
                        </li>
                      </ul><!-- /grand child menu -->
                    </li>
                    <li class="menu-item">
                      <a href="#" class="menu-link">Menu Item</a>
                    </li>
                  </ul><!-- /child menu -->
                </li><!-- /.menu-item -->
              </ul><!-- /.menu -->
            </nav><!-- /.stacked-menu -->
          </div><!-- /.aside-menu -->
