<?php include 'include/header.php';

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h2>
        Dashboard
        <small>Control panel</small>
      </h2>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
	<div class="row">
	<div class="col-md-4" >
                     <div style="background-color:#DF5D58;width:100%;height:150px;padding:60px 10px 10px 80px;">					
						<p><a href="calling-entry.php" style="color:#fff;"><i class="fa fa-location-arrow"></i>  Calling Entry </a> </p>
						</div>
						</div>
						<?
		if(empty($_SESSION['destinaro_callingentry'])){
			
		
		?>
		<div class="col-md-4" >
                     <div style="background-color:#844240;width:100%;height:150px;padding:60px 10px 10px 80px;">
					 <p><a href="float-query.php" style="color:#fff;"><i class="fa fa-database" aria-hidden="true"></i>  Float Query </a></p>	
						</div>
						</div>
						<div class="col-md-4" >
                     <div style="background-color:#DF5D58;width:100%;height:150px;padding:60px 10px 10px 80px;">					
									<p><a href="daily-service-report.php" style="color:#fff;"><i class="fa fa-bar-chart" aria-hidden="true"></i>  Daily Service Report</a></p>	
						</div>
						</div>
	</div>
	<div class="row" style="margin-top:20px;">
						<div class="col-md-4" >
                     <div style="background-color:#844240;width:100%;height:150px;padding:60px 10px 10px 80px;">					
									<p> <a href="account.php" style="color:#fff;"><i class="fa fa-user" aria-hidden="true"></i>  Accounts</a></p>	
						</div>
						</div>
						<div class="col-md-4" >
                     <div style="background-color:#DF5D58;width:100%;height:150px;padding:60px 10px 10px 80px;">	<p><a href="service-panel.php" style="color:#fff;"><i class="fa fa-cog" aria-hidden="true"></i>  Service Panel</a></p>
						</div>
						</div>
								
	 </div>
	 
	 <?
		}
		?>
    </section>
	
    <!-- /.content -->
  </div>


  <?php include 'include/footer.php'; ?>