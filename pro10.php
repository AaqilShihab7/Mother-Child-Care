<?php
	$cid=$_POST['cid'];
	$regno=$_POST['regno'];
	$fullname=$_POST['fullname'];
	$gender=$_POST['gender'];
	$age=$_POST['age'];
	$mothername=$_POST['mothername'];
	$nic=$_POST['nic'];
	$address=$_POST['address'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$city=$_POST['city'];
	$height=$_POST['height'];
	$weight=$_POST['weight'];
	

	$bmi=$_POST['weight']/($_POST['height']*$_POST['height']);

	//$bmi=$_POST['bmi'];
	$blood=$_POST['blood'];
	$skincol=$_POST['skincol'];
	$eyecol=$_POST['eyecol'];
	$haircol=$_POST['haircol'];
	$allergies=$_POST['allergies'];
	$dob=$_POST['dob'];
	$delevery=$_POST['delevery'];
	$nextclinic=$_POST['nextclinic'];
	$cliniccom=$_POST['cliniccom'];
	$firstclinic=$_POST['firstclinic'];
	$consultant=$_POST['consultant'];
	$hospital=$_POST['hospital'];
	$school=$_POST['school'];
	$moh=$_POST['moh'];

	

	$con=mysqli_connect("localhost","root","","rdhs");
	//mysqli_select_db(f_db);
	//$firstname=stripcslashes($firstname);
	$cid=stripcslashes($cid);
	$regno=stripcslashes($regno);
	$fullname=stripcslashes($fullname);
	$gender=stripcslashes($gender);
	$age=stripcslashes($age);
	$mothername=stripcslashes($mothername);
	$nic=stripcslashes($nic);
	$address=stripcslashes($address);
	$phone=stripcslashes($phone);
	$email=stripcslashes($email);
	$city=stripcslashes($city);
	$height=stripcslashes($height);
	$weight=stripcslashes($weight);
	$bmi=stripcslashes($bmi);
	$blood=stripcslashes($blood);
	$skincol=stripcslashes($skincol);
	$eyecol=stripcslashes($eyecol);
	$haircol=stripcslashes($haircol);
	$allergies=stripcslashes($allergies);
	$dob=stripcslashes($dob);
	$delevery=stripcslashes($delevery);
	$nextclinic=stripcslashes($nextclinic);
	$cliniccom=stripcslashes($cliniccom);
	$firstclinic=stripcslashes($firstclinic);
	$consultant=stripcslashes($consultant);
	$hospital=stripcslashes($hospital);
	$school=stripcslashes($school);
	$moh=stripcslashes($moh);
	
	

	//$firstname=mysqli_real_escape_string($con,$firstname);
	$cid=mysqli_real_escape_string($con,$cid);
	$regno=mysqli_real_escape_string($con,$regno);
	$fullname=mysqli_real_escape_string($con,$fullname);
	$gender=mysqli_real_escape_string($con,$gender);
	$age=mysqli_real_escape_string($con,$age);
	$mothername=mysqli_real_escape_string($con,$mothername);
	$nic=mysqli_real_escape_string($con,$nic);
	$address=mysqli_real_escape_string($con,$address);
	$phone=mysqli_real_escape_string($con,$phone);
	$email=mysqli_real_escape_string($con,$email);
	$city=mysqli_real_escape_string($con,$city);
	$height=mysqli_real_escape_string($con,$height);
	$weight=mysqli_real_escape_string($con,$weight);
	$bmi=mysqli_real_escape_string($con,$bmi);
	$blood=mysqli_real_escape_string($con,$blood);
	$skincol=mysqli_real_escape_string($con,$skincol);
	$eyecol=mysqli_real_escape_string($con,$eyecol);
	$haircol=mysqli_real_escape_string($con,$haircol);
	$allergies=mysqli_real_escape_string($con,$allergies);
	$dob=mysqli_real_escape_string($con,$dob);
	$delevery=mysqli_real_escape_string($con,$delevery);
	$city=mysqli_real_escape_string($con,$city);
	$nextclinic=mysqli_real_escape_string($con,$nextclinic);
	$cliniccom=mysqli_real_escape_string($con,$cliniccom);
	$firstclinic=mysqli_real_escape_string($con,$firstclinic);
	$consultant=mysqli_real_escape_string($con,$consultant);
	$hospital=mysqli_real_escape_string($con,$hospital);
	
	$school=mysqli_real_escape_string($con,$school);
	$moh=mysqli_real_escape_string($con,$moh);
	
	
	

	//mysql_connect("localhost","root","");
	//mysql_select_db(f_db);

	$sql="INSERT INTO `child` (`cid`,`regno`, `fullname`, `gender`,`age`,`mothername`,`nic`,`address`,`phone`,`email`,`city`,`height`,`weight`,`bmi`,`blood`, `skincol`, `eyecol`,`haircol`,`allergies`,`dob`,`delevery`,`nextclinic`,`cliniccom`,`firstclinic`, `consultant`, `hospital`,`school`,`moh`) VALUES ('$cid','$regno','$fullname','$gender','$age','$mothername','$nic','$address','$phone','$email','$city','$height', '$weight', '$bmi','$blood','$skincol','$eyecol','$haircol','$allergies','$dob','$delevery','$nextclinic', '$cliniccom', '$firstclinic','$consultant','$hospital','$school','$moh'); "
						or die("Failed to query database".mysqli_error());
		$result = mysqli_query($con, $sql);	
		
		include "cdetail.php";
	




?>