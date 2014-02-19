<?php
include '../bootstrap.php';
$login = $_POST['login'];
$mdp = $_POST['mdp'];
$email = $_POST['email'];
$testlogin = mysql_query("SELECT * FROM users WHERE login = \"$login\" "); //WHERE 'login'= $login 
$resultlogin = mysql_num_rows($testlogin);
echo $resultlogin;
$testemail = mysql_query("SELECT * FROM users WHERE 'mail' = \"$email\" ");
$resultemail = mysql_num_rows($testemail);
echo $resultemail;
if($resultlogin == 0){  //login n'existe pas dans la base
    if($resultemail == 0){ //email n'existe pas dans la base
        //insertion dans la base
        $sql = mysql_query("INSERT INTO users VALUES(DEFAULT, \"$login\", md5(\"$mdp\"), NULL, \"$email\", NULL)");
        if(!$sql){
            echo"erreur d'enregistrement";
        }else{
            header('location: ../home.php?login='.$login.'&&mdp='.$mdp);
            
        }
    }else{
        echo "cet email est pris...";
    }
}else{
    echo "ce login est deja pris...";
}


?>