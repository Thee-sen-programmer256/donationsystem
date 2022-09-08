<?php
    $con = mysqli_connect("localhost","root","","donation_procurement");

    $result =" SELECT * FROM notify" ;
    $display=mysqli_query($con, $result);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="../style.css">
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
            justify-content: center
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
                    <a href="../index.html" ><span class="las la-igloo"></span><span>Dashboard</span></a>
                </li>
                <li>
                    <a href="patients.php" ><span class="las la-users"></span><span>Patients</span></a>
                </li>
                <li>
                    <a href="donor.php"><span class="las la-user"></span><span>Donors</span></a>
                </li>
                <li>
                    <a href="organrequests.php"><span class="las la-sync"></span><span>Organ Requests</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-history"></span><span>Request History</span></a>
                </li>
                <li>
                    <a href="organstock.php"><span class="lar la-heart"></span><span>Organ Stock</span></a>
                </li>
                <li>
                    <a href="" ><span class="las la-coins"></span><span>Donations</span></a>
                </li>
                <li>
                    <a href="events.php" ><span class="las la-calendar"></span><span>Events</span></a>
                </li>
                <li>
                    <a href="" class="active"><span class="las la-bell"></span><span>Notifications</span></a>
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
              Notifications
            </h2>
           <!-- Search Bar -->
            <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="search" placeholder="search here" >
            </div>
            <!-- Admin Pic & Names -->
            <div class="user-wrapper">
                <img src="../images.jpg" width="40px" height="40px" alt="">
                <div>
                    <h4>Mark Roi</h4>
                    <small>Super admin</small>
                </div>
            </div>
        </header>
        <!-- Header End -->
<section>
        <main>




    <a href="partials/addnotify.php">
        <button type="button" style="padding: 13px; color: white;background-color:#0071b5;border: 0;border-radius: 10px;margin-bottom: 30px;font-size: 20px">
            Add Notifications
        </button>
    </a>
    <div class="row m-t-30">
        <div class="col-md-12">
            <!-- DATA TABLE-->
            <div>
                <table  style="top:1px solid;width: 100%;border-radius: 10px;right:-100px">
                    <thead style="padding: 30px;background-color: black;color: white;">
                        <tr>
                            <th>ID</th>
                            <th>Notification</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                     <!-- Fetch data from notify table -->
            
                <?php
                while ( $row=mysqli_fetch_assoc($display)) {

                    ?>
                        <tr>
                            <td><?php echo $row['notifyId'];  ?></td>
                             <td><?php echo $row['notifications'];  ?></td>

                            <td>
                                <a href=""><button type="button" class="btn btn-danger" style="padding: 10px;font-size: 15px;background-color: red;border: 0;border-radius: 5px;color: white">Delete</button></a>
                                &nbsp;
        <!-- //  checking for status -->

                                <a href=""><button type="button" class="btn btn-primary" style="padding: 10px;font-size: 15px;background-color:rgb(0,78,150);border: 0;border-radius: 5px;color: white">Active</button></a>
                             &nbsp;
                                <!-- <a href=""><button type="button" class="btn btn-warning" style="padding: 10px;font-size: 15px;background-color: rgb(204,128,27);border: 0;border-radius: 5px;color: white">De-active</button></a>
                                  &nbsp; -->



                                <a href="partials/editnotify.php"><button type="button" class="btn btn-success" style="padding: 10px;font-size: 15px;background-color: green;border: 0;border-radius: 5px;color: white">Edit</button></a>
                            </td>
                        </tr>
                    <?php   }?>
                    </tbody>
                </table>
            </div>
            <!-- END DATA TABLE-->
        </div>
    </div>
        </main>
    </section>



    </div>
</body>
</html>
