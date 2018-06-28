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
<div class="content-bloc">
    <h2>Connexion</h2>
    <form method="POST" action="./scripts/loginAction.php">
    <div class="form-group">
        <label for="exampleInputEmail1">Adresse Email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Entrer l'email" required>
        <?php if(isset($_GET['error'])){ echo '<small id="emailHelp" class="red">Mauvais email ou mot de passe</small>';} ?>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Mot de Passe</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Mot de passe" required>
    </div>
    <div class="form-check">
        <input type="checkbox" class="form-check-input" name="memory" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Se souvenir de moi</label>
    </div> 
    <button type="submit" class="btn btn-primary">Se connecter</button>
    </form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>
</html>