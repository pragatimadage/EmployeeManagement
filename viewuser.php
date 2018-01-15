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
</head>
    <body>
        <nav class="navbar navbar-inverse ">
  <div class="container-fluid">
    <div class="navbar-header navbar-right" >
      <a class="navbar-brand" href="admin/navv1.php">Back</a>
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
$sql = "SELECT * FROM `signup`";
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
</div>
    </body>
<?php }}else header("location:index.php");?>
</html>