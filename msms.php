<?php
if(isset($_POST['submit'])){
	$mobile='+94'.$_POST['mobile'];
	$message=$_POST['message'];
	

	$apiKey = urlencode('NTI3NzdhNzk0OTYxNzI0MzZjNGQ0NzQ0Nzc1MjVhNTA=');
	

	$numbers = array($mobile);
	$sender = urlencode('Jims Autos');
	$message = rawurlencode($message);
 
	$numbers = implode(',', $numbers);
 

	$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);

	$ch = curl_init('https://api.txtlocal.com/send/');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch);
	curl_close($ch);
	

	echo $response;
}	
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>PHP SMS Blast</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2 class="text-center">Mother SMS form</h2>
  <form class="form-horizontal" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="mobile">Mobile Number:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="mobile" placeholder="Enter mobile number" name="mobile">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="message">Message:</label>
      <div class="col-sm-10">          
        <textarea name="message" class="form-control" placeholder="Enter message"></textarea>
      </div>
    </div>
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="submit" class="btn btn-default">Send</button>
      </div>
    </div>
  </form>
</div>
<center><b><h3><a href="mdate.php"> See date of Clinic </a></font></h3></b></center>
</body>
</html>
