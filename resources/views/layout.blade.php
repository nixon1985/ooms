<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!-- End Required meta tags -->
    <!-- Begin SEO tag -->
    <title> Dashboard | Looper - Bootstrap 4 Admin Theme </title>
    <meta property="og:title" content="Dashboard">
    <meta name="author" content="Beni Arisandi">
    <meta property="og:locale" content="en_US">
    <meta name="description" content="Responsive admin theme build on top of Bootstrap 4">
    <meta property="og:description" content="Responsive admin theme build on top of Bootstrap 4">
    <link rel="canonical" href="https://uselooper.com">
    <meta property="og:url" content="https://uselooper.com">
    <meta property="og:site_name" content="Looper - Bootstrap 4 Admin Theme">

    <script type="application/ld+json">
      {
        "name": "Looper - Bootstrap 4 Admin Theme",
        "description": "Responsive admin theme build on top of Bootstrap 4",
        "author":
        {
          "@type": "Person",
          "name": "Beni Arisandi"
        },
        "@type": "WebSite",
        "url": "",
        "headline": "Dashboard",
        "@context": "http://schema.org"
      }
    </script><!-- End SEO tag -->
    <!-- FAVICONS -->
    <link rel="apple-touch-icon" sizes="144x144" href="assets/apple-touch-icon.png">
    <link rel="shortcut icon" href="assets/favicon.ico">
    <meta name="theme-color" content="#3063A0"><!-- End FAVICONS -->
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" rel="stylesheet"><!-- End GOOGLE FONT -->
    <!-- BEGIN PLUGINS STYLES -->
    <link rel="stylesheet" href="assets/vendor/open-iconic/font/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="assets/vendor/flatpickr/flatpickr.min.css"><!-- END PLUGINS STYLES -->
    <!-- BEGIN THEME STYLES -->
    <link rel="stylesheet" href="assets/stylesheets/theme.min.css" data-skin="default">
    <link rel="stylesheet" href="assets/stylesheets/theme-dark.min.css" data-skin="dark">
    <link rel="stylesheet" href="assets/stylesheets/custom.css">
    <script>
      var skin = localStorage.getItem('skin') || 'default';
      var isCompact = JSON.parse(localStorage.getItem('hasCompactMenu'));
      var disabledSkinStylesheet = document.querySelector('link[data-skin]:not([data-skin="' + skin + '"])');
      // Disable unused skin immediately
      disabledSkinStylesheet.setAttribute('rel', '');
      disabledSkinStylesheet.setAttribute('disabled', true);
      // add flag class to html immediately
      if (isCompact == true) document.querySelector('html').classList.add('preparing-compact-menu');
    </script><!-- END THEME STYLES -->
  </head>
  <body>
    <!-- .app -->
    <div class="app">
        <!--[if lt IE 10]>
        <div class="page-message" role="alert">You are using an <strong>outdated</strong> browser. Please <a class="alert-link" href="http://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</div>
        <![endif]-->
        <!-- .app-header -->
        @include("header")

      <!-- .app-aside -->
      <aside class="app-aside app-aside-expand-md app-aside-light">
        <!-- .aside-content -->
        <div class="aside-content">



		        <!-- Nixon Header dropdown [for Mobile view only] -->

            <!-- .aside-header -->
            <header class="aside-header d-block d-md-none">
              <!-- .btn-account -->
              <button class="btn-account" type="button" data-toggle="collapse" data-target="#dropdown-aside"><span class="user-avatar user-avatar-lg"><img src="assets/images/avatars/profile.jpg" alt=""></span> <span class="account-icon"><span class="fa fa-caret-down fa-lg"></span></span> <span class="account-summary"><span class="account-name">Beni Arisandi</span> <span class="account-description">Marketing Manager</span></span></button> <!-- /.btn-account -->
              <!-- .dropdown-aside -->
              <div id="dropdown-aside" class="dropdown-aside collapse">
                <!-- dropdown-items -->
                <div class="pb-3">
                  <a class="dropdown-item" href="user-profile.html"><span class="dropdown-icon oi oi-person"></span> Profile </a> <a class="dropdown-item" href="auth-signin-v1.html"><span class="dropdown-icon oi oi-account-logout"></span> Logout</a>
                  <div class="dropdown-divider">

                  </div><a class="dropdown-item" href="#">Help Center</a> <a class="dropdown-item" href="#">Ask Forum</a> <a class="dropdown-item" href="#">Keyboard Shortcuts</a>
                </div><!-- /dropdown-items -->
              </div><!-- /.dropdown-aside -->
            </header><!-- /.aside-header -->


              @include("left_menu")


          <!-- Skin changer -->
          <footer class="aside-footer border-top p-2">
            <button class="btn btn-light btn-block text-primary" data-toggle="skin"><span class="d-compact-menu-none">Night mode</span> <i class="fas fa-moon ml-1"></i></button>
          </footer><!-- /Skin changer -->
        </div><!-- /.aside-content -->
      </aside><!-- /.app-aside -->




      <!-- .app-main -->
      <main class="app-main">
        <!-- .wrapper -->
        <div class="wrapper" id="inner-content">
            <!--  inner content will be loading here
                  #####################################
                  ####################################
                  ####################################
            -->

        </div>

        @include("footer")
        <!-- /.wrapper -->
      </main><!-- /.app-main gg-->
    </div><!-- /.app -->
    <!-- BEGIN BASE JS -->

    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/popper.js/umd/popper.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script> <!-- END BASE JS -->
    <!-- BEGIN PLUGINS JS -->
    <!-- <script src="assets/vendor/pace-progress/pace.min.js"></script> -->
    <script src="assets/vendor/stacked-menu/js/stacked-menu.min.js"></script>
    <script src="assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>

    <script src="assets/vendor/flatpickr/flatpickr.min.js"></script>
    <script src="assets/vendor/easy-pie-chart/jquery.easypiechart.min.js"></script>
    <script src="assets/vendor/chart.js/Chart.min.js"></script> <!-- END PLUGINS JS -->
    <script src="assets/vendor/sortablejs/Sortable.min.js"></script>
    <!-- BEGIN THEME JS -->
    <!-- <script src="assets/javascript/theme.min.js"></script> END THEME JS -->

    <!-- BEGIN PAGE LEVEL JS -->
    <!-- <script src="assets/javascript/pages/dashboard-demo.js"></script>  -->

    <!-- END PAGE LEVEL JS -->
    <script src="assets/javascript/theme.min.js"></script> <!-- END THEME JS -->
    <script src="assets/javascript/pages/select2-demo.js"></script>
    <script src="assets/javascript/pages/typeahead-demo.js"></script>
    <script src="assets/javascript/pages/atwho-demo.js"></script> <!-- END PAGE LEVEL JS -->

    <!-- Nixon JS  -->
    <script src="assets/javascript/common.js"></script> <!-- END PAGE LEVEL JS -->

    <style>
      .nxscroll{
        max-height:90vh;
        overflow-y: scroll;
      }
    </style>

  <script>
      loadRemotePage('dashboard2');
  </script>

  </body>
</html>
