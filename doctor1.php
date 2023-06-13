
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
  <div class="header">
  	<h2>Add Doctor's Prescription</h2>
  </div>
	
  <form method="post" action="pro9.php">

    <div class="input-group">
      <label>Register No</label>
      <input type="text" name="regno" value="">
    </div>
    <div class="input-group">
      <label>Prescription</label>
      <Font face='Times New Roman' size='15' >
        <textarea placeholder="Enter Prescription" rows="20" cols="60" maxlength="10000" style="font-family:Times New Roman ;font-size: 15;"  name="prescription"></textarea>
      </Font>
    </div>

    
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Add</button>
  	</div>
  	<p>
  		Mother Detail  <a href="mview.php">See here...</a>
  	</p>
    <p>

<h1>
print Description
</h1>

<button onclick="window.print();" class="btn">
Click here
</button>
    </p>
  </form>
</body>
</html>