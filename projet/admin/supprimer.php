<?php
$conn=new mysqli ("localhost","root","","tech");
$id=$_REQUEST["id"];
$req="DELETE FROM produits WHERE id='$id'";
$conn->query("$req");
header ('Location: prod.php');
?>
