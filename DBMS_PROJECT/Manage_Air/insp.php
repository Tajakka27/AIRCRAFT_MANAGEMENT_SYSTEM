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
      $email = $rows[7];
      $rank = $rows[8];
      //$PILOT_PASSWORD=$rows[6];
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
    //$STAFF_BRANCH=$rows[2];
    ///$STAFF_ADDS=$rows[3];
    //$STAFF_PHONE=$rows[4];
   // $CAT=$rows[5];
    $STAFF_PASSWORD=$rows[5];
  //  $STAFF_email=$rows[6];
    //$STAFF_rank=$rows[7];
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
   // $STAFF_BRANCH=$rows[2];
    //$STAFF_ADDS=$rows[3];
    //$STAFF_PHONE=$rows[4];
   // $CAT=$rows[5];
    $STAFF_PASSWORD=$rows[5];
   // $STAFF_email=$rows[6];
    //$STAFF_rank=$rows[7];
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
      //$PILOT_FLYING_HOUR=$rows[2];
      //$PILOT_ADDS=$rows[3];
      //$PILOT_PHONE=$rows[4];
      //$CAT=$rows[5];
      $PILOT_PASSWORD=$rows[6];
      //$email = $rows[7];
      //$rank = $rows[8];
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

  <title>Forms / Elements - ManageAir</title>
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
 <!-- ======= Header ======= -->
 <header id="header" class="header fixed-top d-flex align-items-center">

<div class="d-flex align-items-center justify-content-between">
  <a href="dashboard.php" class="logo d-flex align-items-center">
    <img src="assets/img/logo_4.png" alt="">
    <span class="d-none d-lg-block">Manage Air</span>
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
<!-- 
    <li class="nav-item d-block d-lg-none">
      <a class="nav-link nav-icon search-bar-toggle " href="#">
        <i class="bi bi-search"></i>
      </a>
    </li> -->
    <!-- End Search Icon-->

    <li class="nav-item dropdown">

      <!-- <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
        <i class="bi bi-bell"></i>
        <span class="badge bg-primary badge-number">4</span>
      </a> -->
      <!-- End Notification Icon -->
<!-- 
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

      </ul> -->
      <!-- End Notification Dropdown Items -->

    </li><!-- End Notification Nav -->

    <li class="nav-item dropdown">

      <!-- <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
        <i class="bi bi-chat-left-text"></i>
        <span class="badge bg-success badge-number">3</span>
      </a> -->
      <!-- End Messages Icon -->

      <!-- <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
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

    </li><!-- End Messages Nav -->

    <li class="nav-item dropdown pe-3">

      <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
        <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
        <span class="d-none d-md-block dropdown-toggle ps-2"> <?php
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
            ?></span>
      </a><!-- End Profile Iamge Icon -->

      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
        <li class="dropdown-header">
          <h6> <?php
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
        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center" href="users-profile.php">
            <i class="bi bi-person"></i>
            <span>My Profile</span>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <!-- <li>
          <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
            <i class="bi bi-gear"></i>
            <span>Account Settings</span>
          </a>
        </li> -->
        <li>
          <hr class="dropdown-divider">
        </li>

        <!-- <li>
          <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
            <i class="bi bi-question-circle"></i>
            <span>Need Help?</span>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li> -->

        <li>
          <a class="dropdown-item d-flex align-items-center" href="login_first.php">
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
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="dashboard.php">
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
        <?php
                if( $_SESSION["which"]=="Pilot")
                {
                  print '<li>
                  <a href="sortie_input.php">
                    <i class="bi bi-circle"></i><span>Sortie Input</span>
                  </a>
                   </li>';
                }
                elseif( $_SESSION["which"]=="Staff")
                {
                  print '<li>
                         <a class="nav-link active" href="insp.php">
                        <i class="bi bi-circle"></i><span>Inspection Data</span>
                        </a>
                        </li>';
                }
                elseif( $_SESSION["which"]=="Admin")
                    {
                        print '<li>
                        <a href="sortie_input.php">
                          <i class="bi bi-circle"></i><span>Sortie Input</span>
                        </a>
                        </li>
                        <li>
                        <a href="insp.php">
                          <i class="bi bi-circle"></i><span>Inspection Data</span>
                        </a>
                        </li>';
                    }
                ?>
          <!-- <li>
            <a href="sortie_input.html">
              <i class="bi bi-circle"></i><span>Sortie Input</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Inspection Data</span>
            </a>
          </li> -->
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
            <a href="Query.php">
              <i class="bi bi-circle"></i><span>Queries on Sortie & Inspection</span>
            </a>
          </li>
          <li>
            <!-- <a href="#">
              <i class="bi bi-circle"></i><span>Others</span>
            </a> -->
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
        <a class="nav-link collapsed" href="users-profile.php">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-faq.html">
          <i class="bi bi-question-circle"></i>
          <span>About Us</span>
        </a>
      </li>   
      <!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact.html">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="pages-register.html">
          <i class="bi bi-card-list"></i>
          <span>Register</span>
        </a>
      </li>End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="login_first.php">
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
      <h1>INSPECTION DATA</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item"><a href="index.html">Data Input</a></li>
          <li class="breadcrumb-item active">Inspection Data</li>
        </ol>
      </nav><br>
    </div><!-- End Page Title -->

    <section class="section"  >
      <div class="row" >
        <div class="col-lg-6" >

          <div class="card_ste">
            <div class="card-body" style="width: 92%;">
              <h5 class="card-title">Enter the Following Information</h5>

              <!-- General Form Elements -->
              <form method="post" action="INSPprocess.php">
                
                <!-- <div class="row mb-3">
                  <label for="inputTime" class="col-sm-2 col-form-label">Time</label>
                  <div class="col-sm-10">
                    <input type="time" class="form-control">
                  </div>
                </div> -->
                
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Inspection Name</label>
                  <div class="col-sm-10">
                  <input list="types" name="Inspection_Name" id="browser" type="text" class="form-control">

                    <datalist id="types">
                      <option value="30 hour Inspection">
                      <option value="50 hour Inspection">
                      <option value="100 hour inspection">
                     
                    </datalist>
                    <!-- <select class="form-select" aria-label="Default select example">
                      <option selected>Select the Name of Inspection</option>
                      <option value="1">30 hour Inspection</option>
                      <option value="2">50 hour Inspection</option>
                      <option value="3">100 hour inspection</option>
                    </select> -->
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Inspection ID</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="Inspection_ID">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Tail No</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="Tail_No">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Inspector's Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="Inspector_Name">
                  </div>
                </div>
                
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Inspector's BD</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="Inspector_BD">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputDate" class="col-sm-2 col-form-label">Date</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" name="INSP_DATE">
                  </div>
                </div>
                <!-- <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Pilot's Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Flying Hour</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Engine Hour</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control">
                  </div>
                </div> -->
                <!-- <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Landings</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Used Fuel</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control">
                  </div>
                </div> -->
                <!-- <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Fuel Qty</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control">
                  </div>
                </div> -->
                <!-- <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control">
                  </div>
                </div> -->
                <!-- <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" id="formFile">
                  </div>
                </div> -->

                <!-- <div class="row mb-3">
                  <label for="inputColor" class="col-sm-2 col-form-label">Color Picker</label>
                  <div class="col-sm-10">
                    <input type="color" class="form-control form-control-color" id="exampleColorInput" value="#4154f1" title="Choose your color">
                  </div>
                </div> -->
                
                <!-- <fieldset class="row mb-3">
                  <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
                  <div class="col-sm-10">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                      <label class="form-check-label" for="gridRadios1">
                        First radio
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                      <label class="form-check-label" for="gridRadios2">
                        Second radio
                      </label>
                    </div>
                    <div class="form-check disabled">
                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios" value="option" disabled>
                      <label class="form-check-label" for="gridRadios3">
                        Third disabled radio
                      </label>
                    </div>
                  </div>
                </fieldset>
                <div class="row mb-3">
                  <legend class="col-form-label col-sm-2 pt-0">Checkboxes</legend>
                  <div class="col-sm-10">

                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gridCheck1">
                      <label class="form-check-label" for="gridCheck1">
                        Example checkbox
                      </label>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gridCheck2" checked>
                      <label class="form-check-label" for="gridCheck2">
                        Example checkbox 2
                      </label>
                    </div>

                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Disabled</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="Read only / Disabled" disabled>
                  </div>
                </div> -->


                <!-- <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Multi Select</label>
                  <div class="col-sm-10">
                    <select class="form-select" multiple aria-label="multiple select example">
                      <option selected>Open this select menu</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </div>
                </div> -->

                

             <!-- End General Form Elements -->

            </div>
          </div>

        </div>

        
      </div>
    </section>
    <section class="section">
      <div class="row">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">AIRFRAME</h5>

              <!-- Horizontal Form -->
              
                <!-- <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Your Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputText">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword">
                  </div>
                </div> -->
                <fieldset class="row mb-3">
                  <label class="col-form-label space col-sm-2 pt-0">Servicability</label>
                  <div class="col-sm-10">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="AIRFRAME" id="gridRadios1" value="YES" checked>
                      <label class="form-check-label" for="gridRadios1">
                        YES
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="AIRFRAME" id="gridRadios2" value="NO">
                      <label class="form-check-label" for="gridRadios2">
                        NO
                      </label>
                    </div>
                    <!-- <div class="form-check disabled">
                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
                      <label class="form-check-label" for="gridRadios3">
                        Third disabled radio
                      </label>
                    </div> -->
                  </div>
                </fieldset>
                <!-- <div class="row mb-3">
                  <div class="col-sm-10 offset-sm-2">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gridCheck1">
                      <label class="form-check-label" for="gridCheck1">
                        Example checkbox
                      </label>
                    </div>
                  </div>
                </div> -->
                <!-- <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div> -->
              <!-- End Horizontal Form -->

            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">LANDING GEARS</h5>

              <!-- Horizontal Form -->
             
                <!-- <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Your Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputText">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword">
                  </div>
                </div> -->
                <fieldset class="row mb-3">
                  <legend class="col-form-label space col-sm-2 pt-0">Servicability</legend>
                  <div class="col-sm-10">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="LANDING_GEARS" id="gridRadios1" value="YES" checked>
                      <label class="form-check-label" for="gridRadios1">
                        YES
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="LANDING_GEARS" id="gridRadios2" value="NO">
                      <label class="form-check-label" for="gridRadios2">
                        NO
                      </label>
                    </div>
                    <!-- <div class="form-check disabled">
                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
                      <label class="form-check-label" for="gridRadios3">
                        Third disabled radio
                      </label>
                    </div> -->
                  </div>
                </fieldset>
                <!-- <div class="row mb-3">
                  <div class="col-sm-10 offset-sm-2">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gridCheck1">
                      <label class="form-check-label" for="gridCheck1">
                        Example checkbox
                      </label>
                    </div>
                  </div>
                </div> -->
                <!-- <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div> -->
             <!-- End Horizontal Form -->

            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">EXHAUST</h5>

              <!-- Horizontal Form -->
              
                <!-- <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Your Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputText">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword">
                  </div>
                </div> -->
                <fieldset class="row mb-3">
                  <legend class="col-form-label space col-sm-2 pt-0">Servicability</legend>
                  <div class="col-sm-10">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="EXHAUST" id="gridRadios1" value="YES" checked>
                      <label class="form-check-label" for="gridRadios1">
                        YES
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="EXHAUST" id="gridRadios2" value="NO">
                      <label class="form-check-label" for="gridRadios2">
                        NO
                      </label>
                    </div>
                    <!-- <div class="form-check disabled">
                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
                      <label class="form-check-label" for="gridRadios3">
                        Third disabled radio
                      </label>
                    </div> -->
                  </div>
                </fieldset>
                <!-- <div class="row mb-3">
                  <div class="col-sm-10 offset-sm-2">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gridCheck1">
                      <label class="form-check-label" for="gridCheck1">
                        Example checkbox
                      </label>
                    </div>
                  </div>
                </div> -->
                <!-- <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div> -->
             <!-- End Horizontal Form -->

            </div>
          </div>

          

        </div>

        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">ENGINE</h5>

              <!-- Horizontal Form -->
             
                <!-- <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Your Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputText">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword">
                  </div>
                </div> -->
                <fieldset class="row mb-3">
                  <legend class="col-form-label space col-sm-2 pt-0">Servicability</legend>
                  <div class="col-sm-10">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="ENGINE" id="gridRadios1" value="YES" checked>
                      <label class="form-check-label" for="gridRadios1">
                        YES
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="ENGINE" id="gridRadios2" value="NO">
                      <label class="form-check-label" for="gridRadios2">
                        NO
                      </label>
                    </div>
                    <!-- <div class="form-check disabled">
                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
                      <label class="form-check-label" for="gridRadios3">
                        Third disabled radio
                      </label>
                    </div> -->
                  </div>
                </fieldset>
                <!-- <div class="row mb-3">
                  <div class="col-sm-10 offset-sm-2">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gridCheck1">
                      <label class="form-check-label" for="gridCheck1">
                        Example checkbox
                      </label>
                    </div>
                  </div>
                </div> -->
                <!-- <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div> -->
              <!-- End Horizontal Form -->

            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">AFTERBURNER</h5>

              <!-- Horizontal Form -->
             
                <!-- <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Your Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputText">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword">
                  </div>
                </div> -->
                <fieldset class="row mb-3">
                  <legend class="col-form-label space col-sm-2 pt-0">Servicability</legend>
                  <div class="col-sm-10">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="AFTERBURNER" id="gridRadios1" value="YES" checked>
                      <label class="form-check-label" for="gridRadios1">
                        YES
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="AFTERBURNER" id="gridRadios2" value="NO">
                      <label class="form-check-label" for="gridRadios2">
                        NO
                      </label>
                    </div>
                    <!-- <div class="form-check disabled">
                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
                      <label class="form-check-label" for="gridRadios3">
                        Third disabled radio
                      </label>
                    </div> -->
                  </div>
                </fieldset>
                <!-- <div class="row mb-3">
                  <div class="col-sm-10 offset-sm-2">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gridCheck1">
                      <label class="form-check-label" for="gridCheck1">
                        Example checkbox
                      </label>
                    </div>
                  </div>
                </div> -->
                <!-- <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div> -->
             <!-- End Horizontal Form -->

            </div>
          </div>

          

        </div>
      </div>
    </section>
    
    
      <div class="row mb-3">
        <label for="inputPassword" class="col-sm-2 col-form-label">Remarks</label>
          <div class="col-sm-10" >
              <input type="text" class="form-control" name="Remarks" style="height: 300%;">
          </div>
      </div> 
      <br><br><br><br><br><br>
      <div class="row mb-3" style="padding-left: 50%;">
        <!-- <label class="col-sm-2 col-form-label">Submit Button</label> -->
        <div class="col-sm-10" >
          <input type="submit" name="save" value="Submit" class="col-sm-2 col-form-label" style="background-color: rgb(8, 8, 251);color: azure;border-color:rgb(8, 8, 251) ;">
          <!-- <button type="submit" class="btn btn-primary bttn"></button> -->
        </div>
      </div>
</form>
    
    
   


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>MANAGE AIR</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by Group-VI
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