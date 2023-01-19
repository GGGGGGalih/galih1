<?php
    define('HOST','localhost');
    define('USER','root@localhost');
    define('DB','crud_galih');
    define('PASS','');
    $conn = new mysqli(HOST, USER, PASS, DB) or die ('koneksi eror');
?>
