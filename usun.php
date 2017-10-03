<?php

session_start();
 
?>


<!doctype html>
<html lang="pl">
<head>
<meta charset="utf-8">
<title>Budowa stron WWW</title>


</head>


<body>
<?php
echo "Drewno:". " ".$_SESSION['drewno'];
echo("<br>");
echo "Kamien:". " ".$_SESSION['kamien'];
echo("<br>");
echo "Zboze:". " ".$_SESSION['zboze'];
echo("<br>");
echo "E-mail:". " ".$_SESSION['email'];
echo("<br>");
echo "Dni premium:". " ".$_SESSION['dnipremium'];
echo("<br>");
echo '<a href="czyszczenie.php">Usun</a>';
?>


</body>


</html>