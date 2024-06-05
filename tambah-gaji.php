<?php
try{
    $host = "localhost";
    $dbname = "gajian";
    $username = "root";
    $pass = "";
    $koneksi = new PDO("mysql:host=" . $host . 
    ";dbname=". $dbname, $username, $pass);
    $koneksi->exec("set names utf8");

    $sql = "INSERT INTO gaji_karyawan VALUES ('1007', 'Asep Isa Saepul Akbar','2.000.000','Manager Operasi')";
    $result = $koneksi->query($sql)->fetch();

    var_dump($result);
}catch(PDOException $exception){
    echo "Database could not be connected: " . $exception->getMessage();
}

?>