<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- <link rel="stylesheet" href="lib/owlcarousel/owl.carousel.min.css"> -->
  <!-- <link rel="stylesheet" href="lib/owlcarousel/owl.theme.default.min.css"> -->
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
<!-- <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css"> -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!-- <link rel="stylesheet" type="text/css" href="css/styles.css"> -->
<!-- <link rel="stylesheet" type="text/css" href="sstyles.css"> -->
  <!-- <link rel="stylesheet" href="main.css"> -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;900&display=swap" rel="stylesheet">
  <!-- <link rel="stylesheet" href="newsli.css"> -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="../accordition/accd.css">
  <script type="text/javascript"
<!-- src="https://code.jquery.com/jquery-1.12.0.min.js"> -->
 </script>
 <!-- Compiled and minified JavaScript -->
 <script src=
"https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js">
 </script>

 <style >
   a{
     text-decoration: none;
   }
   a:hover{
     color:red;
   }
   a.don:hover{
     color: white;
   }
   img{
     height:250px
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
  <body>


<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
  <li><a href="#!">one</a></li>
  <li><a href="#!">two</a></li>
  <li class="divider"></li>
  <li><a href="#!">logout</a></li>
</ul>
<div class="navbar-fixed">
  <nav>

<!-- notif -->
<ul class="dots " id="notifications" style="position: absolute;margin-left:">
<li>
 <a href="#" >
   <span class="material-icons  dropdown-trigger" data-target='dropdown1'>notifications_active<mark class=""></mark></span>
 </a>
</li>
</ul>

<ul id='dropdown1' class='dropdown-content left'  data-constrainWidth="false" style="width: 300px !important;overflow-y:scroll;">

<li><a href="#!"  data-constrainWidth="false"><strong style="font-weight:bold"></a></li>
 <!-- <li class="divider" tabindex="-4"></li> -->
 <!-- <hr class="solid"> -->


</ul>




<!-- notif -->






    <div class="nav-wrapper blue">
      <a class="brand-logo left">
  <a href="" data-target="slide-out" class="sidenav-trigger show-on-large"><i class="fas fa-bars" style="color:white"></i></a>
       &nbsp;  </a>



      <a href="#!" class="brand-logo center " >
        <div class="chip " style="vertical-align:middle;">
   <img src="../images/_20200622_003355.jpg" alt="Contact Person">

   <span style="font-size:16px;font-weight:bold;">big AN 256</span>
  </div>
      </a>
      <ul class="right hide-on-med-and-down" >
        <li><a href="patients.php" >Patients</a></li>
        <li><a class="modal-trigger" href="#terms" >Quick Info</a></li>
        <li><a href="scheduleD/">Schedule</a></li>
        <!-- Dropdown Trigger -->
        <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Dropdown<i class="material-icons right">arrow_drop_down</i></a></li>
      </ul>
    </div>
    <?php
    include "../config/connection.php";
    $select="SELECT * FROM notifications WHERE active='1' and client_type='donors'";
    $query=mysqli_query($connection,$select);
    $count=mysqli_num_rows($query);


     ?>
    <!-- notif -->
    <!-- <ul class="dots " id="notifications" style="position: absolute;"> -->
      <ul class="dots " id="notify" style="position: absolute;margin-top:-5.1%;margin-left:8%">
     <li>
       <a href="#" >
         <span class="material-icons  dropdown-trigger" data-target='dropdown6'>notifications_active<mark class=""><?php echo $count; ?></mark></span>
       </a>
     </li>
   </ul>

   <ul id='dropdown6' class='dropdown-content left'  data-constrainWidth="false" style="width: 300px !important;overflow-y:scroll;">
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





    <!-- notif -->

  </nav>

</div>
<ul id="slide-out" class="sidenav">
<li><div class="user-view">
<div class="background">
<img src="Home/images/background1.jpg">
</div>
<!-- <a href="#user"><img class="circle" src="images/images.png"></a> -->
<a href="#user"><img class="circle" src="../images/cute"></a>
<a href="#name" style="text-decoration:none"><span class="white-text name" ><?php echo $rows['fname']; ?></span></a>
<a href="#email" style="text-decoration:none"><span class="white-text email"><?php echo $rows['email']; ?></span></a>
</div></li>
<!-- <li><a href="patientint.php"><i class="material-icons">dashboard</i>Dashboard</a></li> -->
<!-- <li><a href="stories/viewstory.php"><i class="material-icons">account_balance</i>Home</a></li> -->
<li><a href="organ.php"><i class="material-icons">handyman</i>Donate Organ</a></li>
<li><a href="blooddon.php"><i class="material-icons">bloodtype</i>Donate Blood</a></li>
<li><a href="tissue.php"><i class="material-icons">ac_unit</i>Donate Tissue</a></li>
<li>  <a class="btn blue modal-trigger" href="#terms">Help Info</a></li>
</ul>


<div class="right" >
  <p style="background:black;padding:5px;color:white;border-radius:5px">blood Group: <span style="color:red">not verified</span></p>
</div>

<section class="">
<p style="font-weight:bold;font-size:14pt;margin-left:1%">Your Activity</p>


    <div class="container" style="width:100%;">
      <div class="row">

              <!-- start of card -->
              <div class="col 18 m3 s12">
                <div class="card z-depth-5" style="height:150px">

                  <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Donations made<i class="material-icons right">add_circle_outline</i></span>
                    <p><a href="#">This is a link</a></p>
                  </div>
                  <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Donations Made<i class="material-icons right">close</i></span>
                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                  </div>
                </div>

              </div>
            <!-- end of card -->
            <!-- start of card -->
            <div class="col 18 m3 s12">
              <div class="card z-depth-5" style="height:150px">

                <div class="card-content">
                  <span class="card-title activator grey-text text-darken-4">Pending Donations<i class="material-icons right">compare_arrows</i></span>
                  <p><a href="#">This is a link</a></p>
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4">Pending Donations<i class="material-icons right">close</i></span>
                  <p>Here is some more information about this product that is only revealed once clicked on.</p>
                </div>
              </div>

            </div>
          <!-- end of card -->
          <!-- start of card -->
          <div class="col 18 m3 s12">
            <div class="card z-depth-5" style="height:150px">

              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Approved Donations<i class="material-icons right">check_circle</i></span>
                <p><a href="#">This is a link</a></p>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Approved Donation<i class="material-icons right">close</i></span>
                <p>Here is some more information about this product that is only revealed once clicked on.</p>
              </div>
            </div>

          </div>
          <!-- start of card -->
          <div class="col 18 m3 s12">
            <div class="card z-depth-5" style="height:134px">

              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Rejected Donations<i class="material-icons right ">block</i></span>
                <p><a href="#">This is a link</a></p>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Rejected Donations<i class="material-icons right">close</i></span>
                <p>Here is some more information about this product that is only revealed once clicked on.</p>
              </div>
            </div>

          </div>
           <!-- end of card -->

      </div>
    </div>
  </section>
<!-- cards rnd -->

<p class="center" style="font-weight:bold;font-size:15pt;margin-left:1%;background-color:#99CCCC;padding:5px;width:300px;color:white;border-radius:30px;margin-left:40%" >Contribute to our Fundraise</p>
<!-- for fundraise -->

<section>
  <ul class="slider">
    <li>
      <div class=" s12 m8 offset-m2 l6 offset-l3" style="margin-left:15px;width:1200px">
              <div class="card-panel grey lighten-5 z-depth-1">
                <div class="row valign-wrapper">
                  <div class="col s2">
                    <img src="../simages/card3.jpg" alt="" class="responsive-img" style="border-radius:15px;height:150px"> <!-- notice the "circle" class -->
                  </div>
                  <div class="col s10">

                      <span class="black-text" style="margin-left:-7%">
                        This is a square image. Add the "circle" class to it to make it appear circular.
                          This is a square image. Add the "circle" class to it to make it appear circular.
                            This is a square image. Add the "circle" class to it to make it appear circular.
                              This is a square image. Add the "circle" class to it to make it appear circular.
                                This is a square image. Add the "circle" class to it to make it appear circular.
                      </span>
          </div>


                  </div>
                  <div class="row" style="margin-top:-6%">
                    <table>
                      <tr>
                        <td>&nbsp;</td>
                          <td>&nbsp;</td>
                            <td>&nbsp;</td>
                              <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                    <td>&nbsp;</td>



                        <td>    <div class="card-action right-align" style="margin-right:75%;">
                            <a href="" class="btn green">Fundraise</a>
                          </div></td>
                        <td>



                      </tr>
                    </table>
                  </div>
    </li>

    <li>
      <div class=" s12 m8 offset-m2 l6 offset-l3" style="margin-left:15px;width:1200px">
              <div class="card-panel grey lighten-5 z-depth-1">
                <div class="row valign-wrapper">
                  <div class="col s2">
                    <img src="../simages/card3.jpg" alt="" class="responsive-img" style="border-radius:15px;height:150px"> <!-- notice the "circle" class -->
                  </div>
                  <div class="col s10">

                      <span class="black-text" style="margin-left:-7%">
                        This is a square image. Add the "circle" class to it to make it appear circular.
                          This is a square image. Add the "circle" class to it to make it appear circular.
                            This is a square image. Add the "circle" class to it to make it appear circular.
                              This is a square image. Add the "circle" class to it to make it appear circular.
                                This is a square image. Add the "circle" class to it to make it appear circular.
                      </span>
          </div>


                  </div>
                  <div class="row" style="margin-top:-6%">
                    <table>
                      <tr>
                        <td>&nbsp;</td>
                          <td>&nbsp;</td>
                            <td>&nbsp;</td>
                              <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                    <td>&nbsp;</td>



                        <td>    <div class="card-action right-align" style="margin-right:75%;">
                            <a href="" class="btn green">Fundraise</a>
                          </div></td>
                        <td>

                      </tr>
                    </table>
                  </div>
    </li>
  </ul>

</section>
<!-- end of fundraise -->

<!-- section for the accordition -->


<section  style="margin-top:-6%">
  <div class="">
    <h4>FAQs</h4>
  </div>

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
<!-- end section for the accordition -->




<!-- modals -->
<div class="container">
    <!-- <h2>Modals</h2> -->

    <!-- <a class="btn orange modal-trigger" href="#terms">Help Info</a> -->

    <div id="terms" class="modal">
      <div class="modal-content">
        <h4>Welcome Donor</h4>
        <p>To donate <br>   &nbsp;   &nbsp;   &nbsp; an organ<i class="material-icons">handyman</i> <br>
                  &nbsp;  &nbsp;   &nbsp;        blood<i class="material-icons">bloodtype</i><br>
                          &nbsp;   &nbsp;   &nbsp;  tissue<i class="material-icons">ac_unit</i><br>
          Click the <a class="small btn-floating pulse blue"><i class="material-icons">menu</i></a> inorder to access the donation  pages</p>
      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-close btn blue"><span style="color:white">okay</span></a>
      </div>
    </div>

  </div>
    <!-- end of modal -->




    <!-- floating button1 -->
    <div class="fixed-action-btn" style="bottom:15%">
    <a  class="btn-floating btn-large blue tooltipped" href="#top" data-position="left" data-tooltip="Back to top">
    <i class="large material-icons">arrow_upward</i>
    </a>
    </div>
    <!-- end of floating button -->

    <!-- floating button3 -->
    <div class="fixed-action-btn">
  <a class="btn-floating btn-large black">
    <i class="large material-icons">chat</i>
  </a>
  <ul>
    <li><a href="http://wa.me/+256789274772" target="_blank" class="btn-floating green"><i class= "fab fa-whatsapp" aria-hidden= "true" ></i></a></li>
    <li><a href="http://t.me/@New_Rhon" target="_blank" class="btn-floating blue darken-1"><i class="material-icons">telegram</i></a></li>

  </ul>
  </div>





  <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
      $('.slider').slick();
    </script>
      <script src="../accordition/accd.js">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>

<script >
$(document).ready(function() {
  $("#notify").on("click", function() {
    $.ajax({
      url: "../readNotify.php",
      success: function(res) {
        console.log(res);
      }
    });
  });
});
</script>
      <script type="text/javascript">

M.Sidenav.init(document.querySelector('.sidenav'));
$(".dropdown-trigger").dropdown();
document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('.fixed-action-btn');
  var instances = M.FloatingActionButton.init(elems, {
    direction: 'left',
    hoverEnabled: false
  });
});
$(document).ready(function(){
$('.tooltipped').tooltip();
});
$(document).ready(function(){
  $('.modal').modal();
});

      </script>
  </body>
</html>
