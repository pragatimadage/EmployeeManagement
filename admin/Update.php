<!DOCTYPE html>
<html lang="en">
    <?php SESSION_START();?>
    <?php  if(isset($_SESSION['flag']))
{?>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--File of select option  using jquey-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/js/select2.min.js"></script>
     <style>
         .navbar{
                                                  background-color:#062456;
                                             }
                                                   body{
                                    background-color:#dcdcdc;
                             }
         .navbar-nav li a{
                        
                                    font-family: font-family: "museo-sans", helvetica, sans-serif;
                                    font-size:14px;
                                    letter-spacing: 2px;
              margin-left: 70px;
         } 
         .navbar-nav li a:hover{
             background-color:#fcfcfc
                 ! important;
             color: black
                 ! important;
         } 
         .navbar-nav li.active a{
             background-color: #fcfcfc
                 ! important;
             color: black
                 ! important;
         }
         .btn{
             width: 140px;
         }
         #pic{
             margin-left:60px;
         }
         .well{
            background-color:#F0F0F0;
         }
    </style>
</head>
<body>
<nav class="navbar navbar-inverse">
    <ul class="nav navbar-nav">
        <li class="active"><a href="navv1.php">HOME</a></li>
    </ul>
    </nav>
<div class="wrapper">
	<div class="content">
            <div class="container-fluid">
              
                <div class="row">
                    <center>
                    <div class="col-md-offset-4 col-lg-3" align="center">
                        <div class="card">
                            <div class="well">
                            <div class="header">
                                <h4 class="title" style="font-weight:bold;">UPDATE EMPLOYEE</h4>
                                <?php
include_once("connection.php");
if(isset($_GET['id']))
{
    $id=$_GET['id'];
 $sql="SELECT * FROM `add1` where id='$id'";
   $result = $conn->query($sql);
$row = $result->fetch_assoc()
                                ?> </div>
                            <div class="content" >
                                <form action="Update_db.php" method="post" enctype="multipart/form-data">
                                    <div class="row" >
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                    <label>NAME</label>
                                                <input type="text" name="name" id="name" class="form-control border-input name" Value="<?php echo $row['name']?>" required>
                                                <input type="hidden" name="id" value="<?php echo $id?>">
                                            </div>
                                        </div>
                                    </div>
                                     <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>ADDRESS</label>
                                                <input type="text" name="address" id="address" class="form-control border-input name" Value="<?php echo $row['address'];?>" required>
                                            </div>
                                        </div>
                                    </div>
                                       <div class="row" >
                                        <div class="col-md-12">
                                            <div class="form-group">
                                               <label>MOBILE NO</label>
                                                <input type="text" name="mobile" id="no" class="form-control border-input no" Value="<?php echo $row['contact'];?>" maxlength="10" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" required>

                                                
                                            </div>
                                        </div>
                                    </div>
                                       <div class="row" >
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>SALARY</label>
                                                <input type="text" name="salary" id="salary" class="form-control border-input no" Value="<?php echo $row['salary'];?>" onkeyup="if (/\D/g.test(salary.value)) salary.value = salary.value.replace(/\D/g,'')" required>
                                            </div>
                                        </div>
                                    </div>
                                   
                                    
                                        <div class="row" >
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>IMAGE</label>
                                                <input type="file"  accesskey="image/*" name="pic" id="pic" required>
                                      
                                        </div>
                                 <?php }?>
                                   
                                   
                                    <div class="text-center">
                                        <button type="submit" name="add" class="btn btn-info btn-fill btn-wd ">UPDATE</button>
                                        <a href="navv1.php" type="button" class="btn btn-info btn-fill btn-wd ">EXIT</a>
                                    </div>
                                    <br/>
<!--
                                    <div class="text-center">
                                        
                                        <button type="submit" name="add" class="btn btn-info btn-fill btn-wd btn-block"><a href="navv1.php">EXIT</a></button>
                                    </div>
-->
                                    <div class="clearfix"></div>
                                            </div>
                                    </div>
                                </form>
                            </div>
                           
                        </div>
                            </div>
                            </div>
                    </center> 
                    </div>


               
            </div>
        </div>
    </div>

       
    
    
    <script>
        
  $(document).ready(function(){
    $(".name").bind('keydown', function(event) {
      var key = event.which;
     if( key >=48 && key <= 57 ){
             
              return false;

              
            }else{
              
             return true;
                  
              }
     });

  });
        $(document).ready(function(){
           var a=$("#name");
           var b=$("#address");
           var c=$("#no");   
           var d=$("#salary"); 
//            code of address textbox 
            b.on("click",function(){
            var mobNum=a.val();
            var p=mobNum.length;
            if(p <= 0)
            {
            alert('Enter the previous value');
        }
        });
//             code of mobile field
            c.on("click",function(){
            var mobNum=b.val();
            var p=mobNum.length;
            if(p <= 0)
            {
            alert('Enter the previous value');
        }
        });
            //             code of salary field
            d.on("click",function(){
            var mobNum=b.val();
            var p=mobNum.length;
            if(p <= 0)
            {
            alert('Enter the previous value');
        }
        });

        });
       

        
    

   
    </script>
    </body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="assets/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>
  

</html><?php }else {header("location:../index.php");
            }?>

<!--<?php include 'script-include1.php'; ?>-->