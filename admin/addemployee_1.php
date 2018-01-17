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

</head>
<body>

<div class="wrapper">
	<div class="content">
            <div class="container-fluid">
                <div class="well">
                <div class="row">
                    <center>
                    <div class="col-md-offset-4 col-lg-3" align="center">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Add employee</h4>
                            </div>
                            <div class="content" >
                                <form action="add.php" method="post">
                                    <div class="row" >
                                        <div class="col-md-12">
                                            <div class="form-group">

                                      
                            <label>Name</label>

                                                <input type="text" name="name" id="name" class="form-control border-input name" placeholder="Employee Name" required>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" name="address" id="address" class="form-control border-input name" placeholder="Address" required>
                                            </div>
                                        </div>
                                    </div>
                                       <div class="row" >
                                        <div class="col-md-12">
                                            <div class="form-group">
                                               <label>Mobile No</label>
                                                <input type="text" name="mobile" id="no" class="form-control border-input no" placeholder="Mobile No" maxlength="10" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" required>

                                                
                                            </div>
                                        </div>
                                    </div>
                                       <div class="row" >
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Salary</label>
                                                <input type="text" name="salary" id="salary" class="form-control border-input no" placeholder="Salary" onkeyup="if (/\D/g.test(salary.value)) salary.value = salary.value.replace(/\D/g,'')" required>
                                            </div>
                                        </div>
                                    </div>
                                   
                                    

                                   
                                    <div class="text-center">
                                        <button type="submit" name="add" class="btn btn-info btn-fill btn-wd btn-block">Add</button>
                                    </div>
                                    <br/>
                                    <div class="text-center">
                                        <a href="navv1.php" type="button" class="btn btn-info btn-fill btn-wd btn-block">EXIT</a>
<!--                                        <button type="submit" name="add" class="btn btn-info btn-fill btn-wd btn-block"><a href="navv1.php">EXIT</a></button>-->
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                           
                        </div>
                    </div>
 </center>

                </div>
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
//       $(".no").keydown(function(){
//        var key=event.which;
//              // var z=/(7|8|9)\d{9}/;
//              // var y=z.value();
//
//              if(key >=48 && key <= 57)
//              {  
//                return true;
//                
//                }
//                  
//              else
//              {
//                return false;
//                
//              }
//           });
      
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