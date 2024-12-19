<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Web Automation</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
   <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

  </nav>
  <!-- /.navbar -->

  <?php include "Sidebar.php";?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">E-Resources for Central Library</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
		  
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
           

            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">E-Resources</h5>
              </div>
              <div class="card-body">
				<?php 
					if(isset($_POST['add']))
					{
						$name=$_POST['name'];
						$eres=$_POST['eres'];
						$webaddress=$_POST['webaddress'];
						$username=$_POST['username'];
						$password=$_POST['password'];
						$sql= "INSERT INTO `library_eresources`(`name`, `eresources`, `webadress`, `username`, `password`) VALUES ('$name','$eres','$webaddress','$username','$password')";
						
						$query=mysqli_query($conn, $sql);
						if($query)
							echo "<div class='alert alert-success'>Added successfully.</div>";
					}
				?>
                <table class="table table-bordered">
					<thead>
						<tr>
							<th>S.No.</th>
							<th>Name</th>
							<th>E-Resources</th>
							<th>Web Address</th>
							<th>Username</th>
							<th>Password</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					    <tr>
							<form action="" method="POST">
							<td>#</td>
							<td><input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Name" required></td>
							<td><input type="text" name="eres" class="form-control" id="exampleInputEmail1" placeholder="Enter E-Resources" required></td>
							<td><input type="text" name="webaddress" class="form-control" id="exampleInputEmail1" placeholder="Enter web address"required></td>
							<td><input type="text" name="username" class="form-control" id="exampleInputEmail1" placeholder="Enter User Name"required></td>
							<td><input type="text" name="password" class="form-control" id="exampleInputEmail1" placeholder="Enter Password"required></td>
							<td> <button type="submit" name="add" class="btn btn-primary">Add</button></td>
							</form>
						</tr>
						<?php 
							$sql="SELECT * FROM `library_eresources`";
							$query=mysqli_query($conn, $sql);
							$id=$name=$eresource=$webaddress=$username=$password=array();
							if(mysqli_num_rows($query)>0)
							{
								while($data=mysqli_fetch_array($query))
								{
									$id[]=$data['id'];
									$name[]=$data['name'];
									$eresources[]=$data['eresources'];
									$webaddress[]=$data['webadress'];
									$username[]=$data['username'];
									$password[]=$data['password'];
								
								}
							}
							for($i=0;$i<sizeof($id);$i++)
							{
								$sno=$i+1;
								echo "<tr>";
								echo "<td>$sno</td>";
								echo "<td>$name[$i]</td>";
								echo "<td>$eresources[$i]</td>";
								echo "<td>$webaddress[$i]</td>";
								echo "<td>$username[$i]</td>";
								echo "<td>$password[$i]</td>";
								echo "</tr>";
								
							}
						?>
					</tbody>
				</table>
              </div>
			   <div class="card-footer">
                Footer
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
