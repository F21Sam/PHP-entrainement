<?php

$mysqli = new mysqli("localhost", "root", "root", "todo_php");


if ($mysqli->connect_error) {
    die("La connexion à MySQL a échoué : " . $mysqli->connect_error);
}

while (true) {
   

    if ($choice === "1") {
        echo "Listing all todos" . PHP_EOL;
        $result = $mysqli->query('SELECT * FROM todos');
        while ($row = $result->fetch_assoc()) {
            echo 'ID : ' . $row['id'] . ', Description : ' . $row['description'] . ', Status : ' . $row['done'] . PHP_EOL;
        }
    } elseif ($choice === "2") {
        echo "Adding a new todo" . PHP_EOL;

        

        $stmt = $mysqli->prepare('INSERT INTO todos (id, description, done) VALUES (?, ?, ?)');
        $stmt->bind_param('sss', $newTodo['id'], $newTodo['description'], $newTodo['done']);
        $stmt->execute();

        echo "The new todo has been added successfully." . PHP_EOL;
    } elseif ($choice === "3") {
        

        $stmt = $mysqli->prepare('UPDATE todos SET done = ? WHERE id = ?');
        $stmt->bind_param('ss', $todo['done'], $todoIdToCheck);
        $stmt->execute();

        echo "La todo avec l'ID $todoIdToCheck a été mise à jour." . PHP_EOL;
    } elseif ($choice === "4") {
        echo "Remove a todo" . PHP_EOL;
        

        $stmt = $mysqli->prepare('DELETE FROM todos WHERE id = ?');
        $stmt->bind_param('s', $todoIdToDelete);
        $stmt->execute();

        echo "La todo avec l'ID $todoIdToDelete a été supprimée avec succès." . PHP_EOL;
    } elseif ($choice === "5") {
        echo "Changing status of all todos" . PHP_EOL;
        

        $stmt = $mysqli->prepare('UPDATE todos SET done = ?');
        $stmt->bind_param('s', $undoneFound ? 'Done' : 'Undone');
        $stmt->execute();

        echo "Toutes les todos ont été mises à jour avec succès." . PHP_EOL;
    }
   
}

$mysqli->close();
?>
