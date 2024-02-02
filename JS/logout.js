const logoutBtn = document.getElementById("logoutBtn");
logoutBtn.addEventListener("click",() => {
    //window.location.href="index.php";
    const confirmlog = confirm("Are you sure you want to log out?")
    if (confirmlog){
        alert("You have been successfully logged out");
        window.close("home1.php");
        window.open("index.php");
    }
}
);