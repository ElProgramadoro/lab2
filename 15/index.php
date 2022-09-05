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
        <legend>PROGRAMA 15</legend>
        <form action="index.php" method="post">
            <p>Pueblo desconocido</p>
            <p>tipo de tarjeta: <input type="text" name="a"></p>       
            <p><input type="submit"></p>
        </form>
    </fieldset>
    <?php
        if($_POST){
            $a = $_POST["a"];
            switch($a){
                case 1:
                    echo "aumento de 25%";
                    break;
                case 2:
                    echo "aumento de 35%";
                    break;
                case 3:
                    echo "aumento de 40%";
                    break;
                default:
                    echo "aumento de 50%";
                    break;
            }
        }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>