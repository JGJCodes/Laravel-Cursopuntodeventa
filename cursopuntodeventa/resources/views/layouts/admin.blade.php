<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>@yield('title')</title>
  <!-- plugins:css
  <link rel="stylesheet" href="vendors/iconfonts/font-awesome/css/all.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">   -->
  {!! Html::style('Melody/vendors/iconfonts/font-awesome/css/all.min.css')!!}
  {!! Html::style('Melody/vendors/css/vendor.bundle.base.css')!!}
  {!! Html::style('Melody/vendors/css/vendor.bundle.addons.css')!!}

  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css
  <link rel="stylesheet" href="css/style.css">  -->
  {!! Html::style('Melody/css/style.css')!!}
  @yield('styles')
  <!-- endinject -->
  <link rel="shortcut icon" href="http://www.urbanui.com/" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row default-layout-navbar">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="index-2.html"><img src="Melody/images/logo.svg" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="index-2.html"><img src="Melody/images/logo-mini.svg" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="fas fa-bars"></span>
        </button>
        <ul class="navbar-nav">
          <li class="nav-item nav-search d-none d-md-flex">
            <div class="nav-link">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fas fa-search"></i>
                  </span>
                </div>
                <input type="text" class="form-control" placeholder="Search" aria-label="Search">
              </div>
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">

          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="Melody/images/faces/face0.png" alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="fas fa-cog text-primary"></i>
                Settings
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item">
                <i class="fas fa-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="fas fa-fill-drip"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close fa fa-times"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles primary"></div>
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>

      @yield('preference')
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      @include('layouts._navbar')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
            @yield('content')
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">

            <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-md-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center mb-3 mb-md-0">
                            <a href="mailto:jorge.guzman.juarez@outlook.com" >
                            <button class="btn btn-social-icon btn-facebook btn-rounded">
                            <i class="fa fa-envelope-o"></i>
                          </button> </a>
                          <div class="ml-4">
                            <h5 class="mb-0">Outlook</h5>
                            <p class="mb-0">jorge.guzman.juarez@outlook.com</p>
                          </div>
                        </div>
                        <div class="d-flex align-items-center mb-3 mb-md-0">
                            <a href="mailto:jorge.jgj.94@gmail.com">
                              <button class="btn btn-social-icon btn-google btn-rounded">
                              <i class="fab fa-google-plus-g"></i>
                            </button>
                          </a>
                            <div class="ml-4">
                              <h5 class="mb-0">Google Gmail</h5>
                              <p class="mb-0">jorge.jgj.94@gmail.com</p>
                            </div>
                          </div>
                        <div class="d-flex align-items-center mb-3 mb-md-0">
                            <a href="https://github.com/JGJCodes" >
                            <button class="btn btn-social-icon btn-github btn-rounded">
                            <i class="fab fa-github"></i>
                          </button> </a>
                          <div class="ml-4">
                            <h5 class="mb-0">Github</h5>
                            <p class="mb-0">JGJCodes</p>
                          </div>

                        </div>

                        <div class="d-flex align-items-center">
                          <a href="https://www.linkedin.com/in/jorge-guzm%C3%A1n-ju%C3%A1rez/" >
                            <button class="btn btn-social-icon btn-linkedin btn-rounded">
                            <i class="fab fa-linkedin-in"></i>
                          </button>
                        </a>
                          <div class="ml-4">
                            <h5 class="mb-0">Linkedin</h5>
                            <p class="mb-0">Jorge Guzmán Juárez</p>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <br><br>
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2018. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="far fa-heart text-danger"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <script src="vendors/js/vendor.bundle.addons.js"></script> -->
  {!! Html::script('Melody/vendors/js/vendor.bundle.base.js')!!}
  {!! Html::script('Melody/vendors/js/vendor.bundle.addons.js')!!}

  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/misc.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>  -->
  {!! Html::script('Melody/js/off-canvas.js')!!}
  {!! Html::script('Melody/js/hoverable-collapse.js')!!}
  {!! Html::script('Melody/js/misc.js')!!}
  {!! Html::script('Melody/js/settings.js')!!}
  {!! Html::script('Melody/js/todolist.js')!!}

  <!-- endinject -->
  <!-- Custom js for this page
  <script src="js/dashboard.js"></script>  -->
  {!! Html::script('Melody/js/dashboard.js')!!}
  <!-- End custom js for this page-->
  @yield('scripts')

</body>
