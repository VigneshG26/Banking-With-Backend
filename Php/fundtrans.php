<?php
  $facc = $_POST['facc'];
  $tacc = $_POST['tacc'];
  $amt = $_POST['amt'];
  $transdate = $_POST['transdate'];
  $mode=$_POST['mode'];
  $reason=$_POST['reason'];
  $remark=$_POST['remark'];
  

  $conn = new mysqli('localhost','root','','Banking');
  if($conn -> connect_error){
    die('Connection Failed :'.$conn ->connect_error);
  }
  else{
    $stmt = $conn -> prepare("insert into fundtrans (facc,tacc,amt,transdate,mode,reason,remark)
    values(?,?,?,?,?,?,?)");
    $stmt -> bind_param("iiissss", $facc,$tacc,$amt,$transdate,$mode,$reason,$remark);
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
        alert("Your money has been successfully transferred");  
        window.location.assign("/php/fundtransfer.php");
    </script>
</body>
</html>