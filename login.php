<?php
$page_title = "KJSIT - Login Page";
include_once 'partials/headers.php';
include_once 'partials/parseLogin.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
    
        
    body{
          background: rgb(209,209,209);
    background: radial-gradient(circle, rgba(209,209,209,1) 62%, rgba(178,178,178,1) 100%);
     
    }
    .container1{
         display:flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
       
    }
    .col-lg-7{
        border-radius: 1em;
        background-color: #ffffff;
        margin-top: 4em;
        margin-bottom:2em;
        height: 100%;
        width: 75%;
        border: 5px solid #9b2928;
       box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
    }

    footer {
        display: flow-root;
    line-height: 0.8;
 /*justify-content: space-evenly;*/
  height: 11rem; 
 z-index: 5000;
position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   color: white;
   text-align: center;
  padding: 3px;
  background-color: #9b2928;
  color: white;
}
footer p{
    font-family: 'Noto Serif', serif;
    color:white;
    line-height:1.1;
    margin-bottom: 0px;
    margin-top: 10px;
    font-size:13px
}
.pull-right{
    font-family: 'Poppins';
    color:#9b2928;
    font-size:large;
    float: right!important;
}
#backbtn {
    float: left!important;
    margin-top: 5px;
    padding: 0px;
    background-color:#337ab7;
    color:white;
    border:none;
    border-radius: 3px;
    width:5em;
    
    
}
.btn{
    background-color:#337ab7;
    color:white;
        font-family: 'Poppins';
    border:none;
    padding: 5px 20px 5px 20px;
    border-radius: 3px;
    margin-top:10px;
    margin-bottom:10px;
    float:right!important;
    font-size:17px;
}
.btn p{
    font-family: 'Poppins';
    margin-top:0.3em;
}


@media (max-width:350px) and (min-width:300px){
           .col-lg-7 {
    border-radius: 1em;
    background-color: #ffffff;
    margin-top: 3em;
    margin-bottom: 9em;
    width:100%;
    height: 100%;
    border: 5px solid #9b2928;
     box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
       }
       .checkbox label, .radio label {
    min-height: 20px;
    margin-top: 15px;
    padding-left: 28%;
    margin-bottom: 0;
    font-weight: 400;
    cursor: pointer;
}
.pull-right {
    font-family: 'Poppins';
    color: #9b2928;
    font-size: large;
    float: left!important;
    margin-top: 10px;
    margin: 5px;
    margin-left: 23%;
}
.btn {
    background-color: #337ab7;
        font-family: 'Poppins';
    color: white;
    font-size: 15px;
    border: none;
    border-radius: 3px;
    width: 60%;
    margin-top: 15px;
    margin-right: 20%;
}
#backbtn{
        float: left!important;
    margin-top: 10px;
    padding: 0px;
    background-color: #337ab7;
    color: white;
    border: none;
    width: 60%;
    border-radius: 3px;
    margin-left:20%;
}
 footer{
     height:16rem;
 }
 footer p{
     font-size:16px;
     line-height:1.3;
 }
}

@media (max-width:400px) and (min-width:350px){
          .col-lg-7 {
    border-radius: 1em;
    background-color: #ffffff;
    margin-top: 3em;
    margin-bottom: 9em;
    width:100%;
    height: 100%;
    border: 5px solid #9b2928;
     box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
       }
       .checkbox label, .radio label {
    min-height: 20px;
    margin-top: 15px;
    padding-left: 30%;
    margin-bottom: 0;
    font-weight: 400;
    cursor: pointer;
}
.pull-right {
    font-family: 'Poppins';
    color: #9b2928;
    font-size: large;
    float: left!important;
    margin-top: 10px;
    margin: 5px;
    margin-left: 25%;
}
.btn {
    background-color: #337ab7;
        font-family: 'Poppins';
    color: white;
    font-size: 15px;
    border: none;
    border-radius: 3px;
    width: 60%;
    margin-top: 15px;
    margin-right: 20%;
}
#backbtn{
        float: left!important;
    margin-top: 10px;
    padding: 0px;
    background-color: #337ab7;
    color: white;
    border: none;
    width: 60%;
    border-radius: 3px;
    margin-left:20%;
}
  footer{
     height:16rem;
 }
 footer p{
     font-size:16px;
     line-height:1.3;
 }
}

@media (max-width:450px) and (min-width:400px){
       .col-lg-7 {
    border-radius: 1em;
    background-color: #ffffff;
    margin-top: 3em;
    margin-bottom:9em;
    width:100%;
    height: 100%;
    border: 5px solid #9b2928;
     box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
       }
       .checkbox label, .radio label {
    min-height: 20px;
    margin-top: 15px;
    padding-left: 30%;
    margin-bottom: 0;
    font-weight: 400;
    cursor: pointer;
}
.pull-right {
    font-family: 'Poppins';
    color: #9b2928;
    font-size: large;
    float: left!important;
    margin-top: 10px;
    margin: 5px;
    margin-left: 25%;
}
.btn {
    background-color: #337ab7;
    color: white;
        font-family: 'Poppins';
    font-size: 15px;
    border: none;
    border-radius: 3px;
    width: 60%;
    margin-top: 15px;
    margin-right: 20%;
}
#backbtn{
        float: left!important;
    margin-top: 10px;
    padding: 0px;
    background-color: #337ab7;
    color: white;
    border: none;
    width: 60%;
    border-radius: 3px;
    margin-left:20%;
}
  footer{
     height:16rem;
 }
 footer p{
     font-size:16px;
     line-height:1.3;
 }
}

@media (max-width:500px) and (min-width:450px){
    .col-lg-7 {
    border-radius: 1em;
    background-color: #ffffff;
    margin-top: 4em;
    margin-bottom: 9em;
    height: 100%;
    width: 100%;
    border: 5px solid #9b2928;
    box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
}
.btn {
    background-color: #337ab7;
        font-family: 'Poppins';
    color: white;
    border: none;
    padding: 5px 20px 5px 20px;
    border-radius: 3px;
    width: 30%;
    margin-top: 10px;
    margin-bottom: 10px;
    margin-right: 37%;
    font-size: 17px;
}
#backbtn{
    float: left!important;
    margin-top: 10px;
    padding: 0px;
    background-color: #337ab7;
    color: white;
    border: none;
    border-radius: 3px;
    margin-left:33%;
    width: 30%;
}
  footer{
     height:16rem;
 }
 footer p{
     font-size:16px;
     line-height:1.3;
 }
}

@media (max-width:768px) and (min-width:500px){
.col-lg-7 {
    border-radius: 1em;
    background-color: #ffffff;
    margin-top: 3em;
    margin-bottom:9em;
    height: 100%;
    border: 5px solid #9b2928;
     box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
       }
       .checkbox label, .radio label {
    min-height: 20px;
    margin-top: 15px;
    padding-left: 15px;
    margin-bottom: 0;
    font-weight: 400;
    cursor: pointer;
}
.pull-right {
    font-family: 'Poppins';
    color: #9b2928;
    font-size: 14px;
    margin-top:13px;
    margin-left:5px;
    padding-left:5px;
}
.btn {
    background-color: #337ab7;
        font-family: 'Poppins';
    color: white;
    font-size: 15px;
    border: none;
    border-radius: 3px;
    margin-top: 15px;
    margin-left: 5%;
    padding: 5px 20px 5px 20px;
    float:right!important;
}
#backbtn {
    margin-top: 10px;
    margin-left: 5px;
    float:left!important;
    padding: 0px;
    background-color: #337ab7;
    color: white;
    border: none;
    border-radius: 3px;
    width: 6em;
}
    footer{
     height:16rem;
 }
 footer p{
     font-size:16px;
     line-height:1.3;
 }  
}

</style>
<link rel="shortcut icon" href="uploads\FAVICON1.png" type="image/x-icon">
<div class="container1">
    <section class="col-lg-7">
        <h2 style="font-family: 'Poppins'; color:#9b2928; font-weight:bold; text-align:center">Login</h2><hr>
        <div>
        <?php if(isset($result)) echo $result; ?>
        <?php if(!empty($form_errors)) echo show_errors($form_errors); ?>
        </div>
        <div class="clearfix"></div>
            <form action="" method="post">
                <div class="form-group">
                    <label for="usernameField" style="font-family: 'Poppins';color:#9b2928; font-weight:bold; font-size:x-large">Username</label>
                    <input type="text" class="form-control" name="username" id="usernameField" placeholder="Username">
                </div>
                <div class="form-group">
                    <label for="passwordField" style="font-family: 'Poppins';color:#9b2928; font-weight:bold; font-size:x-large">Password</label>
                    <input type="password" name="password" class="form-control" id="passwordField" placeholder="Password">
                </div>

                <div class="checkbox">
                    <label style="font-family: 'Poppins'; color:#9b2928; font-size:large">
                        <input name="remember" value="yes" type="checkbox" style="margin-top: 0.4em"> Remember Me
                    </label>
                    <a class="pull-right" href="password_recovery_link.php" style="font-family: 'Poppins';color:#9b2928; font-size:large">Forgot Password?</a>
                </div>
                <input type="hidden" name="token" value="<?php if(function_exists('_token')) echo _token(); ?>">
                <button type="submit" name="loginBtn" class="btn btn-primary">Login</button>
               <button class="btn btn-primary" id="backbtn"> <p style="font-family: 'Poppins';margin-top:0.3em;"><a href="index.php" style="color:white;">Back</a></p></button> 

                
            </form>
            
    </section>

</div>
<br>
<footer>
   
    <p>
         Department Of Computer Engineering
     </p>
     
      <p>© 2022-23</p>
    
    <p>Guided by:  Prof. Jyoti Wadmare</p>
  
    <p>Developed by: Dakshita Kolte, Kapil Bhatia, Palak Desai, Kartikeya Dangat</p>
   
</footer>
<?php include_once 'partials/footers.php'; ?>
</body>
</html>


