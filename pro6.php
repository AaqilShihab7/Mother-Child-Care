<?php
	
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$weight=$_POST['weight'];
	$height=$_POST['height'];

	$bmi=$_POST['weight']/($_POST['height']*$_POST['height']);

	//$bmi=$_POST['bmi'];
	$suger=$_POST['suger'];
	$cholesterol=$_POST['cholesterol'];
	$pressure=$_POST['pressure'];
	$vdrltest=$_POST['vdrltest'];
	$moharea=$_POST['moharea'];
	$city=$_POST['city'];
	$nic=$_POST['nic'];

	$allergies=$_POST['allergies'];

	$lastclinic=$_POST['lastclinic'];
	$nextclinic=$_POST['nextclinic'];
	$cliniccom=$_POST['cliniccom'];
	$consultant=$_POST['consultant'];
	$hospital=$_POST['hospital'];

	$edo=$_POST['edo'];
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
	$weight=stripcslashes($weight);
	$height=stripcslashes($height);
	$bmi=stripcslashes($bmi);
	$suger=stripcslashes($suger);
	$cholesterol=stripcslashes($cholesterol);
	$pressure=stripcslashes($pressure);
	$vdrltest=stripcslashes($vdrltest);
	$moharea=stripcslashes($moharea);
	$city=stripcslashes($city);
	$nic=stripcslashes($nic);

	$allergies=stripcslashes($allergies);

	$lastclinic=stripcslashes($lastclinic);
	$nextclinic=stripcslashes($nextclinic);
	$cliniccom=stripcslashes($cliniccom);
	$consultant=stripcslashes($consultant);
	$hospital=stripcslashes($hospital);

	$edo=stripcslashes($edo);
	$occupation=stripcslashes($occupation);
	$address=stripcslashes($address);

	//$firstname=mysqli_real_escape_string($con,$firstname);
	
	$firstname=mysqli_real_escape_string($con,$firstname);
	$lastname=mysqli_real_escape_string($con,$lastname);
	$mobile=mysqli_real_escape_string($con,$mobile);
	$email=mysqli_real_escape_string($con,$email);
	$password=mysqli_real_escape_string($con,$password);
	$weight=mysqli_real_escape_string($con,$weight);
	$height=mysqli_real_escape_string($con,$height);
	$bmi=mysqli_real_escape_string($con,$bmi);
	$suger=mysqli_real_escape_string($con,$suger);
	$cholesterol=mysqli_real_escape_string($con,$cholesterol);
	$pressure=mysqli_real_escape_string($con,$pressure);
	$vdrltest=mysqli_real_escape_string($con,$vdrltest);
	$moharea=mysqli_real_escape_string($con,$moharea);
	$city=mysqli_real_escape_string($con,$city);
	$nic=mysqli_real_escape_string($con,$nic);
	
	$allergies=mysqli_real_escape_string($con,$allergies);

	$lastclinic=mysqli_real_escape_string($con,$lastclinic);
	$nextclinic=mysqli_real_escape_string($con,$nextclinic);
	$cliniccom=mysqli_real_escape_string($con,$cliniccom);
	$consultant=mysqli_real_escape_string($con,$consultant);
	$hospital=mysqli_real_escape_string($con,$hospital);

	$edo=mysqli_real_escape_string($con,$edo);
	$occupation=mysqli_real_escape_string($con,$occupation);
	$address=mysqli_real_escape_string($con,$address);
	

	//mysql_connect("localhost","root","");
	//mysql_select_db(f_db);

	$sql="UPDATE `motherd` set `firstname`='$firstname', `lastname`='$lastname',`mobile`='$mobile',`email`='$email',`password`='$password',`weight`='$weight',`height`='$height',`bmi`='$bmi', `suger`='$suger', `cholesterol`='$cholesterol',`pressure`='$pressure',`vdrltest`='$vdrltest',`moharea`='$moharea',`city`='$city', `allergies`='$allergies', `lastclinic`='$lastclinic',`nextclinic`='$nextclinic',`cliniccom`='$cliniccom',`consultant`='$consultant',`hospital`='$hospital',`edo`='$edo',`occupation`='$occupation',`address`='$address' WHERE `nic`='$nic'; "
						or die("Failed to query database".mysqli_error());
		$result = mysqli_query($con, $sql);	
		
		include "view.php";
	




?>