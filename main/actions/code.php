<?php
if (isset($_POST['code'])){
    session_start();
    $_SESSION['code'] = $_POST['code'];
    header('Location: ../index.php');
}
else {

    header('Location: ../index.php');
}