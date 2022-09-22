<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Library | Admin</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">  
  <?php include("includes/top_bar.php") ?>

  <?php include("includes/left_side_bar.php"); ?>  
  <div class="content-wrapper">
    
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Admin Panel</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Admin</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <section class="content">
      <div class="container-fluid">       

        <div class="row">          
          <div class="col-md-4">
            <div class="card card-widget widget-user">
              <div class="widget-user-header text-white"
                   style="background: url('images/photo1.png') center center;">
                <h3 class="widget-user-username text-right">Naymur Rahman</h3>
                <h5 class="widget-user-desc text-right">Admin Manager</h5>
              </div>
              <div class="widget-user-image">
                <img class="img-circle" src="images/user6-128x128.jpg" alt="User Avatar">
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header">3,200</h5>
                      <span class="description-text">SALES</span>
                    </div>
                  </div>                  
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header">13,000</h5>
                      <span class="description-text">FOLLOWERS</span>
                    </div>                    
                  </div>                  
                  <div class="col-sm-4">
                    <div class="description-block">
                      <h5 class="description-header">GOOD</h5>
                      <span class="description-text">ACTIVITY</span>
                    </div>                    
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-widget widget-user">
              <div class="widget-user-header text-white"
                   style="background: url('images/photo5.jpg') center center;">
                <h3 class="widget-user-username text-right">Anamul Islam</h3>
                <h5 class="widget-user-desc text-right">Web Designer</h5>
              </div>
              <div class="widget-user-image">
                <img class="img-circle" src="images/user1-128x128.jpg" alt="User Avatar">
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header">3,200</h5>
                      <span class="description-text">SALES</span>
                    </div>                    
                  </div>                  
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header">13,000</h5>
                      <span class="description-text">FOLLOWERS</span>
                    </div>                    
                  </div>                  
                  <div class="col-sm-4">
                    <div class="description-block">
                      <h5 class="description-header">GOOD</h5>
                      <span class="description-text">ACTIVITY</span>
                    </div>                    
                  </div>                  
                </div>
                
              </div>
            </div>
            
          </div>
          <div class="col-md-4">
            
            <div class="card card-widget widget-user">              
              <div class="widget-user-header text-white"
                   style="background: url('images/photo6.jpg') center center;">
                <h3 class="widget-user-username text-right">Aminul Tokey</h3>
                <h5 class="widget-user-desc text-right">Web Devloper</h5>
              </div>
              <div class="widget-user-image">
                <img class="img-circle" src="images/user7-128x128.jpg" alt="User Avatar">
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header">3,200</h5>
                      <span class="description-text">SALES</span>
                    </div>                    
                  </div>                  
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header">13,000</h5>
                      <span class="description-text">FOLLOWERS</span>
                    </div>                    
                  </div>                  
                  <div class="col-sm-4">
                    <div class="description-block">
                      <h5 class="description-header">GOOD</h5>
                      <span class="description-text">ACTIVITY</span>
                    </div>                    
                  </div>                  
                </div>                
              </div>
            </div>            
          </div>          
        </div>        
      </div>
    </section>
    <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
      <i class="fas fa-chevron-up"></i>
    </a>
  </div>
  <?php include("includes/footer.php"); ?>  
  <aside class="control-sidebar control-sidebar-dark">    
  </aside>  
  </div>

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
