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

$_SESSION['drewno']=$_POST['drewno'];
$_SESSION['kamien']=$_POST['kamien'];
$_SESSION['zboze']=$_POST['zboze'];
$_SESSION['email']=$_POST['email'];
$_SESSION['dnipremium']=$_POST['dni'];
 
header('Location: index.php');



?>

</body>


</html>
