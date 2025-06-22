<!DOCTYPE html>
<html lang="en" >

<head>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <style>
#customers {
  font-family: "Poppins", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
  background-color: #eeeeee;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}
#customers tr:nth-child(odd){background-color: #f2f2f2;}
#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #9b2928;
  color: white;
}
.block {
  display: block;
  width: 100%;
  border: none;
  background-color: #9b2928;
  color: white;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  text-align: center;
}

.block:hover {
  background-color: #ddd;
  color: black;
}
</style>
  <meta charset="UTF-8">
  <title>Feedback</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  <style>
     body{
background-image: url("../images/1bg.jpg");
     }
     


  </style>
 <!-- <form action = "" method="POST"> 
          <div class="w3-show-inline-block">
          <div class="w3-bar">
            <center>
              <input type="submit" value="Download as PDF" name="logout" class="w3-btn w3-black">
            </center>
        </div>
        </div>  
  </form> -->
   <form action = "logout.php" method="POST"> 
          <div class="w3-show-inline-block">
          <div class="w3-bar">
            <center>
              <input type="submit" value="Logout" name="logout" class="w3-btn w3-black" style="font-family:Poppins; font-size: 120%;font-weight:BOLD;text-align:center; background-color: #541212!important; margin: 20px 0 20px 20px;">
            </center>
        </div>
        </div>  
  </form>



  <?php 
  session_start();
  require 'config.php';
   if (isset($_SESSION['login_user'])) {
          $userLoggedIn = $_SESSION['login_user'];
          $result = mysqli_query($con,"SELECT * FROM poll");

            echo "<table border='1' id='customers'>
            <tr>
            <th style='font-family:Poppins; font-size:135%'>Name</th>
            <th style='font-family:Poppins; font-size:135%'>Email</th>
            <th style='font-family:Poppins; font-size:135%'>Phone</th>
            <th style='font-family:Poppins; font-size:135%'>Feedback</th>
            <th style='font-family:Poppins; font-size:135%'>Suggestions</th>
            </tr>";

            while($row = mysqli_fetch_array($result))
            {
            echo "<tr>";
            echo "<td style='font-family:Poppins; text-align:center'>" . $row['name'] . "</td>";
            echo "<td style='font-family:Poppins; text-align:center'>" . $row['email'] . "</td>";
            echo "<td style='font-family:Poppins; text-align:center'>" . $row['phone'] . "</td>";
            echo "<td style='font-family:Poppins; text-align:center'>" . $row['feedback'] . "</td>";
            echo "<td style='font-family:Poppins; text-align:center'>" . $row['suggestions'] . "</td>";
            echo "</tr>";
            }
            echo "</table>";                                                                    
}
  else {
  //header("Location: index.php");
  }




   ?>
    
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <!-- <script src="pdfFromHTML.js"></script> -->
  
</body>

</html>
