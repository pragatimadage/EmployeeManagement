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
      <li class="active"><a href="navv1.php">Home</a></li>
      <li class=""><a href="../viewuser.php">view user</a></li>
        <li>  <a href="addemployee_1.php">Add Employee</a></li>
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

       if(isset($_GET['page1'])){
        $paa = $_GET['page1'];
    }else{
        $paa = 1;
    }
        if($paa=="" || $paa=="1")
        {
            $pagee1=0;
        }
                                       else
                                       {
                                           $pagee1=($paa*3)-3;
                                       }

$sql = "SELECT * FROM `add1`ORDER BY Address_id desc limit $pagee1,3";
   $result = $conn->query($sql);

$sql = "SELECT * FROM `add1` ORDER BY Address_id desc";
   $result = $conn->query($sql);           
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

        <td> <a href="dbdlt.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Do you want to delete this ? ');">Delete</a></td>
       
      </tr>
                

      <?php } ?>
    </tbody>
  </table>

    <?php
$count=mysqli_num_rows($result1);
    $pa=$count/3;
    $pa=ceil($pa);
    for($i=1;$i<=$pa;$i++)
    {
?><a href="navv1.php?pagee=<?php echo $i;?>"><?php echo $i;?></a>

<?php
    }?>
    

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
    <?php }else header("location:../index.php");?>
</html>
