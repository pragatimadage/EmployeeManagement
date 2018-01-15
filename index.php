
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
    <link rel="stylesheet" href="login_assets/css/style.css" type="text/css"/>
</head>
<body>

<div class="container">


    <div id="login-form">
        <form method="post" action="loginfetch.php">

            <div class="col-md-12">

                <div class="form-group">
                    <h2 class="">PeaceInfotech Solution:</h2>
                </div>

                <div class="form-group">
                    <hr/>
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

        </form>
    </div>

</div>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script type="text/javascript" src="login_assets/js/bootstrap.min.js"></script>
</body>
</html>
