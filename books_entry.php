
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Book Entry</title>

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

  <?php include("includes/top_bar.php")?>

 <?php include("includes/left_side_bar.php"); ?>

  <div class="content-wrapper">

    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Book Entry</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Book Entry</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <section class="content">
      <div class="container-fluid">

        <div class="row justify-content-center">

          <div class="col-md-6">

            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add New Books</h3>
              </div>

              <?php
                include_once("includes/db_config.php");

                if(isset($_POST['save'])){
                  extract($_POST);
                  $sql = "INSERT INTO book VALUES(NULL, '$book_title', '$category_id', '$author', '$book_copies', '$publisher_name', '$isbn', '$copyright_year', '$book_image', Null, '$remarks')";

                  $db->query($sql);
                  if($db->affected_rows>0){
                    echo "<div class='alert alert-success'>Book Added successfully</div>";
                  }
                }
              ?>

              <form role="form" action="" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="libraryID">Book Title</label>
                    <input type="text" name="book_title" class="form-control" placeholder="Enter Book Title">
                  </div>
                  <div class="form-group">
                    <label for="firstName">Category ID</label>
                    <input type="number" name="category_id" class="form-control" placeholder="Enter Book Category ID">
                  </div>
                  <div class="form-group">
                    <label for="lastName">Author</label>
                    <input type="text" name="author" class="form-control" placeholder="Enter Book Author">
                  </div>
                  <div class="form-group">
                    <label for="contact">Book Copies</label>
                    <input type="number" name="book_copies" class="form-control" placeholder="Enter Book Copies">
                  </div>
                  <div class="form-group">
                    <label for="address">Books Publisher Name</label>
                    <input type="text" name="publisher_name" class="form-control" placeholder="Enter Member Address">
                  </div>
                  <div class="form-group">
                    <label for="type">ISBN Number</label>
                    <input type="text" name="isbn" class="form-control" placeholder="Enter Member Type">
                  </div>
                  <div class="form-group">
                    <label for="level">Copyright Year</label>
                    <input type="number" name="copyright_year" class="form-control" placeholder="Enter Member Level">
                  </div>
                  <div class="form-group">
                    <label for="image">Book Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="book_image" id="">
                        <label class="custom-file-label" for="exampleInputFile">Choose Photo</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="remarks">Remarks</label>
                    <select name="remarks" id="inputState" class="form-control">
                        <option selected disabled>Choose One</option>
                        <option>Available</option>
                        <option>Not Available</option>
                        <option>Coming Soon</option>
                    </select>
                  </div>
                </div>

                <div class="card-footer">
                  <button type="submit" name="save" class="btn btn-primary">Save New Book</button>
                </div>                
              </form>               
            </div>          

          </div>          

        </div>

      </div>
    </section>

  </div>


  <aside class="control-sidebar control-sidebar-dark">

  </aside>

<?php include("includes/footer.php"); ?>
</div>

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
