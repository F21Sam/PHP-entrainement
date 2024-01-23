<?php
$user = "fanta";
$pass = "famamouqwerty";
$options = [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO ::FETCH_ASSOC
];
try {
    
    $dbh = new PDO('mysql:host=localhost;dbname=site', $user, $pass,$options);
}catch(PDOException $e){
    var_dump($e);
}

//$query=$dbh->query('SELECT * FROM users');

//$result = $query->fetchAll();

//var_dump($result);

?>



