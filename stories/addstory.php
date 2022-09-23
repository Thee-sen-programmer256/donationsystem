<?php
    $con = mysqli_connect("localhost","root","","donation_procurement");



    // Assigning input data into a variable then inserting it into the database
if(isset($_POST["submit"])){
    $title= $_POST["title"];
    $status= $_POST["status"];
    $body= $_POST["body"];
    $storyimage= $_POST["storyimage"];

$sql = "INSERT INTO story(title,status, body,storyimage)VALUE('$title','$status','$body','$storyimage')";
//echo $sql;
// excecuting the query
if(mysqli_query($con,$sql)){

    ?>
    
    <script type="text/javascript">
        alert("Story Successfully Added");
        window.location= "../stories/addstory.php";
    </script>
    <?php 
    }else{
    echo mysqli_error($con);
    }
    
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
 a.new:hover button{
   background: #ff7d7d;
   color: #fff;
 }
 ul.select-dropdown,
ul.dropdown-content {
  width: 300px !important;

  li > span {
    white-space: nowrap;
  }
}
 ul.select-dropdown,ul.dropdown-content{
  overflow-x: hidden;
  overflow-y: scroll;
}
 ul.select-dropdown::-webkit-scrollbar {
                display: none;
            }
            ul.dropdown-content::-webkit-scrollbar {
                           display: none;
                       }

                       /* <!--notyy--> */
                       ul.dots * {
  /* disable border-box from bootstrap */
  box-sizing: content-box;
  list-style-type: none;
}
ul.dropdown-content > li:hover{
color:black;
background:black
}
ul.dots a {
  text-decoration: none;
  margin-top: -4%;

  /* font-size: 20px; */
  color: #34495e;
}
ul.dots a:hover {
  text-decoration: none;
  background: none;
  /* font-size: 20px; */
  color: #bdc3c7;
}
ul.dots li {
  display: box;
  position: relative;
  /* width: 100%; */
  padding: 10px 0 ;
}
/* ul.dots li:hover {
  background: #2c3e50;
} */
ul.dots li span {
  /* display: block; */
  -webkit-border-radius: 30px;
  -moz-border-radius: 30px;
  border-radius: 30px;
  background-color: #FFF;
  /* -webkit-box-shadow: 1px 1px 5px #808080; */
  /* -moz-box-shadow: 1px 1px 5px #808080; */
  /* box-shadow: 1px 1px 5px #808080 */
  padding: 10px;
  width: 30px;
  height: 30px;
  margin: 0 auto;
  line-height: 30px;
  text-align: center;
  position: relative;
}
ul.dots li mark {
  -webkit-border-radius: 20px;
  -moz-border-radius: 20px;
  border-radius: 20px;
  /* border: 2px solid #FFF; */
  width: 20px;
  height: 20px;
  background-color:black;
  position: absolute;
  top: -5px;
  left: -10px;
  font-size: 10px;
  line-height: 20px;
  font-family: 'Roboto', sans-serif;
  font-weight: 400;
  color: #FFF;
  font-weight: 700;
}
ul.dots li mark.big {
  width: 30px;
  height: 30px;
  -webkit-border-radius: 30px;
  -moz-border-radius: 30px;
  border-radius: 30px;
  line-height: 30px;
  font-size: 16px;
  top: -10px;
  left: -15px;
}
ul.dots li mark.green {
  background-color: #27ae60;
}
ul.dots li mark.blue {
  background-color: #3498db;
}
ul.dots > li > a > span > mark {
  -webkit-animation-name: bounceIn;
          animation-name: bounceIn;
  -webkit-transform-origin: center bottom;
      -ms-transform-origin: center bottom;
          transform-origin: center bottom;
  -webkit-animation-duration: 1s;
          animation-duration: 1s;
  -webkit-animation-fill-mode: both;
          animation-fill-mode: both;
-webkit-animation-iteration-count: 1;
        animation-iteration-count: 1;
}
ul.dots > li:hover > a > span > mark {
  -webkit-animation-name: bounce;
          animation-name: bounce;

}
ul.dots > li:hover > a > span > mark.rubberBand {
  -webkit-animation-name: rubberBand;
          animation-name: rubberBand;
}

ul.dots > li:hover > a > span > mark.swing {
  -webkit-transform-origin: top center;
      -ms-transform-origin: top center;
          transform-origin: top center;
  -webkit-animation-name: swing;
          animation-name: swing;
}
ul.dots > li:hover > a > span > mark.tada {
  -webkit-animation-name: tada;
          animation-name: tada;
}
ul.dots > li:hover > a > span > mark.wobble {
  -webkit-animation-name: wobble;
          animation-name: wobble;
}
li {
  list-style-type: circle;
}

code {
  background: #ecf0f1;
}

/* animation keyframes */
@-webkit-keyframes bounce {
  0%, 20%, 53%, 80%, 100% {
    -webkit-transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
            transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
    -webkit-transform: translate3d(0,0,0);
            transform: translate3d(0,0,0);
  }

  40%, 43% {
    -webkit-transition-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
            transition-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
    -webkit-transform: translate3d(0, -30px, 0);
            transform: translate3d(0, -30px, 0);
  }

  70% {
    -webkit-transition-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
            transition-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
    -webkit-transform: translate3d(0, -15px, 0);
            transform: translate3d(0, -15px, 0);
  }

  90% {
    -webkit-transform: translate3d(0,-4px,0);
            transform: translate3d(0,-4px,0);
  }
}

@keyframes bounce {
  0%, 20%, 53%, 80%, 100% {
    -webkit-transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
            transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
    -webkit-transform: translate3d(0,0,0);
            transform: translate3d(0,0,0);
  }

  40%, 43% {
    -webkit-transition-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
            transition-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
    -webkit-transform: translate3d(0, -30px, 0);
            transform: translate3d(0, -30px, 0);
  }

  70% {
    -webkit-transition-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
            transition-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
    -webkit-transform: translate3d(0, -15px, 0);
            transform: translate3d(0, -15px, 0);
  }

  90% {
    -webkit-transform: translate3d(0,-4px,0);
            transform: translate3d(0,-4px,0);
  }
}

@-webkit-keyframes bounceIn {
  0%, 20%, 40%, 60%, 80%, 100% {
    -webkit-transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
            transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
  }

  0% {
    opacity: 0;
    -webkit-transform: scale3d(.3, .3, .3);
            transform: scale3d(.3, .3, .3);
  }

  20% {
    -webkit-transform: scale3d(1.1, 1.1, 1.1);
            transform: scale3d(1.1, 1.1, 1.1);
  }

  40% {
    -webkit-transform: scale3d(.9, .9, .9);
            transform: scale3d(.9, .9, .9);
  }

  60% {
    opacity: 1;
    -webkit-transform: scale3d(1.03, 1.03, 1.03);
            transform: scale3d(1.03, 1.03, 1.03);
  }

  80% {
    -webkit-transform: scale3d(.97, .97, .97);
            transform: scale3d(.97, .97, .97);
  }

  100% {
    opacity: 1;
    -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
  }
}

@keyframes bounceIn {
  0%, 20%, 40%, 60%, 80%, 100% {
    -webkit-transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
            transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
  }

  0% {
    opacity: 1;
    -webkit-transform: scale3d(.3, .3, .3);
            transform: scale3d(.3, .3, .3);
  }

  20% {
    -webkit-transform: scale3d(1.1, 1.1, 1.1);
            transform: scale3d(1.1, 1.1, 1.1);
  }

  40% {
    -webkit-transform: scale3d(.9, .9, .9);
            transform: scale3d(.9, .9, .9);
  }

  60% {
    opacity: 1;
    -webkit-transform: scale3d(1.03, 1.03, 1.03);
            transform: scale3d(1.03, 1.03, 1.03);
  }

  80% {
    -webkit-transform: scale3d(.97, .97, .97);
            transform: scale3d(.97, .97, .97);
  }

  100% {
    opacity: 1;
    -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
  }
}
@-webkit-keyframes rubberBand {
  0% {
    -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
  }

  30% {
    -webkit-transform: scale3d(1.25, 0.75, 1);
            transform: scale3d(1.25, 0.75, 1);
  }

  40% {
    -webkit-transform: scale3d(0.75, 1.25, 1);
            transform: scale3d(0.75, 1.25, 1);
  }

  50% {
    -webkit-transform: scale3d(1.15, 0.85, 1);
            transform: scale3d(1.15, 0.85, 1);
  }

  65% {
    -webkit-transform: scale3d(.95, 1.05, 1);
            transform: scale3d(.95, 1.05, 1);
  }

  75% {
    -webkit-transform: scale3d(1.05, .95, 1);
            transform: scale3d(1.05, .95, 1);
  }

  100% {
    -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
  }
}

@keyframes rubberBand {
  0% {
    -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
  }

  30% {
    -webkit-transform: scale3d(1.25, 0.75, 1);
            transform: scale3d(1.25, 0.75, 1);
  }

  40% {
    -webkit-transform: scale3d(0.75, 1.25, 1);
            transform: scale3d(0.75, 1.25, 1);
  }

  50% {
    -webkit-transform: scale3d(1.15, 0.85, 1);
            transform: scale3d(1.15, 0.85, 1);
  }

  65% {
    -webkit-transform: scale3d(.95, 1.05, 1);
            transform: scale3d(.95, 1.05, 1);
  }

  75% {
    -webkit-transform: scale3d(1.05, .95, 1);
            transform: scale3d(1.05, .95, 1);
  }

  100% {
    -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
  }
}
@-webkit-keyframes swing {
  20% {
    -webkit-transform: rotate3d(0, 0, 1, 15deg);
            transform: rotate3d(0, 0, 1, 15deg);
  }

  40% {
    -webkit-transform: rotate3d(0, 0, 1, -10deg);
            transform: rotate3d(0, 0, 1, -10deg);
  }

  60% {
    -webkit-transform: rotate3d(0, 0, 1, 5deg);
            transform: rotate3d(0, 0, 1, 5deg);
  }

  80% {
    -webkit-transform: rotate3d(0, 0, 1, -5deg);
            transform: rotate3d(0, 0, 1, -5deg);
  }

  100% {
    -webkit-transform: rotate3d(0, 0, 1, 0deg);
            transform: rotate3d(0, 0, 1, 0deg);
  }
}

@keyframes swing {
  20% {
    -webkit-transform: rotate3d(0, 0, 1, 15deg);
            transform: rotate3d(0, 0, 1, 15deg);
  }

  40% {
    -webkit-transform: rotate3d(0, 0, 1, -10deg);
            transform: rotate3d(0, 0, 1, -10deg);
  }

  60% {
    -webkit-transform: rotate3d(0, 0, 1, 5deg);
            transform: rotate3d(0, 0, 1, 5deg);
  }

  80% {
    -webkit-transform: rotate3d(0, 0, 1, -5deg);
            transform: rotate3d(0, 0, 1, -5deg);
  }

  100% {
    -webkit-transform: rotate3d(0, 0, 1, 0deg);
            transform: rotate3d(0, 0, 1, 0deg);
  }
}

@-webkit-keyframes tada {
  0% {
    -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
  }

  10%, 20% {
    -webkit-transform: scale3d(.9, .9, .9) rotate3d(0, 0, 1, -3deg);
            transform: scale3d(.9, .9, .9) rotate3d(0, 0, 1, -3deg);
  }

  30%, 50%, 70%, 90% {
    -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
            transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
  }

  40%, 60%, 80% {
    -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
            transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
  }

  100% {
    -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
  }
}

@keyframes tada {
  0% {
    -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
  }

  10%, 20% {
    -webkit-transform: scale3d(.9, .9, .9) rotate3d(0, 0, 1, -3deg);
            transform: scale3d(.9, .9, .9) rotate3d(0, 0, 1, -3deg);
  }

  30%, 50%, 70%, 90% {
    -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
            transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
  }

  40%, 60%, 80% {
    -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
            transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
  }

  100% {
    -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
  }
}

@-webkit-keyframes wobble {
  0% {
    -webkit-transform: none;
            transform: none;
  }

  15% {
    -webkit-transform: translate3d(-25%, 0, 0) rotate3d(0, 0, 1, -5deg);
            transform: translate3d(-25%, 0, 0) rotate3d(0, 0, 1, -5deg);
  }

  30% {
    -webkit-transform: translate3d(20%, 0, 0) rotate3d(0, 0, 1, 3deg);
            transform: translate3d(20%, 0, 0) rotate3d(0, 0, 1, 3deg);
  }

  45% {
    -webkit-transform: translate3d(-15%, 0, 0) rotate3d(0, 0, 1, -3deg);
            transform: translate3d(-15%, 0, 0) rotate3d(0, 0, 1, -3deg);
  }

  60% {
    -webkit-transform: translate3d(10%, 0, 0) rotate3d(0, 0, 1, 2deg);
            transform: translate3d(10%, 0, 0) rotate3d(0, 0, 1, 2deg);
  }

  75% {
    -webkit-transform: translate3d(-5%, 0, 0) rotate3d(0, 0, 1, -1deg);
            transform: translate3d(-5%, 0, 0) rotate3d(0, 0, 1, -1deg);
  }

  100% {
    -webkit-transform: none;
            transform: none;
  }
}

@keyframes wobble {
  0% {
    -webkit-transform: none;
            transform: none;
  }

  15% {
    -webkit-transform: translate3d(-25%, 0, 0) rotate3d(0, 0, 1, -5deg);
            transform: translate3d(-25%, 0, 0) rotate3d(0, 0, 1, -5deg);
  }

  30% {
    -webkit-transform: translate3d(20%, 0, 0) rotate3d(0, 0, 1, 3deg);
            transform: translate3d(20%, 0, 0) rotate3d(0, 0, 1, 3deg);
  }

  45% {
    -webkit-transform: translate3d(-15%, 0, 0) rotate3d(0, 0, 1, -3deg);
            transform: translate3d(-15%, 0, 0) rotate3d(0, 0, 1, -3deg);
  }

  60% {
    -webkit-transform: translate3d(10%, 0, 0) rotate3d(0, 0, 1, 2deg);
            transform: translate3d(10%, 0, 0) rotate3d(0, 0, 1, 2deg);
  }

  75% {
    -webkit-transform: translate3d(-5%, 0, 0) rotate3d(0, 0, 1, -1deg);
            transform: translate3d(-5%, 0, 0) rotate3d(0, 0, 1, -1deg);
  }

  100% {
    -webkit-transform: none;
            transform: none;
  }
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

         <?php
         include "../config/connection.php";
         $select="SELECT * FROM notifications WHERE status='Active'";
         $query=mysqli_query($connection,$select);
         $count=mysqli_num_rows($query);


          ?>

         <ul class="dots " id="notifications" style="position: absolute;margin-left:80%">
        <li>
          <a href="#" >
            <span class="material-icons  dropdown-trigger" data-target='dropdown1'>notifications_active<mark class="tada"><?php echo $count; ?></mark></span>
          </a>
        </li>
      </ul>

      <ul id='dropdown1' class='dropdown-content left'  data-constrainWidth="false" style="width: 300px !important;overflow-y:scroll;">
        <?php
              if ($count > 0) {
                foreach ($query as $item) {
              ?>
        <li><a href="#!"  data-constrainWidth="false"><strong style="font-weight:bold"><?php echo $item["notifications_name"]  ?></strong><br><?php echo $item["message"]; ?></a></li>
          <!-- <li class="divider" tabindex="-4"></li> -->
          <!-- <hr class="solid"> -->
      <?php }
    } else{?>
        <li><a href="#!" data-constrainWidth="false">You have no notifications yet!</a> </li>
  <?php } ?>

      </ul>

         <a class="brand-logo right">
           <!--for the notification-->

            <!-- <i class="material-icons dropdown-trigger notty right" data-target='dropdown1' style="cursor:pointer;padding-right:250%">notifications_active<span class="circle"style="background-color:red;font-size:13px;vertical-align:middle;border-radius:200px;padding:5px;">5</span></i> -->
            <!-- Dropdown Structure -->



           <div class="chip right"  style="margin-top:15%;vertical-align:middle;margin-right:-29%">
      <img src="../simages/card3.jpg" alt="Contact Person">
      <span style="font-size:16px;font-weight:bold;">Jane Doe</span>
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
 <a href="#user"><img class="circle" src="../simages/card3.jpg"></a>
 <a href="#name" style="text-decoration:none"><span class="white-text name" >John Doe</span></a>
 <a href="#email" style="text-decoration:none"><span class="white-text email">jdandturk@gmail.com</span></a>
 </div></li>
 <li><a href="../patientint.php"><i class="material-icons">dashboard</i>Dashboard</a></li>
 <li><a href="viewstory.php"><i class="material-icons">star_border</i>Stories</a></li>
 <li><a href="../Fundraise/index.php"><i class="material-icons">money</i>Fundraise</a></li>
   <li><a href="../schedule/index.php"><i class="material-icons">content_paste</i>Calendar</a></li>
  <li><a href="#!"><i class="material-icons">logout</i>Logout</a></li>
 <li>  <a class="btn blue modal-trigger" href="#terms">Help Info</a></li>
 </ul>
  </div>

    <!--the navbar-->
    <!-- add story -->
    <h3>Add Story</h3>

<div class="row">
 <form action=" " method="post" class="col s12">
 <div class="row">
       <div class="input-field col s12">
         <input id="title" type="text" name="title" >
         <label for="title">Title</label>
       </div>
 </div>
 <div class="row">
       <div class="input-field col s12">
          <select id="status" name="status">
              <option value="public" selected>public</option>
              <option value="private">private</option>
          </select>
   <label>Status</label>
       </div>
</div>

 <div class="row">
       <div class="input-field col s12">
         <textarea id="body" class="materialize-textarea" name="body"></textarea>
         <label for="body">Tell us your story</label>
       </div>
 </div>

 <div class="row">
       <div class="input-field col s12">
         <input id="title" type="file" name="storyimage" >
           <p>Story image</p>
       </div>
 </div>

 <div class="row">
   <input type="submit" value="Save" class="btn" name="submit">
   <a href="/dashboard" class="btn orange">Cancel</a>
 </div>

 </form>
</div>
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

<script>
 $(document).ready(function() {
   $("#notifications").on("click", function() {
     $.ajax({
       url: "../readNotify.php",
       success: function(res) {
         console.log(res);
       }
     });
   });
 });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
  <script>
    $(document).ready(function(){
      $('.modal').modal();
    });

      $('.dropdown-trigger').dropdown();
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
