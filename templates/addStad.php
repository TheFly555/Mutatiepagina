<div class="container border_cv">
  <div class="col-md-12">
    <h4>Voeg een stad toe aan de database:</h4>
    <form action="backend/add/addStad.php" method="post">
      <table>
        <tr>
          <td>
            <h4>Stad:</h4>
          </td>
          <td><input class="form-control" type="text" name="stad" placeholder="Stad" maxlength="25"></td>
        </tr>
        <tr>
          <td>
            <h4>Populatie:</h4>
          </td>
          <td><input class="form-control" type="number" name="populatie" placeholder="Populatie" maxlength="25"></td>
        </tr>
        <tr>
          <td>
            <h4></h4>
          </td>
          <td><button class="form-control" name="submitAddStad">Save</button></td>
        </tr>
      </table>
    </form>
  </div>
</div>
