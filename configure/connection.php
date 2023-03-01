<?php
    define('DB_SERVER','127.0.0.1:3307');//127.0.0.1:3307 mysql-111283-0.cloudclusters.net:19688
    define('DB_USERNAME','root');
    define('DB_PASSWORD','');
    define('DB_DATABASE','db_absensi1');

    $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

?>