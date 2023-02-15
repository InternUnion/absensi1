<?php
include('connection.php');
    $nama = $_POST['nama'];
    $password = $_POST['password'];

    $query = mysqli_query($db,"SELECT * FROM users WHERE nama='$nama' AND password='$password'");
    if(mysqli_num_rows($query)==1){
        header("Location: ../dashboard.php");

    }
    else if($nama == '' || $password == ''){
        header("Location: ../login.php?error=2");

    }
    else{
        header("Location: ../login.php?error=1");
    }
?>