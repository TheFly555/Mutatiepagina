<?php
  $fullUrl = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

  //If condition: Alert box if not everythting is filled in
  if (strpos($fullUrl, "signup=empty") == true) {
    echo "<p class='alertText'>Je hebt niet alles ingevuld.</p> ";
  }
  //elseIf condition: Alert box if used restricted characters
  elseif (strpos($fullUrl, "signup=unvalidCharacters") == true) {
    echo "<p class='alertText'>Je gebruikt niet toegestane characters.</p> ";
  }
  //elseIf condition: Alert box if the winkel_id is filed with numbers
  elseif (strpos($fullUrl, "signup=geenLetter") == true) {
    echo "<p class='alertText'>Het winkel id mag geen cijfers bevatten.</p> ";
  }
  //elseIf condition: Alert box dubble data: stad name in table: stad
  elseif (strpos($fullUrl, "signup=dubbleDataStad") == true) {
    echo "<p class='alertText'>Er bestaat al een stad die de zelfde naam heeft.</p> ";
  }
  //elseIf condition: Alert box dubble data: winkel name in table: winkel
  elseif (strpos($fullUrl, "signup=dubbleDataWinkel") == true) {
    echo "<p class='alertText'>Er bestaat al een Winkel die de zelfde naam heeft.</p> ";
  }
  //elseIf condition: Alert box dubble data: winkel_id in table: winkel
  elseif (strpos($fullUrl, "signup=dubbleDataId") == true) {
    echo "<p class='alertText'>Er bestaat al een Winkel id zoals die je net hebt ingevoerd.</p> ";
  }
  //elseIf condition: Alert box dubble combo: stad_id and winkel_id in table: stad_winkel
  elseif (strpos($fullUrl, "signup=dubbleDataSW") == true) {
    echo "<p class='alertText'>Er bestaat al een combinatie als deze.</p> ";
  }
  //elseIf condition: Alert box if not used the form
  elseif (strpos($fullUrl, "signup=error") == true) {
    echo "<p class='alertText'>Je hebt geen formulier ingevuld.</p> ";
  }
  //elseIf condition: Succes box if everything is valid and the entry is added
  elseif (strpos($fullUrl, "signup=succes") == true) {
    echo "<p class='succesText'>Succesvol toegevoegd.</p> ";
  }
 ?>
