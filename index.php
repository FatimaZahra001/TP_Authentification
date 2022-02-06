<?php
// on démarre la session et on s'assure que
// l'utilisateur est authentifié.
session_start();
if (empty($_SESSION['login']) ){
// ici l'utilisateur n'est pas authentifié
// on le redirige vers le formulaire d'authentification
header("location:login.php");
exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentification</title>
    <!-- CSS only -->
<link rel="stylesheet" href="https://bootswatch.com/5/cyborg/bootstrap.min.css">
</head>
<body>
<div class="bienvenu"></div>
<h3>
<?php 
    if(isset($_SESSION['msg'])):
    ?>
    <div>
      <?php 
      echo $_SESSION['msg'];
      ?>
     </div>
     <?php endif ?>
</h3>
<h2>Ma page protégée</h2>
<a href="fermer.php">Logout</a>
</body>
</html>