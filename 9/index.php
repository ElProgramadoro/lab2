<!doctype html>
<html lang="en">
<style>
table, th, td {
  border:1px solid black;
}
</style>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Title</title>
</head>
<body>
<fieldset>
        <legend>PROGRAMA 9</legend>
        <form action="index.php" method="post">
            <p>cuantos estudiantes hay en el salon?: <input type="text" name="estudiantes"></p>
            <p>Chicas: <input type="text" name="ninas"></p>
            <p>Chicos: <input type="text" name="ninos"></p>            
            <p><input type="submit"></p>
        </form>
    </fieldset>
    <?php
    if($_POST){
        $cantidad = $_POST["estudiantes"];
        $ninos = $_POST["ninos"];
        $ninas = $_POST["ninas"];
        $resultadoninos = $ninos/$cantidad;
        $resultadoninas = $ninas/$cantidad;  
        echo "<table border:1px solid black>";
        echo "<tr>";
        echo "<td>Estudiantes</td>";
        echo "<td>Niñas</td>";
        echo "<td>Niños</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>%</td>";
        echo "<td>$resultadoninas</td>";
        echo "<td>$resultadoninos</td>";
        echo "</tr>";
        echo "</table>";                     
    }
    ?>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>