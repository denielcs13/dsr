<?php
$con = mysql_connect("localhost","root","");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
mysql_select_db("destinaro", $con) or die("ERROR");


if(isset($_REQUEST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $sql=" SELECT * FROM users WHERE fname like '%".$name."%' OR user_email ='%".$email."%'";
    $q=mysql_query($sql);
}
else{
    $sql="SELECT * FROM users";
    $q=mysql_query($sql);
}
?>
<form method="post">
    <table width="200" border="1">
  <tr>
    <td>Name</td>
    <td><input type="text" name="name" value="<?php echo $name;?>" /></td>
    <td>Email</td>
    <td><input type="text" name="email" value="<?php echo $email;?>" /></td>
    <td><input type="submit" name="submit" value=" Find " /></td>
  </tr>
</table>
</form>
<table>
    <tr>
        <td>Name</td>
        <td>Email</td>
        <td>Address</td>
    </tr>
    <?php
    while($res=mysql_fetch_array($q)){
    ?>
    <tr>
        <td><?php echo $res['fname'].' '.$res['lname'];?></td>
        <td><?php echo $res['user_email'];?></td>
        <td><?php echo $res['address'];?></td>
    </tr>
    <?php }?>
</table>