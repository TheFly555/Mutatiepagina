<?php
  include_once 'dbconnect.php';

  $stad = $_POST['stad'];
  $populatie = $_POST['populatie'];

  $sql = "INSERT INTO stad (naam, populatie) VALUES ('$stad', '$populatie');";
  mysqli_query($conn, $sql);

  header("location: ../index.php?signup=succes");
 ?>
