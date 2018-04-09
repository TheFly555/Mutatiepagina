<!DOCTYPE html>
<html>
  <?php include_once '__header.php'; ?>
  <body>
    <?php include_once '__nav.php'; ?>
    <center>
    <!-- Content -->
    <!-- alert bar when there is an error -->
    <?php include_once 'errorMessage.php'; ?>
    <!--Include Stad toevoegen form-->
    <?php include_once 'add\addStad.php'; ?>
    <br>
    <!--Include Winkel toevoegen form-->
    <?php include_once 'add\addWinkel.php'; ?>
    <br>
    <!--Include stad wnikel-->
    <?php include_once 'add\addStadWinkel.php'; ?>
    </center>
  </body>
</html>
