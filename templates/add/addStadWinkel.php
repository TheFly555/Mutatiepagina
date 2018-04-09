<?php include_once "../backend/dbconnect.php"; ?>
<div class="container border_cv">
  <div class="col-md-12">
    <h4></h4>
    <form action="../backend/add/addStadWinkel.php" method="post">
      <table>
        <tr>
          <td>
            <h4>Stad:</h4>
          </td>
          <td>
            <select class="form-control" name="connectStad">
              <option value="" disabled selected></option>
              <?php
                $sqlSelectStad = "SELECT * FROM stad;";
                $resultSelectStad = mysqli_query($conn, $sqlSelectStad);
                while ($rowSelectStad = mysqli_fetch_row($resultSelectStad)) {
                  echo "<option value='". $rowSelectStad[0] ."'>". $rowSelectStad[1] . "</option>";
                }
                ?>
            </select>
          </td>
        </tr>
        <tr>
          <td colspan="2">
            <center>
              <h4>Verbinden met:</h4>
            </center>
          </td>
        </tr>
        <tr>
          <td>
            <h4>Winkel:</h4>
          </td>
          <td>
            <select class="form-control" name="connectWinkel">
              <option value="" disabled selected></option>
              <?php
                $sqlSelectWinkel = "SELECT * FROM winkel;";
                $resultSelectWinkel = mysqli_query($conn, $sqlSelectWinkel);
                while ($rowSelectWinkel = mysqli_fetch_row($resultSelectWinkel)) {
                  echo "<option value='". $rowSelectWinkel[0] ."'>". $rowSelectWinkel[1] . "</option>";
                }
                ?>
            </select>
          </td>
        </tr>
        <tr>
          <td>
            <h4>Aantal filialen:</h4>
          </td>
          <td><input class="form-control" type="number" name="filialen" placeholder="Aantal Filialen" maxlength="25"></td>
        </tr>
        <tr>
          <td>
            <h4></h4>
          </td>
          <td><button class="form-control" name="submitAddWinkel">Save</button></td>
        </tr>
      </table>
    </form>
  </div>
</div>
