<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="accueil.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <div class="page-background">
        <nav>
            <img src="Images/logo2.png"  class="logo">
            
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Personnal information</a></li>
                <li><a href="infractions.html">Infractions</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Support</a></li>
                <li><a href="#">Settings</a></li>
            </ul>
        </nav>
    </div>
    <div class="Test">
        <div class = "safety-container">
            <img src="Images/rule4.png" class="safety">
        </div>
        <div class ="text-container">
             <h1>Your Family Awaits, Drive Safely</h1>
        </div>
    </div>

    <div class="footer">
        <div class="col-1">
            <div class="menu-title">
                <h3>MENU</h3>
            </div>
            <a>> Home</a>
            <a>> Personnal information</a>
            <a>> Infractions</a>
            <a>> About us</a>
            <a>> Support</a>
        </div>
        <div class="col-2">
            <h3>Newsletter</h3>
            <form >
                <input type="email" placeholder="Your email adress" >
            </form>
            <form>
                <button>Subscribe now</button>
            </form>
        </div>
        <div class="col-3">
            <h3>CONTACT SUPPORT & SOCAIL MEDIA</h3>
            <p>contact@narsa.gov.ma</p>
            <div class="social-icons">
                <i class="fab fa-facebook"></i>
                <i class="fab fa-instagram"></i>
                <i class="fas fa-times"></i>
                <i class="fas fa-hippo"></i>
            </div>
        </div>
    </div>
</body>
</html>