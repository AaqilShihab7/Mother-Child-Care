<!DOCTYPE html>
<html>
<head>
  <title>Edit Mother's details</title>
  <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
  <div class="header">
  	<h2>Edit Mother's Deails</h2>
  </div>
	
  <form method="post" action="pro5.php">

    <div class="input-group">
      <label>First Name</label>
      <input type="text" name="firstname" value="">
    </div>

    <div class="input-group">
      <label>Last Name</label>
      <input type="text" name="lastname" value="">
    </div>
  	<div class="input-group">
  	  <label>Mobile Number</label>
  	  <input type="text" name="mobile" value="">
  	</div>
    <div class="input-group">
      <label>E-mail Address</label>
      <input type="email" name="email" value="">
    </div>
    <div class="input-group">
      <label>Password</label>
      <input type="password" name="password" value="">
    </div>
    <div class="input-group">
      <label>NIC Number</label>
      <input type="text" name="nic" value="">
    </div>
    <div class="input-group">
      <label>Mother Occupation</label>
      <input type="text" name="occupation">
    </div>
    <div class="input-group">
      <label>Mother Address</label>
      <input type="text" name="address">
    </div>


  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Edit</button>
  	</div>
  	<p>
  		You have to view your details <a href="mview.php">Click</a>
  	</p>
  </form>
</body>
</html>