<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");

    //include required models
    include_once '../config/database.php';
    include_once '../src/Museum.php';

    //initialize new connection to database
    $database = new Database();
    $db = $database->getConnection();
    $items = new Museum($db);

    //process query
    $statement = $items->getMuseums();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    $itemCount = $statement->rowCount();

    //prepare array for json format
    if ($itemCount > 0){
        $museumArray = array();
        $museumArray["itemCount"] = $itemCount;
        $museumArray["body"] = $result;

        echo json_encode($museumArray);
    }
    else{
        http_response_code(404);
        echo json_encode(
            array("message" => "No record found.")
        );
    }
