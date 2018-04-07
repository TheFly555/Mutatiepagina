<?php
  //include database connect file
  include_once '../dbconnect.php';

  //Constanten
  $stadSelect = $_POST['connectStad'];
  $winkelSelect = $_POST['connectWinkel'];
  $filialen = $_POST['filialen'];

  //SQL count number of rows voor stad_winkel
  $sqlStadWinkel = "SELECT * FROM stad_winkel WHERE stad_id = $stadSelect AND winkel_id = '$winkelSelect';";
  $resultStadWinkel = mysqli_query($conn, $sqlStadWinkel);
  $rowCountStadWinkel = mysqli_num_rows($resultStadWinkel);

  //if Condition: check if submit button is clicked and redirect
  if (!isset($_POST['submitAddWinkel'])) {
    header("location: ../../index.php?signup=error");
  }
  //Elseif Condition: check if an input is empty and redirect
  elseif (empty($stadSelect) || empty($winkelSelect) || empty($filialen)) {
    header("location: ../../index.php?signup=empty");
  }
  //Elseif Condition: double data check and redirect
  elseif ($rowCountStadWinkel >= 1) {
    header("location: ../../index.php?signup=dubbleDataSW");
  }
  //Else condition: Add entry to the database
  else {
    $sqlInsert = "INSERT INTO stad_winkel (stad_id, winkel_id, aantal_filialen) VALUES ('$stadSelect', '$winkelSelect', '$filialen');";
    mysqli_query($conn, $sqlInsert);
    header("location: ../../index.php?signup=succes");
  }

?>
