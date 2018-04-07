<?php
  //include database connect file
  include_once '../dbconnect.php';

  //Constanten
  $stad = $_POST['stad'];
  $populatie = $_POST['populatie'];

  //SQL count number of rows voor Stad
  $sqlSelectStad = "SELECT * FROM stad WHERE naam = '$stad';";
  $result = mysqli_query($conn, $sqlSelectStad);
  $rowCount = mysqli_num_rows($result);

  //if Condition: check if submit button is clicked and redirect
  if (!isset($_POST['submitAddStad'])) {
    header("location: ../../index.php?signup=error");
  }
  //Elseif Condition: check if an input is empty and redirect
  elseif (empty($stad) || empty($populatie)) {
    header("location: ../../index.php?signup=empty");
  }
  //Elseif Condition: valid characters check and redirect
  elseif (!preg_match("/^[ a-zA-Z-]*$/", $stad)) {
    header("location: ../../index.php?signup=unvalidCharacters");
  }
  //Elseif Condition: double data check and redirect
  elseif ($rowCount >= 1) {
    header("location: ../../index.php?signup=dubbleDataStad");
  }
  //Else condition: Add entry to the database
  else{
    $sqlInsert = "INSERT INTO stad (naam, populatie) VALUES ('$stad', '$populatie');";
    mysqli_query($conn, $sqlInsert);
    header("location: ../../index.php?signup=succes");
  }
?>
