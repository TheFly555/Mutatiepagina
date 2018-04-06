<?php

  if () {

  } else {
    include_once '../dbconnect.php';

    $winkel_id = $_POST['winkel_id'];
    $winkel = $_POST['winkel'];

    $sql = "INSERT INTO winkel (winkel_id, winkel_naam) VALUES ('$winkel_id', '$winkel');";
    mysqli_query($conn, $sql);

    header("location: ../../index.php?signup=succes");
  }

    include_once '../dbconnect.php';

      // Constanten
      $winkel_id = $_POST['winkel_id'];
      $winkel = $_POST['winkel_naam'];

      //SQL count number of rows voor wnkel naam en id
      $sqlSelectWinkel = "SELECT * FROM winkel WHERE winkel_naam = '$winkel';";
      $resultWinkelNaam = mysqli_query($conn, $sqlSelectWinkel);
      $rowCountWinkelNaam = mysqli_num_rows($resultWinkelNaam);

      $sqlSelectWinkelId = "SELECT * FROM winkel WHERE winkel_id = '$winkel_id';";
      $resultWinkelid = mysqli_query($conn, $sqlSelectWinkelId);
      $rowCountWinkelid = mysqli_num_rows($resultWinkelid);

      // If Condition: Check of de submit button is geklikt
      if (!isset($_POST['submitAddWinkel'])) {
        header("location: ../../index.php?signup=error");
      }
      // elseIf Condition: Check of alles is ingevuld
      elseif (empty($winkel_id) || empty($winkel)) {
        header("location: ../../index.php?signup=empty");
      }
      //elseIf Condition: Check of Id zijn letters
      elseif (!ctype_alpha(string, $winkel_id)) {
        header("location: ../../index.php?signup=geenLetter");
      }
      // elseIf Condition: valid characters
      elseif (!preg_match("/^[ a-zA-Z-]*$/", $winkel_id) || !preg_match("/^[a-z]*$/", $winkel)) {
        header("location: ../../index.php?signup=unvalidCharacters");
      }
      // elseIf Condition: Dubbele Gegevens winkel naam
      elseif ($rowCountWinkelNaam >= 1) {
        header("location: ../../index.php?signup=dubbleDataWinkel");
      }
      // elseIf Condition: Dubbele Gegevens winkel id
      elseif ($rowCountWinkelid >= 1) {
        header("location: ../../index.php?signup=dubbleDataWinkelId");
      }
      else{
        // $sqlInsert = "INSERT INTO stad (winkel_id, winkel_naam) VALUES ('$winkel_id', '$winkel');";
        // mysqli_query($conn, $sqlInsert);
        header("location: ../../index.php?signup=succes");
      }
     ?>
