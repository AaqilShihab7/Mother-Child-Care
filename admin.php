<!DOCTYPE html>
<html lang="en">
<head>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <title>Transparent login form </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
*{
  margin:0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
 html{
  background: url("4.jpg");
  background-repeat: no-repeat;
 background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
 
 }

body{
  display: grid;
  place-items: center;
  text-align: center;
  background-size: cover;
  
 

  
}

.content{
  width: 330px;
 
  border-radius: 10px;
  padding: 40px 30px;
  margin-top: 100px;
  box-shadow: -3px -3px 9px #aaa9a9a2,
              3px 3px 7px rgba(147, 149, 151, 0.671);
 
}


.content .text{
  font-size: 25px;
  font-weight: 600;
  margin-bottom: 35px;
  color: rgb(247, 233, 233);
}

.content .field{
  height: 50px;
  width: 100%;
  display: flex;
  position: relative;
}

.field input{
  height: 100%;
  width: 100%;
  padding-left: 45px;
  font-size: 18px;
  outline: none;
  border: none;
  color: #e0d2d2;
  border: 1px solid rgba(255, 255, 255, 0.438);
  border-radius: 8px;
  background: rgba(105, 105, 105, 0);
 
}


.field input::placeholder{
  color: #e0d2d2a6;
}
.field:nth-child(2){
  margin-top: 20px;
}

.field span{
  position: absolute;
  width: 50px;
  line-height: 50px;
  color: #ffffff;
}



button{
  margin: 25px 0 0 0;
  width: 100%;
  height: 50px;
  color: rgb(238, 226, 226);
  font-size: 18px;
  font-weight: 600;
  border: 2px solid rgba(255, 255, 255, 0.438);
  border-radius: 8px;
  background: rgba(105, 105, 105, 0);
 margin-top: 40px;
  outline: none;
  cursor: pointer;
  border-radius: 8px;
 
}
 
.content .or{
  color: rgba(255, 255, 255, 0.733);
  margin-top: 9px;
}
 
.icon-button{
  margin-top: 15px;
}
.icon-button span{
  padding-left: 17px;
  padding-right: 17px;
  padding-top: 6px;
  padding-bottom: 6px;
   color: rgba(244, 247, 250, 0.795);
 border-radius: 5px;
  line-height: 30px;
  background: rgba(255, 255, 255, 0.164);
    backdrop-filter: blur(10px);
}
.icon-button span.facebook{
  margin-right: 17px;

}
button:hover,
.icon-button span:hover{
  background-color: #babecc8c;
}
 
    </style>
</head>
<body>
  <center><b><FONT FACE="Magneto" size="50">Mother Child Care </font></b></center>

    <center><IMG SRC="4.png" HEIGHT="300" WIDTH="200"></IMG></center>
<div class="content">
 <div class="text">Admin Login Form</div>
  <form action="pro3.php" method="post">
    <div class="field">
      <span class="fa fa-user"></span>
      <input type="text" id="user" name="user" placeholder="Username" required>
   
    </div>
    <div class="field">
      <span class="fa fa-lock"></span>
      <input type="password" id="pass" name="pass" placeholder="Password">
      
    </div>
    
    <button>Log in</button>
     
        
     


    </div>
  </form>
</div>
</body>


      

    <center><b><u><h1>Contact Details:</h1></u></b></center>
  <center><h2>Phone:+94672223228,Website:WWW.rdhs.gov.lk,Email:rdhs@kal.lk,Address:Colombo - Batticaloa Hwy, Kalmunai,32300</h2></center>


</html>