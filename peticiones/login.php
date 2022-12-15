<?php
if (!(isset($_POST['username']) && $_POST['username'])) {
    echo json_encode(array('success' => 0, 'codeError' => 'username'));
    exit;
}

if (!(isset($_POST['password']) && $_POST['password'])) {
    echo json_encode(array('success' => 0, 'codeError' => 'password'));
    exit;
}

if (!(isset($_POST['email']) && $_POST['email'])) {
    echo json_encode(array('success' => 0, 'codeError' => 'email'));
    exit;
}


if (isset($_POST['codigo']) && $_POST['codigo']) {

    if ($_POST['codigo'] == 'signin') {
        // do user authentication as per your requirements
        // based on successful authentication
        echo json_encode(array('success' => 1, 'codigo' => 'signin', 'username' => $_POST['username']));
        exit;
    } else {
        nombre();
    }
    echo json_encode(array('success' => 0, 'codeError' => 'captcha'));
    exit;
}


function nombre()
{
    if ($_POST['captcha'] == $_POST['captcha_check']) {
        // do user authentication as per your requirements
        // ...
        // ...
        // based on successful authentication
        echo json_encode(array('success' => 1, 'codigo' => 'signup', 'username' => $_POST['username']));
        exit;
    } else {
        echo json_encode(array('success' => 0, 'codeError' => 'captcha'));
        exit;
    }
}
// nombre()