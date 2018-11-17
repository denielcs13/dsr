jQuery("body").on("change","#start_date , #duration",function(){
		var datevalue=$("#start_date").val();
		if(datevalue !=''){
		var duration=$("#duration").val();
		if($.isNumeric(duration)){
		var long_day=duration;	
		}else{
		var long_day=1;	
		}		
		var date2=get_nextdate(long_day,datevalue);
		$("#end_date").val(date2);
		}
});