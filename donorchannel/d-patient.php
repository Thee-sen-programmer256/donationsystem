<?php
    $con = mysqli_connect("localhost","root","","donation_procurement");

    $pid = $_GET['pd'];
       
    
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
    </style>
</head>
<body>
    
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
    
</body>
</html>