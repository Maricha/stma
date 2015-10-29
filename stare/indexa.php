<?php
$connect = @mysql_connect("localhost", "infoprem_t5", "Darwin");
$select_db = @mysql_select_db("infoprem_t5");
if (!$select_db) { echo "Przerwa techniczna..."; }

if ($_GET["usun"]<>"")
{
$usun = $_GET["usun"];
$delete = mysql_query("DELETE FROM users WHERE id_usera='$usun';");
if ($delete) { echo "REKORD USUNIÊTY!"; }
}

$nazwa = $_POST["nazwa"];
$e_mail = $_POST["e_mail"];
$haslo = $_POST["haslo"];
$haslo = md5($haslo);
$admin = $_POST["admin"];

if ($nazwa<>"")
{
$insert = mysql_query("INSERT INTO users SET nazwa='$nazwa', e_mail='$e_mail', haslo='$haslo', admin='$admin';");
if ($insert) echo "Wykonano..."; 
}

echo <<<HTML

HTML;
?>
<hr />

<form method="post" action="?"> 
Nazwa:<br />
<input type="text" name="nazwa" /><br />
E-mail:<br />
<input type="text" name="e_mail" /><br />
Has³o:<br />
<input type="password" name="haslo" /><br />
Czy admin?<br />
<input type="radio" name="admin" value="1" />tak<br />
<input type="radio" name="admin" value="0" />nie<br />
<input type="submit" value="Dodaj u¿ytkownika" />
</form>


<hr />

<table style="border: 1px solid black;">
<tr><td style="border:1px solid black;">nazwa</td><td style="border: 1px solid black;">e-mail</td><td style="border: 1px solid black;">admin</td><td style="border: 1px solid black;">akcja</td></tr>
<?
$select = mysql_query("SELECT * FROM users");
while($answer=mysql_fetch_array($select))
{
if ($answer[admin]==1) { $admin = "administrator"; } else { $admin = ""; }
$i++;
echo <<<HTML
<tr>
<td style="border: 1px solid black;">$i. $answer[nazwa]</td>
<td style="border: 1px solid black;">$answer[e_mail]</td>
<td style="border: 1px solid black;">$admin</td>
<td style="border: 1px solid black;"><a href="?usun=$answer[id_usera]">usuñ</a>
<a href="edytuj.php?id_usera=$answer[id_usera]">edytuj</a>
</td>
</tr>
HTML;
}
?>
</table>