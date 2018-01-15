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

//   echo "Your Successfully Register!!!!!!!!";
        $msg = " Congratulation.. Successfully Register ";
        echo "<script>alert('$msg');window.location.assign('index.php');</script>";

//        header("location:index.php");
        
}
    else{
		echo "Insert data";
	}

	$conn->close();

?>