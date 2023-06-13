<?php
	$did=$_POST['did'];
	$password=$_POST['password'];
	
	$con=mysqli_connect("localhost","root","","rdhs");
	//mysqli_select_db(f_db);
	$did=stripcslashes($did);
	$password=stripcslashes($password);
	
	$dide=mysqli_real_escape_string($con,$did);
	
	$pasword=mysqli_real_escape_string($con,$password);	

	//mysql_connect("localhost","root","");
	//mysql_select_db(f_db);

	
            

	$sql="INSERT INTO `doctor` (`did`, `password`) VALUES ('$did', '$password'); "
						or die("Failed to query database".mysqli_error());
		$result = mysqli_query($con, $sql);	
		

	include "admino.php";




?>