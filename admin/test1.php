<?php include 'include/header.php';

 ?>

 <div class="content-wrapper">

    <!-- Content Header (Page header) -->

    <section class="content-header">

      <h1>

       Online DSR

        <small>Control panel</small>

      </h1>

      <ol class="breadcrumb">

        <li><a href="#"><i class="fa fa-gallery"></i> Home</a></li>

        <li class="active"> Online DSR</li>

      </ol>

    </section>

	<section class="content">

     <div class="row"> 

	 <div class="col-md-12"> 
         <div class="modal-content">
<div class="modal-header">

<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>

 Reply Format DTNOH000010
</div>

<div class="modal-body">

	<div id="error-msg"></div>
	
	<div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                   <table border='1' class='table table-hover table-bordered table-striped'>
                            

                       <tbody>
                           <tr>
                               <th>Day</th><th >Date</th><th>Sector Code</th><th >Hotel Name</th><th >MealPlan</th><th >Room</th><th >Dbl Rate</th><th >Ext. Bed Rate</th><th >CWB</th><th >CNB</th><th colspan="3" style="text-align: center;">Option 1<table border="1" class="table table-hover table-bordered table-striped">  <thead><tr ><th>vehicle</th><th>No. of vehicle</th><th>Rate</th></tr> </thead></table></th>
                           </tr>
                   </tbody>

</table>
                        
                        
                    </div>
                </div>
	
	

	</div>
	 

		</div>
</div>

			

</section>

    <!-- /.content -->

  </div>

<div class="modal fade" id="myModal" role="dialog" >

<div class="modal-dialog modal-lg" style="width: 90%;">

<div class="modal-content" >

</div>

</div>

</div>

 

 <?php include 'include/footer.php';?>

 <script>
 var a_url='ajaxpages/online-dsr.php';

 $("body").on("click","#dsr_action",function(){ 

	var response_dsr=$("#error-msg");

	var actiondata=$(this).data("action");

	var conf = confirm("Are you sure you want to "+actiondata+" ?");

    if(conf == true){

	var thisvalue=$(this);

	var sendthisvalue=thisvalue.parent().parent('tr');

	thisvalue.css('display','none');

      var a_request="account_rf="+thisvalue.data("file_no")+"&account_rf_admin_id="+thisvalue.data("admin_id")+"&account_rf_id="+thisvalue.data("qid")+"&account_revised_status="+thisvalue.data("revised_status")+"&account_action="+thisvalue.data("action");

	delete_data(a_url,a_request,response_dsr,sendthisvalue);

	thisvalue.css('display','block');

    }

	});

	var a_response=$(".modal-content");
	
	$("body").on("click","#reply_format",function(){ 

	var a_request="view_stucture_rf="+$(this).data("self_id")+"&view_stucture_rf_admin_id="+$(this).data("admin_id")+"&view_stucture_rf_id="+$(this).data("qid");

	fetch_data(a_url,a_request,a_response);

	});




	$("body").on("click","#send_mail",function(){

		var respon=$("#error-msg");

	if($("#guest_email_id").val()==''){

		respon.html('<div class="alert alert-danger"> Please Put Email ID</div>');

	}else{

	var a_request="send_mail_rev_fn="+$(this).data("file_no")+"&send_mail_rev_admin_id="+$(this).data("admin_id")+"&send_mail_rev_qid="+$(this).data("qid")+"&send_mail_rev_status="+$(this).data("revised_status")+"&send_mail_email="+$("#guest_email_id").val();

	fetch_data(a_url,a_request,respon);

	$("#guest_email_id").val('')

	}

	});

$("body").on("click","#view_dsr",function(){

$("tr#show_data_all").css("display","none");	

$(this).parent().parent().next('tr#show_data_all').show();

});

	</script>

	<script src="dist/js/function.js" ></script>

	<!--script src="dist/js/view-dsr.js" ></script-->