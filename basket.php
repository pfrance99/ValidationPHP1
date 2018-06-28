<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Cours(es)</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<?php include './templates/header.php'?>

<div class="index-content-bloc">
  <div class="bloc-artices-basket">
    <h2>Mon Panier</h2>
    <?php
    $total = 0;
    if(isset($_SESSION['basket'])){
      foreach ($_SESSION['basket'] as $name => $price) {
        echo '<div class="line-list">
                <h5>'.$name.'</h5>
                <p>'.$price.'.00€</p>
              </div>';
        $total += intval($price); 
      } 
    } else {
      echo '<h4>Vous n\'avez rien ajouté à votre panier</h4>';
    } 
    echo '<div class="line-list">
    <h4>TOTAL</h4>
    <p>'.$total.'.00€</p>
  </div>';
    ?>
    
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>
</html>