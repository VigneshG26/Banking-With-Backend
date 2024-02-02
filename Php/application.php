<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crown Bank - Application Form</title>
    <link rel="shortcut icon" type="image/png" href="../images/FAVICON CROWN.png">
    <link rel="stylesheet" href="/CSS/application.css">
    <link rel="stylesheet" href="/CSS/dark.css">
    <script src="/JS/dark.js" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
</head>

<body>
    <div class="container">
        <hr size="8px" color="#003e7e">
        <header>
            <i class="bi bi-brightness-high-fill" id="toggleDark"></i>
            <div class="heading">
                <div class="logo">
                    <img src="../images/logoaboutus.jpeg" id="logo">
                </div>
                <div class="head-content">
                    Application Form
                </div>
                <div class="btn">
                    <a href="/php/saving.php">
                        <button type="submit" class="back">GO BACK</button>
                    </a>
                </div>
            </div>
        </header>
        <hr size="8px" color="#003e7e">
        <div class="formbody">
            <form action="/Php/appform.php" method="post">
                <fieldset style="height: 150px;">
                    <legend>Add on Product</legend>
                    <h4>Select Add on Product</h4>
                    <input type="checkbox" id="credit" name="Product[]" value="Credit">
                    <label>Credit Card</label>
                    <input type="checkbox" id="debit" name="Product[]" value="Debit">
                    <label>Debit Card</label>
                    <input type="checkbox" id="insurance" name="Product[]" value="Insurance">
                    <label>Insurance</label>
                    <input type="checkbox" id="Loan" name="Product[]" value="Loan">
                    <label>Loan</label>
                </fieldset>
                <fieldset style="margin-top: 30px; display: grid; grid-template-columns: auto auto;">
                    <legend>Personal Details</legend>
                    <div class="item">
                        <label for="name">Name</label>
                        <input type="text" id="name" placeholder="Your name" name="Name" oninput="validateAlphabet(event)" required>
                    </div>
                    <div class="item">
                        <label for="mailid">Email</label>
                        <input type="email" id="mailid" placeholder=".......@gmail.com" name="email" required>
                    </div>
                    <div class="item">
                        <label for="phone">Mobile Number</label>
                        <input type="text" id="phone" name="Mob_num" placeholder="Mobile number registered with aadhar" pattern="[0-9]{10}" oninput="validateNumber(event)" required>
                    </div>
                    <div class="item">
                        <label for="dob">Date of Birth</label>
                        <input type="date" id="dob" name="dob" required>
                    </div>
                    <div class="item">
                        <label for="adhar">Aadhar Number</label>
                        <input type="text" id="adhar" name="aadhar" placeholder="12-digit aadhar number" pattern="[0-9]{12}" oninput="validateNumber(event)" required>
                    </div>
                    <div class="item">
                        <label for="pan">PAN Number</label>
                        <input type="text" id="pan" name="PAN" placeholder="Permanent Account Number" required>
                    </div>
                    <div class="item">
                        <label for="nat">Nationality</label>
                        <input type="text" id="nat" name="nation" placeholder="Nationality" oninput="validateAlphabet(event)" required>
                    </div>
                    <div class="gen">
                        <div>Gender</div>
                        <input type="radio" name="gender" id="Gender" value="Male">
                        <label>Male</label>
                        <input type="radio" name="gender" id="Gender" value="Female">
                        <label>Female</label>
                        <input type="radio" name="gender" id="Gender" value="Other">
                        <label>Other</label>
                    </div>
        </div>
        </fieldset>
        <fieldset style="margin-top: 30px; margin-left: 50px; width: 88%;">
            <legend>Professional Details</legend>
            <div class="details">
                <label>Occupation</label>
                <input type="radio" name="occup" value="Private">Private Sector
                <input type="radio" name="occup" value="Public">Public Sector
            </div>
            <div class="gridbox">
                <div class="detail">
                    <label>Company Name</label>
                    <input type="text" id="cname" name="company" placeholder="Working place..." oninput="validateAlphabet(event)" required>
                </div>
                <div class="detail">
                    <label>Salary</label>
                    <input type="text" id="sal" name="salary" placeholder="Annual salary" oninput="validateNumber(event)" required>
                </div>
            </div>
        </fieldset>
        <fieldset style="margin-top: 30px; margin-left: 50px; width: 88%;">
            <legend>Know Your Customer</legend>
            <p>Account opening through KYC</p>
            <p>Please upload the following documents for verification</p>
            <div class="kyc">
                <label>Aadhar Card Photo:</label>
                <input type="file">
                <label>PAN card Photo:</label>
                <input type="file">
        </fieldset>
        <div class="terms">
            <input type="checkbox" required>I accept all the terms and conditions of Crown Bank
        </div>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button id="submitbtn">Submit</button>
        </form>
    </div>
    <div class="copyright">
        <p class="copy">CopyRights &copy 2023 CrownBank <span class="copy1">|</span> <span>Right Bank Right Now</span> <span class="copy1">|</span> All Rights Reserved </p>
    </div>
    </div>
    <script src="/JS/formval.js"></script>
</body>

</html>