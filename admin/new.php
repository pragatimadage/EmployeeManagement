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
if(isset($_POST['view']))
{
   
$sql = "SELECT * FROM `add`";
$result = mysqli_query($conn, $sql);
    
    while($row = mysqli_fetch_assoc($result))
    {
        echo "Employeee Detailes............................."."<br>";
        echo "id:- ". $row["id"]."<br>"."Name:-".$row["name"]."<br>"."Address:-".$row["address"]."<br>"."Contact:-".$row["contact"].
            "<br>"."Salary:-".$row["salary"]."<br>";
}
}

mysqli_close($conn);

    
?>