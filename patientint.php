<?php $con = mysqli_connect("localhost","root","","donation_procurement"); 

if(!$con){
        die("Could not connect: ". mysqli_connect_error());
}
  ?>

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
 body,html{
    height: 1054px;
  overflow-y: auto;



 }
 body::-webkit-scrollbar {
                display: none;
                height: 100vh;
                /* max-height: inherit; */
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
 </style>
  </head>
  <body style="background:white;height:1054px">
    <!--the navbar-->
    <!-- the nav bar -->
    <div class="navbar-fixed" >
      <nav class="bondi blue" style="color:#29ccf5">
       <div class="nav-wrapper container" >
         <p class="brand-logo center" style="color:white">Patient</p>

         <?php
         include "config/connection.php";
         $select="SELECT * FROM notifications WHERE active='1'";
         $query=mysqli_query($connection,$select);
         $count=mysqli_num_rows($query);


          ?>

         <ul class="dots " id="notifications" style="position: absolute;margin-left:80%">
        <li>
          <a href="#" >
            <span class="material-icons  dropdown-trigger" data-target='dropdown1'>notifications_active<mark><?php echo $count; ?></mark></span>
          </a>
        </li>
      </ul>

      <ul id='dropdown1' class='dropdown-content left'  data-constrainWidth="false" style="width: 300px !important;overflow-y:scroll;">
        <?php
              if ($count > 0) {
                foreach ($query as $item) {
              ?>
        <li><a href="#!"  data-constrainWidth="false"><strong><?php echo $item["notifications_name"]  ?></strong><br><?php echo $item["message"]; ?></a></li>
          <!-- <li class="divider" tabindex="-4"></li> -->
          <!-- <hr class="solid"> -->
      <?php }
    } else{?>
        <li><a href="#!" data-constrainWidth="false">You have no notifications yet!</a> </li>
<?php } ?>

      </ul>

         <a class="brand-logo right">
           <i class="material-icons" onclick="M.toast       ({html:'donation notifications here',classes: 'black darken-1 rounded',displayLength: 10000})" style="cursor:pointer">notifications_active<span class="new badge green"  style="margin-top:25%;cursor:pointer">4</span></i>
           <div class="chip" style="vertical-align:middle;">
      <img src="images/cute.jpg" alt="Contact Person">
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
  <img src="Home/images/background1.jpg">
 </div>
 <a href="#user"><img class="circle" src="simages/card3.jpg"></a>
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
    <!-- slider -->
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
                    <a class="new"><button class="card" style="border-radius: 50px;padding-top:3%;padding-bottom:3%;width:250px;margin-top:15%;margin-left:25%;padding-left:27px;">Request</button></a>
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
    <li><a href="http://wa.me/+256789274772" target="_blank" class="btn-floating green"><i class="material-icons"><img src="whats.svg" style="color:white"></i></a></li>
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
<div class="">
  &nbsp;
</div>
  <h1>Frequently asked questions</h1>
  <!-- section for the accordition -->
  <section >
    <div style="margin-left:-6%">


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
