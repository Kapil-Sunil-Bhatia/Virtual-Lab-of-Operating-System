<?php
$page_title = "KJSIT - Register Page";
include_once 'partials/headers.php';
include_once 'partials/parseSignup.php';
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
    .container2{

         display:flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
    }
     .col-lg-7{
        border-radius: 1em;
        background-color: #ffffff;
        margin-top: 4em;
        margin-bottom: 5em;
        height: 39em;
        width:80%;
       border: 5px solid #9b2928;
         box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
    }
     .form-group label{
         font-family: 'Poppins';
         color:#9b2928;
         font-weight:bold;
         font-size:x-large;
      }
 footer {
        display: flow-root;
    line-height: 0.8;
 /*justify-content: space-evenly;*/
  height: 12rem; 
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
    line-height:1.2;
    font-size:16px;
    font-family:Poppins;
}
.btn {
    background-color: #337ab7;
        font-family: 'Poppins';
        float:right!important;
    color: white;
    font-size: 15px;
    border: none;
    border-radius: 3px;
    width: 12%;
    font-size:14px;
    margin-top: 15px;
}
#backbtn{
        float: left!important;
    margin-top: 10px;
    padding: 0px;
    background-color: #337ab7;
    color: white;
    border: none;
    width: 10%;
    border-radius: 3px;
}


@media (max-width:350px) and (min-width:300px){
           .col-lg-7 {
    border-radius: 1em;
    background-color: #ffffff;
    margin-top: 2em;
    margin-bottom: 7em;
    width:100%;
    border: 5px solid #9b2928;
    height: 100%;
     box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
       }
      
      .col-lg-7 h2{
          font-size:25px;
      }
      .form-group label{
          font-size:20px;
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
    margin-bottom:10px;
    padding: 0px;
    background-color: #337ab7;
    color: white;
    border: none;
    width: 60%;
    border-radius: 3px;
    margin-left:20%;
}
 footer{
     height:13rem;
 }
 footer p{
     font-size:14px;
     line-height:1.3;
 }
}

@media (max-width:400px) and (min-width:350px){
          .col-lg-7 {
     border-radius: 1em;
    background-color: #ffffff;
    margin-top: 3em;
        margin-bottom: 7em;

    width:100%;
    border: 5px solid #9b2928;
    height: 100%;
     box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
       }
      
      .col-lg-7 h2{
          font-size:25px;
      }
      .form-group label{
          font-size:20px;
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
    margin-bottom:10px;
    padding: 0px;
    background-color: #337ab7;
    color: white;
    border: none;
    width: 60%;
    border-radius: 3px;
    margin-left:20%;
}
 footer{
     height:13rem;
 }
 footer p{
     font-size:14px;
     line-height:1.3;
 }
}

@media (max-width:450px) and (min-width:400px){
       .col-lg-7 {
     border-radius: 1em;
    background-color: #ffffff;
    margin-top: 2em;
        margin-bottom: 7em;

    width:100%;
    border: 5px solid #9b2928;
    height: 100%;
     box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
       }
      
      .col-lg-7 h2{
          font-size:25px;
      }
      .form-group label{
          font-size:20px;
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
    margin-bottom:10px;
    padding: 0px;
    background-color: #337ab7;
    color: white;
    border: none;
    width: 60%;
    border-radius: 3px;
    margin-left:20%;
}
 footer{
     height:13rem;
 }
 footer p{
     font-size:14px;
     line-height:1.3;
 }
}

@media (max-width:500px) and (min-width:450px){
   .col-lg-7 {
    border-radius: 1em;
    background-color: #ffffff;
    margin-top: 3em;
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
    float: right!important;
    font-size: 17px;
}
#backbtn {
    float: left!important;
    margin-top: 10px;
    padding: 0px;
    background-color: #337ab7;
    color: white;
    border: none;
    border-radius: 3px;
    float:left!important;
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
        margin-bottom: 9em;

    border: 5px solid #9b2928;
    height: 100%;
     box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
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
    margin-bottom:10px;
    padding: 5px 20px 5px 20px;
    width:27%;
    float:right!important;
}
#backbtn {
    margin-top: 10px;
    margin-left: 5px;
        margin-bottom:10px;
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
<div class="container2">
    <section class="col col-lg-7">
        <h2 style="font-family: 'Poppins';color:#9b2928; font-weight:bold; text-align:center">Registration Form </h2><hr>
        <div>
            <?php if(isset($result)) echo $result; ?>
            <?php if(!empty($form_errors)) echo show_errors($form_errors); ?>
        </div>
        <div class="clearfix"></div>

        <form action="" method="post">
            <div class="form-group">
                <label for="emailField">Email Address</label>
                <input type="text" class="form-control" name="email" id="emailField" placeholder="Email">
            </div>

            <div class="form-group">
                <label for="usernameField">Username</label>
                <input type="text" class="form-control" name="username" id="usernameField" placeholder="Username">
            </div>

             <div class="form-group">
                <label for="DepartmentField">Department</label>
                <input type="text" class="form-control" name="Department" id="DeparmentField" placeholder="Department">
            </div>

            <div class="form-group">
                <label for="passwordField">Password</label>
                <input type="password" name="password" class="form-control" id="passwordField" placeholder="Password">
            </div>
            
            <input type="hidden" name="token" value="<?php if(function_exists('_token')) echo _token(); ?>">
            <button type="submit" name="signupBtn" class="btn btn-primary">Signup</button>
            <button class="btn btn-primary" id="backbtn"> <p style="font-family: 'Poppins';margin-top:0.3em;"><a href="index.php" style="color:white;">Back</a></p></button> 
            
        </form>

    </section>
 
</div>
<br>
<footer>

<p>Department Of Computer Engineering</p>

 <p> © 2022-23 </p> 

<p> Guided by: Prof. Jyoti Wadmare </p>

<p>Developed by: Dakshita Kolte, Kapil Bhatia, Palak Desai, Kartikeya Dangat</p>
 
</footer>
<?php include_once 'partials/footers.php'; ?>
</body>
</html>

