<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pay Credit Card Bill</title>
    <link rel="shortcut icon" type="image/png" href="../images/FAVICON CROWN.png">
    <link rel="stylesheet" href="/CSS/billnet.css">
</head>
<body>
    <div class="container">
        <header>
            <div class="nav">
                <a href="/Php/index.php">
                    <img src="../images/logo1.png" class="logo">
                </a>
                <h1 class="heading">CREDIT CARD BILL PAYMENT</h1>
                <div class="btn">
                    <a href="/php/creditcard.php">
                        <button type="submit" class="back">GO BACK</button>
                    </a>
                </div>
            </div>
        </header>
        <div class="formcontainer">
            <h2 class="formtitle">Make Payment</h2>
            <form id="cform" action="/Php/netcreditbill1.php" method="post">
                <div class="formcon">
                    <label for="cnum">Credit Card number : </label>
                    <input type="text" id="cnum" class="cnum" name="cnum" placeholder="Enter 16-digit credit card number" pattern="[0-9]{16}" oninput="validateNumber(event)" required>
                </div>

                <div class="formcon">
                    <label for="rcnum">Re-enter Credit Card number : </label>
                    <input type="text" id="rcnum" class="cnum" name="rcnum" placeholder="Re-enter credit card number" pattern="[0-9]{16}" oninput="validateNumber(event)" required>
                </div>

                <div class="formcon">
                    <label for="amt">Bill Amount : </label>
                    <input type="text" id="amt" name="amt" placeholder="Enter bill amount to pay" oninput="validateNumber(event)" required>
                </div>

                <div class="formcon">
                    <button type="submit" class="paybutton" onclick="validateForm(event)">Pay Now</button>
                </div>
                <script src="/JS/formval.js"></script>
            </form>
        </div>
        <div class="copyright">
            <p class="copy">CopyRights &copy 2023 CrownBank <span class="copy1">|</span> <span>Right Bank Right Now</span> <span class="copy1">|</span>  All Rights Reserved </p>
        </div>
    </div>
    
</body>
</html>