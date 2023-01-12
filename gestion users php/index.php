<?php
session_start();
include('connexion.php'); 

$stmt = $pdo->query("SELECT * FROM users");


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Utilisateurs</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <a href="ajouter.php" class="Btn_add"> <img src="images/plus.png"> Ajouter</a>

        <table>
            <tr id="items">
                <th>Nom</th>
                <th>Prénom</th>
                <th>Age</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
            <?php
                while($rows=$stmt->fetch())
                {
            ?>
             <tr>
                <td><?php echo $rows['nom'];?></td>
                <td><?php echo $rows['prenom'];?></td>
                <td><?php echo $rows['age'];?></td>
                <td><form action="modifier.php?id=<?php echo $id=$rows['id']; ?>" name=mod><button type="submit">Modifier</button></form></td>
                <td><form action="supprimer.php?id=<?php echo $id=$rows['id']; ?>" name=del><button type="submit">Supprimer</button></form></td>
            </tr>
            <?php
                }
            ?>
        </table>




    </div>
</body>

</html>