<?
$connect = @mysql_connect("localhost", "infoprem_t5", "Darwin");
$select_db = @mysql_select_db("infoprem_t5");

$id_usera = $_GET["id_usera"];
$akcja = $_GET["akcja"];

$nazwa = $_GET["nazwa"];
$e_mail = $_GET["e_mail"];
$haslo = md5($_GET["haslo"]);
$admin = $_GET["admin"];

if ($akcja=="zmiana" && $id_usera<>"")
{
$update = mysql_query("UPDATE users SET
nazwa='$nazwa', e_mail='$e_mail', haslo='$haslo', admin='$admin' WHERE id_usera='$id_usera';");
if ($update) { echo "Zmiany wykonane prawid³owo..."; }
}

$select = mysql_query("SELECT * FROM users WHERE id_usera='$id_usera';");
$answer = mysql_fetch_array($select);
if ($answer[admin]==1) { $checked1 = "checked"; } else { $checked0 = "checked"; }
echo <<<HTML
<form method="get" action="?">
<input type="hidden" name="akcja" value="zmiana" />
<input type="hidden" name="id_usera" value="$answer[id_usera]" />
Nazwa:<br />
<input type="text" name="nazwa" value="$answer[nazwa]"/><br />
E-mail:<br />
<input type="text" name="e_mail" value="$answer[e_mail]"/><br />
Has³o:<br />
<input type="password" name="haslo" value="$answer[haslo]"/><br />
Czy admin?<br />
<input type="radio" name="admin" value="1" $checked1 />tak<br />
<input type="radio" name="admin" value="0" $checked0 />nie<br />

<input type="submit" value="Zmieñ..." />
</form>
HTML;
?>

<a href="index.php">powrót</a>