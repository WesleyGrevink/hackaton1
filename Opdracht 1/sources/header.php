
<!DOCTYPE html>
<html>
<head>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <title>Hackaton - Opdracht 1</title>
  <link rel="shortcut icon" type="image/x-icon" href="images/aarde.png" />
  <link rel="stylesheet" href="sources/css/main.css">
</head>
<body>


  <nav>
    <div class="container">
      <div class="nav-wrapper">
        <a href="#!" class="brand-logo"><i class="material-icons">flare</i></a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul style="margin-left: 45px;"class="left hide-on-med-and-down">
          <li><a href="index.php">Home</a></li>

        </ul>
        <ul class="right hide-on-med-and-down">


          <li><a class='dropdown-trigger btn' href='#'style="width: 15em;"  data-target='dropdown1'>Alle Continenten<i class="material-icons right">arrow_drop_down</i></a>
            <ul id='dropdown1' class='dropdown-content' >
              <li><a href="#!">Sluiten</a></li>
              <li><a href="europa.php">Europa</a></li>
              <li><a href="azie.php">Azië</a></li>
              <li><a href="noordamerika.php">Noord-Amerika</a></li>
              <li><a href="zuidamerika.php">Zuid-Amerika</a></li>
              <li><a href="antarctica.php">Antarctica</a></li>
              <li><a href="oceanie.php">Oceanië</a></li>
              <li><a href="afrika.php">Afrika</a></li>


            </ul></li>
          </ul>
        </div>
      </nav>

      <ul class="sidenav" id="mobile-demo">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">Javascript</a></li>
        <li><a href="mobile.html">Mobile</a></li>
      </ul>
    </div>

    <?php include ('sources/footer.php') ?>
  </body>
