<?php
    SESSION_START();
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
     
 if(isset($_POST['add']))
     {
     $tmp=$_FILES["pic"]["tmp_name"];
     $upload=file_get_contents($tmp);
     $id=uniqid();
     file_put_contents("upload/$id.jpg",$upload);
$name= $_POST['name'];
$addr= $_POST['address'];
$cont= $_POST['mobile'];
$sal = $_POST['salary'];
    
   
     
			     $result="INSERT INTO `add1`( `id`, `name`, `address`, `contact`, `salary`) VALUES ('$id','$name','$addr','$cont','$sal')";
 if($sql=$conn->query($result))
	{

    echo "Done";
header("location:navv1.php");
        
}
    else{
		echo "Insert data";
	}
     }

	
}else {header("location:../index.php");
            }

?>