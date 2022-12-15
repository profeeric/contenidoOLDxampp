<?php 
$esmayor=false;

if($_POST['edad']>=18){
    $esmayor=true;
}
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .color{
           
        }

        </style>
</head>
<body>
    <?php
    echo 'Nombre= '.$_POST['name'].'<br>';
    echo 'Edad= '.$_POST['edad'].'<br>';

    if($esmayor){
        echo '<div style="color:green;">';
        echo '<p>Eres mayor de 18</p><br><button href="google.es"> Click aqii</button>';
    echo 'felicidades';
    }else{
        echo '<div style="color:red;">';
        echo '<p>Eres un criajo</p><br>';
    }
    echo '</div>';

    echo PHP_INT_MAX;
    echo '<br>';
    echo PHP_INT_MIN;
    echo '<br>';
    echo '<br>';

$var = 8;
echo ++$var;//CASO 1
echo '<br>';

$var = 8;
echo $var++;// CASO 2
echo '<br>';
echo $var; // CASO 3

// & = AND
// | = OR


echo '<hr>';
$var='hola';
// ....
$var .= ' juan';
echo $var;
echo '<hr>';
echo '<br>';

$variable='';
switch ($variable) {
    case 8:
        echo 'salio 8';
        break;
    case 5:
        echo 'salio 5';
        break;
    case 3:
        echo 'salio 3';
        break;
    default:
        echo 'no hay salida';
        break;
}

if($variable==8){
}else if($variable==3){

}else if($variable==3){

}else{}
echo '<hr>';

$a=0;
while ($a <= 5) {
    echo $a.'<br>';
    $a=$a+1;
}
echo '<hr>';
for ($i=0; $i <= 5; $i++) { 
    echo $i.'<br>';
}

echo '<hr>';

do {
    echo 'HOLA';
} while (1!=1);
echo '<hr>';

var_dump('asd');
echo '<hr>';




function functionName($text) {
    echo $text;
}

functionName('ADS');

//3350
// Persona -> edad -> 3350

    ?>
</body>
</html>