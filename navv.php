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
                            <style>
                                /*  
                                design for logout*/
                                body{
                                    background-color:#dcdcdc;
/*                                     background-color:#4C4CA;*/
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
                                .dropdown-menu li a:hover{
/*                                    background-color:lightskyblue;*/
/*                                    color:darkslategrey;*/
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
                        background-color: #ddd;
                        border-radius: 5px;
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
                            <div class="container">
                                <center>
                                   <h3>USER DETAILS</h3>
                                </center>
                                <BR/>
                                <BR/>
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

                    $sql = "SELECT * FROM `signup` limit $paa,3";
                       $result = $conn->query($sql);
                    $sql1 = "SELECT * FROM `signup` ";
                       $result1 = $conn->query($sql1);         

                    $sql = "SELECT * FROM `signup` ORDER BY Address_id desc";
                       $result = $conn->query($sql);           

                    $sql= "SELECT * FROM `signup` ORDER BY Address_id desc limit $page1,3";
                       $result= $conn->query($sql);
                    $sql1= "SELECT * FROM `signup` ORDER BY Address_id desc ";
                       $result1= $conn->query($sql1);         
                     mysqli_close($conn);
                    ?>
                    </div>
                    <div class="container">
<!--                     <div class="card">-->
                          
                         <div class="card" style="background-color:aliceblue;">
                           
                      <table class="table table-bordered table-hover" style="background-color:#F2EDED" >
                       <thead style="background-color:gray; color:white;">
                          <tr>
                            <th>SR NO.</th>
<!--                            <th>ID</th>-->
                            <th>NAME</th>
                            <th>EMAIL</th>
                            <th>MOBILE</th> 
                            <th>GENDER</th> 
                            <th>DELETE</th> 
                          </tr>
                        </thead>
                        <tbody>
                            <?php $i=0; while($row = $result->fetch_assoc()){ ?>
                          <tr>
                              <td><?php $i++; echo $i; ?></td>
<!--                            <td><?php echo $row['id']; ?></td>-->
                            <td><?php echo $row['fname']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['mobile']; ?></td>
                            <td><?php echo $row['gender']; ?></td>
                            <td> <a href="registerdelet.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Do you want to delete this ? ');">Delete</a></td>

                          </tr>
                          <?php } ?>
                        </tbody>
                      </table>
<!--                    </div>-->
                                 
                          </div>
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