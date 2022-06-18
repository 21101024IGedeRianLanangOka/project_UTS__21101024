<?php
    include("curd.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Genshin Impact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
</head>
<body>
    <div class="container">
        <div class="row align-items-center">
            <div>
                <h3 class="mb-4 fw-bold text-center">Data Karakter Genshin Impact</h3>
            </div>
        </div>        
        <div>
            <table class="table align-middle py-5 border-primary">
                <thead class="table-light border-1 border-primary">
                    <tr class="text-center border-2 ">
                        <th class = "border-1 border-primary py-4">No.</th>
                        <th class = "border-1 border-primary py-4">Id</th>
                        <th class = "border-1 border-primary py-4">Nama</th>
                        <th class = "border-1 border-primary py-4">Weapon</th>
                        <th class = "border-1 border-primary py-4">Artifact</th>
                        <th class = "border-1 border-primary py-4">Element</th>
                        <th class= "py-2" colspan="2"><a href='tambahchar.php'><input class="btn btn-primary py-2 my-2 px-4 fw-bold" type="button" value="INSERT DATA"></a></th>
                    </tr>
                </thead>
                <tbody>
                    <?=listdata();?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
<style>
    .container{
        margin-top: 40px;
    }
 </style>