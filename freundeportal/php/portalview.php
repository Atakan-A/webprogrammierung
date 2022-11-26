<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portal</title>

    <?php
    include 'headimport.php';
    ?>

  </head>
  
  <body>

    <!--<div class="container-fluid">-->
    <div class="container">
      <br>
        <div class="page-header">
          <div class="row">
            <div class="col col-sm-2">
              <img src="../images/freunde_klein.png" 
              class="img-responsive" 
              width="130px">
            </div>
            <div class="col col-sm-10">
              <h1>Freunde Portal</h1><h4>verwalte deine Freunde :)</h4>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="portalview.php">Freunde 5.0</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="friends_overview.php">Freunde</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="friends_add.php">Hinzufügen</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Menü
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <br>

    	<div class="row">
    		<h1>Herzlich Willkommen</h1>
        <p>Schön, dass du hier bist <b>Anna Mustermann</b></p>
        <p>Du hast gerade <b>3</b> Freunde!</p>
    	</div>
    </div>

    <?php
    include 'footimport.php';
    ?>
  </body>

</html>