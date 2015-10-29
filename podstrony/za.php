<?php
ini_set("session.use_cookies", 1);
ini_set("session.use_trans_sid", 0);
session_start();
mysql_connect('localhost', 'root', '');
mysql_select_db(infoprem_stma) or die('<h2>ERROR</h2> Nie mo¿na sie podlaczyc do DB');


$email = $_POST['login'];
$pass = $_POST['haslo'];


    if(isset($_POST['login']))
    {


        $query = mysql_query("SELECT * FROM `User` WHERE Email='$email' AND Password='$pass'");
        $row = mysql_fetch_array($query);
        if($row)
        {

            $_SESSION['zalogowany'] = true;
            $_SESSION['Id_User'] = $row['Id_User'];
            $_SESSION['Email'] = $row['Email'];
            $_SESSION['Nameview'] = $row['Nameview'];


            header('Location: http://infoprem.pl/stma/podstrony/zalogowany.php ');
        }

        else
        {

           echo '<p>Podany login i/lub has³o jest nieprawid³owe.</p>';
        }


   }


?>
