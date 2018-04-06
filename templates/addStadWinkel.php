<select name="stadselect1">
   <option value="" disabled selected></option>
   <?php
      $stadselect1= $_POST['stadselect1'];
      $query2 = "SELECT naam FROM stad";

      $DBfetchproduct = mysqli_query($conn,$query2);
      while($product = mysqli_fetch_row($DBfetchproduct))
      {
        $stad =$product[0];

        echo'<option value="'.$stad.'">'.$stad.'</option>';
        }

      ?>
</select>
