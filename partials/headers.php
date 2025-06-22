<?php
include_once 'resource/session.php';
include_once 'resource/Database.php';
include_once 'resource/utilities.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php if(isset($page_title)) echo $page_title; ?></title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <script src="js/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/sweetalert.css">
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
<style>
     *{
         background: rgba(0,0,0,0);
    }
.navbar{
    background-color: #9b2928;
}
.collapse{
     background-color: #9b2928;
}
.navbar-brand{
    color: black;
}
.button{
    background-color: #9b2928;
}
.container{
    padding-left: 0;
    margin-left: 0;
}
.img{
    height:90px ;
    width: 350px;
    margin-right:50px;
    display:flex;
    flex-direction:row;
    -ms-flex-align: start;
}

@media (max-width:350px) and (min-width:300px){
    .img{
    height:50px ;
    width: 100px;
    margin-right:50px;
        margin-left: 15px;
    display:flex;
    flex-direction:row;
    -ms-flex-align: start;
}

.navbar-toggle {
    position: absolute;
    float: right;
    padding: 9px 10px;
    margin-top: 8px;
    margin-bottom: 8px;
    margin-left: 85%;
    background-color: transparent;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;
}
.navbar-inverse .navbar-toggle {
    border-color: #333;
}
.navbar-nav>li>a {
    padding-top: 10px;
    padding-bottom: 10px;
    line-height: 20px;
    margin-left: 5%;
}
}

@media (max-width:400px) and (min-width:350px){
    .img{
    height:50px ;
    width: 150px;
    margin-right:50px;
    margin-left: 15px;
    display:flex;
    flex-direction:row;
    -ms-flex-align: start;
}

.navbar-toggle {
    position: absolute;
    float: right;
    padding: 9px 10px;
    margin-top: 8px;
    margin-bottom: 8px;
    margin-left: 90%;
    background-color: transparent;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;
}
.navbar-inverse .navbar-toggle {
    border-color: #333;
}
.navbar-nav>li>a {
    padding-top: 10px;
    padding-bottom: 10px;
    line-height: 20px;
    margin-left: 5%;
}
}

@media (max-width:450px) and (min-width:400px){
    .img{
    height:60px ;
    width: 180px;
    margin-right:50px;
    margin-left: 15px;
    display:flex;
    flex-direction:row;
    -ms-flex-align: start;
}

.navbar-toggle {
    position: absolute;
    float: right;
    padding: 9px 10px;
    margin-top: 8px;
    margin-bottom: 8px;
    margin-left: 90%;
    background-color: transparent;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;
}
.navbar-inverse .navbar-toggle {
    border-color: #333;
}
.navbar-nav>li>a {
    padding-top: 10px;
    padding-bottom: 10px;
    line-height: 20px;
    margin-left: 5%;
}
}

@media (max-width:768px) and (min-width:450px){
    .img{
    height:60px ;
    width: 180px;
    margin-right:50px;
    margin-left: 15px;
    display:flex;
    flex-direction:row;
    -ms-flex-align: start;
}

.navbar-toggle {
    position: absolute;
    float: right;
    padding: 9px 10px;
    margin-top: 8px;
    margin-bottom: 8px;
    margin-left: 93%;
    background-color: transparent;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;
}
.navbar-inverse .navbar-toggle {
    border-color: #333;
}
.navbar-nav>li>a {
    padding-top: 10px;
    padding-bottom: 10px;
    line-height: 20px;
    margin-left: 5%;
}
}

@media (max-width:991px) and (min-width:768px){
    .img{
    height:70px ;
    width: 200px;
    margin-right:50px;
    margin-left: 0px;
    display:flex;
    flex-direction:row;
    -ms-flex-align: start;
}

.navbar-toggle {
    position: absolute;
    float: right;
    padding: 9px 10px;
    margin-top: 8px;
    margin-bottom: 8px;
    margin-left: 93%;
    background-color: transparent;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;
}
.navbar-inverse .navbar-toggle {
    border-color: #333;
}
.navbar-nav>li>a {
    padding-top: 10px;
    padding-bottom: 10px;
    line-height: 20px;
    margin-left: 5%;
    width:100%;
}
}


</style>
<nav class="navbar navbar-inverse navbar-fixed-top">
     
    <div class="container">
       
        <div class="navbar-header">
            
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    
                <span class="sr-only" style="font-family: 'Poppins'">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                
            </button>
                <div class="img"><img src="../uploads/Somaiya1.png" alt="pic"></div>
        
        </div>

        
        
        <div id="navbar" class="collapse navbar-collapse">
       <!-- <a class="navbar-brand" href="index.php" style="font-family: 'Poppins'; color:white;font-size:200%">KJSIT</a> -->
            <ul class="nav navbar-nav"><i class="hide"><?php echo guard(); ?></i>
                <li><a href="index.php" style="font-family: 'Poppins';color:white;font-size:150%;margin-top: 0.8em">Home</a></li>
                <?php if((isset($_SESSION['username']) || isCookieValid($db))): ?>
                    <li><a href="../aboutus.php" style="font-family: 'Poppins'; color:white;font-size:150%;margin-top: 0.8em;">About Us</a></li>
                    <li><a href="profile.php" style="font-family: 'Poppins'; color:white; font-size:150%;margin-top: 0.8em;">My Profile</a></li>
                    <li><a href="members.php" style="font-family: 'Poppins'; color:white; font-size:150%;margin-top: 0.8em">Members</a></li>
                    <li><a href="logout.php" style="font-family: 'Poppins'; color:white; font-size:150%;margin-top: 0.8em">Logout</a></li>
                    <li><a href="../Virtual_Lab_finally/index.html" style="font-family: 'Poppins'; color:white;font-size:150%;margin-top: 0.8em;">Portal</a></li>
                 <?php else: ?>
                    <li><a href="../aboutus.php" style="font-family: 'Poppins'; color:white;font-size:150%;margin-top: 0.8em;padding-right:0.7em">About Us</a></li>
                    <li><a href="login.php" style="font-family: 'Poppins'; color:white;font-size:150%;margin-top: 0.8em;padding-right:0.7em">Login</a></li>
                    <li><a href="signup.php" style="font-family: 'Poppins'; color:white;font-size:150%;margin-top: 0.8em;padding-right:0.7em">Sign up</a></li>
                      <li><a href="members.php" style="font-family: 'Poppins'; color:white;font-size:150%;margin-top: 0.8em;padding-right:0.7em">Members</a></li>
                <?php endif ?>
               
            </ul>

        </div><!--/.nav-collapse -->
        
    </div>
</nav>