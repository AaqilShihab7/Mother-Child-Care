
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funda of Web IT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style >
  body {
  background-image: url('1.jpg');
  background-repeat: no-repeat;
 background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
<body>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card mt-5">
                    <div class="card-header">
                        <h4>Enter Your Mother Details Password</h4>
                    </div>
                    <div class="card-body">
                    
                        <form action="" method="GET">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>password</label>
                                        <input type="password" name="password" placeholder="password" value="" class="form-control">
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
                                    <th>Registration No</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Mobile No</th>
                                    <th>E-mail Address</th>
                                    <th>Password</th>
                                    <th>Weight</th>
                                    <th>Height</th>
                                    <th>BMI</th>
                                    <th>Suger Level</th>
                                    <th>Cholesterol Level</th>
                                    <th>Pressure Level</th>
                                    <th>Blood Group</th>
                                    <th>VDRL Test Result</th>
                                    <th>MOH Area</th>
                                    <th>City</th>
                                    <th>NIC No</th>
                                    <th>No of Pregnancy</th>
                                    <th>Allergies</th>
                                    <th>Last Child Age</th>
                                    <th>Last Clinic</th>
                                    <th>Next Clinic</th>
                                    <th>Clinic Completed</th>
                                    <th>Name of Consulant</th>
                                    <th>Nmae of the Hospital</th>
                                    <th>Date of First Clinic</th>
                                    <th>Date of End Clinic</th>
                                    <th>EDO</th>
                                    <th>Mother Occupation</th>
                                    <th>Mother Address</th>
                                    <th>Doctor's Prescription for Mother</th>
                                </tr>
                            </thead>
                            <tbody>
                            
                           <?php 
                            //require_once 'pro.php'; 
                              $password = $_GET['password'];


                                $con = mysqli_connect("localhost","root","","rdhs");

                                
                                    
                                    

                                    $query = "SELECT `regno`, `firstname`, `lastname`,`mobile`,`email`,`password`,`weight`,`height`,`bmi`, `suger`, `cholesterol`,`pressure`,`blood`,`vdrltest`,`moharea`,`city`,`nic`,`pregnancyno`, `allergies`, `lastchildage`,`lastclinic`,`nextclinic`,`cliniccom`,`consultant`,`hospital`,`firstclinic`,`endclinic`,`edo`,`occupation`,`address`,`prescription` FROM motherd where password= '$password'";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $row)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $row['regno']; ?></td>
                                                <td><?= $row['firstname']; ?></td>
                                                <td><?= $row['lastname']; ?></td>
                                                <td><?= $row['mobile']; ?></td>
                                                 <td><?= $row['email']; ?></td>
                                                <td><?= $row['password']; ?></td>
                                                <td><?= $row['weight']; ?></td>
                                                <td><?= $row['height']; ?></td>
                                                 <td><?= $row['bmi']; ?></td>
                                                <td><?= $row['suger']; ?></td>
                                                <td><?= $row['cholesterol']; ?></td>
                                                <td><?= $row['pressure']; ?></td>
                                                 <td><?= $row['blood']; ?></td>
                                                <td><?= $row['vdrltest']; ?></td>
                                                <td><?= $row['moharea']; ?></td>
                                                <td><?= $row['city']; ?></td>
                                                 <td><?= $row['nic']; ?></td>
                                                <td><?= $row['pregnancyno']; ?></td>
                                                <td><?= $row['allergies']; ?></td>
                                                <td><?= $row['lastchildage']; ?></td>
                                                 <td><?= $row['lastclinic']; ?></td>
                                                <td><?= $row['nextclinic']; ?></td>
                                                <td><?= $row['cliniccom']; ?></td>
                                                <td><?= $row['consultant']; ?></td>
                                                 <td><?= $row['hospital']; ?></td>
                                                <td><?= $row['firstclinic']; ?></td>
                                                <td><?= $row['endclinic']; ?></td>
                                                <td><?= $row['edo']; ?></td>
                                                 <td><?= $row['occupation']; ?></td>
                                                <td><?= $row['address']; ?></td>
                                                <td><?= $row['prescription']; ?></td>
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