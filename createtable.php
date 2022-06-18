<?php

include_once("koneksi2.php");

$sql = "CREATE TABLE genshin(
    id varchar(10) PRIMARY KEY, 
    nama varchar(50),
    weapon varchar(70),
    artifact varchar(50),
    element varchar(50)
);";

$hsl = mysqli_query($cnn, $sql);
    if($hsl){
        echo "Tabel genshin <strong>BERHASIL</strong> Dibuat<br>";
    }else{
        echo "Tabel genshin <strong>GAGAL</strong> Dibuat<br>";
    }

mysqli_close($cnn);