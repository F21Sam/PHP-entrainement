<?php
// Samassa Fanta Mamou :
// aucun
// ilan rossi : 


// EXAM - vous devez coder après chaque consigne directement dans ce fichier.

// 1 - Déclarer une variable nommé 'discord' et contenant la valeur 'rtfm'
//1pt
$discord = 'rtfm';
// 2 - Utiliser la fonction 'echo' pour afficher la valeur contenue dans la variable 'discord' suivi de deux retours a la ligne
//1pt
echo ('rtfm');
echo('<br/>');
echo('<br/>');

// 3 - Déclarer une fonction appellée 'coucou' qui affiche 'Hello' suivi de deux retours a la ligne quand on l'execute
//1pt
function coucou()
{
    echo('Hello');
}

// 4 - Executez la fonction 'coucou'
//1pt
coucou();
echo ("<br/>");
/* 5 - Déclarer une fonction 'myPrintUppercase' qui prends un parametre nommé 'string' et qui affiche la valeur recue en
 * parametre en lettres majuscules suivi de deux retours a la ligne quand on l'execute, puis executez cette fonction en
 * lui passant la valeur 'caps lock is cruise control for cool'.
*/
//2pt
function myPrintUppercase($string)
{
   echo strtoupper($string . "<br/>"."<br/>");
    
}
myPrintUppercase('caps lock is cruise control for cool');

/* 6 - Déclarer une fonction qui prends en parametre une chaine de caractère et qui affiche 'OK' si la chaine recue en
 * parametre est 'cool' et qui affiche 'KO' dans tout les autres cas, puis l'appelle une fois en lui passant la valeur 'pas cool'
 * puis une seconde fois en lui passant la valeur 'cool'. Dans tout les cas la fonction devra afficher un retour a la ligne avant de se terminer.
*/
//2pt
function question6($char)
{
  $char = "cool" ;
if ($char="cool" ){
    echo ($char ."= OK". '<br/>'); 
}else{
    echo ($char ."= KO".'<br/>'); 
}
}
question6("pas cool");
question6("cool");
/* 7 - Déclarer une fonction qui prends en parametre un tableau nommé 'words' et qui affiche chacune des valeurs contenues
 * dans le tableau en les séparant par des espaces, puis qui affiche deux retours a la ligne une fois toutes les valeurs affichées.
 * Enfin, executez la fonction en lui passant le tableau suivant : ['Luke,','je','suis','ton','père'];
*/
//3pt
function tab($words)
{
    foreach($words as $value) {
        echo $value . ' ';
    }
    echo "<br/><br/>";
}

tab(['Luke,','je','suis','ton','père']);

/* 8 - Déclarer une fonction nommée myMax qui prends en parametre un tableau de chiffres et qui RENVOIE la plus grande valeur
 * de ce tableau, puis l'appeller en lui passant le tableau suivant : $tab = [23, 42, 15, 16, 8, 4]; puis une seconde fois en lui
 * passant le tableau suivant : $tab = [999, 42, 1337, 16, 4, 50]; Pour chaque appel, vous devez recuperer - retourner - le resultat dans
 * une variable $result, puis afficher la variable $result en utilisant echo()
*/
//3pt

function myMax($numeros) {
    $max = $numeros[0];

    for ($i = 1; $i <= count($numeros); $i++) {
        if ($numeros[$i] > $max) {
            $max = $numeros[$i];
        }
    }

    return $max;
}

$tab1 = [23, 42, 15, 16, 8, 4];
$resultat1 = myMax($tab1);
echo $resultat1 . "<br/>";
$tab2 = [999, 42, 1337, 16, 4, 50];
$resultat2 = myMax($tab2);
echo $resultat2 . "<br/>";

/* 9 - Déclarer une fonction nommée reversePrint qui prends un tableau en parametre et qui affiche une par une toutes ses
 * valeurs suivi d'un retour a la ligne, mais dans l'ordre inverse du tableau (de la dernière valeur a la premiere valeur);
 * puis executez cette fonction une fois en lui passant la valeur : $tab = [999, 42, 1337, 16, 4, 50]; et une seconde fois en lui
 * passant la valeur : $tab = ['cinq', 'quatre', 'trois', 'deux, 'un'];
*/
//3pt
function reversePrint($array) {
    $value = count($array);

    for ($i = $value - 1; $i >= 0; $i--) {
        echo $array[$i] . "<br/>";
    }
}

$tab1 = [999, 42, 1337, 16, 4, 50];
echo reversePrint($tab1);

$tab2 = ['cinq', 'quatre', 'trois', 'deux', 'un'];
echo reversePrint($tab2);

/* 10 - Déclarer une fonction nommée 'bestEven' qui prends en parametre un tableau nommé 'numbers' et qui renvoie le plus
 * grand nombre pair contenu dans le tableau recu en parametre quand on l'éxécute. Puis executez cette fonction en lui passant
 * le tableau suivant : [1,2,3,4,5,6,12,23,36,42,55,69,73,81,2,99]
 * Enfin, récupérez la valeur de retour lors de l'execution de cette fonction et affichez la avec la fonction 'echo'
*/
//3pt

function bestEven($numbers) 
{

    foreach ($numbers as $value) {
        if ($value % 2 == 0 && $bestEven === null) {
            $bestEven = $value;
        }
    }

    return $bestEven;
}

$numbers = [1, 2, 3, 4, 5, 6, 12, 23, 36, 42, 55, 69, 73, 81, 2, 99];
$result = bestEven($numbers);

echo "Le plus grand nombre pair dans le tableau est : " . $result . "<br/>";

// BONUS - tri de liste: Déclarer une fonction capable de renvoyer un tableau d'entiers positifs après l'avoir trié dans l'ordre croissant
//	 - Executez cette fonction en lui passant le tableau suivant : [6,9,1,4,7,5,3,2,8]
//   - récuperez la valeur de retour dans une variable, puis affichez son contenu grace a la fonction var_dump()
//3pt
function tri(){

}
var_dump();