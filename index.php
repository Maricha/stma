<?php
ini_set("session.use_cookies", 1);
ini_set("session.use_trans_sid", 0);
session_start();


if(isset($_SESSION['Email']))
{
  header('Location: ./podstrony/zalogowany.php');
}

?>
<!DOCTYPE html>
<html lang="pl">
<head>

<link rel="stylesheet" href="assets/css/bootstrap.css" />
<link rel="stylesheet" href="assets/css/bootstrap-theme.css" />
<link rel="stylesheet" href="assets/css/testy.css"  type="text/css"/>
<link rel="stylesheet" href="assets/css/bootstrap-social.css"/>
<link rel="stylesheet" href="assets/css/bootstrap-social.min.css"/>
<link rel="stylesheet" href="assets/css/font-awesome.css"/>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script src="assets/js/bootstrap.js"></script>
	<meta http-equiv="Content-type" content="text/html; charset=ISO-8859-2" />
	<title>Mrostar - Twoja encyklopedia wiedzy</title>
</head>
<body>


<nav class="navbar navbar-default navbar-static-top">
  <div class="container">
        

          <div class="col-md-10 ">
              <img src="img/3.png" />

          </div>
          <div class="col-md-2">
   <button type="button" class="btn btn-default btn-lg gora" onclick="location.href='podstrony/zaloguj.php'"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;
     Zaloguj się</button>
          </div>
  </div>

</nav>
<div class="container">
<div class="jumbotron bg">
<h1>Witaj na stronie </h1>
<p>Dołącz do nas!</p>



<button type="button" class="btn btn-default btn-lg" onclick="location.href='podstrony/zarejestruj.php'"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;
     Zarejestruj się</button>




</div>
</div>


<div class="container">

<div class="col-md-4">
<a href="#" class="thumbnail">
      <img src="http://kwadryga.blox.pl/resource/cz3.jpg" alt="...">
    </a>
<h2>Testy1</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>
<div class="col-md-4">
<a href="#" class="thumbnail">
      <img src="http://download.1wallpaper.net/20150331/books-hearts-originality-design-800x600.jpg" alt="...">
    </a>

<h2><?php echo $_SESSION['Id_User'];?></h2>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

</div>
<div class="col-md-4">
<a href="#" class="thumbnail">
      <img src="http://2.bp.blogspot.com/-7mGyx1SO-Jo/U5CN7dKAnZI/AAAAAAAAEe4/aum0P-HLcKs/s1600/P6050664.JPG" alt="...">
    </a>
<h2>Testy3</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>

</div>

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
</body>
</html>
