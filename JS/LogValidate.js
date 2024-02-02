function validate(){
var username = document.getElementById("username").value;
var password = document.getElementById("password").value;
    if(username == "Aravind" && password == "Aravind@02")
    {
        window.location.assign("home1.php");
        alert("Login successfull");
        return false;
    }
    else
    {
        window.location.assign("index.php");
        alert("Invalid Login");
        return;
    }
}


function mailcaptured(){
    var mail = document.getElementById("mailform").value;

    alert("Your Email has Registered");
    return false;
}