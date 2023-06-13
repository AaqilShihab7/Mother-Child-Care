<?php
	$cid=$_POST['cid'];
	
	$fullname=$_POST['fullname'];
	
	$age=$_POST['age'];
	
	
	$address=$_POST['address'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$city=$_POST['city'];
	$height=$_POST['height'];
	$weight=$_POST['weight'];
	

	$bmi=$_POST['weight']/($_POST['height']*$_POST['height']);

	//$bmi=$_POST['bmi'];

	$allergies=$_POST['allergies'];

	$nextclinic=$_POST['nextclinic'];
	$cliniccom=$_POST['cliniccom'];
	
	$consultant=$_POST['consultant'];
	$hospital=$_POST['hospital'];
	$school=$_POST['school'];
	$moh=$_POST['moh'];

	

	$con=mysqli_connect("localhost","root","","rdhs");

	$cid=stripcslashes($cid);
	
	$fullname=stripcslashes($fullname);
	
	$age=stripcslashes($age);
	
	$address=stripcslashes($address);
	$phone=stripcslashes($phone);
	$email=stripcslashes($email);
	$city=stripcslashes($city);
	$height=stripcslashes($height);
	$weight=stripcslashes($weight);
	$bmi=stripcslashes($bmi);
	
	$allergies=stripcslashes($allergies);
	$nextclinic=stripcslashes($nextclinic);
	$cliniccom=stripcslashes($cliniccom);
	
	$consultant=stripcslashes($consultant);
	$hospital=stripcslashes($hospital);
	$school=stripcslashes($school);
	$moh=stripcslashes($moh);
	
	

	//$firstname=mysqli_real_escape_string($con,$firstname);
	$cid=mysqli_real_escape_string($con,$cid);
	
	$fullname=mysqli_real_escape_string($con,$fullname);
	
	$age=mysqli_real_escape_string($con,$age);
	
	$address=mysqli_real_escape_string($con,$address);
	$phone=mysqli_real_escape_string($con,$phone);
	$email=mysqli_real_escape_string($con,$email);
	$city=mysqli_real_escape_string($con,$city);
	$height=mysqli_real_escape_string($con,$height);
	$weight=mysqli_real_escape_string($con,$weight);
	$bmi=mysqli_real_escape_string($con,$bmi);
	
	$allergies=mysqli_real_escape_string($con,$allergies);
	
	$nextclinic=mysqli_real_escape_string($con,$nextclinic);
	$cliniccom=mysqli_real_escape_string($con,$cliniccom);
	
	$consultant=mysqli_real_escape_string($con,$consultant);
	$hospital=mysqli_real_escape_string($con,$hospital);
	
	$school=mysqli_real_escape_string($con,$school);
	$moh=mysqli_real_escape_string($con,$moh);
	
	
	

	//mysql_connect("localhost","root","");
	//mysql_select_db(f_db);

	$sql="UPDATE `child` set `fullname`='$fullname', `age`='$age',`address`='$address',`phone`='$phone',`email`='$email',`city`='$city',`height`='$height',`weight`='$weight',`bmi`='$bmi', `allergies`='$allergies', `nextclinic`='$nextclinic',`cliniccom`='$cliniccom',`consultant`='$consultant',`hospital`='$hospital',`school`='$school', `moh`='$moh' WHERE `cid`='$cid'; "
						or die("Failed to query database".mysqli_error());
		$result = mysqli_query($con, $sql);	
		
		include "echild.php";
	




?>