<?php

ini_set("session.use_cookies", 1);
ini_set("session.use_trans_sid", 0);
session_start();
mysql_connect('localhost', 'root', '');
@mysql_select_db(infoprem_stma) or die('<h2>ERROR</h2> Nie mo¿na sie podlaczyc do DB');



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="Content-type" content="text/html; charset=ISO-8859-2" />
  <title>Mrostar - Twoja encyklopedia wiedzy</title>
<link rel="stylesheet" href="../assets/css/bootstrap.css" />
<link rel="stylesheet" href="../assets/css/bootstrap-theme.css" />
<link rel="stylesheet" href="../assets/css/testy.css" />
<link rel="stylesheet" href="../assets/css/bootstrap-social.css"/>
<link rel="stylesheet" href="../assets/css/bootstrap-social.min.css"/>
<link rel="stylesheet" href="../assets/css/font-awesome.css"/>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script src="../assets/js/bootstrap.js"></script>
</head>
<body>

<nav class="navbar navbar-default navbar-static-top">
  <div class="container">

          <div class="col-md-3 ">
              <a href="zalogowany.php"><img src="../img/3.png" /></a>

          </div>

          <div class="btn-group gora col-md-1">
        <button type="button" class="btn btn-lg btn-primary dropdown-toggle" data-toggle="dropdown">
               Ksia&#197;&#188;ki <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" role="menu">
        <li><a href="#">Ksia&#197;&#188;ki</a></li>
        <li><a href="#">Inna akcja</a></a></li>
        <li><a href="#">Jeszcze inna akcja</a></li>
        <li class="divider"></li>
        <li><a href="#">Oddzielona akcja</a></li>
        </ul>
        </div>

        <div class="btn-group gora col-md-4">
        <button type="button" class="btn btn-lg btn-primary dropdown-toggle" data-toggle="dropdown">
                Menu <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" role="menu">
        <li><a href="#">M&#195;&#179;j profil</a></li>
        <li><a href="#">Inna akcja</a></a></li>
        <li><a href="#">Jeszcze inna akcja</a></li>
        <li class="divider"></li>
        <li><a href="#">Oddzielona akcja</a></li>
        </ul>
        </div>


         <div class="col-md-2 ">
              <p class="text-primary gora">Zalogowany jako: <br/> <?php echo $_SESSION['Nameview'] ?></p>
          </div>


      <div class="btn-group gora col-md-1">
        <button type="button" class="btn btn-lg btn-primary dropdown-toggle" data-toggle="dropdown">
                Menu <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" role="menu">
        <li><a href="#">M&#195;&#179;j profil</a></li>
        <li><a href="#">Inna akcja</a></a></li>
        <li><a href="#">Jeszcze inna akcja</a></li>
        <li class="divider"></li>
        <li><a href="#">Oddzielona akcja</a></li>
        </ul>
        </div>

    <div class="col-md-1">

    <a href="wyloguj.php" class="btn btn-primary btn-lg active gora " role="button">Wyloguj sie</a>

    </div>
</nav>

<div class="container">


<div class="jumbotron bg3">



</div>

<div class="col-md-3"></div>

<div class = "col-md-6">

    <div class="panel panel-default">
  <div class="panel-heading"><h3 class="panel-title"><strong>Dodaj książkę </strong></h3></div>
  <div class="panel-body">
   <form role="form" method="POST" action="dod.php">
  <div class="form-group">
    <label for="exampleInputName">Tytuł</label>
    <input type="text" class="form-control" id="exampleInputName" name="tytul" placeholder="Wpisz tytuł" required>
  </div>
  <div class="form-group">
   <label for="exampleInputOpis">Opis</label>
   <textarea class="form-control" id="exampleInputOpis" rows="5" name="opis" placeholder="Wpisz tutaj opis" required></textarea>
  </div>
   <div class="form-group">
    <label for="exampleInputUrl">Adres url okładki</label>
    <input type="url" class="form-control" id="exampleInputUrl" name="url" placeholder="Dodaj adres url" required>
  </div>
  <button type="submit" class="btn btn-sm btn-default">Dodaj</button>
</form>

</div>
</div>
</div>

<div class="col-md-3"></div>
</div>
</body>


<footer>
<br />
<hr />
<div class="col-md-2"></div>
<div class="col-md-7">@Mróz&Starmach Prime Developers Corporation S.A.</div>

<div class="col-md-3"><a class="btn btn-social-icon btn-google">
  <i class="fa fa-google"></i>
</a>

<a class="btn btn-social-icon btn-facebook">
  <i class="fa fa-facebook"></i>
</a>

<a class="btn btn-social-icon btn-twitter">
  <i class="fa fa-twitter"></i>
</a>
<br />
<br />

</div>
</footer>
</html>

