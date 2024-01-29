<?php
    // Recupero l'array di oggetti nel file json
    $list_of_city = file_get_contents('todo-list.json');

    header('Content-type: application/json');
    echo $list_of_city;
?>