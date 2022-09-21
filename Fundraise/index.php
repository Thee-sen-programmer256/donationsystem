<?php 
 include "../config/connection.php";

 session_start();
 if(!isset($_SESSION['email'])){
    header("Location: Home/login.php");
 }

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="sstyle.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script type="text/javascript"
src="https://code.jquery.com/jquery-1.12.0.min.js">
 </script>

 <!-- Compiled and minified JavaScript -->
 <script src=
"https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js">
 </script>
 <style type="text/css">
 nav{
   /* top: 0;
 z-index: 100;
position: fixed;
 width: 100 */
 }
 </style>
  </head>
  <body style="background:white">
    <!--the navbar-->
    <!-- the nav bar -->
    <div class="navbar-fixed" >
      <nav class="bondi blue" style="color:#29ccf5">
       <div class="nav-wrapper container" >
         <p class="brand-logo center" style="color:white;top:-50%">Patient</p>
         <a class="brand-logo right">
           <div class="chip" >
           <?php 
      $sql_fetch="SELECT * FROM patient where email='".$_SESSION['email']."'";
      $sql_query=mysqli_query($connection, $sql_fetch);
      $rows=mysqli_fetch_assoc($sql_query);
      // $patient=mysqli_num_rows($sql_query);
      
      
      ?>
      <img src="../images/<?php echo $rows['image'] ?>" alt="Contact Person">
      <span style="font-size:16px;font-weight:bold;"><?php echo $rows['fname']; ?></span>
      </div></a>
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
 <?php 
      $sql_fetch="SELECT * FROM patient where email='".$_SESSION['email']."'";
      $sql_query=mysqli_query($connection, $sql_fetch);
      $rows=mysqli_fetch_assoc($sql_query);
      // $patient=mysqli_num_rows($sql_query);
      
      
      ?>
 <a href="#user"><img class="circle" src="../images/<?php echo $rows['image'] ?>"></a>
 <a href="#name" style="text-decoration:none"><span class="white-text name" ><?php echo $rows['fname'] ?></span></a>
 <a href="#email" style="text-decoration:none"><span class="white-text email"><?php echo $rows['email'] ?></span></a>
 </div></li>
 <li><a href="../patientint.php"><i class="material-icons">dashboard</i>Dashboard</a></li>
 <li><a href="../stories/viewstory.php"><i class="material-icons">star_border</i>Stories</a></li>
 <li><a href="../Home/logout.php"><i class="material-icons">logout</i>Logout</a></li>
 <li>  <a class="btn blue modal-trigger" href="#terms">Help Info</a></li>
 </ul>
  </div>

    <!--the navbar-->
    <!-- add story -->
    <h3>Fundraise</h3>
<section>
  <div class=" s12 m8 offset-m2 l6 offset-l3" style="margin-left:15px;width:1200px">
          <div class="card-panel grey lighten-5 z-depth-1">
            <div class="row valign-wrapper">
              <div class="col s2">
                <img src="../simages/card3.jpg" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
              </div>
              <div class="col s10">
                <span class="black-text">
                  <span class="black-text">
                    This is a square image. Add the "circle" class to it to make it appear circular.
                      This is a square image. Add the "circle" class to it to make it appear circular.
                        This is a square image. Add the "circle" class to it to make it appear circular.
                          This is a square image. Add the "circle" class to it to make it appear circular.
                            This is a square image. Add the "circle" class to it to make it appear circular.
                  </span>
      </div>
                </span>

              </div>
              <div class="row" style="margin-top:-6%">
                <table>
                  <tr>
                    <td>
                      <div class="card-action left-align" style="margin-left:75%">
                      <a href="" class="btn blue">Read More</a>
                    </div>
                    </td>

                    <td></td>
                    <td>
                      <div class="card-action right-align" style="margin-right:75%;">
                      <a href="" class="btn green">Fundraise</a>
                    </div>
                    </td>
                  </tr>
                </table>
              </div>
              <!-- floating button2 -->
              <div class="fixed-action-btn" style="bottom:59%">
              <a  class="btn-floating btn-small blue" href="stories/addstory.php">
              <i class="large material-icons" style="height:13px">chevron_right</i>
              </a>

              </div>
              <!-- end of floating button -->
            </div>
            </div>

</section>



    <!-- end of story -->

    <!-- modals -->
    <div class="container">
        <!-- <h2>Modals</h2> -->

        <!-- <a class="btn orange modal-trigger" href="#terms">Help Info</a> -->

        <div id="terms" class="modal">
          <div class="modal-content">
            <h4>Welcome patient</h4>
            <p>Here is a few tips to know when using the application</p>
          </div>
          <div class="modal-footer">
            <a href="#!" class="modal-close btn blue"><span style="color:white">okay</span></a>
          </div>
        </div>

      </div>
        <!-- end of modal -->



    <!-- floating button -->
<div class="fixed-action-btn">
  <a  class="btn-floating btn-large red" >
    <i class="large material-icons">mode_edit</i>
  </a>
  <ul>
    <li><a class="btn-floating green" ><i class="material-icons" >arrow_upward</i></a></li>
    <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>

    <li><a class="btn-floating blue"><i class="material-icons">add</i></a></li>
  </ul>
</div>
<!-- end of floating button -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
  <script>
    $(document).ready(function(){
      $('.modal').modal();
    });
  </script>
    <script src="sliscript.js"></script>
    <script type="text/javascript">
    M.Sidenav.init(document.querySelector('.sidenav'));
      M.FormSelect.init(document.querySelector('#status'))
   document.addEventListener('DOMContentLoaded', function() {
 var elems = document.querySelectorAll('.carousel');
 var instances = M.Carousel.init(elems, options);
});
//chip
document.addEventListener('DOMContentLoaded', function() {
 var elems = document.querySelectorAll('.chips');
 var instances = M.Chips.init(elems, options);
});
//FloatingActionButton
document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('.fixed-action-btn');
  var instances = M.FloatingActionButton.init(elems, {
    direction: 'left',
    hoverEnabled: false
  });
});

$(document).ready(function(){
  $('.modal').modal();
});
    </script>
  </body>
  <!-- Swiper JS -->
  <script src="jsl/swiper-bundle.min.js"></script>

  <!-- JavaScript -->
  <script src="jsl/script.js"></script>

</html>
