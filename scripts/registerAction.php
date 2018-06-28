<?php
if(isset($_POST['email']) && isset($_POST['password']) && (preg_match('#^[\w.-]+@[\w.-]+\.[a-z]{2,6}$#i', $_POST['email']))){
    session_start();
    $_SESSION['email'] = $_POST['email'];
    if(isset($_POST['memory'])){
        setcookie('email', $_POST['email'], time() + (86400 * 30), null, null, false, true);
    }
    header('location: ../index.php');
} else {
    header('location: ../index/php');
}