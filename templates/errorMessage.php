<?php
  $fullUrl = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

  if (strpos($fullUrl, "signup=empty") == true) {
    echo "<p class='alertText'>Je hebt niet alles ingevuld</p> ";
  }
  elseif (strpos($fullUrl, "signup=unvalidCharacters") == true) {
    echo "<p class='alertText'>Er zit een character bij die je niet mag gebruiken</p> ";
  }
  elseif (strpos($fullUrl, "signup=geenLetter") == true) {
    echo "<p class='alertText'>Het winkel id mag geen cijfers bevatten</p> ";
  }
  elseif (strpos($fullUrl, "signup=dubbleDataStad") == true) {
    echo "<p class='alertText'>Er bestaat al een stad die de zelfde naam heeft</p> ";
  }
  elseif (strpos($fullUrl, "signup=dubbleDataWinkel") == true) {
    echo "<p class='alertText'>Er bestaat al een Winkel die de zelfde naam heeft</p> ";
  }
  elseif (strpos($fullUrl, "signup=dubbleDataWinkelId") == true) {
    echo "<p class='alertText'>Er bestaat al een Winkel id die de zelfde naam heeft</p> ";
  }
  elseif (strpos($fullUrl, "signup=succes") == true) {
    echo "<p class='succesText'>Succesvol toegevoegd</p> ";
  }
 ?>
