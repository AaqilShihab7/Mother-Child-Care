<?php
	$cid=$_POST['cid'];
	$prescription=$_POST['prescription'];
	


	$con=mysqli_connect("localhost","root","","rdhs");
	//mysqli_select_db(f_db);
	$cid=stripcslashes($cid);
	$prescription=stripcslashes($prescription);
	
	$cid=mysqli_real_escape_string($con,$cid);
	$prescription=mysqli_real_escape_string($con,$prescription);
	


	//mysql_connect("localhost","root","");
	//mysql_select_db(f_db);

	
            

	$sql="UPDATE `child` set `prescription`='$prescription' where `cid`='$cid'; "
						or die("Failed to query database".mysqli_error());
		$result = mysqli_query($con, $sql);	
		
include "doctorview.php"
	

?>