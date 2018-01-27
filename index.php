<?php
session_start();
if(isset($_SESSION['flag']))
{
    if($_SESSION['flag'])
    {
        echo "<script>window.location.assign('navv.php');</script>";
        
//        header("location:navv.php");
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="login_assets/css/bootstrap.min.css" type="text/css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="login_assets/css/style.css" type="text/css"/>
    
    <style>
       body{
           background-color :#f4f3ef;
           }
        p{
            font-size:16px;
        }
      
    .fa {
  padding: 9px;
  font-size: 20px;
  width: 40px;
 height: 40px;
  text-align: center;
  text-decoration: none;
  margin: 15px 15px;
  border-radius: 50%;
   word-spacing: 100px;     
       
}

.fa:hover {
    opacity: 0.7;
    color: white;
    
}

.fa-facebook {
  background: #3B5998;
  color: white;
}



.fa-google {
  background: #dd4b39;
  color: white;
}
/*
        .well{
           background-color:#E8E8E8;  
        }
*/
    </style>
</head>
<body>

<div class="container">

                   
    <div id="login-form">
        <form method="post" action="loginfetch.php">

            <div class="col-md-12">
                 <br/>
                 <br/>
                <div class="form-group">
                    <center>
                    <h3 class="">LOGIN</h3>
                    </center>
                </div>
               
                 <div class="well">
                 <center>
                     <p>Connect with</p>
                    <a type="button" href="" class="fa fa-facebook btn"></a>
                     <a type="button" href="" class="fa fa-google btn"></a>
                    </center>
                  <div class="form-group">
                      <div class="col-md-4">
                     <hr>
                          
                      </div>
                      <div class="col-md-4">
                          <center>
                      <p>or</p>
                        </center>
                      </div>
                      <div class="col-md-4">
                          <hr>
                      </div>
                </div>
               <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                        <input type="email" name="email" class="form-control" placeholder="Email" required/>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                        <input type="password" name="pass" class="form-control" placeholder="Password" required/>
                    </div>
                </div>

                <div class="form-group">
                    <hr/>
                </div>

                <div class="form-group">
                   <button type="submit" class="btn btn-block btn-primary" name="login">Login</button>
                </div>

                <div class="form-group">
                    <hr/>
                </div>

                <div class="form-group">
                    <a href="register.php" type="button" class="btn btn-block btn-danger"
                       name="login">Register</a>
                    </div>
                </div>

            </div>

        </form>
    </div>

</div>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script type="text/javascript" src="login_assets/js/bootstrap.min.js"></script>
</body>
    
</html>
