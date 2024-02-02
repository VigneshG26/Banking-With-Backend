<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loanform</title>
    <link rel="shortcut icon" type="image/png" href="../images/FAVICON CROWN.png">
    <link rel="stylesheet" href="/CSS/loanform.css">
</head>
<body>
    <header>
        <div class="nav">
            <a href="/Php/index.php">
                <img src="../images/logo1.png" class="logo">
            </a>
            <h1 class="heading">LOAN APPLICATION FORM</h1>
            <div class="btn">
                <a href="/php/billpayment.php">
                    <button type="submit" class="back">GO BACK</button>
                </a>
            </div>
        </div>
    </header>
    <div class="background-image"></div>

	<div class="form-container">

		<h2>Loan Application Form</h2>

		<form name="loanform" action="/Php/loanform1.php"Method="Post"onsubmit="">
			
			<label for="name">Name:</label>
			<input type="text" name="name" id="name" oninput="validateAlphabet(event)" required><br><br>

			<label for="email">Email:</label>
			<input type="email" name="email" id="email" required><br><br>

			<label for="phone">Phone:</label>
			<input type="tel" name="phone" id="phone" pattern="[0-9]{10}" oninput="validateNumber(event)" required><br><br>

			<label for="address">Address:</label>
			<textarea name="address" id="address" rows="3" cols="30" required></textarea><br><br>

            <label for="loan-amount">Loan Amount:</label>
            <input type="number" id="loan-amount" name="loanamount" min="1" oninput="validateNumber(event)" required>

            <label for="loan-type">Loan-Type:</label>
			<input type="text" name="loantype" id="loantype" oninput="validateAlphabet(event)" required><br><br>

            <label for="employementstatus">Employement-Status:</label>
			<input type="text" name="employementstatus" id="employementstatus" oninput="validateAlphabet(event)" required><br><br>



                <button type="submit">Apply Now</button>
		</form>
	</div>
    <div class="copyright">
        <p class="copy">CopyRights &copy 2023 CrownBank <span class="copy1">|</span> <span>Right Bank Right Now</span> <span class="copy1">|</span>  All Rights Reserved </p>
    </div>
	<script src="/JS/loanform.js"></script>
    <script src="/JS/formval.js"></script>
</body>
</html>