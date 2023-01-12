<?php
session_start();
include('connexion.php');

$id=$_SESSION["id"];
$stmt = $pdo->query("SELECT * FROM users");
$rows=$stmt->fetch(); 

if (isset($_POST['change'])) { 


  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $age = $_POST['age'];
  

  $sql = "UPDATE users SET nom=?, prenom=?, age=? WHERE id=$id";
  $stmt= $pdo->prepare($sql);
  $stmt->execute([$nom,$prenom,$age]);
  echo "<center>Modification effectuée avec succès !</center>";
  
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="form">
        <a href="index.php" class="back_btn"><img src="images/back.png"> Retour</a>
        <h2>Modifier l'employé : <?= $rows['nom'] ?> </h2>
        <p class="erreur_message">
        </p>
        <form action="" method="POST">
            <label>Nom</label>
            <input type="text" name="nom" value="">
            <label>Prénom</label>
            <input type="text" name="prenom" value="">
            <label>âge</label>
            <input type="number" name="age" value="">
            <input type="submit" value="Modifier" name="change">
        </form>
    </div>
</body>

</html>