<!DOCTYPE html>
<html lang="en" dir="ltr">
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

  <link rel="stylesheet" href="sstyle.css">
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
 nav{
   /* top: 0;
 z-index: 100;
position: fixed;
 /* width: 100 */ */
 }
 </style>
  </head>
  <body style="background:white">

    <!--the navbar-->
    <!-- the nav bar -->
    <div class="navbar-fixed" >
      <nav class="bondi blue" style="color:#29ccf5">
       <div class="nav-wrapper container" >
         <p class="brand-logo center" style="color:white">Patient</p>
         <a class="brand-logo right">
           <div class="chip" >
      <img src="images/cute.jpg" alt="Contact Person">
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
  <img src="simages/card3.jpg">
 </div>
 <a href="#user"><img class="circle" src="simages/card3.jpg"></a>
 <a href="#name" style="text-decoration:none"><span class="white-text name" >John Doe</span></a>
 <a href="#email" style="text-decoration:none"><span class="white-text email">jdandturk@gmail.com</span></a>
 </div></li>
 <!-- <li><a href="patientint.php"><i class="material-icons">dashboard</i>Dashboard</a></li> -->
 <li><a href="stories/viewstory.php"><i class="material-icons">star_border</i>Stories</a></li>
  <li><a href="Fundraise/index.php"><i class="material-icons">money</i>Fundraise</a></li>
 <li><a href="#!"><i class="material-icons">logout</i>Logout</a></li>
 <li>  <a class="btn blue modal-trigger" href="#terms">Help Info</a></li>
 </ul>
  </div>



    <!--the navbar-->
    <!-- slider -->
    <!-- slider -->
<section class="product">
     <h2 class="product-category" style="text-align:center">Check out organs available</h2>
     <button class="pre-btn"><img src="simages/arrow.png" alt=""></button>
     <button class="nxt-btn"><img src="simages/arrow.png" alt=""></button>
     <div class="product-container">

         <div class="product-card">
             <div class="product-image">
                 <span class="discount-tag">50% off</span>
                 <img src="simages/card1.jpg" class="product-thumb" alt="">
                 <button class="card-btn">add to wishlist</button>
                 <div class="product-info" style="padding-bottom:100%">
                     <h2 class="product-brand">brand</h2>
                     <p class="product-short-description">a short line about the cloth..</p>
                     <span class="price">$20</span><span class="actual-price">$40</span>
                 </div>
             </div>

         </div>
         <div class="product-card">
             <div class="product-image">
                 <span class="discount-tag">50% off</span>
                 <img src="simages/card2.jpg" class="product-thumb" alt="">
                 <button class="card-btn">add to wishlist</button>
                 <div class="product-info">
                     <h2 class="product-brand">brand</h2>
                     <p class="product-short-description">a short line about the cloth..</p>
                     <span class="price">$20</span><span class="actual-price">$40</span>
                 </div>
             </div>
         </div>

         <div class="product-card">
             <div class="product-image">
                 <span class="discount-tag">50% off</span>
                 <img src="simages/card3.jpg" class="product-thumb" alt="">
                 <button class="card-btn">add to wishlist</button>
                 <div class="product-info">
                     <h2 class="product-brand">brand</h2>
                     <p class="product-short-description">a short line about the cloth..</p>
                     <span class="price">$20</span><span class="actual-price">$40</span>
                 </div>
             </div>

         </div>
         <div class="product-card">
             <div class="product-image">
                 <span class="discount-tag">50% off</span>
                 <img src="simages/card4.jpg" class="product-thumb" alt="">
                 <button class="card-btn">add to wishlist</button>
                 <div class="product-info">
                     <h2 class="product-brand">brand</h2>
                     <p class="product-short-description">a short line about the cloth..</p>
                     <span class="price">$20</span><span class="actual-price">$40</span>
                 </div>
             </div>

         </div>
         <div class="product-card">
             <div class="product-image">
                 <span class="discount-tag">50% off</span>
                 <img src="simages/card5.jpg" class="product-thumb" alt="">
                 <button class="card-btn">add to wishlist</button>
                 <div class="product-info">
                     <h2 class="product-brand">brand</h2>
                     <p class="product-short-description">a short line about the cloth..</p>
                     <span class="price">$20</span><span class="actual-price">$40</span>
                 </div>
             </div>

         </div>
         <div class="product-card">
             <div class="product-image">
                 <span class="discount-tag">50% off</span>
                 <img src="simages/card6.jpg" class="product-thumb" alt="">
                 <button class="card-btn">add to wishlist</button>
                 <div class="product-info">
                     <h2 class="product-brand">brand</h2>
                     <p class="product-short-description">a short line about the cloth..</p>
                     <span class="price">$20</span><span class="actual-price">$40</span>
                 </div>
             </div>

         </div>
         <div class="product-card">
             <div class="product-image">
                 <span class="discount-tag">50% off</span>
                 <img src="simages/card7.jpg" class="product-thumb" alt="">
                 <button class="card-btn">add to wishlist</button>
                 <div class="product-info">
                     <h2 class="product-brand">brand</h2>
                     <p class="product-short-description">a short line about the cloth..</p>
                     <span class="price">$20</span><span class="actual-price">$40</span>
                 </div>
             </div>

         </div>
         <div class="product-card">
             <div class="product-image">
                 <span class="discount-tag">50% off</span>
                 <img src="simages/card8.jpg" class="product-thumb" alt="">
                 <button class="card-btn">add to wishlist</button>
                 <div class="product-info">
                     <h2 class="product-brand">brand</h2>
                     <p class="product-short-description">a short line about the cloth..</p>
                     <span class="price">$20</span><span class="actual-price">$40</span>
                 </div>
             </div>

         </div>
         <div class="product-card">
             <div class="product-image">
                 <span class="discount-tag">50% off</span>
                 <img src="simages/card9.jpg" class="product-thumb" alt="">
                 <button class="card-btn">add to wishlist</button>
                 <div class="product-info">
                     <h2 class="product-brand">brand</h2>
                     <p class="product-short-description">a short line about the cloth..</p>
                     <span class="price">$20</span><span class="actual-price">$40</span>
                 </div>
             </div>

         </div>
         <div class="product-card">
             <div class="product-image">
                 <span class="discount-tag">50% off</span>
                 <img src="simages/card10.jpg" class="product-thumb" alt="">
                 <button class="card-btn">add to wishlist</button>
                 <div class="product-info">
                     <h2 class="product-brand">brand</h2>
                     <p class="product-short-description">a short line about the cloth..</p>
                     <span class="price">$20</span><span class="actual-price">$40</span>
                 </div>
             </div>

         </div>
     </div>
 </section>
<!-- end of slider -->
    <!-- end of slider -->

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


    <!-- floating button1 -->
    <div class="fixed-action-btn" style="bottom:23%">
    <a  class="btn-floating btn-large blue tooltipped" href="#top" data-position="left" data-tooltip="Back to top">
    <i class="large material-icons">arrow_upward</i>
    </a>

    </div>
    <!-- end of floating button -->



    <!-- floating button2 -->
    <div class="fixed-action-btn" style="bottom:13%">
    <a  class="btn-floating btn-large green" href="stories/addstory.php">
    <i class="large material-icons">add</i>
    </a>

    </div>
    <!-- end of floating button -->


    <!-- floating button3 -->
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

<p>Why do we use it?
It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).Why do we use it?
It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).Why do we use it?
It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).Why do we use it?
It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).Why do we use it?
It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).Why do we use it?
It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).Why do we use it?
It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).Why do we use it?
It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).Why do we use it?
It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).Why do we use it?
It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).Why do we use it?
It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).Why do we use it?
It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).Why do we use it?
It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).Why do we use it?
It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).Why do we use it?
It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).Why do we use it?
It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).Why do we use it?
It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).Why do we use it?
It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).Why do we use it?
It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).Why do we use it?
It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).Why do we use it?
It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).Why do we use it?
It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
  <script>
    $(document).ready(function(){
      $('.modal').modal();
    });

    $(document).ready(function(){
   $('.tooltipped').tooltip();
 });
  </script>
    <script src="sliscript.js"></script>
    <script type="text/javascript">
    M.Sidenav.init(document.querySelector('.sidenav'));



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
