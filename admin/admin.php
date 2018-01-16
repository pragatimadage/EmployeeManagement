<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <?php if(isset($_SESSION['flag'])){ ?>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        .well{
            height: 200px;
            margin-top: 50px;
        }
    </style>
</head>
<body align-text:center>

<div class="container-fluid">
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
   <ul class="nav navbar-nav">
      <a class="navbar-brand" href="navv1.php">Home</a>
       </ul> 
      <ul class="nav  navbar-right">
      
     <div class="dropdown">
        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['flag'];?></button> 
           <div class="dropdown-menu">
               <a class="dropdown-item"  href="logout.php" onclick="return confirm('Do You Want To Logout?')">Logout</a>
           </div>
           </div>
       </ul>
    </div>
     </nav>
    </div>


    <div class="well">
  <h2>Peace Infotech</h2>

   <a href="addemployee_1.php" type="button" class="btn btn-primary"
                       name="">Add Employee</a>
<!--
  <a href="" type="button" class="btn btn-primary"
                       name="">Delete Employee</a>
-->

   </div> 

</body><?php }else{ header("location:../index.php");
                  }
    ?>
</html>
