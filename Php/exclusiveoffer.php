<?php

$email=$_POST['email'];

    $host="localhost";
    $dbusername="root";
    $dbpassword="";
    $dbname="Banking";

    $conn=new mysqli($host,$dbusername,$dbpassword,$dbname);

 if($conn -> connect_error){
    die('Connection Failed :'.$conn ->connect_error);
  }
  else{
    $stmt = $conn -> prepare("insert into exclusive (email)
    values(?)");
    $stmt -> bind_param("s",$email);
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
        window.location.assign("/php/index.php");
    </script>
</body>
</html>