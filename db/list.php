<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            background-color: #848484;
            color: blue;
        }

        th,
        td {
            border: 2px solid black;
        }
    </style>
</head>

<body>
    <?php
    require('./conectarDB.php');
    ?>
    <?php

    $conn = conectar_DB();
    $sql = "SELECT * FROM MyGuests";
    $result = $conn->query($sql);

    echo '<hr>';

    echo '<table>';
    echo '<tr>';
    echo '<th>ID</th>';
    echo '<th>Nombre</th><th>Edad</th>';
    echo '<th>reg_date</th>';
    echo '</tr>';
    foreach ($result as $key => $value) {
        echo '<tr>';
        echo '<td>' . $value['id'] . '</td>';
        echo '<td>' . $value['nombre'] . '</td>';
        echo '<td>' . $value['edad'] . '</td>';
        echo '<td>' . $value['reg_date'] . '</td>';
        echo '</tr>';
    }
    echo '</table>';

    echo '<hr>';
    foreach ($result as $key => $value) {
        echo '<br>';
        echo '<br>';
        var_dump($value);
    }


    /*
*/
    echo '<hr>';
    $conn = conectar_DB();
    $sql = "SELECT * FROM MyGuests WHERE edad=45";
    $result = $conn->query($sql);

    foreach ($result as $key => $value) {
        echo '<br>';
        echo '<br>';
        var_dump($value);
    }

    $conn->close();
    ?>
</body>

</html>