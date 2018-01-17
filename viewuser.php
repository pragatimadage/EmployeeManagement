<?php
session_start();
if(isset($_SESSION['flag']))
{
?>

<!DOCTYPE html>
<html lang="en">
    <?php if(isset($_SESSION['flag'])){ ?>
  <title>Bootstrap Example</title>
    <head>
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
        <nav class="navbar navbar-inverse ">
  <div class="container-fluid">
    <div class="navbar-header" >
      <a class="navbar-brand " id="nav1" href="admin/navv1.php">Back</a>
    </div>
            </div>
            
        </nav>
  <div class="container">
   <h2>User Details</h2>
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

$sql = "SELECT * FROM `signup` limit $paa,3";
   $result = $conn->query($sql);
$sql1 = "SELECT * FROM `signup` ";
   $result1 = $conn->query($sql1);         

$sql = "SELECT * FROM `signup` ORDER BY Address_id desc";
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
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['fname']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['mobile']; ?></td>
        <td><?php echo $row['gender']; ?></td>
        <td> <a href="registerdelet.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Do you want to delete this ? ');">Delete</a></td>
       
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
?><a href="viewuser.php?page1=<?php echo $i;?>"><?php echo $i;?></a>

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
<?php }}else header("location:index.php");?>
</html>