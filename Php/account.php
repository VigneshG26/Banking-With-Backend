<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accounts - Crown Bank</title>
    <link rel="shortcut icon" type="image/png" href="../images/FAVICON CROWN.png">
    <link rel="stylesheet" href="/css/account.css">
    <link rel="stylesheet" href="/CSS/dark.css">
    <script src="/JS/dark.js" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"/>
</head>
<body>
    <div class="container">
        <header>
            <i class="bi bi-brightness-high-fill" id="toggleDark"></i>
            <div class="nav">
                <a href="/Php/index.php">
                    <img src="../images/logo1.png" class="logo">
                </a>
                <div class="item">
                    <ul>
                        <li>
                            <a href="#">Accounts</a>
                        </li>
                        <li>
                            <a href="/php/loan.php">Loans</a>
                        </li>
                        <li>
                            <a href="/php/card.php">Cards</a>
                        </li>
                        <li>
                            <a href="/php/insurance.php">Insurance</a>
                        </li>
                        <li>
                            <a href="/php/about.php">About Us</a>
                        </li>
                        <li>
                            <a href="/php/contact.php">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        <div class="animation">

        </div>
        <div class="account">
            <div class="acctitle">
                <h1>Accounts</h1>
            </div>
            <div class="acccon">
                <p>Crown Bank offers different type of accounts to meet your financial goals
                    and secure your future. That's why, our savings and current accounts are specifically 
                    designed keeping your unique needs in mind.
                </p>
            </div>
        </div>
        <div class="reasons">
            <div class="reason-title">
                <h1>Reasons to bank with us</h1>
                <p class="redes">
                    Accessing your account is easy and convenient with our wide network of branches
                    and 24x7 ATMs across the country.  Your account is always at your fingertips with our Best
                    in net banking feature.
                </p>
            </div>
            <div class="reason-grid">
                <div class="image">
                    <img src="../images/healthcare.png" class="rimg">
                    <p class="imagedes">
                        Healthcare benefits for your safekeeping
                    </p> 
                </div>
                <div class="image">
                    <img src="../images/percenticon.png" class="rimg">
                    <p class="imagedes">
                        Earn 4% interest on your savings account balance
                    </p> 
                </div>
                <div class="image">
                    <img src="../images/group.png" class="rimg">
                    <p class="imagedes">
                        Our current account offers you perfect option based on your needs
                    </p> 
                </div>
                <div class="image">
                    <img src="../images/reloan.png" class="rimg">
                    <p class="imagedes">
                        Grow your business globally with our custom designed offerings
                    </p> 
                </div>
            </div>
        </div>
        <div class="acc-detail">
            Explore the different types of accounts as per your requirement...!
        </div>
        <div class="all-account">
            <div class="one">
                <div class="termimg">
                    <img src="../images/saveacc.jpg">
                    <h2>Savings Account</h2>
                </div>
                <div class="terminfo">
                    Choose a safe and reliable way to grow your money securely
                </div>
                <a href="/php/saving.php">
                    <button type="submit" class="sbn">Know More</button>
                </a>
            </div>
            <div class="one">
                <div class="termimg">
                    <img src="../images/current1.jpg">
                    <h2>Current Account</h2>
                </div>
                <div class="terminfo">
                    Hassle free and convenient transactionas as per your requirements
                </div>
                <a href="/php/current.php">
                    <button type="submit" class="sbn">Know More</button>
                </a>
            </div>
            <div class="one">
                <div class="termimg">
                    <img src="../images/termdepo.jpg">
                    <h2>Term Deposit</h2>
                </div>
                <div class="terminfo">
                    Long or short term, maximize your savings efficiently
                </div>
                <a href="/php/fixed.php">
                    <button type="submit" class="sbn">Know More</button>
                </a>
            </div>
        </div>
        <div class="contact-wrapper">
            <div class="box-wrapper">
                <div class="pic">
                    <img src="../images/manoverphone.jpg" class="mimg">
                </div>
                <div class="form-wrap">
                    <form action="/Php/callback.php" method="post">
                        <h2 class="form-title">Callback (Our team will call you back)</h2>
                        <div class="form-field">
                            <div class="form-head">
                                <input type="text" name="fname" class="fname" placeholder="First Name" oninput="validateAlphabet(event)" required>
                            </div>
                            <div class="form-head">
                                <input type="text" name="lname" class="lname" placeholder="Last Name" oninput="validateAlphabet(event)" required>
                            </div>
                            <div class="form-head">
                                <input type="text" name="contactnumber" class="conum" placeholder="Contact Number" pattern="[0-9]{10}" oninput="validateNumber(event)" required>
                            </div>
                            <div class="form-head">
                                <input type="email" name="email" class="mailid" placeholder="Email ID" required>
                            </div>
                            <div class="form-head">
                                <textarea name="query" placeholder="Type your Query"></textarea>
                            </div>
                            <input type="submit" class="submit-btn">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="contact">
            <div class="text">
                <h1 class="con-title">Contacts</h1>
            </div>
            <div class="main">
                <div class="box">
                    <img src="../images/mail icon.png" width="80px" height="80px">
                    <h1>Email </h1>
                    <p>crownbankingofficial@gmail.com</p>
                </div>
                <div class="box">
                    <img src="../images/icon8-location-50.png" width="80px" height="80px">
                    <h1>Office</h1>
                    <p>NO 833 E.V.R Periyar High Road<br>
                        Arumbakkam,<br>
                        Chennai 600 106, Tamil Nadu
                    </p>
                </div>
                <div class="box">
                    <img src="../images/icons8-phone-50.png" width="80px" height="80px">
                    <h1>Phone</h1>
                    <p>+91 9944758124</p>
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
</body>
    <script src="/JS/CrownBankLogin.js"></script>
    <script src="/JS/formval.js"></script>
</html>