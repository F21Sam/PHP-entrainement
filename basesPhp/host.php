<?php
//affichage

echo('<h1> Hello World !</h1>');
 // les fonctions
function myFunction() {

}

myFunction();

function myHelloWorld() {

    echo("Hello World ! ");
}

myHelloWorld();

function myFunction($param) { //les parametres sont des variables dans les fonctions on peut en mettre plusieurs en separant par des variables

    myFunction(4)
}

//les variables
$myVar = 'hello world'; //chaine de charactere
echo('<br>');  // pour aller a la ligne
$myVar = 5;// les variables ne sont pas types donc on peut l'ecraser avec n'importe quel autre type en l'occurance ici un int
$myFloat = 5.6 ;// pas de virgule sur les floats
$myBoolean = true;
$myNull = null; // cette variable n'est pas vide mais null 

?>
