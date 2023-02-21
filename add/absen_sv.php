<?php
    include_once("../Configure/connection.php");
    if (isset($_POST['clockin'])) {
        $idkaryawan = $_POST['idkaryawan'];
        $nama = $_POST['namakaryawan'];
        $waktu = $_POST['datetime'];
        $waktuout = 'null';


    }

    $save = "INSERT INTO absen SET id_karyawan='$idkaryawan', nama='$nama', clock_in='$waktu', clock_out='$waktuout'";
    mysqli_query($db, $save);

    if ($save) {
        echo "<script>alert('Anda sudah absen untuk hari ini') </script>";
        echo "<script>window.location.href = \"clockin.php\" </script>";	
    }else{
        echo "kryptosssss";
    }

?>