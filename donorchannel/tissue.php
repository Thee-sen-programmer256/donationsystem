<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
      <script src="https://kit.fontawesome.com/a076d05399.js"></script>
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
  <link rel="stylesheet" href="accordition/accd.css">
  <link rel="stylesheet" href="pop.css">
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
        <!-- <li><a href="sass.html" >Fundraise</a></li> -->
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
<li><a href="Home.php"><i class="material-icons">account_balance</i>Home</a></li>
<li><a href="organ.php"><i class="material-icons">handyman</i>Donate Organ</a></li>
<li><a href="blooddon.php"><i class="material-icons">bloodtype</i>Donate Blood</a></li>
<!-- <li><a href="./Home/logout.php"><i class="material-icons">ac_unit</i>Donate Tissue</a></li> -->
<li>  <a class="btn blue modal-trigger" href="#terms">Help Info</a></li>
</ul>

<p style="font-weight:bold;font-size:14pt;margin-left:1%">Tissues You Can Donation</p>


<!-- start of crds -->
<div class="container" style="width:100%;">
  <div class="row">

          <!-- start of card -->
          <div class="col 18 m3 s12">
            <div class="card z-depth-5" style="height:150px">

              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">SCLERA(white of the eye)<i class="material-icons right">add_circle_outline</i></span>
                <p><a href="#">This is a link</a></p>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">SCLERA<i class="material-icons right">close</i></span>
                <p>Here is some more information about this product that is only revealed once clicked on.</p>
              </div>
              <div class="card-action center box">
                <a href="#divOne" >DONATE</a>
              </div>

            </div>

          </div>


        <!-- end of card -->
        <!-- start of card -->
        <div class="col 18 m3 s12">
          <div class="card z-depth-5" style="height:150px">

            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">HEART VALVES<i class="material-icons right">add_circle_outline</i></span>
              <p><a href="#">This is a link</a></p>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">HEART VALVES<i class="material-icons right">close</i></span>
              <p>Here is some more information about this product that is only revealed once clicked on.</p>
            </div>
            <div class="card-action center box">
              <a href="#divTwo">DONATE</a>
            </div>
          </div>

        </div>
      <!-- end of card -->
      <!-- start of card -->
      <div class="col 18 m3 s12">
        <div class="card z-depth-5" style="height:150px">

          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">SKIN<i class="material-icons right">add_circle_outline</i></span>
            <p><a href="#">This is a link</a></p>
          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">SKIN<i class="material-icons right">close</i></span>
            <p>Here is some more information about this product that is only revealed once clicked on.</p>
          </div>
          <div class="card-action center box">
            <a href="#divThree">DONATE</a>
          </div>
        </div>

      </div>
      <!-- start of card -->
      <div class="col 18 m3 s12">
        <div class="card z-depth-5" style="height:150px">

          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">BONE<i class="material-icons right ">add_circle_outline</i></span>
            <p><a href="#">This is a link</a></p>
          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">BONE<i class="material-icons right">close</i></span>
            <p>Here is some more information about this product that is only revealed once clicked on.</p>
          </div>
          <div class="card-action center box">
            <a href="#divFour">DONATE</a>
          </div>
        </div>

      </div>
       <!-- end of card -->
       <div class="">&nbsp;</div>
       <div class="divider"></div>
        <div class="">&nbsp;</div>
       <!-- start of card -->
       <div class="col 18 m3 s12">
         <div class="card z-depth-5" style="height:150px">

           <div class="card-content">
             <span class="card-title activator grey-text text-darken-4">TENDON<i class="material-icons right ">add_circle_outline</i></span>
             <p><a href="#">This is a link</a></p>
           </div>
           <div class="card-reveal">
             <span class="card-title grey-text text-darken-4">TENDON<i class="material-icons right">close</i></span>
             <p>Here is some more information about this product that is only revealed once clicked on.</p>
           </div>
           <div class="card-action center box">
             <a href="#divFive">DONATE</a>
           </div>
         </div>

       </div>
        <!-- end of card -->
        <!-- start of card -->
        <div class="col 18 m3 s12">
          <div class="card z-depth-5" style="height:150px">

            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">AMINONTIC TISSUES<i class="material-icons right ">add_circle_outline</i></span>
              <p><a href="#">This is a link</a></p>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">AMINONTIC TISSUES<i class="material-icons right">close</i></span>
              <p>Here is some more information about this product that is only revealed once clicked on.</p>
            </div>
            <div class="card-action center box">
              <a href="#divSix">DONATE</a>
            </div>
          </div>

        </div>
         <!-- end of card -->
         <!-- start of card -->
         <div class="col 18 m3 s12">
           <div class="card z-depth-5" style="height:150px">

             <div class="card-content">
               <span class="card-title activator grey-text text-darken-4">MIDDLE EAR<i class="material-icons right ">add_circle_outline</i></span>
               <p><a href="#">This is a link</a></p>
             </div>
             <div class="card-reveal">
               <span class="card-title grey-text text-darken-4">MIDDLE EAR<i class="material-icons right">close</i></span>
               <p>Here is some more information about this product that is only revealed once clicked on.</p>
             </div>
             <div class="card-action center box">
               <a href="#divSeven">DONATE</a>
             </div>
           </div>

         </div>
          <!-- end of card -->
          <!-- start of card -->
          <div class="col 18 m3 s12">
            <div class="card z-depth-5" style="height:150px">

              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">CARTILAGE<i class="material-icons right ">add_circle_outline</i></span>
                <p><a href="#">This is a link</a></p>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">CARTILAGE<i class="material-icons right">close</i></span>
                <p>Here is some more information about this product that is only revealed once clicked on.</p>
              </div>
              <div class="card-action center box">
                <a href="#divEig">DONATE</a>
              </div>
            </div>

          </div>
           <!-- end of card -->
           <div class="">&nbsp;</div>
           <div class="divider"></div>
            <div class="">&nbsp;</div>
           <!-- start of card -->
           <div class="col 18 m3 s12">
             <div class="card z-depth-5" style="height:150px">

               <div class="card-content">
                 <span class="card-title activator grey-text text-darken-4">LIGAMENTS<i class="material-icons right ">add_circle_outline</i></span>
                 <p><a href="#">This is a link</a></p>
               </div>
               <div class="card-reveal">
                 <span class="card-title grey-text text-darken-4">LIGAMENTS<i class="material-icons right">close</i></span>
                 <p>Here is some more information about this product that is only revealed once clicked on.</p>
               </div>
               <div class="card-action center box">
                 <a href="#divNine">DONATE</a>
               </div>
             </div>

           </div>
            <!-- end of card -->

  </div>


</div>

<!-- end f cards -->


<!-- donation1 -->
<div class="overlay" id="divOne">
<div class="wrapper">
<h2>Sclera</h2><a class="close" href="#">&times;</a>
<div class="content">
<div class="container">
<form>

  <div class="row">
    <div class="col">
      <div class="input-field col  s12">
        <input class="fon" id="name" type="text" name="" >
        <label for="name">Name</label>
      </div>
    </div>
    <div class="col">
      <div class="input-field col  s12">
        <input class="fon" id="name" type="email" name="" >
        <label for="email">Email</label>
      </div>
    </div>

  </div>
  <div class="row">
    <div class="col">
      <div class="input-field col  s12">
        <input class="fon" id="name" type="email" name="" >
        <label for="email">Organ</label>
      </div>
    </div>
    <div class="col">
      <div class="input-field col  s12">
        <input class="fon" id="name" type="text" name="" >
        <label for="email">Blood group</label>
      </div>
    </div>

  </div>
  <div class="row">
    <div class="col">
      <div class="input-field col  s12">
        <p>
           <label>
             <input type="checkbox" />
             <span>By clicking checkbox, you consent to donating your organ out
             of your personal decision and free will</span>
           </label>
         </p>
         <p>

      </div>
    </div>
  </div>


<input type="submit" value="Submit">
</form>
</div>
</div>
</div>
</div>

<!-- donation2 -->
<div class="overlay" id="divTwo">
<div class="wrapper">
<h2>Heart Valves</h2><a class="close" href="#">&times;</a>
<div class="content">
<div class="container">
<form>

  <div class="row">
    <div class="col">
      <div class="input-field col  s12">
        <input class="fon" id="name" type="text" name="" >
        <label for="name">Name</label>
      </div>
    </div>
    <div class="col">
      <div class="input-field col  s12">
        <input class="fon" id="name" type="email" name="" >
        <label for="email">Email</label>
      </div>
    </div>

  </div>
  <div class="row">
    <div class="col">
      <div class="input-field col  s12">
        <input class="fon" id="name" type="email" name="" >
        <label for="email">Organ</label>
      </div>
    </div>
    <div class="col">
      <div class="input-field col  s12">
        <input class="fon" id="name" type="text" name="" >
        <label for="email">Blood group</label>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <div class="input-field col  s12">
        <p>
           <label>
             <input type="checkbox" />
             <span>By clicking checkbox, you consent to donating your organ out
             of your personal decision and free will</span>
           </label>
         </p>
         <p>

      </div>
    </div>
  </div>


<input type="submit" value="Submit">
</form>
</div>
</div>
</div>
</div>


<!-- donation3 -->
<div class="overlay" id="divThree">
<div class="wrapper">
<h2>Skin</h2><a class="close" href="#">&times;</a>
<div class="content">
<div class="container">
<form>

  <div class="row">
    <div class="col">
      <div class="input-field col  s12">
        <input class="fon" id="name" type="text" name="" >
        <label for="name">Name</label>
      </div>
    </div>
    <div class="col">
      <div class="input-field col  s12">
        <input class="fon" id="name" type="email" name="" >
        <label for="email">Email</label>
      </div>
    </div>

  </div>
  <div class="row">
    <div class="col">
      <div class="input-field col  s12">
        <input class="fon" id="name" type="email" name="" >
        <label for="email">Organ</label>
      </div>
    </div>
    <div class="col">
      <div class="input-field col  s12">
        <input class="fon" id="name" type="text" name="" >
        <label for="email">Blood group</label>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <div class="input-field col  s12">
        <p>
           <label>
             <input type="checkbox" />
             <span>By clicking checkbox, you consent to donating your organ out
             of your personal decision and free will</span>
           </label>
         </p>
         <p>

      </div>
    </div>
  </div>


<input type="submit" value="Submit">
</form>
</div>
</div>
</div>
</div>

<!-- donation4 -->
<div class="overlay" id="divFour">
<div class="wrapper">
<h2>Bone</h2><a class="close" href="#">&times;</a>
<div class="content">
<div class="container">
<form>

  <div class="row">
    <div class="col">
      <div class="input-field col  s12">
        <input class="fon" id="name" type="text" name="" >
        <label for="name">Name</label>
      </div>
    </div>
    <div class="col">
      <div class="input-field col  s12">
        <input class="fon" id="name" type="email" name="" >
        <label for="email">Email</label>
      </div>
    </div>

  </div>
  <div class="row">
    <div class="col">
      <div class="input-field col  s12">
        <input class="fon" id="name" type="email" name="" >
        <label for="email">Organ</label>
      </div>
    </div>
    <div class="col">
      <div class="input-field col  s12">
        <input class="fon" id="name" type="text" name="" >
        <label for="email">Blood group</label>
      </div>
    </div>

  </div>
  <div class="row">
    <div class="col">
      <div class="input-field col  s12">
        <p>
           <label>
             <input type="checkbox" />
             <span>By clicking checkbox, you consent to donating your organ out
             of your personal decision and free will</span>
           </label>
         </p>
         <p>

      </div>
    </div>
  </div>


<input type="submit" value="Submit">
</form>
</div>
</div>
</div>
</div>


<!-- donation5 -->
<div class="overlay" id="divFive">
<div class="wrapper">
<h2>Tendon</h2><a class="close" href="#">&times;</a>
<div class="content">
<div class="container">
<form>

  <div class="row">
    <div class="col">
      <div class="input-field col  s12">
        <input class="fon" id="name" type="text" name="" >
        <label for="name">Name</label>
      </div>
    </div>
    <div class="col">
      <div class="input-field col  s12">
        <input class="fon" id="name" type="email" name="" >
        <label for="email">Email</label>
      </div>
    </div>

  </div>
  <div class="row">
    <div class="col">
      <div class="input-field col  s12">
        <input class="fon" id="name" type="email" name="" >
        <label for="email">Organ</label>
      </div>
    </div>
    <div class="col">
      <div class="input-field col  s12">
        <input class="fon" id="name" type="text" name="" >
        <label for="email">Blood group</label>
      </div>
    </div>

  </div>
  <div class="row">
    <div class="col">
      <div class="input-field col  s12">
        <p>
           <label>
             <input type="checkbox" />
             <span>By clicking checkbox, you consent to donating your organ out
             of your personal decision and free will</span>
           </label>
         </p>
         <p>

      </div>
    </div>
  </div>


<input type="submit" value="Submit">
</form>
</div>
</div>
</div>
</div>


<!-- donation6 -->
<div class="overlay" id="divSix">
<div class="wrapper">
<h2>Aminontic Tissue</h2><a class="close" href="#">&times;</a>
<div class="content">
<div class="container">
<form>

  <div class="row">
    <div class="col">
      <div class="input-field col  s12">
        <input class="fon" id="name" type="text" name="" >
        <label for="name">Name</label>
      </div>
    </div>
    <div class="col">
      <div class="input-field col  s12">
        <input class="fon" id="name" type="email" name="" >
        <label for="email">Email</label>
      </div>
    </div>

  </div>
  <div class="row">
    <div class="col">
      <div class="input-field col  s12">
        <input class="fon" id="name" type="email" name="" >
        <label for="email">Organ</label>
      </div>
    </div>
    <div class="col">
      <div class="input-field col  s12">
        <input class="fon" id="name" type="text" name="" >
        <label for="email">Blood group</label>
      </div>
    </div>

  </div>
  <div class="row">
    <div class="col">
      <div class="input-field col  s12">
        <p>
           <label>
             <input type="checkbox" />
             <span>By clicking checkbox, you consent to donating your organ out
             of your personal decision and free will</span>
           </label>
         </p>
         <p>

      </div>
    </div>
  </div>


<input type="submit" value="Submit">
</form>
</div>
</div>
</div>
</div>


<!-- donation7 -->
<div class="overlay" id="divSeven">
<div class="wrapper">
<h2>Middle Ear</h2><a class="close" href="#">&times;</a>
<div class="content">
<div class="container">
<form>

  <div class="row">
    <div class="col">
      <div class="input-field col  s12">
        <input class="fon" id="name" type="text" name="" >
        <label for="name">Name</label>
      </div>
    </div>
    <div class="col">
      <div class="input-field col  s12">
        <input class="fon" id="name" type="email" name="" >
        <label for="email">Email</label>
      </div>
    </div>

  </div>
  <div class="row">
    <div class="col">
      <div class="input-field col  s12">
        <input class="fon" id="name" type="email" name="" >
        <label for="email">Organ</label>
      </div>
    </div>
    <div class="col">
      <div class="input-field col  s12">
        <input class="fon" id="name" type="text" name="" >
        <label for="email">Blood group</label>
      </div>
    </div>

  </div>
  <div class="row">
    <div class="col">
      <div class="input-field col  s12">
        <p>
           <label>
             <input type="checkbox" />
             <span>By clicking checkbox, you consent to donating your organ out
             of your personal decision and free will</span>
           </label>
         </p>
         <p>

      </div>
    </div>
  </div>


<input type="submit" value="Submit">
</form>
</div>
</div>
</div>
</div>


<!-- donation8 -->
<div class="overlay" id="divEig">
<div class="wrapper">
<h2>Cartilage</h2><a class="close" href="#">&times;</a>
<div class="content">
<div class="container">
<form>

  <div class="row">
    <div class="col">
      <div class="input-field col  s12">
        <input class="fon" id="name" type="text" name="" >
        <label for="name">Name</label>
      </div>
    </div>
    <div class="col">
      <div class="input-field col  s12">
        <input class="fon" id="name" type="email" name="" >
        <label for="email">Email</label>
      </div>
    </div>

  </div>
  <div class="row">
    <div class="col">
      <div class="input-field col  s12">
        <input class="fon" id="name" type="email" name="" >
        <label for="email">Organ</label>
      </div>
    </div>
    <div class="col">
      <div class="input-field col  s12">
        <input class="fon" id="name" type="text" name="" >
        <label for="email">Blood group</label>
      </div>
    </div>

  </div>
  <div class="row">
    <div class="col">
      <div class="input-field col  s12">
        <p>
           <label>
             <input type="checkbox" />
             <span>By clicking checkbox, you consent to donating your organ out
             of your personal decision and free will</span>
           </label>
         </p>
         <p>

      </div>
    </div>
  </div>


<input type="submit" value="Submit">
</form>
</div>
</div>
</div>
</div>


<!-- donation9 -->
<div class="overlay" id="divNine">
<div class="wrapper">
<h2>Ligament</h2><a class="close" href="#">&times;</a>
<div class="content">
<div class="container">
<form>

  <div class="row">
    <div class="col">
      <div class="input-field col  s12">
        <input class="fon" id="name" type="text" name="" >
        <label for="name">Name</label>
      </div>
    </div>
    <div class="col">
      <div class="input-field col  s12">
        <input class="fon" id="name" type="email" name="" >
        <label for="email">Email</label>
      </div>
    </div>

  </div>
  <div class="row">
    <div class="col">
      <div class="input-field col  s12">
        <input class="fon" id="name" type="email" name="" >
        <label for="email">Organ</label>
      </div>
    </div>
    <div class="col">
      <div class="input-field col  s12">
        <input class="fon" id="name" type="text" name="" >
        <label for="email">Blood group</label>
      </div>
    </div>
    </div>

  </div>
  <div class="row">
    <div class="col">
      <div class="input-field col  s12">
        <p>
           <label>
             <input type="checkbox" />
             <span>By clicking checkbox, you consent to donating your organ out
             of your personal decision and free will</span>
           </label>
         </p>
         <p>

      </div>
    </div>
  </div>


<input type="submit" value="Submit">
</form>
</div>
</div>
</div>
</div>






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
        M.FormSelect.init(document.querySelector('#status'));
        M.FormSelect.init(document.querySelector('#status'));

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

      </script>
  </body>
</html>
