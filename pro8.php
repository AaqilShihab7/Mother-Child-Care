<?php

//include 'mview.php';
	$did=$_POST['did'];
	$password=$_POST['pass'];

	$con=mysqli_connect("localhost","root","","rdhs");
	//mysqli_select_db(f_db);
	$did=stripcslashes($did);
	$password=stripcslashes($password);
	$did=mysqli_real_escape_string($con,$did);
	$password=mysqli_real_escape_string($con,$password);

	//mysql_connect("localhost","root","");
	//mysql_select_db(f_db);

	 

	$result=mysqli_query($con,"select * from doctor where did='$did' and password='$password'") 
						or die("Failed to query database".mysqli_error());

	$row= mysqli_fetch_array($result);


	if(empty($did)){
		header("location:doctor.php?error did is required");
		exit();

	}
	elseif (empty($password)) {
		header("location:doctor.php?error password is required");
		exit();
	}
	else{

	if($row['did']==$did && $row['password']==$password){

		echo "Login Success!!! Welcome"," ".$row['did'];
		//include "view.php";
		include "doctorview.php"; 
	}

	
	else{

		echo"Invalid User Name or Password";
	}
}
//


?>