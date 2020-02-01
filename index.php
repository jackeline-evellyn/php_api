<?php

// A função explode divide o path
//o que vier na url será quebrado na barra
$path = explode('/', $_GET['path']);

//acessa o banco
$contents = file_get_contents('db.json');

//decodifica o banco
$json = json_decode($contents, true);

//pega o metodo que está sendo usado
$method = $_SERVER['REQUEST_METHOD'];

header('Content-type: application/json');
$body = file_get_contents('php://input');

if($method === 'GET'){
    if($json[path[0]]){
        echo json_encode($json[$path[0]]);
    }
    else{
        echo '[]';
    }
}