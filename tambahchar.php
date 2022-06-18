<?php
if(isset($_POST["txSIMPAN"])){
    $pdata["ID"] = $_POST["txID"];
    $pdata["NAMA"] = $_POST["txNAMA"];
    $pdata["WEAPON"] = $_POST["txWEAPON"];
    $pdata["ARTIFACT"] = $_POST["txARTIFACT"];
    $pdata["ELEMENT"] = $_POST["txELEMENT"];

    include_once("curd.php");
    tambahdata($pdata);
    header("location:tampiltabel.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="fw-bold my-4 text-center">Tambah Karakter Genshin Impact </h1>
        <form action="" method="POST">
            ID
            <div>
                <input type="text" name="txID" class="form-control form-control border-primary">
            </div>
            NAMA
            <div>
                <input type="text" name="txNAMA" class="form-control form-control border-primary">
            </div>
            WEAPON
            <div>
                <input type="text" name="txWEAPON" class="form-control form-control border-primary">
            </div>
            ARTIFACT
            <div>
                <input type="text" name="txARTIFACT" class="form-control form-control border-primary">
            </div>
            ELEMENT
            <div>
                <select name="txELEMENT" class="from-select from-select border-primary">
                    <option value="HYDRO">Hydro</option>
                    <option value="PYRO">Pyro</option>
                    <option value="ELECTRO">Electro</option>
                    <option value="DENDRO">Dendro</option>
                    <option value="GEO">Geo</option>
                    <option value="CRYO">Cryo</option>
                    <option value="ANEMO">Anemo</option>
                </select>
            </div>
            <br>
            <div class="input-group">
                <button type="submit" class="insert btn btn-primary" name="txSIMPAN">SAVE</button>
                <a href="tampiltabel.php" class="btn btn-danger ms-3">Back</a>
            </div>
        </form>
    </div>
</body>
</html>