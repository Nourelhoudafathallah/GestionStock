<?php
$conn=new mysqli ("localhost","root","","tech");
$id=$_REQUEST["id"];
$req="DELETE FROM contact WHERE id='$id'";
$conn->query("$req");
header ('Location: seecontact.php');
?>