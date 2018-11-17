<?php
$page_name= basename($_SERVER["PHP_SELF"]);
$current_page=explode(".",$page_name);
$cur_page_name=$current_page[0];
?><aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/logo2.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>D.N.T</p>
        </div>
      </div>
     
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="<?=($cur_page_name=='index')?'active':'';?> treeview">
          <a href="./">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            
          </a>
		  </li>
		  <li class="treeview <?php echo ($cur_page_name=='calling-entry')?'active':'';echo ($cur_page_name=='calling-list')?'active':'';?>">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Calling</span>
			<span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
			
          </a>
          <ul class="treeview-menu ">
            <li <?=($cur_page_name=='calling-entry')?'class="active"':'';?>><a href="calling-entry.php" > <i class="fa fa-cog"></i> Calling Entry </a></li>
             <li  <?=($cur_page_name=='calling-list')?'class="active"':'';?>><a href="calling-list.php"><i class="fa fa-cog"></i> Calling List </a></li> 
          </ul>
        </li>
		<?php
		if(empty($_SESSION['destinaro_callingentry'])){
			
		
		?>
		  <li class="treeview <?php
			echo ($cur_page_name=='new-lead')?'active':'';
			echo ($cur_page_name=='float-query')?'active':'';
			echo ($cur_page_name=='float-query-list')?'active':'';
			echo ($cur_page_name=='view-client')?'active':'';
			echo ($cur_page_name=='pick-query')?'active':'';
		   ?>">
          <a href="#">
            <i class="fa fa-database" aria-hidden="true"></i>
            <span>Float Query </span>
			<span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
		  <li <?=($cur_page_name=='new-lead')?'class="active"':(($cur_page_name=='view-client')?'class="active"':'');?>><a href="new-lead.php"><i class="fa fa-database" aria-hidden="true"></i> New Lead </a></li>
            <li <?=($cur_page_name=='float-query')?'class="active"':'';?>><a href="float-query.php"><i class="fa fa-database" aria-hidden="true"></i> Float Query  </a></li>
             <li <?=($cur_page_name=='float-query-list')?'class="active"':(($cur_page_name=='pick-query')?'class="active"':'');?>><a href="float-query-list.php"><i class="fa fa-cog"></i> Float Query  List</a></li> 
          </ul>
        </li> 
		<li class="treeview <?php
			echo ($cur_page_name=='sector-code')?'active':'';
			echo ($cur_page_name=='hotel')?'active':'';
			echo ($cur_page_name=='vehicle')?'active':'';
			echo ($cur_page_name=='inclusion')?'active':'';
		   ?>">
          <a href="#">
            <i class="fa fa-database" aria-hidden="true"></i>
            <span>More Details </span>
			<span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
		 
			 <li <?=($cur_page_name=='sector-code')?'class="active"':'';?>><a href="sector-code.php"><i class="fa fa-cog"></i> Sector Code</a></li> 
			 <li <?=($cur_page_name=='hotel')?'class="active"':'';?>><a href="hotel.php"><i class="fa fa-building"></i> Hotel</a></li> 
			 <li <?=($cur_page_name=='vehicle')?'class="active"':'';?>><a href="vehicle.php"><i class="fa fa-car"></i> Vehicle</a></li> <li <?=($cur_page_name=='inclusion')?'class="active"':'';?>><a href="inclusion.php"><i class="fa fa-table"></i> Inclusion</a></li> 
          </ul>
        </li> 
		 <li class="treeview <?=($cur_page_name=='online-dsr')?'active':(($cur_page_name=='report' || $cur_page_name=='report-edit' || $cur_page_name=='proforma-list' || $cur_page_name=='online-loader' || $cur_page_name=='tax-invoice-list' || $cur_page_name=='accounts')?'active':'');?>">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>DSR-Daily Service Report </span>
			<span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?=($cur_page_name=='online-dsr' || $cur_page_name=='report'|| $cur_page_name=='report-edit' || $cur_page_name=='proforma-list' || $cur_page_name=='tax-invoice-list' || $cur_page_name=='online-loader' )?'class="active"':'';?>><a href="online-dsr.php"><i class="fa fa-cog"></i>Online DSR  </a></li> 
			 <li <?=($cur_page_name=='accounts')?'class="active"':'';?>><a href="accounts.php"><i class="fa fa-cog"></i>View Approved List  </a></li > 
			 <li <?=($cur_page_name=='proforma-list')?'class="active"':'';?>><a href="proforma-list.php"><i class="fa fa-cog"></i>Proforma List</a></li> 
			  <li <?=($cur_page_name=='tax-invoice-list')?'class="active"':'';?>><a href="tax-invoice-list.php"><i class="fa fa-cog"></i>Tax Invoice List</a></li> 
          </ul>
        </li> 
		
        <li class="treeview <?php echo ($cur_page_name=='vendor-entry')?'active':'';echo ($cur_page_name=='vendor-list')?'active':'';?>">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Vendor Entry</span>
			<span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu ">
            <li <?php echo ($cur_page_name=='vendor-entry')?'class="active"':'';?>><a href="vendor-entry.php" > <i class="fa fa-cog"></i>Vendor  Entry </a></li>
             <li  <?php echo ($cur_page_name=='vendor-list')?'class="active"':'';?>><a href="vendor-list.php"><i class="fa fa-cog"></i>Vendor  List </a></li> 
			 
			 
          </ul>
        </li>
		
		 <li class="treeview <?php echo ($cur_page_name=='voucher-entry')?'active':'';echo ($cur_page_name=='voucher-list')?'active':'';?>">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Service Voucher</span>
			<span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu ">
            <li <?php echo ($cur_page_name=='voucher-entry')?'class="active"':'';?>><a href="voucher-entry.php" > <i class="fa fa-cog"></i>Voucher  Entry </a></li>
             <li  <?php echo ($cur_page_name=='voucher-list')?'class="active"':'';?>><a href="voucher-list.php"><i class="fa fa-cog"></i>Voucher  List </a></li> 
			    </ul>
      </li>
	
       <li class="treeview <?php echo ($cur_page_name=='office_expance_entry')?'active':'';echo ($cur_page_name=='office_expance_list')?'active':'';?>">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Office Expance Entry</span>
			<span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu ">
            <li <?php echo ($cur_page_name=='office_expance_entry')?'class="active"':'';?>><a href="office_expance_entry.php" > <i class="fa fa-cog"></i>Office Expance  Entry </a></li>
             <li  <?php echo ($cur_page_name=='office_expance_list')?'class="active"':'';?>><a href="office_expance_list.php"><i class="fa fa-cog"></i>Office Expance  List </a></li> 
          </ul>
        </li>
		
		
		
	<?php
	
		}
		?>
		  <!--li class="treeview ">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Accounts </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="service-panel.php"><i class="fa fa-cog"></i>Service Panel </a></li>
			 <li><a href="account.php"><i class="fa fa-cog"></i>Service </a></li>
             
          </ul>
        </li--> 
		
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

 