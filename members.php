<?php
$page_title = "KJSIT - Members";
include_once 'partials/headers.php';
include_once 'partials/parseMembers.php';


// else{
//     $query = "SELECT * FROM `users`";
//     $search_result = filterTable($query);
// }


function filterTable($query){
    $con=mysqli_connect('localhost','','','');
    $filter_Result = mysqli_query($con,$query);
    return $filter_Result;
}



?>
<style>

    body{
    background: rgb(209,209,209);
    background: radial-gradient(circle, rgba(209,209,209,1) 62%, rgba(178,178,178,1) 100%);
    }

  table, th, td {
  border: 2px solid black;
  /* border-collapse: collapse; */
}
th, td {

 padding: 10px;
}
.details{
    width:100%;
}
.details li{
    display: block;
}
ol, ul {
    margin-top: 0;
    margin-bottom: 10px;
    display: flex;
    font-size: 12px;
    font-weight: 700;
}
.table {
    width: 100%;
    max-width: 100%;
    margin-bottom: 120px;
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



@media (max-width:350px) and (min-width:300px){
    
.table {
    width: 100%;
    max-width: 100%;
    margin-bottom: 120px;
}
ol, ul {
    margin-top: 0;
    margin-bottom: 10px;
    display: block;
    font-size: 12px;
    font-weight: 700;
}
.details{
    width:100%;
}
.details li{
    display: block;
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
     
     .table {
    width: 100%;
    max-width: 100%;
    margin-bottom: 120px;
}     
.details li{
    display: block;
}
ol, ul {
    margin-top: 0;
    margin-bottom: 10px;
    display: block;
    font-size: 12px;
    font-weight: 700;
}
.details{
    width:100%;
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
.table {
    width: 100%;
    max-width: 100%;
    margin-bottom: 120px;
}
.details li{
    display: block;
}
.details{
    width:100%;
}
ol, ul {
    margin-top: 0;
    margin-bottom: 10px;
    display: block;
    font-size: 12px;
    font-weight: 700;
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
.table {
    width: 100%;
    max-width: 100%;
    margin-bottom: 120px;
}
.details li{
    display: block;
}
ol, ul {
    margin-top: 0;
    margin-bottom: 10px;
    display: block;
    font-size: 12px;
    font-weight: 700;
}
  footer{
     height:16rem;
 }
 footer p{
     font-size:16px;
     line-height:1.3;
 }
 .details{
    width:100%;
}
}

@media (max-width:768px) and (min-width:500px){
.table {
    width: 100%;
    max-width: 100%;
    margin-bottom: 120px;
}
.details li{
    display: block;
}
ol, ul {
    margin-top: 0;
    margin-bottom: 10px;
    display: block;
    font-size: 12px;
    font-weight: 700;
}
  .details{
    width:100%;
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
<html>



    <body>
            <div class="container">
                <div style="margin-top:5em" >
                    <h1 style="color:#9b2928;font-family: 'Poppins'; font-weight:bold">Login System Members</h1>
                    <br>
                    <div>


<!-- Search results working -->
                <form action="" method="GET">
                    <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search data.."><br>
                    <button type="Submit" class="btn btn-primary">Search</button><br><br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <?php 
									$con=mysqli_connect('localhost','','','');
                                    $comps = "SELECT * FROM users WHERE Department LIKE '%Comp%'";
                                    if ($result = mysqli_query($con, $comps)) {
                                    // Return the number of rows in result set
                                    $compcount = mysqli_num_rows( $result );
                                    // Display result
                                    printf("Computer Students :  %d\n", $compcount);
                                    } 
                                    ?>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <?php
								$con=mysqli_connect('localhost','','','');
                                $aids = "SELECT * FROM users WHERE Department LIKE '%ai-ds%'";
                                if ($result = mysqli_query($con, $aids)) {
                                   // Return the number of rows in result set
                                   $aidscount = mysqli_num_rows( $result );
                                   // Display result
                                   printf("AI-DS Students :  %d\n", $aidscount);
                                }
                                ?> 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                            
                                <?php
								$con=mysqli_connect('localhost','','','');
                                $extc = "SELECT * FROM users WHERE Department LIKE '%extc%'";
                                if ($result = mysqli_query($con, $extc)) {
                                   // Return the number of rows in result set
                                   $extccount = mysqli_num_rows( $result );
                                   // Display result
                                   printf("EXTC Students :  %d\n", $extccount);
                                }
                                ?> 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                               
                             <?php 
                                $it = "SELECT * FROM users WHERE Department LIKE '%it%'";
                                if ($result = mysqli_query($con, $it)) {
                                   // Return the number of rows in result set
                                   $itcount = mysqli_num_rows( $result );
                                   // Display result
                                   printf("IT Students :  %d\n", $itcount);
                                }
                                ?> 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <?php
								$con=mysqli_connect('localhost','','','');
                                $sql = "SELECT * from users";
                                   if ($result = mysqli_query($con, $sql)) {
                                   // Return the number of rows in result set
                                   $rowcount = mysqli_num_rows( $result );
                                   // Display result
                                   printf("Total Students :  %d\n", $rowcount);
                                }
                            ?>

        
                            <br><br><br>
                            <div class="search_result"></div>
                            <div>
                            <table class="table table-striped" id="myTable" align="center">
                                    <tr>
                                            <th style="background-color:grey; color:floralwhite; background-color:#9b2928 ;text-align:center !important">USERNAME</th>
                                            <th style="background-color:grey; color:floralwhite; background-color:#9b2928;text-align:center !important">EMAIL-ID</th>
                                            <th style="background-color:grey; color:floralwhite; background-color:#9b2928;text-align:center !important">DATE JOINED</th>
                                            <th style="background-color:grey; color:floralwhite; background-color:#9b2928;text-align:center !important">DEPARTMENT</th>
                                        </tr> 
                           

                        <!--the pagination code though working but not with search-->

                            <?php
                            

                        // $sql="select * from users";
                        // $rs_result=mysqli_query($con,$sql);
                        // $num=mysqli_num_rows($rs_result);
                        //     $numberPages=10;
                        //     $totalPages=ceil($num/$numberPages);
                        //     //echo $totalPages;
                        //     // creating pagination buttons
                        //    for($btn=1;$btn<=$totalPages;$btn++){
                        //     echo '<button style="background-color:#9b2928; margin:4px" class="btn btn-dark"><a href="members.php?page='.$btn.'" style="color:#ffffff "class="text-light">'.$btn.'</a></button>';
                        //     }
                            
                        //     if(isset($_GET['page'])){
                        //         $page=$_GET['page'];
                        //         // echo $page;
                        //     }else
                        //     {
                        //         $page=1;
                        //     }
                            // 1 ->>>>>>> 0,10
                            // 2->>>>>>> 10,10
                            // 3->>>>>>> 20,10
                            // (pnum-1)*$numberPages

                            // $startinglimit=($page-1)*$numberPages;
                            // $sql="Select * from users limit " .$startinglimit.','.$numberPages;
                            // $rs_result=mysqli_query($con,$sql);


                            //echo $num;
                            //  while($row=mysqli_fetch_assoc($rs_result)){
                            //     echo '<tr>
                            //     <th>'.$row['username'].'</th>
                            //     <th>'.$row['email'].'</th>
                            //     <th>'.$row['join_date'].'</th>
                            //     <th>'.$row['Department'].'</th>
                            // </tr>';
                            //  }
                            if(isset($_GET['search'])){
                                $filtervalue = $_GET['search'];
                                $query = "SELECT * FROM users WHERE CONCAT(username,email,Department) LIKE '%$filtervalue%'";
                                $query_run = mysqli_query($con, $query);

                                if(mysqli_num_rows($query_run) > 0){
                                    foreach($query_run as $items){
                                        
                                        ?>
                                        
                                        <tr>
                                            
                                            <td><?= $items['username']; ?></td>
                                            <td><?= $items['email']; ?></td>
                                            <td><?= $items['join_date']; ?></td>
                                            <td><?= $items['Department']; ?></td>
                                        </tr>


                                        <?php
                                    }
                                   
                                }
                                else{
                                    ?>
                                    <tr>
                                        <td colspan="4">No Records found</td>
                                    </tr>
                                    <?php
                                }


                            // $valueToSearch = $_POST['valueToSearch'];
                            // $query = "SELECT*FROM`users`WHERE`Department`LIKE'%".$valueToSearch."%'";
                            
                            // $search_result = filterTable($query);
                            // // $valueToSearch = $_POST['valueToSearch'];
                            // // echo $valueToSearch;
                            }
                            ?>
                                </table>
                             </div>
                            </form>
                            </div>
                        <br>
                       <br>
                       

            <section class="col col-lg-20">
                <?php if(count($members) > 0): ?>
                    <?php foreach ($members as $member): ?>
                    <?php endforeach; ?>

                <?php else: ?>
                    <p>No member found</p>
                <?php endif; ?>
            </section>
         </div>
</div>
<footer>
    <p style="font-family: 'Poppins';color:white;margin-bottom: 0px;margin-top: 10px; font-size:large">Guided by: Prof. Jyoti Wadmare</p>
        <p style="font-family: 'Poppins';color:white;margin-bottom: 0px;margin-top: 10px; font-size:large">Department of Computer Engineering</p>
    <p style="font-family: 'Poppins';color:white;;margin-bottom: 0px;margin-top: 10px; font-size:large">Developed by: Dakshita Kolte, Kapil Bhatia, Palak Desai, Kartikeya Dangat</p>
</footer>
<?php include_once 'partials/footers.php'; ?>




</body>
</html>