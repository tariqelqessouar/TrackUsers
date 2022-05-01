<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Dashboard | Track Users </title>
    
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />

    <!-- plugin css -->
    <link
      href="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css"
      rel="stylesheet"
      type="text/css"
    />
    
    <!-- preloader css -->
    {{-- <link
      rel="stylesheet"
      href="assets/css/preloader.min.css"
      type="text/css"
    /> --}}

    <!-- Bootstrap Css -->
    <link
      href="assets/css/bootstrap.min.css"
      id="bootstrap-style"
      rel="stylesheet"
      type="text/css"
    />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@6.6.96/css/materialdesignicons.min.css">
    <!-- App Css-->
    <link
      href="assets/css/app.min.css"
      id="app-style"
      rel="stylesheet"
      type="text/css"
    />
  </head>

  <body>
    <!-- <body data-layout="horizontal"> -->
 
    <!-- Begin page -->
    <div id="layout-wrapper">
      <header id="page-topbar">
        <div class="navbar-header">
          <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
              <a href="index.html" class="logo logo-dark">
                <span class="logo-sm">
                  <img src="assets/images/logo-sm.svg" alt="" height="24" />
                </span>
                <span class="logo-lg">
                  <img src="assets/images/logo-sm.svg" alt="" height="24" />
                  <span class="logo-txt">Track Users</span>
                </span>
              </a>

              <a href="index.html" class="logo logo-light">
                <span class="logo-sm">
                  <img src="assets/images/logo-sm.svg" alt="" height="24" />
                </span>
                <span class="logo-lg">
                  <img src="assets/images/logo-sm.svg" alt="" height="24" />
                  <span class="logo-txt">Track Users</span>
                </span>
              </a>
            </div>

            <button
              type="button"
              class="btn btn-sm px-3 font-size-16 header-item"
              id="vertical-menu-btn"
            >
              <i class="fa fa-fw fa-bars"></i>
            </button>

            <!-- App Search-->
            <form class="app-search d-none d-lg-block">
              <div class="position-relative">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Search..."
                />
                <button class="btn btn-primary" type="button">
                  <i class="bx bx-search-alt align-middle"></i>
                </button>
              </div>
            </form>
          </div>

          <div class="d-flex">
            <div class="dropdown d-inline-block d-lg-none ms-2">
              <button
                type="button"
                class="btn header-item"
                id="page-header-search-dropdown"
                data-bs-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                <i data-feather="search" class="icon-lg"></i>
              </button>
              <div
                class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                aria-labelledby="page-header-search-dropdown"
              >
                <form class="p-3">
                  <div class="form-group m-0">
                    <div class="input-group">
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Search ..."
                        aria-label="Search Result"
                      />

                      <button class="btn btn-primary" type="submit">
                        <i class="mdi mdi-magnify"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>

            <div class="dropdown d-none d-sm-inline-block">
              <button
                type="button"
                class="btn header-item"
                data-bs-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                <img
                  id="header-lang-img"
                  src="assets/images/flags/us.jpg"
                  alt="Header Language"
                  height="16"
                />
              </button>
              <div class="dropdown-menu dropdown-menu-end">
                <!-- item-->
                <a
                  href="javascript:void(0);"
                  class="dropdown-item notify-item language"
                  data-lang="en"
                >
                  <img
                    src="assets/images/flags/us.jpg"
                    alt="user-image"
                    class="me-1"
                    height="12"
                  />
                  <span class="align-middle">English</span>
                </a>
                <!-- item-->
                <a
                  href="javascript:void(0);"
                  class="dropdown-item notify-item language"
                  data-lang="sp"
                >
                  <img
                    src="assets/images/flags/spain.jpg"
                    alt="user-image"
                    class="me-1"
                    height="12"
                  />
                  <span class="align-middle">Spanish</span>
                </a>

                <!-- item-->
                <a
                  href="javascript:void(0);"
                  class="dropdown-item notify-item language"
                  data-lang="gr"
                >
                  <img
                    src="assets/images/flags/germany.jpg"
                    alt="user-image"
                    class="me-1"
                    height="12"
                  />
                  <span class="align-middle">German</span>
                </a>

                <!-- item-->
                <a
                  href="javascript:void(0);"
                  class="dropdown-item notify-item language"
                  data-lang="it"
                >
                  <img
                    src="assets/images/flags/italy.jpg"
                    alt="user-image"
                    class="me-1"
                    height="12"
                  />
                  <span class="align-middle">Italian</span>
                </a>

                <!-- item-->
                <a
                  href="javascript:void(0);"
                  class="dropdown-item notify-item language"
                  data-lang="ru"
                >
                  <img
                    src="assets/images/flags/russia.jpg"
                    alt="user-image"
                    class="me-1"
                    height="12"
                  />
                  <span class="align-middle">Russian</span>
                </a>
              </div>
            </div>

            <div class="dropdown d-none d-sm-inline-block">
              <button
                type="button"
                class="btn header-item"
                id="mode-setting-btn"
              >
                <i data-feather="moon" class="icon-lg layout-mode-dark"></i>
                <i data-feather="sun" class="icon-lg layout-mode-light"></i>
              </button>
            </div>


            <div class="dropdown d-inline-block">
              <button
                type="button"
                class="btn header-item bg-soft-light border-start border-end"
                id="page-header-user-dropdown"
                data-bs-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                <img
                  class="rounded-circle header-profile-user"
                  src="assets/images/users/avatar-1.jpg"
                  alt="Header Avatar"
                />
                <span class="d-none d-xl-inline-block ms-1 fw-medium"
                  >Shawn L.</span
                >
                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end">
                <!-- item-->
                <a class="dropdown-item" href="apps-contacts-profile.html"
                  ><i
                    class="mdi mdi-face-profile font-size-16 align-middle me-1"
                  ></i>
                  Profile</a
                >
                <a class="dropdown-item" href="auth-lock-screen.html"
                  ><i class="mdi mdi-lock font-size-16 align-middle me-1"></i>
                  Lock Screen</a
                >
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="auth-logout.html"
                  ><i class="mdi mdi-logout font-size-16 align-middle me-1"></i>
                  Logout</a
                >
              </div>
            </div>
          </div>
        </div>
      </header>

      <!-- ========== Left Sidebar Start ========== -->
      <div class="vertical-menu">
        <div data-simplebar class="h-100">
          <!--- Sidemenu -->
          <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
              <li class="menu-title" data-key="t-menu">Menu</li>

              <li>
                <a href="{{route('dash')}}">
                  <i data-feather="home"></i>
                  <span data-key="t-dashboard">Dashboard</span>
                </a>
              </li>
              
                {{-- list useres start here --}}
              <li>
                <a href="javascript: void(0);" class="has-arrow">
                  <i class="mdi mdi-account-multiple"></i>
                  <span data-key="t-pages">Users</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                  <li>
                    <a href="apps-contacts-grid.html" data-key="t-user-grid"
                    >Users Grid</a
                  >
                  </li>
                  <li>
                    <a href="apps-contacts-list.html" data-key="t-user-list"
                          >Users List</a
                        >
                  </li>
                  {{-- list users ends here --}}
                </ul>
              </li>         
            </ul>

            
          </div>
          <!-- Sidebar -->
        </div>
      </div>
      <!-- Left Sidebar End -->

      <!-- ============================================================== -->
      <!-- Start right Content here -->
      <!-- ============================================================== -->
      <div class="main-content">
        {{-- start page-content --}}
        @yield('dashgraphs')
        <!-- End Page-content -->

        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-6">
                <script>
                  document.write(new Date().getFullYear());
                </script>
                © ESTA ELQESSOUAR.
              </div>
              <div class="col-sm-6"></div>
              </div>
            </div>
          </div>
        </footer>
      </div>
      <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->
    
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    

    <!-- JAVASCRIPT -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <!-- pace js -->
    <script src="assets/libs/pace-js/pace.min.js"></script>

    <!-- apexcharts -->
    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- Plugins js-->
    <script src="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>
    <!-- dashboard init -->
    <script src="assets/js/pages/dashboard.init.js"></script>

    <script src="assets/js/app.js"></script>
  </body>
</html>
