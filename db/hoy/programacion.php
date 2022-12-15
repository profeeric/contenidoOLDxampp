<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
            *{color:blue}
            p{color:red;}
            </style>
</head>
<body>


<?php
$String="dkjsfsjd45647*/*/*f";
$int=8754654;
$float=7.25; // 8
$Boolean=false;

if(1==1 & 2==2 & 3==3){
    echo "y";
    echo "<br>";
}
if(1==2 | 2==3){
    echo "OR";
    echo "<br>";
}

if(1==3){
    echo "el if";
    echo "<br>";
}

else if(1==3){
    echo "el elseif 1";
    echo "<br>";
}

else{
    echo "el else";
    echo "<br>";
}
$a="9.5";
$b=9.5;


echo 'hola'.$int.'<p>asd</p>';


$hoy='17/11';
$hoy='14/12';
$cumple_jero='14/12';
$cumple_omar='19/01';

if($cumple_jero==$hoy){
    echo 'class="cumple"';
    echo '<p>jero</p>';
}
$hoy='19/01';
if($cumple_omar==$hoy){
    echo 'class="cumple"';
}



//0==false;
//1==true;

echo '<br>';


//echo $var;

var_dump(1==1);
echo '<br>';
var_dump(9);
echo '<br>';
var_dump('a');
echo '<br>';
var_dump(9.5);
echo '<br>';
echo '<hr>';


$a='9.5';
$b=9.5;
var_dump($a);
echo '<br>';
var_dump($b);
echo '<br>';
if($a==$b ){echo 'OK';}

// IF      == SI
// ELSE IF == SI NO
// ELSE    == EN CASO DE QUE NO

//IF

//IF - ELSE

//IF - ELSE IF

// if(){}elseif(){}else if(){}else if(){}else if(){}

// if(){}else{}

// if(){}else if(){}else if(){}else{}

// if(){}

?>
</body>
</html>