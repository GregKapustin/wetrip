<?php
include 'bootstrap.php';
//connection a la bdd
?>
<a href="#"><img src="fb_connect.jpg" /></a><!-- bouton fb connect a ajouter -->
<form action="post/login_post.php" method="post"><!-- Connection login-->
    <label>Connection login</label><br />
    <input type="text" name="login" value="login" /><br />
    <input type="password" name="mdp" value="mot de passe"/><br />
    <input type="submit" name="valider" value="valider"/>    
</form>
<form action="post/inscription_post.php" method="post"><!-- Connection email-->
    <label>inscription email</label><br />
    <input type="text" name="login" value="login" /><br />
    <input type="password" name="mdp" value="mot de passe"/><br />
    <input type="text" name="email" value="email" /><br/>
    <input type="submit" name="valider" value="valider"/>    
</form>