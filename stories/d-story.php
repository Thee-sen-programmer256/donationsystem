

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
    <div>
        <h2 style="color: blue; font-size:38px;padding:2.5rem; text-align:center; ">DONATE</h2>
    </div>

<div class="olycash-pay olycash--window" style="width:100% !important;" data-ignorefrequency="Y" data-id="1344FC3_205463" style="text-align: ;"> 
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