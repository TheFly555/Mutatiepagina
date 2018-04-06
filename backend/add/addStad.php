<?php
  include_once '../dbconnect.php';

    // Constanten
    $stad = $_POST['stad'];
    $populatie = $_POST['populatie'];

    //SQL count number of rows voor Stad
    $sqlSelectStad = "SELECT * FROM stad WHERE naam = '$stad';";
    $result = mysqli_query($conn, $sqlSelectStad);
    $rowCount = mysqli_num_rows($result);

    if (!isset($_POST['submitAddStad'])) {
      header("location: ../../index.php?signup=error");
    }
    elseif (empty($stad) || empty($populatie)) {
      header("location: ../../index.php?signup=empty");
    }
    // elseIf Condition: valid characters
    elseif (!preg_match("/^[ a-zA-Z-]*$/", $stad)) {
      header("location: ../../index.php?signup=unvalidCharacters");
    }
    // elseIf Condition: Dubbele Gegevens
    elseif ($rowCount >= 1) {
      header("location: ../../index.php?signup=dubbleDataStad");
    }
    else{
      $sqlInsert = "INSERT INTO stad (naam, populatie) VALUES ('$stad', '$populatie');";
      mysqli_query($conn, $sqlInsert);
      header("location: ../../index.php?signup=succes");
    }
   ?>
