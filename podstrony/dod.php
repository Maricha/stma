<?php
ini_set("session.use_cookies", 1);
ini_set("session.use_trans_sid", 0);
session_start();
$conn = mysql_connect('localhost', 'root', '');
$select_db = mysql_select_db('infoprem_stma') or die('<h2>ERROR</h2> Nie mo¿na sie podlaczyc do DB');

if (!$conn) {
                       die("Connection failed: " . mysql_connect_error());
                 }

if(isset($_POST['tytul']))
{
  $ty = $_POST['tytul'];
  $des = $_POST['opis'];
  $url=$_POST['url'];


$zmienna = mysql_query("INSERT INTO culture (Name, Description, Img_Url) VALUES ('$ty', '$des', '$url')");

if($zmienna)
{
        header('Location: zalogowany.php');

}
else
{

  echo "Nie udalo sie dodac";

}



}


?>
