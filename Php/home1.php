<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Accounts</title>
    <link rel="shortcut icon" type="image/png" href="../images/FAVICON CROWN.png">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="/CSS/home1.css">
    
</head>
<body>
        <header>
            <div class="nav">
                <a href="/Php/index.php">
                <img src="../images/logo1.png" class="logo">
                </a>
                <div class="main">
                    <div class="dropdown">
                        <button>Accounts</button>
                        <div class="sub">
                        <a href="#">Account Balance</a>
                        <a href="/php/summary1.php">Transactions</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button>Loans</button>
                        <div class="sub">
                        <a href="/php/personal.php">Personal Loan</a>
                        <a href="/php/homeloan.php">Home Loan</a>
                        <a href="/php/carloan.php">Car Loan</a>
                        <a href="/php/education.php">Education Loan</a>
                        <a href="/php/gold.php">Gold Loan</a>
                        <a href="/php/loanform.php">Loan Application form</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button>Bill Payment</button>
                        <div class="sub">
                        <a href="/php/billfirst.php">Payment</a>
                        <a href="/php/creditcard.php">Credit card bill payment</a>
                        <a href="/php/billpayment.php">Bill payments and recharge</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button>Transfer</button>
                        <div class="sub">
                        <a href="/php/fundtransfer.php">Fund Transfer</a>
                        </div>
                    </div>
                    <div class="logout">
                        <a href=""><img src="../images/logout.png" id="logoutBtn"></a>
                    </div>
                </div>           
            </div>
        </header>
        <div class="profile">
            <div class="img">
                <img src="../images/usericon.png" class="image">
            </div> 
            <div class="content">
                <p><b>Name:</b>Aravind<br><br>
                    <b>Email id:</b> aravind123@gmail.com
                </p>
            </div>
        </div>
        <div class="out">
            <div class="tranacc">
                <h2>Transaction Accounts</h2>
            </div>
            <div class="ele">
                <div>
                    <p>Account No./Name</p>
            
                </div>
                <div>
                    <p>Branch</p>
                </div>
                <div>
                    <p>Available Balance</p>
                </div>
                <div>
                    <p>Transactions</p>
                </div>
            </div>
        <hr>
            <div class="ele">
                <div>
                    <span>3214567890</span>
                </div>
                <div>
                    <p>ARUMBAKKAM</p>
                </div>
                <div>
                    RS.1500
                </div>
                <div>
                    <p><a href="/php/summary1.php" style="text-decoration: none;">click here for last 10 Transaction</a></p>
                </div>
            </div>
        </div>
        <footer class="copyright">
            <p class="copy">CopyRights &copy 2023 CrownBank <span class="copy1">|</span> <span>Right Bank Right Now</span> <span class="copy1">|</span>  All Rights Reserved </p>
        </footer>
        <script src="/JS/logout.js"></script>
</body>
</html>