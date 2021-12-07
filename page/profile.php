<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.php');
	exit;
}
$DATABASE_HOST = 'sql302.epizy.com';
$DATABASE_USER = 'epiz_29652537';
$DATABASE_PASS = 'f1JfvlgLFivYCa';
$DATABASE_NAME = 'epiz_29652537_phplogin';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
mysqli_set_charset($con, 'UTF8');
if (mysqli_connect_errno()) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
// We don't have the password or email info stored in sessions so instead we can get the results from the database.
$stmt = $con->prepare('SELECT password, email, names, birthdate, gender FROM accounts WHERE id = ?');
// In this case we can use the account ID to get the account info.
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($password, $email, $names, $birthdate, $gender);
$stmt->fetch();
$stmt->close();
?>

<html lang="en"><head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Trang Chủ</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../assets/images/favicon.ico">
  <style type="text/css">/* Chart.js */
@keyframes chartjs-render-animation{from{opacity:.99}to{opacity:1}}.chartjs-render-monitor{animation:chartjs-render-animation 1ms}.chartjs-size-monitor,.chartjs-size-monitor-expand,.chartjs-size-monitor-shrink{position:absolute;direction:ltr;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1}.chartjs-size-monitor-expand>div{position:absolute;width:1000000px;height:1000000px;left:0;top:0}.chartjs-size-monitor-shrink>div{position:absolute;width:200%;height:200%;left:0;top:0}</style><style></style></head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="../../index.php"><img src="../../assets/images/logo.png" alt="logo"></a>
          <a class="navbar-brand brand-logo-mini" href="../../index.php"><img src="../../assets/images/logo-mini.svg" alt="logo"></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                  <img src="../../assets/images/faces/pic-1.png" alt="image">
                  <span class="availability-status online"></span>
                </div>
                <div class="nav-profile-text">
                  <p class="mb-1 text-black"><?=$names?></p>
                </div>
              </a>
              
            </li>
            <li class="nav-item d-none d-lg-block full-screen-link">
              <a class="nav-link">
                <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
              </a>
            </li>
            
            
            <li class="nav-item nav-logout d-none d-lg-block">
              <a class="nav-link" href="#">
                <i class="mdi mdi-power"></i>
              </a>
            </li>
            <li class="nav-item nav-settings d-none d-lg-block">
              <a class="nav-link" href="#">
                <i class="mdi mdi-format-line-spacing"></i>
              </a>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  <img src="../../assets/images/faces/pic-1.png" alt="profile">
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2"><?=$names?></span>
                  
                </div>
                
              </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="../../index.php">
                <span class="menu-title">Trang chủ</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            
            
            <li class="nav-item">
              <a class="nav-link" href="../../page/profile.php">
                <span class="menu-title">Thông tin</span>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../pages/charts/chartjs.html">
                <span class="menu-title">Giới thiệu</span>
                <i class="mdi mdi-chart-bar menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../pages/tables/basic-table.html">
                <span class="menu-title">Chia sẻ</span>
                <i class="mdi mdi-table-large menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link collapsed" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
                <span class="menu-title">Khác</span>
                <i class="menu-arrow"></i>
                
              </a>
              <div class="collapse" id="general-pages" style="">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="../../pages/samples/blank-page.html">Cài đặt</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../logout.php">Đăng xuất</a></li>
                  
                  
                  
                </ul>
              </div>
            </li>
            
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> profile </h3>
              <nav aria-label="breadcrumb">
                
              </nav>
            </div>
            <div class="row">
              
              
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title" style="
                            margin-bottom: 43.75;
                        ">Thông tin người dùng</h4>
                    <form class="forms-sample">
                        <div class="form-group">
                            <label for="exampleInputEmail3">Họ và tên: <?=$names?></label>
                            
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectGender">Ngày Sinh: <?=date('d/m/Y', strtotime($birthdate))?></label>
                            
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectGender">Giới tính: <?=$gender?></label>
                            
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Tên đăng nhập: <?=$_SESSION['name']?></label>
                            
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Email: <?=$email?></label>
                            
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword4">Mật khẩu: *********</label>
                            
                        </div>
                        
                        <button type="submit" class="btn btn-gradient-primary mr-2">Chỉnh sửa</button>
                      
                    </form>
                  </div>
                </div>
              </div>
              
              
              
              
              
              
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid clearfix">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Phan Châu 2021</span>
              
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../../assets/vendors/chart.js/Chart.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="../../assets/js/dashboard.js"></script>
    <script src="../../assets/js/todolist.js" gapi_processed="true"></script>
    <!-- End custom js for this page -->
  
<div id="screenRecording-controls" style="display: none;"><div id="screenRecording-controls__open-settings-btn"><img src="chrome-extension://higffkkddppmfcpkcolamkhcknhfhdlo/images/inject/gear.png"></div><div id="screenRecording-controls__settings"><div id="screenRecording-controls__settings__logo-container"><img src="chrome-extension://higffkkddppmfcpkcolamkhcknhfhdlo/images/inject/logo.png"></div><div id="screenRecording-controls__settings__main-btn" class="screenRecording-controls__settings__btn screenRecording-controls__settings__btn_active"><img src="chrome-extension://higffkkddppmfcpkcolamkhcknhfhdlo/images/inject/pause.png"></div><div id="screenRecording-controls__settings__stop-btn" class="screenRecording-controls__settings__btn"><img src="chrome-extension://higffkkddppmfcpkcolamkhcknhfhdlo/images/inject/stop.png"></div><div id="screenRecording-controls__settings__close-btn" class="screenRecording-controls__settings__btn"><img src="chrome-extension://higffkkddppmfcpkcolamkhcknhfhdlo/images/inject/close.png"></div></div></div><style>.tb_button {padding:1px;cursor:pointer;border-right: 1px solid #8b8b8b;border-left: 1px solid #FFF;border-bottom: 1px solid #fff;}.tb_button.hover {borer:2px outset #def; background-color: #f8f8f8 !important;}.ws_toolbar {z-index:100000} .ws_toolbar .ws_tb_btn {cursor:pointer;border:1px solid #555;padding:3px}   .tb_highlight{background-color:yellow} .tb_hide {visibility:hidden} .ws_toolbar img {padding:2px;margin:0px}</style></body></html>