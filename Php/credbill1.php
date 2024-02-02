<?php
  $Card_Number = $_POST['Card_Number'];
  $Re_Card = $_POST['Re_Card'];
  $email = $_POST['email'];
  $Mob_num = $_POST['Mob_num'];
  $Amount = $_POST['Amount'];
  $Debit_card = $_POST['Debit_card'];
  $Exp_date = $_POST['Exp_date'];
  $CVV = $_POST['CVV'];

  //Database Connection
  $conn = new mysqli('localhost','root','','Banking');
  if($conn -> connect_error){
    die('Connection Failed :'.$conn ->connect_error);
  }
  else{
    $stmt = $conn -> prepare("insert into credit (Card_Number,Re_Card,email,Mob_num,Amount,Debit_card,Exp_date,CVV)
    values(?,?,?,?,?,?,?,?)");
    $stmt -> bind_param("iisiiisi", $Card_Number, $Re_Card, $email, $Mob_num, $Amount, $Debit_card, $Exp_date, $CVV);
    $stmt -> execute();
    $stmt -> close();
    $conn -> close();
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" cont ent="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crown Bank</title>
    <link rel="shortcut icon" type="image/png" href="../images/FAVICON CROWN.png">
</head>
<body>
    <script>
        alert('Payment made successfully');
        window.location.assign("/php/creditcard.php");
    </script>
</body>
</html>