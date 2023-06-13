<?php
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$nic=$_POST['nic'];
	$occupation=$_POST['occupation'];
	$address=$_POST['address'];

	$con=mysqli_connect("localhost","root","","rdhs");
	//mysqli_select_db(f_db);
	//$firstname=stripcslashes($firstname);
	$firstname=stripcslashes($firstname);
	$lastname=stripcslashes($lastname);
	$mobile=stripcslashes($mobile);
	$email=stripcslashes($email);
	$password=stripcslashes($password);
	$nic=stripcslashes($nic);
	$occupation=stripcslashes($occupation);
	$address=stripcslashes($address);

	//$firstname=mysqli_real_escape_string($con,$firstname);
	
	$firstname=mysqli_real_escape_string($con,$firstname);
	$lastname=mysqli_real_escape_string($con,$lastname);
	$mobile=mysqli_real_escape_string($con,$mobile);
	$email=mysqli_real_escape_string($con,$email);
	$password=mysqli_real_escape_string($con,$password);
	$nic=mysqli_real_escape_string($con,$nic);
	$occupation=mysqli_real_escape_string($con,$occupation);
	$address=mysqli_real_escape_string($con,$address);
	

	//mysql_connect("localhost","root","");
	//mysql_select_db(f_db);

	$sql="UPDATE `motherd` set `firstname`='$firstname', `lastname`='$lastname',`mobile`='$mobile',`email`='$email',`password`='$password',`occupation`='$occupation',`address`='$address' WHERE  `nic`='$nic' ; "

						or die("Failed to query database".mysqli_error());
		$result = mysqli_query($con, $sql);
		include "mview.php"
	




?>