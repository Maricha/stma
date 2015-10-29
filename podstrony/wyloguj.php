<?php
ini_set("session.use_cookies", 1);
ini_set("session.use_trans_sid", 0);
ob_start();
session_start();
session_destroy();
echo 'Wylogowano';
header('Location: http://infoprem.pl/stma/index.php ');
?>