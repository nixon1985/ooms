<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!-- End Required meta tags -->
    <!-- Begin SEO tag -->
    <title> Sign In | Looper - Bootstrap 4 Admin Theme </title>
    <meta property="og:title" content="Sign In">
    <meta name="author" content="Beni Arisandi">
    <meta property="og:locale" content="en_US">
    <meta name="description" content="Responsive admin theme build on top of Bootstrap 4">
    <meta property="og:description" content="Responsive admin theme build on top of Bootstrap 4">
    {{-- <link rel="canonical" href="https://uselooper.com">
    <meta property="og:url" content="https://uselooper.com"> --}}
    <meta property="og:site_name" content="Looper - Bootstrap 4 Admin Theme">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="144x144" href="assets/apple-touch-icon.png">
    <link rel="shortcut icon" href="assets/favicon.ico">
    <meta name="theme-color" content="#3063A0"><!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" rel="stylesheet"><!-- End Google font -->
    <!-- BEGIN PLUGINS STYLES -->
    {{-- <link rel="stylesheet" href="{{asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}"><!-- END PLUGINS STYLES --> --}}
    <!-- BEGIN THEME STYLES -->
    <link rel="stylesheet" href="{{asset('assets/stylesheets/theme.min.css')}}" data-skin="default">
    {{-- <link rel="stylesheet" href="{{asset('assets/stylesheets/theme-dark.min.css')}}" data-skin="dark"> --}}
    {{-- <link rel="stylesheet" href="{{asset('assets/stylesheets/custom.css')}}"> --}}
    {{-- <script>
      var skin = localStorage.getItem('skin') || 'default';
      var isCompact = JSON.parse(localStorage.getItem('hasCompactMenu'));
      var disabledSkinStylesheet = document.querySelector('link[data-skin]:not([data-skin="' + skin + '"])');
      // Disable unused skin immediately
      disabledSkinStylesheet.setAttribute('rel', '');
      disabledSkinStylesheet.setAttribute('disabled', true);
      // add flag class to html immediately
      if (isCompact == true) document.querySelector('html').classList.add('preparing-compact-menu');
    </script><!-- END THEME STYLES --> --}}
  </head>
  <body>
    <!--[if lt IE 10]>
    <div class="page-message" role="alert">You are using an <strong>outdated</strong> browser. Please <a class="alert-link" href="http://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</div>
    <![endif]-->
    <!-- .auth -->
    <main class="auth">
      <header id="auth-header" class="auth-header" style="background-image: url(assets/images/illustration/img-1.png); background-color:#32a4ea;">
        <h1>
        <img src="{{url('assets/images/logo/com-logo.png')}}" width="300" alt="">
    <!-- form -->
    <div class="" style="margin-bottom: 12%">
        <div class="row">
            <div class="col-md-4 offset-4 mt-5 ">
                <form class="auth-form" action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="form-group">
                      <div class="form-label-group">
                        <label for="inputUser">Email</label>

                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div><!-- /.form-group -->
                    <!-- .form-group -->
                    <div class="form-group">
                      <div class="form-label-group">
                        <label for="inputPassword">Password</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div><!-- /.form-group -->
                    <!-- .form-group -->
                    <div class="form-group">
                      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign In</button>
                    </div><!-- /.form-group -->
                    <!-- .form-group -->
                    {{-- <div class="form-group text-center">
                      <div class="custom-control custom-control-inline custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="remember-me"> <label class="custom-control-label" for="remember-me">Keep me sign in</label>
                      </div>
                    </div><!-- /.form-group --> --}}
                    <!-- recovery links -->
                    {{-- <div class="text-center pt-3">
                      <a href="auth-recovery-username.html" class="link">Forgot Username?</a> <span class="mx-2">·</span> <a href="auth-recovery-password.html" class="link">Forgot Password?</a> --}}
                    </div><!-- /recovery links -->
                  </form><!-- /.auth-form -->
                  {{-- <footer class="auth-footer"> © 2018 All Rights Reserved. <a href="#">Privacy</a> and <a href="#">Terms</a> --}}
                  </footer>
            </div>
        </div>
    </div>

      <!-- copyright -->

    </main><!-- /.auth -->
    <!-- BEGIN BASE JS -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/popper.js/umd/popper.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script> <!-- END BASE JS -->
    <!-- BEGIN PLUGINS JS -->
    <script src="assets/vendor/particles.js/particles.js"></script>
    <script>
      /**
       * Keep in mind that your scripts may not always be executed after the theme is completely ready,
       * you might need to observe the `theme:load` event to make sure your scripts are executed after the theme is ready.
       */
      $(document).on('theme:init', () =>
      {
        /* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
        particlesJS.load('auth-header', 'assets/javascript/pages/particles.json');
      })
    </script> <!-- END PLUGINS JS -->
    <!-- BEGIN THEME JS -->
    <script src="assets/javascript/theme.js"></script> <!-- END THEME JS -->
  </body>
</html>
