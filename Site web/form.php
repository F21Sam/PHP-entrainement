<h1>Creation de compte</h1>


<form action="register.php">
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
        <label for="gender">genre</label>
        <p>
        Homme: <input type="radio" name="gender" /><br />
        Femme: <input type="radio" name="gender" /><br />
        Non binaire: <input type="radio" name="gender" />
        </p>
    </div>
<input type="submit" value="Valider">
</form>