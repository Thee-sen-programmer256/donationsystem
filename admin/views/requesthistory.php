<?php
    $con = mysqli_connect("localhost","root","","donation_procurement");

    $result =" SELECT * FROM request where status = 'Approved' or status ='Rejected'" ;
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
    <title>Request History</title>

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
          justify-content: left
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
                    <a href="patients.php" ><span class="las la-users"></span><span>Patients</span></a>
                </li>
                <li>
                    <a href="donor.php"><span class="las la-user"></span><span>Donors</span></a>
                </li>
                <li>
                    <a href="organrequests.php"  ><span class="las la-sync"></span><span>Organ Requests</span></a>
                </li>
                <li>
                    <a href="#" class="active"><span class="las la-history"></span><span>Request History</span></a>
                </li>
                <li>
                    <a href="organstock.php"><span class="lar la-heart"></span><span>Organ Stock</span></a>
                </li>
                <li>
                    <a href="donations.php" ><span class="las la-coins"></span><span>Donations</span></a>
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
        <!-- Header Start -->
        <header>
            <h2>
                <label for="nav-toggle">
                    <span class="las la-bars"></span>
                </label>
              Organ Requests
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
                <div>
                    <a href="../../Home/logout.php"><small style="color: red;">LOGOUT</small></a>
                </div>
            </div>
        </header>
        <!-- Header End -->
<section>
        <main>




      <!-- <a href="partials/addorgans.php">
          <button type="button" style="padding: 13px; color: white;background-color:#0071b5;border: 0;border-radius: 10px;margin-bottom: 30px;font-size: 20px">
              Add Event
          </button>
      </a> -->
    <div class="row m-t-30">
        <div class="col-md-12">
            <!-- DATA TABLE-->
            <div>
                <table  style="top:1px solid;width: 100%;border-radius: 10px;right:-100px">
                    <thead style="padding: 30px;background-color: black;color: white;">
                        <tr>
                            <th>ID</th>
                            <th>Patient Name</th>
                            <th>Email</th>
                            <th>Organ Requested</th>
                            <th>Blood Group</th>
                            <th>Request Date</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                <!-- Fetch data from notify table -->
            
                <?php
                while ( $row=mysqli_fetch_assoc($display)) {

                    ?>
                        <tr>
                             <td><?php echo $row['requestId'];  ?></td>
                             <td><?php echo $row['fname'];  ?></td>
                             <td><?php echo $row['email'];  ?></td>
                             <td><?php echo $row['organ'];  ?></td>
                             <td><?php echo $row['bloodgroup'];  ?></td>
                             <td><?php echo $row['created'];  ?></td>
                             <td><?php echo $row['status'];  ?></td>
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#live_search').keyup(function(){
                $("#searchresult").show();

                var input = $(this).val();
                //alert(input)

                if(input != ''){
                    $.ajax({
                        url:"live_searches/requesthistory-search.php",
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

</body>
</html>
