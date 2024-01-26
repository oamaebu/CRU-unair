<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assetsDashboard/img/favicon.png" rel="icon">
  <link href="../assetsDashboard/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assetsDashboard/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assetsDashboard/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assetsDashboard/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assetsDashboard/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../assetsDashboard/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../assetsDashboard/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assetsDashboard/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assetsDashboard/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Jan 09 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>


<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <span class="d-none d-lg-block">Staff Education</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="../assetsDashboard/img/messages-1.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="../assetsDashboard/img/messages-2.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="../assetsDashboard/img/messages-3.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="../image/profil.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">wira kusuma</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Wira Kusuma</h6>
              <span>Trainee</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="index.html">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
      </li><!-- End Components Nav -->

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link " href="users-profile.html">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Users</li>
          <li class="breadcrumb-item active">Profile</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <div class="row">
        <div class="col-xl-4">
            <section class="section profile">

                <div class="card">
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                    <img src="../image/profil.jpg" alt="Profile" class="rounded-circle">
                    <h2>Wira Kusuma</h2>
                    <h3>Web Designer</h3>
                    <div class="social-links mt-2">
                        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="col-xl-8">
            <div class="card">
                <div class="card-body">
                <h5 class="card-title">Progress Modul Pembelajaran</h5>

                <!-- Progress Bars with Backgrounds-->
                <div>
                  <p style="margin-bottom: 5px;">Introduction To BPJS</p>
                  <div class="progress mb-2" style="margin-bottom: 0;">
                      <div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              <div>
                <p style="margin-bottom: 5px;">Good Clinical Practice</p>
                <div class="progress mb-2" style="margin-bottom: 0;">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
                <h4>-</h4>
                <div class="progress mb-2">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                </div>
            </div>
        </div>
        </div>
        <div class="row">
            <div class="col-xl-4">
                    <div class="card">
                      

                        <!-- End sidebar recent posts-->
                        <div class="card-body pb-0">
                        <h5 class="card-title">HRD Pengawas</h5>

                        <div class="news">
                            <div class="post-item clearfix" style="margin-bottom:10%">
                                <div style="display: flex; align-items: center;">
                                  <img src="../image/profil.jpg" alt="Profile" class="rounded-circle" style="width: 30%; height: 100%; display: block; vertical-align: middle; object-fit: contain; ">
                                    <div style="margin-left: 10px;">
                                        <h4><a href="#">Wira Kusuma</a></h4>
                                        <p>Staff HRD</p>
                                    </div>
                                </div>  
                            </div>
                            

                            <div class="post-item clearfix" style="margin-bottom:10%">
                                <div style="display: flex; align-items: center;">
                                    <img src="../assetsDashboard/img/news-1.jpg" alt="" style="max-width: 30%; max-height: 100%; display: block;">
                                    <div style="margin-left: 10px;">
                                        <h4><a href="#">Wira Kusuma</a></h4>
                                        <p>Staff HRD</p>
                                    </div>
                                </div>
                            </div>

                            <div class="post-item clearfix" style="margin-bottom:10%">
                                <div style="display: flex; align-items: center;">
                                    <img src="../assetsDashboard/img/news-1.jpg" alt="" style="max-width: 30%; max-height: 100%; display: block;">
                                    <div style="margin-left: 10px;">
                                        <h4><a href="#">Wira Kusuma</a></h4>
                                        <p>Staff HRD</p>
                                    </div>
                                </div>
                            </div>

                            

                        </div><!-- End sidebar recent posts-->

                        </div>
                    </div><!-- End News & Updates -->
            </div>
            <!-- course list -->
            <div class="col-xl-8">
                            <!-- Recent Sales -->
                            <div class="col-12">
                                <div class="card recent-sales overflow-auto">
                                <div class="card-body">
                                    <h5 class="card-title">Module List <span>| Today</span></h5>
                
                                    <table class="table table-borderless datatable">
                                    <thead>
                                        <tr>
                                        <th scope="col">Module</th>
                                        <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <th scope="row"><a href="{{ route("user.module") }}">Introduction To BPJS</a></th>
                                        <td><span class="badge bg-success" style="padding:3% 5%">Finished</span><span class="badge bg-primary" style="padding:3% 5%; margin-left: 1%"><i class="bx bxs-download" style="margin-right:2% "></i>Download Certificate</span></td>
                                       
                                        </tr>
                                        <tr>
                                        <tr>
                                        <th scope="row"><a href="#">Good Clincal Practice</a></th>
                                        <td><span class="badge bg-warning" style="padding:3% 5%">On Progress</span></td>
                                        </tr>
                                        <tr>
                                       
                                    </tbody>
                                    </table>
                
                                </div>
                
                                </div>
                            </div><!-- End Recent Sales -->
            </div>
        </div>
    </div>

  </main><!-- End #main -->
  

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assetsDashboard/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="../assetsDashboard/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assetsDashboard/vendor/chart.js/chart.umd.js"></script>
  <script src="../assetsDashboard/vendor/echarts/echarts.min.js"></script>
  <script src="../assetsDashboard/vendor/quill/quill.min.js"></script>
  <script src="../assetsDashboard/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="../assetsDashboard/vendor/tinymce/tinymce.min.js"></script>
  <script src="../assetsDashboard/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assetsDashboard/js/main.js"></script>

</body>

</html>