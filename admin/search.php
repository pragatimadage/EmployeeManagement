<!DOCTYPE html>
<?php
session_start();
      if(isset($_SESSION['flag']))
      {
?>
<html lang="en">
    <head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
           <style>
               
                .navbar{
                                                  background-color:#062456;
/*                    font-weight: 500;*/
                                             }
               .navbar-nav li a{
/*                   font-weight: 500;*/
               }
                                             body{
                                    background-color:#dcdcdc;
/*                                     background-color:#4C4CA;*/
                                }
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
               .navbar-nav li a:hover{
                    color:black
                                        !important;
                                    background-color: #fcfcfc
                                        !important;
               }
               .dropdown-menu{
                                   margin-right: 10px; 
                                     width: 200px;
                                    text-align: center;
                                    background-color:#fcfcfc;
                                    border-radius: 15px;
/*                                    color:white;*/
                                    height:35px;
                                    font-weight:bold;
                                    font-family: font-family: "museo-sans", helvetica, sans-serif;
                                   
                                }
            
    input[type=text] {
        
    width: 500px;
    box-sizing: border-box;
    border: 0px solid #ccc;
    border-radius: 20px;
    font-size: 14px;
    background-color: white;
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
         outline: none;
}
.InputWithIcon input[type=text]{
       padding-left: 40px; 
    
    }
    .InputWithIcon{
        position: relative;
        float: right;
    }
    .InputWithIcon i{
        position:absolute;
        left:0;
        top:8px;
        padding: 9px 8px;
      
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
    background-color: grey;
    color: white;
    border-radius: 5px;
    margin-right: 5px;
}

.pagination a:hover{
    background-color: black;
    border-radius: 5px;
}
</style>
</head>
    <body>
        <nav class="navbar navbar-inverse">
  <div class="container-fluid">
   
<ul class="nav navbar-nav">
      <li class="active"><a  href="navv1.php">HOME</a></li>
      <li class=""><a href="../viewuser.php">VIEW USER</a></li>
<!--     <li ><a href="viewemployee.php">VIEW EMPLOYEE</a></li>-->
        <li ><a href="addemployee_1.php">ADD EMPLOYEE</a></li>
       <li ><a href="../print.php">PRINT</a></li>
      </ul>
       <ul class="nav  navbar-right">
     <ul class="dropdown">
        <button type="button" style="background-color:#fcfcfc; color:BLACK;border:1px solid skyblue;border-radius: 15px;  font-family: font-family: "museo-sans", helvetica, sans-serif;" class="btn btn-info dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['flag'];?></button> 
           <ul class="dropdown-menu">
               <li><a  type="button" class="dropdown-item"  href="logout.php" onclick="return confirm('Do You Want To Logout?')">Logout</a></li>
        </ul>
           </ul>
    </ul>
      </div>
   </nav>
         <div  class="container">
         <div class="InputWithIcon">
                   <form action="search.php" method="post"> <input type="text" id="search" name="search" placeholder="Search..">
                    <i class="fa fa-search fa-lg fa-fw" aria-hidden="true"></i>
                       </form>
        </div>
        </div>
  
          
    <br/>
    <br/>
    <div class="container">

        
        
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
          
          
          
          
          if(isset($_POST['search']))
          {
              $search=$_POST['search']   ;
            $qry="select * from add1 where name='$search'";
              $res=$conn->query($qry);
               $count=mysqli_num_rows($res);
              if($count>=1){
        ?>
              <div class="container">
         
  <table id="table1" class="table table-bordered table-hover" style="background-color:#F2EDED;"  >
    <thead style="background-color:gray; color:white;">
      <tr>
        <th>Srno.</th>
<!--        <th>ID</th>-->
        <th>NAME</th>
        <th>ADDRESS</th>
        <th>CONTACT</th> 
        <th>SALARY</th>
          <th>IMAGE</th>
          <th>DELETE</th>
          <th>UPDATE</th>
      

      </tr>
    </thead>
    <tbody>
        <?php $i=0; while($row=$res->fetch_assoc()){ ?>
      <tr>
          <td><?php $i++; echo $i; ?></td>
<!--        <td><?php echo $row['id']; ?></td>-->
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['address']; ?></td>
        <td><?php echo $row['contact']; ?></td>
        <td><?php echo $row['salary']; ?></td>
            <td><img src="Upload/<?php echo $row['id'];?>.jpg" height="50" width="50"></td>
          <td><a href="dbdlt.php?id=<?php echo $row['id'];?>" onclick="return confirm('Do You Want to Delete')">Delete</a></td>
        <td><a href="Update.php ?id=<?php echo $row['id']?>">Update</a></td>  
        
        </tr>
          <?php }?>
      </tbody>
     </table>
        </div>

    <?php } else{echo "not found";
                echo "header("loaction:navv1.php")";}}?>

        </div>
    </body>
    <?php
    }
else
{header("location:index.php");}
?>
