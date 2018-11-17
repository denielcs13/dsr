<?php include 'include/header.php';

 ?>

 <div class="content-wrapper">

    <!-- Content Header (Page header) -->

    <section class="content-header">

      <h1>

      Account

        <small>Control panel</small>

      </h1>

      <ol class="breadcrumb">

        <li><a href="#"><i class="fa fa-gallery"></i> Home</a></li>

        <li class="active"> Account</li>

      </ol>

    </section>

  <section class="content">

     <div class="row"> 

   <div class="col-md-12"> 

   <div class="box box-primary"> 

    <form method="get" action="" >

      <div class="box-body">

      <div class="col-md-3">

        <div class="form-group">

          <label for="username">File Number</label>

         <input type="search" name="search" class="form-control" />

        

        </div> 

      </div>

      <div class="col-md-3">

        <div class="form-group">

         <input type="submit" value="Search" class="btn btn-info" style="margin-top:20px;">

        </div>

      </div>  

    </div>

    </form>

    </div>

    </div>

    </div>

      <div class="row">

<?php

if(isset($_GET["search"])) {
  
  $file_number = $con->real_escape_string($_GET["search"]);


  $filter=array();

  if(!empty($file_number)){

    $filter[]="file_number like '%".$file_number."%'";

  }

if(!empty($filter)){

   $filter1=  " && (".implode(" || ",$filter).")";

  }
  
   $sql ="select * from online_dsr_rest where admin_id LIKE '%".$admin_id."%' AND file_id LIKE '".$file_number."'";
   
   $result1= mysqli_query($con,$sql);
   
  }else{
	
	 $sql1 ="select * from online_dsr_rest where admin_id LIKE '%".$admin_id."%' order by id desc LIMIT 10";
	 $result1=mysqli_query($con,$sql1);
}

  //$result1 = $con->query("SELECT ")
  //$result1=$con->query("select float_query. `id`,calling_entry.`tag_id`,calling_entry.agent_name,file_number,float_query.admin_id,float_query.`cust_name`,float_query.`mobile`,float_query.`email`,float_query.`city`,float_query.`packages`,float_query.`duration`,float_query.`packages_city`,float_query.`start_date`,float_query.`end_date`,float_query.`total_pax`,float_query.`status` from float_query left outer join calling_entry on calling_entry.tag_id=float_query.agent_tag_id where float_query.admin_id='$admin_id'  && file_number !='' ".$filter1." order by float_query.id  desc");

  
 if($result1->num_rows>0){

     echo "<table border='1' class='table table-hover table-bordered table-striped'>

<tr style='background-color:#DF5D58; color:#fff;'>

<th>File Number</th>

<th>Query Id</th>

<th>Admin Id</th>

<th>Revised</th>

<th colspan='2'>Action</</th>

</tr>";


   while($row=$result1->fetch_assoc()){

     //$online_dsr=$con->query("SELECT DISTINCT(dsr_status) FROM `online_dsr` where admin_id1='".$row['admin_id']."' && file_no='".$row['file_number']."' && query_id1='".$row['id']."'")->num_rows;
     //$online_dsr=$con->query("SELECT  DISTINCT(dsr_status)  FROM `float_query` where file_number='".$row['file_id']."' && admin_id='".$row['admin_id']."'")->num_rows;

    echo "<tr class='danger'><td> ".$row['file_id']."</td><td> ".$row["query_id"]."</td><td> ".$row["admin_id"]."</td><td> ".$row["online_dsr_status"]."</td><!--td></td><td></td><td></td-->";

   echo '<td><form method="post">
  <button type="button" id="update" name="update"  class="btn btn-success"  data-toggle="modal" data-target="#myModal" data-self_id="'.$row['id'].'" data-admin_id="'.$row['admin_id'].'" data-query_id="'.$row['query_id'].'"  data-file_id="'.$row['file_id'].'" data-online_status="'.$row['online_dsr_status'].'">PROFORMA INVOICE</button>
  </form>'. "</td>";

 //echo "<td><a class='btn btn-success' data-toggle='modal' data-target='#myModal' id='reply_format' data-admin_id='".$row['admin_id']."' data-self_id='".$row['file_id']."' data-qid='".$row['query_id']."'>PROFORMA INVOICE</a></td><td><a class='btn btn-info' href='online-loader.php?admin=".$row['admin_id']."&query=".$row['query_id']."&file=".$row['file_id']."'>VIEW</a></td>"; 
    echo "</tr>"; 
        
   }

echo "</tr></table>";  

    }else{

   echo  '<div class="alert alert-danger"> Result Not Found </div>';

 }
?>

</div> 

</section>

    <!-- /.content -->

  </div>

<div class="modal fade" id="myModal" role="dialog" >
<div class="modal-dialog modal-lg" >
<div class="modal-content" >
</div>
</div>
</div>

 <?php include 'include/footer.php';?>

 <script>
 var a_url='ajaxpages/proforma-entry.php';
  var a_response=$(".modal-content");


$(document).ready(function(){
  var a_url1='ajaxpages/proforma-entry.php';
  var a_response=$(".modal-content");
  
  $("body").on("click","#update",function(){ 
  var a_request="update_stucture="+$(this).data("self_id")+"&update_admin_id="+$(this).data("admin_id")+"&query_id="+$(this).data("query_id")+"&update_file_id="+$(this).data("file_id")+"&online_status="+$(this).data("online_status");
  fetch_data(a_url,a_request,a_response);
  });

   $("body").on("click","#update_calling",function(){ 
   var a_response1=$("#error-msg");
   var update_from=new FormData($("#form-update-calling")[0])
   var a_request1=update_from;
   insert_data(a_url,a_request1,a_response1);
  
   });
  
});


  </script>

  <script src="dist/js/function.js" ></script>

  <!--script src="dist/js/view-dsr.js" ></script-->