<?php
    $con = mysqli_connect("localhost","root","","donation_procurement");

    $result =" SELECT * FROM donation order by donationId desc " ;
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script></script>
<!--
     <link href="admin-assets/css/font-face.css" rel="stylesheet" media="all">
    <link href="admin-assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="admin-assets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="admin-assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="admin-assets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
    <link href="admin-assets/css/theme.css" rel="stylesheet" media="all">
    
-->
    <title>Donations</title>

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
                    <a href="../index.php" ><span class="las la-igloo"></span><span>Dashboard</span></a>
                </li>
                <li>
                    <a href="patients.php"><span class="las la-users"></span><span>Patients</span></a>
                </li>
                <li>
                    <a href="donor.php" ><span class="las la-user"></span><span>Donors</span></a>
                </li>
                <li>
                    <a href="organrequests.php"><span class="las la-sync"></span><span>Organ Requests</span></a>
                </li>
                <li>
                    <a href="requesthistory.php"><span class="las la-history"></span><span>Request History</span></a>
                </li>
                <li>
                    <a href="organstock.php"><span class="lar la-heart"></span><span>Organ Stock</span></a>
                </li>
                <li>
                    <a href="#" class="active"><span class="las la-coins"></span><span>Donations</span></a>
                </li>
                <li>
                    <a href="events.php" ><span class="las la-calendar"></span><span>Events</span></a>
                </li>
                <li>
                    <a href="notifications.php" ><span class="las la-bell"></span><span>Notifications</span></a>
                </li>
                <li>
                    <a href="fundraise.php"><span class="las la-book"></span><span>Fundraise</span></a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Sidebar End -->

    <div class="main-content">
    <?php 
       session_start();
      include "../../config/connection.php";
      $sql_fetch="SELECT * FROM admin where email='".$_SESSION['email']."'";
      $sql_query=mysqli_query($connection, $sql_fetch);
      $rows=mysqli_fetch_assoc($sql_query);
      // $patient=mysqli_num_rows($sql_query);
      //<?php echo $rows['username']; ?>
      
      ?>
        <!-- Header Start -->
        <header>
            <h2>
                <label for="nav-toggle">
                    <span class="las la-bars"></span>
                </label>
                Donations
            </h2>
           <!-- Search Bar -->
            <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="search" placeholder="search here" id="live_search">
                
            </div>
            <!-- Admin Pic & Names -->
            <div class="user-wrapper">
                <img src="../images.jpg" width="40px" height="40px" alt="">
                <div>
                    <h4><?php echo $rows['username']; ?></h4>
                    <small><?php echo $rows['email']; ?></small>
                </div>
                <div>
                    <a href="../../Home/logout.php"><small style="color: red;">LOGOUT</small></a>
                </div>
            </div>
        </header>
        
        <!-- Header End -->
        
<section>
        <main>
        <div id ="searchresult" style="position:absolute;"></div>
    <a href="">
        <!-- <button type="button" style="padding: 13px; color: white;background-color:#0071b5;border: 0;border-radius: 10px;margin-bottom: 30px;font-size: 20px">
            Add Donor
        </button> -->
    </a>
    <div class="row m-t-30">
        <div class="col-md-12">
            <!-- DATA TABLE-->
            <div>
                <table  style="top:1px solid;width: 90%;border-radius: 10px;right:-100px">
                    <thead style="padding: 30px;background-color: black;color: white;margin-left:-10%">
                        <tr>
                            <th>ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Contact</th>
                            <th>Fundraise Name</th>
                            <th>Amount</th>
                            <th>Display</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>

            <!-- Fetch data from donor table -->
            
                    <?php
                while ( $row=mysqli_fetch_assoc($display)) {

                    ?>
                        <tr>
                            <td><?php echo $row['donationId'];  ?></td>
                             <td><?php echo $row['fname'];  ?></td>
                             <td><?php echo $row['lname'];  ?></td>
                             <td><?php echo $row['contact'];  ?></td>
                             <td><?php echo $row['fundraise_name'];  ?></td>
                             <td><?php echo $row['amount'];  ?></td>
                            <td><?php echo $row['display'];  ?></td>
                            <td><?php echo $row['email'];  ?></td>
                            <td><?php echo $row['statuss'];  ?></td>

                            <td>
                                <a href="partials/deldonation.php?pd=<?php echo $row['donationId'];?>"><button type="button" class="btn btn-danger" style="padding: 10px;font-size: 15px;background-color: red;border: 0;border-radius: 5px;color: white">Delete</button></a>
                                &nbsp;
        <!-- //  checking for status -->

                                <a href="partials/editdonation.php?a=<?php echo $row['donationId'];?>"><button type="button" class="btn btn-primary" style="padding: 10px;font-size: 15px;background-color:rgb(0,78,150);border: 0;border-radius: 5px;color: white" name="confirm">Confirm</button></a>
                             &nbsp;
                                <!-- <a href=""><button type="button" class="btn btn-warning" style="padding: 10px;font-size: 15px;background-color: rgb(204,128,27);border: 0;border-radius: 5px;color: white">De-active</button></a>
                                  &nbsp; -->


                            </td>
                        </tr>
                        <?php  } ?>

                    </tbody>
                </table>
            </div>
            <!-- END DATA TABLE-->
        </div>
    </div>
        </main>
    
<script type="text/javascript">
        $(document).ready(function(){
            $('#live_search').keyup(function(){
                $("#searchresult").show();

                var input = $(this).val();
                //alert(input)

                if(input != ''){
                    $.ajax({
                        url:"partials/livesearch.php",
                        method:"GET",
                        data:{input:input},

                        success:function(data){
                            $('#searchresult').html(data);
                        }
                    });
                }else{
                    $('#searchresult').css("display","none");
                }
            });
        });
</script>

    </section>



    </div>
    
</body>
</html>
