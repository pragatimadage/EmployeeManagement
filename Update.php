<?php
session_Start();
if (isset($_SESSION['flag']))
    {
include_once("connection.php");echo $id= $_POST['id'];
    echo "hey";
   if(isset($_POST['add']))
     {
       echo $_POST['add'];
     $tmp=$_FILES["pic"]["tmp_name"];
    $upload=file_get_contents($tmp);
    $id=uniqid();
    file_put_contents("Upload/$id.jpg",$upload);
       
echo $id= $_POST['id'];
$name= $_POST['name'];
$addr= $_POST['address'];
$cont= $_POST['mobile'];
$sal = $_POST['salary'];
        
        
       
$result="UPDATE `add1` SET `name`='$name',`address`='$addr',`contact`='$cont',`salary`='$sal' WHERE id='$id'";       
 if($sql=$conn->query($result))
	{

    echo "Done";

        
}
    else{
		echo "Insert data";
	}
     }

}

?>