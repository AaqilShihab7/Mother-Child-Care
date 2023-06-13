<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style >
body {
  background-image: url('9.jpg');
  background-repeat: no-repeat;
 background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
<body>
    
    <MARQUEE DIRECTION="Right"><h1><Font face='Times New Roman' size='30' color='red'>Regional Director of Health Services (RDHS)</Font>
        </h1></MARQUEE><hr style="height: 3px;border-width: 0;color: gray;background-color: gray;">

    <center><b><FONT FACE="Times new roman" size="30" color="#00B3FF">Welcome </font></b></center>
    <center><b><FONT FACE="Magneto" size="50">Mother Child Care </font></b></center>
        <center><b><FONT FACE="Magneto" size="50">Child's Details </font></b></center>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
<body>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card mt-5">
                    <div class="card-header">
                        <h4>Enter Mother's NIC No</h4>
                    </div>
                    <div class="card-body">
                    
                        <form action="" method="GET">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>NIC NO</label>
                                        <input type="text" name="nic" placeholder="nic no" value="" class="form-control">
                                    </div>
                                </div>
                                
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Click to Search</label> <br>
                                      <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-borderd" border="1" bgcolor="#FF5D00">
                            <thead>
                                <tr border="1">
                                    <th>Child ID</th>
                                    <th>Mother Registration No</th>
                                    <th>Full Name</th>
                                    <th>Gender</th>
                                    <th>Age</th>
                                    <th>Mother Name</th>
                                    <th>Mother NIC No</th>
                                    <th>Address</th>
                                    <th>Phone NO</th>
                                    <th>E-mail Address</th>
                                    <th>City</th>
                                    <th>Height</th>
                                    <th>Weight</th>
                                    <th>BMI</th>
                                    <th>Blood Group</th>
                                    <th>Skin Colour</th>
                                    <th>Eye Colour</th>
                                    <th>Hair Colour</th>
                                    <th>Allergies</th>
                                    <th>Date of Birth</th>
                                    
                                    <th>Delivery Type</th>
                                    <th>Next Clinic</th>
                                    <th>Clinic Completed</th>
                                    <th>First Clinic</th>
                                    <th>Consultant</th>
                                    
                                    <th>Prescription for Child</th>
                                    <th>Clinic Hospital</th>
                                    <th>Child Studying School</th>
                                    <th>MOH Area</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                            
                                  <?php 
                            //require_once 'pro.php'; 
                              $nic = $_GET['nic'];


                                $con = mysqli_connect("localhost","root","","rdhs");

                                
                                    
                                    

                                    $query = "SELECT * FROM child where nic= '$nic'";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $row)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $row['cid']; ?></td>
                                                <td><?= $row['regno']; ?></td>
                                                <td><?= $row['fullname']; ?></td>
                                                <td><?= $row['gender']; ?></td>
                                                <td><?= $row['age']; ?></td>
                                                 <td><?= $row['mothername']; ?></td>
                                                <td><?= $row['nic']; ?></td>
                                                <td><?= $row['address']; ?></td>
                                                <td><?= $row['phone']; ?></td>
                                                 <td><?= $row['email']; ?></td>
                                                <td><?= $row['city']; ?></td>
                                                <td><?= $row['height']; ?></td>
                                                <td><?= $row['weight']; ?></td>
                                                 <td><?= $row['bmi']; ?></td>
                                                <td><?= $row['blood']; ?></td>
                                                <td><?= $row['skincol']; ?></td>
                                                <td><?= $row['eyecol']; ?></td>
                                                 <td><?= $row['haircol']; ?></td>
                                                <td><?= $row['allergies']; ?></td>
                                                <td><?= $row['dob']; ?></td>
                                                <td><?= $row['delevery']; ?></td>
                                                 <td><?= $row['nextclinic']; ?></td>
                                                <td><?= $row['cliniccom']; ?></td>
                                                <td><?= $row['firstclinic']; ?></td>
                                                 <td><?= $row['consultant']; ?></td>
                                                <td><?= $row['prescription']; ?></td>
                                                <td><?= $row['hospital']; ?></td>
                                                <td><?= $row['school']; ?></td>
                                                 <td><?= $row['moh']; ?></td>

                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "No Record Found";
                                    }
                                
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
<center><b><h2><a href="welcome.php"> Back to Welcome Page </a></font></h2></b></center>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>