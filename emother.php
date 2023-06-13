<!DOCTYPE html>
<html>
<head>
  <title>Edit Mother's details</title>
  <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
  <div class="header">
  	<h2>Edit Mother's Details</h2>
  </div>
	
  <form method="post" action="pro6.php">

  
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
      <label>Weight</label>
      <input type="text" name="weight" placeholder="Kg" value="">
    </div>
  	<div class="input-group">
  	  <label>Height</label>
  	  <input type="text" name="height" placeholder="m">
  	</div>
  	<div class="input-group">
  	  <label>BMI</label>
  	  <input type="text" name="BMI" placeholder="Dont't add BMI ">
  	</div>

    <div class="input-group">
      <label>Suger Level</label>
      <input type="text" name="suger" placeholder="mg/dl" value="">
    </div>
    <div class="input-group">
      <label>Cholesterol Level</label>
      <input type="text" name="cholesterol" placeholder="mg/dl" value="">
    </div>

    <div class="input-group">
      <label>Pressure Level</label>
      <input type="text" name="pressure" placeholder="mmHg" value="">
    </div>

    </div>
    <div class="input-group">
      <label>VDRL Test Result</label>
      <select name="vdrltest" value="">
        <option>Possitive</option>
            <option>Negative</option>
            </select>
    </div>
    <div class="input-group">
      <label>MOH Area</label>
      <input type="text" name="moharea" value="">
    </div>
    <div class="input-group">
      <label>City</label>
      <input type="text" name="city" value="">
    </div>
    <div class="input-group">
      <label>NIC Number</label>
      <input type="text" name="nic" value="">
    </div>

    <div class="input-group">
      <label>Allergies</label>
      <input type="text" name="allergies" value="">
    </div>

    <div class="input-group">
      <label>Last Clinic</label>
      <input type="date" name="lastclinic" value="">
    </div>
    <div class="input-group">
      <label>Next Clinic</label>
      <input type="date" name="nextclinic" value="">
    </div>
    <div class="input-group">
      <label>Clinic Completed</label>
      <select name="cliniccom" value="">
                  
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
            <option>8</option>
            <option>9</option>
            <option>10</option>
            </select>
    </div>
    <div class="input-group">
      <label>Name of Concultant</label>
      <input type="text" name="consultant" value="">
    </div>
    <div class="input-group">
      <label>Name of the Hospital</label>
      <input type="text" name="hospital" value="">
    </div>

    <div class="input-group">
      <label>EDO (Delivery Expectation Date)</label>
      <input type="date" name="edo"  value="">
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
  	  <button type="submit" class="btn" name="reg_user">Update</button>
  	</div>
  	<p>
  		You have to view Mothers details <a href="view.php">Click</a>
  	</p>
  </form>
</body>
</html>