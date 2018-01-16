<?php
session_Start();
if (isset($_SESSION['flag']))
    {
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
    
    $sql="DELETE FROM `add1` WHERE id='$pos'";
$result = mysqli_query($conn, $sql);
    $msg="Record Is Deleted";
echo"<script>alert('$msg');window.location.assign('navv1.php');</script>";
}
else
{
    
   echo"not Found";
}
    }
    else header("location:../index.php")
?>