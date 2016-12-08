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
      <li class="dropdown">
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
    <h1>Bjarum Airlines <small>Kravspesifikasjon</small></h1>
  </div>
  <div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading">
      <h3 class="panel-title">Sjekkliste</h3>
    </div>
    <div class="panel-body">
      <!-- Table -->
      <table class="table-hover" width="100%">
        <tr><th>Krav</th><th>Realisering</th></tr>
        <tr><td>Vis flyplasser</td><td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td></tr>
        <tr><td>Registrer flyplass</td><td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td></tr>
        <tr><td>Vis flyruter</td><td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td></tr>
        <tr><td>Registrer flyrute</td><td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td></tr>
        <tr><td>Vis flygninger</td><td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td></tr>
        <tr><td>Registrer flygning</td><td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td></tr>
        <tr><td>Vis ankomster</td><td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td></tr>
        <tr><td>Vis avganger</td><td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td></tr>
        <tr><td>HTML5 validering av inputfelt</td><td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td></tr>
        <tr><td>PHP validering av inputfelt</td><td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td></tr>
        <tr><td>JS validering av inputfelt</td><td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td></tr>
        <tr><td>JS hendelser (fokus/mistet fokus, mus inn/mus ut)</td><td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td></tr>
        <tr><td>Asynkron kommunikasjon med liste for avganger fra aktuell flyplass i 'Registrer flyrute'</td><td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td></tr>
        <tr><td>Menybasert applikasjon med stilark</td><td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td></tr>
        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
        <tr><th>Ekstra</th><th>&nbsp;</th></tr>
        <tr><td>Flyplasskode i 'Registrer flyplass' skal være unik</td><td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td></tr>
        <tr><td>Kombinasjonen av fraflyplass og tilflyplass i 'Registrer flyrute' skal være unik</td><td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td></tr>
        <tr><td>Flightnr i 'Registrer flygning' skal være unik</td><td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td></tr>
        <tr><td>Flyplasskode for fraflyplass i 'Registrer flyrute' skal være registrert i FLYPLASS.TXT</td><td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td></tr>
        <tr><td>Flyplasskode for tilflyplass i 'Registrer flyrute' skal være registrert i FLYPLASS.TXT</td><td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td></tr>
        <tr><td>Kombinasjonen av fraflyplass og tilflyplass i 'Registrer flygning' skal være registrert i FLYRUTE.TXT</td><td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td></tr>
        <tr><td>Validering av dato i 'Registrer flygning'</td><td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td></tr>
        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
        <tr><th>Smisking</th><th>&nbsp;</th></tr>
        <tr><td>Asynkron kommunikasjon med liste for flygninger imellom aktuell rute i 'Registrer flygning'</td><td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td></tr>
        <tr><td>En liste over tilgjengelige flyplasser i 'Avganger' printes ut fra FLYPLASS.TXT</td><td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td></tr>
        <tr><td>En liste over tilgjengelige flyplasser i 'Ankomster' printes ut fra FLYPLASS.TXT</td><td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td></tr>
      </table>
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