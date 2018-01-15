<!--
<?php include 'dbConfig.php'; ?>
<?php 
if(isset($_POST['reg'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $mobile = $_POST['mobile'];
    $gender = $_POST['gender'];
   

    $sql = "INSERT INTO `log1` (`id`, `fname`, `lname`, `email`, `password`, `contact`, `gender`) VALUES (NULL, '$fname', '$lname', '$email', '$password', '$mobile', '$gender');";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);

    
}

?>
-->
<?php include 'header.php'; ?>

<div class="wrapper">
	<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <center>
                    <div class="col-md-offset-4 col-lg-3" align="center">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Registration</h4>
                            </div>
                            <div class="content" >
                                <form action="#" method="post">
                                    <div class="row" >
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" name="fname" class="form-control border-input" placeholder="First Name" >
                                            </div>
                                        </div>
                                    </div>
                                     <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" name="lname" class="form-control border-input" placeholder="Last Name" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" name="email" class="form-control border-input"  placeholder="Email" >
                                            </div>
                                        </div>
                                    </div>
                                        <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" name="password" class="form-control border-input" placeholder="Username" >
                                            </div>
                                        </div>
                                        </div>
                                         <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Mobile</label>
                                                <input type="text" name="mobile" class="form-control border-input"  placeholder="Mobile NO">
                                            </div>
                                        </div>
                                        </div>
                                   

                                    

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Gender</label>
                                                <input type="text" name="gender" class="form-control border-input" placeholder="Home Address" >
                                            </div>
                                        </div>
                                    </div>

                                    

                                   
                                    <div class="text-center">
                                        <button type="submit" name="reg" class="btn btn-info btn-fill btn-wd">Register</button>
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

<?php include 'script-include.php'; ?>