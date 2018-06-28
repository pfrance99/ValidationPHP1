<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand">Cours(es)</a>
    </div>
    <ul class="nav navbar-nav">
    <?php $page = basename($_SERVER["PHP_SELF"]); 
      $index = 'index.php';
      $basket = 'basket.php';
      $login = 'login.php';
      $register = 'register.php';
      function isActive($thisPage) {
        if($page == $thisPage){
          return 'active';
        }
      }
    ?>
      <li class="<?php echo isActive($index); ?>"><a href="./index.php">Boutique</a></li>
      
      <?php 
      session_start();
      if(!empty($_COOKIE['email']) || (isset($_SESSION['email']))) {
        echo '<li class="<?php echo isActive($basket); ?>"><a href="./basket.php">Mon Panier</a></li>';
        if(isset($_SESSION['email'])){
          echo '<li><a class="account-a">'. $_SESSION['email'] .'</a></li>';
        } elseif (!empty($_COOKIE['email'])) {
          echo '<li><a class="account-a">'. $_COOKIE['email'] .'</a></li>';
        }
      }
        ?>
        <?php 
      if (empty($_COOKIE["email"]) && (!isset($_SESSION['email']))) {
        echo '<li class="<?php echo isActive($login); ?>"><a href="./login.php">Connexion</a></li>
        <li class="<?php echo isActive($register); ?>"><a href="./register.php">Inscription</a></li>';
      } else {
        echo '<li><a href="./scripts/logoutAction.php">Déconnexion</a></li>';
      }
    ?>
      
    </ul>
    
  </div>
</nav>