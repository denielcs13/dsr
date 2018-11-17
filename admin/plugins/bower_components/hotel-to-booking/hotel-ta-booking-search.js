var user_id=$("#user_id").val();


var v_url="request/hotel-ta-booking.php";
$("body").on("click","#search_booking",function(){
	var v_id=$("#panel-body");
	var v_postdata=$("#form_search_booking").serialize()+"&search_booking_id="+user_id;
	ajax_request(v_url,v_postdata,v_id);
});
$("body").on("click","#booking_view",function(){
	var v_postdata="view_booking_id="+$(this).data("booking_id")+"&view_hotel_id="+$(this).data("hotel_id");
	open_modal(v_postdata,v_url);
});
$("body").on("click","#B_amount_transfer",function(){
	var v_postdata="view_account_booking_id="+$(this).data("booking_id")+"&view_account_hotel_id="+$(this).data("hotel_id");
	var t_url="request/hotel-ta-booking.php";
	open_modal(v_postdata,t_url);
});
$("body").on("click","#update_account",function(){
	if($("#transaction_number").val()==''){
	$("#error-transaction").html('<div class="alert alert-danger"> Please Enter PTransaction Number</div>').show().delay(5000).fadeOut("slow")	;
	return false;
	}else{
	var v_id=$("#error-transaction");
	var send_data="transaction_number="+$("#transaction_number").val()+"&bankid="+$("#choose_bank").val()+"&tranfer_hotel_id="+$(this).data("hotel_id")+"&tranfer_booking_id="+$(this).data("booking_id");	
	ajax_add(v_url,send_data,v_id);	
	}
	
});
$("body").on("click","#download",function(){
	var v_id=$("#panel-body");
	var send_data=$("#form_search_booking").serialize()+"&download_booking_id="+user_id;
	
	ajax_request(v_url,v_postdata,v_id);
});
$('body').on('focus',"#start_date", function(){
	$(this).datepicker({
	dateFormat: "dd-mm-yy",
	minDate:0,
	yearRange:"-0:+1",
	changeMonth:true,
	changeYear:true,

	onSelect: function (date) {
		var date2 = $('#start_date').datepicker('getDate');
		date2.setDate(date2.getDate());	
		$('#end_date').click();
		$('#end_date').datepicker('setDate', date2);
		$('#end_date').datepicker('option', 'minDate', date2);
		}
	});
});	
$('body').on('focus click',"#end_date", function(){
	$(this).datepicker({
	dateFormat: "dd-mm-yy",

	onClose: function () {
	var dt3 = $('#start_date').datepicker('getDate');
	var dt4 = $('#end_date').datepicker('getDate');
	if (dt4 <= dt3 && dt3 !=null) {
	var minDate = $('#end_date').datepicker('option', 'minDate');
	$('#end_date').datepicker('setDate', minDate);
	}
	}
	});	
}); 