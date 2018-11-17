<?php $output = NULL;?>
<section class="content">
     <div class="row"> 
	 <div class="col-md-12"> 
	 <div class="box box-primary"> 
	
 
		<form method="post" action="" >
			<div class="box-body">
			<div class="col-md-5">
				<div class="form-group">
				  <label for="username">Agent Name|Mobile|City</label>
				 <input type="text" name="search" class="form-control" required/>
				
				</div> 
			</div>
			<div class="col-md-4">
				<div class="form-group">
				 <input type="submit" name="submit" value="Search" class="btn btn-info" style="margin-top:20px;">
				</div>
			</div>
			
		</div>
		</form>
		</div>
		</div>
		</div>
		<div class="row">
		 <?php
	 
	if(isset($_POST["submit"])) {
		$mysqli=New mysqli("localhost","root","","destinaro");
		
  $tag_id = $mysqli->real_escape_string($_POST["search"]);
  $agent_name = $mysqli->real_escape_string($_POST["search"]);
  $mobile = $mysqli->real_escape_string($_POST["search"]);
  $city = $mysqli->real_escape_string($_POST["search"]);
  $resultSet= $mysqli->query("SELECT *  FROM `calling_entry` WHERE tag_id like '%".$tag_id."%' OR agent_name LIKE '%".$agent_name."%' OR mobile LIKE'%".$mobile."%' OR city LIKE'%".$city."%'"); 
 // $searchq = preg_replace("#[^0-9a-z]#i","",$searchq); //Can only search words
 
 
// echo "SELECT *  FROM `calling_entry` WHERE tag_id like '%".$tag_id."%' OR agent_name LIKE '%".$agent_name."%' OR mobile LIKE'%".$mobile."%' OR city LIKE'%".$city."%'";
 
 echo "<table border='1' class='table table-hover table-bordered table-striped'>
<tr style='background-color:#DF5D58; color:#fff;'>
<th>Tag Id</th>
<th>Agent Name</th>
<th>Mobile Number</th>
<th>City</</th>
<th>View</</th>
<th>Update</</th>
<th>Print</</th>

</tr>";
echo "<tr class='danger'>";
 if($resultSet->num_rows>0){
	 while($row=$resultSet->fetch_assoc()){
		 $t_id=$row["tag_id"];
		 $ag_n=$row["agent_name"];
		 $mob=$row["mobile"];
		 $city=$row["city"];
		
	$output	 .= "<td> $t_id</td>
				<td>$ag_n</td>
				<td>$mob</td>
				<td>$city</td>";
	$output .= "<form method='post'><td>
	<input type='submit' name='view' value='View'/></td>
	<td><input type='submit' name='update' value='Update'/></td>
	<td><input type='submit'name='print'value='Print'></td></form>";
	 } 
	 
 }else{
	 $output = "No result";
 }
}
echo $output;
echo "</tr></table>";
?>
	</div>	
		</section>
		<?php ?>