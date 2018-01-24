


<?php include'header.php' ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Paper Dashboard by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="assets_user"></script>

    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>

    <!--      CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />

    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/themify-icons.css" rel="stylesheet">
    <!--File of select option  using jquey-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/js/select2.min.js"></script>
    <style>
        h4{
            margin-bottom: 20px;
        }
        .card{
            margin-top: 50px; 
        }
        body{
             background-color :#f4f3ef;
       }
        .btn{
            width: 140px;
        }
        .well{
            background-color:#E8E8E8;
        }
    </style>

</head>
    <body> 
<div class="wrapper">
	<div class="content">
            <div class="container-fluid">
                
                <div class="row">
                    <center>
                    <div class="col-md-offset-4 col-lg-3" align="center">
                        <div class="card">
                            <div class="well">
                            <div class="header">
                                <h4 class="title">Registration</h4>
                            </div>
                            <div class="content" >

                                <form action="dbregister.php" method="post">
                                
                                    <div class="row" >
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>FIRST NAME</label>
                                                <input type="text" name="fname" id="fname" class="form-control border-input name" placeholder="First Name" required>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="row">
                                         <div class="col-md-12">
                                            <div class="form-group">
                                                <label>LAST NAME</label>
                                                <input type="text" id="lname" name="lname" class="form-control border-input name"  placeholder="Last Name" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>EMAIL</label>
                                                <input type="email" name="email" id="email" class="form-control border-input"  placeholder="Email">
                                            </div>
                                        </div>
                                    </div>
                                        <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>PASSWORD</label>
                                                <input type="password" name="password" id="password" class="form-control border-input" placeholder="Password" >
                                            </div>
                                        </div>
                                        </div>
                                         <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">MOBILE</label>
                                                <input type="text" name="mobile" class="form-control border-input" id="no" placeholder="Mobile No" maxlength="10" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">
                                            </div>
                                        </div>
                                        </div>
                                  
                                        <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">GENDER</label>
                                                <br/>
                                                <label for="exampleInputEmail1">MALE</label> 
                                                <input type="radio" name="gender" value="MALE" checked="checked">
                                              
                                                <label for="exampleInputEmail1">FEMALE</label> 
                                                <input type="radio" name="gender" value="FEMALE" >
                                            </div>
                                        </div>
                                        </div>

                                   
                                    <div class="text-center">
                                        <button type="submit" name="reg" class="btn btn-info btn-fill btn-wd">REGISTER</button>
                                        <a href="index.php" type="button"  class="btn btn-info btn-fill btn-wd">LOGIN</a>
                                    </div>
                                    <div class="clearfix"></div>
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
            <div class="container">
             <a href="" type="button" class="btn btn-warning" style="color:white">PRINT</a>
            </div>
 <script>
  $(document).ready(function(){
    $(".name").bind('keydown', function(event) {
      var key = event.which;
     if( key >=48 && key <= 57 ){
           return false;
           }
        else{
          return true;
        }
     });

    });
   $(document).ready(function(){
    var a = $("#lname");
    var b = $("#fname");
    var c = $("#email");
    var d = $("#password");
    var e = $("#no");   
    var f = $("#gender"); 

//       code for  last name textbox
       a.on("click",function(){
            var mobNum=b.val();
            var p=mobNum.length;
           if(p<=0)
               {
//                   $('[data-toggle="tooltip"]').tooltip();
                   alert('enter the previous value');
               }
           console.log(p);
            });
   

//      code for  email textbox
       c.on("click",function(){
           var mobNum=b.val();
           var p=mobNum.length;
           if(p <= 0){
//                $('[data-toggle="tooltip"]').tooltip();
               alert('Enter the prevoius value');
           }
       });
//      code for  password textbox
         d.on("click",function(){
             var mobNum=c.val();
             var p=mobNum.length;
             if(p <= 0)
             {
//                  $('[data-toggle="tooltip"]').tooltip();
                alert('Enter the prevoius value'); 
             }
         });
         //  code for  mobile textbox
          e.on("click",function(){
              var mobNum=d.val();
              var p=mobNum.length;
              if(p <= 0)
                  {
//                       $('[data-toggle="tooltip"]').tooltip();
                      alert('Enter the prevoius value');  
                  }
          });
       // code for  gender textbox
           f.on("click",function(){
              var mobNum=e.val();
               var p=mobNum.length;
               if(p <= 0){
//                    $('[data-toggle="tooltip"]').tooltip();
                   alert('Enter the prevoius value');
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

</html>
<!--<?php include 'script-include.php'; ?>-->