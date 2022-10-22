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
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['organname', 'number'],
          <?php 
          $con = mysqli_connect("localhost","root","","donation_procurement");
          $msql="SELECT organname, COUNT(*) as number FROM organ group by   organname";
          $fire= mysqli_query($con, $msql);
            while($result=mysqli_fetch_assoc($fire)){
                echo "['".$result['organname']."',".$result['number']."],";
            }

          ?>
        
        ]);

        var options = {
          title: 'Available Organs'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>

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
                <li>
                    <a href="./views/fundraise.php"><span class="las la-book"></span><span>Fundraise</span></a>
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
                    <small><?php echo $rows['email']; ?></small>
                </div>
                <div>
                    <a href="../Home/logout.php"><small style="color: red;">LOGOUT</small></a>
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
                                $rresult =" SELECT * FROM request order by requestId DESC" ;
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
                                                <td><?php echo $rrow['fname'];  ?></td>
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
                                $presult =" SELECT * FROM patient order by pid DESC LIMIT 5 " ;
                                $pdisplay=mysqli_query($con, $presult);
                                            while ( $prow=mysqli_fetch_assoc($pdisplay)) {
                                                ?>
                                            <!-- Name & Contacts -->
                                <div class="patient">
                                    <div class="info">
                                            <img src="../images/<?php echo $prow['image'];  ?>" width="48px" height="40px" alt="">
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


    <div class="chart">
        <div id="piechart" style="width: 900px; height: 500px;"></div>                              

    </div>


    <div class="line2" style="width: 70%; margin-left: 3rem;">
            <?php 

        $conn = mysqli_connect("localhost","root","","donation_procurement");

        $results =" SELECT
        DATE(`donor`.`created`) AS `dates`,
        COUNT(`donor`.`donorId`) AS `counts`
        FROM `donor`
        WHERE `donor`.`created` BETWEEN '2022-09-01 00:00:00' AND '2022-11-31 23:59:59'
        GROUP BY `dates`
        ORDER BY `dates`" ;
        $displays=mysqli_query($conn, $results);

        foreach($displays As $dataSet){
            $dates[] = $dataSet['dates'];
            $counts[] = $dataSet['counts'];

        }


        ?>
            <div>
                <canvas id="myChart2" style="height: 240px;"></canvas>
            </div>

                <script>
            const labels2 = <?php echo json_encode($dates) ?>;

            const data2 = {
                labels: labels2,
                datasets: [{
                label: 'Number of Donor registered on a daily basis',
                backgroundColor: 'rgb(255, 99, 132)',
                borderColor: 'rgb(255, 99, 132)',
                data: <?php echo json_encode($counts) ?>,
                }]
            };      
        
            const config2 = {
                type: 'bar',
                data: data2,
                options: {}
            };
            </script>
            
            <script>
            const myChart2 = new Chart(
                document.getElementById('myChart2'),
                config2
            );
            </script>
    </div>

    <div class="line3" style="width: 70%; margin-left: 3rem;">
            <?php 

        $connection = mysqli_connect("localhost","root","","donation_procurement");

        $resultss =" SELECT
        DATE(`patient`.`created`) AS `dates`,
        COUNT(`patient`.`pid`) AS `counts`
        FROM `patient`
        WHERE `patient`.`created` BETWEEN '2022-09-01 00:00:00' AND '2022-11-31 23:59:59'
        GROUP BY `dates`
        ORDER BY `dates`" ;
        $displayss=mysqli_query($connection, $resultss);

        foreach($displayss As $dataSett){
            $datess[] = $dataSett['dates'];
            $countss[] = $dataSett['counts'];

        }


        ?>
            <div>
                <canvas id="myChart3" style="height: 240px;"></canvas>
            </div>

                <script>
            const labels3 = <?php echo json_encode($datess) ?>;

            const data3 = {
                labels: labels3,
                datasets: [{
                label: 'Number of Patients registered on a daily basis',
                backgroundColor: 'rgb(255, 99, 132)',
                borderColor: 'rgb(255, 99, 132)',
                data: <?php echo json_encode($countss) ?>,
                }]
            };      
        
            const config3 = {
                type: 'bar',
                data: data3,
                options: {}
            };
            </script>
            
            <script>
            const myChart3 = new Chart(
                document.getElementById('myChart3'),
                config3
            );
            </script>
    </div>

    <div class="line4" style="width: 70%; margin-left: 3rem;">
            <?php 

        $connection = mysqli_connect("localhost","root","","donation_procurement");

        $resultr =" SELECT
        DATE(`request`.`created`) AS `rdates`,
        COUNT(`request`.`requestId`) AS `rcounts`
        FROM `request`
        WHERE `request`.`created` BETWEEN '2022-08-01 00:00:00' AND '2022-11-31 23:59:59'
        GROUP BY `rdates`
        ORDER BY `rdates`" ;
        $rdisplay=mysqli_query($connection, $resultr);

        foreach($rdisplay As $rdataSet){
            $rdates[] = $rdataSet['rdates'];
            $rcounts[] = $rdataSet['rcounts'];

        }


        ?>
            <div>
                <canvas id="myChart4" style="height: 240px;"></canvas>
            </div>

                <script>
            const labels4 = <?php echo json_encode($rdates) ?>;

            const data4 = {
                labels: labels4,
                datasets: [{
                label: 'Number of Organ Requests made on a daily basis',
                backgroundColor: 'rgb(255, 99, 132)',
                borderColor: 'rgb(255, 99, 132)',
                data: <?php echo json_encode($rcounts) ?>,
                }]
            };      
        
            const config4 = {
                type: 'bar',
                data: data4,
                options: {}
            };
            </script>
            
            <script>
            const myChart4 = new Chart(
                document.getElementById('myChart4'),
                config4
            );
            </script>
    </div>


    <div class="line5" style="width: 70%; margin-left: 3rem;">
            <?php 

        $connection = mysqli_connect("localhost","root","","donation_procurement");

        $resultd =" SELECT
        DATE(`donationappointment`.`created`) AS `ddates`,
        COUNT(`donationappointment`.`id`) AS `dcounts`
        FROM `donationappointment`
        WHERE `donationappointment`.`created` BETWEEN '2022-09-01 00:00:00' AND '2022-11-31 23:59:59'
        GROUP BY `ddates`
        ORDER BY `ddates`" ;
        $displayd=mysqli_query($connection, $resultd);

        foreach($displayd As $ddataSet){
            $ddates[] = $ddataSet['ddates'];
            $dcounts[] = $ddataSet['dcounts'];

        }


        ?>
            <div>
                <canvas id="myChart5" style="height: 240px;"></canvas>
            </div>

                <script>
            const labels5 = <?php echo json_encode($ddates) ?>;

            const data5 = {
                labels: labels5,
                datasets: [{
                label: 'Number of Donation Appointments made on a daily basis',
                backgroundColor: 'rgb(255, 99, 132)',
                borderColor: 'rgb(255, 99, 132)',
                data: <?php echo json_encode($dcounts) ?>,
                }]
            };      
        
            const config5 = {
                type: 'bar',
                data: data5,
                options: {}
            };
            </script>
            
            <script>
            const myChart5 = new Chart(
                document.getElementById('myChart5'),
                config5
            );
            </script>
    </div>


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
                        url:"views/live_searches/dashboard-search.php",
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
