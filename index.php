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
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!--JQuiry libriary-->
    <script src="Projects/overzicht/js/bootstrap.js"></script>
    <!--Javascript bootstrap-->
  </head>
  <body>
    <!--Navigation bar-->
    <div class="navbar navbar-inverse navbar-static-top" >
      <div class="container" style="">
        <!--Navbar brand-->
        <a class="navbar-brand" href="#">Mutatie pagina</a>
        <!--Navigation Button(for mobile)-->
        <button class="navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
        <!--Navigation bar tabs-->
        <div class="collapse navbar-collapse navHeaderCollapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="templates/addIndex.php">Insert</a></li>
            <!--Insert tab-->
            <li><a href="portfolio.php">Delete</a></li>
            <!--Delete tab-->
            <li><a href="portfolio.php">Update</a></li>
            <!--Update tab-->
          </ul>
        </div>
      </div>
    </div>
    <center>
    <!-- Content -->
    <div class="border_cv">
      <a href="templates/addIndex.php">Insert</a>
    </div>
    </center>
  </body>
</html>
