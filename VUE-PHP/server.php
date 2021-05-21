<?php
    include __DIR__ . '/database.php';

    header('Content-Type: application/json');

    // isset --> determine if a variable is declared and is different than null
    if(isset($_GET['genere']) && $_GET['genere'] != "") {

        //  Array cd filtered
        $databaseFiltred = [];

        foreach ($database as $item) {
            // strtolower --> Make a string lowercase
            // if item genre it's the same _GET genre
            if( strtolower($item['genre']) == strtolower($_GET['genere']) ) {
                // push item in databaseFiltered
                $databaseFiltred[] = $item;
            }
        }
        echo json_encode($databaseFiltred);

    } else {
        echo json_encode($database);
    }

?>