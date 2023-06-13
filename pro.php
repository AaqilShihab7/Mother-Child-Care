<?php

//include 'mview.php';
	$nic=$_POST['nic'];
	$password=$_POST['pass'];

	$con=mysqli_connect("localhost","root","","rdhs");
	//mysqli_select_db(f_db);
	$nic=stripcslashes($nic);
	$password=stripcslashes($password);
	$nic=mysqli_real_escape_string($con,$nic);
	$password=mysqli_real_escape_string($con,$password);

	//mysql_connect("localhost","root","");
	//mysql_select_db(f_db);

	 

	$result=mysqli_query($con,"select * from signup where nic='$nic' and password='$password'") 
						or die("Failed to query database".mysqli_error());

	$row= mysqli_fetch_array($result);


	if(empty($nic)){
		header("location:login.php?error NIC NO is required");
		exit();

	}
	elseif (empty($password)) {
		header("location:login.php?error password is required");
		exit();
	}
	else{

	if($row['nic']==$nic && $row['password']==$password){

		echo "Login Success!!! Welcome"," ".$row['nic'];
		//include "view.php";
		include 'see.php'; 
	}

	
	else{

		echo"Invalid User Name or Password";
	}
}
//


?>