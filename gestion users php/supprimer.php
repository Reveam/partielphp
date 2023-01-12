<?php
  //connexion a la base de données
  session_start();
  include('connexion.php');
  //récupération de l'id dans le lien
...
  //requête de suppression
  $sql = "DELETE FROM users WHERE id=$id";

  $conn->exec($sql);
  echo "Vous avez supprimé l'utilisateur.";


  //redirection vers la page index.php

  header(Location : . 'index.php');
Exit();
?>