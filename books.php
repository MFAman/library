<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Admin Login | Books</title>

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
  <!-- Navbar -->
  <?php include("includes/top_bar.php") ?>
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
            <h1 class="m-0 text-dark">All Books</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Books</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="card">
            <div class="card-header">
              <h3 class="card-title">Books Information</h3>

              <ul class="float-sm-right nav">
                  <li>
                    <a class="" href="books_entry.php">
                      <button class="btn btn-primary">Add New Book</button>
                    </a>
				          </li>
              </ul>
              
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th style="width: 80px;">Book Image</th>
                      <th>Title</th>
                      <th>ISBN</th>
                      <th>Author</th>
                      <th>Copies</th>
                      <th>Remarks</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                <tbody>
                  <?php
                      include_once("includes/db_config.php");
                      $sql = "SELECT * FROM book";
                      $result = $db->query($sql);
                    ?>
                   <?php while($row= $result->fetch_assoc()){ ?>
                    <tr>
                     <td>
                     <?php if($row['book_image'] != ""): ?>
                      <img src="upload/<?php echo $row['book_image']; ?>" class="img-thumbnail" width="75px" height="50px">
                      <?php else: ?>
                      <img src="images/book_image.jpg" class="img-thumbnail" width="75px" height="50px">
                      <?php endif; ?>
                      </td>
                     <td><?php echo $row['book_title']; ?></td>
                     <td><?php echo $row['isbn']; ?></td>
                     <td><?php echo $row['author']; ?></td>
                     <td><?php echo $row['book_copies']; ?></td>                     
                     <td><?php echo $row['remarks']; ?></td>
                     <td class=" text-center">
                      <div class=" btn btn-success"><a href="books_edit.php?id=<?php echo $row['book_id']; ?>"><i class="fa fa-edit"></i></a></div> <br> <br>
                      <div class=" btn btn-danger"><a onclick="return confirm('Are you sure want to delete?')" href="books_delete.php?id=<?php echo $row['book_id']; ?>"><i class="fa fa-trash"></i></a></div>
                     
                     </td>
                   </tr>
                  <?php } ?>

                </tbody>
                <tfoot>
                <tr>
                  <th>Book Image</th>                  
                  <th>Title</th>
                  <th>ISBN</th>
                  <th>Author/s</th>
                  <th>Copies</th>                  
                  <th>Remarks</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>

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
<!-- jQuery Mapael -->
<script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="plugins/raphael/raphael.min.js"></script>
<script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<!-- PAGE SCRIPTS -->
<script src="dist/js/pages/dashboard2.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
