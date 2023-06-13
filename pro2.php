<?php
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	
	$nic=$_POST['nic'];
	$email=$_POST['email'];
	$city=$_POST['city'];
	$gender=$_POST['gender'];
	$mobile=$_POST['mobile'];
	$password=$_POST['password'];
	$repassword=$_POST['repassword'];

	$con=mysqli_connect("localhost","root","","rdhs");
	//mysqli_select_db(f_db);
	$firstname=stripcslashes($firstname);
	$lastname=stripcslashes($lastname);
	
	$nic=stripcslashes($nic);
	$email=stripcslashes($email);
	$city=stripcslashes($city);
	$gender=stripcslashes($gender);
	$mobile=stripcslashes($mobile);
	$password=stripcslashes($password);
	$repassword=stripcslashes($repassword);
	$firstname=mysqli_real_escape_string($con,$firstname);
	$lastname=mysqli_real_escape_string($con,$lastname);
	
	$nic=mysqli_real_escape_string($con,$nic);
	$email=mysqli_real_escape_string($con,$email);
	$city=mysqli_real_escape_string($con,$city);
	$gender=mysqli_real_escape_string($con,$gender);
	$mobile=mysqli_real_escape_string($con,$mobile);
	$pasword=mysqli_real_escape_string($con,$password);
	$repassword=mysqli_real_escape_string($con,$repassword);
	

	//mysql_connect("localhost","root","");
	//mysql_select_db(f_db);

	
            

	$sql="INSERT INTO `signup` (`firstname`, `lastname`, `nic`,`email`,`city`,`gender`,`mobile`,`password`,`repassword`) VALUES ('$firstname','$lastname','$nic','$email','$city','$gender', '$mobile', '$password','$repassword'); "
						or die("Failed to query database".mysqli_error());
		$result = mysqli_query($con, $sql);	
		

	




?>