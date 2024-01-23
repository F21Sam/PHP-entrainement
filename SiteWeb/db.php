<?php
$user = "root";
$pass = "";

try {
    
    $dbh = new PDO('mysql:host=localhost;dbname=site', $user, $pass);
}catch(PDOException $e){
    var_dump($e);
}

$query=$dbh->query('SELECT * FROM users');

$result = $query->fetchAll();

var_dump($result);

?>



