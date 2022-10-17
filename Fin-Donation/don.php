<?php
    $con = mysqli_connect("localhost","root","","donation_procurement");

    // session_start();
    // if(!isset($_SESSION['email'])){
    //    header("Location: Home/login.php");
    // }

    if(!$con){
        die("Could not connect: ". mysqli_connect_error());
    }else{
       echo "successful connected";
    }


    // Assigning input data into a variable then inserting it into the database
if(isset($_POST["submit"])){
    $fname= $_POST["fname"];
    $lname= $_POST["lname"];
    $contact= $_POST["contact"];
    $amount= $_POST["amount"];
    $display= $_POST["display"];
    $email= $_POST["email"];
    $status=$_POST["statuss"];

$sql = "INSERT INTO donation(fname,lname,contact,amount,display,email,statuss)VALUE('$fname','$lname','$contact','$amount','$display','$email','$status')";
//echo $sql;
// excecuting the query
if(mysqli_query($con,$sql)){

    ?>
    
    <script type="text/javascript">
        alert("Donation Successfully Added");
        window.location= "don.php";
    </script>
    <?php 
    }else{
    echo mysqli_error($con);
    }
    
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Donate</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');

        :root{
        --mainclr:#0071b5;
        --secclr:#fff;
        --third:#DFE4E0;
        --mainafterclr:hsl(167, 81%, 79%);
        }
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        body{
            background: rgb(244, 242, 242);
        }
        html{
            font-size: 62.5%;
            
        }
          /* Header */
    .header{
        padding: 1rem 7%;
        background-color: var(--mainclr);
        display: flex;
        justify-content: space-between;
        align-items: center;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 1000;
    }
    .header .logo{
        display: inline-flex;
    }
    .header #logo{
        width: 50px;
    }
    .header .logo h2{
        color: var(--secclr);
        padding: 1.5rem;
        font-size: 30px;
        font-weight: lighter;
    }
    .navbar a{
        color: white;
        font-size: 1.5rem;
        margin-left: 2rem;
        position: relative;
        text-decoration: none;
    }
    .navbar a:after{
        content: '';
        background: var(--secclr);
        width: 0;
        height: 3px;
        position: absolute;
        top: 100%;
        left: 0;
        margin-top: 5px;
        transition: .3s;
    }
    .navbar a:hover:after{
        content: '';
        background: var(--secclr);
        width: 100%;
        height: 3px;
        position: absolute;
        top: 100%;
        left: 0;
        margin-top: 5px;
    }
    .icons div{
        font-size: 2rem;
        margin-right: 1rem;
        color: white;
        display: none;
    }
    .icons label{
        color: white;
        background: var(--secclr);
        padding: 1.5rem 3rem;
        font-size: 1.5rem;
        border-radius: 10px;
        transition: .5s;
    }
    input[type="checkbox"]{
        display: none;
    }
    .container{
        position: absolute;
        top: 100%;
        left: 87%;
        transform: translate(-50%, -50%);
        display: none;
        background: #fff;
        width: 320px;
        padding: 30px;
        box-shadow: 0 0 8px rgba(0,0,0,0.1);
        border-radius: 10px;
        color: #000;
    }
    #show:checked ~ .container{
        display: block;
    }
    .container .close-btn{
        position: absolute;
        right: 20px;
        top: 15px;
        font-size: 18px;
        cursor: pointer;
        color: #000;
    }
    .container .close-btn:hover{
        color: #000;
    }
    .container .text{
        font-size: 18px;
        font-weight: 600;
        text-align: center;
        display: block;
        color: #000;
    }
    #signup{
        padding: 0.5rem;
        text-decoration: none;
        color: #0071b5;
        text-align: center;
        font-size: 20px;
        font-weight: 800;
    }
    #signup:hover{
        color: #fff;
        background: #0071b5;
        border-radius: 6px;
        
    }
    .icons label:hover{
        background: transparent;
        border: 1px solid var(--secclr);
    }
    .navbar.active{
        clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
    }
        .donation-container{
            position: relative;
            padding: 2rem;
            margin-top: 14rem;
            margin-left: 30px;
            margin-right: 30px;
            /* box-shadow: 10px 10px 8px 10px #888888; */
            background: #fff;
        }
        #main-h2{
            font-size: 25px;
            font-weight: 600;
            text-align: center;
        }

        .details, .paypal, .supporter{
            margin-top: 25px;
            padding: 2rem;
            margin-left: 30px;
            margin-right: 30px;
            background: #fff;
        }

        .details .formBox{
            position: relative;
            width: 100%;
        }
        .inputBox{
            display: flex;
            flex-direction: column;
            margin-bottom: 10px;
            width: 50%;
        }
        .inputBox span{
            color: #0071b5;
            margin-top: 10px;
            margin-bottom: 5px;
            font-weight: 500;
            font-size: 1.3em;
        }
        .inputBox input{
            padding: 10px;
            font-size: 1.2rem;
            outline: none;
            border: 1px solid #333;
        }
        .inputBox input[type="submit"]{
            background: #ff578b;
            color: #fff;
            border: none;
            font-size:1.3em ;
            max-width: 120px;
            font-weight: 500;
            cursor: pointer;
            padding: 14px 15px;
        }
        .inputBox ::placeholder{
            color: #999;
        }
        label{
            font-size: 13px;
        }
        .supporter{
            max-height: fit-content;
        }
        .supporter .table{
            position: relative;
            left: 25%;
            text-align: center;
        }
        .supporter .table table{
            width: 50%;   
            font-size: 15px;
            justify-content: center;
            border: 1px solid;
            border-color: #333;
            border-collapse: collapse;
        }
        table .field{
            background: #000;
            color: #fff;
        }
        tr{
            font-weight: 500;
        }
        .footer{
        padding: 6rem 7%;
        background: var(--third);
        margin-top: 4rem;
    }
    .main-footer{
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 20px;
        flex-wrap: wrap;
    }
    .inner-footer{
        flex: 1 1 200px;
    }
    .inner-footer h2{
        font-size: 2rem;
        color: black;
    }
    .inner-footer a{
        font-size: 1.5rem;
        font-weight: bolder;
        color: black;
        display: block;
        margin-top: 1rem;
        padding-top: 1rem;
        text-decoration: none;
    }
    .inner-footer a:hover{
        margin-left: 10px;
    }
    
    
    /* width */
    ::-webkit-scrollbar {
        width: 20px;
    }
    
    /* Track */
    ::-webkit-scrollbar-track {
        box-shadow: inset 0 0 5px var(--mainclr); 
        background: var(--mainclr);
    }
    
    /* Handle */
    ::-webkit-scrollbar-thumb {
        background: var(--secclr); 
        border-radius: 10px;
    }
    
    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
        background: var(--third); 
    }


        

    </style>

</head>
<body>
    <header class="header">
        <div class="logo">
            <img src="logo.png" id="logo" alt="">
            <h2>OrgDon</h2>
        </div>
        
  
        <nav class="navbar">
            <a href="../Home/index.html">home</a>
            <a href="../About-us-page/about-us.html">about</a>
            <a href="../Services page/services.html">services</a>
            <a href="../Gallery page/gallery.html">gallery</a>
            <a href="../Contact page/contact.html">contact</a>
        </nav>
  
        <div class="icons">
            <label for="" style="color: #000;"><a class="login" href="../Home/login.php" style="text-decoration: none;color:#000;">Login</a></label>
            <div id="menubar" class="fas fa-bars"></div>
            <input type="checkbox" id="show">
            <label for="show" style="color: rgb(3, 3, 4);">Sign-up</label>
            <div class="container">
                <label for="show" class="close-btn fas fa-times" title="close"></label>
                <div class="text">
                    Sign-up <br><br>
                   
                    <a id="signup" href="../patientreg.html">Patient</a> |
                    <a id="signup" href="../donorreg.html">Donor</a>
                    
                </div>
 
            </div>
        </div>
    </header>

    <div class="donation-container">
        <h2 id="main-h2">Send your Donation</h2>
        <table class="olycash-amount-entry-form" style="border-collapse: collapse !important;border:0px !important; min-width:100px !important;max-width:250px !important;margin-bottom:10px;background:none !important;">
            <tr style="background:none !important;">
                <td style="background:none !important;border:0px !important;font-weight:bold;font-family: Arial, sans-serif; font-size: 17px;padding:0px;margin:0px;white-space:nowrap;width:1%;">Amount: </td>
                <td style="background:none !important;border:0px !important;padding:0px;margin:0px;">
                    <select id="olycash__tempcurrency_1662486187" name="olycash__tempcurrency_1662486187" class="__olycash-temp-currency-field" style="width:85px !important;min-height:42px !important;height:42px !important;padding:10px 5px 10px 5px !important;border: 1px solid #B2B2B2 !important; background-color: #FFFFFF !important;font-family: Arial, sans-serif !important; font-size: 17px !important;">
                    </select>
                </td>
                <td style="background:none !important;border:0px;padding:0px;margin:0px;">
                    <input type="text" id="olycash__temptotal_1662486187" name="olycash__temptotal_1662486187" style="width:100px !important;min-height:42px !important;height:42px !important;padding:10px !important;border: 1px solid #B2B2B2 !important; background-color: #FFFFFF !important;font-family: Arial, sans-serif !important; font-size: 17px !important;" class="__olycash-temp-amount-field" placeholder="0.00" maxlength="12">
                </td>
            </tr>
        </table><!-- END OPTIONAL -->
    
                <!-- Your share code -->
                <div class="olycash-pay olycash--window" style="width:100% !important;" data-ignorefrequency="Y" data-id="1344FC3_205463"> 
                    <!-- Update the field value to add payment details. Full list of fields or help: https://olycash.com/plugin --> 
                    <input type="hidden" id="olycash__category" name="olycash__category" value="156"/>
                    <input type="hidden" id="olycash__total" name="olycash__total" value="0.01"/>
                    <input type="hidden" id="olycash__currency" name="olycash__currency" value="USD"/>
                    <input type="hidden" id="olycash__third_party_fee_paid_by" name="olycash__third_party_fee_paid_by" value="payee"/>
                </div> 
                
                <noscript>
                    You need JavaScript enabled to with OlyCash.
    
                </noscript>
                
                <!-- Load OlyCash JavaScript SDK --> 
                <script>(function(d, s, id) {var js, ojs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id)) return;
                    js = d.createElement(s); 
                    js.id = id;js.src = "https://share.olycash.com/en-us/sdk.js";
                    ojs.parentNode.insertBefore(js, ojs);
                    }(document, 'script', 'olycash-js-sdk'));
                </script>
    </div>

    <div class="details">
        <h2 id="main-h2">Your details</h2>
        <form action="" method="post">
            <div class="inputBox">
                <span>First Name</span>
                <input type="text" placeholder="John" name="fname">
            </div>
            <div class="inputBox">
                <span>Last Name</span>
                <input type="text" placeholder="Doe" name="lname">
            </div>
            <div class="inputBox">
                <span>Phone Number</span>
                <input type="text" placeholder="+256.." name="contact">
            </div>
            <div class="inputBox">
                <span>Confirm Amount</span>
                <input type="text" name="amount">
            </div>
        

            <label for="">Show my name on the supporters tab</label> 
            <select id="" style="background: #79c9fb;" name="display">
                <option value="yes">YES</option>
                <option value="no">NO</option>
            </select>  
            <div class="inputBox">
                <span>Email*</span>
                <input type="email" placeholder="johndoe@email.com" name="email">
            </div>
            <input type="hidden" name="statuss" value="Pending">
                
                    <div class="inputBox">
                        <input type="submit" value="submit" name="submit">
                    </div>
        
        </form>
    </div>

    <?php
        $result =" SELECT fname,lname,amount FROM donation WHERE display = 'yes' and statuss = 'confirmed'";
        $display=mysqli_query($con, $result);
    ?>

    <div class="supporter">
        <h2 id="main-h2">Supporters' Tab</h2>
        <div class="table">
            <table border="1">
                <tr class="field">
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Amount</th>
                </tr>   

                 <!-- Fetch data from notify table -->
            
                 <?php
                while ( $row=mysqli_fetch_assoc($display)) {

                    ?>               
                <tr style="text-align:center;">
                    <td><?php echo $row['fname'];  ?></td>
                    <td><?php echo $row['lname'];  ?></td>
                    <td><?php echo $row['amount'];  ?></td>
                </tr>
              <?php     }?>
            </table>
        </div>
    </div>

    <div class="footer">
        <div class="main-footer">
            <div class="inner-footer">
                <img src="logo.png" alt="">
            </div>
    
            <div class="inner-footer">
                <h2>More</h2>
                <a href="../more_pages/why-sign-up.html">Sign Up Now</a>
                <a href="../more_pages/how-organ-donation-works.html">How Donation Works</a>
                <a href="../more_pages/living-donation.html">Who Can Donate</a>
                <a href="../more_pages/get_involved.html">Get Involved</a>
                <a href="../Fin-Donation/don.php">Fundraise</a>
            </div>
    
            <div class="inner-footer">
                <h2>Navigation</h2>
                <a href="../Home/index.html">Home</a>
                <a href="../About-us-page/about-us.html">About</a>
                <a href="../Services page/services.html">Services</a>
                <a href="../Gallery page/gallery.html">Gallery</a>
                <a href="../Contact page/contact.html">Contact</a>
            </div>
    
            <div class="inner-footer">
                <h2>Info</h2>
                <a href="../more_pages/terms-and-conditions.html">Terms and Conditions</a>
                <a href="../more_pages/privacy-policy.html">Privacy Policy</a>
                <a href="#">Notice of Privacy Practices</a>
                <a href="#">Notice of Nondiscrimination</a>
                <a href="#">Back to Top</a>
            </div>
        </div>
    </div>
    
</body>
</html>