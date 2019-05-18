<?php
$login_valide= "admin";
$pwd_valide= "admin";
$login= $_POST["login"];
$pwd= $_POST["password"];
if (isset($login) && isset($pwd))
{
    trim($login); trim($pwd);
    if ($login_valide == $login && $pwd_valide == $pwd)
    {
        header ('location: prod.php');
    }
    else
    {
        echo '<body onLoad="alert(\'Accès interdit!!\')">';
        echo '<meta http-equiv="refresh" content="3;URL=../index.php">';
    }  
}
else
{
    echo 'Variables manquantes!';
}
?>