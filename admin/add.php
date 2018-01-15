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
     
 if(isset($_POST['add']))
     {
     $id=uniqid();
$name= $_POST['name'];
$addr= $_POST['address'];
$cont= $_POST['mobile'];
$sal = $_POST['salary'];
   
     
			     $result="INSERT INTO `add1`(`id`, `name`, `address`, `contact`, `salary`) VALUES ('$id','$name','$addr','$cont','$sal')";
 if($sql=$conn->query($result))
	{

    echo "Done";
 header("location:../navv.php");
        
}
    else{
		echo "Insert data";
	}
     }

	

?>