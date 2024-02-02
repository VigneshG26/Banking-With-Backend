<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phno = $_POST['phno'];
  $gst = $_POST['gst'];
  $gststate='Tamil Nadu';
  $billcategory=$_POST['billcategory'];
  $state='Tamil Nadu';
  $billername=$_POST['billername'];
  $amount=$_POST['amount'];
  

  $conn = new mysqli('localhost','root','','Banking');
  if($conn -> connect_error){
    die('Connection Failed :'.$conn ->connect_error);
  }
  else{
    $stmt = $conn -> prepare("insert into billpay (name,email,phno,gst,gststate,billcategory,state,billername,amount)
    values(?,?,?,?,?,?,?,?,?)");
    $stmt -> bind_param("ssisssssi", $name,$email,$phno,$gst,$gststate,$billcategory,$state,$billername,$amount);
    $stmt -> execute();
    $stmt -> close();
    $conn -> close();
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crown Bank</title>
    <link rel="shortcut icon" type="image/png" href="../images/FAVICON CROWN.png">
</head>
<body>
    <script>
        alert('Bill Payed successfully');
        window.location.assign("/php/billpay.php");
    </script>
</body>
</html>