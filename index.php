
<?php

session_start();
if(  (isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
{
	header('Location:gra.php');
exit();
}
?>
<!doctype html>
<html lang="pl">
<head>
<meta charset="utf-8">
<title>Budowa stron WWW</title>


</head>


<body>
Tylko martwi ujrzeli koniec wojny-Platon

<form action="zaloguj.php" method="post">
Login
<br/>
<input type="text" name="login"/>
<br/>
Haslo
<br/>
<input type="password" name="haslo"/>
<br/>
<input type="submit" value="Zaloguj sie"/>


</form>

<?php
if(isset($_SESSION['blad']))
echo $_SESSION['blad'];
?>


</body> 

</html>