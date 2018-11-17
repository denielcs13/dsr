<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	
	<title>Proforma Invoice</title>
	
	<link rel='stylesheet' type='text/css' href='proforma/css/style.css' />
	<link rel='stylesheet' type='text/css' href='proforma/css/print.css' media="print" />
	<script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
	<script type='text/javascript' src='js/example.js'></script>
	<script type='text/javascript' src='numbertoword/num.js'></script>

</head>

<?php include '../include/database.php';
 if(isset($_POST["update_stucture"])){
$admin_id=$_POST["update_admin_id"];
$id=$_POST["update_stucture"];	
$sql=  "select * from `tax_invoice` where id='".$id."'";	
$result=mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
$file_number=$row['file_number'];
$customer_name=$row['cust_name'];
$pan_number=$row['pan_no'];
$gst_number=$row['gst_no'];
$destination=$row['destination'];
$order_no=$row['order_no'];
$invoice_no=$row['invoice_id'];
$sac_no=$row['sac'];
$qty=$row['pax_no'];
$rate=$row['total_amount'];
$igst_value=$row['gst_value'];
$cgst_value=$row['cgst_value'];
$sgst_value=$row['sgst_value'];
$total_value=$qty*$rate;
//cgst value
$total_cgst_value=(($cgst_value*$total_value)/100);
//$total_cgst_value=$total_value+$cgst;
//igst value
$total_igst_value=(($igst_value*$total_value)/100);
//$total_igst_value=$total_value+$igst;
// sgst value
$total_sgst_value=(($sgst_value*$total_value)/100);
//$total_sgst_value=$total_value+$sgst;

$total_tax_value=$total_value+$total_cgst_value+$total_igst_value+$total_sgst_value;
$round_value=round($total_tax_value);
$date=date("d/F/Y",strtotime($row['invoice_date']));
$cgst=0;$total_discount=0;
$sgst=0;
}
if($result){
	$sql2=  "select `agent_tag_id` from `float_query` where file_number='".$file_number."'";	
	$result2=mysqli_query($con,$sql2);
	$row2 = mysqli_fetch_array($result2);
}
if($result2){
	$sql3=  "select `address` from `calling_entry` where tag_id='".$row2['agent_tag_id']."'";
	$result3=mysqli_query($con,$sql3);
	$row3 = mysqli_fetch_array($result3);
}
?>
<body >

	<div id="page-wrap">
		
		<div id="identity">
		
		</div>
		<div style="clear:both"></div>
		<form method="post">
		<div id="customer">
			
			<table id="items">
			<tr>
			<td colspan="1" class="blank"></td>
			<td colspan="1" class="blank"></td>
			<td colspan="1" class="blank"></td>
			<td colspan="1" class="blank"></td>
			<td colspan="1" class="blank"></td>
			
			<td colspan="1" class="blank"></td>
			<td colspan="1" class="blank"></td>
			<td colspan="1" class="blank"></td>
			<td colspan="1" class="blank"></td>
			<td colspan="1" class="blank"></td>
			
			<td colspan="1" class="blank"></td>
			<td colspan="1" class="blank"></td>
			
			</tr>
			 <tr>
				 <td colspan="6" class="blank"><span style="color:#79ACC4;font-size:21px">DESTINARO TOURISM</span></td>
				 <td  colspan="4" class="blank"><span style="font-size:21px">TAX INVOICE</span></td> 
				<td  colspan="2" class="blank"><center>ORIGINAL/DUPLICATE/TRIPLICATE</center></td> 			
		     </tr>
			<tr>
				<td colspan="6" class="item-name"><span style="font-size:12px">138/G,Thakur Nitya Gopal Road
																Panihati,Kolkata-700114</span></td>
				<td colspan="4" class="item-name"><span style="font-size:12px">Account No-
				917020069448923
				IFSC Code:UTIB0000437</span></td>
				<td colspan="2" class="item-name"></td>
			</tr>
			<tr>
				<td colspan="6" class="blank"><span style="font-size:12px">Email-info@destinarotourism.com,
																	  accounts@destinarotourism.com
																	  Phone No-9836408689/8240391325
																	  PAN-AANFD9027D,GSTIN:19AANFD9027D1ZA</span></td>
				<td colspan="4" class="item-name"><span style="font-size:12px">Please Pay by A/C payee cheque RTGS NEFT only</span></td>
				<td colspan="2" class="blank"><span style="color:#79ACC4;font-size:21px">DESTINARO TOURISM</span></td>
			</tr>
			<tr>
				<td colspan="2" class="item-name"><span style="font-size:16px">Invoice No-<?php echo $invoice_no;?><span></td>
				<td colspan="8" class="item-name"><span style="font-size:18px">Customer Details:</span></td>
				<td colspan="1" class="item-name"><span style="font-size:18px">Challan No.</span></td>
				<td colspan="1" class="item-name"><span style="font-size:18px"></span></td>
			</tr>
			<tr>
			    <td colspan="2" class="item-name"><span style="font:bold;font-size:18px">NAME:</span></td>
				<td colspan="8" class="item-name" style="background-color:#79ACC4">&nbsp;&nbsp;&nbsp;<?php echo $customer_name;?></td>
				<td colspan="1" class="item-name">Order No.</td>
				<td colspan="1" class="item-name"><?php echo $order_no;?></td>				
			</tr>
			<tr>
				<td colspan="2" class="blank"><span style="font-size:21px">Address:</span></td>
				<td colspan="8" class="item-name">&nbsp;&nbsp;&nbsp;<?php echo $row3['address'];?></td>
				<td colspan="1" class="item-name"><span style="font-size:21px">Vehicle</span></td>
				<td colspan="1" class="item-name"></td>
			</tr>
			<tr class="hiderow">
				<td colspan="2" class="blank"></td>
				<td colspan="8" class="item-name">GSTIN :  &nbsp;&nbsp;&nbsp;     <span style="font:verdana;font-size:18px"><?php echo $gst_number;?></span></td>
				<td colspan="1" class="item-name"><span style="font-size:18px">Location</span></td>
				<td colspan="1" class="item-name"><span style="font-size:12px"><?php echo $destination;?></span></td>
			</tr>
			<tr class="hiderow">
				<td colspan="2" class="blank"></td>
				<td colspan="8" class="item-name">PAN No:  &nbsp;&nbsp;&nbsp; <span style="font:verdana;font-size:18px"> <?php  echo$pan_number;  ?></span></td>
				<td colspan="1" class="item-name"><span style="font-size:18px">Date</span></td>
				<td colspan="1" class="item-name"><?php echo $date;?></td>
			</tr>
			<tr class="hiderow">
				<td colspan="12" class="item-name"><center>Service-wise Details</center></td>
			</tr>
			<tr class="items">
				<td colspan="1" class="item-name">Sr.No</td>
				<td colspan="3" class="item-name"><span style="font:bold">Service Description</span></td>
				<td colspan="1" class="item-name">HSE/SAC Code</td>
				<td colspan="1" class="item-name">Qty</td>
				<td colspan="1" class="item-name">Unit</td>
				<td colspan="1" class="item-name">rate@</td>
				<td colspan="1" class="item-name"><span style="font:bold">Total Amount</span></td>
				<td colspan="1" class="item-name">CGST</td>
				<td colspan="1" class="item-name">SGST</td>
				<td colspan="1" class="item-name">IGST</td>				
			</tr>
			<tr class="items">
				<td colspan="1" class="item-name">1.</td>
				<td colspan="3" class="item-name"><?php echo $destination.' '.'Package';?></td>
				<td colspan="1" class="item-name"><?php echo $sac_no;?></td>
				<td colspan="1" class="item-name"><?php echo $qty;?></td>
				<td colspan="1" class="item-name">PAX</td>
				<td colspan="1" class="item-name"><?php echo $rate;?></td>
				<td colspan="1" class="item-name"><?php echo $total_value;?></td>
				<td colspan="1" class="item-name"><?php echo $cgst_value.'%';?></td>
				<td colspan="1" class="item-name"><?php echo $sgst_value.'%';?></td>
				<td colspan="1" class="item-name"><?php echo $igst_value.'%';?></td>
				
			</tr>
			<tr class="items">
				<td colspan="8" class="blank"><center>Total</center></td>
				<td colspan="1" class="item-name"><?php echo $total_value;?></td>
				<td colspan="1" class="item-name"><?php echo $total_cgst_value;?></td>
				<td colspan="1" class="item-name"><?php echo $total_sgst_value;?></td>
				<td colspan="1" class="item-name"><?php echo $total_igst_value;?></td>
				
			</tr>
			<tr class="items">
				<td colspan="8" class="item-name"></td>
				<td colspan="2" class="item-name"><center>Summary<center></td>
				<td colspan="2" class="item-name"><center>Amount</center></td>
				
			</tr>
			<tr class="items">
				<td colspan="8" class="blank"><img id="image" src="proforma/images/proforma.jpg" style="margin-right:125px;"alt="logo"  height="52px" width="220px"/></td>
				<td colspan="2" class="item-name"><center>Total Invoice value<center></td>
				<td colspan="2" class="item-name"><center><?php echo $total_value;?></center></td>			
			</tr>
			
			<tr class="items">
				<td colspan="8" class="blank"></td>
				<td colspan="2" class="item-name"><center>Total Discount</center></td>
				<td colspan="2" class="item-name"><center><?php echo $total_discount;?></center></td>				
			</tr>
					
			<tr class="items">
				<td colspan="8" class="blank"></td>
				<td colspan="2" class="item-name"><center>Total taxable value<center></td>
				<td colspan="2" class="item-name"><center><?php echo $total_value;?></center></td>
				
			</tr>
			<tr class="items">
				<td colspan="8" class="blank"></td>
				<td colspan="2" class="item-name"><center>Total CGST<center></td>
				<td colspan="2" class="item-name"><center><?php echo $total_cgst_value;?></center></td>
				
			</tr>
			<tr class="items">
				<td colspan="8" class="blank"></td>
				<td colspan="2" class="item-name"><center>Total SGST<center></td>
				<td colspan="2" class="item-name"><center><?php echo $total_sgst_value;?></center></td>
				
			</tr>
			<tr class="items">
				<td colspan="8" class="item-name"><center>Thank You For your Busines</center></td>
				<td colspan="2" class="item-name"><center>Total IGST<center></td>
				<td colspan="2" class="item-name"><center><?php echo $total_igst_value;?></center></td>
				
			</tr>
			<tr class="items">
				<td colspan="1" class="blank" align="right" style="font-weight: bold;">Rupees:</td>
				<td colspan="7" class="blank" id="t03" align="left"><script>num_to_word(<?php echo (ceil($total_tax_value));?>,'t03');</script></center></td>
				<td colspan="2" class="item-name"><center></center>Grand Total</td>
				<td colspan="2" class="item-name"><center><span style="font-size:20px"><?php echo $total_tax_value;?></span></center></td>				
			</tr>
		</table>
			
		</div>	
		<div id="terms">
		</div>
	   <div class='modal-footer'><button class='btn btn-info' type='button' data-dismiss='modal'>Close</button>
	   <button class='btn btn-success' name="save_pdf" type='button'>SAVE AS PDF</button></div>
	</div>
   </form>	
</body>

</html>
