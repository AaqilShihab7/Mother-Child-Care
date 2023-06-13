<?php
	$regno=$_POST['regno'];
	$prescription=$_POST['prescription'];
	


	$con=mysqli_connect("localhost","root","","rdhs");
	//mysqli_select_db(f_db);
	$regno=stripcslashes($regno);
	$prescription=stripcslashes($prescription);
	
	$regno=mysqli_real_escape_string($con,$regno);
	$prescription=mysqli_real_escape_string($con,$prescription);
	


	//mysql_connect("localhost","root","");
	//mysql_select_db(f_db);

	
            

	$sql="UPDATE `motherd` set `prescription`='$prescription' where `regno`='$regno'; "
						or die("Failed to query database".mysqli_error());
		$result = mysqli_query($con, $sql);	
		
include "doctorview.php"
	

?>