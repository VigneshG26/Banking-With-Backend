<?php
  $fname= $_POST['fname'];
  $lname = $_POST['lname'];
  $contactnumber = $_POST['contactnumber'];
  $email = $_POST['email'];
  $query = $_POST['query']; 

  //Database Connection
  $conn = new mysqli('localhost','root','','Banking');
  if($conn -> connect_error){
    die('Connection Failed :'.$conn ->connect_error);
  }
  else{
    $stmt = $conn -> prepare("insert into callback (fname,lname,contactnumber,email,query)
    values(?,?,?,?,?)");
    $stmt -> bind_param("ssiss", $fname,$lname,$contactnumber,$email,$query);
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
        window.location.assign("/php/account.php");
    </script>
</body>
</html>