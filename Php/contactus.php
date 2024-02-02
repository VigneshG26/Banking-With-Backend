<?php
  $name=$_POST['name'];
  $customer = $_POST['customer'];
  $phoneno = $_POST['phoneno'];
  $email = $_POST['email'];
  $contactmode = $_POST['contactmode'];
  $intrested1=$_POST['interested'];
  $intrested= implode(",",$intrested1);

  //Database Connection
  $conn = new mysqli('localhost','root','','Banking');
  if($conn -> connect_error){
    die('Connection Failed :'.$conn ->connect_error);
  }
  else{
    $stmt = $conn -> prepare("insert into contactus (name,customer,phoneno,contactmode,email,intrested) values(?,?,?,?,?,?)");
    $stmt -> bind_param("ssisss", $name,$customer,$phoneno,$contactmode,$email,$intrested);
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
        alert('Form submitted successfully');
        window.location.assign("/php/contact.php");
    </script>
</body>
</html>