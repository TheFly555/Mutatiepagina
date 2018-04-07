<?php
  //include database connect file
  include_once '../dbconnect.php';

  //Constanten
  $winkel_id = $_POST['winkel_id'];
  $winkel = $_POST['winkel'];

  //SQL count number of rows: wnkel_naam
  $sqlSelectWinkel = "SELECT * FROM winkel WHERE winkel_naam = '$winkel';";
  $resultWinkelNaam = mysqli_query($conn, $sqlSelectWinkel);
  $rowCountWinkelNaam = mysqli_num_rows($resultWinkelNaam);

  //SQL count number of rows: wnkel_id
  $sqlSelectWinkelId = "SELECT * FROM winkel WHERE winkel_id = '$winkel_id';";
  $resultWinkelid = mysqli_query($conn, $sqlSelectWinkelId);
  $rowCountWinkelid = mysqli_num_rows($resultWinkelid);

  //if Condition: check if submit button is clicked and redirect
  if (!isset($_POST['submitAddWinkel'])) {
    header("location: ../../index.php?signup=error");
  }
  //Elseif Condition: check if an input is empty and redirect
  elseif (empty($winkel_id) || empty($winkel)) {
    header("location: ../../index.php?signup=empty");
  }
  //Elseif Condition: valid characters check and redirect
  elseif (!preg_match("/^[a-z]*$/", $winkel_id) || !preg_match("/^[ a-zA-Z-]*$/", $winkel)) {
    header("location: ../../index.php?signup=unvalidCharacters");
  }
  //Elseif Condition: double data check and redirect
  elseif ($rowCountWinkelNaam >= 1) {
    header("location: ../../index.php?signup=dubbleDataWinkel");
  }
  //Elseif Condition: double data check and redirect
  elseif ($rowCountWinkelid >= 1) {
    header("location: ../../index.php?signup=dubbleDataId");
  }
  //Else condition: Add entry to the database and redirect
  else{
    $sqlInsert = "INSERT INTO winkel (winkel_id, winkel_naam) VALUES ('$winkel_id', '$winkel');";
    mysqli_query($conn, $sqlInsert);
    header("location: ../../index.php?signup=succes");
  }
?>
