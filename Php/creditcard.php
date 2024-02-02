<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payments - Pay Credit card bills online</title>
    <link rel="shortcut icon" type="image/png" href="../images/FAVICON CROWN.png">
    <link rel="stylesheet" href="/CSS/credit.css">
</head>
<body>
    <div class="container">
        <header>
            <div class="nav">
                <a href="/Php/index.php">
                <img src="../images/logo1.png" class="logo">
                </a>
                <div class="main">
                    <div class="dropdown">
                        <button>Accounts</button>
                        <div class="sub">
                        <a href="/php/home1.php">Account Balance</a>
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
                        <a href="/php/billfirst.php">Payments</a>
                        <a href="#">Credit card bill payment</a>
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
        <div class="hero">
            <div class="hero-img">
                <img src="../images/herocredit.jpg">
            </div>
            <h2 class="hero-text">Pay your credit card bills online effortlessly and save time with our hassle-free payment options!</h2>
        </div>
        <div class="content-list">
            <ul>
                <a href="#overview">
                    <li class="list">Overview</li>
                </a>
                <a href="#benefits">
                    <li class="list">Benefits</li>
                </a>
                <a href="#services">
                    <li class="list">Services</li>
                </a>
            </ul>
        </div>
        <div class="credit" id="overview">
            <div class="credits">
                <h1 class="ctitle">Credit Card Bill Payment</h1>
                <p class="card-content">
                    Say goodbye to long queues and hassles of bill payments. 
                    Pay your credit card bills online with us and enjoy convenience, security, and savings! 
                    Make the smart choice today and experience hassle-free banking with us.
                </p>
            </div>
        </div>
        <div class="benefit" id="benefits">
            <h2>Benefits</h2>
            <div class="benefits">
                <div class="one">
                    <div class="image">
                        <img src="../images/convenience.png" width="80px" height="80px" style="margin-left: 20px;">
                    </div>
                    <p class="ben">Convenience</p>
                </div>
                <div class="one">
                    <div class="image">
                        <img src="../images/savetime.png" width="80px" height="80px">
                    </div>
                    <p class="ben">Time-saving </p>
                </div>
                <div class="one">
                    <div class="image">
                        <img src="../images/costeff.png" width="80px" height="80px">
                    </div>
                    <p class="ben">Cost-effective</p>
                </div>
                <div class="one">
                    <div class="image">
                        <img src="../images/secure.png" width="80px" height="80px">
                    </div>
                    <p class="ben">Secure</p>
                </div>
            </div>
        </div>
        <div class="service1" id="services">
            <h1 class="ser-title">SERVICES</h1>
            <div class="services">
                <div class="service">
                    <div class="service-image">
                        <img src="../images/service.jpg" class="serimg">
                    </div>
                    <div class="service-content">
                        <h2 class="subtitle">Net Banking or Debit Card Payments</h2>
                        <p class="scontent">
                            At Crown Bank, you can also make credit card payment through 
                            <span id="stext">debit card or net banking</span> using
                            the bank account of your choice either through net banking or 
                            using your debit card details.
                        </p>
                        <a href="/php/creditbill.php">
                            <button type="submit" class="paybtn">Pay(Debit Card)</button>
                        </a>
                        <a href="/php/netcreditbill.php">
                            <button type="submit" class="paybtn1">Pay(Net Banking)</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="services">
                <div class="service">
                    <div class="service-content">
                        <h2 class="subtitle">UPI Payments</h2>
                        <p class="scontent">
                            Credit card bill payment using UPI is a quick, hassle-free 
                            and secure way to pay your credit card bills.Follow the below given steps to make payment:
                            <ul>
                                <li id="list1">Open your UPI app and select credit card bill payment</li>
                                <li id="list">Enter your credit card number and bill amount</li>
                                <li id="list">Verify the payment details and confirm the payment</li>
                            </ul>
                        </p>
                    </div>
                    <div class="service-image">
                        <img src="../images/UPI.jpg" class="serimg">
                    </div>
                </div>
            </div>
            <div class="services">
                <div class="service">
                    <div class="service-image">
                        <img src="../images/neft.jpg" class="serimg">
                    </div>
                    <div class="service-content">
                        <h2 class="subtitle">IMPS/NEFT Payments</h2>
                        <p class="scontent">
                            Clear your credit card bill payment by using the fund transfer option too.
                            Make instant payments via IMPS/NEFT using the below mention Payee/Beneficiary details:
                            <ul>
                                <li id="list1">
                                    <span id="stext">Payee Name: </span>Name as on your Crown Bank Credit Card 
                                </li>
                                <li id="list">
                                    <span id="stext">Payee Account Number: </span>Your 16-digit Crown Bank Credit Card number
                                </li>
                                <li id="list">
                                    <span id="stext">Bank Name: </span>Crown Bank 
                                </li>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>
            <div class="services">
                <div class="service">
                    <div class="service-content">
                        <h2 class="subtitle">Other payment options</h2>
                        <p class="scontent">
                             In addition to the online credit card payment options, you can also pay your 
                             credit card bills through offline mode :
                            <dl class="others">
                                <dt id="oneot">Cash Deposit</dt>
                                <dd>Visit the neaest Crown Bank branch to make your credit card bill payment
                                    by depositing cash into your Credit card account with your name and account number.
                                </dd>
                                <dt id="twoot">Cheque</dt>
                                <dd>Drop a cheque drawn in favour of 16-digit Crown Bank Credit Card number</dd>
                            </dl>
                        </p>
                    </div>
                    <div class="service-image">
                        <img src="../images/bank.png" class="serimg">
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="foot">
                <div class="foot-mid">
                    <div class="social-links">
                        <p class="soc-link">CONNECT WITH US ON</p>
                        <ul>
                            <li>
                                <a class="pic-link" href="https://www.facebook.com/">
                                    <img src="../images/facebook.png" width="34">
                                </a>
                            </li>
                            <li>
                                <a class="pic-link" href="https://twitter.com/">
                                    <img src="../images/twitter.png" width="34">
                                </a>
                            </li>
                            <li>
                                <a class="pic-link" href="https://www.youtube.com/">
                                    <img src="../images/youtube.png" width="34">
                                </a>
                            </li>
                            <li>
                                <a class="pic-link" href="https://www.instagram.com/">
                                    <img src="../images/instagram.png" width="34">
                                </a>
                            </li>
                            <li>
                                <a href="/php/disclaimer.php">
                                    <p class="link">Disclaimer</p>
                                </a>
                            </li>
                            <li>
                                <a href="/php/privacy.php">
                                    <p class="link">Privacy Policy</p>
                                </a>
                            </li>
                            <li>
                                <a href="/php/terms&conditions.php">
                                    <p class="link">Terms & Conditions</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="foot-right">
                    <P>Always use the customer care numbers displayed on Bank's official website.
                        Do not access unknown website links.
                    </P>
                </div>
                <div class="copyright">
                    <p class="copy">CopyRights &copy 2023 CrownBank <span class="copy1">|</span> <span>Right Bank Right Now</span> <span class="copy1">|</span>  All Rights Reserved </p>
                </div>
            </div>
          </footer>
    </div>
    <script src="/JS/logout.js"></script>
</body>
</html>