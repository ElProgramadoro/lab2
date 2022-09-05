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
        <legend>PROGRAMA 7</legend>
        <form action="index.php" method="post">
            <p>presupuesto del hospital: <input type="text" name="presu"></p>            
            <p><input type="submit"></p>
        </form>
        <?php
        if($_POST){
            $presu = $_POST["presu"];
            $gine = $presu * .4;
            $trau = $presu * .3;
            $pedi = $presu * .3;
            echo "el presupuesto de ginecologia es: ".$gine."$ <br>";
            echo "el presupuesto de traumatologia es: ".$trau."$ <br>";
            echo "el presupuesto de pediatria es: ".$pedi."$ <br>";

        }
        ?>
    </fieldset>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>