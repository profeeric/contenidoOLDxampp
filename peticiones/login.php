<?php
if (isset($_POST['username']) && $_POST['username']) {
    // do user authentication as per your requirements
    // ...
    // ...
    // based on successful authentication
    echo json_encode(array('success' => 1, 'username' => $_POST['username']));
} else {
    echo json_encode(array('success' => 0));
}
