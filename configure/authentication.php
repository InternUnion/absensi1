<?php
    session_start();
    include('connection.php');
    // $nama = $_POST['username'];
    // $password = $_POST['password'];
    $nama1 = $_POST['username'];
    $password1 = $_POST['password'];

    // $query = mysqli_query($db,"SELECT * FROM users WHERE username='$nama' AND password='$password'");
    $query1 = mysqli_query($db,"SELECT * FROM karyawan WHERE username='$nama1' AND password='$password1'");
    // if(mysqli_num_rows($query)==1 ){
    //     header("Location: ../page/dashboard.php");

    // }
    if( mysqli_num_rows($query1)==1 ){
        header("Location: ../page/dashboard.php");
        $user = mysqli_fetch_array($query1);
        $_SESSION['username'] = $user['nama'];   
        $_SESSION['level'] = $user['level'];   
        $_SESSION['id_karyawan'] = $user['id_karyawan'];  


    }
    else if($nama == '' || $password == '' || $nama1 == '' || $password1 == '' ){
        header("Location: ../page/login.php?error=2");

    }
    else{
        header("Location: ../page/login.php?error=1");
    }
?>