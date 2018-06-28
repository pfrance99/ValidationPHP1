<?php

session_start();
if(isset($_POST['title'])){
    unset($_SESSION['basket'][$_POST['title']]);
}

header('location: ../basket.php');