<? 
//include 'include/database.php';
//$sql = "SHOW TABLES FROM ch_destinarotourism";
 define('DB_SERVER', '103.21.58.4');
define('DB_USERNAME', 'conceptZ');
define('DB_PASSWORD', 'aNew2@68');
define('DB_DATABASE', 'conceptmakerz_db');
$con = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE)
or die("Unable to connect to MySQL");
$sql = "SHOW TABLES FROM conceptmakerz_db"; 
$result = mysqli_query($con,$sql);
if (!$result) {
    echo "DB Error, could not list tables\n";
    echo 'MySQL Error: ' . mysqli_query($con);
    exit;
}
while ($row = mysqli_fetch_row($result)) {
    echo "Table: {$row[0]}\n<br/>";
	$table = $row[0];
	
	echo  $query2 = "Show COLUMNS  FROM $table";
        if($output2 = mysqli_query($con,$query2)):
            while($result1 = mysqli_fetch_assoc($output2)):
                echo '<pre> '.$table.'- Column ';
       print_r($result1);
        echo '</pre>'; 
            endwhile;
        endif;	
       /* echo  $query = "select * FROM $table";
        if($output = mysqli_query($con,$query)):
            $columns = array();
            while($result1 = mysqli_fetch_assoc($output)):
                echo '<pre> Data - '.$table;
       print_r($result1);
        echo '</pre>'; 
            endwhile;
        endif; */
        
}

?>