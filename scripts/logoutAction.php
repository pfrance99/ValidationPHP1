<?php
session_start();

session_destroy();
if(!empty($COOKIE['email'])) unset($_COOKIE['email']);
header('location: ../index.php');