<?php
$page_title = "User Authentication - Edit Profile";
include_once 'partials/headers.php';
include_once 'partials/parseProfile.php';
include_once 'partials/parseChangePassword.php';
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
    background: radial-gradient(circle, rgba(209,209,209,1) 62%, rgba(178,178,178,1) 100%);;
    }
      .container7{
         display:flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
    }
     .col-lg-7{
        border-radius: 1em;
        background-color: #ffffff;
        width: 50em;
       border: 5px solid #9b2928;
       margin-top: 5em;
       height:38em;
       box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
    }
    footer {
    display: flex;
 justify-content: space-evenly;
 height: 5rem;
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
</style>


    <div class="container7">
    <section class="col col-lg-7">
        <h2 style=" font-family:'Poppins';text-align:center; color:#9b2928; font-weight:bold">Password Management </h2>
        <div>
            <?php if(isset($result)) echo $result; ?>
            <?php if(!empty($form_errors)) echo show_errors($form_errors); ?>
        </div>
        <div class="clearfix"></div>

        <?php if(!isset($_SESSION['username'])): ?>
            <P class="lead">You are not authorized to view this page <a href="login.php">Login</a>
                Not yet a member? <a href="signup.php">Signup</a> </P>
        <?php else: ?>
            <hr />
            <form method="post" action="" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="currentpasswordField" style="color:#9b2928; font-family:'Poppins';font-size:large">Current Password</label>
                    <input type="password" name="current_password" class="form-control"
                           id="currentpasswordField" placeholder="Current Password">
                </div>

                <div class="form-group">
                    <label for="newpasswordField"  style="color:#9b2928; font-family:'Poppins';font-size:large">New Password</label>
                    <input type="password" name="new_password" class="form-control"
                           id="newpasswordField" placeholder="New Password">
                </div>

                <div class="form-group">
                    <label for="confirmpasswordField"  style="color:#9b2928; font-family:'Poppins';font-size:large">Password</label>
                    <input type="password" name="confirm_password" class="form-control"
                           id="confirmpasswordField" placeholder="Confirm new Password">
                </div>

                <input type="hidden" name="hidden_id" value="<?php if(isset($id)) echo $id; ?>">
                <input type="hidden" name="token" value="<?php if(function_exists('_token')) echo _token(); ?>">
                <button type="submit" name="changePasswordBtn" class="btn btn-primary pull-right">
                    Change Password</button> 
            </form>
         <button style="background-color:#337ab7; color:white; border:none;border-radius: 3px;">  <p style="font-family: 'Poppins';margin-top:0.3em;"><a href="index.php" style="color:white;">Back</a> </p></button> 

        <?php endif ?>
    </section>
    
</div>
<br>
<footer>
    <p style="font-family: 'Poppins';color:white;margin-bottom: 0px;margin-top: 10px; font-size:large">Guided by:  Jyoti Wadmare</p>
    <p style="font-family: 'Poppins';color:white;;margin-bottom: 0px;margin-top: 10px; font-size:large">Developed by: Dakshita Kolte, Kapil Bhatia, Palak Desai, Kartikeya Dangat</p>
</footer>
<?php include_once 'partials/footers.php'; ?>
</body>
</html>

