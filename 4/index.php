<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Title</title>
</head>
<body>
    <?php
    //SB = salario bruto; HT = horas trabajadas; PPH = pago por hora 
    $HT = $_GET["HT"];
    $PPH = $_GET["PPH"];
    $SB = $HT * $PPH;
    //DES = descuento
    $DES = 0.2 * $SB;
    //SN = salario neto
    $SN = $SB - $DES;
    echo "el salario bruto del trabajador es: $SB <hr>";
    echo "el salario neto del trabajador es: $SN";  
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>