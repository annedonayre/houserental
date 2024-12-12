<?php
include 'admin_class.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $action = new Action();
    $result = $action->save_user();
    echo 1;
} else {
    echo 0;
}
?>