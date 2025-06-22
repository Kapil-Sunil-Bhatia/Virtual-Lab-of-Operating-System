<?php
$page_title = "KJSIT -  {$_GET['u']}'s Profile";
include_once 'partials/headers.php';
include_once 'partials/parseProfile.php';

?>
<style>
    body{
           background: rgb(209,209,209);
    background: radial-gradient(circle, rgba(209,209,209,1) 62%, rgba(178,178,178,1) 100%);
    }
        .container7{
         display:flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
           margin-top: 12em;
    }
     .col-lg-7{
        border-radius: 1em;
        background-color: #ffffff;
        width: 50em;
       border: 5px solid #9b2928;
    
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
    <div >
        <h1 style="font-family: 'Poppins';color:black; font-size:x-large"><?php if(isset($username)) echo "{$username}'s"; ?> Profile</h1>
            <section class="col col-lg-7">
                <div class="row col-lg-3" style="margin-bottom: 10px;">
                    <img src="<?php if(isset($profile_picture)) echo $profile_picture; ?>" class="img img-rounded" width="100" height="100"/>
                </div>

                <table class="table table-bordered table-condensed">
                    <tr><th style="width: 20%; font-family: 'Poppins';color:#9b2928; font-size:x-large">Username:</th><td style="font-family: 'Poppins';color:#9b2928; font-size:x-large"><?php if(isset($username)) echo $username; ?></td></tr>
                    <tr><th style="font-family: 'Poppins';color:#9b2928; font-size:x-large">Status:</th><td style="font-family: 'Poppins';color:#9b2928; font-size:x-large"><?php if(isset($status)) echo $status; ?></td></tr>
                    <tr><th style="font-family: 'Poppins';color:#9b2928; font-size:x-large">Date Joined:</th><td style="font-family: 'Poppins';color:#9b2928; font-size:x-large"><?php if(isset($date_joined)) echo $date_joined; ?></td></tr>
                </table>
            </section>
    </div>
</div>
<footer>
    <p style="font-family: 'Poppins';color:white;margin-bottom: 0px;margin-top: 10px; font-size:large">Guided by: Prof. Jyoti Wadmare</p>
    <p style="font-family: 'Poppins';color:white;;margin-bottom: 0px;margin-top: 10px; font-size:large">Developed by: Dakshita Kolte, Kapil Bhatia, Palak Desai, Kartikeya Dangat</p>
</footer>
<?php include_once 'partials/footers.php'; ?>
</body>
</html>