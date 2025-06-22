<?php
$page_title = "KJSIT - KJSIT";
include_once 'partials/headers.php';
include_once 'partials/parseSignup.php';
?>
<style>
    body{
     background: rgb(209,209,209);
    background: radial-gradient(circle, rgba(209,209,209,1) 62%, rgba(178,178,178,1) 100%);
    }
          .container8{

         display:flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
    }
    .flag {
    height: 36rem;
    width: 100%;
    display: inline-block;
    position: inherit;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    border-radius: 1em;
    border: 5px solid #9b2928;
    box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
    margin-top: 7rem;
    background-color: snow;
}
.flag h1{
    color:#9b2928;
    font-family: 'Noto Serif', serif;
    font-style: ITALIC;
    font-size: 5rem;
    font-weight:bolder;
    margin-top:-30px;
    
}
.lead{
    font-size: 220%;
    font-family: Poppins;
    color: #9b2928;
    margin-top: 3rem;
}
.lead h3{
    font-family: 'Poppins';
    color:white;
    font-size:200%;
}
.lead .btn{
    background-color:#9b2928;
    border:none; 
    padding:10px; 
    border-radius: 10px ;
    width:5em;
}
.lead a{
    color:#ffffff;
}
.lead p{
    font-family: 'Poppins';
    color:#9b2928;
    font-size:200%;
    text-decoration:none
}
.button{
    background-color:#9b2928;
    color:white; 
    border:none;
    border-radius: 10px; 
    width: 5em; 
}
.container{
  margin-right:0;
  z-index: -1;
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
.btn{
      width: 10%;
    font-size: 18px;
    font-weight: 400;
    letter-spacing: 1px;
    background: #9b2928;
}
.btn a{
    color: #ffffff;
    font-family: Poppins;
}

@media (max-width:350px) and (min-width:300px){
    .flag {
    height: 100%;
    width: 100%;
    display: inline-block;
    position: inherit;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    border-radius: 1em;
    border: 5px solid #9b2928;
    box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
    margin-top: 3rem;
    background-color: snow;
    margin-left: 13px;
}
.flag h1 {
    color: #9b2928;
    font-family: 'Noto Serif', serif;
    font-style: ITALIC;
    font-size: 170%;
    line-height:1.3;
    margin-top: -50px;
    font-weight: bolder;
}
.btn{
    font-weight: 400;
    letter-spacing: 1px;
    margin-top: -30px;
    width:50%;
}
.lead{
    display:block;
    font-size: 170%;
    font-family: Poppins;
    color: #9b2928;
    margin-top: 3rem;
}

.container{
    width: 140%;
}
footer{
    height:14rem;
}
footer p{
    line-height:1.3;
    font-size:14px;
}
}

@media (max-width:400px) and (min-width:350px){
    .flag {
    height: 100%;
    width: 100%;
    display: inline-block;
    position: inherit;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    border-radius: 1em;
    border: 5px solid #9b2928;
    box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
    margin-top: 6rem;
    background-color: snow;
    margin-left: 13px;
}
.flag h1 {
    color: #9b2928;
    font-family: 'Noto Serif', serif;
    font-style: ITALIC;
    font-size: 190%;
    line-height:1.3;
    margin-top: -60px;
    font-weight: bolder;
}
.btn{
    width: 40%;
    font-weight: 400;
    letter-spacing: 1px;
}
.lead {
    display: block;
    font-size: 180%;
    font-family: Poppins;
    color: #9b2928;
    margin-top: 3rem;
}
.container{
    width: 140%;
}
footer{
    height:16rem;
}
footer p{
    line-height:1.4;
    font-size:15px;
}
}

@media (max-width:450px) and (min-width:400px){
    .flag {
    height: 100%;
    width: 100%;
    display: inline-block;
    position: inherit;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    border-radius: 1em;
    border: 5px solid #9b2928;
    box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
    margin-top: 6rem;
    background-color: snow;
    margin-left: 13px;
}
.flag h1 {
    color: #9b2928;
    font-family: 'Noto Serif', serif;
    font-style: ITALIC;
    font-size: 220%;
    line-height:1.3;
    margin-top: -40px;
    font-weight: bolder;
}
.btn{
    width: 40%;
    font-weight: 400;
    letter-spacing: 1px;
    margin-top: -30px;
}
.lead {
    display: block;
    font-size: 190%;
    font-family: Poppins;
    color: #9b2928;
    margin-top: 3rem;
}
.container{
    width: 140%;
}
footer{
    height:14rem;
}
footer p{
    line-height:1.3;
    font-size:14px;
}
}

@media (max-width:768px) and (min-width:450px){
    .flag {
    height: 100%;
    width: 100%;
    display: inline-block;
    position: inherit;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    border-radius: 1em;
    border: 5px solid #9b2928;
    box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
    margin-top: 6rem;
    background-color: snow;
    margin-left: 13px;
}
.flag h1 {
    color: #9b2928;
    font-family: 'Noto Serif', serif;
    font-style: ITALIC;
    font-size: 230%;
    line-height:1.3;
    margin-top: -30px;
    font-weight: bolder;
}
.btn{
    width: 7em;
    font-weight: 400;
    letter-spacing: 1px;
    margin-top: -30px;
}
.lead {
    display: block;
    font-size: 200%;
    font-family: Poppins;
    color: #9b2928;
    margin-top: 3rem;
}
.container{
    width: 140%;
}
footer{
    height:14rem;
}
footer p{
    line-height:1.3;
    font-size:14px;
}
}
@media (max-width:991px) and (min-width:768px){
    .flag {
    height: 100%;
    width: 100%;
    display: inline-block;
    position: inherit;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    border-radius: 1em;
    border: 5px solid #9b2928;
    box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
    margin-top: 6rem;
    background-color: snow;
    margin-left: 13px;
}
.flag h1 {
    color: #9b2928;
    font-family: 'Noto Serif', serif;
    font-style: ITALIC;
    font-size: 250%;
    line-height:1.3;
    margin-top: -20px;
    font-weight: bolder;
}
.btn{
    width: 7em;
    font-weight: 400;
    letter-spacing: 1px;
    margin-top: -30px;
}
.lead {
    display: block;
    font-size: 210%;
    font-family: Poppins;
    color: #9b2928;
    margin-top: 3rem;
}
.container{
    width: 140%;
}
footer{
    height:14rem;
}
footer p{
    line-height:1.3;
    font-size:14px;
}
}
</style>
<div class="container8">
    <div class="flag">
        <h1 style="font-family: 'Poppins';color:#9b2928; font-weight:bold; text-align:center">Virtual Lab of Operating System</h1><br>
        <?php if(isset($result)) echo $result; ?>
    </div>
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