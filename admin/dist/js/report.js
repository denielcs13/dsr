jQuery("body").on("click","#add_more",function(){
	var i=($('[name="sector_code[]"]').length+1);
	if(i<=31){
	$("#submit_table tr:last").after('<tr><td>'+i+'</td><td><input type="text" name="date[]"  class="date" id="start_date" /></td><td><input type="text" name="sector_code[]" id="sector_code" /><input type="hidden" class="form-control" name="sector_code_id[]" id="sector_code_id"/><span id="auto_sector_code"></span></td><td><input type="text" name="hotel_name[]" id="hotel_name" /><input type="hidden" name="hotel_name_id[]" id="hotel_name_id"/><span id="auto_hotel_name"></span></td><td><input type="text" name="mealplan[]" /></td><td><input type="number" name="no_rooms[]" class="inp" /></td><td><input type="number" name="dbl_rate[]" class="inp" /></td><td><input type="number" name="ext_bed[]" class="inp"/></td><td><input type="number" name="cwb[]" class="inp" /></td><td><input type="number" name="cnb[]" class="inp" /></td><td><input type="text" name="vehicle[]" id="vehicle" /><span id="auto_vehicle"></span></td><td><input type="number" name="no_vehicle[]"  class="inp"/></td><td><input type="number" name="Vehicle_rate[]" class="inp" /></td><td><input type="text" name="vehicle1[]" id="vehicle1" /><span id="auto_vehicle1"></span></td><td><input type="number" name="no_vehicle1[]" class="inp" /></td><td><input type="number" name="vehicle_rate1[]" class="inp"  /></td></tr>');
	 
	}else{
		alert("Over Limit to Add a package");
	}	
});
var admin_id=$("#admin_id").val();
jQuery("body").on("keyup","#sector_code",function(){
	var thisval=jQuery(this);
		var sector_code = thisval.val();
		if(sector_code.length > 1){
			jQuery.ajax({
				type		: "POST",
				url			: "ajaxpages/sector-code.php",
				dataType	: "text",
				data		: {"sec_code_list":sector_code,"sc_list_admin_id":admin_id},
				success: function(msg){
					if(msg==1){
					thisval.siblings("#auto_sector_code").html('');
					}else{
						thisval.siblings("#auto_sector_code").html(msg);
						thisval.siblings("#auto_sector_code div div").mouseover(function(){
						thisval.siblings("#auto_sector_code div div").removeClass("hover");
						thisval.addClass("hover");
					});
					jQuery("#auto_sector_code .city-list").click(function(){
						var value = jQuery(this).html();
						var sector_code = jQuery(this).data("sector_code");
						thisval.val(value);
						thisval.siblings("#sector_code_id").val(sector_code);
						thisval.siblings("#auto_sector_code div").remove();
					});
					}
				}
			})
		}
	});
	jQuery("body").on("keydown","#sector_code",function(){
		var thisval=jQuery(this);
		thisval.siblings("#auto_sector_code").html("");
	});
	jQuery("body").on("click","#auto_sector_code .city-list",function(){
		var thisval=jQuery(this);
		var value = thisval.html();
		var sector_code = thisval.data("sector_code");
		thisval.parent().parent().siblings("#sector_code").val(value);
		thisval.parent().parent().siblings("#sector_code_id").val(sector_code);
		thisval.parent("#auto_sector_code div").remove();
	});
	jQuery("#start_date").change(function(){
		var datevalue=$(this).val();
		var long_day=1;
		var date2=get_nextdate(long_day,datevalue);
		var date3=get_nextdate(long_day,date2);
		var date4=get_nextdate(long_day,date3);
		var date5=get_nextdate(long_day,date4);
		$(this).parent().parent().next('tr').find("td:eq(1)").children('input').val(date2);
		$(this).parent().parent().next().next('tr').find("td:eq(1)").children('input').val(date3);	
		$(this).parent().parent().next().next().next('tr').find("td:eq(1)").children('input').val(date4);
		$(this).parent().parent().next().next().next().next('tr').find("td:eq(1)").children('input').val(date5);
		$(".datepicker").css("display","none");
	});
	jQuery("#calculate").click(function(){
		jQuery("#auto_calculator").html('');
		var valid_sec=validseccode();
		if(valid_sec){
		jQuery.ajax({
				type		: "POST",
				url			: "ajaxpages/report.php",
				dataType	: "text",
				data		: $('form#form_post').serialize(),
				success: function(msg){
				jQuery("#auto_calculator").html(msg);
				}
			});	
		}
	});	 

jQuery("body").on("keyup","#pp_gst",function(){
	var thisval=$(this);
	var cost=$("#pp_cost");
	var g_total=$("#pp_gt");
	grand_lotal(thisval,cost,g_total);
});
jQuery("body").on("keyup","#epsr_gst",function(){
	var thisval=$(this);
	var cost=$("#epsr_cost");
	var g_total=$("#epsr_gt");
	grand_lotal(thisval,cost,g_total);
});
jQuery("body").on("keyup","#cwb_gst",function(){
	var thisval=$(this);
	var cost=$("#cwb_cost");
	var g_total=$("#cwb_gt");
	grand_lotal(thisval,cost,g_total);
});
jQuery("body").on("keyup","#cnb_gst",function(){
	var thisval=$(this);
	var cost=$("#cnb_cost");
	var g_total=$("#cnb_gt");
	grand_lotal(thisval,cost,g_total);
});