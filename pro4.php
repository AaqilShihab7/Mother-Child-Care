<?php
	$regno=$_POST['regno'];
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
	$blood=$_POST['blood'];
	$vdrltest=$_POST['vdrltest'];
	$moharea=$_POST['moharea'];
	$city=$_POST['city'];
	$nic=$_POST['nic'];
	$pregnancyno=$_POST['pregnancyno'];
	$allergies=$_POST['allergies'];
	$lastchildage=$_POST['lastchildage'];
	$lastclinic=$_POST['lastclinic'];
	$nextclinic=$_POST['nextclinic'];
	$cliniccom=$_POST['cliniccom'];
	$consultant=$_POST['consultant'];
	$hospital=$_POST['hospital'];
	$firstclinic=$_POST['firstclinic'];
	$endclinic=$_POST['endclinic'];
	$edo=$_POST['edo'];
	$occupation=$_POST['occupation'];
	$address=$_POST['address'];

	$con=mysqli_connect("localhost","root","","rdhs");
	//mysqli_select_db(f_db);
	//$firstname=stripcslashes($firstname);
	
	$regno=stripcslashes($regno);
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
	$blood=stripcslashes($blood);
	$vdrltest=stripcslashes($vdrltest);
	$moharea=stripcslashes($moharea);
	$city=stripcslashes($city);
	$nic=stripcslashes($nic);
	$pregnancyno=stripcslashes($pregnancyno);
	$allergies=stripcslashes($allergies);
	$lastchildage=stripcslashes($lastchildage);
	$lastclinic=stripcslashes($lastclinic);
	$nextclinic=stripcslashes($nextclinic);
	$cliniccom=stripcslashes($cliniccom);
	$consultant=stripcslashes($consultant);
	$hospital=stripcslashes($hospital);
	$firstclinic=stripcslashes($firstclinic);
	$endclinic=stripcslashes($endclinic);
	$edo=stripcslashes($edo);
	$occupation=stripcslashes($occupation);
	$address=stripcslashes($address);

	//$firstname=mysqli_real_escape_string($con,$firstname);
	
	$regno=mysqli_real_escape_string($con,$regno);
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
	$blood=mysqli_real_escape_string($con,$blood);
	$vdrltest=mysqli_real_escape_string($con,$vdrltest);
	$moharea=mysqli_real_escape_string($con,$moharea);
	$city=mysqli_real_escape_string($con,$city);
	$nic=mysqli_real_escape_string($con,$nic);
	$pregnancyno=mysqli_real_escape_string($con,$pregnancyno);
	$allergies=mysqli_real_escape_string($con,$allergies);
	$lastchildage=mysqli_real_escape_string($con,$lastchildage);
	$lastclinic=mysqli_real_escape_string($con,$lastclinic);
	$nextclinic=mysqli_real_escape_string($con,$nextclinic);
	$cliniccom=mysqli_real_escape_string($con,$cliniccom);
	$consultant=mysqli_real_escape_string($con,$consultant);
	$hospital=mysqli_real_escape_string($con,$hospital);
	$firstclinic=mysqli_real_escape_string($con,$firstclinic);
	$endclinic=mysqli_real_escape_string($con,$endclinic);
	$edo=mysqli_real_escape_string($con,$edo);
	$occupation=mysqli_real_escape_string($con,$occupation);
	$address=mysqli_real_escape_string($con,$address);
	

	//mysql_connect("localhost","root","");
	//mysql_select_db(f_db);

	$sql="INSERT INTO `motherd` (`regno`, `firstname`, `lastname`,`mobile`,`email`,`password`,`weight`,`height`,`bmi`, `suger`, `cholesterol`,`pressure`,`blood`,`vdrltest`,`moharea`,`city`,`nic`,`pregnancyno`, `allergies`, `lastchildage`,`lastclinic`,`nextclinic`,`cliniccom`,`consultant`,`hospital`,`firstclinic`,`endclinic`,`edo`,`occupation`,`address`) VALUES ('$regno','$firstname','$lastname','$mobile','$email','$password','$weight', '$height', '$bmi','$suger','$cholesterol','$pressure','$blood','$vdrltest','$moharea','$city', '$nic', '$pregnancyno','$allergies','$lastchildage','$lastclinic','$nextclinic','$cliniccom','$consultant','$hospital', '$firstclinic', '$endclinic','$edo','$occupation','$address'); "
						or die("Failed to query database".mysqli_error());
		$result = mysqli_query($con, $sql);	
		
		include "mdetail.php";
	




?>