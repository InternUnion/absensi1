<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Print</title>
  
</head>
<body>
  

    <?php

  include_once('../configure/connection.php');

  if(isset($_POST['filterexcel'])) {

    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=dataabsen.xls");
  $datefrom = $_POST['dari_tgl'];
  $dateto = $_POST['sampai_tgl'];
  $iduser = $_POST['id_karyawan'];



  // include database connection file

  include_once('../configure/connection.php');
      
  // Insert user data into table
  $query = ("select * from absen where id_karyawan = '$iduser' and date(clock_in) between '$datefrom' and '$dateto'");
  $result =  mysqli_query($db,$query);
  $i = 1;
  // Show message when user added

  }


  ?>
  
  <?php

  include_once('../configure/connection.php');

  if(isset($_POST['filterpdf'])) {

  echo "<script>
  window.print();
</script>";
  $datefrom = $_POST['dari_tgl'];
  $dateto = $_POST['sampai_tgl'];
  $iduser = $_POST['id_karyawan'];



  // include database connection file

  include_once('../configure/connection.php');
      
  // Insert user data into table
  $query = ("select * from absen where id_karyawan = '$iduser' and date(clock_in) between '$datefrom' and '$dateto'");
  $result =  mysqli_query($db,$query);
  $i = 1;
  // Show message when user added

  }


  ?>

<?php

include_once('../configure/connection.php');

if(isset($_POST['filtersemuapdf'])) {

echo "<script>
window.print();
</script>";
$datefrom = $_POST['dari_tgl'];
$dateto = $_POST['sampai_tgl'];



// include database connection file

include_once('../configure/connection.php');
    
// Insert user data into table
$query = ("select * from absen where date(clock_in) between '$datefrom' and '$dateto'");
$result =  mysqli_query($db,$query);
$i = 1;
// Show message when user added

}


?>

<?php

  include_once('../configure/connection.php');

  if(isset($_POST['filtersemuaexcel'])) {

    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=dataabsen.xls");
    $datefrom = $_POST['dari_tgl'];
    $dateto = $_POST['sampai_tgl'];
    
    
    
    // include database connection file
    
    include_once('../configure/connection.php');
        
    // Insert user data into table
    $query = ("select * from absen where date(clock_in) between '$datefrom' and '$dateto'");
    $result =  mysqli_query($db,$query);
    $i = 1;
    // Show message when user added
    
    }


  ?>

  <div class="section-body">
  <h2 class="section-title">Form Data Absen</h2>

  <div class="row">
  <div class="col-12">
  <div class="card">
  <div class="card-header">
  <h4>Recap Absent</h4>
  </div>
  <div class="card-body">
  <div class="table-responsive">
    <table class="table table-striped" id="table-1" border="1">
      <thead>
          <tr>
              <th>No</th>
              <th>Id Absen</th>
              <th>Id Karyawan</th>
              <th>Nama</th>
              <th>Waktu Masuk</th>
              <th>Waktu Keluar</th>
          </tr>
      </thead>

        <?php
        while($dataabsen = mysqli_fetch_array($result)) {  ?>       
        <tr>
          <td><?php echo $i; ?></td>
          <td><?php echo $dataabsen['id_absen']; ?></td>
          <td><?php echo $dataabsen['id_karyawan']; ?></td>
          <td><?php echo $dataabsen['nama']; ?></td>
          <td><?php echo $dataabsen['clock_in']; ?></td>
          <td><?php echo $dataabsen['clock_out']; ?></td>
          </tr>

  <?php    }
  ?>
    </table>
  </div>
  </div>
  </div>
  </div>
  </div>
  <footer class="main-footer">
  <div class="footer-left">
  Copyright &copy; 2023 <div class="bullet"></div> Design By <a href="#">Arak</a>
  </div>
  <div class="footer-right">

  </div>
  </footer>

</body>
</html>

