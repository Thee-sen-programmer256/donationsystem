<?php
    $con = mysqli_connect("localhost","root","","donation_procurement");

    if(!$con){
        die("Could not connect: ". mysqli_connect_error());
    }else{
       echo "successful connected";
    }


    // Assigning input data into a variable then inserting it into the database
if(isset($_POST["submit"])){
    $organname= $_POST["organname"];
    $bloodgroup= $_POST["bloodgroup"];
    $donor= $_POST["donor"];
    $date_added= $_POST["date_added"];
    $statuss= $_POST["statuss"];

$sql = "INSERT INTO organ( organname, bloodgroup, donor,date_added, statuss)VALUE('$organname', '$bloodgroup', '$donor', '$date_added','$statuss')";
//echo $sql;
// excecuting the query
if(mysqli_query($con,$sql)){

    ?>
    
    <script type="text/javascript">
        alert("Organ Successfully Added");
        window.location= "../organstock.php";
    </script>
    <?php 
    }else{
    echo mysqli_error($con);
    }
    
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="../../style.css">
      <link rel="stylesheet" href="../../calendar/bootstrap.min.css">
<!--
     <link href="admin-assets/css/font-face.css" rel="stylesheet" media="all">
    <link href="admin-assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="admin-assets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="admin-assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="admin-assets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
    <link href="admin-assets/css/theme.css" rel="stylesheet" media="all">
    <title>Dashboard</title>
-->

    <style>
        table{
            border-radius: 10px
        }

        th,td{
            padding: 14px;
        }

        td{
            color: black;
            background-color: white;
            justify-content:  center;
            align-content: center;
        }
        a{
          text-decoration: none;
        }



    </style>

</head>
<body>
    <input type="checkbox" id="nav-toggle">
    <!-- Sidebar start -->
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span class="las la-hand-holding-heart"><span>OrgDonor</span> </span></h2>
        </div>

        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="../../index.html" ><span class="las la-igloo"></span><span>Dashboard</span></a>
                </li>
                <li>
                    <a href="../patients.php" ><span class="las la-users"></span><span>Patients</span></a>
                </li>
                <li>
                    <a href="../donor.php"><span class="las la-user"></span><span>Donors</span></a>
                </li>
                <li>
                    <a href="../organrequests.php"><span class="las la-sync"></span><span>Organ Requests</span></a>
                </li>
                <li>
                    <a href="../requesthistory.php"><span class="las la-history"></span><span>Request History</span></a>
                </li>
                <li>
                    <a href="../organstock.php" class="active" ><span class="lar la-heart"></span><span>Organ Stock</span></a>
                </li>
                <li>
                    <a href="../donations.php" ><span class="las la-coins"></span><span>Donations</span></a>
                </li>
                <li>
                    <a href="../events.php" ><span class="las la-calendar"></span><span>Events</span></a>
                </li>
                <li>
                    <a href="../notifications.php" ><span class="las la-bell"></span><span>Notifications</span></a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Sidebar End -->

    <div class="main-content">
        <!-- Header Start -->
        <header>
            <h2>
                <label for="nav-toggle">
                    <span class="las la-bars"></span>
                </label>
              Add Organs
            </h2>
           
            <div class="user-wrapper">
                <img src="../../images.jpg" width="40px" height="40px" alt="">
                <div>
                    <h4>Mark Roi</h4>
                    <small>Super admin</small>
                </div>
                <div>
                    <a href="../../../Home/logout.php"><small style="color: red;">LOGOUT</small></a>
                </div>
            </div>
        </header>
        <!-- Header End -->
<section>
        <main>




    <a href="../organstock.php">
        <button type="button" style="padding: 13px; color: white;background-color:#0071b5;border: 0;border-radius: 10px;margin-bottom: 30px;font-size: 20px">
           Organ Stock
        </button>
    </a>
    <div class="row m-t-30">
        <div class="col-md-12">
            <!-- DATA TABLE-->
            <div>
              <!-- slider -->
              <div class="container"  style="width:100%;margin-top:-2%;margin-right:20%">
                  <div class="row">
                      <div class="col-md-9">
                          <div id="calendar"></div>
                      </div>
                      <div class=>
                          <div class="cardt rounded-0 shadow">
                              <div class="card-header bg-gradient  text-light" style="background-color:#0071b5;">
                                  <h5 class="card-title">Organ Form</h5>
                              </div>
                              <div class="card-body">
                                  <div class="container-fluid">
                                      <form action="" method="post" id="schedule-form">
                                          <input type="hidden" name="id" value="">
                                          <div class="form-group mb-2">
                                              <label for="title" class="control-label">Organ</label>
                                              <input type="text" class="form-control form-control-sm rounded-0" name="organname" id="title" required>
                                          </div>
                                          <div class="form-group mb-2">
                                              <label for="description" class="control-label">Blood group</label>
                                              <select class="select" name="bloodgroup">
                                                <option value="A+">A+</option>
                                                <option value="A-">A-</option>
                                                  <option value="B+">B+</option>
                                                  <option value="B-">B-</option>
                                                  <option value="AB">AB</option>
                                                    <option value="O+">O+</option>
                                                      <option value="O-">O-</option>
                                              </select>
                                          </div>
                                          <div class="form-group mb-2">
                                              <label for="donor" class="control-label">Donor</label>
                                              <input type="text" class="form-control form-control-sm rounded-0" name="donor" id="start_datetime" required>
                                          </div>
                                          <div class="form-group mb-2">
                                              <label for="end_datetime" class="control-label">Date Added</label>
                                              <input type="datetime-local" class="form-control form-control-sm rounded-0" name="date_added" id="end_datetime" required>
                                              <input type="hidden" value ="Available" name = "statuss">
                                          </div>
                                          <div class="card-footer">
                                              <div class="text-center">
                                                  <button class="btn btn-primary btn-sm rounded-0" type="submit" name="submit" form="schedule-form"><i class="fa fa-save"></i> Save</button>
                                                  <button class="btn btn-default border btn-sm rounded-0" type="reset" form="schedule-form"><i class="fa fa-reset"></i> Cancel</button>
                                              </div>
                                          </div>
                                      </form>
                                  </div>
                              </div>

                          </div>
                      </div>
                  </div>
              </div>
            </div>
            <!-- END DATA TABLE-->
        </div>
    </div>
        </main>
    </section>



    </div>
</body>
</html>
