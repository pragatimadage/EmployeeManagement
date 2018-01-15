<?php
session_start();
if(isset($_SESSION['flag']))
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

$sql = "SELECT * FROM `add1`";
$result = $conn->query($sql);
    echo "<table border='1'>
<tr>
<th>ID</th>
<th>NAME</th>
<th>ADDRESS</th>
<th>CONTACT</th>
<th>SALARY</th>
</tr>";

while($row = $result->fetch_assoc())

    {
/*
        $id = $row['id'];
*/
        ?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['address']; ?></td>
<td><?php echo $row['contact']; ?></td>
<td><?php echo $row['salary']; ?></td>
    <td><a href="dbdlt.php?id=<?php echo $row['id']; ?>"  onclick="return confirm('Are u sure want to delete ?');">Delete</a></td>
</tr>
<?php

        
    }

echo"</table>";
}

  header("location:../index.php")
?>