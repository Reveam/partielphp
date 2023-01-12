<?php
  
  $server = "localhost"; 
  $user = "root";
  $pass = "root";
  $database = "partielphp";
  
  
  $conn = mysqli_connect($server, $user, $pass, $database); 
  
  if (!$conn) {
      die("<script>alert('La connexion a échoué')</script>");
  }
  
  $pdo= new PDO('mysql:dbname=partielphp;host=localhost;charset=utf8','root','root');
  
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

  ?>