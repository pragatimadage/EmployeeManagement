<?php
   
    include_once("connection.php");
     
            $id=uniqid();
            $first =$_POST['fname'];
			 $last =$_POST['lname'];
			 $email=$_POST['email'];
             $pass=$_POST['password'];
			 $mob=$_POST['mobile'];
			$gnder=$_POST['gender'];
	
     $result="INSERT INTO `signup`(`id`,`fname`, `lname`, `email`, `password`, `mobile`, `gender`) VALUES ('$id','$first','$last','$email','$pass','$mob','$gnder')";
    
    if($sql=$conn->query($result))
	{
      $msg = " Congratulation.. Successfully Register ";
        echo "$msg";
        echo "<script>window.location.assign('index.php');</script>";
//       echo "<script>alert('$msg');window.location.assign('index.php');</script>";
//        
//        echo "<script>$('#myModal').modal('show')</script>";
//        header("location:index.php");
        
}
    else{
		echo "Insert data";
	}
$conn->close();

?>