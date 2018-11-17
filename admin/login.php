<?php session_start();
unset($_SESSION['destinaro_admin_id']);
unset($_SESSION['destinaro_callingentry']);
?>

<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Desti Naro Tourism</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini" style="background: url(dist/img/pic3.jpg);">

    <div class="row">
       <!-- right column -->
	   <div class="col-md-6" style="color:#fff;margin-top: 10%;text-align:right;">
	   <h3>Welcome to Desti Naro Tourism</h3>
	   </div>
        <div class="col-md-4" style="margin-top: 10%;margin-left: 5%;">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Login</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
			<?php
			//Login code
	 if(isset($_POST['submit'])){
		$uname=$_POST['username'];
		$upwd=$_POST['password'];
	 if($uname == "" || $upwd == ""){
		echo '<div class="alert alert-danger"> Please Enter Your Username & Password.</div>';
	}else if(($uname == "destinaro" && $upwd == "destinaro" ) || ($uname == "accounts@destinarotourism.com" && $upwd == "accounts@123") || ($uname == "Sales@destinarotourism.com" && $upwd == "sales@123") || ($uname == "dchatterjee@destinarotourism.com" && $upwd == "dchatterjee@123")){
			$_SESSION['destinaro_admin_id']=1;
			header('location:index.php');
	}else if($uname == "callingentry" && $upwd == "callingentry@123"){
			$_SESSION['destinaro_admin_id']=1;
			$_SESSION['destinaro_callingentry']=1;
			header('location:index.php');
	}else{
			echo '<div class="alert alert-danger"> Please Enter Your Username & Password.</div>';
	}
}
			?>
            <form class="form-horizontal" method="post">
              <div class="box-body">
			 
                <div class="form-group">
                  <label for="username" class="col-sm-2 control-label">Username </label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="username" placeholder="Username " name="username" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="password" class="col-sm-2 control-label">Password</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Remember me
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <input type="submit" name="submit"class="btn btn-info pull-right" value="Sign in">
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
         </div>
        <!--/.col (right) -->
      </div>
     
    <div class="row" >
       <!-- right column -->
        <div class="col-md-12" >
          <!-- Horizontal Form -->
          
	 <footer class="main-footer" style="margin-left: 0px;
    text-align: center;position: fixed;bottom: 0%;width:100%">
    <div class="pull-right hidden-xs">
     
    </div>
    <strong>Copyright © Desti Naro Tourism| Design & Maintenance By <a href="http://www.c2shub.com/" target="_blank">C2S HUB SOLUTION</a>
  </strong></footer>
  </div></div>
  <script src="bower_components/jquery/dist/jquery.min.js"></script>
  </body></html>