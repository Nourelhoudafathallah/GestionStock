<?php
$conn=new mysqli ("localhost","root","","tech");
$nom=$_POST["name"];
$description=$_POST["description"];
$type=$_POST["type"];
$marque=$_FILES["marque"]["name"];
$image=$_FILES["image"]["name"];
$prix=$_POST["prix"];
$req="INSERT INTO produits (nom,description,type,prix,marque,image) VALUES ('$nom','$description','$type','$prix','$marque','$image')";
$conn->query("$req");
header ('Location: prod.php');

?>

