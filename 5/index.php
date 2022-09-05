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
        <legend>PROGRAMA 5</legend>
        <form action="index.php" method="post">
            <p>Nombre del estudiante: <input type="text" name="nombre"></p>
            <p>Nota 1: <input type="text" name="txtN1"></p>
            <p>Nota 2: <input type="text" name="txtN2"></p>
            <p>Nota 3: <input type="text" name="txtN3"></p>
            <p>Nota 4: <input type="text" name="txtN4"></p>
            <p>Nota 5: <input type="text" name="txtN5"></p>
            <p><input type="submit"></p>
        </form>
    </fieldset>
    <?php
        if($_POST){
            $nombre = $_POST["nombre"];
            $n1 = $_POST["txtN1"];
            $n2 = $_POST["txtN2"];
            $n3 = $_POST["txtN3"];
            $n4 = $_POST["txtN4"];
            $n5 = $_POST["txtN5"];
            if($n1<0||$n1>100){
                echo "el valor de la nota 1 es incorrecto";
            }else if($n2<0||$n2>100){
                echo "el valor de la nota 2 es incorrecto";
            }else if($n3<0||$n3>100){
                echo "el valor de la nota 3 es incorrecto";
            }else if($n4<0||$n4>100){
                echo "el valor de la nota 4 es incorrecto";
            }else if($n5<0||$n5>100){
                echo "el valor de la nota 5 es incorrecto";
            }else{
                $prom = (($n1+$n2+$n3+$n4+$n5)/5);
                echo "el promedio es: ".$prom."<br>";
                if ($prom>=61){
                    echo "el estudiante $nombre paso la materia con $prom";
                }else{
                    echo "el estudiante $nombre perdio la materia con $prom";
                }
            }
        }

    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>