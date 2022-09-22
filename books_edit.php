
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Books Edit</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
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
            <h1 class="m-0 text-dark">Books Edit</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Books Edit</li>
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
                <h3 class="card-title">Book Details</h3>
              </div>
<?php 
  include_once("includes/db_config.php");
    if(isset($_POST['update'])){
      extract($_POST);
      $sql = "UPDATE book
          SET book_title='$title', category_id='$category', author='$author', book_copies='$copies', publisher_name='$pubname', isbn='$isbn', copyright_year='$copyear', book_image='$image', date_added=Null, remarks='$remarks' WHERE book_id ='$id'";
          
      $db->query($sql);
      if($db->affected_rows>0){
        echo "<div class='alert alert-success text-center'>Member Updated successfully</div>";
      }
  }
?>
  
<?php 
   $id = $_GET['id'];
   $result = $db->query("SELECT * FROM book WHERE book_id='$id'");
   $row = $result->fetch_assoc();
   $mid = $row['book_id'];
?>

              <form role="form" action="" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="library_id">Book Title</label>
                    <input type="text" value="<?php echo $row['book_title']; ?>" name="title" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="fname">Category ID</label>
                    <input type="text" value="<?php echo $row['category_id']; ?>" name="category" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="lname">Author</label>
                    <input type="text" value="<?php echo $row['author']; ?>" name="author" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="contact">Book Copies</label>
                    <input type="text" value="<?php echo $row['book_copies']; ?>" name="copies" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="publisher">Publisher Name</label>
                    <input type="text" value="<?php echo $row['publisher_name']; ?>" name="pubname" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="isbn">ISBN Number</label>
                    <input type="text" value="<?php echo $row['isbn']; ?>" name="isbn" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="copyear">Copyright Year</label>
                    <input type="text" value="<?php echo $row['copyright_year']; ?>" name="copyear" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="image">Book Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" value="<?php echo $row['book_image']; ?>" class="custom-file-input" name="image" id="">
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
                <button type="submit" name="update" class="btn btn-primary">UPDATE</button>
                </div>
                <input type="hidden" name="id" value="<?php echo $id; ?>">
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
<!-- jQuery Mapael -->
<script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="plugins/raphael/raphael.min.js"></script>
<script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>

<!-- PAGE SCRIPTS -->
<script src="dist/js/pages/dashboard2.js"></script>
</body>
</html>
