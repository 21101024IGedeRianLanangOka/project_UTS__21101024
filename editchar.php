<?php
if(isset($_GET["id"])){
    include_once("koneksi2.php");
    $id = $_GET["id"];
    $sql = "SELECT * FROM genshin WHERE id='".$id."';";
    $hsl = mysqli_query($cnn, $sql);
    $h = mysqli_fetch_array($hsl);
}

if(isset($_POST["txSIMPAN"])){
    $pdata["ID1"] = $_POST["txIDLAMA"];
    $pdata["ID2"] = $_POST["txID"];
    $pdata["NAMA"] = $_POST["txNAMA"];
    $pdata["WEAPON"] = $_POST["txWEAPON"];
    $pdata["ARTIFACT"] = $_POST["txARTIFACT"];
    $pdata["ELEMENT"] = $_POST["txELEMENT"];

    include_once("curd.php");
    updatedata($pdata);
    header("location:tampiltabel.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Genshin</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container">
        <h1 class="my-2 fw-bold text-center">Edit Data Karakter Genshin Impact</h1>
        <form action="editchar.php" method="POST">
            <input type="hidden" name="txIDLAMA" value="<?=$h['id'];?>"> 
            ID
            <div>
                 <input type="text" class="form-control form-control border-primary" name="txID" value="<?=$h['id'];?>">
            </div>        
            NAMA
            <div>
                <input type="text" class="form-control form-control border-primary" name="txNAMA" value="<?=$h["nama"];?>">
            </div>
            WEAPON
            <div>
                <input type="text" class="form-control form-control border-primary" name="txWEAPON" value="<?=$h["weapon"];?>">
            </div>
            ARTIFACT
            <div>
                <input type="text" class="form-control form-control border-primary" name="txARTIFACT" value="<?=$h["artifact"];?>">
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
            <button type="submit" class="btn btn-primary" name="txSIMPAN">Save</button>  
            <a href="tampiltabel.php" class="btn btn-danger ms-3">Back</a>      
        </form>
    </div>
</body>
</html>