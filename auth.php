<?php
// démarrage de la session
session_start();
// recupération des paramètres du formulaire
$login = $_POST['log'];
$password = $_POST['pass'];
// Connexion la base de données
$db = new PDO("mysql:host=localhost;dbname=tp","root","");
// Exécution de la requête
$result = $db->query("SELECT * FROM tpdb WHERE login='$login' AND
password='$password'");
$row = $result->fetch(PDO::FETCH_ASSOC);
// Vérifier si les données fournies sont correctes
if (!$row){
// ici l’utilisateur n’est pas reconnu
$_SESSION['msg'] = "Votre login ou mot de passe est incorrect";
header("location:login.php");
} else {
// Ici l’utilisateur a fourni les bonnes informations
$_SESSION['login'] = 1;
$_SESSION['msg'] = "Bienvenu M. ".$row['login'];
header("location:index.php");
}
?>