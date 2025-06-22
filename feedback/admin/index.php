<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title >Admin Login Form </title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="admin\css\style.css">
  
</head>

<body>


<style>
     body{

background-image: url("../images/1bg.jpg");
     }
     


  </style>

  <div class="log-form" >
  <h2 style="color: #9b2928; font-family:'Poppins'; margin:20vh 30vh 5vh 85vh; font-size:200%">Login to the Admin Account</h2>
  <form action="checklogin.php" method="POST" >
    <input type="email" title="username" placeholder="Username" name="email" style="color: #9b2928; font-family:'Poppins'; margin-left:96vh"/><br><br><br>
    <input type="password" title="username" placeholder="Password" name="password" style="color: #9b2928; font-family:'Poppins'; margin-left:96vh;"/><br><br><br>
    <input type="submit" name="login" value="Login" style="color: #9b2928; font-family:'Poppins'; margin-left:106vh">
  </form>
</div><!--end log form -->

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

</body>

</html>
