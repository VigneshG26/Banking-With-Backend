<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $loanamount = $_POST['loanamount'];
  $loantype = $_POST['loantype'];
  $employementstatus = $_POST['employementstatus'];
 
  
  //Database Connection
  $conn = new mysqli('localhost','root','','Banking');
  if($conn -> connect_error){
    die('Connection Failed :'.$conn ->connect_error);
  }
  else{
    $stmt = $conn -> prepare("insert into loanform (name,email,phone,address,loanamount,loantype,employementstatus)
    values(?,?,?,?,?,?,?)");
    $stmt -> bind_param("ssisiss", $name, $email, $phone, $address, $loanamount,$loantype,$employementstatus);
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
        alert('Form submited successfully');
        window.location.assign("/php/loanform.php");
    </script>
</body>
</html>