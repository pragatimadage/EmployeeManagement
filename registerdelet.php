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
if(isset($_GET['id']))
{
    $pos=$_GET['id']; 
    $sql="DELETE FROM `signup` WHERE id='$pos'";
$result = mysqli_query($conn, $sql);
  echo "<script>alert('Record Deleted');window.location.href='viewuser.php';</script>";	

}

else
{
    echo "not Found";
}
?>  
