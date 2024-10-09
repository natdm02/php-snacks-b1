<?php
if (isset($_POST["title"]) && !empty ($_POST ["title"]) ){
// # e nella chiave done? se c'e' usala, altrimenti inizializza

// # recupero i dati nel file dischi. json
// % se sono acritti in un formato diverso da jaon trovo il modo di convertirli
$fileContent = file_get_contents("db/todolist. json");




// # converto il file json appena recuperato in un array associativo in php
$todolist = json_decode($fileContent, true);   //decodifico il json in unarrey associativo in php
//% ho qualcosa ricevuto via post nella chiave todo?
// # e nella chiave done? se c'e' usala, altrimenti inizializza done come false
//! prendo il dato ricevuto e 20 inserisco nella Lista appena recuperata da todolist.json

$newTodoItem = [
    "title" => $_POST ["TITLE"],
    "done"  => false,
];


//% trasformo i dati come voglio (aggiungo il nuovo todo item)
$todoList[] = $newTodoItem;
# converto il mio array associativo modificato in json
$newTodoListJson = json_encode ($todoList) ;
//! salvo i dati sovrascrivendo il file di prima
// * rispondo dicendo che e' tutto okau


file_put_contents("db/todolist.json",$newTodoListJson);


//! altrimenti li stampo in pagina avvertendo attraverso i response headers che si tratti di un json 
//header ("Content-Type: application/json");

    http_response_code(200);
}else{
    http_response_code(400);
}

?>




