<?php
 session_start();
if (isset($_session['flag']))
?>
<?php
include("connection.php");
 if(isset($_POST['login']))
 {
    $username=$_POST['email'];
     $password=$_POST['pass'];
 

     $result="SELECT permission,email,password FROM Superadmin WHERE email='".$username."' AND password='".$password."'";

     $sql=$conn->query($result);
     echo "$conn->error";
     if($sql->num_rows > 0)
     {
         while($row=$sql->fetch_assoc())
         {
//             echo "Successfully login";
      $_SESSION['flag']=$row['email'];
        $_SESSION['permission']=$row['permission'];   
             echo "<script>window.location.assign('admin/navv1.php');</script>";

         }
     }
     else
     {
     $result="SELECT email,password FROM signup WHERE email='".$username."' AND password='".$password."'";

     $sql=$conn->query($result);
     echo "$conn->error";
     if($sql->num_rows > 0)
     {
         while($row=$sql->fetch_assoc())
         {
//             echo "Successfully login";
      $_SESSION['flag']=$row['email'];
           
             echo "<script>window.location.assign('navv.php');</script>";

         }
     }
         $msg = "Incorrect Password Or Email";
         echo "<script>alert('$msg');window.location.assign('index.php');</script>";
      
     }
 }

?>