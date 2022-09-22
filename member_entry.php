
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Member Entry</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <?php include("includes/top_bar.php")?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
 <?php include("includes/left_side_bar.php"); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Member Entry</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Member Entry</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Main row -->
        <div class="row justify-content-center">
          <!-- Left col -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add New Members</h3>
              </div>
              <!-- /.card-header -->
              <?php
                include_once("includes/db_config.php");

                if(isset($_POST['save'])){
                  extract($_POST);
                  $sql = "INSERT INTO user VALUES(NULL, '$library_id', '$fname', '$lname', '$contact', '$gender', '$address', '$type', '$level', '$section', '$image', Null)";

                  $db->query($sql);
                  if($db->affected_rows>0){
                    echo "<div class='alert alert-success'>Member Added successfully</div>";
                  }
                }
              ?>
              <!-- form start -->
              <form role="form" action="" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="libraryID">Library ID</label>
                    <input type="text" name="library_id" class="form-control" placeholder="Enter Member ID">
                  </div>
                  <div class="form-group">
                    <label for="firstName">First Name</label>
                    <input type="text" name="fname" class="form-control" placeholder="Enter Member First Name">
                  </div>
                  <div class="form-group">
                    <label for="lastName">Last Name</label>
                    <input type="text" name="lname" class="form-control" placeholder="Enter Member Last Name">
                  </div>
                  <div class="form-group">
                    <label for="contact">Contact</label>
                    <input type="text" name="contact" class="form-control" placeholder="Enter Member Contact">
                  </div>
                  <div class="form-group">
                    <label for="gender">Gender</label>
                    <select name="gender" id="inputState" class="form-control">
                        <option selected disabled>Choose Gender</option>
                        <option>Male</option>
                        <option>Female</option>
                    </select>

                    <!-- <input type="text" name="gender" class="form-control" placeholder="Enter Member Gender"> -->
                  </div>
                  <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" name="address" class="form-control" placeholder="Enter Member Address">
                  </div>
                  <div class="form-group">
                    <label for="type">Type</label>
                    <input type="text" name="type" class="form-control" placeholder="Enter Member Type">
                  </div>
                  <div class="form-group">
                    <label for="level">Level</label>
                    <input type="text" name="level" class="form-control" placeholder="Enter Member Level">
                  </div>                  
                  <div class="form-group">
                    <label for="section">Section</label>
                    <input type="text" name="section" class="form-control" placeholder="Enter Member Section">
                  </div>
                  <div class="form-group">
                    <label for="image">Member Photo</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image" id="">
                        <label class="custom-file-label" for="exampleInputFile">Choose Photo</label>
                      </div>                      
                    </div>
                  </div>                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="save" class="btn btn-primary">Save New Member</button>
                </div>                
              </form>               
            </div>          

          </div>          
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
<?php include("includes/footer.php"); ?>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="dist/js/demo.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="plugins/raphael/raphael.min.js"></script>
<script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>

<!-- PAGE SCRIPTS -->
<script src="dist/js/pages/dashboard2.js"></script>
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<script>
  $(function () {
    // Summernote
    $('textarea').summernote()
  })
</script>
</body>
</html>
