<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Cours(es)</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<?php include './templates/header.php';
?>
<div class="index-content-bloc">
  <div class="bloc-artices">
    <h2>Articles</h2>
    <h5>Vous êtes limités à une heure de cours de la même catégorie du à la demande de Cours(es), nous nous en excusons</h5>
    <div class="row">
      <div id="column1" class="column">
        <h4 class="title">Cours de cirque</h4>
        <h4 class="price">20€</h4>
        <form role="addBasket" method="POST" action="./scripts/addBasketAction.php">
          <input type="hidden" name="title" value="Cours de cirque">
          <input type="hidden" name="price" value="20">
          <button type="submit" class="btn btn-default">+ au panier</button>
        </form>
      </div>
      <div id="column2" class="column">
        <h4 class="title">Cours d'onologie</h4>
        <h4 class="price">25€</h4>
        <form role="addBasket" method="POST" action="./scripts/addBasketAction.php">
          <input type="hidden" name="title" value="Cours d'onologie">
          <input type="hidden" name="price" value="25">
          <button type="submit" class="btn btn-default">+ au panier</button>
        </form>
      </div>
      <div id="column3" class="column">
        <h4 class="title">Cours d'informatique</h4>
        <h4 class="price">19€</h4>
        <form role="addBasket" method="POST" action="./scripts/addBasketAction.php">
          <input type="hidden" name="title" value="Cours d'informatique">
          <input type="hidden" name="price" value="19">
          <button type="submit" class="btn btn-default">+ au panier</button>
        </form>
      </div> 
    </div>
    <div class="row">
      <div id="column4" class="column">
        <h4 class="title">Cours de foot</h4>
        <h4 class="price">11€</h4>
        <form role="addBasket" method="POST" action="./scripts/addBasketAction.php">
        <input type="hidden" name="title" value="Cours de foot">
        <input type="hidden" name="price" value="11">
        <button type="submit" class="btn btn-default">+ au panier</button>
        </form>
      </div>
      <div id="column5" class="column">
        <h4 class="title">Cours d'archéologie</h4>
        <h4 class="price">20€</h4>
        <form role="addBasket" method="POST" action="./scripts/addBasketAction.php?title='Cours de Foot'&price='11'">
          <input type="hidden" name="title" value="Cours d'archéologie">
          <input type="hidden" name="price" value="20">
          <button type="submit" class="btn btn-default">+ au panier</button>
        </form>
      </div>
      <div id="column6" class="column">
        <h4 class="title">Cours de cuisine</h4>
        <h4 class="price">29€</h4>
        <form role="addBasket" method="POST" action="./scripts/addBasketAction.php">
          <input type="hidden" name="title" value="Cours de cuisine">
          <input type="hidden" name="price" value="29">
          <button type="submit" class="btn btn-default">+ au panier</button>
        </form>
      </div> 
    </div>
    <div class="row">
      <div id="column7" class="column">
        <h4 class="title">Cours d'épiçologie</h4>
        <h4 class="price">30€/h</h4>
        <form role="addBasket" method="POST" action="./scripts/addBasketAction.php">
            <input type="hidden" name="title" value="Cours d'épiçologie">
            <input type="hidden" name="price" value="30">
            <button type="submit" class="btn btn-default">+ au panier</button>
        </form>
      </div>
      <div id="column8" class="column">
        <h4 class="title">Cours de verger</h4>
        <h4 class="price">13€/h</h4>
        <form role="addBasket" method="POST" action="./scripts/addBasketAction.php">
          <input type="hidden" name="title" value="Cours de verger">
          <input type="hidden" name="price" value="13">
          <button type="submit" class="btn btn-default">+ au panier</button>
        </form>
      </div>
      <div id="column9" class="column">
        <h4 class="title">Cours de conduite</h4>
        <h4 class="price">50€/h</h4>
        <form role="addBasket" method="POST" action="./scripts/addBasketAction.php">
          <input type="hidden" name="title" value="Cours de conduite">
          <input type="hidden" name="price" value="50">
          <button type="submit" class="btn btn-default">+ au panier</button>
        </form>
      </div> 
    </div>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>
</html>