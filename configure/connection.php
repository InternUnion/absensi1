<?php
    define('DB_SERVER','db4free.net:3306');//127.0.0.1:3307 mysql-111283-0.cloudclusters.net:19688
    define('DB_USERNAME','dbabsensiarak');
    define('DB_PASSWORD','Admin1234!');
    define('DB_DATABASE','dbabsensiarak');

    $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

?>