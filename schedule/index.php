<?php 
     $con = mysqli_connect("localhost","root","","donation_procurement");

     $result =" SELECT * FROM shedule " ;
     $display=mysqli_query($con, $result);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scheduling</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="./css/bootstrap.min.css">



    <link rel="stylesheet" href="./fullcalendar/lib/main.min.css">
    <script src="./js/jquery-3.6.0.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./fullcalendar/lib/main.min.js"></script>
    <style>
        :root {
            --bs-success-rgb: 71, 222, 152 !important;
        }

        html,
        body {
            height: 100%;
            width: 100%;
            font-family: Times New Roman, cursive;
        }

        .btn-info.text-light:hover,
        .btn-info.text-light:focus {
            background: #000;
        }
        table, tbody, td, tfoot, th, thead, tr {
            border-color: #ededed !important;
            border-style: solid;
            border-width: 1px !important;
        }
    </style>
</head>

<body class="bg-light">
    <div class="navbar-fixed" >
      <nav class="bondi blue" style="color:#29ccf5">
       <div class="nav-wrapper container" >
         <p class="brand-logo center" style="color:white">Patient</p>
         <a class="brand-logo right">
            <!-- <i class="material-icons" onclick="M.toast({html:'donation notifications here',classes: 'black darken-1 rounded',displayLength: 10000})" style="cursor:pointer">notifications_active<span class="new badge green"  style="margin-top:25%;cursor:pointer">4</span></i> -->
           <div class="chip" style="vertical-align:middle;">
      <img src="../images/cute.jpg" alt="Contact Person">
      <span style="font-size:16px;font-weight:bold;">Jane Doe</span>
    </div> &nbsp;  </a>
         <a href="" data-target="slide-out" class="sidenav-trigger show-on-large"><i class="fas fa-bars" style="color:white"></i></a>
         <!-- <ul class="sidenav" id="mobile-demo">
           <li><a href="" style="text-decoration:none;">Stories</a></li>
           <li><a href="" style="text-decoration:none;">Dashboard</a></li>
           <li><a class="waves-effect waves-light btn" onclick="$('.tap-target').tapTarget('open')">Open tap target</a></li> -->


      <!-- Tap Target Structure -->

           <!-- <li><a href="" style="text-decoration:none;">Logout</a></li>
         </ul> -->

      </nav>
    </div>
    <ul id="slide-out" class="sidenav">
 <li><div class="user-view">
 <div class="background">
  <img src="../simages/card3.jpg">
 </div>
 <a href="#user"><img class="circle" src="../simages/card3.jpg"></a>
 <a href="#name" style="text-decoration:none"><span class="white-text name" >John Doe</span></a>
 <a href="#email" style="text-decoration:none"><span class="white-text email">jdandturk@gmail.com</span></a>
 </div></li>
 <!-- <li><a href="patientint.php"><i class="material-icons">dashboard</i>Dashboard</a></li> -->
 <li><a href="stories/viewstory.php"><i class="material-icons">star_border</i>Stories</a></li>
  <li><a href="Fundraise/index.php"><i class="material-icons">money</i>Fundraise</a></li>
    <li><a href="schedule/index.php"><i class="material-icons">content_paste</i>Calendar</a></li>
 <li><a href="#!"><i class="material-icons">logout</i>Logout</a></li>
 <li>  <a class="btn blue modal-trigger" href="#terms">Help Info</a></li>
 </ul>
  </div>



    <!--the navbar-->
    <!-- slider -->
    <div class="container py-5" id="page-container">
        <div class="row">
            <div class="col-md-9">
                <div id="calendar"></div>
            </div>
            <div class="col-md-3">
                <div class="cardt rounded-0 shadow">
                    <div class="card-header bg-gradient bg-primary text-light">
                        <h5 class="card-title">Schedule Form</h5>
                    </div>
                    <div class="card-body">
                        <div class="container-fluid">
                            <form action="save_schedule.php" method="post" id="schedule-form">
                                <input type="hidden" name="id" value="">
                                <div class="form-group mb-2">
                                    <label for="title" class="control-label">Title</label>
                                    <input type="text" class="form-control form-control-sm rounded-0" name="title" id="title" required>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="description" class="control-label">Description</label>
                                    <textarea rows="3" class="form-control form-control-sm rounded-0" name="description" id="description" required></textarea>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="start_datetime" class="control-label">Start</label>
                                    <input type="datetime-local" class="form-control form-control-sm rounded-0" name="start_datetime" id="start_datetime" required>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="end_datetime" class="control-label">End</label>
                                    <input type="datetime-local" class="form-control form-control-sm rounded-0" name="end_datetime" id="end_datetime" required>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="text-center">
                            <button class="btn btn-primary btn-sm rounded-0" type="submit" form="schedule-form"><i class="fa fa-save"></i> Save</button>
                            <button class="btn btn-default border btn-sm rounded-0" type="reset" form="schedule-form"><i class="fa fa-reset"></i> Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    





<?php
$schedules = $con->query("SELECT * FROM `schedule`");
$sched_res = [];
foreach($schedules->fetch_all(MYSQLI_ASSOC) as $row){
    $row['sdate'] = date("F d, Y h:i A",strtotime($row['start_datetime']));
    $row['edate'] = date("F d, Y h:i A",strtotime($row['end_datetime']));
    $sched_res[$row['id']] = $row;
}
?>
<?php
if(isset($con)) $con->close();
?>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
    var scheds = $.parseJSON('<?= json_encode($sched_res) ?>');

</script>
<script type="text/javascript">
    M.Sidenav.init(document.querySelector('.sidenav'));

    $(document).ready(function(){
      $('.modal').modal();
    });
</script>
<script src="./js/script.js"></script>

</html>
