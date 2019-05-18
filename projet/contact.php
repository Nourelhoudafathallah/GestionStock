<?php
$conn=new mysqli ("localhost","root","","tech");
$nom=$_POST["name"];
$email=$_POST["email"];
$subject=$_POST["subject"];
$message=$_POST["message"];
$req="INSERT INTO contact (nom,email,sujet,message) VALUES ('$nom','$email','$subject','$message')";
$conn->query("$req");
header ('Location: index.php');
?>