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
$sql=  "select * from `proforma_details` where id='".$id."'";	
$result=mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
$customer_name=$row['cust_name'];
$file_no=$row['file_number'];
$order_no=$row['order_no'];
$address=$row['address'];
$invoice_no=$row['invoice_id'];
$sac_no=$row['sac'];
$qty=$row['pax_no'];
$amount=$row['total_amount'];
$igst_value=$row['gst_value'];
$cgst_value=$row['cgst_value'];
$sgst_value=$row['sgst_value'];
$total_value=$qty*$amount;
//cgst value
$cgst=(($cgst_value*$total_value)/100);
$total_cgst_value=$total_value+$cgst;
//igst value
$igst=(($igst_value*$total_value)/100);
$total_igst_value=$total_value+$igst;
// sgst value
$sgst=(($sgst_value*$total_value)/100);
$total_sgst_value=$total_value+$sgst;

$total_tax_value=$total_value+$cgst+$igst+$sgst;
$round_value=round($total_tax_value);
$date=$row['invoice_date'];

}
if($result){
	$sql2="select `date`,`admin_id1`,`dsr_status` from online_dsr where file_no='".$file_no."' AND dsr_status='1'";
	$result2=mysqli_query($con,$sql2);
	$row2=mysqli_fetch_array($result2);
	$date2=$row2['date'];
}
if($result){
	$sql4="select `duration`,`packages_city` from float_query where file_number='".$file_no."'";
	$result4=mysqli_query($con,$sql4);
	$row4=mysqli_fetch_array($result4);
	$duration=$row4['duration'];
	$packages_city=$row4['packages_city'];
	$duration2=$duration-1;
	$dur1= $duration.' '.'Days'.'/'.$duration2.' '.'Nights'.'  '.$packages_city;
}
?>
<body>

	<div id="page-wrap">
		
		<div id="identity">
		
		</div>
			
		<div style="clear:both"></div>
		<form method="post" action="view-proforma.php">
		<div id="customer">
			
			<table id="items">
			 <tr>
			 
			 <td  class="blank"><img id="image" src="proforma/images/proforma2.jpg" alt="logo" height="50px" width="50px"/></td> 	
		     <td colspan="5" class="blank" ><center><img id="image" src="proforma/images/proforma.jpg" style="margin-right:125px;"alt="logo"  height="52px" width="220px"/></center> </td>   
		    </tr>
			  <tr>
		      <td colspan="6" class="blank"><center>&nbsp;&nbsp;&nbsp;&nbsp;Off:138/G Thakur Nitya Gopal Road, Panihati,Kolkata-700114,Ph:9830342845/9836408689<center></td>
			  </tr>            
            </table>
			
			<h2><center><u>PROFORMA INVOICE</u></center></h2>
            <table id="items">
			  <tr>
		      <td colspan="6" name="customer_name" class="blank">&nbsp;&nbsp;&nbsp;&nbsp;Client's Name & Address :&nbsp;&nbsp;<?php echo $customer_name;?>&nbsp;&nbsp;&&nbsp<?php echo $address;?></td>
			  </tr>
            </table>
		
		</div>
		<div style="text-align:center;margin-top:4px;font-weight:bold">
		<u><?php echo $dur1;?></u>
		</div>
		<table id="items"style="margin-top:10px;">
		
			 <tr class="item-row">
				<td class="description">Order No:</td>
		        <td class="item-name"><div><?php  echo $order_no;?></div></td>
				<td></td><td></td>
				<td class="description">Invoice Date:</td>
		        <td class="item-name"><div><?php  echo date("d/F/Y",strtotime($date));?></div></td>
		     </tr>
			 
			 <tr class="item-row">
				<td class="description">Invoice No:</td>
		        <td class="item-name"><div><?php echo $invoice_no;?></div></td>
				<td></td><td></td>
				<td class="description">Date:</td>
		        <td class="item-name"><div><?php echo date("d/F/Y",strtotime($date2));?></div></td>
		     </tr>
			 			 
		</table>
		
		<table id="items" style="margin-top:10px;">
		  <tr>
		      <th>SAC NO</th>
		      <th>Description</th>
			  <th>Unit</th>
		      <th>Rate</th>
		      <th>Quantity</th>
		      <th>Price</th>
		  </tr>
		  
		  <tr class="item-row">
		      <td class="item-name" style="border-right:1px solid black;"><div><textarea readonly><?php echo $sac_no;?></textarea></div></td>
		      <td class="description" style="border-right:1px solid black;"><textarea readonly>PER PERSON RS.<?php echo $amount;?>/-  X  <?php echo $qty;  ?> PAX</textarea></td>
			  <td class="pax" style="border-right:1px solid black;"><textarea readonly>PAX</textarea></td>
		      <td class="amount" style="border-right:1px solid black;"><textarea class="cost"readonly ><?php echo $amount; ?></textarea></td>
		      <td class="qty" style="border-right:1px solid black;"><textarea class="qty" readonly><?php echo$qty;?></textarea></td>
		      <td class="total_value" style="border-right:1px solid black;"><span class="price" ><?php echo $total_value;?></span></td>
		  </tr>
		 
		   <tr class="hiderow">
				<td colspan="1" class="blank" style="border-right:1px solid black;"><textarea readonly></textarea></td>
				<td colspan="1" class="blank" style="border-right:1px solid black;"><textarea readonly></textarea></td>
				<td colspan="1" class="blank" style="border-right:1px solid black;"><textarea readonly></textarea></td>
				<td colspan="1" class="blank" style="border-right:1px solid black;"><textarea readonly></textarea></td>
				<td colspan="1" class="blank" style="border-right:1px solid black;"><textarea readonly></textarea></td>
				<td colspan="1" class="blank" style="border-right:1px solid black;"><textarea readonly></textarea></td>
		   </tr>
		   <tr class="hiderow">
				<td colspan="1" class="blank" style="border-right:1px solid black;border-bottom:1px solid black;"><textarea readonly></textarea></td>
				<td colspan="1"  class="blank" style="border-right:1px solid black;"><textarea readonly>Tax.Value</textarea></td>
				<td colspan="1" class="blank" style="border-right:1px solid black;"><textarea readonly></textarea></td>
				<td colspan="1" class="blank" style="border-right:1px solid black;"><textarea readonly></textarea></td>
				<td colspan="1" class="blank" style="border-right:1px solid black;"><textarea readonly></textarea></td>
				<td colspan="1" class="blank" style="border-right:1px solid black;"><textarea readonly><?php echo $total_value;?></textarea></td>
		   </tr>
    	  <tr id="hiderow">
			<td colspan="1" class="blank" style="border-right:1px solid black;border-bottom:1px solid black;"></td>
		    <td colspan="1" style="border-right:1px solid black;"><a id="addrow" title="Add a row">Add:IGST@ </a></td>
			<td colspan="1" style="border-right:1px solid black;"></td>
			<td colspan="1" style="border-right:1px solid black;"></td>
			<td  class="qty" readonly><?php echo $igst_value.'%';?></td>
			<td class="qty" readonly><?php echo $igst; ?></td>
		  </tr>
				
		  <tr id="hiderow">
			<td colspan="1" class="blank" style="border-right:1px solid black;border-bottom:1px solid black;"></td>
		    <td colspan="1" style="border-right:1px solid black;"><a id="addrow" title="Add a row">Add:CGST@ </a></td>
			<td colspan="1" style="border-right:1px solid black;"></td>
			<td colspan="1" style="border-right:1px solid black;"></td>
			<td class="qty" readonly><?php echo $cgst_value.'%';?></td>
			<td class="qty" readonly><?php echo $cgst; ?></td>
		  </tr>
		  
		  <tr id="hiderow">
			<td colspan="1" class="blank" style="border-right:1px solid black;border-bottom:1px solid black;"></td>
		    <td colspan="1" style="border-right:1px solid black;"><a id="addrow" title="Add a row">Add:SGST@ </a></td>
			<td colspan="1" style="border-right:1px solid black;"></td>
			<td colspan="1" style="border-right:1px solid black;"></td>
			<td class="qty" readonly><?php echo $sgst_value.'%'; ?></td>
			<td class="qty" readonly><?php echo $sgst; ?></td>
		  </tr>
		  
		  <tr>
			  <td colspan="1" class="blank" style="border-right:1px solid black;border-bottom:1px solid black;"></td>
			  <td colspan="1" class="blank" style="border-right:1px solid black;border-bottom:1px solid black;"></td>
		      <td colspan="1" class="blank" style="border-right:1px solid black;border-bottom:1px solid black;"></td>
			  <td colspan="1" class="blank" style="border-right:1px solid black;border-bottom:1px solid black;"></td>
		      <td colspan="1" class="total-line">Subtotal</td>
		      <td class="total-value"><div id="subtotal"><?php echo $total_tax_value; ?></div></td>
		  </tr>
		  <tr>
			  <td colspan="1" class="blank" style="border-right:1px solid black;"></td>
			  <td colspan="1" class="blank" style="border-right:1px solid black;border-bottom:1px solid black;"></td>
		      <td colspan="1" class="blank" style="border-bottom:1px solid black;border-right:1px solid black;"></td>
			  <td colspan="1" class="blank" style="border-bottom:1px solid black;border-right:1px solid black;">
		      <td colspan="1" class="total-line">Total</td>
		      <td class="total-value"><div id="total"><?php echo $total_tax_value; ?></div></td>
		  </tr>
		  
		  <tr>
			  <td colspan="1" class="total-line"> Rupees:</td>
		      <td colspan="2" class="blank" id="t03" style="align:center;"><script>num_to_word(<?php echo (ceil($total_tax_value));?>,'t03');</script></td>
			  <td colspan="1" class="blank"></td>
		      <td colspan="1" class="blank">Amount Due</td>
              <td class="total-value"><div id="paid"><?php  echo (ceil($total_tax_value));?></div></td>
		  </tr>
		  
		</table>
		
		<table id="items" style="border:none;">
			<tr>
				<td colspan="3" class="blank">GSTIN: 19AANFD9027D1ZA</td>
				<td colspan="3" class="blank" align="right">For Destinaro Tourism</td>
			</tr>
		</table>
	   <div class='modal-footer'><button class='btn btn-info' type='button' data-dismiss='modal'>Close</button>
	   <button class='btn btn-success' name="save_pdf" type='button'>SAVE AS PDF</button></div>
	</div>
   </form>	
</body>

</html>
<?php

if(isset($_POST['customer_name'])){
	echo "hello";
	$content=$_POST['customer_name'];
	
		include_once('dompdf/autoload.inc.php');
		$dompdf= new DOMPDF();
		$dompdf->load_html('view-proforma2.php');
		$dompdf->render();
		$dompdf->stream('sample.pdf');
	}
?>