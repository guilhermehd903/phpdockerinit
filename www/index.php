<?php
// header("Content-Type: application/json");
// header("Access-Control-Allow-Origin: *");
// $con = new PDO("mysql:dbname=meudb;host=db", "gui", "123"); 
// $alunos = $con->query("SELECT * FROM aluno");
// $data = $alunos->fetchAll();
// if($data != false){
//     $json = json_encode($data, JSON_FORCE_OBJECT);
// }

// echo $json;
print_r($_SERVER['HTTP_HOST']);
?>