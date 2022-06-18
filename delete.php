<?php
include_once("koneksi2.php");
    
if(isset($_GET["id"])){
    $sql = "DELETE FROM genshin WHERE id = '".$_GET["id"]."'";
    $hsl = mysqli_query($cnn, $sql);
}
    mysqli_close($cnn);
    header("location: tampiltabel.php");