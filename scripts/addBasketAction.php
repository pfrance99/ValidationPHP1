<?php

session_start();
if(isset($_POST['title']) && isset($_POST['price'])){
    $_SESSION['basket'][$_POST['title']] = $_POST['price'];
}

header('location: ../basket.php');