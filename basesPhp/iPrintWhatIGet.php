<?php
/*
http://localhost/exo2.php?toto=myvalue

$_GET;

$myArray = [63725,"gtrw",99,12]; // pour les tableau avant c'etait $myArray = array(.....)mais maintenant on peut faire myArray =[....]


var_dump($myArray);

echo($myArray[1]);

$myStringArray = ["firstname" => "Thibault"];

echo($myStringArray["firstname"]);
var_dump($_GET);
*/

function iPrintWhatIGet()
{

    $var = $_GET['data'];
    

    echo ("data=" . $var);

}

iPrintWhatIGet()

?>