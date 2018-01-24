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
                                 .navbar{
                                          background-color:#062456;
/*                                                background-color :#f4f3ef;*/
                                     }
                                     body{
/*                                    background-color:#dcdcdc;*/
/*                                     background-color:cornsilk;*/
                                         background-color :#f4f3ef;
                                }
                                .navbar-nav li a{
                                    margin-left:0px;
                                }
                      .nav li a{
                         font-family: "museo-sans", helvetica, sans-serif; 
                        
                         }
                                .navbar-nav li a:hover{
                                     color:black
                                        !important;
                                    background-color: #fcfcfc
                                        !important;
                                }
                             
                                 .navbar-nav li.active a
                                {
                                    background-color: #fcfcfc
                                        ! important;
                                    color: black
                                        !important;
                                }
                                 input[type=text] {
                                        width: 500px;
                                        box-sizing: border-box;
                                        border: 2px solid skyblue;
                                        border-radius: 20px;
                                        font-size: 14px;
                                        background-color:white;
                                        background-position: 10px 10px; 
                                        background-repeat: no-repeat;
                                        padding: 10px 15px 10px 30px;
                                        -webkit-transition: width 0.4s ease-in-out;
                                        transition: width 0.4s ease-in-out;
                                             outline: none;
                                      margin-top: 15px;
                                     margin-bottom: 20px;
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
                                        padding: 23px 10px;

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
                        background-color:gray;
                        color: white;
                        margin-left: 5px;
                        border-radius: 5px;
                    }

                    .pagination a:hover {
                        background-color:gray;
                        border-radius: 5px;
                        color: white;
                    }
                                #print{
                 margin-top:21px;  
                display: inline-block;  
                   width:120px;
                   height:38px;
                   padding-top:8px;
                   background-color:#0099CC;
                   color:azure;
                  border-radius: 25px;                    
                   border:1px solid white;                    
               }   
                    </style>

                    </head>
                        <body>
                        <nav class="navbar navbar-inverse">
                        <div class="container-fluid">

                        <ul class="nav navbar-nav">
                              <li class="active" ><a  href="admin/navv1.php">HOME</a></li>
<!--                              <li><a  href="print1.php">PRINT</a></li>-->
                           
                              
                             
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
                            <div class="container">
                                <div class="row"> 
                                           <div class="col-md-6"> 
                                               <h3>USER  DETAILS</h3>
                                           </div>
                                           <div class="col-md-6"> 
                                               <div class="InputWithIcon">
                                                    <input type="text" id="search" name="search" placeholder="Search..">
                                                    <i class="fa fa-search fa-lg fa-fw" aria-hidden="true"></i>
                                               </div>
                                           </div>
                                    </div> 
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

                      <table class="table table-bordered table-hover table-striped " style="background-color:cornsilk" >
                        <thead style="background-color:#909090; color:white;">
                          <tr>
                            <th>Srno.</th>
<!--                            <th>ID</th>-->
                            <th>NAME</th>
                            <th>Email</th>
                            <th>Mobile</th> 
                            <th>Gender</th> 
                            <th>Delete</th> 
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
                        <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                        <div class="pagination">
                            
                            <?php if($_GET['page'] != 1){ ?> 
                            <a href="viewuser.php?page=<?=$_GET['page']-1 ?>" >prev</a>
                          <?php } ?>
                       <?php
                        $count=mysqli_num_rows($result1);                                
                        $p=$count/3;
                       $p=ceil($p);
                            for($i=1;$i<=$p;$i++)
                             { 
                                ?>
                      <a href="viewuser.php?page=<?php echo $i;?>" <?php if($_GET['page'] == $i){echo 'class="active"';} ?>><?php echo $i;?></a>

                    <?php
                        }?>
                             <?php if($_GET['page'] != $p){ ?>
                            <a href="viewuser.php?page=<?=$_GET['page']+1 ?>">next</a>
                            <?php } ?>
                            </div>
                        </div>
                            <div class="col-md-6">
                                    <a href="print1.php"id="print" type="button" id="print" class="btn btn-info">PRINT</a>
                            </div>
                      </div>
                     </div>
                    </div>

                    </body>
                        <?php }else header("location:../index.php");?>

                    </html>