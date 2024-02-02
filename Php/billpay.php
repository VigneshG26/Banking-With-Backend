<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pay Your Bills Online - Crown Bank</title>
    <link rel="shortcut icon" type="image/png" href="../images/FAVICON CROWN.png">
    <link rel="stylesheet" href="/CSS/billpay.css">
</head>
<body>
    <header>
        <div class="nav">
            <a href="/Php/index.php">
                <img src="../images/logo1.png" class="logo">
            </a>
            <h1 class="heading">UTILITY BILL PAYMENT</h1>
            <div class="btn">
                <a href="/php/billpayment.php">
                    <button type="submit" class="back">GO BACK</button>
                </a>
            </div>
        </div>
    </header>
    <form action="/Php/billpay1.php" method="post">
        <img src="../images/billpayment.jpg" width="100%" height="400px">
        <div class="container">
            <div class="item">
                    <h2 style="color: #003e7e;"><center>Bill Pay</center></h2>
                    <fieldset style="padding-bottom: 30px;">
                            <h3 style="color: #003e7e;">Bill Payment Details</h3><br>
                            <h4 style="color: #003e7e;">Customer Details</h4>
                            <hr>
                            <div class="cust">
                                <label>Payer Name <span style="color: red;">*</span></label>
                                <input id="name" type="text" name="name" oninput="validateAlphabet(event)" required>

                                <label style="margin-left: 200px;">Payer Email ID <span style="color: red;"> *</span></label>
                                <input id="email" type="email" name="email" required> <br><br>

                                <label style="margin-left: -30px;">Payer Mobile No <span style="color: red;">*</span></label>
                                <input id="phone" type="tel" name="phno" pattern="[0-9]{10}" oninput="validateNumber(event)" required> <br><br>

                                <label style="margin-left: -5px;">GSTN Status <span style="color: red;">*</span> </label>
                                
                                <input id="radio" type="radio" id="registered" name="gst" value="registered">
                                <label for="registered">Registered</label>

                                <input  type="radio" id="unregistered" name="gst" value="unRegistered">
                                <label for="unregistered">UnRegistered</label>

                                <label style="margin-left: 255px;">GST State</label>
                                <input  type="text" value="Tamil Nadu" disabled><br><br><br>

                            </div>
                            <h4 style="color: #003e7e;">Bill Details</h4>
                            <hr><br>
                            <div class="cust">
                                <label style="margin-left: -60px;">Select Biller Category <span style="color: red;"> *</span></label>
                                <select name="billcategory">
                                    <option value="All">All</option>
                                    <option value="electricity">Electricity</option>
                                    <option value="Gas">Gas</option>
                                    <option value="DTH">DTH</option>
                                    <option value="Water">Water</option>
                                    <option value="Rental">Rental</option>
                                </select>

                                <label style="margin-left: 260px;">State <span style="color: red;"> *</span></label>
                                    <input id="state" type="text" value="Tamil Nadu" disabled><br><br>

                                <label style="margin-left: -35px;">
                                    Type Billers Name<span style="color: red;">*</span></label>
                                    <input id="biller-name" type="text" name="billername" oninput="validateAlphabet(event)" required> 

                                <label style="margin-left: 245px;">Amount <span style="color: red;"> *</span></label>
                                    <input id="amount" type="text" name="amount" oninput="validateNumber(event)" required> <br><br><br><br>

                                <div class="submit-btn">
                                
                                <center> 
                                    <input type="submit" id="payment-btn" value="Pay Now" style="height:40px;"></button>
                                </center>
                            
                                </div>  
                            </div>
                    </fieldset >
            </div>
        </div>
    </form>
    <div class="copyright">
        <p class="copy">CopyRights &copy 2023 CrownBank <span class="copy1">|</span> <span>Right Bank Right Now</span> <span class="copy1">|</span>  All Rights Reserved </p>
    </div>
    <script src="/JS/billpayment.js"></script>
    <script src="/JS/formval.js"></script>
</body>
</html>