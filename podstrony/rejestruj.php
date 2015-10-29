<?php
ini_set("session.use_cookies", 1);
ini_set("session.use_trans_sid", 0);
ob_start();
$servername = "localhost";
$username = "root";
$password = "";
$conn = @mysql_connect($servername, $username, $password);
$select_db = mysql_select_db("infoprem_stma");
if (!$conn) {
die("Connection failed: " . mysql_connect_error());
    }


		$email = $_POST['amemail'];
		$password = $_POST['amhaslo'];
		$nameview = $_POST['amnazwa'];




		$ile=mysql_query("SELECT * FROM User WHERE Email = \"".$email."\"");


		if(mysql_fetch_array($ile))
		{





		echo '<script type="text/javascript">
		alert("NIE UDALO SIE");
		</script>';

		header('Location: ../index.php');




		}
else
{
$zmienna = mysql_query("INSERT INTO User SET Email='$email', Password='$password', Nameview='$nameview' ;");
if($zmienna)
{
header('Location: zarejestruj.php');

}}
ob_end_flush();
?>
