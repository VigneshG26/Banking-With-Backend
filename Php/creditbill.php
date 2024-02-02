<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CROWN BANK</title>
    <link rel="shortcut icon" type="image/png" href="../images/FAVICON CROWN.png">
    <link rel="stylesheet" href="/CSS/creditbill.css">
</head>
<body>
    <div class="container">
        <hr size="8px" color="#003e7e">
        <header>
            <div class="heading">
                <div class="logo">
                    <img src="../images/logoaboutus.jpeg" id="logo">
                </div>
                <div class="head-content">
                    Pay your Crown Bank Credit Card Bills Online
                </div>
            </div>
        </header>
        <hr size="8px" color="#003e7e">
        <div class="form-container">
            <div class="formdiv">
                <p class="formtitle">Make Payment</p>
                <form id="payform" action="/Php/credbill1.php" method="post">
                    <div class="form-group">
                        <label for="name">Credit Card Number</label>
                        <input type="text" id="name" name="Card_Number" placeholder="Enter 16 digit credit card number" pattern="[0-9]{16}" oninput="validateNumber(event)" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="reenter">Re-enter Credit Card Number</label>
                        <input type="text" id="reenter" name="Re_Card" placeholder="Reenter card number" pattern="[0-9]{16}" oninput="validateNumber(event)" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Enter your email address" required>
                    </div>

                    <div class="form-group">
                        <label for="phone">Mobile Number</label>
                        <input type="text" value="+91" width="10px" disabled>
                        <input type="text" id="phone" name="Mob_num" placeholder="Enter mobile" pattern="[0-9]{10}" oninput="validateNumber(event)" required>
                    </div>

                    <div class="form-group">
                        <label for="amount">Amount</label>
                        <input type="text" id="amount" name="Amount" placeholder="Enter the payment amount" oninput="validateNumber(event)" required>
                    </div>

                    <div class="form-group">
                        <label for="card-number">Debit Card Number</label>
                        <input type="text" id="card-number" name="Debit_card" placeholder="Enter your card number" pattern="[0-9]{16}" oninput="validateNumber(event)" required>
                    </div>

                    <div class="form-group">
                        <label for="expiry-date">Expiry Date</label>
                        <input type="text" id="expiry-date" name="Exp_date" placeholder="MM/YY" required>
                    </div>

                    <div class="form-group">
                        <label for="cvv">CVV</label>
                        <input type="text" id="cvv" name="CVV" placeholder="Enter your card's CVV" pattern="[0-9]{3}" oninput="validateNumber(event)" required>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="paybutton">Submit Payment</button>
                    </div>
                </form>
            </div>
            <div class="form-image">
                <img src="../images/billpay.jpg">
            </div>
        </div>
        <div class="copyright">
            <p class="copy">CopyRights &copy 2023 CrownBank <span class="copy1">|</span> <span>Right Bank Right Now</span> <span class="copy1">|</span>  All Rights Reserved </p>
        </div>
    </div>
    <script src="/JS/creditcard.js"></script>
    <script src="/JS/formval.js"></script>
</body>
</html>