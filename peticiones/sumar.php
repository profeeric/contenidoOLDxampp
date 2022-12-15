<?php
if (!(isset($_POST['numeroUno']) && $_POST['numeroUno'])) {
    echo json_encode(array('success' => 0, 'codeError' => 'numeroUno'));
    exit;
}
if (!(isset($_POST['numeroDos']) && $_POST['numeroDos'])) {
    echo json_encode(array('success' => 0, 'codeError' => 'numeroDos'));
    exit;
}

function sumar($param1, $param2)
{
    return $param1 + $param2;
}

$resultado = sumar($_POST['numeroUno'], $_POST['numeroDos']);



json_encode(array('success' => 1, 'resultado' => $resultado));
exit;
