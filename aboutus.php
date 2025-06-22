<?php 
$page_title = "KJSIT - About Us";
include_once 'partials/headers.php';
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
        .about{
            padding-top: 4em;
            height:200rem;
        }
        .abt{
            color: #541212;
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

@media (max-width:350px) and (min-width:300px){
    .img{
    height:50px ;
    width: 100px;
    margin-right:50px;
        margin-left: 15px;
    display:flex;
    flex-direction:row;
    -ms-flex-align: start;
}
     
.navbar-toggle {
    position: absolute;
    float: right;
    padding: 9px 10px;
    margin-top: 8px;
    margin-bottom: 8px;
    margin-left: 85%;
    background-color: transparent;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;
}
.navbar-inverse .navbar-toggle {
    border-color: #333;
}
.navbar-nav>li>a {
    padding-top: 10px;
    padding-bottom: 10px;
    line-height: 20px;
    margin-left: 5%;
    z-index: 5000;
}
}

@media (max-width:400px) and (min-width:350px){
    .img{
    height:50px ;
    width: 150px;
    margin-right:50px;
    margin-left: 15px;
    display:flex;
    flex-direction:row;
    -ms-flex-align: start;
}

.navbar-toggle {
    position: absolute;
    float: right;
    padding: 9px 10px;
    margin-top: 8px;
    margin-bottom: 8px;
    margin-left: 90%;
    background-color: transparent;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;
}
.navbar-inverse .navbar-toggle {
    border-color: #333;
}

.navbar-nav>li>a {
    padding-top: 10px;
    padding-bottom: 10px;
    line-height: 20px;
    margin-left: 5%;
        z-index: 5000;

}
}

@media (max-width:450px) and (min-width:400px){
    .img{
    height:60px ;
    width: 180px;
    margin-right:50px;
    margin-left: 15px;
    display:flex;
    flex-direction:row;
    -ms-flex-align: start;
}

.navbar-toggle {
    position: absolute;
    float: right;
    padding: 9px 10px;
    margin-top: 8px;
    margin-bottom: 8px;
    margin-left: 90%;
    background-color: transparent;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;
}
.navbar-inverse .navbar-toggle {
    border-color: #333;
}
.navbar-nav>li>a {
    padding-top: 10px;
    padding-bottom: 10px;
    line-height: 20px;
    margin-left: 5%;
        z-index: 5000;

}
}

@media (max-width:768px) and (min-width:450px){
    .img{
    height:60px ;
    width: 180px;
    margin-right:50px;
    margin-left: 15px;
    display:flex;
    flex-direction:row;
    -ms-flex-align: start;
}
 
.navbar-toggle {
    position: absolute;
    float: right;
    padding: 9px 10px;
    margin-top: 8px;
    margin-bottom: 8px;
    margin-left: 93%;
    background-color: transparent;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;
}
.navbar-inverse .navbar-toggle {
    border-color: #333;
}
.navbar-nav>li>a {
    padding-top: 10px;
    padding-bottom: 10px;
    line-height: 20px;
    margin-left: 5%;
        z-index: 5000;

}
}

@media (max-width:991px) and (min-width:768px){
    .img{
    height:70px ;
    width: 200px;
    margin-right:50px;
    margin-left: 0px;
    display:flex;
    flex-direction:row;
    -ms-flex-align: start;
}

.navbar-toggle {
    position: absolute;
    float: right;
    padding: 9px 10px;
    margin-top: 8px;
    margin-bottom: 8px;
    margin-left: 93%;
    background-color: transparent;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;
}
.navbar-inverse .navbar-toggle {
    border-color: #333;
}
.navbar-nav>li>a {
    padding-top: 10px;
    padding-bottom: 10px;
    line-height: 20px;
    margin-left: 5%;
    width:100%;
        z-index: 5000;

}
}

    </style>
    
   
    <div class="about"> 
<h1 class="abt"><u>About Somaiya Vidyavihar</u></h1>
   <br>
    <h6 style="line-height: 1.6;">
      <h4 style="line-height: 1.6; font-family: Poppins ; text-align: justify;">
        Padmabhushan Shri Karamshi Jethabhai Somaiya founded Somaiya Vidyavihar an education trust in 1959,
         to provide quality holistic education. It was founded on the belief that, 
         education is an important pillar of nation building with the power to change lives, and that it is the duty of
          the privileged to help provide it to whoever aspires to be educated. Somaiya Vidyavihar (SVV) encompasses 34 institutions, 
          with more than 39,000 students and 1,500 faculty. Its educational institutes are spread across two main campuses - a 50 acre complex in Vidyavihar
           and a 28 acre complex in Sion both located in the heart of Mumbai besides a number of smaller campuses across rural Maharashtra, Karnataka and Gujarat. 
           SVV offers Degree, Diploma & Certificate courses at Undergraduate, Post Graduate and Doctoral levels. Somaiya Vidyavihar also runs a few autonomous 
           Post-Graduate Courses, Vocational Training Courses and High Schools. Somaiya Vidyavihar fosters an ecosystem that excels in education, research and service, 
           a place where knowledge is preserved, disseminated and new knowledge is created. It is known as much for its Science, Technology, Medicine, Engineering, Management, 
           Social Sciences and Commerce programs, as for its programs for academic studies in various Faiths and Cultures of India. Shri. Samir Somaiya, a Cornel University 
           and Harvard Business School alumnus is the President of Somaiya Vidyavihar. For more details,   visit <a href="https://kjsieit.somaiya.edu.in/en">kjsit.somaiya.edu/en</a>
    </h4>
</h6>

<br>
<h1 class="abt"><u> About K. J. Somaiya Institute of Technology, Sion</u></h1>
  <br>
    <h6 style="line-height: 1.6;">

      <h4 style="line-height: 1.6; font-family: Poppins ; text-align: justify;">
      
The K. J. Somaiya Institute of Technology (KJSIT), was established by the Somaiya Trust in the year 2001 at Ayurvihar campus, Sion. 
The institute was set up primarily in response to the need for imparting quality education in the modern field of Information Technology and
 the allied branches of Engineering and Technology. The College is housed in a G+8 storeyed building and in International Standard of Riturang building with airy classrooms, 
 hi-tech laboratories, auditorium, canteen, common rooms etc.

    </h4>
    </h6>

      <br>
<h1 class="abt"><u>    Vision of the Institute</u></h1>
    <br>


    <h6 style="line-height: 1.6;">
      <h4 style="line-height: 1.6; font-family: Poppins; text-align: justify;">
    

⫸ To emerge as a synonym of quality, excellence and commitment in the field of engineering education by unlocking potential,
 nurturing talent and transforming young minds to create future ready engineers.
    </h4>
    </h6>

<br>

<h1 class="abt"><u> Mission of the Institute</u></h1>
    <br>


    <h6 style="line-height: 1.6;">
      <h4 style="line-height: 1.6; font-family: Poppins; text-align: justify;">
    

⫸ To provide students with a thorough knowledge of engineering to refine their professional skills.<br>
⫸ To nurture creativity and innovation while encouraging multidisciplinary interaction.<br>
⫸ To train students to be industry ready and capable of working effectively as an individual and in team.<br>
⫸ To inculcate ethical behaviour, responsibility and commitment among students.
    </h4>
</h6>


<br>

<h1 class="abt"><u> Quality Policy</u></h1>
    <br>


    <h6 style="line-height: 1.6;">
      <h4 style="line-height: 1.6; font-family: Poppins; text-align: justify;">
    

⫸ To conform to the requirements of regulatory authorities viz. AICTE, DTE and University of Mumbai.<br>
⫸ To maintain transparency and fair practices in admission and recruitment processes.<br>
⫸ To ensure continuous evaluation and examination process.<br>
⫸ To ensure best academic ambience by providing high-end equipment in the laboratories, computers, learning resources and smart classrooms.<br>
⫸ To ensure a safe and secure environment for all stakeholders.<br>
⫸ To promote industry institute interaction, research & development, placements, technical, co-curricular and extracurricular activities.
    </h4>
    </h6>

<br>

<h1 class="abt"><u> Objectives</u></h1>
    <br>


    <h6 style="line-height: 1.6;">
      <h4 style="line-height: 1.6; font-family: Poppins; text-align: justify;">
⫸ To focus on persistent improvement in processes related to teaching, learning and evaluation and to promote a culture of research and development among staff and students. <br>
⫸ To develop technical and interpersonal skills so that the students translate knowledge into action contributing to the benefit of the society.<br>
⫸ To enhance the learning experience of students by honing versatility through diverse activities.
    </h4>
</h6>



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
   
   <?php include_once 'partials/footers.php' ?>
   
</body>

</html>