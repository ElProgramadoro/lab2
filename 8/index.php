<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Inversión</title>
</head>
<body>
    <fieldset>
        <legend> Porcentajes Inversión </legend>
    <form name="sumar" action="index.php" method="post">
    <p>Ingrese la inversión de la persona 1: <input type="number" name="num1" /></p>
    <p>Ingrese la inversión de la persona 2: <input type="number" name="num2" /></p>
    <p>Ingrese la inversión de la persona 3: <input type="number" name="num3" /></p>
    <p><input type="submit" name="sumar" value="Calcular" /></p>
    </form>
</fieldset>
    <?php

    if($_POST){
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $num3 = $_POST["num3"];

        $total=($num1+$num2+$num3);

        $priinv=($num1*100)/$total;
        $seginv=($num2*100)/$total;
        $terinv=($num3*100)/$total;

        echo "El porcentaje de inversión de la primera persona es de: ".$priinv."%";
        echo "<br>"."El porcentaje de inversión de la segunda persona es de: ".$seginv."%";
        echo "<br>"."El porcentaje de inversión de la tercera persona es de: ".$terinv."%";

    }

?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>