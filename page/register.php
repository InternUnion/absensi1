<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Union - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="MyraStudio" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="../template/Admin/horizontal/assets/images/favicon.ico">

        <!-- App css -->
        <link href="../template/Admin/horizontal/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../template/Admin/horizontal/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="../template/Admin/horizontal/assets/css/theme.min.css" rel="stylesheet" type="text/css" />

        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    </head>

    <body>

        <div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex align-items-center min-vh-100">
                            <div class="w-100 d-block bg-white shadow-lg rounded my-5">
                                <div class="row">
                                <img class="col-lg-5 d-none d-lg-block rounded-left" src="../img/logo.jpg" alt="">
                                    <div class="col-lg-7">
                                        <div class="p-3">
                                            <div class="text-center mb-5">
                                                <a href="index.html" class="text-dark font-size-22 font-family-secondary">
                                                    <i class="mdi mdi-album"></i> <b class="align-middle">ARAK</b>
                                                </a>
                                            </div>
                                            <h1 class="h5 mb-1">Create an Account!</h1>
                                            <p class="text-muted mb-4">Don't have an account? Create your own account, it takes less than a minute</p>
                                            <form method="POST" action="register.php">
                                            <div class="form-group" method="POST">
                                                <div class="container">
                                                <label>Username</label>
                                                <input class="form-control" type="text" placeholder="Insert Username" name="username">
                                                <br>
                                                <label>Password</label>
                                                <input class="form-control" type="password" placeholder="Insert Password" name="password">
                                                <br>
                                                <input class="btn btn-success btn-block" type="submit" value="Register" name="register">
                                            </div>
                                            </form>
    
                                            <div class="row mt-4">
                                                <div class="col-12 text-center">
                                                    <p class="text-muted mb-0">Already have account?  <a href="../page/login.php" class="text-muted font-weight-medium ml-1"><b>Sign In</b></a></p>
                                                </div> <!-- end col -->
                                            </div>
                                            <!-- end row -->
                                        </div> <!-- end .padding-5 -->
                                    </div> <!-- end col -->
                                </div> <!-- end row -->
                            </div> <!-- end .w-100 -->
                        </div> <!-- end .d-flex -->
                    </div> <!-- end col-->
                </div> <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <?php
          if(isset($_POST['register'])) {

            $username = $_POST['username'];
            $password = $_POST['password'];
    
            // include database connection file
            include_once("../configure/connection.php");
    
            // Insert user data into table
    
        try { 
           $query = "INSERT INTO users (username, password) VALUES('$username','$password')";
           $result = mysqli_query($db, $query); 
       } catch (mysqli_sql_exception $e) { 
          var_dump($e);
          exit; 
       } 
       echo "<script>Swal.fire({
        title: 'Success!',
        text: 'Successfully Register',
        icon: 'success',
        confirmButtonText: 'Cool!'
        })</script>";
        }
    
    ?>
    
        <!-- jQuery  -->
        <script src="../template/Admin/horizontal/assets/js/jquery.min.js"></script>
        <script src="../template/Admin/horizontal/assets/js/bootstrap.bundle.min.js"></script>
        <script src="../template/Admin/horizontal/assets/js/metismenu.min.js"></script>
        <script src="../template/Admin/horizontal/assets/js/waves.js"></script>
        <script src="../template/Admin/horizontal/assets/js/simplebar.min.js"></script>
    
        <!-- App js -->
        <script src="../template/Admin/horizontal/assets/js/theme.js"></script>
    
    </body>
    
    </html>