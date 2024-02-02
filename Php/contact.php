<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Crown Bank</title>
    <link rel="shortcut icon" type="image/png" href="../images/FAVICON CROWN.png">
    <link rel="stylesheet" href="/css/contact.css">
    <link rel="stylesheet" href="/CSS/dark.css">
    <script src="/JS/dark.js" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
</head>
<body>
    <header>
        <i class="bi bi-brightness-high-fill" id="toggleDark"></i>

        <div class="nav">
            <a href="/Php/index.php">
                <img src="../images/logo1.png" class="logo">
            </a>
            <div class="item">
                <ul>
                    <li>
                        <a href="/php/account.php">Accounts</a>
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
                        <a href="#">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <!-- <img src="../images/Contact+Us.jpg" width="100%" height="75%"> -->
    <div class="parallax">
        <div id="text">We would love to hear from you</div>
    </div>
    <div class="crown">
        <h1 class="crown-name">Contact Crown Bank</h1>
    </div>
    <div class="grid1">
        <span class="grid2">
        <h1 class="grid-head">We are here ready to help you. Here are a few ways to reach us.</h1>
        <p class="ptag">We will make sure you get connected to the right banking representative.</p>
        <h1 class="grid-head">E-Mail</h1>
        <p class="ptag">E-mail us at</p>
        <p class="ptag"><a href="mailto:crownbankingofficial@gmail.com" class="link1">crownbankingofficial@gmail.com</a></p>
        <p class="ptag">Remember When Sending Email to Crown Bank, Do Not Send Any Personal Information Such as Addresses,
            Full Names, Account Numbers, Social Security Numbers or Any Other Information That Would Be Considered Personal</p><br>
            <h1 class="grid-head">Lost or Stolen Debit Card?</h1>
            <p class="ptag">To report a lost or stolen debit card please call 1-800-500-1044 or 561-383-3150</p><br>
            <h1 class="grid-head">Lobby Hours</h1>
            <p class="ptag">Monday to Friday: 9am – 4pm</p><br>
            <h1 class="grid-head">Drive Thru Hours</h1>
            <p class="ptag">Monday to Friday: 8:30am – 5pm</p> 
        </span>
        <span class="grid3">
            <h1 class="grid-head">Contact us</h1>
            <marquee behavior="scroll" direction="left" scrollamount="5">
                Fields marked with * are mandatory
            </marquee>
            <form action="/Php/contactus.php" method="post">
                <div class="formbody">
                    <label for="name">Your name<span class="sp1">*</span></label><br><br>
                    <input class="txt" type="text" id="name" name="name" oninput="validateAlphabet(event)" required><br><br>

                    <input type="radio" id="customer" name="customer" value="New Customer">
                    <label for="new customer">New Customer</label>

                    <input type="radio" id="customer" name="customer" value="Existing Customer">
                    <label for="existing customer">Existing Customer</label><br><br>

                    <label for="phno">Phone<span class="sp1">*</span></label><br><br>
                    <input class="txt" type="text" id="name" name="phoneno" pattern="[0-9]{10}" oninput="validateNumber(event)" required><br><br>
                    
                    <label for="email">Email<span class="sp1">*</span></label><br><br>
                    
                    <input class="txt" type="email" id="name" name="email" required><br><br>

                    <p class="ptag">Preferred method to reach you during business hours</p>

                    <input type="radio" id="contactmode" name="contactmode" value="Email">
                    <label for="email">Email</label>
                    <input type="radio" id="contactmode" name="contactmode" value="Telephone">
                    <label for="telephone">Telephone</label><br><br>

                    <p class="ptag">I'm interested in discussing:</p>

                    <input type="checkbox" id="Personal Loans" name="interested[]" value="Personal Loans">
                    <label>Personal Loans</label><br><br>

                    <input type="checkbox" id="Business Loans" name="interested[]" value="Business Loans">
                    <label>Business Loans</label><br><br>

                    <input type="checkbox" id="Cash Management Services" name="interested[]" value="Cash Management Services">
                    <label>Cash Management Services</label><br><br>

                    <input type="checkbox" id="Online/Mobile Banking" name="interested[]" value="Online/Mobile Banking">
                    <label>Online/Mobile Banking</label><br><br>

                    <button type="submit" class="btn" >SUBMIT</button>
                </div>
            </form>
        </span>
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
    <script src="/JS/CrownBankLogin.js"></script>
    <script src="/JS/formval.js"></script>
</body>
</html>