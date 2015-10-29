<?php

$link = @mysql_connect('localhost', 'infoprem_stma', 'IKdlzLjT');
$baza_select = @mysql_select_db('infoprem_stma');
if (!$baza_select) { echo "Przerwa techniczna..."; }

/*

$email = $_GET('Email');
$namew = $_GET('Nameview;);
$password = $_GET('Password');

*/
?>
<table style="border: 1px solid black;">
<tr><td style="border:1px solid black;">Email</td><td style="border: 1px solid black;">Name</td><td style="border: 1px solid black;">Password</td></tr>

<?
$zapytanie = mysql_query("SELECT * FROM User");
while($odp = mysql_fetch_array($zapytanie))
{


echo <<<HTML


<tr>
<td style="border: 1px solid black;">$odp[Email]</td>
<td style="border: 1px solid black;">$odp[Nameview]</td>
<td style="border: 1px solid black;">$odp[Password]</td>

</td>
</tr>


HTML;


}
?>

</table>
<?


?>

