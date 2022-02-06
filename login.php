<?php
session_start();
?>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentification</title>
    <!-- CSS only -->
<link rel="stylesheet" href="https://bootswatch.com/5/cyborg/bootstrap.min.css">
</head>
<body>
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
<form method="post" action="auth.php">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label mt-4">Login :</label>
        <input type="text" class="form-control" placeholder="Entrer Login" name="log">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label mt-4">Password</label>
        <input type="password" class="form-control" placeholder="Entrer Password" name="pass">
    </div>
    <div class="form-group">
    <button type="submit" class="btn btn-primary" value ="Entrer">Submit</button>
    </div>
</form>
</body>
</html>
