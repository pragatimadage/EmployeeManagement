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
            #nav1{
                margin-left: 90%;
            }
               
               .btn{
                   margin-top: 8px;
                   margin-right: 10px;
                   width: 200px;
               }
               .dropdown-menu{
                   width: 200px;
                  margin-right: 10px;
                   text-align: center;
               }
               li a{
                   font-family: "museo-sans", helvetica, sans-serif; 
               }
               .navbar-nav li a:hover, .navbar-nav li.active a{
                    color:white
                                        !important;
                                    background-color: limegreen
                                        !important;
               }
            
.pagination {
    display: inline-block;
    margin-left: 30%;
}

.pagination a {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
}

.pagination a.active {
    background-color: #4CAF50;
    color: white;
    border-radius: 5px;
    margin-right: 5px;
}

.pagination a:hover{
    background-color: #ddd;
    border-radius: 5px;
}
</style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
   
<ul class="nav navbar-nav">
      <li class="active" style="font-weight:bold;"><a  href="navv1.php">HOME</a></li>
      <li class="" style="font-weight:bold;"><a href="../viewuser.php">VIEW USER</a></li>
     <li style="font-weight:bold;"><a href="viewemployee.php">VIEW EMPLOYEE</a></li>
        <li style="font-weight:bold;"><a href="addemployee_1.php">ADD EMPLOYEE</a></li>
       
      </ul>
       <ul class="nav  navbar-right">
     <ul class="dropdown">
        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['flag'];?></button> 
           <ul class="dropdown-menu">
               <li><a class="dropdown-item"  href="logout.php" onclick="return confirm('Do You Want To Logout?')">Logout</a></li>
        </ul>
           </ul>
    </ul>
      </div>
   </nav>
    
    <div class="container">
    <div class="jumbotron">
          <h1>Welcome Admin</h1>
         
  </div>
</div>

</body>
    <?php }else header("location:index.php");?>

</html>
