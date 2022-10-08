
<?php
 include "config/connection.php";

 session_start();
if(!isset($_SESSION['email'])){
   header("Location: Home/login.php");
}

?>



<!DOCTYPE html>
<html lang="en" dir="ltr" style="height:1000px">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="lib/owlcarousel/owl.carousel.min.css">
  <link rel="stylesheet" href="lib/owlcarousel/owl.theme.default.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!-- <link rel="stylesheet" type="text/css" href="css/styles.css"> -->
<!-- <link rel="stylesheet" type="text/css" href="sstyles.css"> -->
  <link rel="stylesheet" href="main.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="newsli.css">
  <link rel="stylesheet" href="accordition/accd.css">
  <script type="text/javascript"
src="https://code.jquery.com/jquery-1.12.0.min.js">
 </script>
 <!-- Compiled and minified JavaScript -->
 <script src=
"https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js">
 </script>

 <style type="text/css">
 a{
   text-decoration: none;
 }
 body{

  overflow-y: 1000px;
height: 1000px


 }
body::-webkit-scrollbar{
  display: none;
  max-height: 150px;
}
html{
  height: 1000px
}
 nav{
   /* top: 0;
 z-index: 100;
position: fixed;
 /* width: 100 */
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



.popup-screen{
  z-index: 999999;
  position: fixed;
  background: rgba(255, 255, 255, 0.1);
  backdrop-filter: blur(10px);
  width: 100%;
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  visibility: hidden;
  transition: 0.5s ease;
  transition-property: visibility;
}

.popup-screen.active{
  visibility: visible;
}

.popup-box{
  position: relative;
  background: rgba(255, 255, 255, 0.8);
  backdrop-filter: blur(10px);
  max-width: 350px;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  margin: 20px;
  padding: 50px 40px;
  border-radius: 20px;
  box-shadow: 0 5px 25px rgb(0 0 0 / 20%);
  transform: scale(0);
  transition: 0.5s ease;
  transition-property: transform;
}

.popup-screen.active .popup-box{
  transform: scale(1);
}

.popup-box h2{
  font-size: 2.1em;
  font-weight: 800;
  margin-bottom: 20px;
}

.popup-box p{
  font-size: 1em;
  margin-bottom: 30px;
}

.popup-box .btn{
  color: #fff;
  background: red;
  font-size: 1.1em;
  font-weight: 500;
  text-decoration: none;
  text-transform: uppercase;
  padding: 7px 27px;
  border-radius: 3px;
}

.close-btn{
  position: absolute;
  font-size: 1em;
  top: 0;
  right: 0;
  margin: 15px;
  cursor: pointer;
  opacity: 0.5;
  transition: 0.3s ease;
  transition-property: opacity;
}

.close-btn:hover{
  opacity: 1;
}

section{
  padding: 50px 100px;
}

.home{
  margin-top: -10%;
  position: relative;
  width: 100%;
  min-height: 100vh;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.image{
  position: relative;
  width: 45%;
  min-height: 450px;
}

.image img{
  position: absolute;
  width: 100%;
  height: 100%;
  object-fit: cover;
  border-radius: 10px;
}

.info{
  position: relative;
  width: 52%;
    margin-top: -1%;
}

.info h2{
  font-size: 2em;
  font-weight: 800;
}

.info p{
  font-size: 1em;
  text-align: justify;
  margin-top: 10px;
}

@media (max-width: 990px){
  section{
    padding: 50px 30px;
  }

  .home{
    display: block;
  }

  .image{
    width: 100%;
  }

  .info{
    width: 100%;
    margin-top: 15px;
  }
}
html, body {
     min-height: 100vh;
}

 </style>
  </head>
  <body style="background:white;">
  <?php
      $sql_fetch="SELECT * FROM patient where email='".$_SESSION['email']."'";
      $sql_query=mysqli_query($connection, $sql_fetch);
      $rows=mysqli_fetch_assoc($sql_query);
      // $patient=mysqli_num_rows($sql_query);


      ?>
    <!--the navbar-->
    <!-- the nav bar -->
    <div class="navbar-fixed" >
      <nav class="bondi blue" style="color:#29ccf5">
       <div class="nav-wrapper container" >
       <p class="brand-logo center" style="color:white">
         <p class="brand-logo center" style="color:white">Patient</p>

         <?php
         include "config/connection.php";
         $select="SELECT * FROM notifications WHERE status='Active' and client_type='Patient' or client_type='All'";
         $query=mysqli_query($connection,$select);
         $count=mysqli_num_rows($query);


          ?>

          <ul class="dots " id="notifications" style="position: absolute;margin-left:70%">
         <li>
           <a href="#" >
             <span class="material-icons  dropdown-trigger" data-target='dropdown1'>notifications_active<mark class=""><?php echo $count; ?></mark></span>
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

           <div class="chip" style="vertical-align:middle;">
      <img src="./images/<?php echo $rows['image']; ?>">

      <span style="font-size:16px;font-weight:bold;"><?php echo $rows['fname']; ?></span>
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
  <img src="Home/images/background1.jpg">
 </div>
 <!-- <a href="#user"><img class="circle" src="images/images.png"></a> -->
 <a href="#user"><img class="circle" src="images/<?php echo $rows['image']; ?>"></a>
 <a href="#name" style="text-decoration:none"><span class="white-text name" ><?php echo $rows['fname']; ?></span></a>
 <a href="#email" style="text-decoration:none"><span class="white-text email"><?php echo $rows['email']; ?></span></a>
 </div></li>
 <!-- <li><a href="patientint.php"><i class="material-icons">dashboard</i>Dashboard</a></li> -->
 <li><a href="stories/viewstory.php"><i class="material-icons">star_border</i>Stories</a></li>
  <li><a href="Fundraise/index.php"><i class="material-icons">money</i>Fundraise</a></li>
    <li><a href="schedule/index.php"><i class="material-icons">content_paste</i>Calendar</a></li>
 <li><a href="./Home/logout.php"><i class="material-icons">logout</i>Logout</a></li>
 <li>  <a class="btn blue modal-trigger" href="#terms">Help Info</a></li>
 </ul>
  </div>
    <!--the navbar-->
    <!-- slider -->
    <!-- slider -->
    <?php


        if(isset($_SESSION['pid']))
        {
            ?> <div>
                <div style="width:300px; margin-left:0; background-color:green; color: white; text-align: center; border-radius:12px;" class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Your Welcome !</strong><?php echo $rows['fname']; ?><?= $_SESSION['pid']; ?>
                    <a href="patientint.php"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></a>
                </div>
        </div>
            <?php
            unset($_SESSION['pid']);
        }

    ?>
<section class="product" style="height:350px">

     <h2 class="product-category" style="text-align:center">Check out organs available</h2>
     <button class="pre-btn"><img src="simages/arrow.png" alt=""></button>
     <button class="nxt-btn"><img src="simages/arrow.png" alt=""></button>
     <div class="product-container">
         <div class="product-card">
             <div class="product-image">
                 <span class="discount-tag" style="background-color:green;color:white">Active</span>
                 <div class="product-info" style="padding-bottom:100%;border-radius:7px">
                    <div class="">
                      <h2 class="product-brand" style="padding-top:15%" >Liver</h2>
                       <p class="product-short-description price">Donor</p>
                       <span class="price">$20</span><span class="actual-price">$40</span>
                    </div>
                    <a href="#request" class="new"><button class="card" style="border-radius: 50px;padding-top:3%;padding-bottom:3%;width:250px;margin-top:15%;margin-left:25%;padding-left:27px;">Request</button></a>
                 </div>
             </div>
         </div>
         <div class="product-card">
             <div class="product-image">
                 <span class="discount-tag"  style="background-color:maroon;color:white">Inactive</span>
                 <div class="product-info" style="padding-bottom:100%;border-radius:7px">
                    <div class="">
                      <h2 class="product-brand" style="padding-top:15%" >Liver</h2>
                       <p class="product-short-description price">Donor</p>
                       <span class="price">$20</span><span class="actual-price">$40</span>
                    </div>
                    <a class="new"><button class="card" style="border-radius: 50px;padding-top:3%;padding-bottom:3%;width:250px;margin-top:15%;margin-left:25%;padding-left:27px;">Request</button></a>
                 </div>
             </div>
         </div>
         <div class="product-card">
             <div class="product-image">
                 <span class="discount-tag">Active</span>
                 <div class="product-info" style="padding-bottom:100%;border-radius:7px">
                    <div class="">
                      <h2 class="product-brand" style="padding-top:15%" >Liver</h2>
                       <p class="product-short-description price">Donor</p>
                       <span class="price">$20</span><span class="actual-price">$40</span>
                    </div>
                    <a class="new" href="#request"><button class="card" style="border-radius: 50px;padding-top:3%;padding-bottom:3%;width:250px;margin-top:15%;margin-left:25%;padding-left:27px;">Request</button></a>
                 </div>
             </div>
         </div>
         <div class="product-card">
             <div class="product-image">
                 <span class="discount-tag">Active</span>
                 <div class="product-info" style="padding-bottom:100%;border-radius:7px">
                    <div class="">
                      <h2 class="product-brand" style="padding-top:15%" >Liver</h2>
                       <p class="product-short-description price">Donor</p>
                       <span class="price">$20</span><span class="actual-price">$40</span>
                    </div>
                    <a class="new"><button class="card" style="border-radius: 50px;padding-top:3%;padding-bottom:3%;width:250px;margin-top:15%;margin-left:25%;padding-left:27px;">Request</button></a>
                 </div>
             </div>
         </div>
         <div class="product-card">
             <div class="product-image">
                 <span class="discount-tag">Active</span>
                 <div class="product-info" style="padding-bottom:100%;border-radius:7px">
                    <div class="">
                      <h2 class="product-brand" style="padding-top:15%" >Liver</h2>
                       <p class="product-short-description price">Donor</p>
                       <span class="price">$20</span><span class="actual-price">$40</span>
                    </div>
                    <a class="new"><button class="card" style="border-radius: 50px;padding-top:3%;padding-bottom:3%;width:250px;margin-top:15%;margin-left:25%;padding-left:27px;">Request</button></a>
                 </div>
             </div>
         </div>
         <div class="product-card">
             <div class="product-image">
                 <span class="discount-tag">Active</span>
                 <div class="product-info" style="padding-bottom:100%;border-radius:7px">
                    <div class="">
                      <h2 class="product-brand" style="padding-top:15%" >Liver</h2>
                       <p class="product-short-description price">Donor</p>
                       <span class="price">$20</span><span class="actual-price">$40</span>
                    </div>
                    <a class="new"><button class="card" style="border-radius: 50px;padding-top:3%;padding-bottom:3%;width:250px;margin-top:15%;margin-left:25%;padding-left:27px;">Request</button></a>
                 </div>
             </div>
         </div>
         <div class="product-card">
             <div class="product-image">
                 <span class="discount-tag">Active</span>
                 <div class="product-info" style="padding-bottom:100%;border-radius:7px">
                    <div class="">
                      <h2 class="product-brand" style="padding-top:15%" >Liver</h2>
                       <p class="product-short-description price">Donor</p>
                       <span class="price">$20</span><span class="actual-price">$40</span>
                    </div>
                    <a class="new"><button class="card" style="border-radius: 50px;padding-top:3%;padding-bottom:3%;width:250px;margin-top:15%;margin-left:25%;padding-left:27px;">Request</button></a>
                 </div>
             </div>
         </div>
         </div>
     </div>
 </section>
<!-- end of slider -->


<!-- for the activity -->
&nbsp;
&nbsp;

<div class="right" style="margin-left:-5%">
<?php
                                $vresult =" SELECT * FROM patient where email='".$_SESSION['email']."' " ;
                               if($vdisplay=mysqli_query($connection, $vresult)) {
                                $vrow=mysqli_fetch_assoc($vdisplay);
                               }
                            ?>
  <strong><p style="background:black;padding:5px;color:white;border-radius:5px;">blood Group: <span style="color:red"><?php echo $vrow['bloodgroupstatus'];  ?></span></p>  </strong>
</div>
<p style="font-weight:bold;font-size:14pt;margin-left:1%">Your Activity</p>

<div class="container" style="width:100%;">
  <div class="row">

          <!-- start of card -->
          <div class="col 18 m3 s12">
            <div class="card z-depth-5" style="height:150px">

              <div class="card-content">
              <?php
                                $cdresult =" SELECT * FROM request where email='".$_SESSION['email']."' " ;
                               if($cddisplay=mysqli_query($connection, $cdresult)) {
                                $cdrow=mysqli_num_rows($cddisplay);
                               }
                            ?>
                <span class="card-title activator grey-text text-darken-4">Requests made...<i class="material-icons right">add_circle_outline</i></span>
                <p><a href="#">Click icon to View</a></p>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Requests Made<i class="material-icons right">close</i></span>
                <p><?php echo $cdrow;  ?></p>
              </div>
            </div>

          </div>
        <!-- end of card -->
        <!-- start of card -->
        <div class="col 18 m3 s12">
          <div class="card z-depth-5" style="height:150px">

            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Pending Requests<i class="material-icons right">compare_arrows</i></span>
              <p><a href="#">Click icon to View</a></p>
            </div>
            <div class="card-reveal">
            <?php
                                $dresult =" SELECT * FROM request where email='".$_SESSION['email']."' and status = 'Pending' " ;
                               if($ddisplay=mysqli_query($connection, $dresult)) {
                                $drow=mysqli_num_rows($ddisplay);
                               }
                            ?>
              <span class="card-title grey-text text-darken-4">Pending Requests<i class="material-icons right">close</i></span>
              <p><?php echo $drow;  ?></p>
            </div>
          </div>

        </div>
      <!-- end of card -->
      <!-- start of card -->
      <div class="col 18 m3 s12">
        <div class="card z-depth-5" style="height:150px">

          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Approved Request<i class="material-icons right">check_circle</i></span>
            <p><a href="#">Click icon to View</a></p>
          </div>
          <div class="card-reveal">
          <?php
                                $result =" SELECT * FROM request where email='".$_SESSION['email']."'and status='Approved' " ;
                               if($display=mysqli_query($connection, $result)) {
                                $row=mysqli_num_rows($display);
                               }
                            ?>
            <span class="card-title grey-text text-darken-4">Approved Requests<i class="material-icons right">close</i></span>
            <p><?php echo $row;  ?></p>
          </div>
        </div>

      </div>
      <!-- start of card -->
      <div class="col 18 m3 s12">
        <div class="card z-depth-5" style="height:150px">

          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Rejected Requests<i class="material-icons right ">block</i></span>
            <p><a href="#">Click icon to View</a></p>
          </div>
          <div class="card-reveal">
          <?php
                                $result1 =" SELECT * FROM request where email='".$_SESSION['email']."' and status ='Rejected' " ;
                               if($display1=mysqli_query($connection, $result1)) {
                                $row1=mysqli_num_rows($display1);
                               }
                            ?>
            <span class="card-title grey-text text-darken-4">Rejected Requests<i class="material-icons right">close</i></span>
            <p><?php echo $row1;  ?></p>
          </div>
        </div>

      </div>
       <!-- end of card -->







  </div>


</div>


    <!-- end of slider -->
    <!-- modals -->
    <div class="container" style="height:1000vh;overflow">
        <!-- <h2>Modals</h2> -->
        <!-- <a class="btn orange modal-trigger" href="#terms">Help Info</a> -->
        <div id="terms" class="modal modal-fixed-footer"  >
          <h4>Hey User</h4>
          <p style="font-style:Times New Roman" style="text-size:5px">Here is a little guide for through the system</p>
          <p style="text-size:5px">1. On this page (the index page),First is the navbar where you will get to see tripple bars <a class="small btn-floating pulse blue"><i class="material-icons">menu</i></a> and this will help you navigate to and fro pages like the sotories page where
            you will be able to view all your stories as well as those of other patients,
            the next on the list is the fundraise page where you will be able to view all the fundraising events and how much has been raised.
            Next is the notification bell
          <a class="btn-floating pulse blue"><img src="bell-svgrepo-com.svg" style="height:30px;vertical-align:middle;padding-left:5px"></a>; This is where all the notifications we send to you will appear
          <p>2. Next,you get to see the organs available including tissues like stem cells. You can request for any that you need by clicking the <em style="color:red">request</em> button
          where a popup will appear and you will be requested to confirm what you need.</p>
          <p>3. On the right side, you will a plus button<a class="small btn-floating pulse red"><i class="material-icons">add</i></a>. Click here to be taken to the redirected to the add story page where you will be able to add to be viewed by donors and fellow
          patients thus increasing a chance of being donated to. The button below that is the chat button<a class="small btn-floating pulse blue"><i class="material-icons">chat</i></a>and here you will be able to seek any consultation from our experts and if
        necessary be redirected to the professional for furthur consultation using our two channels of whatsapp and telegram , you just have to click them and you will be able to see view the mentioned channels</p>
        <p>
          <strong>Note:</strong> Patients will allowed to view thier request history in order to keep track of all the requests made. Organs requests will be approved on the first come first serve as well as top priority patients or otherwise having severe conditions. An email will be sent to
        all those who request with information on the organ requested whether approved or not. If a patient's request has not been approved, they will be considered first for the next set of organs and communicated to via email respectively.
      Lastly, you will be abe to view the Frequently asked question on organ donation.
    Finally, feel free to reach out to all our social  platforms to know more about us or contact: +256-789274772   </p>
    <!-- <div class="modal-content maroon">
    </div> -->
    <div class="modal-footer" style="margin-bottom:-5%">
      <a href="#!" class="modal-close waves-effect waves-blue btn-flat">Okay</a>
    </div>
  </div>
        <!-- <div id="terms" class="modal">
          <div class="modal-content">
            <h4>Welcome patient</h4>
            <p>Here is a few tips to know when using the application</p>
          </div>
          <div class="modal-footer">
            <a href="#!" class="modal-close btn blue"><span style="color:white">okay</span></a>
          </div>
        </div>
      </div> -->
        <!-- end of modal -->
    <!-- floating button1 -->
    <div class="fixed-action-btn" style="bottom:23%">
    <a  class="btn-floating btn-large blue tooltipped" href="#top" data-position="left" data-tooltip="Back to top">
    <i class="large material-icons">arrow_upward</i>
    </a>
    </div>
    <!-- end of floating button -->
    <!-- floating button2 -->
    <div class="fixed-action-btn" style="bottom:13%">
    <a  class="btn-floating btn-large red tooltipped" href="stories/addstory.php" data-position="left" data-tooltip="Add your story">
    <i class="large material-icons">add</i>
    </a>
    </div>
    <!-- end of floating button -->
    <!-- floating button3 -->
    <div class="fixed-action-btn">
  <a class="btn-floating btn-large black">
    <i class="large material-icons">chat</i>
  </a>
  <ul>
    <li><a href="http://wa.me/+256789274772" target="_blank" class="btn-floating green"><i class="material-icons"><img src="whats.svg" style="color:white;padding:3px;padding-bottom:14px"></i></a></li>
    <li><a href="http://t.me/@New_Rhon" target="_blank" class="btn-floating blue darken-1"><i class="material-icons">telegram</i></a></li>

  </ul>
</div>
<!-- <div class="fixed-action-btn">
  <a   class="btn-floating btn-large black" >
    <i class="large material-icons">chat</i>
  </a>
  <ul>
    <li><a href="http://wa.me/+256789274772" target="_blank" class="btn-floating green" ><i class="material-icons" ><img src="whats.svg" style="color:white"></i></a></li>
    <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
    <li><a class="btn-floating blue"><i class="material-icons">add</i></a></li>
  </ul>
</div> -->
<!-- end of floating button -->




  &nbsp;




    <!-- requesting -->
  <p  id="request" style="font-weight:bold;font-size:14pt;margin-left:-6%">Request Organ Here</p>
    <section  style="background:#36454f;width:1300px;margin-left:-8%;margin-top:-1%">
      
    <?php  
    
      if(isset($_POST["submit"])){
        $fname= $_POST["fname"];
        $email= $_POST["email"];
        $organ= $_POST["organ"];
        $bloodgroup= $_POST["bloodgroup"];
        $status= $_POST["status"];

    
    $sql = "INSERT INTO request(fname,email,organ,bloodgroup,status)VALUE('$fname','$email','$organ','$bloodgroup','$status')";
    
    //echo $sql;
    // excecuting the query
    if(mysqli_query($connection,$sql)){
    
        ?>
    
        <script type="text/javascript">
            alert("Request Successfully Added");
            window.location= "patientint.php";
        </script>
        <?php
        }else{
        echo mysqli_error($connection);
        }
    
        }
    
      
      ?>

      <form method="POST"> 

        <div class="row">
          <div class="col">
            <div class="input-field col  s12">
              <input class="fon" id="name" type="text" name="fname"  style="color:white">
              <label for="name">Name</label>
            </div>
          </div>
          <div class="col">
            <div class="input-field col  s12">
              <input class="fon" id="name" type="email" name="email" style="color:white">
              <label for="email">Email</label>
            </div>
          </div>

        </div>
        <div class="row">
          <div class="col">
            <div class="input-field col  s12">
              <input class="fon" id="name" type="text" name="organ" >
              <label for="email">Organ</label>
            </div>
          </div>
          <div class="col">
            <div class="input-field col s12">
               <select id="blood" name="bloodgroup">
                   <option value="Choose" selected  style="color:white">--select blood group--</option>
                   <option value="A"  style="color:white">A</option>
                   <option value="AB"  style="color:white">AB</option>
                   <option value="B"  style="color:white">B</option>
                   <option value="O"  style="color:white">O</option>
                
               </select>
        <label>Blood Group</label>
        <input type="hidden" name="status" value= "Pending">
            </div>

          </div>

        </div>


        <div class="center">
            <input class="btn btn-primary" type="submit" value="Request" name="submit">
        </div>

      </form>

    </section>



    <!-- end of requesting -->



  <h1 class="center">Frequently asked questions</h1>
  <!-- section for the accordition -->
  <section >
    <div style="margin-left:-6%;margin-top:-6%">


    <div class="accordion">
    <div class="accordion-item">
      <div class="accordion-item-header">
        What is Web Development?
      </div>
      <div class="accordion-item-body">
        <div class="accordion-item-body-content">
          Web Development broadly refers to the tasks associated with developing functional websites and applications for the Internet. The web development process includes web design, web content development, client-side/server-side scripting and network security configuration, among other tasks.
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <div class="accordion-item-header">
        What is HTML?
      </div>
      <div class="accordion-item-body">
        <div class="accordion-item-body-content">
          HTML, aka HyperText Markup Language, is the dominant markup language for creating websites and anything that can be viewed in a web browser.
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <div class="accordion-item-header">
        What are some basic technical skills of a Front-End developer?
      </div>
      <div class="accordion-item-body">
        <div class="accordion-item-body-content">
          <ul style="padding-left: 1rem;">
            <li>HTML, CSS, JavaScript</li>
            <li>Frameworks (CSS and JavaScript frameworks)</li>
            <li>Responsive Design</li>
            <li>Version Control/Git</li>
            <li>Testing/Debugging</li>
            <li>Browser Developer Tools</li>
            <li>Web Performance</li>
            <li>SEO (Search Engine Optimization)</li>
            <!-- <li>CSS Preprocessing</li> -->
            <li>Command Line</li>
            <li>CMS (Content Management System)</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <div class="accordion-item-header">
        What is HTTP?
      </div>
      <div class="accordion-item-body">
        <div class="accordion-item-body-content">
          HTTP, aka HyperText Transfer Protocol, is the underlying protocol used by the World Wide Web and this protocol defines how messages are formatted and transmitted, and what actions Web servers and browsers should take in response to various commands.
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <div class="accordion-item-header">
        What is CORS?
      </div>
      <div class="accordion-item-body">
        <div class="accordion-item-body-content">
          CORS, aka Cross-Origin Resource Sharing, is a mechanism that enables many resources (e.g. images, stylesheets, scripts, fonts) on a web page to be requested from another domain outside the domain from which the resource originated.
        </div>
      </div>
    </div>
    </div>
    </div>
  </section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
  <script src="accordition/accd.js">

  </script>

<script>
 $(document).ready(function() {
   $("#notifications").on("click", function() {
     $.ajax({
       url: "readNotify.php",
       success: function(res) {
         console.log(res);
       }
     });
   });
 });
$('.dropdown-trigger').dropdown();
  $(document).ready(function(){
    $('.modal').modal();
  });
    M.FormSelect.init(document.querySelector('#blood'))
</script>
  <script>
    $(document).ready(function(){
      $('.modal').modal();
    });
    $(document).ready(function(){
   $('.tooltipped').tooltip();
 });


  $('.dropdown-trigger').dropdown();

  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.fixed-action-btn');
    var instances = M.FloatingActionButton.init(elems, {
      direction: 'left',
      hoverEnabled: false
    });
  });
  </script>
    <script src="sliscript.js"></script>
    <script type="text/javascript">
    M.Sidenav.init(document.querySelector('.sidenav'));
    M.toast({html: toastHTML});
    function toast() {
        document.body.style.color = "black";
        return false;
    }
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
//for the modal help info
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
