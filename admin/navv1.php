<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <?php if(isset($_SESSION['flag']))
{ 
  ?>
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
                  background-color :#f4f3ef;
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
               .dropdown-menu li a{
                   outline: none;
                   border-radius:15px;
               }
                                    h3{ 
                                    padding-top: 5px;
                                    height: 5px;
                                    }
               
            
    input[type=text] {
        
    width: 500px;
    box-sizing: border-box;
    border: 2px solid skyblue;
    border-radius: 20px;
    font-size: 14px;
    background-color:aliceblue;
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 10px 15px 10px 30px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
         outline: none;
        margin-top: 15px;
       margin-bottom: 5px;
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
        padding: 22px 8px;
      
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
    background-color: gray;
    border-radius: 5px;
    color:white;
}
               #print{
                 margin-top:21px;  
                display: inline-block;  
                   width:100px;
                   height:38px;
                   padding-top:8px;
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
<!--       <li ><a href="../print.php">PRINT</a></li>-->
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
<!--
         <div  class="container">
         <div class="InputWithIcon">
                   <form action="search.php" method="post"> <input type="text" id="search" name="search" placeholder="Search..">
                    <i class="fa fa-search fa-lg fa-fw" aria-hidden="true"></i>
                  </form>
        </div>
        </div>
  
          
    <br/>
    <br/>
-->
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                    <h3>EMPLOYEE DETAILS</h3>
            </div>
            <div class="col-md-6">
                <div class="InputWithIcon">
                   <form action="search.php" method="post"> 
                       <input type="text" id="search" name="search" placeholder="Search..">
                    <i class="fa fa-search fa-lg fa-fw" aria-hidden="true"></i>
                  </form>
                </div>
            </div>
        </div>
    </div>
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

if(isset($_GET['page']))
    {
      $paa = $_GET['page'];

   }
   else
   {    
       $_GET['page']=1;
//       $paa =1;
   }
    $paa = $_GET['page'];
    if($paa=="" || $paa=="1")
        {
            $page1=0;
        }
   else
    {
      $page1=($paa*3)-3;
    }
$sql = "SELECT * FROM `add1` ORDER BY Address_id desc limit $page1,3";
   $result = $conn->query($sql);
     $sql1 = "SELECT * FROM `add1` ORDER BY Address_id desc"; 
   $result1 = $conn->query($sql1);         

mysqli_close($conn);


?>

</div>

<div class="container">
         
  <table id="table1" class="table table-bordered table-hover table-striped " style="background-color:cornsilk">
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
        <?php $i=0; while($row = $result->fetch_assoc()){ ?>
      <tr>
          <td><?php $i++; echo $i; ?></td>
<!--        <td><?php echo $row['id']; ?></td>-->
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['address']; ?></td>
        <td><?php echo $row['contact']; ?></td>
        <td><?php echo $row['salary']; ?></td>
<!--        <td><a src="upload/$id<?php echo $row['id']?>.jpg" hieght="50" width="50"></a></td>-->
          <td><img src="Upload/<?php echo $row['id'];?>.jpg" height="50" width="50"></td>
          <td><a href="dbdlt.php?id=<?php echo $row['id'];?>" onclick="return confirm('Do You Want to Delete')">Delete</a></td>
        <td><a href="Update.php ?id=<?php echo $row['id']?>">Update</a></td>  
<!--          <form action="../print.php" method="post"><input type="hidden" name="data" value="<?= $row['name'] ?>" /><td><input type="submit" value="Print"/></td></form>-->
      <?php } ?>
    </tbody>
  </table>
    </div>
     <div class="container">
         <div class="row">
          <div class="col-md-6">     
         <div class="pagination">
         <?php if($_GET['page'] != 1){ ?> 
        <a href="navv1.php?page=<?=$_GET['page']-1 ?>" >&laquo;  Previous</a>
      <?php } ?>
       
    <?php
    $count=mysqli_num_rows($result1);
                                    
    $p=$count/3;
   $p=ceil($p);
                                       
                      for($i=1;$i<=$p;$i++)
                                       { 
                                           ?>
    

    <a href="navv1.php?page=<?php echo $i;?>" <?php if($_GET['page'] == $i){echo 'class="active"';} ?> ><?php echo $i;?></a><?php
                                            
                                       }
                                    ?>
       <?php if($_GET['page'] != $p){ ?>
        <a href="navv1.php?page=<?=$_GET['page']+1 ?>">Next  &raquo;</a>
        <?php } ?>
         </div>
    </div>
          <div class="col-md-6">
              <a href="../print.php" type="button" id="print" class="btn btn-info">PRINT</a>
         </div>
     </div>
    </div>
            
</body>
    <?php }else header("location:../index.php");?>

</html>

