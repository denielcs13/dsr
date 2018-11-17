function fetch_data(a_url,a_request,a_response){
	$.ajax({
		url:a_url,
		method:"POST",		
		dataType : "html",		
		data:a_request,
		success: function(data){
		a_response.html(data);
		}
	});
}
function insert_data(a_url,a_request,a_response){	  
		 $.ajax({
			type: "POST",
			url: a_url,
			data: a_request,
			processData: false,
            contentType: false,
			success: function(response){
			if(response==1){
			location.reload();	
			}else{ 
			a_response.html(response).show().delay(5000).fadeOut("slow");	
			}
			return false;			
			}
		});
		
}
function delete_data(a_url,a_request,a_response,thisvalue){	 
		 $.ajax({
			type: "POST",
			url: a_url,
			data: a_request,
			success: function(response){
			if(response==1){
			thisvalue.slideUp();
			}else{ 
			a_response.html(response).show().delay(5000).fadeOut("slow");	
			}
			return false;			
			}
		});
		
}
function get_nextdate(long_day,datevalue){
		var nextdate='';
		var datespl=datevalue.split('-');
		var datey=datespl[2];
		var datem=datespl[1];
		var dated=datespl[0];
		var date1=datey+'-'+datem+'-'+dated;
		var tdate = new Date(date1);
		var tomorrow = new Date(tdate.getTime() + long_day * 24 * 60 * 60 * 1000);
		var cur_mon=(tomorrow.getMonth()+1);
		twoDigitMonth = (cur_mon>= 10)?(tomorrow.getMonth()+1) : '0' + (tomorrow.getMonth()+1);
		var twoDigitDate=((tomorrow.getDate())>=10)? (tomorrow.getDate()) : '0' + (tomorrow.getDate());			
		nextdate = twoDigitDate + "-" + twoDigitMonth + "-" + tomorrow.getFullYear();
		return nextdate;
	}
	function validseccode(){
		var checktrue=true;
		var sector_code=$("[name='sector_code[]']");
		var sector_code_id=$("[name='sector_code_id[]']");
		$("[name='sector_code[]']").each(function(i){
			sector_code.eq(i).css("border","");
			if((sector_code.eq(i).val()=='' && sector_code_id.eq(i).val()  !='') || (sector_code.eq(i).val() !='' && sector_code_id.eq(i).val()  =='')){
				sector_code.eq(i).css("border","1px solid red");
				checktrue=false;
			}		
		});
		var hotel_name=$("[name='hotel_name[]']");
		var hotel_name_id=$("[name='hotel_name_id[]']");
		$("[name='hotel_name[]']").each(function(i){
			hotel_name.eq(i).css("border","");
			if((hotel_name.eq(i).val()=='' && hotel_name_id.eq(i).val()  !='') || (hotel_name.eq(i).val() !='' && hotel_name_id.eq(i).val()  =='')){
				hotel_name.eq(i).css("border","1px solid red");
				checktrue=false;
			}		
		});
		if( $("[name='date[]']").eq(0).val()=='' || $("[name='dbl_rate[]']").eq(0).val()=='' ||$("[name='hotel_name[]']").eq(0).val()=='' || $("[name='mealplan[]']").eq(0).val()=='' || $("[name='sector_code[]']").eq(0).val()==''	|| $("#no_dbl").val()==''){
		$("[name='date[]']").eq(0).css("border","1px solid red");
		$("[name='dbl_rate[]']").eq(0).css("border","1px solid red");
		$("[name='hotel_name[]']").eq(0).css("border","1px solid red");
		$("[name='mealplan[]']").eq(0).css("border","1px solid red");
		sector_code.eq(0).css("border","1px solid red");
		$("#no_dbl").css("border","1px solid red");
		checktrue=false;	
		}else{
		$("[name='date[]']").eq(0).css("border","");
		$("[name='dbl_rate[]']").eq(0).css("border","");
		$("[name='hotel_name[]']").eq(0).css("border","");
		$("[name='mealplan[]']").eq(0).css("border","");
		sector_code.eq(0).css("border","");
		$("#no_dbl").css("border","");
		}
		return checktrue;
	}
	function grand_lotal(thisval,cost,g_total){
	if(thisval.val() !=''){
		var total_cost=(parseInt(cost.val())+parseInt(cost.val()*thisval.val()/100));
		g_total.val(total_cost);
		//var grand_total=parseInt($("#pp_gt").val())+parseInt($("#epsr_gt").val())+parseInt($("#cwb_gt").val())+parseInt($("#cnb_gt").val());
		//$("#total_cost").val(grand_total);
	}
}