<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CROWN BANK</title>
    <link rel="shortcut icon" type="image/png" href="../images/FAVICON CROWN.png">
    <link rel="stylesheet" href="/CSS/index.css">
    <link rel="stylesheet" href="/CSS/dark.css">
    <script src="/JS/dark.js" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"/>
</head>
<body>
    <div class="preloader"></div>
    <div class="container">
        <header>
            <i class="bi bi-brightness-high-fill" id="toggleDark"></i>
            <div class="nav">
                <a href="/Php/index.php">
                    <img src="../images/logo1.png" class="logo">
                </a>
                <div class="item">
                    <ul>
                       <input type="search" id="search" placeholder="Search here...">
                        <button type="submit" id="button"><img src="../images/icons8-search-50.png" alt="" style="padding-top: 2px;width: 20px;"></button>
                        <li>
                            <a href="/php/account.php">Accounts</a>
                        </li>
                        <li>
                            <a href="loan.php" >Loans</a>
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
                                      
                        </li>
                        <li>
                            <a href="/php/contact.php">Contact Us</a>
                            
                        </li>
                        <li>
                    
                            <button id="button" onclick="log()" style="border-radius:10px;font-weight: bold;">LOGIN</button>
                    
                            <!-- The Overlay PopUp for SignUp and LogIn -->
                                
                                <div class="popup-container" id = "popup-container">
                                    
                                    <!-- SignUp Form -->
                                    <div class="form-container sign-up-container">
                                        <form action="/Php/insert.php" class="form-signUp" method="POST">
                                            <h1>Sign Up for NetBanking</h1>
                                            <input type="text" name="name" placeholder="Name" id = "name" class="sinup" oninput="validateAlphabet(event)" required>
                                            <input type="email"name="email" placeholder="Email" id="email" class="sinup" required>
                                            <input type="password" name="password" placeholder="Password" id="pass" class="sinup" required>
                                            <!--<input type="checkbox" name="terms" id="" value="Terms&Conditions">I Accept Terms&Conditions-->
                                            <button type="submit" style="cursor: pointer;margin-bottom: 20px;">Sign Up</button>
                                        </form>
                                    </div>

                                    <!-- SignIn Form -->

                                    <div class="form-container sign-in-container">
                                        <form action="/Php/login.php" class="form-signin" method="POST">
                                            <h1 style="margin-left: 120px;">LOGIN</h1>
                                            <input type="username" placeholder="User Name" id ="username" name="name" oninput="validateAlphabet(event)" required>
                                            <input type="password" placeholder="Password" id="password" name="password" required>
                                            <button type="logyn" value="login" style="cursor: pointer;margin-right: 100px;">Sign In</button>
                                        </form>
                                    </div>

                                    <!-- Overlays for the Forms -->
                                    <div class="overlay-container">

                                        <div class="overlay">

                                            <div class="overlay-panel overlay-left">
                                                <h1 style="justify-content: center;margin-right: 110px;">Welcome Back!</h1>
                                                <p style="margin-right: 110px;">To keep connected please enter your log in details.</p>
                                                <button class="ghost" id="signIn" style="cursor: pointer;margin-right: 100px;">Sign In</button>
                                            </div>

                                            <div class="overlay-panel overlay-right">
                                                <h1 style="margin-left: 100px;">Hello!</h1>
                                                <p style="margin-left: 100px;">Enter your details and start your journey</p>
                                                <button class="ghost" id="signUp" style="cursor: pointer;margin-left: 100px;">Sign Up</button>
                                            </div>

                                        </div>

pt src="/JS/LogValidate.js"></script>
                    </li>
                    </ul>
                </div>
                <div class="timecontainer">
                   TIME: <span id="hours">
                        00
                    </span>
                    <span>:</span>
                    <span id="minutes">
                        00
                    </span>
                    <span>:</span>
                    <span id="seconds">
                        00
                    </span>
                </div>
            </div>
        </header>
        <marquee behavior="" direction="left" style="color: red;padding: 5px;font-family: Arial, Helvetica, sans-serif;font-weight: bold;">CrownBank never asks for your Card/PIN/OTP/CVV details on phone, message or email. Please do not click on links received on your email or mobile asking your Bank/Card details.&nbsp;&nbsp;|&nbsp;&nbsp;Your Money is safe with Us</marquee>
        <div class="image">
            <img src="../images/log.jpg" alt="login" class="logimg">
        </div>
        <div class="msg">
            <p class="msg1">
                By clicking on "LOGIN" button, you agree to the terms and conditions of Internet banking with Crown Bank
            </p>
        </div>
        <div class="security">
            <div class="list">
                <p class="head">ALWAYS</p>
                <p class="head1">Keep your computer free of malware</p>
            </div>
            <div class="list">
                <p class="head">ALWAYS</p>
                <p class="head1">Change your passwords periodically</p>
            </div>
            <div class="list">
                <p class="head">NEVER</p>
                <p class="head1">Respond to any calls to seek your passwords</p>
            </div>
            <div class="list">
                <p class="head">NEVER</p>
                <p class="head1">Reveal your passwords or card details to anyone</p>
            </div>
        </div>
        <div class="welcome">
            <div class="welimg">
                <img src="../images/welcome.jpg" alt="welcome" class="welcome1">
            </div>
            <div class="welcome-con">
                <h2 class="title">Bank Profile</h2>
                <h3 class="title1">Welcome to Crown Bank</h3>
                <p class="content">
                    The bank that carries with a tradition and yet is young enough
                    to adapt itself to the rapidly changing scenario on the banking industry.
                </p>
                <h2 class="title">Our Vision</h2>
                <p class="content">
                    Delight our customers continuously by blending tradition with technology to deliver innovative
                    products and services at affordable rates through a pan India branch network.
                </p>
            </div>
        </div>
        <div class="products">
            <h3 class="pro-header">Products to meet your life goals</h3>
            <div class="product">
                <div class="pro1">
                    <img src="../images/card.png" class="pro-img">
                    <p class="pro-con">Credit cards</p>
                </div>
                <div class="pro1">
                    <img src="../images/loan.png" class="pro-img">
                    <p class="pro-con">Home Loan</p>
                </div>
                <div class="pro1">
                    <img src="../images/fixed.png" class="pro-img">
                    <p class="pro-con">Fixed Deposit</p>
                </div>
                <div class="pro1">
                    <img src="../images/low interest.png" class="pro-img">
                    <p class="pro-con">Low interest rates</p>
                </div>
            </div>
        </div>
        <div class="review">
            <h3 style="padding: 20px;color: white;">Hear From Our Happy Customers</h3>
            <div class="revbox">
                
                <div class="revbx1">
                    <p>"@Crown Bank's_Help...My Hearliest 
                    thanks to Aravind Sir from Crown Bank
                    for helping me and resolving the issue 
                    in timely manner.
                    Appreciated!!" </p>
                    <div id="bold1"><p id="bold">Vivek Anand | 14 March 2023</p></div>
                </div>
                <div class="revbx2">
                   <p>
                    "Thank you Pauline for upfront 
                    service relating for home loan.It 
                    was quick response time from your 
                    end.Thanks for the effort. "
                   </p>
                   <div id="bold1" ><p id="bold">Sivaranjini | 12 March 2023</p></div>
                </div>
                <div class="revbx3">
                    <p>
                        "Appreciate your concern and 
                         handling efficiency with customer like me. 
                        We also appreciates CROWN'S 
                         Transparency with thier customer and gfast solution of 
                          any kind of services"
                    </p>
                    <div id="bold1"><p id="bold">Harrish Karthi | 08 March 2023</p></div>
                </div>
                <div class="revbx4">
                    <p>
                        "Dear CROWN Bank Team, 
                        Thanks for your call and below 
                        message.I am happy that my 
                        query has been solved and that i
                        will be receiving new debit card
                        with my full name... "
                    </p>
                    <div id="bold1"><p id="bold">Vignesh | 06 March 2023</p></div>
                </div>
            </div>
        </div>
        <div class="services">
            <h1 id="title">SERVICES OFFERED</h1>
        </div>
        <div class="service">
            <div class="ser1">
                <div class="serbx1">
                    <div id="serbx1">
                    <h3 style="color: whitesmoke;text-transform: uppercase;">Managing Accounts</h3>
                       
                            <p style="color: white;font-weight: 600;">Get all your account related information on Crow Bank Online.You Can now</p>
                        <ul style="color: white;font-weight: 600;">
                            <li>Check Balance</li>
                            <li>View last 5 transactions</li>
                            <li>Check credit card details</li>
                        </ul>
                    </div>
                       <div class="sticks"> <img src="../images/user.png"></div>
                </div>
                <div class="serbx2">
                    <div id="serbx2">
                        <h3 style="color: whitesmoke;text-transform: uppercase;">Recharge Mobiles/DTH Connections</h3>
                        <p style="color: white;font-weight: 600;">Say good bye to running out of talk time or missing 
                            your favorite shows by recharging your prepaid mobile 
                            and DTH connection on the go and at your own comfort with Crown Bank </p>
                     </div>
                        <div class="sticks"> <img src="../images/recharge.jpg"></div>
                </div>
            </div>
            <div class="ser2">
                <div class="serbx3">
                    <div id="serbx3">
                        <h3 style="color: whitesmoke;text-transform: uppercase;">Pay Utility Bills</h3>
                        <p style="color: white;font-weight: 600;">With the convenience of Crown Bank Internet Banking on your mobile, you can pay your bills anytime, from anywhere.
                            Avoid long queues by registering your billers and pay all your utilitybills like mobile,gas etc.. on time.</p>
                    </div>
                        <div class="paystick"><img src="../images/bill.png"></div>
                </div>
                <div class="serbx4">
                    <div id="serbx4">
                        <h3 style="color: whitesmoke;text-transform: uppercase;">Credit Cards Payments</h3>
                        <p style="color: white;font-weight: 600;"> Crown Bank Credit Card bring to you convenience coupled with absolute safety and unparalleled discounts. In addition, 
                            we have taken a step further to provide you convenience on the go.</p>
                    </div>
                        <div class="sticks"><img src="../images/credit.png"></div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="footcontainer">
                <div class="search">
                    <h2 style="color: white;font-family: Arial, Helvetica, sans-serif;"> Sign up for exclusive offers <br> and inspiration:</h2><br>
                    <form action="/Php/exclusiveoffer.php" method="post">
                        <input type="email" name="email" id="mailform" placeholder="Enter Email Address">
                        <input type="submit" value="SUBMIT" onclick="mailcaptured()">
                    </form>
                </div>
                <div class="socialcontainer">
                <div class="socialmedia">
                    <h3>Follow Us:</h3>
                    <a href="https://www.youtube.com/"><img src="../images/youtube.png" alt="" class="icon"></a>
                    <a href="https://www.instagram.com/"><img src="../images/instagram.png" alt="" class="icon"></a>
                    <a href="https://twitter.com/?lang=en"><img src="../images/twitter.png" alt="" class="icon"></a> 
                    <a href="https://www.facebook.com/"><img src="../images/facebook.png" alt="" class="icon"></a> 
                </div>
                </div>
                <div class="terms">
                    <ul>
                        <li>
                            <a href="#">HOME</a>
                        </li>
                        <li>
                            <a href="./terms&conditions.php">TERMS & CONDITIONS</a>
                        </li>
                        <li>
                            <a href="tel:9500000911">CUSTOMER CARE</a>
                        </li>
                        <li>
                            <a href="/php/disclaimer.php">DISCLAIMER</a>
                        </li>
                        <li>
                            <a href="/php/privacy.php">PRIVACY POLICY</a>
                        </li>  
                    </ul>
                </div>
                <div class="contactinfo">
                    <div class="contact">
                        <ul>
                            <li><img src="../../images/icons8-phone-50.png" alt=""><a href="tel:9944758124">+919500000911</a></li>
                            <li><img src="../../images/mail icon.png" alt=""><a href="mailto:crownbankingofficial@gmail.com">crownbankingofficial@gmail.com</a></li>
                            <li style="color: white; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;"><img src="..../images/icon8-location-50.png" alt=""><a href=""></a>No #833, E.V.R. Periyar High Road,<br> Arumbakkam,<br> Chennai – 600 106, Tamilnadu</li>
                        </ul>
                    </div>
                </div>
                
                <div class="map">
                    <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3886.400445043835!2d80.21003261461313!3d13.073788590788892!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5266a2b44ea549%3A0x24732a5af8f16afd!2sDwaraka%20Doss%20Goverdhan%20Doss%20Vaishnav%20College!5e0!3m2!1sen!2sin!4v1678258248163!5m2!1sen!2sin" width="96%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
                </div>
                
                </div>
                <div class="copyright">
                    <p class="copy">CopyRights &copy 2023 CrownBank <span class="copy1">|</span> <span>Right Bank Right Now</span> <span class="copy1">|</span>  All Rights Reserved </p>
                </div>
            </div>
           </footer>
           <img src="../images/scroll up btn.png" alt="" id="scroll-top-btn">
    </div>
    <script src="/JS/scroll.js"></script>
    <script src="/JS/CrownBankLogin.js"></script>
    <script src="/JS/index.js"></script>
    <script src="/JS/formval.js"></script>
</body>
</html>