
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="pro2.php">

    <div class="input-group">
      <label>First Name</label>
      <input type="text" name="firstname" value="">
    </div>
    <div class="input-group">
      <label>Last Name</label>
      <input type="text" name="lastname" value="">
    </div>

    <div class="input-group">
      <label>NIC No</label>
      <input type="text" name="nic" value="">
    </div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="">
  	</div>
    <div class="input-group">
      <label>City</label>
      <input type="text" name="city" value="">
    </div>
    <div class="input-group">
      <label>Gender</label>
      <input type="text" name="gender" value="">
    </div>
    <div class="input-group">
      <label>Mobile No</label>
      <input type="text" name="mobile" value="">
    </div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="repassword">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already have an Account <a href="login.php">Login in</a>
  	</p>
  </form>
</body>
</html>