<?php
include_once 'database.php';
session_start(); 
if($_SESSION["which"]=="Pilot") {
  $username=$_SESSION["username"];
  $password=$_SESSION["password"];
  //  echo "Favorite animal is " . $_SESSION["which"] . ".";
  //  echo "Favorite animal is " . $username . ".";
  //  echo "Favorite animal is " . $password . ".";
   $query = oci_parse($conn, "SELECT * FROM PILOT WHERE PILOT_BD='$username' AND PILOT_PASSWORD='$password'");
   $result=oci_execute($query);
  // $row = oci_fetch_all($query, $result);
  // $rows = oci_fetch_all($query, $result);
  // echo "ei porjonto ashche<br>";
 
     while (($rows = oci_fetch_row($query)) != false) {
      $PILOT_BD=$rows[0];
      $PILOT_NAME=$rows[1];
      $PILOT_FLYING_HOUR=$rows[2];
      $PILOT_ADDS=$rows[3];
      $PILOT_PHONE=$rows[4];
      $CAT=$rows[5];
      $PILOT_PASSWORD=$rows[6];
     // echo $rows[0] . " " . $rows[1] . "<br>\n";
     }
   
   

  // echo "Favorite animal is " . $PILOT_BD . ".";
  // echo "Favorite animal is " . $PILOT_PHONE . ".";
  // echo "Favorite animal is " . $PILOT_FLYING_HOUR . ".";
  
  //  }
  // // $rows = oci_fetch_all($query, $result);
  //  if (!$rows) {
  //      //header("Location: ./.php");
  //      echo "pari nai :( ";
  //      exit();
  //  }
   
}


elseif($_SESSION["which"]=="Staff") {
  $username=$_SESSION["username"];
  $password=$_SESSION["password"];
  //  echo "Favorite animal is " . $_SESSION["which"] . ".";
  //  echo "Favorite animal is " . $username . ".";
  //  echo "Favorite animal is " . $password . ".";
   $query = oci_parse($conn, "SELECT * FROM STAFF WHERE STAFF_BD='$username' AND STAFF_PASSWORD='$password'");
   $result=oci_execute($query);
  // $rows = oci_fetch_all($query, $result);
   echo "ei porjonto ashche<br>";
   while (($rows = oci_fetch_row($query)) != false) {
    $STAFF_BD=$rows[0];
    $STAFF_NAME=$rows[1];
    $STAFF_BRANCH=$rows[2];
    $STAFF_ADDS=$rows[3];
    $STAFF_PHONE=$rows[4];
   // $CAT=$rows[5];
    $STAFF_PASSWORD=$rows[5];
   // echo $rows[0] . " " . $rows[1] . "<br>\n";
  }

  // echo "Favorite animal is " . $PILOT_BD . ".";
  // echo "Favorite animal is " . $PILOT_PHONE . ".";
  // echo "Favorite animal is " . $PILOT_FLYING_HOUR . ".";
  
  //  }
  // // $rows = oci_fetch_all($query, $result);
  //  if (!$rows) {
  //      //header("Location: ./.php");
  //      echo "pari nai :( ";
  //      exit();
  //  }
   
}


elseif($_SESSION["which"]=="Admin") {
  $username=$_SESSION["username"];
  $password=$_SESSION["password"];
  //  echo "Favorite animal is " . $_SESSION["which"] . ".";
  //  echo "Favorite animal is " . $username . ".";
  //  echo "Favorite animal is " . $password . ".";
   $query = oci_parse($conn, "SELECT * FROM STAFF WHERE STAFF_BD='$username' AND STAFF_PASSWORD='$password'");
   $result=oci_execute($query);
   $use="NA";
  // $rows = oci_fetch_all($query, $result);
   //echo "ei porjonto ashche<br>";
   while (($rows = oci_fetch_row($query)) != false) {
    $use="STAFF";
    $STAFF_BD=$rows[0];
    $STAFF_NAME=$rows[1];
    $STAFF_BRANCH=$rows[2];
    $STAFF_ADDS=$rows[3];
    $STAFF_PHONE=$rows[4];
   // $CAT=$rows[5];
    $STAFF_PASSWORD=$rows[5];
   // echo $rows[0] . " " . $rows[1] . "<br>\n";
  }
  if ($use=="NA")
  {
    $q = oci_parse($conn, "SELECT * FROM PILOT WHERE PILOT_BD='$username' AND PILOT_PASSWORD='$password'");
   $r=oci_execute($q);
   $use="PILOT";

  // $row = oci_fetch_all($query, $result);
  // $rows = oci_fetch_all($query, $result);
  // echo "ei porjonto ashche<br>";
 
     while (($rows = oci_fetch_row($q)) != false) {
      $PILOT_BD=$rows[0];
      $PILOT_NAME=$rows[1];
      $PILOT_FLYING_HOUR=$rows[2];
      $PILOT_ADDS=$rows[3];
      $PILOT_PHONE=$rows[4];
      $CAT=$rows[5];
      $PILOT_PASSWORD=$rows[6];
     // echo $rows[0] . " " . $rows[1] . "<br>\n";
     }

  }
  
  
   

  // echo "Favorite animal is " . $PILOT_BD . ".";
  // echo "Favorite animal is " . $PILOT_PHONE . ".";
  // echo "Favorite animal is " . $PILOT_FLYING_HOUR . ".";
  
  //  }
  // // $rows = oci_fetch_all($query, $result);
  //  if (!$rows) {
  //      //header("Location: ./.php");
  //      echo "pari nai :( ";
  //      exit();
  //  }
   
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Users / Profile - ManageAir</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
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
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">ManageAir</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <!-- <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div> -->
    <!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <!-- <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a> -->
          <!-- End Notification Icon -->

          <!-- <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
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

          </ul> -->
          <!-- End Notification Dropdown Items -->

        <!-- </li> -->
        <!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <!-- <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a> -->
          <!-- End Messages Icon -->
<!-- 
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
                <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
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
                <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
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
                <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
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

          </ul> -->
          <!-- End Messages Dropdown Items -->

        <!-- </li> -->
        <!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">
              <?php
                if( $_SESSION["which"]=="Pilot")
                {
                  echo( $PILOT_NAME);
                }
                elseif( $_SESSION["which"]=="Staff")
                {
                  echo( $STAFF_NAME);
                }
                elseif( $_SESSION["which"]=="Admin")
                    {
                      if($use=="STAFF")
                      {
                        echo( $STAFF_NAME);
                      }
                      else
                      {
                        echo( $PILOT_NAME);
                      }
                    }
                ?>
                </span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?php
                if( $_SESSION["which"]=="Pilot")
                {
                  echo( $PILOT_NAME);
                }
                elseif( $_SESSION["which"]=="Staff")
                {
                  echo( $STAFF_NAME);
                }
                elseif( $_SESSION["which"]=="Admin")
                    {
                      if($use=="STAFF")
                      {
                        echo( $STAFF_NAME);
                      }
                      else
                      {
                        echo( $PILOT_NAME);
                      }
                    }
                ?></h6>
              <span><?php
                   echo( $_SESSION["which"]);
                ?></span>
            </li>
            <!-- <li>
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
            </li> -->

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Log Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
      <!-- sidebar starts -->

      <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">
    
          <li class="nav-item">
            <a class="nav-link collapsed" href="dashboard.html">
              <i class="bi bi-grid"></i>
              <span>Dashboard</span>
            </a>
          </li><!-- End Dashboard Nav -->
    
          <!-- <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
              <i class="bi bi-menu-button-wide"></i><span>Components</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
              <li>
                <a href="components-alerts.html">
                  <i class="bi bi-circle"></i><span>Alerts</span>
                </a>
              </li>
              <li>
                <a href="components-accordion.html">
                  <i class="bi bi-circle"></i><span>Accordion</span>
                </a>
              </li>
              <li>
                <a href="components-badges.html">
                  <i class="bi bi-circle"></i><span>Badges</span>
                </a>
              </li>
              <li>
                <a href="components-breadcrumbs.html">
                  <i class="bi bi-circle"></i><span>Breadcrumbs</span>
                </a>
              </li>
              <li>
                <a href="components-buttons.html">
                  <i class="bi bi-circle"></i><span>Buttons</span>
                </a>
              </li>
              <li>
                <a href="components-cards.html">
                  <i class="bi bi-circle"></i><span>Cards</span>
                </a>
              </li>
              <li>
                <a href="components-carousel.html">
                  <i class="bi bi-circle"></i><span>Carousel</span>
                </a>
              </li>
              <li>
                <a href="components-list-group.html">
                  <i class="bi bi-circle"></i><span>List group</span>
                </a>
              </li>
              <li>
                <a href="components-modal.html">
                  <i class="bi bi-circle"></i><span>Modal</span>
                </a>
              </li>
              <li>
                <a href="components-tabs.html">
                  <i class="bi bi-circle"></i><span>Tabs</span>
                </a>
              </li>
              <li>
                <a href="components-pagination.html">
                  <i class="bi bi-circle"></i><span>Pagination</span>
                </a>
              </li>
              <li>
                <a href="components-progress.html">
                  <i class="bi bi-circle"></i><span>Progress</span>
                </a>
              </li>
              <li>
                <a href="components-spinners.html">
                  <i class="bi bi-circle"></i><span>Spinners</span>
                </a>
              </li>
              <li>
                <a href="components-tooltips.html">
                  <i class="bi bi-circle"></i><span>Tooltips</span>
                </a>
              </li>
            </ul>
          </li>End Components Nav -->
    
          <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
              <i class="bi bi-journal-text"></i><span>Data Input</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
              <li>
                <a href="sortie_input.html">
                  <i class="bi bi-circle"></i><span>Sortie Input</span>
                </a>
              </li>
              <li>
                <a href="insp.html">
                  <i class="bi bi-circle"></i><span>Inspection Data</span>
                </a>
              </li>
              <!-- <li>
                <a href="forms-editors.html">
                  <i class="bi bi-circle"></i><span>Form Editors</span>
                </a>
              </li> -->
              <!-- <li>
                <a href="forms-validation.html">
                  <i class="bi bi-circle"></i><span>Form Validation</span>
                </a>
              </li> -->
            </ul>
          </li><!-- End Forms Nav -->
    
          <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
              <i class="bi bi-layout-text-window-reverse"></i><span>Queries</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
              <li>
                <a  href="Query_norm.html">
                  <i class="bi bi-circle"></i><span>Queries on Sortie & Inspection</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="bi bi-circle"></i><span>Others</span>
                </a>
              </li>
            </ul>
          </li><!-- End Tables Nav -->
    
          <!-- <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
              <i class="bi bi-bar-chart"></i><span>Charts</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
              <li>
                <a href="charts-chartjs.html">
                  <i class="bi bi-circle"></i><span>Chart.js</span>
                </a>
              </li>
              <li>
                <a href="charts-apexcharts.html">
                  <i class="bi bi-circle"></i><span>ApexCharts</span>
                </a>
              </li>
              <li>
                <a href="charts-echarts.html">
                  <i class="bi bi-circle"></i><span>ECharts</span>
                </a>
              </li>
            </ul>
          </li>End Charts Nav -->
    
          <!-- <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
              <i class="bi bi-gem"></i><span>Icons</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
              <li>
                <a href="icons-bootstrap.html">
                  <i class="bi bi-circle"></i><span>Bootstrap Icons</span>
                </a>
              </li>
              <li>
                <a href="icons-remix.html">
                  <i class="bi bi-circle"></i><span>Remix Icons</span>
                </a>
              </li>
              <li>
                <a href="icons-boxicons.html">
                  <i class="bi bi-circle"></i><span>Boxicons</span>
                </a>
              </li>
            </ul>
          </li>End Icons Nav -->
    
          <!-- <li class="nav-heading">Pages</li> -->
    
          <li class="nav-item">
            <a class="nav-link active" href="users-profile.html">
              <i class="bi bi-person"></i>
              <span>Profile</span>
            </a>
          </li><!-- End Profile Page Nav -->
    
          <li class="nav-item">
            <a class="nav-link collapsed" href="About_us.html">
              <i class="bi bi-question-circle"></i>
              <span>About Us</span>
            </a>
          </li>
          <!-- End F.A.Q Page Nav -->
    
          <!-- <li class="nav-item">
            <a class="nav-link collapsed" href="pages-contact.html">
              <i class="bi bi-envelope"></i>
              <span>Contact</span>
            </a>
          </li> -->
          <!-- End Contact Page Nav -->
    
          <!-- <li class="nav-item">
            <a class="nav-link collapsed" href="pages-register.html">
              <i class="bi bi-card-list"></i>
              <span>Register</span>
            </a>
          </li>End Register Page Nav -->
    
          <li class="nav-item">
            <a class="nav-link collapsed" href="login_first.html">
              <i class="bi bi-box-arrow-in-right"></i>
              <span>Log Out</span>
            </a>
          </li><!-- End Login Page Nav -->
    
          <!-- <li class="nav-item">
            <a class="nav-link collapsed" href="pages-error-404.html">
              <i class="bi bi-dash-circle"></i>
              <span>Error 404</span>
            </a>
          </li>End Error 404 Page Nav -->
    
          <!-- <li class="nav-item">
            <a class="nav-link collapsed" href="pages-blank.html">
              <i class="bi bi-file-earmark"></i>
              <span>Blank</span>
            </a>
          </li>End Blank Page Nav -->
    
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

    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
              <h2>
                <?php
                if( $_SESSION["which"]=="Pilot")
                {
                  echo( $PILOT_NAME);
                }
                elseif( $_SESSION["which"]=="Staff")
                {
                  echo( $STAFF_NAME);
                }
                elseif( $_SESSION["which"]=="Admin")
                    {
                      if($use=="STAFF")
                      {
                        echo( $STAFF_NAME);
                      }
                      else
                      {
                        echo( $PILOT_NAME);
                      }
                    }
                ?>
              </h2>
              <h3><?php
                   echo( $_SESSION["which"]);
              ?>
              </h3>
              <div class="social-links mt-2">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                </li>

                <!-- <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Settings</button>
                </li> -->

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                </li>

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <!-- <h5 class="card-title">About</h5>
                  <p class="small fst-italic">Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</p> -->

                  <h5 class="card-title">Profile Details</h5>
                  <?php  
                    if( $_SESSION["which"]=="Pilot")
                    {
                      print '<div class="row">
                      <div class="col-lg-3 col-md-4 label ">Pilot BD</div>
                      <div class="col-lg-9 col-md-8">'. $PILOT_BD .'</div>
                      </div>';
                      print '<div class="row">
                      <div class="col-lg-3 col-md-4 label ">Full Name</div>
                      <div class="col-lg-9 col-md-8">'. $PILOT_NAME .'</div>
                      </div>';
                      
                      print '<div class="row">
                      <div class="col-lg-3 col-md-4 label ">Country</div>
                      <div class="col-lg-9 col-md-8">BANGLADESH</div>
                      </div>';
                      print '<div class="row">
                      <div class="col-lg-3 col-md-4 label">Occupation</div>
                      <div class="col-lg-9 col-md-8"> '. $_SESSION["which"] .'</div>
                      </div>';
                      print '<div class="row">
                      <div class="col-lg-3 col-md-4 label ">Designation</div>
                      <div class="col-lg-9 col-md-8">'. $CAT .'</div>
                      </div>';
                      print '<div class="row">
                      <div class="col-lg-3 col-md-4 label ">Address</div>
                      <div class="col-lg-9 col-md-8">'. $PILOT_ADDS .'</div>
                      </div>';
                     
                      print '<div class="row">
                      <div class="col-lg-3 col-md-4 label ">Phone</div>
                      <div class="col-lg-9 col-md-8">'. $PILOT_PHONE.'</div>
                      </div>';
                      
                    }


                    elseif( $_SESSION["which"]=="Staff")
                    {
                      
                      print '<div class="row">
                      <div class="col-lg-3 col-md-4 label ">Pilot BD</div>
                      <div class="col-lg-9 col-md-8">'. $STAFF_BD .'</div>
                      </div>';
                      print '<div class="row">
                      <div class="col-lg-3 col-md-4 label ">Full Name</div>
                      <div class="col-lg-9 col-md-8">'. $STAFF_NAME .'</div>
                      </div>';
                      
                      print '<div class="row">
                      <div class="col-lg-3 col-md-4 label ">Country</div>
                      <div class="col-lg-9 col-md-8">BANGLADESH</div>
                      </div>';
                      print '<div class="row">
                      <div class="col-lg-3 col-md-4 label">Occupation</div>
                      <div class="col-lg-9 col-md-8"> '. $_SESSION["which"] .'</div>
                      </div>';
                      print '<div class="row">
                      <div class="col-lg-3 col-md-4 label ">Branch</div>
                      <div class="col-lg-9 col-md-8">'. $STAFF_BRANCH.'</div>
                      </div>';
                      print '<div class="row">
                      <div class="col-lg-3 col-md-4 label ">Address</div>
                      <div class="col-lg-9 col-md-8">'. $STAFF_ADDS .'</div>
                      </div>';
                     
                      print '<div class="row">
                      <div class="col-lg-3 col-md-4 label ">Phone</div>
                      <div class="col-lg-9 col-md-8">'. $STAFF_PHONE.'</div>
                      </div>';
                      
                    }


                    elseif( $_SESSION["which"]=="Admin")
                    {
                      if($use=="STAFF")
                      {
                       
                        print '<div class="row">
                        <div class="col-lg-3 col-md-4 label ">Staff BD</div>
                        <div class="col-lg-9 col-md-8">'. $STAFF_BD .'</div>
                        </div>';
                        print '<div class="row">
                        <div class="col-lg-3 col-md-4 label ">Full Name</div>
                        <div class="col-lg-9 col-md-8">'. $STAFF_NAME .'</div>
                        </div>';
                        
                        print '<div class="row">
                        <div class="col-lg-3 col-md-4 label ">Country</div>
                        <div class="col-lg-9 col-md-8">BANGLADESH</div>
                        </div>';
                        print '<div class="row">
                        <div class="col-lg-3 col-md-4 label">Occupation</div>
                        <div class="col-lg-9 col-md-8"> '. $_SESSION["which"] .'</div>
                        </div>';
                        print '<div class="row">
                        <div class="col-lg-3 col-md-4 label ">Branch</div>
                        <div class="col-lg-9 col-md-8">'. $STAFF_BRANCH.'</div>
                        </div>';
                        print '<div class="row">
                        <div class="col-lg-3 col-md-4 label ">Address</div>
                        <div class="col-lg-9 col-md-8">'. $STAFF_ADDS .'</div>
                        </div>';
                       
                        print '<div class="row">
                        <div class="col-lg-3 col-md-4 label ">Phone</div>
                        <div class="col-lg-9 col-md-8">'. $STAFF_PHONE.'</div>
                        </div>';
                      }
                      elseif($use=="PILOT")
                      {
                        print '<div class="row">
                      <div class="col-lg-3 col-md-4 label ">Pilot BD</div>
                      <div class="col-lg-9 col-md-8">'. $PILOT_BD .'</div>
                      </div>';
                      print '<div class="row">
                      <div class="col-lg-3 col-md-4 label ">Full Name</div>
                      <div class="col-lg-9 col-md-8">'. $PILOT_NAME .'</div>
                      </div>';
                      
                      print '<div class="row">
                      <div class="col-lg-3 col-md-4 label ">Country</div>
                      <div class="col-lg-9 col-md-8">BANGLADESH</div>
                      </div>';
                      print '<div class="row">
                      <div class="col-lg-3 col-md-4 label">Occupation</div>
                      <div class="col-lg-9 col-md-8"> '. $_SESSION["which"] .'</div>
                      </div>';
                      print '<div class="row">
                      <div class="col-lg-3 col-md-4 label ">Designation</div>
                      <div class="col-lg-9 col-md-8">'. $CAT .'</div>
                      </div>';
                      print '<div class="row">
                      <div class="col-lg-3 col-md-4 label ">Address</div>
                      <div class="col-lg-9 col-md-8">'. $PILOT_ADDS .'</div>
                      </div>';
                     
                      print '<div class="row">
                      <div class="col-lg-3 col-md-4 label ">Phone</div>
                      <div class="col-lg-9 col-md-8">'. $PILOT_PHONE.'</div>
                      </div>';
                      }
                      
                      
                    }
                      

                  ?>
                  <!-- <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Full Name</div>
                    <div class="col-lg-9 col-md-8">/div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Pilot BD</div>
                    <div class="col-lg-9 col-md-8"></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Occupation</div>
                    <div class="col-lg-9 col-md-8">Web Designer</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Country</div>
                    <div class="col-lg-9 col-md-8">BANGLADESH</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Address</div>
                    <div class="col-lg-9 col-md-8"></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Phone</div>
                    <div class="col-lg-9 col-md-8">1</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">FLYING HOUR</div>
                    <div class="col-lg-9 col-md-8"></div>
                  </div> -->

                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                  <!-- Profile Edit Form -->
                  <!-- <form>
                    <div class="row mb-3">
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                      <div class="col-md-8 col-lg-9">
                        <img src="assets/img/profile-img.jpg" alt="Profile">
                        <div class="pt-2">
                          <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                          <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                        </div>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="fullName" type="text" class="form-control" id="fullName" value="Kevin Anderson">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="about" class="col-md-4 col-lg-3 col-form-label">About</label>
                      <div class="col-md-8 col-lg-9">
                        <textarea name="about" class="form-control" id="about" style="height: 100px">Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</textarea>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="company" class="col-md-4 col-lg-3 col-form-label">Company</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="company" type="text" class="form-control" id="company" value="Lueilwitz, Wisoky and Leuschke">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Job" class="col-md-4 col-lg-3 col-form-label">Job</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="job" type="text" class="form-control" id="Job" value="Web Designer">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Country" class="col-md-4 col-lg-3 col-form-label">Country</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="country" type="text" class="form-control" id="Country" value="USA">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Address" class="col-md-4 col-lg-3 col-form-label">Address</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="address" type="text" class="form-control" id="Address" value="A108 Adam Street, New York, NY 535022">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="phone" type="text" class="form-control" id="Phone" value="(436) 486-3538 x29071">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="email" type="email" class="form-control" id="Email" value="k.anderson@example.com">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Twitter" class="col-md-4 col-lg-3 col-form-label">Twitter Profile</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="twitter" type="text" class="form-control" id="Twitter" value="https://twitter.com/#">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Facebook" class="col-md-4 col-lg-3 col-form-label">Facebook Profile</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="facebook" type="text" class="form-control" id="Facebook" value="https://facebook.com/#">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Instagram" class="col-md-4 col-lg-3 col-form-label">Instagram Profile</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="instagram" type="text" class="form-control" id="Instagram" value="https://instagram.com/#">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Linkedin" class="col-md-4 col-lg-3 col-form-label">Linkedin Profile</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="linkedin" type="text" class="form-control" id="Linkedin" value="https://linkedin.com/#">
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                  </form>End Profile Edit Form -->

                </div>

                <div class="tab-pane fade pt-3" id="profile-settings">

                  <!-- Settings Form -->
                  <form>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Email Notifications</label>
                      <div class="col-md-8 col-lg-9">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="changesMade" checked>
                          <label class="form-check-label" for="changesMade">
                            Changes made to your account
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="newProducts" checked>
                          <label class="form-check-label" for="newProducts">
                            Information on new products and services
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="proOffers">
                          <label class="form-check-label" for="proOffers">
                            Marketing and promo offers
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="securityNotify" checked disabled>
                          <label class="form-check-label" for="securityNotify">
                            Security alerts
                          </label>
                        </div>
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                  </form><!-- End settings Form -->

                </div>

                <div class="tab-pane fade pt-3" id="profile-change-password">
                  <!-- Change Password Form -->
                  <form>

                    <div class="row mb-3">
                      <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="password" type="password" class="form-control" id="currentPassword">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="newpassword" type="password" class="form-control" id="newPassword">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Change Password</button>
                    </div>
                  </form><!-- End Change Password Form -->

                </div>

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>

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
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>