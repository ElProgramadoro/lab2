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
$btn0='';
$btn1='';
$btn2='';
$btn3='';
$btn4='';
$btn5='';
$btn6='';
$btn7='';
$btn8='';
$btn9='';
$btn10='';
$btn11='';
$btn12='';
if(isset($_POST['0']))$btn0=$_POST['0'];
if(isset($_POST['1']))$btn1=$_POST['1'];
if(isset($_POST['2']))$btn2=$_POST['2'];
if(isset($_POST['3']))$btn3=$_POST['3'];
if(isset($_POST['4']))$btn4=$_POST['4'];
if(isset($_POST['5']))$btn5=$_POST['5'];
if(isset($_POST['6']))$btn6=$_POST['6'];
if(isset($_POST['7']))$btn7=$_POST['7'];
if(isset($_POST['8']))$btn8=$_POST['8'];
if(isset($_POST['9']))$btn9=$_POST['9'];
if(isset($_POST['10']))$btn10=$_POST['10'];
if(isset($_POST['11']))$btn11=$_POST['11'];
if(isset($_POST['12']))$btn12=$_POST['12'];
if($btn0){
    for($i=1;$i<=12;$i++){
        $res = $i * 0;
        ECHO "$i x 0 = $res";
        echo "<br>";
    }
}
if($btn1){
    for($i=1;$i<=12;$i++){
        $res = $i * 1;
        ECHO "$i x 1 = $res";
        echo "<br>";
    }
}
if($btn2){
    for($i=1;$i<=12;$i++){
        $res = $i * 2;
        ECHO "$i x 2 = $res";
        echo "<br>";
    }
}

if($btn3){
    for($i=1;$i<=12;$i++){
        $res = $i * 3;
        ECHO "$i x 3 = $res";
        echo "<br>";
    }
}
if($btn4){
    for($i=1;$i<=12;$i++){
        $res = $i * 4;
        ECHO "$i x 4 = $res";
        echo "<br>";
    }
}
if($btn5){
    for($i=1;$i<=12;$i++){
        $res = $i * 5;
        ECHO "$i x 5 = $res";
        echo "<br>";
    }
}
if($btn6){
    for($i=1;$i<=12;$i++){
        $res = $i * 6;
        ECHO "$i x 6 = $res";
        echo "<br>";
    }
}
if($btn7){
    for($i=1;$i<=12;$i++){
        $res = $i * 7;
        ECHO "$i x 7 = $res";
        echo "<br>";
    }
}
if($btn8){
    for($i=1;$i<=12;$i++){
        $res = $i * 8;
        ECHO "$i x 8 = $res";
        echo "<br>";
    }
}
if($btn9){
    for($i=1;$i<=12;$i++){
        $res = $i * 9;
        ECHO "$i x 9 = $res";
        echo "<br>";
    }
}
if($btn10){
    for($i=1;$i<=12;$i++){
        $res = $i * 10;
        ECHO "$i x 10 = $res";
        echo "<br>";
    }
}
if($btn11){
    for($i=1;$i<=12;$i++){
        $res = $i * 11;
        ECHO "$i x 11 = $res";
        echo "<br>";
    }
}
if($btn12){
    for($i=1;$i<=12;$i++){
        $res = $i * 12;
        ECHO "$i x 2 = $res";
        echo "<br>";
    }
}
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>