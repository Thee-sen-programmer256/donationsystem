<?php

session_start();
if(!isset($_SESSION['email'])){
header("Location: Home/login.php");
}
    include "../config/connection.php"

    

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
    <style>
    a{
      text-decoration: none;
    }
    body{
     overflow-y: scroll;

    }
    body::-webkit-scrollbar {
                   display: none;
               }
        :root {
            --bs-success-rgb: 71, 222, 152 !important;
        }

        html,
        body {
            height: 100%;
            width: 100%;
            font-family: sans-serif;
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
         background-color: #FF6B6B;
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
                 color:blue
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

<body class="bg-light">

  <div class="navbar-fixed" >
    <nav class="bondi blue" style="color:#29ccf5">
     <div class="nav-wrapper container" >
       <p class="brand-logo center" style="color:white">Patient</p>

       <ul class="dots right" >
      <li>
        <a href="#">
          <span class="material-icons  dropdown-trigger" data-target='dropdown1'>notifications_active<mark>23</mark></span>
        </a>
      </li>
    </ul>

       <a class="brand-logo right">
        <!--for the notification-->

         <!-- <i class="material-icons dropdown-trigger notty right" data-target='dropdown1' style="cursor:pointer;padding-right:250%">notifications_active<span class="circle"style="background-color:red;font-size:13px;vertical-align:middle;border-radius:200px;padding:5px;">5</span></i> -->
         <!-- Dropdown Structure -->
<ul id='dropdown1' class='dropdown-content left'  data-constrainWidth="false" style="width: 300px !important;overflow-y:scroll;">
  <li><a href="#!"  data-constrainWidth="false">t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution</a></li>
  <!-- <li class="divider" tabindex="-4"></li> -->
  <li><a href="#!">t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution</a></li>
  <!-- <li class="divider" tabindex="-1"></li> -->
  <li><a href="#!">t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The </a></li>
  <!-- <li class="divider" tabindex="-1"></li> -->
  <li><a href="#!"><i class="material-icons">view_module</i>t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The </a></li>
  <!-- <li class="divider" tabindex="-1"></li> -->
  <li><a href="#!"><i class="material-icons">cloud</i>t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The </a></li>
  <!-- <li class="divider" tabindex="-1"></li> -->
  <li><a href="#!"><i class="material-icons">cloud</i>t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The </a></li>
  <!-- <li class="divider" tabindex="-1"></li> -->
  <li><a href="#!"><i class="material-icons">cloud</i>t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The </a></li>
  <!-- <li class="divider" tabindex="-1"></li> -->
  <li><a href="#!"><i class="material-icons">cloud</i>t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The </a></li>
  <!-- <li class="divider" tabin  dex="-1"></li> -->
  <li><a href="#!"><i class="material-icons">cloud</i>t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The </a></li>
</ul>

         <div class="chip right" style="margin-top:1.5%;vertical-align:middle;">
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
<li><a href="../patientint.php"><i class="material-icons">dashboard</i>Dashboard</a></li>
<li><a href="../stories/viewstory.php"><i class="material-icons">star_border</i>Stories</a></li>
<li><a href="../Fundraise/index.php"><i class="material-icons">money</i>Fundraise</a></li>
  <!-- <li><a href="schedule/index.php"><i class="material-icons">content_paste</i>Calendar</a></li> -->
<li><a href="#!"><i class="material-icons">logout</i>Logout</a></li>
<li>  <a class="btn blue modal-trigger" href="#terms">Help Info</a></li>
</ul>
</div>
  <!--the navbar-->

    <div class="container py-5" id="page-container" style="align:center">
        <div class="row">
            <div class="col-md-9">
                <div id="calendar"></div>
            </div>

        </div>
    </div>


    <!-- modals -->
    <div class="container">
        <!-- <h2>Modals</h2> -->
        <!-- <a class="btn orange modal-trigger" href="#terms">Help Info</a> -->
        <div id="terms" class="modal modal-fixed-footer">
          <h4>Modal Header</h4>
          <p>A bunch of text</p>
    <!-- <div class="modal-content maroon">
    </div> -->
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-blue btn-flat">Agree</a>
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


    <!-- Event Details Modal -->
    <div class="modal fade" tabindex="-1" data-bs-backdrop="static" id="event-details-modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-0">
                <div class="modal-header rounded-0">
                    <h5 class="modal-title">Schedule Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body rounded-0">
                    <div class="container-fluid">
                        <dl>
                            <dt class="text-muted">Title</dt>
                            <dd id="title" class="fw-bold fs-4"></dd>
                            <dt class="text-muted">Description</dt>
                            <dd id="she_description" class=""></dd>
                            <dt class="text-muted">Start</dt>
                            <dd id="start" class=""></dd>
                            <dt class="text-muted">End</dt>
                            <dd id="end" class=""></dd>
                        </dl>
                    </div>
                </div>
                <div class="modal-footer rounded-0">
                    <div class="text-end">

                        <button type="button" class="btn btn-secondary btn-sm rounded-0" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Event Details Modal -->

    <!-- modals -->
    <div class="container">
        <!-- <h2>Modals</h2> -->
        <!-- <a class="btn orange modal-trigger" href="#terms">Help Info</a> -->
        <div id="terms" class="modal modal-fixed-footer">
          <h4>Modal Header</h4>
          <p>A bunch of text</p>
    <!-- <div class="modal-content maroon">
    </div> -->
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-blue btn-flat">Agree</a>
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

<?php
$schedules = $connection->query("SELECT * FROM `schedule`");
$sched_res = [];
foreach($schedules->fetch_all(MYSQLI_ASSOC) as $row){
    $row['sdate'] = date("F d, Y h:i A",strtotime($row['start_datetime']));
    $row['edate'] = date("F d, Y h:i A",strtotime($row['end_datetime']));
    $sched_res[$row['id']] = $row;
}
?>
<?php
if(isset($connection)) $connection->close();
?>
</body>
<script type="text/javascript">

</script>
<script>
    var scheds = $.parseJSON('<?= json_encode($sched_res) ?>');
    document.addEventListener('DOMContentLoaded', function() {
     var elems = document.querySelectorAll('.modal');
     var instances = M.Modal.init(elems, options);
   });
</script>
<script src="./js/script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
  <script >
  $(document).ready(function(){
    $('.modal').modal();
  });
  </script>
  <script>

    $(document).ready(function(){
   $('.tooltipped').tooltip();
 });

  $('.dropdown-trigger').dropdown();

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
