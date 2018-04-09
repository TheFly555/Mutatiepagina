<div class="container border_cv">
  <div class="col-md-12">
    <h4>Voeg een Winkel toe aan de database:</h4>
    <form action="../backend/add/addwinkel.php" method="post">
      <table>
        <tr>
          <td>
            <h4>Winkel id:</h4>
          </td>
          <td><input class="form-control" type="text" name="winkel_id" placeholder="Winkel id" maxlength="2"><label class="inputDescription">(voorbeeld: ah)</label></td>

        </tr>
        <tr>
          <td>
            <h4>Winkel:</h4>
          </td>
          <td><input class="form-control" type="text" name="winkel" placeholder="Winkel" maxlength="25"></td>
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
