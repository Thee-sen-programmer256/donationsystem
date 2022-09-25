<?php
    $con = mysqli_connect("localhost","root","","donation_procurement");

    $result =" SELECT * FROM request where status = 'Pending' LIMIT 6 " ;
    $display=mysqli_query($con, $result);

    session_start();
if(!isset($_SESSION['email'])){
   header("Location: ../Home/login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="style.css">

</head>
<body>
<?php 
       session_start();
      include "../config/connection.php";
      $sql_fetch="SELECT * FROM admin where email='".$_SESSION['email']."'";
      $sql_query=mysqli_query($connection, $sql_fetch);
      $rows=mysqli_fetch_assoc($sql_query);
      // $patient=mysqli_num_rows($sql_query);
      
      
      ?>
    <input type="checkbox" id="nav-toggle">
    <!-- Sidebar start -->
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span class="las la-hand-holding-heart"><span>OrgDonor</span> </span></h2>
        </div>


        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="#" class="active"><span class="las la-igloo"></span><span>Dashboard</span></a>
                </li>
                <li>
                    <a href="./views/patients.php"><span class="las la-users"></span><span>Patients</span></a>
                </li>
                <li>
                    <a href="./views/donor.php"><span class="las la-user"></span><span>Donors</span></a>
                </li>
                <li>
                    <a href="./views/organrequests.php"><span class="las la-sync"></span><span>Organ Requests</span></a>
                </li>
                <li>
                    <a href="./views/requesthistory.php"><span class="las la-history"></span><span>Request History</span></a>
                </li>
                <li>
                    <a href="./views/organstock.php"><span class="lar la-heart"></span><span>Organ Stock</span></a>
                </li>
                <li>
                    <a href="./views/donations.php"><span class="las la-coins"></span><span>Donations</span></a>
                </li>
                <li>
                    <a href="./views/events.php"><span class="las la-calendar"></span><span>Events</span></a>
                </li>
                <li>
                    <a href="./views/notifications.php"><span class="las la-bell"></span><span>Notifications</span></a>
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
                Dashboard
            </h2>
           <!-- Search Bar -->
            <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="search" placeholder="search here" id="live_search" >
            </div>
            <!-- Admin Pic & Names -->
            <div class="user-wrapper">
                <img src="images.jpg" width="40px" height="40px" alt="">
                <div>
                    <h4><?php echo $rows['username']; ?></h4>
                    <small>Super admin</small>
                </div>
            </div>
        </header>
        <!-- Header End -->

<section>
        <main>
            
        <div id ="searchresult" style="position:absolute;"></div>
        <?php 
    
    
    if(isset($_SESSION['id']))
    {
        ?> <div>
        <div style="width:300px; margin-left:5%; background-color:green; color: white; text-align: center; border-radius:12px;" class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Your Welcome !</strong><?php echo $rows['username']; ?><?= $_SESSION['id']; ?>
            <a href="admin/index.php"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></a>
        </div>
</div>
        <?php 
        unset($_SESSION['id']);
    }

?>
            <!-- Display Cards showing individual element totals -->
                <div class="cards">
                    <div class="card-single">
                            <?php
                                $cpresult =" SELECT * FROM patient " ;
                               if($cpdisplay=mysqli_query($con, $cpresult)) {
                                $cprow=mysqli_num_rows($cpdisplay);
                               }
                            ?>
                        <div>
                            <h1><?php echo $cprow;  ?></h1>
                            <span>Patients</span>
                        </div>
                        <div>
                            <span class="las la-users"></span>
                        </div>
                    </div>

                    <div class="card-single">
                    <?php
                                $cdresult =" SELECT * FROM donor " ;
                               if($cddisplay=mysqli_query($con, $cdresult)) {
                                $cdrow=mysqli_num_rows($cddisplay);
                               }
                            ?>
                        <div>
                            <h1><?php echo $cdrow;  ?></h1>
                            <span>Donors</span>
                        </div>
                        <div>
                            <span class="las la-user-friends"></span>
                        </div>
                    </div>

                    <div class="card-single">
                    <?php
                                $cgresult =" SELECT * FROM organ where statuss = 'Available' " ;
                               if($cgdisplay=mysqli_query($con, $cgresult)) {
                                $cgrow=mysqli_num_rows($cgdisplay);
                               }
                            ?>
                        <div>
                            <h1><?php echo $cgrow;  ?></h1>
                            <span>Organ Stock</span>
                        </div>
                        <div>
                            <span class="lar la-heart"></span>
                        </div>
                    </div>

                    <div class="card-single">
                    <?php
                                $donresult =" SELECT SUM(amount) AS value_sum FROM donation where statuss = 'confirmed'  " ;
                               $dondisplay=mysqli_query($con, $donresult);
                                $donrow=mysqli_fetch_assoc($dondisplay);
                               
                            ?>
                        <div>
                            <h1><?php echo $donrow['value_sum'];  ?></h1>
                            <span>Amount Raised</span>
                        </div>
                        <div>
                            <span class="lab la-google-wallet"></span>
                        </div>
                    </div>

                </div>
                <!-- Display cards End -->

                <div class="recent-grid">
                    <div class="projects">
                        <div class="card">
                            <!-- Recent requests Info Start -->
                            <div class="card-header">
                                <h3>Recent Requests</h3>

                                <button><a href="./views/requesthistory.php" style="color: #fff;">See all</a><span class="las la-arrow-right">
                                </span></button>
                            </div>

                            <div class="card-body">
                                <div class="table responsive">
                                <?php
                                $rresult =" SELECT * FROM request " ;
                               if($rdisplay=mysqli_query($con, $rresult)) {
                                $rrow=mysqli_num_rows($rdisplay);
                               }
                            ?>
                                    <table width="100%">
                                        <thead>
                                            <tr>
                                                <td>Patient Name</td>
                                                <td>Organ</td>
                                                <td>Status</td>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <!-- Fetch data from the request database -->
                                            <?php
                                            while ( $rrow=mysqli_fetch_assoc($rdisplay)) {
                                                ?>
                                            <tr>
                                                <td><?php echo $rrow['full_name'];  ?></td>
                                                <td><?php echo $rrow['organ'];  ?></td>
                                                <td>
                                                    <span class="status purple"></span>
                                                    <?php echo $rrow['status'];  ?>
                                                </td>
                                            </tr>
                                            <?php  }?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- Recent Info End -->
                        </div>
                    </div>

                    <!-- New patients section start -->
                    <div class="patients">
                        <div class="card">
                            <div class="card-header">
                                <h3>New patient</h3>

                                <button><a href="./views/patients.php" style="color: #fff;">See all</a><span class="las la-arrow-right">
                                </span></button>
                            </div>
                            <!-- Name & Contacts -->
                            <div class="card-body">

                                <!-- Fetch data from the database -->
                                <?php
                                $presult =" SELECT * FROM patient LIMIT 5 " ;
                                $pdisplay=mysqli_query($con, $presult);
                                            while ( $prow=mysqli_fetch_assoc($pdisplay)) {
                                                ?>
                                            <!-- Name & Contacts -->
                                <div class="patient">
                                    <div class="info">
                                            <img src="<?php echo $prow['image'];  ?>" width="48px" height="40px" alt="">
                                        <div>
                                            <h4><?php echo $prow['fname'];  ?></h4>
                                            <small><?php echo $prow['email'];  ?></small>
                                        </div>
                                    </div>
                                    
                                </div>

                                <?php   }?>
                                
                                
                                
                            </div>

                        </div>
                    </div>
                </div>
                <!-- New Patient Section End -->

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
                        url:"views/live_searches/patient-search.php",
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
