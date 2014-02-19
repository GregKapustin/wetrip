<?php
include '../bootstrap.php';
$login = $_POST['login'];
$mdp = $_POST['mdp'];
$query = mysql_query("SELECT * FROM users WHERE login = \"$login\"");
$result_compte = mysql_num_rows($query);
if($result_compte != 0){
    session_name("users");
    session_start();
    $_SESSION['login'] = $login;
    $_SESSION['mdp'] = $mdp;
    header('location: ../home.php?login='.$login.'&&mdp='.md5($mdp));
    
}else{
    echo"Votre compte n'existe pas, merci de vous inscrire!";
    header('loaction:index.php');
}
?>