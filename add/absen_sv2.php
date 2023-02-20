<?php
    include_once("../Configure/connection.php");
    if (isset($_POST['clockout'])) {
        $idkaryawan1 = $_POST['idkaryawan1'];
        $nama1 = $_POST['namakaryawan1'];
        $waktu1 = $_POST['datetime1'];


    }

    $update = "UPDATE `absen` SET `clock_out`= '$waktu1' WHERE id_karyawan = '$idkaryawan1'";
    mysqli_query($db, $update);

    if ($update) {
        echo "<script>alert('Anda sudah absen keluar untuk hari ini') </script>";
        echo "<script>window.location.href = \"addabsen.php\" </script>";	
    }else{
        echo "kryptosssss";
    }

?>