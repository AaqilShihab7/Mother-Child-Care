<!DOCTYPE html>
<html>
<head>
  <title>Add Child's details</title>
  <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
  <div class="header">
  	<h2>Add Child's Details</h2>
  </div>
	
  <form method="post" action="pro10.php">

    <div class="input-group">
      <label>Children ID</label>
      <input type="text" name="cid" value="">
    </div>

    <div class="input-group">
      <label>Mother's Registration No</label>
      <input type="text" name="regno" value="">
    </div>
    <div class="input-group">
      <label>Full Name</label>
      <input type="text" name="fullname" value="">
    </div>
         <div class="input-group">
      <label>Gender</label>
      <select name="gender" value="">
                  
            <option>Male</option>
            <option>Female</option>
            <option>Other</option>
            
            </select>
    <div class="input-group">
      <label>Child Age</label>
      <input type="text" name="age" value="">
    </div>
    <div class="input-group">
      <label>Mother Name</label>
      <input type="text" name="mothername" value="">
    </div>
    <div class="input-group">
      <label>Mother NIC NO</label>
      <input type="text" name="nic" value="">
    </div>
        <div class="input-group">
      <label>Address</label>
      <input type="text" name="address" value="">
    </div>
  	<div class="input-group">
  	  <label>Phone Number</label>
  	  <input type="text" name="phone" value="">
  	</div>
    <div class="input-group">
      <label>E-mail Address</label>
      <input type="email" name="email" value="">
    </div>
        <div class="input-group">
      <label>City</label>
      <input type="text" name="city" value="">
    </div>
    <div class="input-group">
      <label>Height</label>
      <input type="text" name="height" placeholder="m">
    </div>
    <div class="input-group">
      <label>Weight</label>
      <input type="text" name="weight" placeholder="Kg" value="">
    </div>

  	<div class="input-group">
  	  <label>BMI</label>
  	  <input type="text" name="bmi" placeholder="Dot't add BMI">
  	</div>
        <div class="input-group">
      <label>Blood group</label>
      <select name="blood" value="">
                  
            <option>AB+</option>
            <option>AB-</option>
            <option>A+</option>
            <option>A-</option>
            <option>B+</option>
            <option>B-</option>
            <option>O+</option>
            <option>O-</option>
            </select>

            <div class="input-group">
      <label>Skin Colour</label>
      <select name="skincol" value="">
                  
            <option>Light</option>
            <option>Fair</option>
            <option>Medium</option>
            <option>Deep(Dark)</option>
            <option>Other</option>
            </select>

            <div class="input-group">
      <label>Eye Colour</label>
      <select name="eyecol" value="">
                  
            <option>Amber</option>
            <option>Blue</option>
            <option>Brown</option>
            <option>Dark Brown/Black</option>
            <option>Gray</option>
            <option>Green</option>
            <option>Hazel</option>
            <option>Red</option>
            <option>Other</option>
            </select>

      <div class="input-group">
      <label>Hair Colour</label>
      <select name="haircol" value="">
                  
            <option>Color Shade Sclae</option>
            <option>Image Gallery</option>
            <option>Brown Hair</option>
            <option>Black Hair</option>
            <option>Gray and White Hair</option>
            <option>Aubum Hair</option>
            <option>Blond Hair</option>
            <option>Red Hair</option>
            <option>Other</option>
            </select>

        <div class="input-group">
      <label>Allergies</label>
      <input type="text" name="allergies" value="">
    </div>
        <div class="input-group">
      <label>Date Of Birth</label>
      <input type="date" name="dob" value="">
    </div>
    <div class="input-group">
      <label>Delivery Type</label>
      <select name="delevery" value="">
                  
            <option>Natural Birth</option>
            <option>Scheduled Cesarean</option>
            <option>Unplanned Cesarean</option>
            <option>Vaginal Birth after C-Section</option>
            <option>Other</option>
            </select>
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
   <div class="input-group">
      <label>First Clinic</label>
      <input type="date" name="firstclinic" value="">
    </div>

    <div class="input-group">
      <label>Consultant Name</label>
      <input type="text" name="consultant" value="">
    </div>


    <div class="input-group">
      <label>Clinic Hospital</label>
      <input type="text" name="hospital" value="">
    </div>

    <div class="input-group">
      <label>Child Studying School Name</label>
      <input type="text" name="school" value="">
    </div>
    </div>
    <div class="input-group">
      <label>MOH Area</label>
      <input type="text" name="moh" value="">
    </div>

    

  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Save</button>
  	</div>
  	<p>
  		You have to view Child's details <a href="cview.php">Click</a>
  	</p>
  </form>
</body>
</html>