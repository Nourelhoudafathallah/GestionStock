<?php
$conn=new mysqli ("localhost","root","","tech");
$req="DELETE FROM produits";
$conn->query("$req");
header ('Location: prod.php');
?>
