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
                       .navbar{
                                                  background-color:#062456;
                                             }
                                             body{
                                                 background-color:aliceblue;
                                             }
            #nav1{
                margin-left: 90%;
            }
               .navbar-nav{
                   
               }
               .navbar-nav li a:hover,.navbar-nav li.active a{
                                        color:black
                                        !important;
                                    background-color: #fcfcfc
                                        !important;
               }
               .nav{
                   margin-left: 100px;
               }
                .btn{
                   margin-top: 8px;
                   margin-right: 10px;
                    width: 200px;
                    background-color: black;
               }
               .dropdown-menu{
                   width: 200px;
                  margin-right: 10px;
                   text-align: center;
               }
               .active{
                   font-family: "museo-sans", helvetica, sans-serif; 
                   
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
    background-color: #4CAF50;
    color: white;
    border-radius: 5px;
    margin-right: 5px;
}

.pagination a:hover{
    background-color: #ddd;
    border-radius: 5px;
}
              
</style>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
   
<ul class="nav navbar-nav">
      <li class="active"><a href="navv1.php">HOME</a></li>
   </ul>
<!--
       <ul class="nav  navbar-right">
       <ul class="dropdown">
        <button type="button" style="background-color:black;color:white;border:1px solid skyblue;" class="btn  dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['flag'];?></button> 
           <ul class="dropdown-menu">
               <li><a class="dropdown-item"  href="logout.php" onclick="return confirm('Do You Want To Logout?')">Logout</a></li>
        </ul>
           </ul>
    </ul>
-->
      </div>
   </nav> 
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
         
  <table class="table table-bordered table-hover table-striped">
    <thead style="background-color:lightgray">
      <tr>
        <th>Srno.</th>
<!--        <th>ID</th>-->
        <th>NAME</th>
        <th>ADDRESS</th>
        <th>CONTACT</th> 
        <th>SALARY</th> 
        <th>Delete</th> 

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

          <td> <a href="dbdlt.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Do you want to delete this ? ');">Delete</a></td>        
        </tr>
      <?php } ?>
    </tbody>
  </table>
    <div class="pagination">
         <?php if($_GET['page'] != 1){ ?> 
        <a href="viewemployee.php?page=<?=$_GET['page']-1 ?>" >prev</a>
      <?php } ?>
       
    <?php
    $count=mysqli_num_rows($result1);
                                    
    $p=$count/3;
   $p=ceil($p);
                                       
                      for($i=1;$i<=$p;$i++)
                                       { 
                                           ?>
    

    <a href="viewemployee.php?page=<?php echo $i;?>" <?php if($_GET['page'] == $i){echo 'class="active"';} ?> ><?php echo $i;?></a><?php
                                            
                                       }
                                    ?>
       <?php if($_GET['page'] != $p){ ?>
        <a href="viewemployee.php?page=<?=$_GET['page']+1 ?>">next</a>
        <?php } ?>
    </div>
    </div>


</body>
    <?php }else header("location:../index.php");?>

</html>
