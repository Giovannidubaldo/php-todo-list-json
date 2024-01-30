<?php
    // Recupero l'array di oggetti nel file json
    $list_of_city = file_get_contents('todo-list.json');

    $cityList = json_decode($list_of_city, true);

    // Controllo che è stato inviato un nuovo elemento da aggiungere alla lista
    if(isset($_POST['text'])){
        $newText = $_POST['text'];
        $done = false;

        // Aggiungo l'elemento nella lista
        $city = [
            "text" => $newText,
            "done" => $done,
        ];

        $cityList[] = $city;

        // Salvo il nuovo contenuto file todo-lost.json
        file_put_contents('todo-list.json', json_encode($cityList));
    }

    if(isset($_POST['toggleIndex'])){
        $index = $_POST['toggleIndex'];

        if($cityList[$index]['done'] == true){
            $cityList[$index]['done'] = false;
        }
        else{
            $cityList[$index]['done'] = true;
        }

        file_put_contents('todo-list.json', json_encode($cityList));
    }
    
    header('Content-type: application/json');
    echo json_encode($cityList);
?>