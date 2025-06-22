<?php
$page_title = "User KJSIT - Password Reset";
include_once 'partials/headers.php';
include_once 'partials/parsePasswordReset.php';
?>
<style>
    body{
       background: rgb(209,209,209);
    background: radial-gradient(circle, rgba(209,209,209,1) 62%, rgba(178,178,178,1) 100%);
    }
   
 *{
         background: rgba(0,0,0,0);
    }
    .container6{
         display:flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
    }
     .col-lg-7{
        border-radius: 1em;
        background-color: #ffffff;
        width: 50em;
       margin-top:12em;
       height:42em;
       border: 5px solid #9b2928;
box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;

    }
    

</style>
<div class="container6">
    <section class="col col-lg-7">
        <h2  style="font-family: 'Poppins';color:#9b2928; font-weight:bold; text-align:center">Password Reset Form</h2><hr>

        <div>
            <?php if(isset($result)) echo $result; ?>
            <?php if(!empty($form_errors)) echo show_errors($form_errors); ?>
        </div>
        <div class="clearfix"></div>
        <form action="" method="post">
            <div class="form-group">
                <label for="emailField" style="font-family: 'Poppins';color:#9b2928; font-size:x-large">Email</label>
                <input type="text" name="email" class="form-control" id="emailField" placeholder="Your Email Address">
            </div>

            <div class="form-group">
                <label for="tokenField" style="font-family: 'Poppins';color:#9b2928; font-size:x-large">Token</label>
                <input type="text" name="reset_token" class="form-control" id="tokenField" placeholder="Reset Token">
            </div>

            <div class="form-group">
                <label for="passwordField" style="font-family: 'Poppins';color:#9b2928; font-size:x-large">New Password</label>
                <input type="password" name="new_password" class="form-control" id="passwordField" placeholder="New Password">
            </div>

            <div class="form-group">
                <label for="passwordField" style="font-family: 'Poppins';color:#9b2928; font-size:x-large">Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" id="passwordField" placeholder="Confirm Password">
            </div>
            <input type="hidden" name="token" value="<?php if(function_exists('_token')) echo _token(); ?>">
            <button type="submit" name="passwordResetBtn" class="btn btn-primary pull-right" style="font-family: 'Poppins'">Reset Password</button>
        </form>
                 <button style="background-color:#337ab7; color:white; border:none;border-radius: 3px;">  <p style="font-family: 'Poppins';margin-top:0.3em;"><a href="index.php" style="color:white;">Back</a> </p></button> 

    </section>
  
</div>

<?php include_once 'partials/footers.php'; ?>
</body>
</html>