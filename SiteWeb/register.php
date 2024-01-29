<?php
global $dbh;
require_once("db.php");



echo ("Bonjour, " . $_GET["firstname"]);
echo ( "votre compte à bien été crée");
echo ("<br>");

echo ($_POST["password"]);

//check  si existe : isset()--
//nom,prenom au moins 2 char : strlen()
//preg_match()
//email : "^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$"
//password : "^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$"
//gender : in_array()
//Si pas respecter , rediger sur le formulaire : header()


// Vérification si les données sont définies avec isset()
 

    $nom = $_POST['name'];
    $prenom = $_POST['firstname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $error = false;
    // Vérification de la longueur du nom et du prénom
    if(isset($_POST['name']) && isset($_POST['firstname']) && strlen($name) < 2 || strlen($firstname < 2)) {
        
        $error = true;
       
    }

    // Vérification de l'email avec preg_match
    if((isset($_POST['email'])) && (!preg_match("/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/", $email))) {
        $error = true;
        
    }

    // Vérification du mot de passe avec preg_match
    if ((isset($_POST['password']))&&(!preg_match('/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/', $password))) {
        $error = true;
      
    }

    // Vérification du genre avec in_array
    $allowed_genders = array('man', 'woman', 'other');
    if((isset($_POST['gender']))&&(!in_array($gender, $allowed_genders))) {
        $error = true;
        
    }
    if ($error){
         // Redirection si des champs sont manquants
  
    header("Location: form.php?error=missing_fields");
    }
?>
