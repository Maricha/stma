<?php
ini_set("session.use_cookies", 1);
ini_set("session.use_trans_sid", 0);
session_start();


if(!isset($_SESSION['Email']))
{

header("Location: ../index.php");

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
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
               Ksia&#191;ki <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" role="menu">
        <li><a href="#">Ksia&#191;ki</a></li>
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
        <li><a href="#">Mój profil</a></li>
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
        <li><a href="#">Mój profil</a></li>
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





<div class ="container " >


<nav class="navbar navbar-default"> <h1 style="text-align: center;">Najlepiej oceniane</h1> </nav>
<div class="col-lg-2 ks">
<img src="http://www.nlp-ewolucja.pl/images/nlp-ewolucja-big.jpg" height="200px" weight="150px" /><br/>
<z class="smiga">1</z><button type="button" class="btn btn-info btn-lg" style="margin-top:10px;">2,5</button>
</div>

<div class="col-lg-2 ks">
<img src="http://www.nlp-ewolucja.pl/images/nlp-ewolucja-big.jpg" height="200px" weight="150px" /> <br/>
<z class="smiga">2</z><button type="button" class="btn btn-info btn-lg" style="margin-top:10px;">2,5</button>
</div>

<div class="col-lg-2 ks">
<img src="http://www.nlp-ewolucja.pl/images/nlp-ewolucja-big.jpg" height="200px" weight="150px" />
<z class="smiga">3</z><button type="button" class="btn btn-info btn-lg" style="margin-top:10px;">2,5</button>
</div>

<div class="col-lg-2 ks">
<img src="http://www.nlp-ewolucja.pl/images/nlp-ewolucja-big.jpg" height="200px" weight="150px" />
<z class="smiga">4</z><button type="button" class="btn btn-info btn-lg" style="margin-top:10px;">2,5</button>
</div>

<div class="col-lg-2 ks">
<img src="http://www.nlp-ewolucja.pl/images/nlp-ewolucja-big.jpg" height="200px" weight="150px" />
<z class="smiga">5</z><button type="button" class="btn btn-info btn-lg" style="margin-top:10px;">2,5</button>
</div>

<div class="col-lg-2 ks">
<img src="http://www.nlp-ewolucja.pl/images/nlp-ewolucja-big.jpg" height="200px" weight="150px" />
<z class="smiga">6</z><button type="button" class="btn btn-info btn-lg" style="margin-top:10px;">2,5</button>
</div>

</div>


<hr/>


<div class ="container " >
<nav class="navbar navbar-default"> <h1 style="text-align: center;">Nowo dodane<h1> </nav>
<div class="col-lg-2 ks"></div>
<div class="col-lg-2 ks"></div>
<div class="col-lg-2 ks"></div>
<div class="col-lg-2 ks"></div>
<div class="col-lg-2 ks"></div>
<div class="col-lg-2 ks"></div>
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



