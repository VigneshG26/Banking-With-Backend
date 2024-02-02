<?php
include "signup.php";
$un=$_POST['name'];
$pwd=$_POST['password'];
$sql="select * from register where name='$un' and password='$pwd'";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);
if($count>0){
    echo '<script type ="text/JavaScript">';
    echo "alert('Logged in Successfully...')";
    echo '</script>';
    echo "<script>window.location.href = '/php/home1.php';</script>";
}
else{
    echo '<script type ="text/JavaScript">';
    echo "alert('Invalid User Name or Password')";
    echo '</script>';
    echo "<script>window.location.href = '/php/index.php';</script>";
}
?>