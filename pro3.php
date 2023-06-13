<?php
	$username=$_POST['user'];
	$password=$_POST['pass'];

	$con=mysqli_connect("localhost","root","","rdhs");
	//mysqli_select_db(f_db);
	$username=stripcslashes($username);
	$password=stripcslashes($password);
	$username=mysqli_real_escape_string($con,$username);
	$password=mysqli_real_escape_string($con,$password);

	//mysql_connect("localhost","root","");
	//mysql_select_db(f_db);

	

	$result=mysqli_query($con,"select * from admin where username='$username' and password='$password'") 
						or die("Failed to query database".mysqli_error());

	$row= mysqli_fetch_array($result);


	if(empty($username)){
		header("location:admin.php?error username is required");
		exit();

	}
	elseif (empty($password)) {
		header("location:admin.php?error password is required");
		exit();
	}
	else{

	if($row['username']==$username && $row['password']==$password){
		echo "Login Success!!! Welcome"," ".$row['username'];
		include "admino.php";
	}

	
	else{

		echo"Invalid User Name or Password";
	}
}
//


?>