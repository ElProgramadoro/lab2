<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Title</title>
</head>
<body>
    <table class="table">
        <thead>
            <?php
            for($i = 1 ; $i<101 ; $i++){
            ?>
            <tr>
                <th scope="col"><?php echo $i?></th>  
                <th scope="col">
                   <?php
                        $hash = md5($i);
                        echo $hash;
                   ?>
                </th> 
                <th scope="col">
                    <a href="resultado.php?res=<?php echo $i?>">
                    <button type="button" class="btn btn-secondary">Boton <?php echo $i?></a></button>
                </th>             
            </tr>           
        </thead>
            <?php }?>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>