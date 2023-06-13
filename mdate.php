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
  background-image: url('2.jpg');
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
                        <h4>Check Next Clinic Date</h4>
                    </div>
                    <div class="card-body">
                    
                        <form action="" method="GET">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Date</label>
                                        <input type="date" name="nextclinic" value="" class="form-control">
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
                        <table class="table table-borderd">
                            <thead>
                                <tr>
                                    <th>Register No</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>NIC NO</th>
                                    <th>Next Clinic</th>
                                    <th>Mobile No</th>
                                    <th>Email Address</th>
                                </tr>
                            </thead>
                            <tbody>
                            
                                <?php 
                                $con = mysqli_connect("localhost","root","","rdhs");

                                
                                    
                                    $nextclinic = $_GET['nextclinic'];

                                    $query = "SELECT regno,firstname,lastname,nic,nextclinic,mobile,email FROM motherd where nextclinic= '$nextclinic'";
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
                                                <td><?= $row['nic']; ?></td>
                                                <td><?= $row['nextclinic']; ?></td>
                                                <td><?= $row['mobile']; ?></td>
                                                <td><?= $row['email']; ?></td>
                                                
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
    <br>
<center><b><h3><a href="msms.php"> Back to SMS </a></font></h3></b></center>
<br>
<center><b><h3><a href="memail.html"> Back to E-mail </a></font></h3></b></center>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>