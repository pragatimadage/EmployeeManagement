                    <?php
                    session_start();
                    if(isset($_SESSION['flag']))
                    {
                    ?>

                    <!DOCTYPE html>
                    <html lang="en">
                      <title>Bootstrap Example</title>
                        <head>
                      <meta charset="utf-8">
                      <meta name="viewport" content="width=device-width, initial-scale=1">
                      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
                      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
                            <style>
                                /*  
                                design for logout*/
/*
                                body{
                                    background-color:#dcdcdc;                                  
                                }
*/
                                 body{
                                         background-color :#f4f3ef;
                                }
                                .navbar{
                                    background-color:#062456;
                                }
                                .btn{
                                    margin-right: 10px;
                                    margin-top: 8px;
                                    width: 180px;
                                color: white;
/*                                    color:aqua*/
/*                                    color:cornflowerblue;*/
                                }
                                .btn hover{
                                    background-color: black;
/*                                    coskybluelor:skyblue;*/
                                }
                                .dropdown-menu{
                                   margin-right: 10px; 
                                     width: 180px;
                                    text-align: center;
                                    background-color:#fcfcfc;
                                    border-radius: 15px;
/*                                    color:white;*/
                                    height:35px;
                                    font-weight:bold;
                                    font-family: font-family: "museo-sans", helvetica, sans-serif;
                                    
                                   
                                }
                                .dropdown-menu li a{
/*                                    background-color:lightskyblue;*/
/*                                    color:darkslategrey;*/
                                    outline: none;
                                    border-radius: 15px;
                                }
                                .navbar-nav li a{
                                   
                                    font-family: font-family: "museo-sans", helvetica, sans-serif;
                                    font-size:14px;
                                    letter-spacing: 2px;
                                    margin-left: 50px;
                               }
                                .navbar-nav li a:hover,.navbar-nav li.active a{
                                    color: BLACK
                                        !important;
                                    background-color:#fcfcfc
                                        !important;
                                }
/*
                                .card{
                                    background-color:lawngreen;
                                }
*/
                                input[type=text] {
                                    width: 500px;
                                    box-sizing: border-box;
                                    border: 2px solid skyblue;
                                    border-radius: 20px;
                                    font-size: 14px;
                                    background-color:white;
                                    background-position: 10px 10px; 
                                    background-repeat: no-repeat;
/*                                    padding: 12px 20px 12px 40px;*/
                                    padding: 10px 15px 10px 30px;
                                    -webkit-transition: width 0.4s ease-in-out;
                                    transition: width 0.4s ease-in-out;
                                         outline: none;
                                    margin-top: 15px;
                                }
                                .InputWithIcon input[type=text]{
                                       padding-left: 40px; 

                                    }
                                    .InputWithIcon{
                                        position: relative;
                                        float: right;
                                    }
                                    .InputWithIcon i{
                                        position:absolute;
                                        left:0;
                                        top:8px;
                                        padding: 24px 10px;

                                    }               
                                h3{ 
                                    padding-top: 5px;
                                    height: 5px;
                               }
                    .pagination {
                        display: inline-block;
                        margin-left: 30%;
                    }

                    .pagination a {
                        color: black;
                        float: left;
                        padding: 8px 16px;
                        text-decoration: none;
                    }

                    .pagination a.active {
                        background-color:grey;
                        color: white;
                        margin-left: 5px;
                        border-radius: 5px;
                    }

                    .pagination a:hover {
                        border-radius: 5px;
                       background-color: gray;
                       color:white;
                    }
                   
                    </style>

                    </head>
                        <body>
                            <nav class="navbar navbar-default">
                      <div class="container-fluid">
                        <div class=" nav navbar-nav" >
                          <li class="active"><a href="">Home</a></li>
                        </div>
                              <ul class="nav  navbar-right">
      
                                
                                 <ul class="dropdown">
                                    <button type="button" style="background-color:#fcfcfc; color:BLACK;border:1px solid skyblue;border-radius: 15px;  font-family: font-family: "museo-sans", helvetica, sans-serif;" class="btn   dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['flag'];?></button> 
                                        <ul class="dropdown-menu">
                                            <li><a type="buttton" class="dropdown-item"  href="logout.php" onclick="return confirm('Do You Want To Logout?')">Logout</a></li>
                                        </ul>
                                       </ul>
                                  
                                </ul>
                                </div>

                            </nav>
                            
<!--
                            <div  class="container">
                                    <div class="InputWithIcon">
                                    <input type="text" id="search" name="search" placeholder="Search..">
                                    <i class="fa fa-search fa-lg fa-fw" aria-hidden="true"></i>
                                    </div>
                            </div>
-->
                            <br/>
                            <br/>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                       <h3>EMPLOYEE DETAILS</h3>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="InputWithIcon">
                                          <form action="search_navv.php" method="post"> <input type="text" id="search" name="search" placeholder="Search..">
                    <i class="fa fa-search fa-lg fa-fw" aria-hidden="true"></i>
                       </form>
                                        </div>
                                    </div>
                                </div>
                                <BR/>
                                </div> 
                            <div class="container"> 
                            <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "form";
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    if ($conn->connect_error)
                    {
                        die("Connection failed: " . $conn->connect_error);
                    }

                      if(isset($_GET['page'])){
                            $paa = $_GET['page'];

                        }else{
                          $_GET['page']=1;
                          $paa=1;
                        }
                            if($paa=="" || $paa=="1")
                            {
                                $page1=0;
                            }
                                      else{
                                        $page1=($paa*3)-3;
                                        }

                              

                    $sql= "SELECT * FROM `add1` ORDER BY Address_id desc limit $page1,3";
                       $result= $conn->query($sql);
                    $sql1= "SELECT * FROM `add1` ORDER BY Address_id desc ";
                       $result1= $conn->query($sql1);         
                     mysqli_close($conn);
                    ?>
                    </div>
                                       
                    <div class="container">
<!--                     <div class="card">-->
                          
                         <div class="card" style="background-color:aliceblue;">
                           
                      <table class="table table-bordered table-hover table-striped " style="background-color:cornsilk">
                       <thead style="background-color:#909090; color:white;">
                          <th>Srno.</th>
<!--        <th>ID</th>-->
        <th>NAME</th>
        <th>ADDRESS</th>
        <th>CONTACT</th> 
        <th>SALARY</th> 
        <th>IMAGE</th>
         
        

                        </thead>
                        <tbody>
                            <?php $i=0; while($row = $result->fetch_assoc()){ ?>
                          <tr>
                             <td><?php $i++; echo $i; ?></td>
                             <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['address']; ?></td>
                            <td><?php echo $row['contact']; ?></td>
                            <td><?php echo $row['salary']; ?></td>
                            <td><img src="admin/Upload/<?php echo $row['id'];?>.jpg" height="50" width="50"></td>
                            </tr> 
          
                          <?php } ?>
                        </tbody>
                      </table>
<!--                    </div>-->
                                 
                          </div>
                        <div class="continer">
<!--                            <div class="row">-->
<!--                            <div class="col-md-6">    -->
                        <div class="pagination">
                             <center>
                            <?php if($_GET['page'] != 1){ ?> 
                            <a href="navv.php?page=<?=$_GET['page']-1 ?>" >prev</a>
                          <?php } ?>
                       <?php
                        $count=mysqli_num_rows($result1);                                
                        $p=$count/3;
                       $p=ceil($p);
                            for($i=1;$i<=$p;$i++)
                             { 
                                ?>
                      <a href="navv.php?page=<?php echo $i;?>" <?php if($_GET['page'] == $i){echo 'class="active"';} ?>><?php echo $i;?></a>

                    <?php
                        }?>
                             <?php if($_GET['page'] != $p){ ?>
                            <a href="navv.php?page=<?=$_GET['page']+1 ?>">next</a>
                            <?php } ?>
                         </center>
                        </div>
                      </div>
<!--
                                <div class="col-md-6">
                                    <div class="col-md-6">
                                        <a href="../print.php" type="button" id="print" class="btn btn-info">PRINT</a>
                                    </div>
                                </div>
-->
                     </div>
<!--                      </div>-->
<!--                    </div>-->
<!--
                            <div class="card" style="width=400px;height=200px;">
                                jhkjg
                            </div>
-->
<!--
                        <div class="container">
                            
                             <div class="card" style="background-color:gray;">
                            <div class="card-body">Basic card</div>
                          </div>
                        </div>
-->
                    </body>
                        <?php }else header("location:../index.php");?>

                    </html>