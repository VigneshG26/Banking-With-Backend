<?php
  $Product1=$_POST['Product'];
  $Product=implode(",",$Product1);
  $Name = $_POST['Name'];
  $email = $_POST['email'];
  $Mob_num = $_POST['Mob_num'];
  $dob = $_POST['dob'];
  $aadhar = $_POST['aadhar'];
  $PAN = $_POST['PAN'];
  $nation = $_POST['nation'];
  $gender = $_POST['gender'];
  $occup = $_POST['occup'];
  $company = $_POST['company'];
  $salary = $_POST['salary'];

  //Database Connection
  $conn = new mysqli('localhost','root','','Banking');
  if($conn -> connect_error){
    die('Connection Failed :'.$conn ->connect_error);
  }
  else{
    $stmt = $conn -> prepare("insert into appform (Product,Name,email,Mob_num,dob,aadhar,PAN,nation,gender,occup,company,salary)
    values(?,?,?,?,?,?,?,?,?,?,?,?)");
    $stmt -> bind_param("sssisissssss", $Product, $Name, $email, $Mob_num, $dob, $aadhar, $PAN, $nation, $gender, $occup, $company, $salary);
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
        alert("Your Application sent successfully");
        window.location.assign("/php/application.php");
    </script>
</body>
</html>