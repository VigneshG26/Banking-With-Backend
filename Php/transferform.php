<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fund Transfer - Crown Bank</title>
    <link rel="shortcut icon" type="image/png" href="../images/FAVICON CROWN.png">
    <link rel="stylesheet" href="/CSS/transfer.css">
</head>
<body>
    <form action="/Php/fundtrans.php" method="post">
        <img src="../images/funds.jpg" width="100%" height="300px">
        <div class="container">
            <div class="fund">
                <h2 style="color:#003e7e"><center>Fund Transfer</center></h3>
                    <div class="container">
                        <fieldset><br>
                            <label style="margin-left: 19px;">From Account <span>*</span></label>
                                <input type="text" required placeholder="Your Account Number" name="facc" pattern="[0-9]{16}" oninput="validateNumber(event)">
                            <label style="margin-left: 30px;">To Account  <span>*</span></label>
                                <input type="text" required placeholder="Receiver's Account Number" name="tacc" pattern="[0-9]{16}" oninput="validateNumber(event)"><br><br>
                            <label style="margin-left: 60px;">Amount <span>*</span></label>
                                <input type="text" required placeholder="Amount " name="amt" oninput="validateNumber(event)">
                            <label style="margin-left: 30px;">Transaction Date  <span>*</span></label>
                                <input type="date" name="transdate"><br><br>
                            <label>Mode of Transfer <span>*</span></label>
                            <select name="mode">
                                <option value="select">---Select---</option>
                                <option value="NEFT">NEFT</option>
                                <option value="IMPS">IMPS</option>
                                <option value="RTGS">RTGS</option>
                            </select><br><br>
                            <label id="reason" style="margin-left: 75px;">Reason</label>
                                <textarea placeholder="Type a Reason" name="reason"></textarea>
                            <label id="reason" style="margin-left: 30px;">Remark</label>
                                <textarea placeholder="Type your message" rows="3" cols="3" name="remark" oninput="validateAlphabet(event)"></textarea><br><br><br><br>
                            
                        <div class="submit" >
                                <input type="submit" id="submit-btn" value="Transfer">
                        </div>
                        <br>
                        </fieldset>
        
                    </div>
            </div>
        </div>
    </form>
    <script src="/JS/formval.js"></script>
</body>
</html>