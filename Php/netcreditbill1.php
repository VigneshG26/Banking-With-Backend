<?php
  $cnum= $_POST['cnum'];
  $rcnum = $_POST['rcnum'];
  $amt = $_POST['amt'];

  //Database Connection
  $conn = new mysqli('localhost','root','','Banking');
  if($conn -> connect_error){
    die('Connection Failed :'.$conn ->connect_error);
  }
  else{
    $stmt = $conn -> prepare("insert into netcreditbill (cnum,rcnum,amt)
    values(?,?,?)");
    $stmt -> bind_param("iii", $cnum,$rcnum,$amt);
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
        window.location.assign("/php/netcreditbill.php");
    </script>
</body>
</html>