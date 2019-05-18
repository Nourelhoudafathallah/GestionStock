<?php
$conn=new mysqli ("localhost","root","","tech");
$id=$_REQUEST["id"];
$nom=$_POST["name"];
$description=$_POST["description"];
$type=$_POST["type"];
$marque=$_FILES["marque"]["name"];
$image=$_FILES["image"]["name"];
$prix=$_POST["prix"];
$req="UPDATE produits SET nom='$nom',description='$description',prix='$prix',image='$image',marque='$marque' WHERE id='$id'";
$conn->query("$req");
header ('Location: prod.php');

?>
