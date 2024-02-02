<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>
    <link rel="shortcut icon" type="image/png" href="../images/FAVICON CROWN.png">
    <link rel="stylesheet" href="/CSS/about.css">
    <link rel="stylesheet" href="/CSS/dark.css">
    <script src="/JS/dark.js" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
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
                            <a href="account.php">Accounts</a>
                        </li>
                        <li>    
                            <a href="loan.php">Loans</a>
                        </li>
                        <li>
                            <a href="card.php">Cards</a>
                        </li>
                        <li>
                            <a href="insurance.php">Insurance</a>
                        </li>
                        <li>
                            <a href="#">About Us</a>
                        </li>
                        <li>
                            <a href="contact.php">Contact Us</a>
                        </li>
        </header>
        <div class="bank">
            <img name="slide" width="400" height="200">
            <div class="abouthead">
                You're at the right place
            </div>
            <script>
                var i=0;//start point
                var images =[]
                var time=3000;
                //images list
                images[0]="../images/abouthero1.jpg";
                images[1]="../images/slide11.webp";
                images[2]="../images/slide5.jpeg";
                //change image
                function changeImg(){
                    document.slide.src= images[i];
                    if(i < images.length-1){
                        i++;
                       
                    }else{
                        i=0;
                    }
                    setTimeout("changeImg()",time);
        
                }
                window.onload=changeImg
        </script>
        </div>
        <div class="about-grid">
            <div class="about">
                <br>
                <h1>About Us</h1>
                <h2>Our Corporate Office</h2>
                <p class="about-add">
                    Crown Bank Corporate Office,<br>
                    No #833, E.V.R. Periyar High Road, <br>
                    Arumbakkam,
                    Chennai – 600 106, Tamilnadu<br>
                </p>
                <p class="about-tel">tel:(044) 2343622</p>
            </div>
            <div class="about-image">
                <img src="../images/aboutside.jpg" class="abimg">
            </div>
        </div>
        <div class="grid">
            <div class="one">
                <a href="#corpo">
                    <img class="ap" src="../images/business-profile.png"  alt="Corporate profile" width="50px" height="50px"  ><br>
                </a>
                 <p class="link">Corporate profile</p>
            </div>
            <div class="one">
                <a href="#vision">
                    <img  class="ap" src="../images/vision.png" width="50px" height="50px">
                </a>
                <p class="link">Vision and Values</p>
            </div>
            <div class="one">
                <a href="#media">
                    <img  class="ap" src="../images/media.png" width="50px" height="50px">
                </a>
               <p class="link">Media Center</p>
            </div>
            <div class="one">
                <a href="#award">
                    <img  class="ap" src="../images/trophy.png" width="50px" height="50px" >
                </a>
                <p class="link">Awards and Recognition</p>
            </div>
            <div class="one">
                <a href="#promo">
                    <img  class="ap" src="../images/promoters.png" width="50px" height="50px">
                </a>
                    <p class="link">Promoters</p>
            </div>
        </div>
        <div class="director-title">
            <h1 class="dir">Board of Directors</h1>
            <div class="directors">
                <div class="director">
                    <img src="../images/sivaranjani.jpeg" class="dirimg">
                    <h3 class="dirname">Sivaranjani</h3>
                    <h5 class="dirdes">Chief Executive Officer</h5>
                </div>
                <div class="director">
                    <img src="../images/malini.jpeg" class="dirimg">
                    <h3 class="dirname">MaliniSree</h3>
                    <h5 class="dirdes">Managing director & Non executive</h5>
                </div>
                <div class="director">
                    <img src="../images/Pauline.JPG" class="dirimg">
                    <h3 class="dirname">Arockia Pauline</h3>
                    <h5 class="dirdes">Independent director</h5>
                </div>
                <div class="director">
                    <img src="../images/aravind.jpeg" class="dirimg">
                    <h3 class="dirname">Aravind Prabakar</h3>
                    <h5 class="dirdes">Additional independent director</h5>
                </div>
            </div>
        </div>
        <div class="director-title">
            <h1 class="dir1">Senior Management</h1>
            <div class="directors">
                <div class="director">
                    <img src="../images/aniruth.jpg" class="dirimg">
                    <h3 class="dirname">Aniruth</h3>
                    <h5 class="dirdes">Managing Director</h5>
                </div>
                <div class="director">
                    <img src="../images/shalini.jpeg" class="dirimg">
                    <h3 class="dirname">Shalini</h3>
                    <h5 class="dirdes">Deputy Managing director</h5>
                </div>
                <div class="director">
                    <img src="../images/kokila.jpeg" class="dirimg">
                    <h3 class="dirname">Kokila</h3>
                    <h5 class="dirdes">Chief Financial Officer</h5>
                </div>
                <div class="director">
                    <img src="../images/Jagadesh.jpg" class="dirimg">
                    <h3 class="dirname">Jagadesh</h3>
                    <h5 class="dirdes">Non Executive Director</h5>
                </div>
            </div>
        </div>
        <div class="director-title">
            <h1 class="dir">Other Directors</h1>
            <div class="directors">
                <div class="director">
                    <img src="../images/Vignesh.png" class="dirimg">
                    <h3 class="dirname">Vignesh</h3>
                </div>
                <div class="director">
                    <img src="../images/Aparna.jpg" class="dirimg">
                    <h3 class="dirname">Aparna</h3>
                </div>
                <div class="director">
                    <img src="../images/Pasupathi.jpg" class="dirimg">
                    <h3 class="dirname">Pasupathi</h3>
                </div>
            </div>
        </div>
        <div class="director-title">
            <div class="directors">
                <div class="director">
                    <img src="../images/haritha.png" class="dirimg">
                    <h3 class="dirname">Haritha</h3>
                </div>
                <div class="director">
                    <img src="../images/saranya.jpg" class="dirimg">
                    <h3 class="dirname">Saranya</h3>
                </div>
                <div class="director">
                    <img src="../images/Ranjith.jpg" class="dirimg">
                    <h3 class="dirname">Ranjith</h3>
                </div>
            </div> 
        </div>
        <div class="corp" id="corpo">
            <div class="corpimg">
                <img src="../images/corpprofile.jpg" class="cimg">
            </div>
            <div class="corptext">
                <h1>Corporate Profile</h1>
                <p>Crown  Bank is a full-service financial institution in Tamil Nadu. Founded in 2022,Crown Bank has grown to become one of the largest banks in the region.
                    At ABC Bank, we are committed to providing our customers with a wide range of financial products and services to meet their needs. 
                    Whether you're looking for a savings account, personal loan, or business loan,our experienced team of professionals can help you find the right solution.
                    As a customer of ABC Bank, you can rest assured that you are working with a reliable and trustworthy institution that is committed to your financial success. We invite you to visit 
                    one of our branches or contact us today to learn more about how we can help you achieve your financial goals.
                </p>
            </div>
        </div>
        <div class="corp" id="vision">
            <div class="corptext">
                <h1>Vision and Values</h1>
                <p>
                    Delight our customers continuously by blending tradition with technology to deliver innovative products and
                    servis at affordable rates through a pan India branch network.
                </p>
                <h3>Core values</h3>
                <ul>
                    <li>Integrity</li>
                    <li>Ethics</li>
                    <li>Trust</li>
                    <li>Teamwork</li>
                    <li>Innovation</li>
                </ul>
            </div>
            <div class="vimg">
                <img src="../images/values.jpg" class="cimg">
            </div>
        </div>
        <div class="award" id="award">
            <h1 class="title">Awards And Recognition</h1>
            <div class="award1">
                <img src="../images/awardandrecog.jpg" width="360px" height="300px">
                <img src="../images/award.jpg" width="350px" height="300px">
                <ul type="circle">
                    <li>Crown Bank wins the Best Online Banking Award in January 2023</li>
                    <li>Crown Bank wins the Best Customer Service Award for offering personalized support, convenient digital tools, and responsive communication channels.</li>
                    <li>Crown Bank wins the Best Innovation Award in the middle of February 2023.</li>
                </ul>
            </div>
        </div>
        <div class="media" id="media">
            <div class="corptext1">
                <h1>Media Centre</h1>
                <div class="cont">
                <p>Contact Us :<br><br>
                    For Media Queries, please contact<br>
                    <p>corporate.communication@crownbank.com</p><br><br>
                    For customer queries and complaints kindly visit <br>
                    <p> www.crownbank.com/support</p>
                </p>
                </div>
            </div>
            <img src="../images/contact.jpg" width="360px" height="280px"style="margin-left: 80px;">
            <div class="gimg">
                <a href="gallery.php">
                    <img src="../images/office.jpg" width="360px" height="280px" style="margin-left: 80px;">
                </a>
                <h3 class="imgtext">Gallery</h3>
            </div>
        </div>
        <div class="promo" id="promo">                            
            <div class="protext">
                <h1>Our Promoters</h1>
                <p class="procon">
                    Crown Bank is one of the first new generation private sector banks to have begun operations in 2022. 
                    The Bank was promoted in 2022, jointly by Dwaraka Doss Goverdhan Doss Vaishnav College and MEBOT Robotics and IT.
                    DEF Investments is a leading private equity firm in India that specializes in investing in financial services companies. They were one of the 
                    early investors in Crown Bank and have played a crucial role in the bank's expansion.
                    GHI Trust is a charitable organization that works towards improving the lives of underprivileged communities in India. They have been a key promoter of Crown Bank 
                    and have invested in the bank with the aim of supporting its mission to provide financial services to all sections of society.
                    JKL Corporation is a global conglomerate with interests in several sectors such as finance, healthcare, and technology. They have 
                    been a promoter of Crown Bank since its inception and have been instrumental in providing the bank with strategic guidance and support.
                </p>
            </div>
            <div class="promoimg">
                <img src="../images/hand shake.jpg" width="360px" height="280px">
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
                                <a href="disclaimer.php">
                                    <p class="link">Disclaimer</p>
                                </a>
                            </li>
                            <li>
                                <a href="privacy.php">
                                    <p class="link">Privacy Policy</p>
                                </a>
                            </li>
                            <li>
                                <a href="terms&conditions.php">
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
          </footer>          
    </div>
</body>
<script src="JS/CrownBankLogin.js"></script>
</html>