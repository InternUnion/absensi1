<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<?php

        $idusers = $_SESSION['id_karyawan'];
        $username = $_SESSION['username'];
        $level = $_SESSION['level'];

    ?>
    <head>
        <meta charset="utf-8" />
        <title>ARAK - Employee</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="MyraStudio" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="../img/image.png">

        <!-- App css -->
        <link href="../template/Admin/horizontal/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../template/Admin/horizontal/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="../template/Admin/horizontal/assets/css/theme.min.css" rel="stylesheet" type="text/css" />

        <!-- Plugins css -->
        <link href="../template/Admin/plugins/datatables/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />
        <link href="../template/Admin/plugins/datatables/responsive.bootstrap4.css" rel="stylesheet" type="text/css" />
        <link href="../template/Admin/plugins/datatables/buttons.bootstrap4.css" rel="stylesheet" type="text/css" />
        <link href="../template/Admin/plugins/datatables/select.bootstrap4.css" rel="stylesheet" type="text/css" />

        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    </head>
<body>

<!-- Begin page -->
        <div id="layout-wrapper">

            <div class="main-content">

                <header id="page-topbar">
                    <div class="navbar-header">
                        <!-- LOGO -->
                        <div class="navbar-brand-box d-flex align-items-left">
                            <a href="index.html" class="logo">
                                <i class="mdi mdi-album"></i>
                                <span>
                                    A R A K
                                </span>
                            </a>

                            <button type="button" class="btn btn-sm mr-2 font-size-16 d-lg-none header-item waves-effect waves-light" data-toggle="collapse" data-target="#topnav-menu-content">
                                <i class="fa fa-fw fa-bars"></i>
                            </button>
                        </div>
        
                        <div class="d-flex align-items-center">
                            <div class="dropdown d-inline-block ml-2">
                                <button type="button" class="btn header-item waves-effect waves-light"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img class="rounded-circle header-profile-user" src="../img/1.jpg"
                                        alt="Header Avatar">
                                    <span class="d-none d-sm-inline-block ml-1"><?php  echo $username.' | '. $level;?></span>
                                    <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="#">
                                        <span>Profile</span>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="#">
                                        Settings
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="../page/logout.php">
                                        <span>Log Out</span>
                                    </a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </header>

                <div class="topnav">
                    <div class="container-fluid">
                        <nav class="navbar navbar-light navbar-expand-lg topnav-menu">
                            
                            <div class="collapse navbar-collapse" id="topnav-menu-content">
                                <ul class="navbar-nav">
                                <li class="nav-item">
                                        <a class="nav-link" href="../page/dashboard.php">
                                            <i class="mdi mdi-home-analytics"></i>Dashboard
                                        </a>
                                    </li>
                                
                                    <li class="nav-item dropdown">
                                        <a class="nav-link active" href="../add/addkaryawan.php" aria-haspopup="true" aria-expanded="false">
                                            <i class="mdi mdi-account-group"></i>Data Karyawan 
                                        </a>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link" href="../add/addjabatan.php" aria-haspopup="true" aria-expanded="false">
                                            <i class="mdi mdi-finance"></i>Data Jabatan 
                                        </a>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle arrow-none" href="addabsen.php" id="topnav-pages" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="mdi mdi-calendar-multiple-check"></i>Data Absen <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-pages">
                                            <a href="clockin.php" class="dropdown-item">Clock In</a>
                                            <a href="clockout.php" class="dropdown-item">Clock Out</a>
                                            <a href="addabsen.php" class="dropdown-item">Table Absen</a>
                                        </div>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link" href="addketerangan.php" aria-haspopup="true" aria-expanded="false">
                                            <i class="mdi mdi-calendar-text"></i>Data Keterangan 
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>                

                <?php

include_once("../Configure/connection.php");

// Fetch all users data from database
$result = mysqli_query($db, "select * from karyawan");


$i = 1;
?>

                <div class="page-content">
                    <div class="container-fluid">
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-100">Employee</h4>
    
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">ARAK</a></li>
                                            <li class="breadcrumb-item active">Employee Data</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                        <?php
                            include_once("../Configure/connection.php");
                            $maxid = mysqli_query($db,"select max(id_karyawan) as 'idkaryawan1' from karyawan");
                            
                            while($result1 = mysqli_fetch_array($maxid)){
                                $idterakhir  = $result1['idkaryawan1'];
                                $tambahid = $idterakhir+1;
                        }

                        ?>  
                                    <div class="card-body">
                                        <h4 class="card-title">Add Employee</h4>
                                        <p class="card-subtitle mb-4">Insert Employee Data</p>
    
                                        <form method="POST" action="addkaryawan.php">
                                            <div class="form-group" method="POST">
                                                <div class="container">
                                                <label>Employee Id</label>
                                                <input class="form-control" type="text" name="employee_id" value="<?php echo $tambahid?>" readonly>
                                                <br>
                                                <label>Username</label>
                                                <input class="form-control" type="text" placeholder="Insert Username" name="username" required>
                                                <br>
                                                <label>Password</label>
                                                <input class="form-control" type="password" placeholder="Insert Password" name="password" required>
                                                <br>
                                                <label>Employee Name</label>
                                                <input class="form-control" type="text" placeholder="Insert Name" name="name" required>
                                                <br>
                                                <label>Date Of Birth</label>
                                                <input class="form-control" type="date" placeholder="Insert Date Of Birth" name="tgllhr" required>
                                                <br>
                                                <label>Gender</label>
                                                <select class="form-control" name="jeniskelamin" data-toggle="select2" required>
                                                    <option>-- Select --</option>
                                                    <optgroup label="Gender">
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                    </optgroup>
                                                </select>
                                                <br>
                                                <label>Address</label>
                                                <input class="form-control" type="text" placeholder="Insert Address" name="alamat" required>
                                                <br>
                                                <label>Phone Number</label>
                                                <input class="form-control" type="text" placeholder="Insert Phone Number" name="notelp" required>
                                                <br>
                                                <label>Position</label>
                                                <select class="form-control" data-toggle="select2" name="jabatan" required>
                                                    <option>-- Select --</option>
                                                    <optgroup label="Position">
                                                        <option value="CEO">CEO</option>
                                                        <option value="HRD">HRD</option>
                                                        <option value="CTO">CTO</option>
                                                        <option value="Office Boy">Office Boy</option>
                                                        <option value="Programmer">Programmer</option>
                                                        <option value="Manager">Manager</option>
                                                        <option value="IT">IT</option>
                                                    </optgroup>
                                                </select>
                                                <br>
                                                <label>Level</label>
                                                <select class="form-control" data-toggle="select2" name="tingkatan" required>
                                                    <option>-- Select --</option>
                                                    <optgroup label="Level">
                                                        <option value="admin">Admin</option>
                                                        <option value="karyawan">Karyawan</option>
                                                    </optgroup>
                                                </select>
                                                <br>
                                                <input class="btn btn-primary btn-block" type="submit" value="Add" name="Addkaryawan">
                                            </div>
                                            </form>
                                    </div>
                                    <!-- end card-body-->
                                </div>     
                        <!-- end page title -->
                        </div>
                        <!-- end row-->
                        <?php
                            if(isset($_POST['addkaryawan'])) {

                                $username = $_POST['username'];
                                $password = $_POST['password'];
                                $namakaryawan = $_POST['name'];
                                $tanggallahir = $_POST['tgllhr'];
                                $jenkel = $_POST['jeniskelamin'];
                                $address = $_POST['alamat'];
                                $notelepon = $_POST['notelp'];
                                $position = $_POST['jabatan'];
                                $level = $_POST['tingkatan'];
                        
                                // include database connection file
                                include_once("../configure/connection.php");
                        
                                // Insert user data into table
                        
                            try { 
                            $query = "INSERT INTO karyawan (username, password, nama, tgl_lhr, jenkel, alamat, no_tel,jabatan, level) VALUES('$username','$password','$namakaryawan','$tanggallahir','$jenkel','$address','$notelepon','$position','$level')";
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
                        <!--end row-->


                        
                
                    <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Employee Data</h4>
                                <table id="datatable-buttons" class="table table-striped dt-responsive nowrap">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Employee Id</th>
                                            <th>Username</th>
                                            <th>Name</th>
                                            <th>Date Of Birth</th>
                                            <th>Gender</th>
                                            <th>Address</th>
                                            <th>Phone Number</th>
                                            <th>Position</th>
                                            <th>Level</th>
                                            <th>Password</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                
                                
                                    <tbody>
                                                                
                                    <?php

                                    include_once("../Configure/connection.php");
                                    $i = 0;
                                    $result = mysqli_query($db, "select * from karyawan");
                                    while($datakaryawan = mysqli_fetch_array($result)) {
                                    $i++;
                                    
                                    ?>
                                        <tr>
                                            <td><?php echo $i;?></td>
                                            <td><?php echo $datakaryawan['id_karyawan'];?></td>
                                            <td><?php echo $datakaryawan['username'];?></td>
                                            <td><?php echo $datakaryawan['nama'];?></td>
                                            <td><?php echo $datakaryawan['tgl_lhr'];?></td>
                                            <td><?php echo $datakaryawan['jenkel'];?></td>
                                            <td><?php echo $datakaryawan['alamat'];?></td>
                                            <td><?php echo $datakaryawan['no_tel'];?></td>
                                            <td><?php echo $datakaryawan['jabatan'];?></td>
                                            <td><?php echo $datakaryawan['level'];?></td>
                                            <td><?php echo $datakaryawan['password'];?></td>
                                            <td><a  class="btn btn-warning fas fa-wrench" data-toggle="modal" data-backdrop="false" data-target="#modaledit<?php echo $datakaryawan['id_karyawan']; ?>"></a>
                                            &nbsp
                                            <a class="btn btn-danger fas fa-trash" href="../hapus/hapuskaryawan.php?id_karyawan=<?php echo $datakaryawan['id_karyawan']; ?>"></a></td>
                                        </tr>


                                        <!-- Edit  -->
                                        <div class="modal fade" data-backdrop="false" tabindex="-1" role="dialog" id="modaledit<?php echo $datakaryawan['id_karyawan']; ?>">
                                                <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h5 class="modal-title">Edit</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    </div>

                                                    <form method="POST" action="../edit/editkaryawan.php">
                                                        <div class="modal-body">
                                                        <div class="card">
                                                                <div class="form-row">
                                                                <div class="form-group col-md-6">
                                                                        <label>Id Karyawan</label>
                                                                        <input type="text" class="form-control" placeholder="Id Karyawan" name="id_karyawan" value="<?php echo $datakaryawan['id_karyawan']; ?>" readonly>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label>Username</label>
                                                                        <input type="text" class="form-control" placeholder="Username" name="username" value="<?php echo $datakaryawan['username']; ?>">
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label>Password</label>
                                                                        <input type="text" class="form-control" placeholder="Password" name="password" value="<?php echo $datakaryawan['password']; ?>">
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label>Nama</label>
                                                                        <input type="text" class="form-control" placeholder="Nama" name="nama" value="<?php echo $datakaryawan['nama']; ?>">
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label>Tanggal Lahir</label>
                                                                        <input type="text" class="form-control" placeholder="Tanggal Lahir" name="tangal_lahir" value="<?php echo $datakaryawan['tgl_lhr']; ?>">
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label>Jenis Kelamin</label>
                                                                        <input type="text" class="form-control" placeholder="Password" name="jenkel" value="<?php echo $datakaryawan['jenkel']; ?>">
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label>Alamat</label>
                                                                        <input type="text" class="form-control" placeholder="Alamat" name="alamat" value="<?php echo $datakaryawan['alamat']; ?>">
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label>No Telp</label>
                                                                        <input type="text" class="form-control" placeholder="No Telp" name="no_telp" value="<?php echo $datakaryawan['no_tel']; ?>">
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label>Jabatan</label>
                                                                        <input type="text" class="form-control" placeholder="Jabatan" name="jabatan" value="<?php echo $datakaryawan['jabatan']; ?>">
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label>Level</label>
                                                                        <input type="text" class="form-control" placeholder="Level" name="level" value="<?php echo $datakaryawan['level']; ?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    <div class="modal-footer bg-whitesmoke br">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-warning" name="editkaryawan">Update</button>
                                                    </div>
                                        
                                                </form>
                                                </div>
                                                </div>
                                                </div>
                                                </div>
                                            </div>
                                    <?php 
                                        }
                                    ?>

                                        </tbody>
                                    </table>
                                </div> <!-- end card body-->
                            </div> <!-- end card -->
                        </div><!-- end col-->
                    </div>
                    <!-- end row-->


                        
                    </div> <!-- container-fluid -->

                    

                </div>
                <!-- End Page-content -->

                



                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="text-center text-lg-left">
                                    2023 © ARAK.
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="text-right d-none d-lg-block">
                                    Design & Develop by ARAK
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>

            </div>
            <!-- end main content-->

        </div>


        
                    <!-- end row-->
        <!-- END layout-wrapper -->


        
    <!-- jQuery  -->
    <script src="../template/admin/horizontal/assets/js/jquery.min.js"></script>
    <script src="../template/admin/horizontal/assets/js/bootstrap.bundle.min.js"></script>
    <script src="../template/admin/horizontal/assets/js/metismenu.min.js"></script>
    <script src="../template/admin/horizontal/assets/js/waves.js"></script>
    <script src="../template/admin/horizontal/assets/js/simplebar.min.js"></script>

    <!-- third party js -->
    <script src="../template/Admin/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../template/Admin/plugins/datatables/dataTables.bootstrap4.js"></script>
    <script src="../template/Admin/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="../template/Admin/plugins/datatables/responsive.bootstrap4.min.js"></script>
    <script src="../template/Admin/plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="../template/Admin/plugins/datatables/buttons.bootstrap4.min.js"></script>
    <script src="../template/Admin/plugins/datatables/buttons.html5.min.js"></script>
    <script src="../template/Admin/plugins/datatables/buttons.flash.min.js"></script>
    <script src="../template/Admin/plugins/datatables/buttons.print.min.js"></script>
    <script src="../template/Admin/plugins/datatables/dataTables.keyTable.min.js"></script>
    <script src="../template/Admin/plugins/datatables/dataTables.select.min.js"></script>
    <script src="../template/Admin/plugins/datatables/pdfmake.min.js"></script>
    <script src="../template/Admin/plugins/datatables/vfs_fonts.js"></script>
    <!-- third party js ends -->

    <!-- Datatables init -->
    <script src="../template/admin/horizontal/assets/pages/datatables-demo.js"></script>

    <!-- App js -->
    <script src="../template/admin/horizontal/assets/js/theme.js"></script>
    <script src="../template/Admin/horizontal/assets/js/theme.js"></script>

    </body>

</html>