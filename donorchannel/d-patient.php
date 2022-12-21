<?php
    $con = mysqli_connect("localhost","root","","donation_procurement");

    session_start();
    if(!isset($_SESSION['email'])){
       header("Location: ../Home/login.php");
    }

   


    // Assigning input data into a variable then inserting it into the database
if(isset($_POST["submit"])){
    $fname= $_POST["fname"];
    $lname= $_POST["lname"];
    $contact= $_POST["contact"];
    $fundraise_name= $_POST["fundraise_name"];
    $amount= $_POST["amount"];
    $display= $_POST["display"];
    $email= $_POST["email"];
    $status=$_POST["statuss"];

$sql = "INSERT INTO donation(fname,lname,contact,fundraise_name,amount,display,email,statuss)VALUE('$fname','$lname','$contact','$fundraise_name','$amount','$display','$email','$status')";
//echo $sql;
// excecuting the query
mysqli_query($con,$sql);

}
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
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
        .inputBox input,
        .inputBox select{
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
    </style>
</head>
<body>
    <div>
        <h2 style="color: blue; font-size:38px;padding:2.5rem; text-align:center; ">FUNDRAISE</h2>
    </div>

    <div class="details">
        <h2 id="main-h2">Your details</h2>
        <form action="" method="post">
            <div class="inputBox">
                <span>First Name</span>
                <input type="text" placeholder="John" name="fname" required>
            </div>
            <div class="inputBox">
                <span>Last Name</span>
                <input type="text" placeholder="Doe" name="lname" required>
            </div>
            <div class="inputBox">
                <span>Phone Number</span>
                <input type="text" placeholder="+256.." name="contact" required>
            </div>
            <div class="inputBox">
                <span>Choose who to fundraise for</span>
                <select name="fundraise_name" id="" required>
                    <option value="" style="color: grey;">--select--</option>
                <?php
                include "../config/connection.php";
        $sel="SELECT fundraise_name from fundraise";
        $query=mysqli_query($connection,$sel);
        $add=mysqli_num_rows($query);
        if ($add > 0) {
          foreach ($query as $item) {
         ?>
         
           
            <option value="<?php echo $item['fundraise_name']; ?>"><?php echo $item['fundraise_name']; ?></option>
        
         <?php } } ?>
         </select>
            </div>
            <div class="inputBox">
                <span>Confirm Amount</span>
                <input type="text" name="amount" required>
            </div>
        

            <label for="">Show my name on the supporters tab</label> 
            <select id="" style="background: #79c9fb;" name="display" required>
                <option value="yes">YES</option>
                <option value="no">NO</option>
            </select>  
            <div class="inputBox">
                <span>Email*</span>
                <input type="email" placeholder="johndoe@email.com" name="email" required>
            </div>
            <input type="hidden" name="statuss" value="Pending">
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

                
                    <div class="inputBox">
                        <a href="#fund"><input type="submit" value="submit" name="submit" ></a>
                    </div>
        
        </form>
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
    

    
</body>
</html>