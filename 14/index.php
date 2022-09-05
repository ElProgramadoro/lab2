<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>problema</title>
</head>
<body>
<fieldset>
        <legend>PROGRAMA 14</legend>
        <form action="index.php" method="post">
            <p>Inserte cuantos años tiene en la tienda</p>
            <p>años: <input type="text" name="a"></p>
                              
            <p><input type="submit"></p>
        </form>
    </fieldset>
    <?php
    if($_POST){
        $a = $_POST["a"];
        if($a==1){
            echo "bono de 100$";
        }else if($a==2){
            echo "bono de 200$";
        }else if($a==3){
            echo "bono de 300$";   
        }else if($a==4){
            echo "bono de 400$";
        }else if($a==5){
            echo "bono de 500$";
        }else{
            echo "bono de 1000$";
        }    
            
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>