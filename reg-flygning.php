<!DOCTYPE html>
<html lang="no">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Eksamen - PRG1000 HBV">
  <meta name="author" content="Ølgruppa">
  <title>Bjarum Airlines - Ølgruppa</title>
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
  <script src="js/ajax-flygning.js"></script>
  <script src="js/elements.js"></script>
  <script src="js/validering.js"></script>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><img class="logo" src="images/logo.png" alt="Bjarum Airlines"></a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="index.php">Forsiden</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          Flyplasser
          <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li><a href="vis-flyplass.php">Vis</a></li>
          <li><a href="reg-flyplass.php">Registrer</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          Flyruter
          <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li><a href="vis-flyrute.php">Vis</a></li>
          <li><a href="reg-flyrute.php">Registrer</a></li>
        </ul>
      </li>
      <li class="dropdown active">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          Flygninger
          <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li><a href="vis-flygning.php">Vis</a></li>
          <li><a href="reg-flygning.php">Registrer</a></li>
        </ul>
      </li>
      <li><a href="vis-avgang.php">Avganger</a></li>
      <li><a href="vis-ankomst.php">Ankomster</a></li>
    </ul>
  </div>
</nav>
<div class="container">
  <div class="page-header">
    <h1>Bjarum Airlines <small>Registrer flygning</small></h1>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Fyll inn</h3>
    </div>
    <div class="panel-body">
      <form method="post" id="regflygning" name="regflygning" onsubmit="return validerFlyrute()" action="">
        <label>Flightnr:</label><input type="text" id="flightnr" name="flightnr" onmouseover="musInn(this)" onmouseout="musUt()" onfocus="fokus(this)" onblur="mistetFokus(this)" onchange="storeBokstaver(this)" onkeyup="storeBokstaver(this)" required /><br />
        <label>Flyrute:</label><select name="flyrute" onclick="vis(this.value)">
          <?php
          include("libs/reg-flygning.php");
          selectFlyrute();
          ?>
        </select><br />
        <label>Dato:</label><input type="text" id="dato" name="dato" onmouseover="musInn(this)" onmouseout="musUt()" onfocus="fokus(this)" onblur="mistetFokus(this)" required /><br />
        <label>&nbsp;</label><input type="submit" value="Registrer" id="submit" name="submit"><input type="reset" value="Nullstill" id="nullstill" name="nullstill" onclick="fjernMelding()"><br /><br />
      </form>
      <?php
      include("libs/validering.php");
      if(isset($_POST["submit"])) {
        $flightnr = trim($_POST["flightnr"]);
        $flyrute = trim($_POST["flyrute"]);
        $dato = trim($_POST["dato"]);
        if(!empty($flightnr) && !empty($flyrute) && !empty($dato)) {
          $lovligFlygning = validerFlygning();
          if($lovligFlygning) {
            regFlygning($flightnr, $flyrute, $dato);
          }
        }
        else {
          print("<div class='alert alert-danger' role='alert'>Skjemaet er ikke fyllt ut.</div>");
        }
      }
      ?>
      <div id="melding" class="alert-danger" role="alert"></div>
      <div id="respons" class="alert-info" role="alert"></div>
    </div>
  </div>
</div>
<footer class="footer">
  <div class="container">
    <p class="text">
      Laget av ølgruppa - <a href="kravspek.php">Sjekkliste til kravspek</a><br />
      Magnus Nordhagen, Steffen Unneberg, Christian Thun og Marius Norheim
    </p>
  </div>
</footer>
</body>
</html>