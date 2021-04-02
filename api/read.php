<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");

    include_once '../config/database.php';
    include_once '../src/Museum.php';

    $database = new Database();
    $db = $database->getConnection();

    $items = new Museum($db);

    $statement = $items->getMuseums();

    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

    $itemCount = $statement->rowCount();

    //echo json_encode($result);

    if ($itemCount > 0){
        $museumArray = array();
        $museumArray["itemCount"] = $itemCount;
        $museumArray["body"] = array();

        array_push($museumArray["body"], $result);

        echo json_encode($museumArray);
    }
    else{
        http_response_code(404);
        echo json_encode(
            array("message" => "No record found.")
        );
    }
