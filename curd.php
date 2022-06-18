<?php

function tambahdata($pdata){
    $sqlINSERT = "INSERT INTO genshin (id, nama, weapon, artifact, element) 
    VALUES('".$pdata["ID"]."', '".$pdata["NAMA"]."', '".$pdata["WEAPON"]."', '".$pdata["ARTIFACT"]."', '".$pdata["ELEMENT"]."');";

    include_once("koneksi2.php");
    $hsl = mysqli_query($cnn, $sqlINSERT);
    return $hsl;
}

function updatedata($pdata){
    $sql = "UPDATE genshin SET
        id = '".$pdata["ID2"]."',
        nama = '".$pdata["NAMA"]."',
        weapon = '".$pdata["WEAPON"]."',
        artifact = '".$pdata["ARTIFACT"]."',
        element = '".$pdata["ELEMENT"]."'
        WHERE id = '".$pdata["ID1"]."';";

    include_once("koneksi2.php");
    $hsl = mysqli_query($cnn, $sql);
    return $hsl;
}

function listdata(){
    include_once("koneksi2.php");
    $sql = "SELECT * FROM genshin;";
    $hsl = mysqli_query($cnn,$sql);
    $hsl1 = "";
    $no = 1;
    while($h = mysqli_fetch_array($hsl)){
        $hsl1 .= '<tr>
        <td class="text-center border-1">'.$no.'</td>
        <td class="text-center border-1">'.$h["id"].'</td>
        <td class="text-center border-1">'.$h["nama"].'</td>
        <td class="text-center border-1">'.$h["weapon"].'</td>
        <td class="text-center border-1">'.$h["artifact"].'</td>
        <td class="text-center border-1">'.$h["element"].'</td>
        <td class = "text-center">
            <a class="btn btn-success fw-bold px-3" href="editchar.php?id='.$h["id"].'">Edit</a>
        </td>
        <td class = "text-center">
            <a class="btn btn-danger fw-bold px-3" href="delete.php?id='.$h["id"].'" onClick=\'return confirm("Yakin Mau Hapus DECK? :v");\'>Delete</a>
        </td>
    </tr>';
    $no++;
    }
    return $hsl1;
}