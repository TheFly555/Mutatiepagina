<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--scaling meta-->
    <link rel="icon" href="images\icon.png">
    <!--Icon website tab-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--Bootstap CSS-->
    <link rel="stylesheet" href="css/style.css">
    <!--Override CSS-->
    <title>Thijs de Vlieger</title>
    <!--Title-->
  </head>
  <body>
    <!--Navigation bar-->
    <div class="navbar navbar-inverse navbar-static-top" >
       <div class="container" style="">
          <a class="navbar-brand" href="#">Thijs de Vlieger</a><!--Navbar brand-->
          <!--Navigation Button(for mobile)-->
          <button class="navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <!--Navigation bar tabs-->
          <div class="collapse navbar-collapse navHeaderCollapse">
             <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php">Home</a></li>
                <!--Home tab-->
                <li><a href="portfolio.php">Portfolio</a></li>
                <!--Portfolio tab-->
                <li class="dropdown">
                   <!--Dropdown-->
                   <a href="#" class="dropdown-toggle" data-toggle = "dropdown">About me <b class="caret"></b></a> <!--About me Dropdown-->
                   <ul class="dropdown-menu">
                      <li><a href="oude_site/homepage.php">Oude site/layout</a></li>
                      <li><a href="cv.php">CV</a></li>
                      <li><a href="contact.php">Contact</a></li>
                   </ul>
                </li>
             </ul>
          </div>
       </div>
    </div>
    <!--Content-->
    <div class="container border_cv">
      <div class="col-md-12">
        <center>
          <h4>Voeg een stad toe aan de database:</h4>
        <form action="backend/addStad.php" method="post">
          <table>
            <tr>
              <td><h4>Stad: </h4></td>
              <td><input class="form-control" type="text" name="stad" placeholder="Stad"></td>
            </tr>
            <tr>
              <td><h4>Populatie: </h4></td>
              <td><input class="form-control" type="text" name="populatie" placeholder="Populatie"></td>
            </tr>
            <tr>
              <td><h4></h4></td>
              <td><button class="form-control" name="submit">Save</button></td>
            </tr>
          </table>
        </form>
      </center>
      </div>
    </div>





    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="crossorigin="anonymous"></script> <!--JQuiry libriary-->
    <script src="Projects/overzicht/js/bootstrap.js"></script> <!--Javascript bootstrap-->
  </body>
</html>
