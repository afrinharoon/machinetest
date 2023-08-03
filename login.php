<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>AXEsoft Admin</title>
  <!-- base:css -->
  <link rel="stylesheet" href="../../vendors/typicons/typicons.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
			<div  class="col-lg-4 mx-auto">
				<div style="background: #879195;"  class="auth-form-light text-left py-5 px-4 px-sm-5">
            
			<h4> ADMIN LOGIN</h4>
			<br><br>


<?php include"db.php"?>


              <form class="pt-3" method="POST">
              <?php
					 
					 session_start();
					 
					 if(isset($_POST['login']))
					 {
						 $username=$_POST['username'];
						 $password=$_POST['password'];
						 $selquery="select * from tbl_staff where user_name='$username' and password='$password'";
						 $execute=mysqli_query($con,$selquery);
						 
						 $count= mysqli_num_rows($execute);
						 if($count>0)
						 {
							 $data= mysqli_fetch_array($execute);
							 $names=$data['user_name'];
                      $id=$data['id'];
                     // $role=$data['role'];
							 $_SESSION['nam']=$names;
                      $_SESSION['idd']= $id;
                    //  $_SESSION['role']= $role;

							 echo "<meta http-equiv=\"refresh\" content=\"0;URL=index.php\">";
						 }
						 else
						 {
							 echo "<script> alert('Incorrect email or password')</script>";
						 }
					 }
					 ?>
                <div class="form-group">
                  <input type="text" name="username" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="mt-3">
                <input type="submit" name="login" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" id="exampleInput1" value="Login">
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  
                  <a href="#" class="auth-link text-black">Forgot password?</a>
                </div>
               
                <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="" class="text-primary"></a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
