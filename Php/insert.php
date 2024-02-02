<?php
    include "signup.php";
    $un=$_POST['name'];
    $pwd=$_POST['email'];
    $email=$_POST['password'];
    $sql="insert into register(name,email,password) 
    values('$un','$pwd','$email')";
    $result=mysqli_query($con,$sql);
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
        alert("Signed up successfully");
        window.location.assign("/php/index.php");
    </script>
</body>
</html>