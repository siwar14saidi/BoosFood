<?php
// Connexion à la base de données
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=testa;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO mail (username,email,phone, messages) VALUES(?, ? ,? ,?)');
$req->execute(array($_POST['username'], $_POST['email'], $_POST['phone'], $_POST['messages']));

// Redirection du visiteur vers la page du minichat
header('Location: ../../minichat.php');
?>