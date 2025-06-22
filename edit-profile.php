<?php
$page_title = "KJSIT- Edit Profile";
include_once 'partials/headers.php';
include_once 'partials/parseProfile.php';
?>
<style>
    body{
           background: rgb(209,209,209);
    background: radial-gradient(circle, rgba(209,209,209,1) 62%, rgba(178,178,178,1) 100%);background-color: #fffae7;
    }
     *{
         background: rgba(0,0,0,0);
    }

        .container4{

         display:flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
    }
     .col-lg-7{
        border-radius: 1em;
    background: white;
        margin-top: 12em;
        height: 30em;
    box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
       border: 5px solid #9b2928;
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
.lead {
    margin-bottom: 20px;
    font-size: 16px;
    font-weight: 300;
    background: white;
    border: 5px #9b2928 solid;
    line-height: 1.4;
    padding: 20px;
    border-radius: 20px;
    box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
}
.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
    padding: 8px;
    line-height: 1.7;
    vertical-align: top;
    border-top: 1px solid #ddd;
}



@media (max-width:350px) and (min-width:300px){
         .col-lg-7 {
    border-radius: 1em;
    background-color: #ffffff;
    margin-top: 3em;
    width: 100%;
    height: 26em;
    border: 5px solid #9b2928;
    height: 100%;
    box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
}
      
.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
    padding: 8px;
    line-height: 1.7;
    vertical-align: top;
    border-top: 1px solid #ddd;
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
    width: 100%;
    height: 26em;
    border: 5px solid #9b2928;
    height: 100%;
    box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
}
      
.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
    padding: 8px;
    line-height: 1.7;
    vertical-align: top;
    border-top: 1px solid #ddd;
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
    width: 100%;
    height: 26em;
    border: 5px solid #9b2928;
    height: 100%;
    box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
}
      
.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
    padding: 8px;
    line-height: 1.7;
    vertical-align: top;
    border-top: 1px solid #ddd;
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
    margin-top: 3em;
    width: 100%;
    height: 26em;
    border: 5px solid #9b2928;
    height: 100%;
    box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
}
      
.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
    padding: 8px;
    line-height: 1.7;
    vertical-align: top;
    border-top: 1px solid #ddd;
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
    width: 100%;
    height: 26em;
    border: 5px solid #9b2928;
    height: 100%;
    box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
}
      
.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
    padding: 8px;
    line-height: 1.7;
    vertical-align: top;
    border-top: 1px solid #ddd;
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
<div class="container4">
    <section class="col col-lg-7">
        <h2 style="font-family: 'Poppins';color:#9b2928;font-weight:bold;font-size:xx-large; text-align:center">Edit Profile </h2><hr>
        <div>
            <?php if(isset($result)) echo $result; ?>
            <?php if(!empty($form_errors)) echo show_errors($form_errors); ?>
        </div>
        <div class="clearfix"></div>

        <?php if(!isset($_SESSION['username'])): ?>
            <P class="lead" style="font-family: 'Poppins';color:#9b2928">You are not authorized to view this page <a href="login.php" style="font-family: 'Poppins'">Login</a>
                Not yet a member? <a href="signup.php" style="font-family: 'Poppins'">Signup</a> </P>
        <?php else: ?>
                <form method="post" action="" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="emailField" style="font-family: 'Poppins';color:#9b2928; font-size:large">Email</label>
                        <input type="text" name="email" class="form-control" id="emailField" value="<?php if(isset($email)) echo $email; ?>">
                    </div>

                    <div class="form-group">
                        <label for="usernameField" style="font-family: 'Poppins';color:#9b2928; font-size:large">Username</label>
                        <input type="text" name="username" value="<?php if(isset($username)) echo $username; ?>" class="form-control" id="usernameField">
                    </div>

                    <div class="form-group">
                        <label for="fileField" style="font-family: 'Poppins';color:#9b2928;font-size:large">Avatar</label>
                        <input type="file" name="avatar" id="fileField" accept="image/jpg, image/jpeg, image/png" >
                    </div>

                    <input type="hidden" name="hidden_id" value="<?php if(isset($id)) echo $id; ?>">
                    <input type="hidden" name="token" value="<?php if(function_exists('_token')) echo _token(); ?>">
                    <button type="submit" name="updateProfileBtn" class="btn btn-primary pull-right" style="font-family: 'Poppins';color:#ffffff">
                        Update Profile</button> 
                </form>
                         <button style="background-color:#337ab7; color:white; border:none;border-radius: 3px;">  <p style="font-family: 'Poppins';margin-top:0.3em; width: 5em"><a href="index.php" style="color:white;">Back</a> </p></button> 

        <?php endif ?>
    </section>
 
</div>
<footer>
 
    <p>Department Of Computer Engineering</p>

 <p>© 2022-23</p>

<p>Guided by: Prof. Jyoti Wadmare</p>

<p>Developed by: Dakshita Kolte, Kapil Bhatia, Palak Desai, Kartikeya Dangat</p>
    
</footer>
<?php include_once 'partials/footers.php'; ?>
</body>
</html>