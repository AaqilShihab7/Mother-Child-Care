
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
  <div class="header">
  	<h2>Add Consultant</h2>
  </div>
	
  <form method="post" action="pro7.php">

    <div class="input-group">
      <label>Doctor ID</label>
      <input type="text" name="did" value="">
    </div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Add</button>
  	</div>

  </form>
</body>
</html>