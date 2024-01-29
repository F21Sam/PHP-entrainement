<h1>Creation de compte</h1>
<?php
if(isset ($_GET['error'])&& $_GET['error']){
echo ("Vous avez mal saisi une information!");
}
echo ("<br>");
echo ("<br>");
echo ("<br>");
?>
<form action="register.php" method="$_POST"  >
    <div>
        <label for="firstname">Prénom</label>
        <input id="firstname" type="text" name="firstname">
    </div>

    <div>
        <label for="lastname">Nom</label>
        <input id="lastname" type="text" name="lastname">
    </div>


    <div>
        <label for="email">Adresse mail</label>
        <input id="email" type="email" name="email">
    </div>
        
    <div>
        <label for="password">Mot de passe</label>
        <input id="password" type="password" name="password">
    </div>

    <div>
        <p>Genre</p>
        <label for="man">Homme</label>
        <input id="man"  type="radio" name="gender" value="man" /><br />
        <label for="women">Femme</label>
        <input id="woman"  type="radio" name="gender" value="woman" /><br />
        <label for="other">Autre</label>
        <input id="other"  type="radio" name="gender" value="other" /><br />
        
        
    </div>
<input type="submit" value="Valider">
</form>