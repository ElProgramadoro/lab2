<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Title</title>
</head>
<body>
    <fieldset>
        <legend>PROGRAMA 10</legend>
        <form action="index.php" method="post">
            <p>rellene con 0 los espacios en blanco</p>
            <p>Horas: <input type="text" name="h"></p>
            <p>Minuto: <input type="text" name="m"></p>
            <p>Segundo: <input type="text" name="s"></p>       
            <p><input type="submit"></p>
        </form>
    </fieldset>
    <?php
        if($_POST){
            $h = $_POST["h"];
            $m = $_POST["m"];
            $s = $_POST["s"];
            $totalh = $h * 3600;
            $totalm = $m * 60;
            $totals = $s * 1;
            $totalt = ($totalh+$totalm+$totals)*.25;
            echo "el total a pagar por el tiempo trabajado es: ".$totalt."";
        }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>