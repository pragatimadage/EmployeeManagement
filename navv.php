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
}

.pagination a.active {
    background-color: #4CAF50;
    color: white;
    border-radius: 5px;
}

.pagination a:hover:not(.active) {
    background-color: #ddd;
    border-radius: 5px;
}
</style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
   
    <ul class="nav navbar-nav">
      <li class="active"><a href="navv.php">Home</a></li>
     
      </ul>
       <ul class="nav  navbar-right">
      
     <div class="dropdown">
        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['flag'];?></button> 
           <div class="dropdown-menu">
               <a class="dropdown-item"  href="logout.php" onclick="return confirm('Do You Want To Logout?')">Logout</a>
           
           </div>
           </div>
      
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
<<<<<<< HEAD
          $pa=$_GET['page'];
          
        if($pa=="" || $pa=="1")
        {
            $page1=0;
        }
  else
  {
    $page1=($pa*3)-3;
  }                                  
$sql = "SELECT * FROM `add1` limit $page1,3";
   $result = $conn->query($sql);
                                       $sql1 = "SELECT * FROM `add1` ";
   $result1 = $conn->query($sql1);         

=======
$sql = "SELECT * FROM `add1` ORDER BY Address_id desc";
   $result = $conn->query($sql);           
  
     
>>>>>>> da0e79b3f0887fe5c1fdb084cf79f3728506a612
        mysqli_close($conn);


?>


     
    
  
</div>

<div class="container">
         
  <table class="table">
    <thead>
      <tr>
        <th>Srno.</th>
        <th>ID</th>
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
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['address']; ?></td>
        <td><?php echo $row['contact']; ?></td>
        <td><?php echo $row['salary']; ?></td>

                

      <?php } ?>
    </tbody>
  </table>
    <?php
    $count=mysqli_num_rows($result1);
                                    
    $p=$count/3;
   $p=ceil($p);
                                       
                      for($i=1;$i<=$p;$i++)
                                       { 
                                           ?>
    <a href="navv.php?page=<?php echo $i;?>"><?php echo $i;?> </a><?php
                                            
                                       }
                                    ?>   
                                       
</div>
             <div class="pagination">
  <a href="#">&laquo;</a>
  <a href="#" class="active">1</a>
  <a href="#" >2</a>
  <a href="#">3</a>
  <a href="#">4</a>
  <a href="#">5</a>
  <a href="#">6</a>
  <a href="#">&raquo;</a>
  </div>
</body>
    <?php }else header("location:index.php");?>
</html>
