                         <?php
                        session_start();

                        ?>
                        <!DOCTYPE html>
                        <html lang="en">
                        <?php if(isset($_SESSION['flag'])){ ?>
                        <head>
                        <title>Bootstrap Example</title>
                        <meta charset="utf-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1">
                        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                        <style>
                        #nav1{
                        margin-left: 90%;
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
                            font-weight:500;
                        }

                        .pagination a.active {
                        background-color: #4CAF50;
                        color: white;
                        margin-left: 5px;
                        border-radius: 5px;
                        }

                        .pagination a:hover{
                        background-color:green;
                        border-radius: 5px;
                            }
                            .btn{
/*                                padding-top: 10px;*/
                                margin-top: 8px;
                                width:160px;
                                margin-right: 10px;
                          }
                            .dropdown-menu{
/*                                margin-left: 8px;*/
                                margin-right: 10px;
                            }
                        </style>
                        </head>
                        <body>

                        <nav class="navbar navbar-inverse">
                        <div class="container-fluid">

                        <ul class="nav navbar-nav">
                        <li class="active" style="font-weight:bold; font-size:17px;"><a href="navv.php">Home</a></li>

                        </ul>
                        <ul class="nav  navbar-right">

                        <ul class="dropdown">
                        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['flag'];?></button> 
                            
                        <ul class="dropdown-menu">
                        <li><a  class="dropdown-item" type="button"  href="logout.php" onclick="return confirm('Do You Want To Logout?')">Logout</a></li>

                        </ul>
                        </ul>

                        </ul>

                        </div>
                        </nav> 


                        <div class="container">
                        <div class="jumbotron">
                        <h1>Welcome Admin</h1>

                        </div>
                        </div>


                        <div class="container">
                        <h2>Employee Details</h2>
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

if(isset($_GET['page']))
    {
      $paa = $_GET['page'];

   }
   else
   {    
       $_GET['page']=1;
//       $paa =1;
   }
    $paa = $_GET['page'];
    if($paa=="" || $paa=="1")
        {
            $page1=0;
        }
   else
    {
      $page1=($paa*3)-3;
    }
$sql = "SELECT * FROM `add1` ORDER BY Address_id desc limit $page1,3";
   $result = $conn->query($sql);
     $sql1 = "SELECT * FROM `add1` ORDER BY Address_id desc"; 
   $result1 = $conn->query($sql1);         

mysqli_close($conn);


?>

</div>

<div class="container">
         
  <table class="table" >
    <thead>
      <tr>
        <th>Srno.</th>
<!--        <th>ID</th>-->
        <th>NAME</th>
        <th>ADDRESS</th>
        <th>CONTACT</th> 
        <th>SALARY</th> 
<!--        <th>Delete</th> -->

      </tr>
    </thead>
    <tbody>
        <?php $i=0; while($row = $result->fetch_assoc()){ ?>
      <tr>
          <td><?php $i++; echo $i; ?></td>
<!--        <td><?php echo $row['id']; ?></td>-->
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['address']; ?></td>
        <td><?php echo $row['contact']; ?></td>
        <td><?php echo $row['salary']; ?></td>

                

      <?php } ?>
    </tbody>
  </table>
    </div>
     <div class="container">
    <div class="pagination">
         <?php if($_GET['page'] != 1){ ?> 
        <a href="navv.php?page=<?=$_GET['page']-1 ?>" >&laquo;  Previous</a>
      <?php } ?>
       
    <?php
    $count=mysqli_num_rows($result1);
                                    
    $p=$count/3;
   $p=ceil($p);
                                       
                      for($i=1;$i<=$p;$i++)
                                       { 
                                           ?>
    

    <a href="navv.php?page=<?php echo $i;?>" <?php if($_GET['page'] == $i){echo 'class="active"';} ?> ><?php echo $i;?></a><?php
                                            
                                       }
                                    ?>
       <?php if($_GET['page'] != $p){ ?>
        <a href="navv.php?page=<?=$_GET['page']+1 ?>">Next  &raquo;</a>
        <?php } ?>
    </div>
    </div>
    


</body>
    <?php }else header("location:index.php");?>

</html>