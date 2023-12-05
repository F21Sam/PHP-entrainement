<?php

while (true) {
    echo "1. List all todos\n";
    echo "2. Add a new todo" . PHP_EOL;
    echo "3. Check an existing todo" . PHP_EOL;
    echo "4. Remove an existing todo" . PHP_EOL;
    echo "5. Change status of all todos" . PHP_EOL;
    echo "6. change description of an existing todo" . PHP_EOL;
    echo "7. Research for a todo" . PHP_EOL;
    echo "8. Quit" . PHP_EOL;
  
    $choice = readline("Choice: ");
    echo "Your choice is " . $choice . PHP_EOL;

    if ($choice === "1") {
        echo "Listing all todos" . PHP_EOL;
        // Lire le contenu du fichier JSON
        $jsonData = file_get_contents('todo.json');

        // Décoder le contenu JSON en un tableau PHP
        $todos = json_decode($jsonData, true);

        // Afficher les todos
        foreach ($todos as $todo) {
            // Mettre à jour le statut par défaut si le statut n'est pas défini
            if (!isset($todo['done'])) {
                $todo['done'] = "Undone";
            }
            echo 'ID : ' . $todo['id'] . ', Description : ' . $todo['description'] . ', Status : ' . ($todo['done']) . PHP_EOL;
        }
    } elseif ($choice === "2") {
        echo "Adding a new todo" . PHP_EOL;

        $randomPart = substr(uniqid(), -7); // Générer une chaîne aléatoire de 7 caractères
        $id = '656e22' . $randomPart; // Combiner avec la chaîne fixe pour former l'ID complet

        // Demander à l'utilisateur la description du nouveau todo
        $description = readline("Veuillez saisir la description du nouveau todo : ");

        // Créer un nouvel objet todo avec le statut par défaut "Undone"
        $newTodo = ['id' => $id, 'description' => $description, 'done' => "Undone"];

        // Lire le contenu du fichier JSON
        $jsonData = file_get_contents('todo.json');

        // Décoder le contenu JSON en un tableau PHP
        $todos = json_decode($jsonData, true);

        // Ajouter le nouvel objet todo au tableau des todos
        $todos[] = $newTodo;

        $jsonData = json_encode($todos);

        // Sauvegarder le contenu JSON dans le fichier
        file_put_contents('todo.json', $jsonData);

        echo "The new todo has been implemented successfully.";
    } elseif ($choice === "3") {
        echo "Checking a todo" . PHP_EOL;

        // Lire le contenu du fichier JSON
        $jsonData = file_get_contents('todo.json');
        // Décoder le contenu JSON en un tableau PHP
        $todos = json_decode($jsonData, true);

        // Demander à l'utilisateur l'ID du todo à vérifier
        $todoIdToCheck = readline("Veuillez saisir l'ID du todo à vérifier : ");

        $todoFound = false;

        // Parcourir les todos pour trouver celui avec l'ID spécifié
        foreach ($todos as &$todo) {
            if ($todo['id'] === $todoIdToCheck) {
                $todoFound = true;
                // Changer le statut de "Done" à "Undone" ou vice versa
                if ($todo['done'] === "Undone") {
                    $todo['done'] = "Done";
                    echo "La todo avec l'ID $todoIdToCheck a été marquée comme 'Done'." . PHP_EOL;
                } else {
                    $todo['done'] = "Undone";
                    echo "La todo avec l'ID $todoIdToCheck a été marquée comme 'Undone'." . PHP_EOL;
                }
                break;
            }
        }

        if (!$todoFound) {
            echo "Aucune todo trouvée avec l'ID $todoIdToCheck." . PHP_EOL;
        }

        // Réécrire les todos mis à jour dans le fichier JSON
        $jsonData = json_encode($todos);
        file_put_contents('todo.json', $jsonData);
    } elseif ($choice === "4") {
        echo "Remove a todo" . PHP_EOL;
        $jsonData = file_get_contents('todo.json');
        $todos = json_decode($jsonData, true);

        // Demander à l'utilisateur l'ID du todo à supprimer
        $todoIdToDelete = readline("Veuillez saisir l'ID du todo à supprimer : ");

        // Appeler la fonction de suppression
        deleteTodo($todos, $todoIdToDelete);

        // Sauvegarder le tableau mis à jour dans le fichier JSON
        $jsonData = json_encode($todos);
        file_put_contents('todo.json', $jsonData);
    } elseif ($choice === "5") {
        echo "Changing status of all todos" . PHP_EOL;
        changeStatusOfAllTodos($todos);
        // Sauvegardez le tableau mis à jour dans le fichier JSON
        $jsonData = json_encode($todos);
        file_put_contents('todo.json', $jsonData);

      } elseif ($choice === "6") {
        echo "Change a todo description" . PHP_EOL;

        // Lire le contenu du fichier JSON
        $jsonData = file_get_contents('todo.json');
        // Décoder le contenu JSON en un tableau PHP
        $todos = json_decode($jsonData, true);

      // Demander à l'utilisateur l'ID du todo à modifier
      $todoIdToModify = readline("Veuillez saisir l'ID du todo à modifier : ");

      $todoFound = false;

      // Parcourir les todos pour trouver celui avec l'ID spécifié
      foreach ($todos as &$todo) {
          if ($todo['id'] === $todoIdToModify) {
              $todoFound = true;
              // Demander à l'utilisateur la nouvelle description
              $newDescription = readline("Veuillez saisir la nouvelle description pour ce todo : ");
              $todo['description'] = $newDescription;
              echo "La description de la todo avec l'ID $todoIdToModify a été modifiée avec succès." . PHP_EOL;
              break;
          }
      }

      if (!$todoFound) {
          echo "Aucune todo trouvée avec l'ID $todoIdToModify." . PHP_EOL;
      }

      // Réécrire les todos mis à jour dans le fichier JSON
      $jsonData = json_encode($todos);
      file_put_contents('todo.json', $jsonData);

      } elseif ($choice === "7") {
      echo "Search a todo by description" . PHP_EOL;

      $jsonData = file_get_contents('todo.json');
      $todos = json_decode($jsonData, true);

      $descriptionToSearch = readline("Entrez la description de la todo a chercher: ");

      $foundTodo = false;

      foreach ($todos as $todo) {
          if (strpos($todo['description'], $descriptionToSearch) !== false) {
              echo 'ID : ' . $todo['id'] . ', Description : ' . $todo['description'] . ', Status : ' . $todo['done'] . PHP_EOL;
              $foundTodo = true;
              break;
          }
      }

      if (!$foundTodo) {
          echo "Aucune todo n'a cette description." . PHP_EOL;
      }
      
      } elseif ($choice === "8") {
      echo "Okay tanks bye" . PHP_EOL;
      break;
    } else {
        echo "Invalid choice" . PHP_EOL;
    }
} 

// Fonction pour supprimer un todo
function deleteTodo(&$todos, $todoId) {
    // Recherche de la todo avec l'identifiant donné
    $indexToDelete = -1;
    foreach ($todos as $index => $todo) {
        if ($todo['id'] === $todoId) {
            $indexToDelete = $index;
            break;
        }
    }

    // Suppression de la todo si trouvée
    if ($indexToDelete !== -1) {
        unset($todos[$indexToDelete]);
        echo "La todo avec l'ID $todoId a été supprimée avec succès." . PHP_EOL;
    } else {
        echo "Aucune todo trouvée avec l'ID $todoId." . PHP_EOL;
    }
}

// Fonction pour changer l'état de toutes les todos
function changeStatusOfAllTodos(&$todos) {
    $undoneFound = false;

    // Vérifiez si au moins une todo est dans l'état "undone"
    foreach ($todos as $todo) {
        if ($todo['done'] === "Undone") {
            $undoneFound = true;
            break;
        }
    }

    // Changez l'état de toutes les todos en fonction de la condition
    foreach ($todos as &$todo) {
        $todo['done'] = $undoneFound ? "Done" : "Undone";
    }

    echo "Toutes les todos ont été mises à jour avec succès." . PHP_EOL;
}
?>
