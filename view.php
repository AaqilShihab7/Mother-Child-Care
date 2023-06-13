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
  background-image: url('1.jpg');
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
        <center><b><FONT FACE="Magneto" size="50">Mothers Details </font></b></center>

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
                                    <th>Name of the Hospital</th>
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
                                $con = mysqli_connect("localhost","root","","rdhs");

                                
                                    
                                   // $date = $_GET['date'];

                                    $query = "SELECT * FROM motherd";
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