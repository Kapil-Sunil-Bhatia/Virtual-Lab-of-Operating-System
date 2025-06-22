<?php
$page_title = "KJSIT - Deactivate Account";
include_once 'partials/headers.php';
include_once 'partials/parseProfile.php';
include_once 'partials/parseDeactivate.php';
?>
<style>
    body{
           background: rgb(209,209,209);
    background: radial-gradient(circle, rgba(209,209,209,1) 62%, rgba(178,178,178,1) 100%);
    }
         .container9{
         display:flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
         box-shadow: #000000;
    }
     .col-lg-7{
        border-radius: 1em;
        background-color: #ffffff;
        margin-top: 9em;
        height: 100%;
      box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;

       border: 5px solid #000000;
    }

  
footer {
        display: flow-root;
    line-height: 0.8;
 /*justify-content: space-evenly;*/
  height: 10rem; 
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
    margin-bottom: 0px;
    margin-top: 10px;
    font-size:13px
}
button, input, select, textarea {
    font-family: inherit;
    font-size: inherit;
    margin-bottom: 10px;
    line-height: inherit;
}

@media (max-width:350px) and (min-width:300px){
   
footer{
    height:14rem;
}
footer p{
    line-height:1.3;
    font-size:14px;
}
button, input, select, textarea {
    font-family: inherit;
    font-size: inherit;
    margin-bottom: 10px;
    line-height: inherit;
}
}

@media (max-width:400px) and (min-width:350px){
 
footer{
    height:16rem;
}
footer p{
    line-height:1.4;
    font-size:15px;
}
button, input, select, textarea {
    font-family: inherit;
    font-size: inherit;
    margin-bottom: 10px;
    line-height: inherit;
}
}

@media (max-width:450px) and (min-width:400px){
footer{
    height:14rem;
}
footer p{
    line-height:1.3;
    font-size:14px;
}
button, input, select, textarea {
    font-family: inherit;
    font-size: inherit;
    margin-bottom: 10px;
    line-height: inherit;
}
}

@media (max-width:768px) and (min-width:450px){
    
footer{
    height:14rem;
}
footer p{
    line-height:1.3;
    font-size:14px;
}
button, input, select, textarea {
    font-family: inherit;
    font-size: inherit;
    margin-bottom: 10px;
    line-height: inherit;
}
}
@media (max-width:991px) and (min-width:768px){

footer{
    height:14rem;
}
footer p{
    line-height:1.3;
    font-size:14px;
}
button, input, select, textarea {
    font-family: inherit;
    font-size: inherit;
    margin-bottom: 10px;
    line-height: inherit;
}
}


</style>
<div class="container9">
    <section class="col col-lg-7">
        <h2 style="font-family: 'Poppins'; text-align:center;">Deactivate Account </h2>
        <div>
            <?php if(isset($result)) echo $result; ?>
            <?php if(!empty($form_errors)) echo show_errors($form_errors); ?>
        </div>
        <div class="clearfix"></div>

        <?php if(!isset($_SESSION['username'])): ?>
            <P class="lead" style="font-family: 'Poppins'">You are not authorized to view this page <a href="login.php" style="font-family: 'Poppins'">Login</a>
                Not yet a member? <a href="signup.php" style="font-family: 'Poppins'">Signup</a> </P>
        <?php else: ?>
            <!-- Deactivate Account Area -->
            <hr />
            <form method="post" action="" enctype="multipart/form-data">
                <input type="hidden" name="hidden_id" value="<?php if(isset($id)) echo $id; ?>">
                <input type="hidden" name="token" value="<?php if(function_exists('_token')) echo _token(); ?>">
                <button onclick="return confirm('Do you really want to deactivate your account?')"
                        type="submit" name="deleteAccountBtn" class="btn btn-danger btn-block pull-right" style="font-family: 'Poppins'">
                    Deactivate Your Account</button> <br />
            </form>
            <br><br>
                  <button style="background-color:#337ab7; color:white; border:none;border-radius: 3px;">  <p style="font-family: 'Poppins';margin-top:0.3em;"><a href="index.php" style="color:white;">Back</a> </p></button> 

        <?php endif ?>
    </section>
 
</div>

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